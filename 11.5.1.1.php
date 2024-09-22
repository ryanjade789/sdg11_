<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>11.5.1.1 | Student commuting practices</title>

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
    margin-left: 390px; /* Same as the width of the sidenav */
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
<?php include('11.5.1.1_image.php'); ?>
</div>
<div class="content">
    <br>
    <h3><b>11.5.1.1 Student commuting practices</b></h3>
</div>
<div class="card">    

<p>Total number of female students who walk to school: <b>127</b></p>
<p>Total number of male students who walk to school: <b>76</b></p>
<p>Total number of students who walk to school: <b>203</b></p>
<p>Total number of female students who use bicycle: <b>2</b></p>
<p>Total number of male students who use bicycle: <b>11</b></p>
<p>Total number of students who use bicycle: <b>13</b></p>
<p>Total number of female students who use bicycle: <b>2834</b></p>
<p>Total number of male students who use bicycle: <b>1524</b></p>
<p>Total number of students who use bicycle: <b>4358</b></p>
<p>Total number of female students who use their own vehicle: <b>65</b></p>
<p>Total number of male students who use their own vehicle: <b>91</b></p>
<p>Total number of students who use their own vehicle: <b>156</b></p>
<p>Total number of female students who carpools: <b>10</b></p>
<p>Total number of male students who carpools: <b>2</b></p>
<p>Total number of students who carpools: <b>12</b></p>
<p> </p>
<p><b>4.25%</b> of total student population walks to school</p>
<p><b>0.27%</b> of total student population use bicycle to go to school</p>
<p><b>91.17%</b> of total student population commute to school</p>
<p><b>3.26%</b> of total student population use their own vehicle to go to school</p>
<p><b>0.25%</b> of the total student population carpools with relatives/friends to
go to school</p>




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

