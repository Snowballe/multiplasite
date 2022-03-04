<?php

require 'Views\Components\header.php';

require 'Models\Locunole.php';

if(isset($_POST['add_photo'])){
    Add_photo();
}

require 'Views/locunoleView.php';

require 'Views/Components/footer.php';

?>