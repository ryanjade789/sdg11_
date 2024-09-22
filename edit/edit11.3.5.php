<?php
include "../includes/config.php";
if(isset($_GET['arts_id'])) //the arts_id came from 11.3.5.php which was declared as variable to edit record
    {
      $arts_id = $_GET['arts_id']; 
    }
    
      // SQL query to select all the data from the table where researchid = $researchid
     $query = "SELECT * FROM `tbl11_3_5` WHERE `id` = $arts_id";
     $result= mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) { 

        //the data inside [''] are the columns in db
        $performances = $row['performances'];
        $pm = $row['pm'];
        $pf = $row['pf'];
        $choirIN = $row['choirIN'];
        $choirEX = $row['choirEX'];
        $theaterIN = $row['theaterIN'];
        $theaterEX = $row['theaterEX'];
        $danceIN = $row['danceIN'];
        $danceEX = $row['danceEX'];
        $bandIN = $row['bandIN'];
        $bandEX = $row['bandEX'];
        
       
     }
        
         
            
 //Processing form data when form is submitted/ when update button is clicked
 if (isset ($_POST['update'])){
    $performances = $_POST['performances'];
    $pm = $_POST['pm'];
    $pf = $_POST['pf'];
    $choirIN = $_POST['choirIN'];
    $choirEX = $_POST['choirEX'];
    $theaterIN = $_POST['theaterIN'];
    $theaterEX = $_POST['theaterEX'];
    $danceIN = $_POST['danceIN'];
    $danceEX = $_POST['danceEX'];
    $bandIN = $_POST['bandIN'];
    $bandEX = $_POST['bandEX'];
    $total = $pm + $pf;
    $points = ($performances / 4) * 4;

      // SQL query to update the data in user table where the id = $arts_id 
        $query ="UPDATE `tbl11_3_5` SET   `performances` = '{$performances}', `pm` = '{$pm}', 
        `pf` = '{$pf}', `choirIN` = '{$choirIN}', `choirEX` = '{$choirEX}', `theaterIN` = '{$theaterIN}',
        `theaterEX` = '{$theaterEX}',`danceIN` = '{$danceIN}', `danceEX` = '{$danceEX}', `bandIN` = '{$bandIN}', 
        `bandEX` = '{$bandEX}', `total` = '{$total}', `points` = '{$points}' WHERE `id`= $arts_id";

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
      <label for="performances" class="text-center "> Total Number of Performances</label>
      <textarea class="form-control" id="performances" name="performances" rows="3" value="" required><?php echo $performances ?></textarea>
    </div>
    <div class="form-group"><i class="fa fa-area-chart"></i>
      <label for="pm">Male Performers</label>
      <textarea class="form-control" id="pm" name="pm" rows="5" value="" required><?php echo $pm ?></textarea>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="pf">Female Performers</label>
      <input type="number" class="form-control" id="pf" name="pf" value="<?php echo $pf ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="choirIN">Internal Choir Performances</label>
      <input type="number" class="form-control" id="choirIN" name="choirIN" value="<?php echo $choirIN ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="choirEX">External Choir Performances</label>
      <input type="number" class="form-control" id="choirEX" name="choirEX" value="<?php echo $choirEX ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="theaterIN">Internal Theater Group Performances</label>
      <input type="number" class="form-control" id="theaterIN" name="theaterIN" value="<?php echo $theaterIN ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="theaterEX">External Theater Group Performances</label>
      <input type="number" class="form-control" id="theaterEX" name="theaterEX" value="<?php echo $theaterEX ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="danceIN">Internal Dance Group Performances</label>
      <input type="number" class="form-control" id="danceIN" name="danceIN" value="<?php echo $danceIN ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="danceEX">External Dance Group Performances</label>
      <input type="number" class="form-control" id="danceEX" name="danceEX" value="<?php echo $danceEX ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="bandIN">Internal Band Group Performances</label>
      <input type="number" class="form-control" id="bandIN" name="bandIN" value="<?php echo $bandIN ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="bandEX">External Band Group Performances</label>
      <input type="number" class="form-control" id="bandEX" name="bandEX" value="<?php echo $bandEX ?>" required>
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
<button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../11.3.5.php';">
    <i class="fa fa-times-circle"></i> Cancel
</button>
  <br>

</form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
