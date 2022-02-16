<?php
   require_once ('..model/cart.php');
   session_start();
   addCart();
   viewsCart();
   
?>