getAllSnacks();

//async call to retrieve all snacks

function getAllSnacks() {

  $.get('server/retrieve_fruits.php', function(data) {
    var div = '';
    var obj = JSON.parse(data);
    obj.forEach(function(snack) {
      div = div + '<div class="snack"><img class="snackimage" src="img/' +
      snack.image + '"/> <div class="snackname">'
       + snack.name + '</div><button onClick="vote(' + snack.id + ')" class="btn btn-danger votes" type="button">' +
       snack.votes + ' Vote</button></div>';
    });
    $('#snacks').html(div);

  }).catch(function(error) {
    console.log("Error " + error.status);
  });

}

//function to add votes

function vote(input_id) {

  $.get('server/voting_logic.php?id=' + input_id, function(result) {
    if (result) {
      console.log('Vote Logged! (+1)');
      getAllSnacks();
    } else {
      console.log('Error casting vote! :()');
    }
  }).catch(function(error) {
    console.log("Error" + error.status);
  });


}
