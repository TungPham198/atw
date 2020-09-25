
<?php include"front/layout/header.php"; ?>

            
<div id="maincontent">
    <div class="container">
        <div class="col-md-3  fixside" >
            <div class="box-left box-menu" >
                <h3 class="box-title"><i class="fa fa-list"></i>  Danh mục</h3>
                <ul>
                    <?php foreach ($this->dm as $item){ ?>
                        <li>
                            <a href="index.php?ac=xdm&id=<?php echo $item['id']; ?>"><?php echo $item["name"]; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="box-left box-menu">
                <h3 class="box-title"><i class="fa fa-warning"></i>  Sản phẩm mới </h3>
                <!--  <marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()"  > -->
                <ul>
                    <?php foreach ($this->nsp as $sp) { ?>
                    <li class="clearfix">
                        <a href="index.php?ac=xct&id=<?php echo $sp['id']; ?>">
                            <img src="public/upload/<?php echo $sp['image']; ?>" class="img-responsive pull-left" width="80" height="80">
                            <div class="info pull-right">
                                <p class="name"> <?php echo $sp['name']; ?></p >
                                <b class="price">Giá: <?php echo $sp['price']; ?> đ</b><br>
                                <!-- <b class="sale">Giá gốc: 7.000.000 đ</b><br> -->
                                <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                            </div>
                        </a>
                    </li>
                    <?php } ?>
                    <!-- <li class="clearfix">
                        <a href="">
                            <img src="public/front/images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                            <div class="info pull-right">
                                <p class="name"> Loa  mới nhất 2016  Loa  mới nhất 2016 Loa  mới nhất 2016</p >
                                <b class="price">Giảm giá: 6.090.000 đ</b><br>
                                <b class="sale">Giá gốc: 7.000.000 đ</b><br>
                                <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>                                            
                            </div>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="">
                            <img src="public/front/images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                            <div class="info pull-right">
                                <p class="name"> Loa  mới nhất 2016  Loa  mới nhất 2016 Loa  mới nhất 2016</p >
                                <b class="price">Giảm giá: 6.090.000 đ</b><br>
                                <b class="sale">Giá gốc: 7.000.000 đ</b><br>
                                <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                            </div>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="">
                            <img src="public/front/images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                            <div class="info pull-right">
                                <p class="name"> Loa  mới nhất 2016  Loa  mới nhất 2016 Loa  mới nhất 2016</p >
                                <b class="price">Giảm giá: 6.090.000 đ</b><br>
                                <b class="sale">Giá gốc: 7.000.000 đ</b><br>
                                <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                            </div>
                        </a>
                    </li> -->
                </ul>
                <!-- </marquee> -->
            </div>
            <div class="box-left box-menu">
                <h3 class="box-title"><i class="fa fa-warning"></i>  Sản phẩm Nỏi bật </h3>
                <!--  <marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()"  > -->
                    <ul>
                        <?php foreach ($this->nbsp as $sp) { ?>
                            <li class="clearfix">
                                <a href="">
                                    <img src="public/upload/<?php echo $sp['image']; ?>" class="img-responsive pull-left" width="80" height="80">
                                    <div class="info pull-right">
                                        <p class="name"> <?php echo $sp['name']; ?></p >
                                        <b class="price">Giá: <?php echo $sp['price']; ?> đ</b><br>
                                        <!-- <b class="sale">Giá gốc: 7.000.000 đ</b><br> -->
                                        <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <!-- </marquee> -->
            </div>
        </div>
        <div class="col-md-9 bor">
            

            <section class="box-main1" >
                <div class="col-md-6 text-center">
                    <img src="public/upload/<?php echo $sps[0]['image']; ?>" class="img-responsive bor" id="imgmain" width="100%" height="370" data-zoom-image="images/16-270x270.png">
                    
                    <!-- <ul class="text-center bor clearfix" id="imgdetail">
                        <li>
                            <img src="images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                        </li>
                        <li>
                            <img src="images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                        </li>
                        <li>
                            <img src="images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                        </li>
                        <li>
                            <img src="images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                        </li>
                       
                    </ul> -->
                </div>
                <div class="col-md-6 bor" style="margin-top: 20px;padding: 30px;">
                   <ul id="right">
                        <li><h3> <?php echo $sps[0]['name']; ?> </h3></li>
                        <li><p> Khuyến mãi nếu có mà éo có thì thôi </p></li>
                        <li><p><strike class="sale"><?php echo $sps[0]['price']; ?> đ</strike></li>
                        <li><a href="" class="btn btn-default"> <i class="fa fa-shopping-basket"></i>Add TO Cart</a></li>
                   </ul>
                </div>

            </section>
            <div class="col-md-12" id="tabdetail">
                <div class="row">
                        
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Mô tả sản phẩm </a></li>
                        <!-- <li><a data-toggle="tab" href="#menu1">Thông tin khác </a></li>
                        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3>Nội dung</h3>
                            <p><?php echo $sps[0]['mota']; ?></p>
                        </div>
                        <!-- <div id="menu1" class="tab-pane fade">
                            <h3> Thông tin khác </h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>Menu 3</h3>
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-pluid">
        <section id="footer">
            <h3 class="text-center"> Phụ vụ môn An toàn web</h3>
        </section>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $hidenitem = $(".hidenitem");
        $itemproduct = $(".item-product");
        $itemproduct.hover(function(){
            $(this).children(".hidenitem").show(100);
        },function(){
            $hidenitem.hide(500);
        })
    })

</script>
<?php include"front/layout/footer.php"; ?>