<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDG 11 | Sustainable Cities and Communities</title>

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
    margin: 20px;
    padding: 20px;
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


</style>
</head>
<body>
<h2>SDG 11 Sustainable Cities and Communities</h2>
<?php include('sidebar.php'); ?>

<div class="main1">
<div class="slider">
<?php include('imageslide.php'); ?>
</div>
<div class="card">
<p>Sustainable Development Goal 11 (SDG 11) is to make cities inclusive, safe, resilient and sustainable. Goal 11 is about making cities and human settlements inclusive, 
  safe, resilient and sustainable. Cities represent the future of global living. The world's population reached 8 billion on
   2022 over half living in urban areas. This figure is only expected to rise, with 70 per cent of people expected to live 
   in cities by 2050. Approximately 1.1 billion people currently live in slums or slum-like conditions in cities, with 2
    billion more expected in the next 30 years. </p>

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

