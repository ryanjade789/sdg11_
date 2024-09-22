<?php
include "../includes/config.php";
if(isset($_GET['green_id'])) //the green_id came from 11.3.4.php which was declared as variable to edit record
    {
      $green_id = $_GET['green_id']; 
    }
    
      // SQL query to select all the data from the table where researchid = $researchid
     $query = "SELECT * FROM `tbl11_5_5` WHERE `id` = $green_id";
     $result= mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) { 

        //the data inside [''] are the columns in db
        $appa = $row['appa'];
        $mppa = $row['mppa'];
        $fppa = $row['fppa'];
        $title = $row['title'];
        $des = $row['des'];
        $cost = $row['cost'];
        $fund = $row['fund'];
    
   
              
     }
        
         
            
 //Processing form data when form is submitted/ when update button is clicked
 if (isset ($_POST['update'])){
    $appa = $_POST['appa'];
    $mppa = $_POST['mppa'];
    $fppa = $_POST['fppa'];
    $title = $_POST['title'];
    $des = $_POST['des'];
    $cost = $_POST['cost'];
    $fund = $_POST['fund'];
    
    $ppa = $mppa + $fppa;
    $points = ($appa / 2) * 5;

      // SQL query to update the data in user table where the id = $green_id 
      $query = "UPDATE `tbl11_5_5` SET 
    `appa` = '{$appa}', 
    `ppa` = '{$ppa}', 
    `mppa` = '{$mppa}', 
    `fppa` = '{$fppa}', 
    `title` = '{$title}', 
    `des` = '{$des}', 
    `cost` = '{$cost}', 
    `fund` = '{$fund}', 
    `points` = '{$points}'
WHERE `id` = $green_id";


        $update = mysqli_query($conn, $query);
        $successMessage = "You have successfully Updated data";
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDG 11.3.1 | Public Access to Buildings </title>


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
  <div class="form-group">

  

<div class="form-group">
    <label for="appa" class="text-center">Total number of PPAs for affordable housing for employees:</label>
    <textarea class="form-control" id="appa" name="appa" rows="1" required><?php echo $appa ?></textarea>
</div>

<div class="form-group">
    <label for="mppa" class="text-center">Male employees provided with housing:</label>
    <textarea class="form-control" id="mppa" name="mppa" rows="1" required><?php echo $mppa ?></textarea>
</div>

<div class="form-group">
    <label for="fppa">Female employees provided with housing:</label>
    <textarea class="form-control" id="fppa" name="fppa" rows="1" required><?php echo $fppa ?></textarea>
</div>

<div class="form-group">
    <label for="title">Title of the PPA:</label>
    <textarea class="form-control" id="title" name="title" rows="1" required><?php echo $title ?></textarea>
</div>

<div class="form-group">
    <label for="des">Short description:</label>
    <input type="text" class="form-control" id="des" name="des" value="<?php echo $des ?>" required>
</div>

<div class="form-group">
    <label for="cost">Total cost:</label>
    <input type="number" class="form-control" id="cost" name="cost" value="<?php echo $cost ?>" required>
</div>

<div class="form-group">
    <label for="fund">Fund source:</label>
    <input type="number" class="form-control" id="fund" name="fund" value="<?php echo $fund ?>" required>
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
<button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../11.5.5.php';">
    <i class="fa fa-times-circle"></i> Cancel
</button>
  <br>

</form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>