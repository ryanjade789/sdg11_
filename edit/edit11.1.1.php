
<?php
include "../includes/config.php";
if(isset($_GET['research_id']))
    {
      $research_id = $_GET['research_id']; 
    }
    
      // SQL query to select all the data from the table where researchid = $researchid
     $query = "SELECT * FROM `tbl11_1_1` WHERE `total_research` = $research_id";
     $result= mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) { 
          
        //the data inside [''] are the columns in db
        $total_research = $row['total_research'];
        $title = $row['title'];
        $author = $row['author'];
        $year = $row['year'];
        $total_citation = $row['total_citation'];
        $source = $row['source'];
     }
        
         
            
 //Processing form data when form is submitted/ when update button is clicked
 if (isset ($_POST['update'])){
    //$total_research = $_POST['total_number'];
    $title = strtoupper($_POST['title']);
    $author = strtoupper($_POST['author']);
    $year = $_POST['year'];
    $total_citation = $_POST['citations'];
    $source = strtoupper($_POST['source']);

      // SQL query to update the data in user table where the id = $userid 
        $query ="UPDATE `tbl11_1_1` SET `title` = '{$title}', `author` = '{$author}',`year` = '{$year}',`total_citation` = '{$total_citation}',`source` = '{$source}' WHERE `total_research`= $research_id";
        $update = mysqli_query($conn, $query);
        $successMessage = "You have successfully updated data";
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDG 11.1.1 | Research on Sustainable Cities and Communities</title>

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
 
    <h3 class="h3text" style="color: red; font-weight: bolder">Research</h3>
    <div class="form-group"><i class="fa fa-bookmark"></i>
      <label for="title">Title of research</label>
      <textarea class="form-control" id="title"  name="title" rows="5" value="" required><?php echo $title ?></textarea>
    </div>
    <div class="form-group"><i class="fa fa-user"></i>
      <label for="author">Author</label>
      <input type="text" class="form-control" id="author"  name="author" value="<?php echo $author ?>" required>
      </div>
    <div class="form-group"><i class="fa fa-calendar"></i>
  <label for="year">Year of publication</label>
  <input type="text" class="form-control" id="year" name="year" value="<?php echo $year ?>" maxlength="4" placeholder="YYYY" required>
 </div>
    <div class="form-group"><i class="fa fa-bar-chart"></i>
      <label for="citations">Total number of citations</label>
      <input type="number" class="form-control" id="citations"  name="citations" value="<?php echo $total_citation ?>" required>
     </div>
    <div class="form-group"><i class="fa fa-book"></i>
      <label for="citations">Source</label>
      <textarea class="form-control" id="source"  name="source" value="" required><?php echo $source ?></textarea>
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
<button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../11.1.1.php';">
    <i class="fa fa-times-circle"></i> Cancel
</button>
  <br>

</form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>