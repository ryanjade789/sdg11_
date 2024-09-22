<?php include "template.php"?>
<div class="content">
<form action ="0.php" method = "POST">
<h2>12.1.1 research on responsible consumption and production</h2>
<div class="inputs">
<span><label for="title">Title: </label><input name ="title" type="text" placeholder="AkoBudoy"></span>
<span><label for="author">Author: </label><input name="author" type="text" placeholder="Jack"></span>
<span><label for="year">Year: </label><input name = "year"type="number" placeholder="2013"></span>
<span><label for="citation">No. of citation: </label><input name = "citation"type="number" placeholder="12"></span>
</div>
<input class="submit" name="save" type="submit" value="submit"></input>
</form>
<?php
if (isset($_POST['save'])) { 
    $name=$_POST['title']; 
    $author=$_POST['author'];
    $year=$_POST['year'];
    $citation=$_POST['citation'];

    $query= "INSERT INTO `12.1.1 research on responsible consumption and production`(`title`, `author`, `year`, `citation`) VALUES ('$name','$author','$year','$citation')";
    $add = mysqli_query($conn, $query); 
} 

?>
<div class="result">
    <?php
    $select ="SELECT MAX(`id`)FROM `12.1.1 research on responsible consumption and production`";
    $result=mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    $x=$row[0];
    echo"<p>Total Number of Research: $x</p>";

    $select2 = "SELECT SUM(`citation`) FROM `12.1.1 research on responsible consumption and production`";
    $result2=mysqli_query($conn, $select2);
    $row2 = mysqli_fetch_array($result2);
    $y =$row2[0];
    $point =$x*$y;
    echo"<p>Weight=$y</p> <p>POINTS = $point</p>";

    ?>
</div>
</div>
</body>
</html>