

 
                   
    <?php  
      include '../views/header.php'
?>

    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div id="page-content" class="col-md-8  container m-auto " > 
            
                <h3 class="page-header" style=" margin-top: 100px;margin-bottom:50px;">Gio hàng</h3>
                <div class="line-dec" style="	width: 50px;
	                                            height: 5px;
	                                            background: rgb(16,0,255);
                                                background: linear-gradient(90deg, rgba(16,0,255,1) 0%, rgba(255,0,0,1) 100%);"></div>
                <table class="table table-striped " boder=1>
                    <thead>
                        <tr class="bg-dark text-muted">
                           
                            <th class="text-center">STT </th>
                            <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            
                           
                            <th class="hidden-xs hidden-sm">Đơn giá</th>
                            <th class="hidden-xs hidden-sm">Số lượng</th>
                            <th class="hidden-xs hidden-sm">Thành tiền</th>
                            <th class="cell-small text-center"><i class="fa fa-bolt"></i> </th>
                        </tr>
                    </thead>
             
                  
                    <tbody>
                 <?php
                   
                    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
                                     for ($i=0 ; $i < sizeof($_SESSION['giohang']) ; $i++){
                                      ?>
                                       
                                         <tr>
                           
                                         <td class="cell-small text-center"><?php echo ($i+1)?></td>
                                         <td class="hidden-xs hidden-sm"><img style=" width: 80px;" src="../assets/images/<?php echo $_SESSION['giohang'][$i][0];?>.jpg" alt=""></td>
                                         <td><?php echo $_SESSION['giohang'][$i][1];?></td>
                                        
                                         <td class="hidden-xs hidden-sm"><?php echo $_SESSION['giohang'][$i][2];?></td>
                                         <td class="hidden-xs hidden-sm"><?php echo $_SESSION['giohang'][$i][3];?></td>
                                         <td class="hidden-xs hidden-sm"><?php echo $_SESSION['giohang'][$i][4];?></td>
                                         <td class="text-center">
                                             <div class="btn-group">
                                                
                                                 <a  href="?act=delcart&id=<?php echo $i;?>" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                             </div>
                                         </td>
                                     </tr>
                                    
                                  <?php    }
                                 }
                      ?>
                         
                </tbody>
              
            </table>
                <a href=""><button>Thanh toán</button></a>
               
               </div>

    <!-- Single Page Ends Here -->

    


    


    
    <?php  
      include '../views/footer.php'
?>