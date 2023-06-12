<?php
session_start();
echo "hi";
if(isset($_SESSION['name'])){
    echo "name";
    echo $_SESSION['name'];
}
?>