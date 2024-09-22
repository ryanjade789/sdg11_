<?php include "template.php"?>
<div class="content">
<form action ="1.php" method = "POST">
<h2>12.2.1 Ethical sourcing policy</h2>
<div class="inputs">
<span><label for="title">Title: </label><input name ="title" type="text" placeholder="AkoBudoy"></span>
<span><label for="desc">Short description of the PPA: </label><input name="desc" type="text" placeholder="Jack"></span>
<span><label for="cost">Total Cost: </label><input name="cost" type="text" placeholder="P12.00"></span>
<span><label for="year">Fund source: </label><input name = "fund"type="text" placeholder="2013"></span>
<span><label for="ppa">Total number of PPAs implemented in accordance to the policy: </label><input name = "ppa"type="number" placeholder="12"></span>
</div>
<input class="submit" name="save" type="submit" value="submit"></input>
</form>
<?php
if (isset($_POST['save'])) { 
    $name=$_POST['title']; 
    $desc=$_POST['desc'];
    $cost=$_POST['cost'];
    $fund=$_POST['fund'];
    $tot=$_POST['ppa'];

    $query= "INSERT INTO `12.2.1 Ethical sourcing policy`(`totalnum`, `description`, `cost`, `fund`,`PPa`) VALUES ('$name','$desc','$cost','$fund','$tot')";
    $add = mysqli_query($conn, $query); 
} 

?>
<div class="result">
    <?php
    $select ="SELECT MAX(`totalnum`)FROM `12.2.1 Ethical sourcing policy`";
    $result=mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    $x=$row[0];
    echo"<p>Total number of ethical sourcing policy: $x</p>";

    $select2 = "SELECT SUM(`PPa`) FROM `12.2.1 Ethical sourcing policy`";
    $result2=mysqli_query($conn, $select2);
    $row2 = mysqli_fetch_array($result2);
    $tot = $row2[0];
    $z = round($tot/2);
    $point =$x + $z;

    echo"<p>POINTS = $point</p>";

    ?>
</div>
</div>
</body>
</html>