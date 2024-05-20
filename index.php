<?php
//include 'inc/login.php';

$page_name = $_GET['page'];

if($page_name == 'Dashboard'){
    //Load Dashboard Pages 

}else{
    include 'inc/header.php';
    include 'inc/login-body.php';
    include 'inc/footer.php';
}


?>