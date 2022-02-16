<?php
include_once 'database.php';
class PRODUCT extends DATABASE 
{
    public function __construct()
    {
       parent::__construct();
    
    }
    function getAllNews()
    {
        $query="SELECT id,name_product,price_product,image_product,detail_product,id_category,trangthai FROM product";
        $this->setQuery($query);
        $this->result=$this->thucHienTruyVan();
        return $this->result;
    }
    function getsbyid()
    {   
        $id = $_GET['id'];
        $query="SELECT id,name_product,price_product,image_product,detail_product,id_category,trangthai FROM product WHERE id=$id";
        $this->setQuery($query);
        $this->result=$this->thucHienTruyVan();
        return $this->result;
    }
    function addproduct($name_product,$price_product,$img_product,$trangthai,$loai,$detail){
       
        $sql="INSERT INTO product(name_product,price_product,image_product,detail_product,id_category,trangthai) 
        values('$name_product','$price_product','$img_product','$trangthai','$loai','$detail')";
        $this->setQuery($sql);
        $this->thucHienLenh();
    }
    function delete(){
        $id = $_GET['id'];
        $sql ="DELETE FROM product WHERE id=$id";
        $this->setQuery($sql);
        $this->thucHienLenh();
    }
    function update($name_product,$price_product,$img_product,$trangthai,$loai,$detail){
       
        $id = $_GET['id'];
        $sql="UPDATE product SET name_product = '$name_product',price_product ='$price_product',image_product = '$img_product',detail_product = '$detail',trangthai = '$trangthai',id_category = '$loai' WHERE id =$id";
        $this->setQuery($sql);
        $this->thucHienLenh();
    }
    function addcat($name_category){
       
        $sql="INSERT INTO category(name_category) 
        values('$name_category')";
        $this->setQuery($sql);
        $this->thucHienLenh();
    }
    function getAllcat()
    {
        $query="SELECT id,name_category FROM category";
        $this->setQuery($query);
        $this->result=$this->thucHienTruyVan();
        return $this->result;
    }
    function deletecat(){
        $id = $_GET['id'];
        $sql ="DELETE FROM category WHERE id=$id";
        $this->setQuery($sql);
        $this->thucHienLenh();
    }
    function getsbyidCat()
    {   
        $id = $_GET['id'];
        $query="SELECT id,name_product,price_product,image_product,detail_product,id_category,trangthai FROM product WHERE id_category=$id";
        $this->setQuery($query);
        $this->result=$this->thucHienTruyVan();
        return $this->result;
    }

}
?>