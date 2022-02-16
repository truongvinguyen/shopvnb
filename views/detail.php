<?php  
      include '../views/header.php'
?>
     
   <div class="control">
   <span>|</span> <span><a href="?act=home_product">trang chủ</a></span> <span>|</span><span><a href="?act=product">Sản phẩm</a></span> <span>|</span><span><a href="?act=detail">Chi tiết sản phẩm</a></span> 
    </div>
    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Chi tiết sản phẩm</h1>
            </div>
          </div>
          <?php
            include_once '../model/product.php';
            $product = new PRODUCT();
            $listNews = $product->getsbyid();
            foreach($listNews as $n){ ?>

        <?php } ?>
          <div class="col-md-6">
        
            <div class="product-slider">
                 
                  <img class="news" src="../assets/images/<?php echo $n['trangthai']; ?>.gif" alt="" style="width: 70px;z-index: 1;">
                  <img class="" src="../assets/images/<?php echo $n['image_product']; ?>.jpg" alt="" style="width: 470px; margin-top: -40px;">
                 
              
             
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="right-content">
              <h4><?php echo $n['name_product']; ?></h4>
              <h6><?php echo $n['price_product']; ?>Đ</h6>
              <p><?php echo $n['detail_product']; ?> </p>
             
              <form action="?act=addcart&id=<?php echo $n['id']; ?>" method="POST">
                <label for="quantity">số lượng:</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                	>
                  <input type="hidden" name="masp" value="<?php echo $n['id']; ?>">
                  <input type="hidden" name="tensp" value="<?php echo $n['name_product']; ?>">
                  <input type="hidden" name="giasp" value="<?php echo $n['price_product']; ?>">
                  <input type="hidden" name="hinhsp" value="<?php echo $n['image_product']; ?>">
                  
                <input type="submit" class="button" value="Thêm vào giỏ hàng">
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Page Ends Here -->


    


    


    
    <?php  
      include '../views/footer.php'
?>