<?php 
if (isset($_POST['submit'])) {
  // Get form data
  $mis = $_POST['mis'];
  $fis = $_POST['fis'];
  $mv = $_POST['mv'];
  $fv = $_POST['fv'];
  $mww = $_POST['mww'];
  $fww = $_POST['fww'];
  $epp = $_POST['epp'];
  $totalIS = $mis + $fis;
  $total = $mv + $fv;
  $tww = $mww + $fww;
  $points = ($epp / 25) * 5;
  
  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl11_5_4` (`mis`, `fis`, `mv`,`fv`,`mww`,`fww`,`tww`, `totalIS`,`total`,`epp`,`points`) 
            VALUES ('$mis','$fis','$mv','$fv','$mww','$fww','$tww','$totalIS','$total','$epp','$points')";

  if ($conn->query($sql) === TRUE) {
      // The data was successfully entered
      $successMessage = "You have successfully entered data";
  } else {
      // There was an error in the SQL query
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the connection
  $conn->close();

}
include "includes/config.php";
$query = "SELECT SUM(points) as total_sum FROM tbl11_5_4";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error in query: " . mysqli_error($conn));
}

$totalPoints = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $points = $row['total_sum'];
    $totalPoints += $points;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>11.5.4 | Proportion of employees that practice remote working</title>

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
    margin-left: 350px;
    margin-right: 120px;
    margin-bottom: 70px;
    margin-top: 20px;
    height: 500px;

  }
  .content>p{
    text-align: justify;
    justify-content: justify-content;
  }
  .form-control{
    margin-right: 30px;
    display: block;
    width: 88%;
    height: 30px;
  }
  .form-row{

    height: 30px;
    
  }
  .contentform{
    margin-top: 30px;
    margin-left: 100px;
    margin-bottom:30px;
    justify-content: center;
    align-items: center;
    
  }
.btn{
    margin-bottom: 10px;

}
  /* remove muna pic 
.image{
  width: 50px;
  height: 50px;
}
  */
  .table-container{
    margin-left: 350px;
    margin-right: 50px;
    width:65%;
    overflow-x: auto; 
  }
  .h3text{
    justify-content:center;
    margin-left: 300px;
  }
  .points{
    box-shadow: grey;
  }
.fields{
    border-bottom: solid 1px #e9d6d6;
    margin-right: 25px;
}
/* css for confrim button */
.button-container {
        display: flex;
        align-items: center; /* Align items vertically */
    }

    .btn {
        margin-right: 10px; /* Adjust margin as needed */
    }

    .confirmation-text {
        margin: 0; /* Remove default margin for the paragraph */
    }

/* endddd */
</style>

<body>
<?php include('sidebar.php'); ?>

<!-- START OF HEADER POINTING SYSTEM -->
<div class="main">
  <h2>SDG 11 Sustainable Cities and Communities</h2>
  <div class="input-container">
    <p>Points</p>

<input type="text" style="color: black; text-align: center;" class="points" name="points" value="<?php echo min($totalPoints, 5); ?>" readonly>  
</div>
</div>

<!-- END OF HEADER POINTING SYSTEM -->

  <div class="content">
    <br>
    <h3>11.5.4 Proportion of employees that practice remote working</h3>
  <p>Measure and set targets for remote working practices of employees</p>


  </div>
 <div class="card">
<div class="contentform">
  <form method="POST" >

    <!-- FOR Total number of LET passers -->
<!--   <p><?php echo $percentage?>% of graduates who acquired a license have teaching 
qualifications to teach at primary level.</p> -->

<div class="form-group">
      <label for="mis" class="text-center ">Male employees that practice flexible work arrangements:</label>
      <textarea class="form-control" id="mis" name="mis" rows="1" required></textarea>
    </div>
    <div class="form-group">
      <label for="fis">Female employees that practice flexible work arrangements:</label>
      <textarea class="form-control" id="fis" name="fis" rows="1" required></textarea>
    </div>
    <div class="form-group">
      <label for="mv">Male employees that work remotely:</label>
      <input type="number" class="form-control" id="mv" name="mv" required>
    </div>
    <div class="form-group">
      <label for="fv">Female employees that work remotely:</label>
      <input type="number" class="form-control" id="fv" name="fv" required>
    </div>
    <div class="form-group">
      <label for="mww">Male employees that practice condensed working week:</label>
      <input type="number" class="form-control" id="mww" name="mww" required>
    </div>
    <div class="form-group">
      <label for="fww">Female employees that practice condensed working week:</label>
      <input type="number" class="form-control" id="fww" name="fww" required>
    </div>
    <div class="form-group">
      <label for="epp">employee population practice sustainable working arrangements</label>
      <input type="number" class="form-control" id="epp" name="epp" required>
    </div>
    
 
  <div>
    <button type="submit" class="btn btn-primary  mb-3" id="submit" name="submit" >
      <i class="fa fa-send"></i>Submit</button>
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
    </div><br>
  
</form>
  </div>
</div>
<!-- START OF TABLE -->
<div class="table-container">
  <h2>Public events</h2>           
  <table class="table table-bordered">
  <thead>
    <tr>
  <!--    <th scope="col" style="width: 30px;">#</th> -->
      <th scope="col" style="width: 50px;">Male employees that practice flexible work arrangements:</th>
      <th scope="col" style="width: 50px;">Female employees that practice flexible work arrangements</th>
      <th scope="col" style="width: 50px;">Male employees that work remotely</th>
      <th scope="col" style="width: 50px;">Female employees that work remotely</th>
      <th scope="col" style="width: 70px;">Male employees that practice condensed working week</th>
      <th scope="col" style="width: 70px;">Female employees that practice condensed working week</th>
      <th scope="col" style="width: 50px;">employee population practice sustainable working arrangements</th>
      <th scope="col" style="width: 50px;">Total number of employees that practice flexible work arrangements:</th>
      <th scope="col" style="width: 50px;">Total number or employees that work remotely:</th>
      <th scope="col" style="width: 50px;">Total number of employees that practice condensed working week:</th>
   <!--   <th scope="col" style="width: 50px;">Points</th>  -->
      <th scope="col"colspan="2"  style="width: 60px;">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php
            include "includes/config.php";
            $query = "SELECT * FROM `tbl11_5_4`"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            if (!$result) {
                die("Error: " . mysqli_error($conn)); // Output the error message for debugging
            }
            // Displaying all the data retrieved from the database using a while loop
            while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $mis = $row['mis'];
                  $fis = $row['fis'];
                  $mv = $row['mv'];
                  $fv = $row['fv'];
                  $mww = $row['mww'];
                  $fww = $row['fww'];
                  $epp = $row['epp'];
                  $tww = $row['tww'];
                  $totalIS = $row['totalIS'];
                  $total = $row['total'];
                  

          /*   $query = "SELECT Count(*) AS total FROM `tbl11_5_4`"; // SQL query to fetch all table data
                  $result = mysqli_query($conn, $query); // sending the query to the database
      
                  $totalPoints = 0;
      
                  while ($row = mysqli_fetch_assoc($result)) {
                      $total = $row['total'];
                     $totalno= $total;
      
                      // calculate points by dividing total number of PPAs by 2 and multiply by 5
                      $points = number_format(($totalno /2 * 5),2);
                      
                    
                      // Add the points  to the total points
                     
                  }     */         

                echo "<tr>";
               // echo "<td>{$id}</td>";
               echo "<td>{$mis}</td>";
               echo "<td>{$fis}</td>";
               echo "<td>{$mv}</td>";
               echo "<td>{$fv}</td>";
               echo "<td>{$mww}</td>";
               echo "<td>{$fww}</td>";
               echo "<td>{$tww}</td>";
               echo "<td>{$totalIS}</td>";
               echo "<td>{$epp}</td>";
               echo "<td>{$total}</td>";
                //echo "<td>$points</td>"; 
            

                echo "<td style='width:100px'>
                          <a href='edit/edit11.5.4.php?update&green_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete11.5.4.php?delete={$id}' class='btn btn-danger'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";

            /*    echo "<td class='text-center'>
                          <a href='delete11.5.4.php?delete={$id}' class='btn btn-danger'>
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
