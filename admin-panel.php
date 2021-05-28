<?php

include('func.php');
include('Check_login.php');
check_login();

if(!isset($_SESSION['username']))
{
     header("Location:index.php");

}
else{
display_admin_panel();
}

  ?>
  