<?php
include_once "../model/product.php";


 $action="home_product";
 if(isset($_GET['act'])){
     $action=$_GET['act'];
 }
    switch($action){
        case 'home_product':
            include_once '../views/index.php';
            break;
        
        case 'contact':
            include_once '../views/contact.php';
            break; 
        case 'about':
            include_once '../views/about.php';
            break;          
        case 'product':
            include_once '../views/products.php';
            break;
        case 'detail':
            include_once '../views/detail.php';
            break;

        case 'addcart':
            
            
            session_start();
           if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
           
            $masp=$_POST['masp'];
            $hinh=$_POST['hinhsp'];
            $tensp=$_POST['tensp'];
            $giasp=$_POST['giasp'];
            $sl=$_POST['quantity'];
            $thanhtien= $_POST['giasp'] * $_POST['quantity'];
            
            $f=0;
            for($i=0 ; $i<sizeof($_SESSION['giohang']) ; $i++){
               
                if ($_SESSION['giohang'][$i][5]==$masp){
                    $f=1;
                    $sln=$sl+$_SESSION['giohang'][$i][3];
                    $_SESSION['giohang'][$i][3]=$sln;
                    break;
                }
            }
            //them vao ss
            if($f==0){
            $sp=[$hinh,$tensp,$giasp,$sl,$thanhtien,$masp];
            $_SESSION['giohang'][]=$sp;
            }
           
            include_once  '../views/cart.php';
            break;
         
        

           

        case 'contact':
            include_once '../views/contact.php';
            break;
        case 'send':
           
            require "PHPMailer-master/src/PHPMailer.php";
            require "PHPMailer-master/src/SMTP.php";
            require "PHPMailer-master/src/Exception.php";
            
          
           
            

            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            $tieude=$_POST['subject'];
            $email=$_POST['email'];
          
            try{
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->CharSet = "utf-8";
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth=true;
                $mail->Username='truongvi220301@gmail.com';
                $mail->Password='nguyentruongvi';
                $mail->SMTPSecure='ssl';
                $mail->Port=465;
                $mail->setFrom('truongvi220301@gmail.com','Nguyễn Trường vi');
                $mail->addAddress('vintps14865@fpt.edu.vn','Nguyen Truong Vi (FPL HCM K16)');
                $mail->isHTML(true);
                $mail->Subject = $tieude ;
                $noidung=$email;
                $mail->Body = $noidung;
                $mail->smtpConnect( array(
                        "ssl" => array(
                            "verify_peer" => false,
                            "verify_peer_name" => false,
                            "allow_self_signed" => true

                        )
                    ));
                        $mail->send();
                        echo 'đã gửi xong';
                        require '../views/contact.php';
            
           } catch (Exception $e){
               echo 'không gửi được .LỖI:' , $mail->ErrorInfo;
           }


            
        break;


        case 'listcat':
            include_once '../views/productscate.php';
            break;
       
        
           
          
    }   
    

?>