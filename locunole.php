<?php

require 'Views\Components\header.php';

require 'Models\Locunole.php';

GetAllLocunolePhotos();

if(isset($_POST['add_photo'])){
    AddPhoto($PhotoToUpload);
}

require 'Views/locunoleView.php';

require 'Views/Components/footer.php';

?>