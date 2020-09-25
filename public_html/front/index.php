

<?php include"layout/header.php"; ?>
<!--ENDMENUNAV-->
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
                    </ul>
                <!-- </marquee> -->
            </div>
        </div>
        <div class="col-md-9 bor">
            <section id="slide" class="text-center" >
                <img src="public/front/images/slide/sl3.jpg" class="img-thumbnail">
            </section>
            <section class="box-main1">
                <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> <?php echo $this->title;?> </a> </h3>
                <div class="showitem">
                    <?php foreach ($sps as $sp) { ?>
                        <div class="col-md-3 item-product bor" style="height: 268px;">
                            <a href="index.php?ac=xct&id=<?php echo $sp['id']; ?>">
                            <img src="public/upload/<?php echo $sp['image']; ?>" class="" width="100%" height="180">
                            </a>
                            <div class="info-item">
                                <a href=""><?php echo $sp['name']; ?></a>
                                <p><b class="price"><?php echo $sp['price']; ?>đ</b></p>
                            </div>
                            <div class="hidenitem">
                                <p><a href=""><i class="fa fa-search"></i></a></p>
                                <p><a href=""><i class="fa fa-heart"></i></a></p>
                                <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
    <!-- <div class="container">
        <div class="col-md-4 bottom-content">
            <a href=""><img src="../public/front/images/free-shipping.png"></a>
        </div>
        <div class="col-md-4 bottom-content">
            <a href=""><img src="../public/front/images/guaranteed.png"></a>
        </div>
        <div class="col-md-4 bottom-content">
            <a href=""><img src="../public/front/images/deal.png"></a>
        </div>
        </div> -->
<?php include"layout/footer.php"; ?>