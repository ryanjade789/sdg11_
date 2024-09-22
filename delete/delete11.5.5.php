<?php
include "../includes/config.php";

if (isset($_GET['delete'])) {
    $deleteid = $_GET['delete'];

    // Check if the user has confirmed the deletion
    if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        // SQL query to delete data from the "order" table where id = $userid
        $query = "DELETE FROM `tbl11_5_5` WHERE `id` = {$deleteid}";
        $delete_query = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert(' data deleted successfully!')</script>";
        header("Location: ../11.5.5.php");
    } else {
        // If not confirmed, show a confirmation dialog using JavaScript
        echo "<script>
              var confirmed = confirm('Are you sure you want to delete this record?');
              if (confirmed) {
                  window.location.href = 'delete11.5.5.php?delete=$deleteid&confirm=true';
              } else {
                  window.location.href = '../11.5.5.php';
              }
              </script>";
    }
}
?>
