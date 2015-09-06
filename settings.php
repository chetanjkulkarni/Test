   <?php 
//connect to mysql db
    $con = mysql_connect("localhost","chetandb","ubuntu123") or die('Could not connect: ' . mysql_error());
//connect to the Movie database
    mysql_select_db("Movies", $con);
?>
