<!DOCTYPE html>
<html>
<head> <title> Review a song!</title> </head>

<?php
session_start();
echo 'Greetings ' . $_SESSION['username'] . '! Tell us about the song you would like to review! :D <br \> <br \>';
// echo ('Currently logged in as: ' . session_id($_GET['username']) . '<br \>');
echo ('Currently logged in as: ' . $_SESSION['username'] . '<br \>');
echo ('<br \><br \>');
?>

<body>
<!-- <legend><h2>Tell us about the song you'd like to add :)</h2></legend> -->
<form name="frmContact" method="post" action="addsong2.php">
<!-- 
<p> <label for="Name">Username </label>
<input type="text" name="username" id="username"  placeholder="Username"> </p> -->

<p> <label for="Artist">Artist</label>
<input type="text" name="artist" id="artist" placeholder="Artist name"> </p>

<p> <label for="Song">Song</label>
<input type="text" name="song" id="song" placeholder="Song title"></p>

<p> <label for="Rating">Rating</label>
<textarea name="rating" id="rating" placeholder = "Number 1-5"></textarea> </p>


<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</body>
</html>