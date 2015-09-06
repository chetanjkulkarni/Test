<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.min.js"></script>
<style>
#header {
    background-color: #333 ;
    color:white;
    padding:2px;
    padding-left: 10px;	  
}
#nav {
    background-color:#eeeeee;
    height:400px;
    float:left;
    padding:5px;
    padding-left: 5px;	     
}	
#section {
    width:40%;
    float:left;
    padding:8px;	 	 
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	
}
a:link {
    color: white;
}
a:visited {
    color: white;
}
a:hover {
    color: white;
}
a:active {
    color: white;	 
}
</style>
</head>
<?php
    include('settings.php');
	$id=$_GET['id'];
    $sql = "select * from Movies_Data where id=".$id; 
    $result = mysql_query($sql, $con);
?>
<?php

    while ($row = mysql_fetch_array($result)) {
?>
 <?php
	$title=$row['title'];
	$director=$row['director'];
	$poster=$row['poster'];
	$actors=$row['actors'];
	$plot=$row['plot'];
	$genre=$row['genre'];
	$released=$row['released'];
	$imdb_rating=$row['imdb_rating'];
  }
?>
<div id="header">
<h1><?php echo $title ?></h1>
</div>

<div id="nav">
<img src="<?php echo $poster ?>" height="100%" width="100%"/></td>
</div>
<div id="section">
<p>
<?php echo $plot ?>
</p>
<p>
<b>Directed By</b>&nbsp; <?php echo $director ?>
</p>
<p>
<b>Genre</b>&nbsp; <?php echo $genre ?>
</p>
<p>
<b>Starcast</b>&nbsp; <?php echo $actors ?>
</p>
<p>
<b>Released On</b>&nbsp; <?php echo $released ?>
</p>
<p>
<b>IMDB Rating</b>&nbsp; <?php echo $imdb_rating ?>
</p>
</div>
<div id="footer">
<a href="index.php"><b>Home</b></a>
</div>
</body>
</html>
