<?php
session_start();
if(isset($_SESSION['user_id'])){
header('Location:public_html/dashboard.php');
}else {
header('Location:public_html/login.php');
}
 ?>
