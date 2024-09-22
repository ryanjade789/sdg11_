<?php
include "../includes/config.php";
if(isset($_GET['other_id'])) //the other_id came from 11.3.7.php which was declared as variable to edit record
    {
      $other_id = $_GET['other_id']; 
    }
    
      // SQL query to select all the data from the table where researchid = $researchid
     $query = "SELECT * FROM `tbl11_3_7` WHERE `id` = $other_id";
     $result= mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) { 

        //the data inside [''] are the columns in db
        $support = $row['support'];
        $title = $row['title'];
        $desc = $row['desc'];
        $cost = $row['cost'];
        $source = $row['source'];
        
              
       
     }
        
         
            
 //Processing form data when form is submitted/ when update button is clicked
 if (isset ($_POST['update'])){
    $support = $_POST['support'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $cost = $_POST['cost'];
    $source = $_POST['source'];
    $points = ($support / 2 * 5);

      // SQL query to update the data in user table where the id = $other_id 
        $query ="UPDATE `tbl11_3_7` SET   `support` = '{$support}', `title` = '{$title}', `desc` = '{$desc}',
        `cost` = '{$cost}',`source` = '{$source}', `points` = '{$points}' WHERE `id`= $other_id";
        $update = mysqli_query($conn, $query);
        $successMessage = "You have successfully Updated data";
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
      <label for="support" class="text-center "> Total Number of Other Support for Arts and Heritage:</label>
      <textarea class="form-control" id="support" name="support" rows="3" value="" required><?php echo $support ?></textarea>
    </div>
    <div class="form-group"><i class="fa fa-area-chart"></i>
      <label for="title">Title of PPA:</label>
      <textarea class="form-control" id="title" name="title" rows="5" value="" required><?php echo $title ?></textarea>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="desc">Short Description:</label>
      <input type="text" class="form-control" id="desc" name="desc" value="<?php echo $desc ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="cost">Total Cost:</label>
      <input type="text" class="form-control" id="cost" name="cost" value="<?php echo $cost ?>" required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="source">Fund Source:</label>
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
<button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../11.3.7.php';">
    <i class="fa fa-times-circle"></i> Cancel
</button>
  <br>

</form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
