<?php
include "../includes/config.php";

if(isset($_GET['research_id'])) {
    $research_id = $_GET['research_id'];
}

if (isset($_POST['update'])) {
    $project = $_POST['project'];
    $title = $_POST['title'];
    $desc = strtoupper( $_POST['desc']);
    $cost = $_POST['cost'];
    $source = $_POST['source'];

    $local = 1;
    $regional = 2;
    $national = 3;
    $international = 4;
    $i = 1;
    $ptsR = 0;
    $totalPoints = 0;

    if ($desc === "LOCAL") {
        $ptsR = $project * $local * $i;
    } else if ($desc === "REGIONAL") {
        $ptsR = $project * $regional * $i;
    } else if ($desc === "NATIONAL") {
        $ptsR = $project * $national * $i;
    } else if ($desc === "INTERNATIONAL") {
        $ptsR = $project * $international * $i;
    } else {
        $ptsR = 0;
    }
    $totalPoints += $ptsR;

    // SQL query to update the data in user table where the id = $research_id
    $query = "UPDATE `tbl11_3_6` SET `project` = '$project', `title` = '$title', `desc` = '$desc',
        `cost` = '$cost', `source` = '$source' WHERE `id`= $research_id";

    $update = mysqli_query($conn, $query);

    if ($update) {
        $successMessage = "You have successfully Updated data";
    } else {
        $errorMessage = "Error updating data: " . mysqli_error($conn);
    }
}

// Retrieve data from the database
$query = "SELECT * FROM `tbl11_3_6` WHERE `id` = $research_id";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $project = $row['project'];
    $title = $row['title'];
    $desc = $row['desc'];
    $cost = $row['cost'];
    $source = $row['source'];
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDG 11.3.3 | Public Access to Museums </title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href= css/sidebar.css>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- for icons */  -->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <!--- for table __-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.card{
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 50px;
    margin-top: 20px;
    background-color: white;
    box-shadow: 0px 20px 20px rgba(0.1, 0.1, 0.1, 0.1);
  }
.form-group{
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 10px;
}
h3{
    text-align: center;
}
.btn-primary {
    margin-left: 50px;
}
.btn-danger {
    margin-left: 5px;
}
</style>
</head>
<body>
    
<div class="card"> 
<form method="POST">
  <h3 class="h3text" style="color: red; font-weight: bolder">Update Information</h3>
    <div class="form-group"><i class="fa fa-bar-chart"></i>
      <label for="project" class="text-center ">Total Number of Projects Intended to Preserve Cultural Heritage:</label>
      <textarea class="form-control" id="project" name="project" rows="3" value="" required><?php echo $project ?></textarea>
    </div>
    <div class="form-group"><i class="fa fa-area-chart"></i>
      <label for="title">Title of Project</label>
      <textarea class="form-control" id="title" name="title" rows="3" value="" required><?php echo $title ?></textarea>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="desc">Short Description (Local, National, Regional, or International):</label>
      <textarea class="form-control" id="desc" name="desc" rows="3" value="" required><?php echo $desc ?></textarea>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="cost"> Total Cost:</label>
      <input type="number" class="form-control" id="cost" name="cost" value="<?php echo $cost ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="source"> Fund Source: </label>
      <input type="text" class="form-control" id="source" name="source" value="<?php echo $source ?>" required>
    </div>
  
   
   <button type="submit" class="btn btn-primary mt-6 mb-3" name="update"><i class="far fa-edit"></i>Update</button>
   <script type="text/javascript">
                <?php
                if (isset($successMessage)) {

                    echo "swal({
        title: 'Success',
        text: '$successMessage',
        icon: 'success',
        button: 'OK'
    });";
                }
                ?>
            </script>
<button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../11.3.6.php';">
    <i class="fa fa-times-circle"></i> Cancel
</button>
  <br>

</form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
