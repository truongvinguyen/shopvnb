<?php
  function addCart(){
      if(!isset($_SESSION['cart']))
      {
          $_SESSION['cart']=array();
        
          $masp=$_POST['masp'];
          $hinh=$_POST['hinhsp'];
          $tensp=$_POST['tensp'];
          $giasp=$_POST['giasp'];
          $sl=$_POST['quantity'];
          
              if(isset($_SESSION['cart'][$masp]))
              {
                  $_SESSION['cart'][$masp][$sl] =   $_SESSION['cart'][$masp][$sl]+1;
              }else{
                  $_SESSION['cart'][$masp]=$masp;
                  $_SESSION['cart'][$masp][$sl]=1;
              }
          
      }

    function viewsCart(){
          
    }  
    function del(){
        $cart=  $_SESSION['cart'];
        $id =$_GET['id'];
        if($id==0)
        {
            unset($_SESSION['cart']);
        }else{
            unset($_SESSION['cart'][$id]);
        }
    }
  }
?>