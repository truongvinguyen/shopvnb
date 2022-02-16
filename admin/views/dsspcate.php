            <?php
                 include '../views/sidebar.php';
            ?>
                <!-- END Sidebar -->

               <div id="page-content"> 
                <h3 class="page-header">Thêm sản phẩm</h3>
                 
                <select name="" id="">
                <option value="">lining</option>
                <?php   
                    include_once '../model/product.php';
                    $cat = new PRODUCT();
                    $listcat = $cat->getAllcat();
                    foreach($listcat as $c){ ?>
                        
                       <a href="index.php?act=listcat&id=<?php echo $c['id']; ?>"> <option value=""><?php echo $c['name_category']; ?></option> </a>
            
              
                  <?php } ?>
                     
                     
                </select>
                <table class="table table-striped">
                    <thead>
                        <tr>
                           
                            <th class="text-center">Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Trạng thái</th>
                            <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Hình ảnh</th>
                            <th class="hidden-xs hidden-sm">Gía</th>
                            <th class="hidden-xs hidden-sm">Loại</th>
                            <th class="cell-small text-center"><i class="fa fa-bolt"></i> options</th>
                        </tr>
                    </thead>
             

                    <tbody>
                    <?php   
            
            include_once '../model/product.php';
            $product = new PRODUCT();
            $listNews = $product->getsbyidCat();
            foreach($listNews as $n){ ?>

          
                        <tr>
                           
                           <td class="cell-small text-center"><?php echo $n['id']; ?></td>
                           <td><a href="javascript:void(0)"><?php echo $n['name_product']; ?></a></td>
                           <td><a href="javascript:void(0)"><img style=" width: 40px;"  src="../assets/img/images/<?php echo $n['trangthai']; ?>.gif" alt=""></a></td>
                           <td class="hidden-xs hidden-sm"><img style=" width: 80px;" src="../assets/img/images/<?php echo $n['image_product']; ?>.jpg" alt=""></td>
                           <td class="hidden-xs hidden-sm"><?php echo $n['price_product']; ?></td>
                           <td class="hidden-xs hidden-sm"><?php echo $n['id_category']; ?></td>
                           <td class="text-center">
                               <div class="btn-group">
                                   <a href="?act=detail&id=<?php echo $n['id']; ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-info" data-original-title="Details"><i class="fa fa-info-circle"></i></a>
                                   <a href="?act=form_update&id=<?php echo $n['id']; ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-success" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                   <a href="?act=delete&id=<?php echo $n['id']; ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                               </div>
                           </td>
                       </tr>
        <?php } ?>
                        
                    
                    </tbody>
                </table>
               </div>


                <!-- Footer -->
               
                <!-- END Footer -->
            </div>
            <!-- END Inner Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="javascript:void(0)" id="to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- User Modal Settings, appears when clicking on 'User Settings' link found on user dropdown menu (header, top right) -->
     
        <!-- END User Modal Settings -->

        <!-- Excanvas for canvas support on IE8 -->
        <!--[if lte IE 8]><script src="../assets/js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="../assets/js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="../assets/js/vendor/bootstrap.min.js"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

        <!-- Javascript code only for this page -->
        <script>
            $(function () {
                // Initialize dash Datatables
                $('#dash-example-orders').dataTable({
                    columnDefs: [{orderable: false, targets: [0]}],
                    pageLength: 6,
                    lengthMenu: [[6, 10, 30, -1], [6, 10, 30, "All"]]
                });
                $('.dataTables_filter input').attr('placeholder', 'Search');

                // Dash example stats
                var dashChart = $('#dash-example-stats');

                var dashChartData1 = [
                    [0, 200],
                    [1, 250],
                    [2, 360],
                    [3, 584],
                    [4, 1250],
                    [5, 1100],
                    [6, 1500],
                    [7, 1521],
                    [8, 1600],
                    [9, 1658],
                    [10, 1623],
                    [11, 1900],
                    [12, 2100],
                    [13, 1700],
                    [14, 1620],
                    [15, 1820],
                    [16, 1950],
                    [17, 2220],
                    [18, 1951],
                    [19, 2152],
                    [20, 2300],
                    [21, 2325],
                    [22, 2200],
                    [23, 2156],
                    [24, 2350],
                    [25, 2420],
                    [26, 2480],
                    [27, 2320],
                    [28, 2380],
                    [29, 2520],
                    [30, 2590]
                ];
                var dashChartData2 = [
                    [0, 50],
                    [1, 180],
                    [2, 200],
                    [3, 350],
                    [4, 700],
                    [5, 650],
                    [6, 700],
                    [7, 780],
                    [8, 820],
                    [9, 880],
                    [10, 1200],
                    [11, 1250],
                    [12, 1500],
                    [13, 1195],
                    [14, 1300],
                    [15, 1350],
                    [16, 1460],
                    [17, 1680],
                    [18, 1368],
                    [19, 1589],
                    [20, 1780],
                    [21, 2100],
                    [22, 1962],
                    [23, 1952],
                    [24, 2110],
                    [25, 2260],
                    [26, 2298],
                    [27, 1985],
                    [28, 2252],
                    [29, 2300],
                    [30, 2450]
                ];

                // Initialize Chart
                $.plot(dashChart, [
                    {data: dashChartData1, lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.05}, {opacity: 0.05}]}}, points: {show: true}, label: 'All Visits'},
                    {data: dashChartData2, lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.05}, {opacity: 0.05}]}}, points: {show: true}, label: 'Unique Visits'}],
                    {
                        legend: {
                            position: 'nw',
                            backgroundColor: '#f6f6f6',
                            backgroundOpacity: 0.8
                        },
                        colors: ['#555555', '#db4a39'],
                        grid: {
                            borderColor: '#cccccc',
                            color: '#999999',
                            labelMargin: 5,
                            hoverable: true,
                            clickable: true
                        },
                        yaxis: {
                            ticks: 5
                        },
                        xaxis: {
                            tickSize: 2
                        }
                    }
                );

                // Create and bind tooltip
                var previousPoint = null;
                dashChart.bind("plothover", function (event, pos, item) {

                    if (item) {
                        if (previousPoint !== item.dataIndex) {
                            previousPoint = item.dataIndex;

                            $("#tooltip").remove();
                            var x = item.datapoint[0],
                                y = item.datapoint[1];

                            $('<div id="tooltip" class="chart-tooltip"><strong>' + y + '</strong> visits</div>')
                                .css({top: item.pageY - 30, left: item.pageX + 5})
                                .appendTo("body")
                                .show();
                        }
                    }
                    else {
                        $("#tooltip").remove();
                        previousPoint = null;
                    }
                });
            });
        </script>
    </body>
</html>