<?php 
if (isset($_POST['submit'])) {
  // Get form data
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
  
  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl11_3_5` (`performances`, `pm`, `pf`,`choirIN`,`choirEX`,`theaterIN`,
            `theaterEX`,`danceIN`,`danceEX`,`bandIN`,`bandEX`,`total`,`points`) 
            VALUES ('$performances','$pm','$pf','$choirIN', '$choirEX','$theaterIN','$theaterEX',
            '$danceIN','$danceEX','$bandIN','$bandEX','$total','$points')";

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
$query = "SELECT SUM(points) as total_sum FROM tbl11_3_5";
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
<title>11.3.5 | Arts and heritage contribution</title>

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
    height: 900px;

  }
  .content>p{
    text-align: justify;
    justify-content: justify-content;
    margin-right: 100px;
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

<input type="text" style="color: black; text-align: center;" 
class="points" name="points" value="<?php echo min($totalPoints, 4); ?>" readonly>  
</div>
</div>

<!-- END OF HEADER POINTING SYSTEM -->

  <div class="content">
    <br>
    <h3>11.3.5 Arts and heritage contribution</h3>
  <p>Contribute to local arts, in terms of number of annual performances of
campus choir, theater groups, orchestras etc. either ad-hoc or as part
of ongoing programme</p>


  </div>
 <div class="card">
<div class="contentform">
  <form method="POST" >

<div class="form-group">
      <label for="performances" class="text-center ">Total Number of Performances</label>
      <textarea class="form-control" id="performances" name="performances" rows="1" required></textarea>
    </div>
    <div class="form-group">
      <label for="pm">Male Performers</label>
      <textarea class="form-control" id="pm" name="pm" rows="1" required></textarea>
    </div>
    <div class="form-group">
      <label for="pf">Female Performers</label>
      <input type="number" class="form-control" id="pf" name="pf" required>
    </div>
    <div class="form-group">
      <label for="choirIN">Internal Choir Performances</label>
      <input type="number" class="form-control" id="choirIN" name="choirIN" required>
    </div>
    <div class="form-group">
      <label for="choirEX">External Choir Performances</label>
      <input type="number" class="form-control" id="choirEX" name="choirEX" required>
    </div>
    <div class="form-group">
      <label for="theaterIN">Internal Theater Group Performances</label>
      <input type="number" class="form-control" id="theaterIN" name="theaterIN" required>
    </div>
    <div class="form-group">
      <label for="theaterEX">External Theater Group Performances</label>
      <input type="number" class="form-control" id="theaterEX" name="theaterEX" required>
    </div>
    <div class="form-group">
      <label for="danceIN">Internal Dance Group Performances</label>
      <input type="number" class="form-control" id="danceIN" name="danceIN" required>
    </div>
    <div class="form-group">
      <label for="danceEX">External Dance Group Performances</label>
      <input type="number" class="form-control" id="danceEX" name="danceEX" required>
    </div>
    <div class="form-group">
      <label for="bandIN">Internal Band Group Performances</label>
      <input type="number" class="form-control" id="bandIN" name="bandIN" required>
    </div>
    <div class="form-group">
      <label for="bandEX">External Band Group Performances</label>
      <input type="number" class="form-control" id="bandEX" name="bandEX" required>
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
  
      <th scope="col" style="width: 50px;">Total Number of Performances</th>
      <th scope="col" style="width: 50px;">Male Performers</th>
      <th scope="col" style="width: 50px;">Female Performers</th>
      <th scope="col" style="width: 50px;">Internal Choir Performances</th>
      <th scope="col" style="width: 50px;">External Choir Performances</th>
      <th scope="col" style="width: 50px;">Internal Theater Group Performances</th>
      <th scope="col" style="width: 50px;">External Theater Group Performances</th>
      <th scope="col" style="width: 50px;">Internal Dance Group Performances</th>
      <th scope="col" style="width: 50px;">External Dance Group Performances</th>
      <th scope="col" style="width: 50px;">Internal Band Group Performances </th>
      <th scope="col" style="width: 50px;">External Band Group Performances </th>
      <th scope="col" style="width: 50px;">Total Number of Performers</th>
  
      <th scope="col"colspan="2"  style="width: 60px;">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php
            include "includes/config.php";
            $query = "SELECT * FROM `tbl11_3_5`"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            if (!$result) {
                die("Error: " . mysqli_error($conn)); // Output the error message for debugging
            }
            // Displaying all the data retrieved from the database using a while loop
            while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
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
                  $total = $row['total'];
                  

             

                echo "<tr>";
               
               echo "<td>{$performances}</td>";
               echo "<td>{$pm}</td>";
               echo "<td>{$pf}</td>";
               echo "<td>{$choirIN}</td>";
               echo "<td>{$choirEX}</td>";
               echo "<td>{$theaterIN}</td>";
               echo "<td>{$theaterEX}</td>";
               echo "<td>{$danceIN}</td>";
               echo "<td>{$danceEX}</td>";
               echo "<td>{$bandIN}</td>";
               echo "<td>{$bandEX}</td>";
               echo "<td>{$total}</td>";
             
            

                echo "<td style='width:100px'>
                          <a href='edit/edit11.3.5.php?update&arts_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete11.3.5.php?delete={$id}' class='btn btn-danger'>
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

