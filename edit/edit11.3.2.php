<?php
include "../includes/config.php";
if(isset($_GET['libraries_id'])) //the libraries_id came from 11.3.2.php which was declared as variable to edit record
    {
      $libraries_id = $_GET['libraries_id']; 
    }
    
      // SQL query to select all the data from the table where researchid = $researchid
     $query = "SELECT * FROM `tbl11_3_2` WHERE `id` = $libraries_id";
     $result= mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) { 

        //the data inside [''] are the columns in db
        $mis = $row['mis'];
        $fis = $row['fis'];
        $mv = $row['mv'];
        $fv = $row['fv'];
        $tis = $row['tis'];
        $tig = $row['tig'];
        
       
     }
        
         
            
 //Processing form data when form is submitted/ when update button is clicked
 if (isset ($_POST['update'])){
    $mis = $_POST['mis'];
    $fis = $_POST['fis'];
    $mv = $_POST['mv'];
    $fv = $_POST['fv'];
    $tis = $_POST['tis'];
    $tig = $_POST['tig'];
    $totalIS = $mis + $fis;
    $total = $mv + $fv;
    $points = ($total / 25) * 5;

      // SQL query to update the data in user table where the id = $libraries_id 
        $query ="UPDATE `tbl11_3_2` SET   `mis` = '{$mis}', `fis` = '{$fis}', `mv` = '{$mv}', `fv` = '{$fv}', `tis` = '{$tis}', `tig` = '{$tig}', `totalIS` = '{$totalIS}', `total` = '{$total}', `points` = '{$points}' WHERE `id`= $libraries_id";
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
    <div class="form-group"><i class="fa fa-bar-chart"></i>
      <label for="mis" class="text-center "> Male Internal Stakeholders</label>
      <textarea class="form-control" id="mis" name="mis" rows="3" value="" required><?php echo $mis ?></textarea>
    </div>
    <div class="form-group"><i class="fa fa-area-chart"></i>
      <label for="fis">Female Internal Stakeholders</label>
      <textarea class="form-control" id="fis" name="fis" rows="5" value="" required><?php echo $fis ?></textarea>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="mv">Male Visitors</label>
      <input type="number" class="form-control" id="mv" name="mv" value="<?php echo $mv ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="fv">Female Visitors</label>
      <input type="number" class="form-control" id="fv" name="fv" value="<?php echo $fv ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="tis">Total Books/Publication Borrowed by Internal Stakeholders</label>
      <input type="number" class="form-control" id="tis" name="tis" value="<?php echo $tis ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="tig">Total Books/Publication Borrowed by Guest</label>
      <input type="number" class="form-control" id="tig" name="tig" value="<?php echo $tig ?>" required>
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
<button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../11.3.2.php';">
    <i class="fa fa-times-circle"></i> Cancel
</button>
  <br>

</form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
