  $(function() {

  var app_id = '471424543338531';
  var scopes = 'public_profile,email';

  var btn_login = '<a href="#" id="login" class="boton_generico2">Facebook</a>';

  var div_session = "<div id='facebook-session'>"+
            "<div></div><br><br><br>"+
            "<strong></strong><br><br><br>"+
            "<img><br><br><br>"+
            "<a href='#' id='logout' class='boton_generico2'>Cerrar sesión</a>"+
            "</div>";

  window.fbAsyncInit = function() {

      FB.init({
        appId      : '471424543338531',
        status     : true,
        cookie     : true, 
        xfbml      : true, 
        version    : 'v3.1'
      });


      FB.getLoginStatus(function(response) {
        statusChangeCallback(response, function() {});
      });
    };

    var statusChangeCallback = function(response, callback) {
      console.log(response);
      
      if (response.status === 'connected') {
          getFacebookData();
      } else {
        callback(false);
      }
    }

    var checkLoginState = function(callback) {
      FB.getLoginStatus(function(response) {
          callback(response);
      });
    }

    var getFacebookData =  function() {
      FB.api('/me', function(response) {
        $('#login').after(div_session);
        $('#login').remove();

          $('#facebook-session div').html("<form action='php/funciones/sesion.php' method='POST' enctype='multipart/form-data'><input type='hidden' name='id_facebook' value='"+response.id+"' >");
          $('#facebook-session strong').html("<input type='hidden' name='nombre_fb' value='"+response.name+
            "'><input type='submit' class='boton_generico2' value='Next'></form>");
          $('#facebook-session img').attr('src','http://graph.facebook.com/'+response.id+'/picture?type=large');
        
    });
    }

    var facebookLogin = function() {
      checkLoginState(function(data) {
        if (data.status !== 'connected') {
          FB.login(function(response) {
            if (response.status === 'connected')
              getFacebookData();
          }, {scope: scopes});
        }
      })
    }

    var facebookLogout = function() {
      checkLoginState(function(data) {
        if (data.status === 'connected') {
        FB.logout(function(response) {
          $('#facebook-session').before(btn_login);
          $('#facebook-session').remove();
        })
      }
      })

    }



    $(document).on('click', '#login', function(e) {
      e.preventDefault();

      facebookLogin();
    })

    $(document).on('click', '#logout', function(e) {
      e.preventDefault();

      if (confirm("¿Está seguro?"))
        facebookLogout();
      else 
        return false;
    })

})