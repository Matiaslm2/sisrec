/**
 * @author alf
 * @copyright 2022
 * @ver 2.0
 */

 function decodeJwtResponse(token) {
  var base64Url = token.split('.')[1];
  var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
  var jsonPayload = decodeURIComponent(window.atob(base64).split('').map(function(c) {
    return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
  }).join(''));

    return JSON.parse(jsonPayload);
  }

class loginGoogle {

  constructor() {}

  handleCredentialResponse(response) {
    //console.log("Encoded JWT ID token: " + response.credential);
    const responsePayload = decodeJwtResponse(response.credential);
    //console.log("Email: " + responsePayload.email);
    //console.log("email_verified: " + responsePayload.email_verified);
    //console.log("name: " + responsePayload.name);
    //console.log("picture: " + responsePayload.picture);


    if (responsePayload.email !== '') {
      var dados = {
        userName: responsePayload.name,
        userImageURL: responsePayload.picture,
        userEmail: responsePayload.email
      };
      $.post('valida.php', dados, function(retorna) {
        //alert(retorna);
        //console.log(retorna.localeCompare("erro"));
        //console.log(retorna);
        if (retorna == 0) {
          var msg = "O/A " + responsePayload.name + " não tem acesso ao sistema!";
          document.getElementById('msg').innerHTML = msg;
        } else {
          //alert ("não deu erro não não")
          //console.log(retorna);
          window.location.href = retorna
        }
      });
    } else {
      var msg = "Não está nenhuma utilizador autenticado";
      document.getElementById('msg').innerHTML = msg;
      var x = document.getElementsByClassName("logout");
      for (var i = 0; i < x.length; i++) {
        x[i].disabled = true;
      }
    }
  }
}

window.onload = function() {
  var lg = new loginGoogle();
  google.accounts.id.initialize({
    client_id: "436091069232-moniedchatfl00inv0lkpojdlo9nftbn.apps.googleusercontent.com",
    callback: lg.handleCredentialResponse
  });
  google.accounts.id.renderButton(
    document.getElementById("buttonDiv"), //name of the div within the button
    {
      theme: "filled_blue",
      size: "large"
    } // customization attributes
  );
  google.accounts.id.prompt(); // also display the One Tap dialog
}
