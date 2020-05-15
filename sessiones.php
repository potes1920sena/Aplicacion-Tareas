<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location: app-usuario');
}else{
    header('location: ./');
}
?>