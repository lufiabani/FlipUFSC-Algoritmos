<?php
@session_start();
if(!$_SESSION['nome']){
    header("Location: /views/index.php");
}