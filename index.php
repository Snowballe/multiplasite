<?php
require 'Function/database.fn.php';
require 'Models/Index.php';

$users=GetAllUsers();

if(isset($_POST['me_button'])){
    $_SESSION['nom']=$user['nom'];
}


require 'Views/indexView.php';

?>