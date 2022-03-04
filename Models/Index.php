<?php  

function GetAllUsers(){
    $db=dbConnect();
$getListUsers=$db->prepare('select nom, id from user');
$getListUsers->execute()or die(print_r($getAllUsers->errorInfo()));

return $getListUsers;

}


?>