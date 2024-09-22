<?php 
if (isset($_POST['submit'])) {
  // Get form data
 // $total_number = $_POST['total_number'];
  $title =  strtoupper($_POST['title']);
  $author = strtoupper( $_POST['author']);
  $publication = $_POST['publication'];
  $citation = $_POST['citations'];
  $source =  strtoupper($_POST['source']); 

  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl11_1_1` (`title`, `author`, `year`, `total_citation`, `source`) VALUES ('$title', '$author', '$publication', '$citation', '$source')";

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
<title>11.1.1 | Research on Sustainable Cities & Communities</title>

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
$source = ""; // Initialize $source before the loop

include "includes/config.php";
$query = "SELECT * FROM `tbl11_1_1`"; // SQL query to fetch all table data
$result = mysqli_query($conn, $query); // sending the query to the database

if (!$result) {
    die("Error: " . mysqli_error($conn)); // Output the error message for debugging
}

// Initializing total points outside the loop
$totalPoints = 0;

// Initializing total outside the loop
$totalno = 0;

// Displaying all the data retrieved from the database using a while loop
while ($row = mysqli_fetch_assoc($result)) {
    $source = $row['source'];

    // Define source for different categories
    $src = "SCOPUS";
    $osrc = "WEB OF SCIENCE";

    $totalno++; // Increment total for each row

    // Check if the source matches SCOPUS or WEB OF SCIENCE
    if ($source === $src || $source === $osrc) {
        $ptsR = 25; // Set points to 25 if SCOPUS or WEB OF SCIENCE
    } else {
        $ptsR = 10; // Set points to 10 for other sources
    }

    // Add the points for the current research to the total points
    $totalPoints += $ptsR;
}
  
    ?>

<input type="text" style="color: black; text-align: center;  " class="points" name="points" value="<?php echo min($totalPoints, 25); ?>" readonly>  
</div>
</div>

<!-- END OF HEADER POINTING SYSTEM -->

  <div class="content">
    <br>
    <h3><b>11.1.1 Research on Sustainable Cities & Communities</b></h3>
   

  </div>
 <div class="card">

 <div class="container mt-3 d-flex">
  <form method="POST" class="flex-grow-1">
  <h3 class="h3text">Research</h3>

    <div class="mb-2">
    <i class="fa fa-bookmark"></i>
    <label for="title">Title of research</label>
    <textarea class="form-control" id="title" name="title" rows="5" required></textarea>
</div>
    <div class="mb-2 mt-2"><i class="fa fa-user"></i>
      <label for="author">Author</label>
      <input type="text" class="form-control" id="author"  name="author"required>
    </div>
    <div class="mb-2">
  <i class="fa fa-calendar"></i>
  <label for="publication">Year of publication</label>
  <input type="text" class="form-control" id="publication" name="publication" maxlength="4" placeholder="YYYY" required>
</div>
    <div class="mb-2 mt-2"><i class="fa fa-bar-chart"></i>
      <label for="citations">Total number of citations</label>
      <input type="number" class="form-control" id="citations"  name="citations"required>
    </div>
    <div class="mb-2 mt-2"><i class="fa fa-book"></i>
      <label for="citations">Source</label>
      <textarea class="form-control" id="source"  name="source"required></textarea>
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

      <th scope="col" style="width: 200px;">Title</th>
      <th scope="col" style="width: 100px;">Author</th>
      <th scope="col" style="width: 100px;">Year of Publication</th>
      <th scope="col" style="width: 100px;">Total Citations</th>
      <th scope="col" style="width: 150px;">Source</th>
      <th scope="col" style="width: 50px;">Points</th>
      <th scope="col"colspan="2"  style="width: 100px;">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php
            include "includes/config.php";
            $query = "SELECT * FROM `tbl11_1_1`"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            if (!$result) {
                die("Error: " . mysqli_error($conn)); // Output the error message for debugging
            }
            // Displaying all the data retrieved from the database using a while loop
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['total_research'];
                $title = $row['title'];
                $author = $row['author'];
                $publication = $row['year'];
                $citations = $row['total_citation'];
                $source = $row['source'];

                   $src ="SCOPUS";
                   $osrc="WEB OF SCIENCE";

                   $ptsR;
                if ($source ===$src or $source ===$osrc){
                  $ptsR = 25;
                }
                  else{
                    $ptsR = 10;
                  }

                echo "<tr>";
               
                echo "<td>{$title}</td>";
                echo "<td>{$author}</td>";
                echo "<td>{$publication}</td>";
                echo "<td>{$citations}</td>";
                echo "<td>{$source} </td>";
                echo "<td>$ptsR</td>"; 
            

                echo "<td style='width:100px'>
                          <a href='edit/edit11.1.1.php?update&research_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete11.1.1.php?delete={$id}' class='btn btn-danger'>
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

