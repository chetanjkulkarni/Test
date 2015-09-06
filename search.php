<!DOCTYPE html>
<html>
<?php
    include('settings.php');
    $keyword = $_POST['name'];
    $sql = "select id,title from Movies_Data where title like'%" . $keyword . "%' OR director like'%" . $keyword . "%' OR plot 		   like'%" . $keyword . "%'";
    $result = mysql_query($sql, $con);
    $numRows= mysql_num_rows ($result);
    if($numRows > 0)
    {
	echo "Found&nbsp;".$numRows."&nbsp;matches";
	while ($row = mysql_fetch_array($result)) {
	$id= $row['id'];
        $title = $row['title'];
	echo "<tr>";
        echo "<td><a href=\"movie_result.php?id=$id\" target=\"_blank\">$title</a></td>";
        echo "</tr>";
	}
    }
    else
    {
	echo "No match found";
    }
?> 
