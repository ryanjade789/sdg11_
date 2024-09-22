<?php 
if (isset($_POST['submit'])) {
  // Get form data
  $mis = $_POST['mis'];
  $fis = $_POST['fis'];
  $mv = $_POST['mv'];
  $fv = $_POST['fv'];
  $tis = $_POST['tis'];
  $tig = $_POST['tig'];
  $totalIS = $mis + $fis;
  $total = $mv + $fv;
  $points = ($total / 25) * 5;
  
  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl11_3_2` (`mis`, `fis`, `mv`,`fv`,`tis`,`tig`, `totalIS`,`total`,`points`) 
            VALUES ('$mis','$fis','$mv','$fv','$tis','$tig','$totalIS','$total','$points')";

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
$query = "SELECT SUM(points) as total_sum FROM tbl11_3_2";
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
<title>SDG 11.3.2 | Public Access to Libraries</title>

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
    <h3>11.3.2 Public access to libraries</h3>
  <p>Provide public access to libraries including books and publications</p>


  </div>
 <div class="card">
<div class="contentform">
  <form method="POST" >


<div class="form-group">
      <label for="mis" class="text-center ">Male Internal Stakeholders</label>
      <textarea class="form-control" id="mis" name="mis" rows="1" required></textarea>
    </div>
    <div class="form-group">
      <label for="fis">Female Internal Stakeholders</label>
      <textarea class="form-control" id="fis" name="fis" rows="1" required></textarea>
    </div>
    <div class="form-group">
      <label for="mv">Male Visitors</label>
      <input type="number" class="form-control" id="mv" name="mv" required>
    </div>
    <div class="form-group">
      <label for="fv">Female Visitors</label>
      <input type="number" class="form-control" id="fv" name="fv" required>
    </div>
    <div class="form-group">
      <label for="tis">Total Books/Publication Borrowed by Internal Stakeholders</label>
      <input type="number" class="form-control" id="tis" name="tis" required>
    </div>
    <div class="form-group">
      <label for="tig">Total Books/Publication Borrowed by Guest</label>
      <input type="number" class="form-control" id="tig" name="tig" required>
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
      <th scope="col" style="width: 50px;">Male Internal Stakeholders</th>
      <th scope="col" style="width: 50px;">Female Internal Stakeholders</th>
      <th scope="col" style="width: 50px;">Male Visitors</th>
      <th scope="col" style="width: 50px;">Female Visitors</th>
      <th scope="col" style="width: 70px;">Total Books/Publication Borrowed by Internal Stakeholders</th>
      <th scope="col" style="width: 70px;">Total Books/Publication Borrowed by Guest</th>
      <th scope="col" style="width: 50px;">Total Internal Stakeholders</th>
      <th scope="col" style="width: 50px;">Total Visitors</th>
   <!--   <th scope="col" style="width: 50px;">Points</th>  -->
      <th scope="col"colspan="2"  style="width: 60px;">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php
            include "includes/config.php";
            $query = "SELECT * FROM `tbl11_3_2`"; // SQL query to fetch all table data
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
                  $tis = $row['tis'];
                  $tig = $row['tig'];
                  $totalIS = $row['totalIS'];
                  $total = $row['total'];
                  

              

                echo "<tr>";
              
               echo "<td>{$mis}</td>";
               echo "<td>{$fis}</td>";
               echo "<td>{$mv}</td>";
               echo "<td>{$fv}</td>";
               echo "<td>{$tis}</td>";
               echo "<td>{$tig}</td>";
               echo "<td>{$totalIS}</td>";
               echo "<td>{$total}</td>";
              
                echo "<td style='width:100px'>
                          <a href='edit/edit11.3.2.php?update&libraries_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete11.3.2.php?delete={$id}' class='btn btn-danger'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";

           
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

