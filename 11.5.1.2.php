<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>11.5.1.2 | Employee commuting practices</title>

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
    <h3><b>11.5.1.2 Employee commuting practices</b></h3>
</div>
<div class="card">    

<p>Total number of female employees who walk to school: <b>6</b></p>
<p>Total number of male employees who walk to school: <b>7</b></p>
<p>Total number of employees who walk to school: <b>13</b></p>
<p>Total number of female employees who use bicycle: <b>0</b></p>
<p>Total number of male employees who use bicycle: <b>0</b></p>
<p>Total number of employees who use bicycle: <b>0</b></p>
<p>Total number of female employees who commute: <b>88</b></p>
<p>Total number of male employees who commute: <b>68</b></p>
<p>Total number of employees who commute: <b>156</b></p>
<p>Total number of female employees who use their own vehicle: <b>14</b></p>
<p>Total number of male employees who use their own vehicle: <b>21</b></p>
<p>Total number of employees who use their own vehicle: <b>35</b></p>
<p>Total number of female employees who carpools: <b>2</b></p>
<p>Total number of male employees who carpools: <b>0</b></p>
<p>Total number of employees who carpools: <b>2</b></p>
<p> </p>
<p><b>6.31%</b> of total employee population walks to school</p>
<p><b>0%</b> of total employee population use bicycle to go to school</p>
<p><b>75.73%</b> of total employee population commute to school</p>
<p><b>17%</b> of total employee population use their own vehicle to go to school</p>
<p><b>0.97%</b> of the total employee population carpools with relatives/friends to
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

