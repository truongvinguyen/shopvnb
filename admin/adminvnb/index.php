<?php
include_once '../model/product.php';
 $action="homeadmin";
 if(isset($_GET['act'])){
     $action=$_GET['act'];
 }
    switch($action){
        case 'homeadmin':
            include_once '../views/index.php';
            break;
        
        case 'list_sp':
            include_once '../views/dssp.php';
            break;

        case 'detail':
            include_once '../views/detail.php';
            break;
        case 'addproduct';
            include_once '../views/themsp.php';
            break;
        case 'them':
            $name_product=$_POST['name_product'];
            $detail=$_POST['detail'];
            $price_product=$_POST['price_product'];
            $img_product=$_POST['img_product'];
            $trangthai=$_POST['trangthai'];
            $loai=$_POST['loai'];
            $User=new PRODUCT();
            $User->addproduct($name_product,$price_product,$img_product,$trangthai,$loai,$detail);
            
            require_once '../views/dssp.php';
            //chuyen trang
            break;  
        case 'delete':
            $User=new PRODUCT();
            $User->delete();
            require_once '../views/dssp.php';
            break; 
        case 'form_update':
            include_once '../views/update.php';
            break;

        case 'update':
            $name_product=$_POST['name_product'];
            $detail=$_POST['detail'];
            $price_product=$_POST['price_product'];
            $img_product=$_POST['img_product'];
            $trangthai=$_POST['trangthai'];
            $loai=$_POST['loai'];
            $User=new PRODUCT();
            $User->update($name_product,$price_product,$img_product,$trangthai,$loai,$detail); 
            require_once '../views/dssp.php';
            break;
        case 'themdm':
            include_once '../views/themdanhmuc.php';
            break;

        case 'add':
            $name_category=$_POST['namedm'];
            $User=new PRODUCT();
            $User->addcat($name_category);
            require_once '../views/xemdm.php';
            break;

        case 'xemdm':
            include_once '../views/xemdm.php';
            break; 

            case 'deletecat':
                $User=new PRODUCT();
                $User->deletecat();
                require_once '../views/xemdm.php';
                break; 

                case 'listcat':
                    include_once '../views/dsspcate.php';
                    break;
    
    }  

?>