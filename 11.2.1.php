<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>11.2.1 | Campus Land Use</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href= css/sidebar1.css>
<link rel="stylesheet" href="css/style.css">
<!-- this is links for imageslidee  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style> 
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

/* Main content */
.main1 {
  margin-top: 50px;
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: black;
  font-family:Arial, Helvetica, sans-serif;
}
  
/* Make the image fully responsive */
  .card{
    border-radius: 10px;
    box-shadow: 0 6px 10px rgba(0,0,0,.1);
    transition: .3s transform cubic-bezier(.4,0,.2,1),.3s box-shadow;
    margin-right: 60px;
    margin-left: 30px;
    margin-bottom: 60px;
    margin-top: 50px;
    
  }
  
  p{
    margin: 5px;
    padding: 10px;
    font-size: large;
    text-align: justify;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

h2{
  margin-left:250px;
  margin-top: 0;
      background-color: rgb(253, 157, 36); 
      color: #fff; 
      padding: 10px; 
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.content{
    margin-left: 460px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #C31F33;
  }


</style>
</head>
<body>
<h2>SDG 11 Sustainable Cities and Communities</h2>

<?php include('sidebar.php'); ?>

<div class="main1">
<div class="slider">
<?php include('11.2_image.php'); ?>
</div>
<div class="content">
    <br>
    <h3><b>11.2.1 Campus Land Use</b></h3>
</div>
<div class="card">    
<p>Land use for existing buildings, facilities, other infrastructure within the
jurisdiction of the campus including spaces, open and recreational
spaces (in sqm)</p>
<p>Total campus land area: <b>26,142 m²</b></p>
<p>Total campus building area: <b>21,100 m²</b></p>
<p>Total area in campus covered in forest vegetation: <b>421 m²</b></p>
<p>Total area in campus covered in planted vegetation (green spaces): <b>499.27  m²</b></p>
<p>Total ground parking area: <b>1124.34 m²</b></p>
<p>Total number of pedestrian paths on campus: <b>5</b></p>
<p>Campus setting: <b>City Center</b> (rural/suburban/city center/highrise building area)</p>

</div>
</div>

<link rel="stylesheet" href= css/sidebar.css>

<script>
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

