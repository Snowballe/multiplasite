<?php
session_start();

require 'Function/database.fn.php';
require 'Models/Index.php';

$users=GetAllUsers();

if(isset($_POST['me_button'])){
    $InfosOfForm=$_POST['me_button'];
    $NameOfMyGuy=substr($InfosOfForm,3,99);
    
    $_SESSION['nom']=$NameOfMyGuy;
    
}


require 'Views/indexView.php';

?>