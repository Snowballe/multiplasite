<?php

AddPhoto($PhotoToAdd, $idOfUploader){
    $db=dbConnect();

    $upload=$db->prepare('insert into user (uploaded_photos) values (:uploaded_photos) where id=:id');

    $upload->execute([
        'uploaded_photos'=>$PhotoToAdd,
        'id'=>$idOfUploader,
    ])or die(print_r($upload->errorInfo()));
    return $upload
};

GetAllLocunolePhotos(){
    $db=dbConnect();
$gGetAllPhotos=$db->prepare('select * from photos');
$gGetAllPhotos->execute()or die(print_r($upload->errorInfo()));

return $gGetAllPhotos;
}

?>