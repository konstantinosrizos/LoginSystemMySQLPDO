<?php  
  
include("database.php");

$db = DB();

$delete_id=$_GET['del'];  
$delete_query="DELETE FROM users WHERE user_id='$delete_id'";//delete query  
//$run=mysqli_query($db,$delete_query);  
$run = $db->query($delete_query);


if ($run)  
{  
//javascript function to open in the same window    
    echo '<script type="text/javascript">'; 
    echo 'alert("User has been deleted!");'; 
    echo 'window.location.href = "view_users.php";';
    echo '</script>';
}  
  
?>  