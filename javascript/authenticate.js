//makes an async call to authenticate the user


function authenticate() {

  $.post('server/authentication.php', $('#login').serialize(), function(data) {
    console.log(data);
    if (data == 1) {
      window.location = '/symplicity/vote.html';
    } else {
      alert('Oops! Wrong Username or Password');
    }

  }).catch(function(error) {
    console.log('Error: ' + error.status);
  });

}
