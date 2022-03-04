<?php
require 'Function/database.fn.php';
require 'Models/Index.php';

$users=GetAllUsers();

require 'Views/indexView.php';

?>