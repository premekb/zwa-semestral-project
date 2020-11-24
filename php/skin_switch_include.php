<?php
// Create the skin cookie if it doesn't exist.
if(!isset($_COOKIE["skin"])){
    setcookie("skin", "light", time() + (86400 * 1000), "/");
    }

// Switch the skin based on current skin cookie value.
if ($_COOKIE["skin"] == "light"){
    setcookie("skin", "dark", time() + (86400 * 1000), "/");
}

else{
    setcookie("skin", "light", time() + (86400 * 1000), "/");
}

header("location: ../index.php");
?>