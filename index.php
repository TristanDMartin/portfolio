<?php header( 'Location: /index.html' ) ; ?>

<?php 
// the message added
$msg = "first line of text\nsecond line of text";

//use woldwrap () if lines are longer than 70 characters
$msg = wordwrap($msg,70);

//send email
mail("tristanmartin88@gmail.com", "My subject", $msg);
?>
