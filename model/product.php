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
    
    function delete(){
        $id = $_GET['id'];
        $sql ="DELETE FROM tin WHERE id=$id";
        $this->setQuery($sql);
        $this->thucHienLenh();
    }
    function update($tieudenews,$imgnews,$noidungnews){
       
        $id = $_GET['id'];
        $sql="UPDATE tin SET tieudenews = '$tieudenews',imgnews ='$imgnews',noidungnews = '$noidungnews' WHERE id =$id";
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