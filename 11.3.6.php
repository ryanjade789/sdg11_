<?php 
if (isset($_POST['submit'])) {
  // Get form data
 // $total_number = $_POST['total_number'];
  $project =  strtoupper($_POST['project']);
  $title =  strtoupper($_POST['title']);
  $desc = strtoupper( $_POST['desc']);
  $cost = $_POST['cost'];
  $source =  $_POST['source'];

  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl11_3_6` (`project`,`title`, `desc`, `cost`, `source`)
   VALUES ('$project','$title', '$desc', '$cost', '$source')";

  if ($conn->query($sql) === TRUE) {
      // The research was successfully entered
      $successMessage = "You have successfully entered data";
  } else {
      // There was an error in the SQL query
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the connection
  $conn->close();
}


?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>11.3.6 | Record and preserve cultural heritage</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href= css/sidebar1.css>
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
    body {
  font-family: "Lato", sans-serif;
  background-color: white;
}

/* Main content */
.main {
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #FCF5ED;
  display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(253, 157, 36);
    font-family: Verdana, sans-serif;
    font-weight: bolder;
 
}
.points{
    width: 60px;
    height: 40px;
    border-radius: 15px;
  }
p{
    margin: 20px;
    font-size: 16px;
}
h2 {
    flex: 1; /* Allow h2 to grow to take available space */
  }

  .input-container {
    display: flex;
    align-items: center;
  }

  p {
    margin-right: 10px;
  }
  .content{
    margin-left: 300px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #C31F33;
  }
 
  .card{
    margin-left: 300px;
    margin-right: 50px;
    margin-bottom: 50px;
    margin-top: 20px;
  }
  .form-control{
    margin-right: 50px;
    display: block;
    width: 60%;
    height: 30px;
  }
  .container{
    margin-top: 30px;
    margin-left: 110px;
    margin-bottom:30px;
    margin-right:50px;
    justify-content: center;
    align-items: center;
  }
  /* remove muna pic 
.image{
  width: 50px;
  height: 50px;
}
  */
  .table-container{
    margin-left: 300px;
    margin-right: 50px;
    width:73%;
    overflow-x: auto; 
  }
  .h3text{
    justify-content:center;
    margin-left: 300px;
  }
  .points{
    box-shadow: grey;
  }
</style>

<body>
<?php include('sidebar.php'); ?>

<!-- START OF HEADER POINTING SYSTEM -->
<div class="main" style="background-color: rgb(253, 157, 36);">
  <h2>SDG 11 Sustainable Cities and Communities</h2>
  <div class="input-container">
    <p>Points</p>

    <?php
    include "includes/config.php";
    $query = "SELECT Count(*) AS total  FROM `tbl11_3_6`"; // SQL query to fetch all table data
    $result = mysqli_query($conn, $query); // sending the query to the database


    while ($row = mysqli_fetch_assoc($result)) {
        $total = $row['total'];
       $totalno= $total;

       $query = "SELECT * FROM `tbl11_3_6`"; // SQL query to fetch all table data
       $result = mysqli_query($conn, $query); // sending the query to the database
   
       if (!$result) {
         die("Error: " . mysqli_error($conn)); // Output the error message for debugging
       }
   
       // Initializing total points outside the loop
       $totalPoints = 0;
   
       // Displaying all the data retrieved from the database using a while loop
       while ($row = mysqli_fetch_assoc($result)) {
         $desc = $row['desc'];
   
         // Define source for different categories
         $local = 1;
         $regional = 2;
         $national = 3;
         $international = 4;
         $i = 1;
         $ptsR = 0;
       
      if ($desc === "LOCAL"){  
        $ptsR = $row['project'] * $local * $i;
      }
      else if ($desc === "REGIONAL"){
        $ptsR = $row['project'] * $regional * $i;
      }
      else if ($desc === "NATIONAL"){
        $ptsR = $row['project'] * $national * $i;
      }
      else if ($desc === "INTERNATIONAL"){
        $ptsR = $row['project'] * $international * $i;
      }
      else{
        $ptsR = 0;
      }

 
       // Add the points for the current research to the total points
       $totalPoints += $ptsR;
    }
  }
  
    ?>

<input type="text" style="color: black; text-align: center;  " class="points" name="points" value="<?php echo min($totalPoints, 4); ?>" readonly>  
</div>
</div>

<!-- END OF HEADER POINTING SYSTEM -->

  <div class="content">
    <br>
    <h3><b>11.3.6 Record and preserve cultural heritage</b></h3>
    <p>Deliver projects to record and preserve intangible cultural heritage
such as local folklore, traditions, language, and knowledge. This can
include the heritage of displaced communities.</p>
    <!--remove muna pic 
    <div class="image" style="width: 50px;"style="height: 50px;">
            <img src="img/rs.png" alt="Image">
        </div>
-->

  </div>
 <div class="card">

 <div class="container mt-3 d-flex">
  <form method="POST" class="flex-grow-1">
  <h3 class="h3text">Research</h3>

  <!--  <div class="mb-2 mt-2"><i class="fa fa-search"></i>
      <label for="total_number">Total number of research on early years and lifelong education</label>
      <input type="number" class="form-control" id="total_number"  name="total_number" required>
    </div>  -->
    <div class="mb-2">
    <i class="fa fa-bookmark"></i>
    <label for="project">Total Number of Projects Intended to Preserve Cultural Heritage:</label>
    <textarea class="form-control" id="project" name="project" rows="1" required></textarea>
</div>
<div class="mb-2 mt-2"><i class="fa fa-user"></i>
      <label for="title">Title of Project:</label>
      <input type="text" class="form-control" id="title"  name="title"required>
    </div>
    <div class="mb-2 mt-2"><i class="fa fa-user"></i>
      <label for="desc">Short Description (Local, National, Regional, or International):</label>
      <input type="text" class="form-control" id="desc"  name="desc"required>
    </div>
    <div class="mb-2">
  <i class="fa fa-calendar"></i>
  <label for="cost">Total Cost:</label>
  <input type="text" class="form-control" id="cost" name="cost" required>
</div>
    <div class="mb-2 mt-2"><i class="fa fa-book"></i>
      <label for="source">Fund Source:</label>
      <textarea class="form-control" id="source"  name="source" rows="1" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-3" name="submit"><i class="fa fa-send"></i>Submit</button>
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
    <button type="reset" class="btn btn-danger mb-3" name="cancel"><i class="fa fa-times-circle"></i> Cancel</button>
  </form>
  </div>
</div>

<div class="table-container">
  <h2>Researches</h2>           
  <table class="table table-bordered">
  <thead>
    <tr>
  <!--    <th scope="col" style="width: 30px;">#</th>
      <th scope="col" style="width: 30px;">Total Research</th>  -->
      <th scope="col" style="width: 200px;"> Total Number of Projects Intended to Preserve Cultural Heritage</th>
      <th scope="col" style="width: 200px;">Title of Project</th>
      <th scope="col" style="width: 100px;">Short Description</th>
      <th scope="col" style="width: 100px;"> Total Cost </th>
      <th scope="col" style="width: 150px;"> Fund Source</th>
      <th scope="col" style="width: 50px;">Points</th>
      <th scope="col"colspan="2"  style="width: 100px;">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php
            include "includes/config.php";
            $query = "SELECT * FROM `tbl11_3_6`"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            if (!$result) {
                die("Error: " . mysqli_error($conn)); // Output the error message for debugging
            }
            // Displaying all the data retrieved from the database using a while loop
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
                $project = $row['project'];
                $title = $row['title'];
                $desc = $row['desc'];
                $cost = $row['cost'];
                $source = $row['source'];

                   $local = 1;
                   $regional = 2;
                   $national = 3;
                   $international = 4;
                   $i = 1;
                   $ptsR = 0;

                if ($desc === "LOCAL"){
                  $ptsR = $project * $local * $i;
                }
                else if ($desc === "REGIONAL"){
                  $ptsR = $project * $regional * $i;
                }
                else if ($desc === "NATIONAL"){
                  $ptsR = $project * $national * $i;
                }
                else if ($desc === "INTERNATIONAL"){
                  $ptsR = $project * $international * $i;
                }

                echo "<tr>";
               // echo "<td>{$id}</td>";
               // echo "<td>{$total_number}</td>";
                echo "<td>{$project}</td>";
                echo "<td>{$title}</td>";
                echo "<td>{$desc}</td>";
                echo "<td>{$cost}</td>";
                echo "<td>{$source} </td>";
                echo "<td>$ptsR</td>"; 
            

                echo "<td style='width:100px'>
                          <a href='edit/edit11.3.6.php?update&research_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete11.3.6.php?delete={$id}' class='btn btn-danger'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";

            /*    echo "<td class='text-center'>
                          <a href='delete_4.1.php?delete={$id}' class='btn btn-danger'>
                              <i class='fa fa-trash'></i>
                          </a>
                      </td>";
                echo "</tr>"; 
                */
            }
            ?>
    </tbody>
  </table>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>

  //this is js for sidebar panel
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</body>
</html> 

