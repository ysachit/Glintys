<?php
session_start();
include('unset_database.php');
session_destroy();
header('Location:../index.php');
?>