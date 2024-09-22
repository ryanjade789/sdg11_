<?php 
if (isset($_POST['submit'])) {
  // Get form data
  
  $appa = $_POST['appa'];
  $mppa = $_POST['mppa'];
  $fppa = $_POST['fppa'];
  $title = $_POST['title'];
  $des = $_POST['des'];
  $cost = $_POST['cost'];
  $fund = $_POST['fund'];
  
  $ppa = $mppa + $fppa;
  $points = ($appa / 2) * 5;
  
  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl11_5_6` (`appa`,`ppa`,`mppa`,`fppa`, `title`, `des`,`cost`,`fund`,`points`) 
            VALUES ('$appa','$ppa','$mppa','$fppa','$title','$des','$cost','$fund','$points')";

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
$query = "SELECT SUM(points) as total_sum FROM tbl11_5_6";
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
<title>11.5.6 | Affordable housing for students</title>

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

    p {
    color: black;
}

b {
    color: black;
    font-weight: bold;
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
    <h3>11.5.6 Affordable housing for students</h3>
  <p>Provide affordable housing for students</p>

  <p>Total number of female students who live in their own house: <b>1894</b></p>
<p>Total number of male students who live in their own house: <b>1055</b></p>
<p>Total number of students who live in their own house: <b>2949</b></p>
<p>Total number of female students who are living with their relatives: <b>619</b></p>
<p>Total number of male students who are living with their relatives: <b>403</b></p>
<p>Total number of students who are living with their relatives: <b>1022</b></p>
<p>Total number of female students who stays at the boarding house: <b>166</b></p>
<p>Total number of male students who stays at the boarding house: <b>82</b></p>
<p>Total number of students who stays at the boarding house: <b>248</b></p>
<p>Total number of female students who rents apartment: <b>247</b></p>
<p>Total number of male students who rents apartment: <b>125</b></p>
<p>Total number of students who rents apartment: <b>372</b></p>
<p>Total number of female students who stays at the dormitory: <b>30</b></p>
<p>Total number of male students who stays at the dormitory: <b>12</b></p>
<p>Total number of students who stays at the dormitory: <b>42</b></p>
<p> </p>
<p><b>61.69%</b> of the students population live in their own house.</p>
<p><b>21.38%</b> of the students population are living with their relatives.</p>
<p><b>5.19%</b> of the students population stays at the boarding house.</p>
<p><b>7.78%</b> of the students population rent in the apartment.</p>
<p><b>0.88%</b> of the students population stays at the dormitory.</p>

  </div>

 <div class="card">
<div class="contentform">
  <form method="POST" >

    <!-- FOR Total number of LET passers -->
<!--   <p><?php echo $percentage?>% of graduates who acquired a license have teaching 
qualifications to teach at primary level.</p> -->



<div class="form-group">
      <label for="appa" class="text-center ">Total number of PPAs for affordable housing for students:</label>
      <textarea class="form-control" id="appa" name="appa" rows="1" required></textarea>
    </div>
    <div class="form-group">
      <label for="mppa" class="text-center ">Male students provided with housing:</label>
      <textarea class="form-control" id="mppa" name="mppa" rows="1" required></textarea>
    </div>
    <div class="form-group">
      <label for="fppa">Female students provided with housing:</label>
      <textarea class="form-control" id="fppa" name="fppa" rows="1" required></textarea>
    </div>
    <div class="form-group">
      <label for="title">Title of the PPA:</label>
      <textarea class="form-control" id="title" name="title" rows="1" required></textarea>
    </div>
    <div class="form-group">
      <label for="des">Short description:</label>
      <input type="text" class="form-control" id="des" name="des" required>
    </div>
    <div class="form-group">
      <label for="cost">Total cost:</label>
      <input type="number" class="form-control" id="cost" name="cost" required>
    </div>
    <div class="form-group">
      <label for="fund">Fund source:</label>
      <input type="number" class="form-control" id="fund" name="fund" required>
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
  <th scope="col" style="width: 50px;">Total number of PPAs for affordable housing for students:</th>
      <th scope="col" style="width: 50px;">Total number of students provided with housing:</th>
      <th scope="col" style="width: 50px;">Male students provided with housing:</th>
      <th scope="col" style="width: 50px;">Female students provided with housing:</th>
      <th scope="col" style="width: 50px;">Title of the PPA:</th>
      <th scope="col" style="width: 50px;">Short description:</th>
      <th scope="col" style="width: 50px;">Total cost:</th>
      <th scope="col" style="width: 70px;">Fund source:</th>
   <!--   <th scope="col" style="width: 50px;">Points</th>  -->
      <th scope="col"colspan="2"  style="width: 60px;">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php
            include "includes/config.php";
            $query = "SELECT * FROM `tbl11_5_6`"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            if (!$result) {
                die("Error: " . mysqli_error($conn)); // Output the error message for debugging
            }
            // Displaying all the data retrieved from the database using a while loop
            while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $appa = $row['appa'];
                  $ppa = $row['ppa'];
                  $mppa = $row['mppa'];
                  $fppa = $row['fppa'];
                  $title = $row['title'];
                  $des = $row['des'];
                  $cost = $row['cost'];
                  $fund = $row['fund'];
                  
                  

          /*   $query = "SELECT Count(*) AS total FROM `tbl11_5_6`"; // SQL query to fetch all table data
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
               echo "<td>{$appa}</td>";
               echo "<td>{$ppa}</td>";
               echo "<td>{$mppa}</td>";
               echo "<td>{$fppa}</td>";
               echo "<td>{$title}</td>";
               echo "<td>{$des}</td>";
               echo "<td>{$cost}</td>";
               echo "<td>{$fund}</td>";
              //  echo "<td>$points</td>"; 
            

                echo "<td style='width:100px'>
                          <a href='edit/edit11.5.6.php?update&green_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete11.5.6.php?delete={$id}' class='btn btn-danger'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";

            /*    echo "<td class='text-center'>
                          <a href='delete4.3.1.php?delete={$id}' class='btn btn-danger'>
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

