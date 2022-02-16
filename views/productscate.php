<?php  
      include '../views/header.php'
?>
  
   
   
    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Vợt cầu lông</h1>
            </div>
          </div>
         
        </div>
      </div>
    </div>
    
  <!-- Hiện sản phẩm -->
    <div class="featured container no-gutter">
         <div class="row posts">
             <div class="col-md-12 navbar-inverse" >
                 <ul class="nav justify-content-center ">
                 <li class="nav-item"><a href="?act=product">Tất cả sản phẩm</a></li>
                 <?php   
                    include_once '../model/product.php';
                    $cat = new PRODUCT();
                    $listcat = $cat->getAllcat();
                    foreach($listcat as $c){ ?>
                        
                         <li class="nav-item"><a href="index.php?act=listcat&id=<?php echo $c['id']; ?>"><?php echo $c['name_category']; ?></a></li>
            
              
                  <?php } ?>
                     
                     
                 </ul>
              </div>
             
      <?php   
            
              include_once '../model/product.php';
              $product = new PRODUCT();
              $listNews = $product->getsbyidCat();
              foreach($listNews as $n){ ?>

            
              <div id="" class="item new col-md-3">
                <a href="">
                  <div class="featured-item">
                    <img class="news" style="width: 50px;" src="../assets/images/<?php echo $n['trangthai']; ?>.gif" alt="">
                    <img class="img" src="../assets/images/<?php echo $n['image_product']; ?>.jpg" alt="">
                    <h4><?php echo $n['name_product']; ?></h4>
                    <div>
                    <h6><?php echo $n['price_product']; ?>Đ</h6>
                    
                    <a href="index.php?act=detail&id=<?php echo $n['id']; ?>"><button>Chi tiết</button></a>
                    </div>
                  </div>
                </a>
              </div> 
          <?php } ?>


      
           
            
           
           
          
        </div>
    </div>

    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="current-page"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Page Ends Here -->


    
<?php  
include '../views/footer.php'
?>