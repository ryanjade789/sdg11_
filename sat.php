<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sdg12</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
      .top{
    display: flex;
    height: 88px;
}
.top div{
    margin: auto 0;
    text-align: center;
    width: 100%;
}
    </style>
</head>
<body>
    <nav class="top"><div><h1>Sustainability Assessment Tool</h1></div></nav>
    <nav class="mid">
        <ul><li><a href="sat.php">SAT</a></li>
        <li><a href="sdg.php">Info</a></li>
        <li><a href="../../design2.php">Home Page</a></li></ul>
    </nav>
    <div class="content">
    <?php
    include "conn.php";
    $query = "SELECT Table_name as TablesName from information_schema.tables where table_schema = '$database'";
    $result=mysqli_query($conn,$query);
    $i=0;
      while($row= mysqli_fetch_row($result)){
        echo "<a href='sat/$i.php'><p>$row[0]</p><a>";
        $i++;
      }
    ?>
    </div>
</body>
</html>