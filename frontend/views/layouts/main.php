<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use frontend\assets\AppAsset;
AppAsset::register($this);
 ?>
 <?php $this->beginPage() ?>
 <!DOCTYPE html>
 <html lang="<?= Yii::$app->language ?>">
 <head>
     <meta charset="<?= Yii::$app->charset ?>">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <?= Html::csrfMetaTags() ?>
     <title><?= Html::encode($this->title) ?></title>
     <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
     <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
     <?php $this->head() ?>
 </head>
 <body>
 <?php $this->beginBody() ?>
 <!--header-->
 <div class="header">
   <div class="header-top">
     <div class="container">
        <div class="top-left">
         <a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
       </div>
       <div class="top-right">
       <ul>
         <li><a href="checkout.html">Checkout</a></li>
         <li><a href="login.html">Login</a></li>
         <li><a href="registered.html"> Create Account </a></li>
       </ul>
       </div>
       <div class="clearfix"></div>
     </div>
   </div>
   <div class="heder-bottom">
     <div class="container">
       <div class="logo-nav">
         <div class="logo-nav-left">
           <h1>
             <?= Html::a('Del-York Store <span>Shop anywhere</span>', ['site/index'], ['class'=>'act'])?>

           </h1>
         </div>
         <div class="logo-nav-left1">
           <nav class="navbar navbar-default">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header nav_2">
             <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
           </div>
           <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
             <ul class="nav navbar-nav">
               <li class="active">
                 <?= Html::a('Home', ['site/index'], ['class'=>'act'])?>
               </li>
               <!-- Mega Menu -->
               <li class="dropdown">
                <?= Html::a('Products<b class="caret"></b>', ['products/index'], ['class'=>'dropdown-toggle', 'data-toggle'=>'dropdown'])?>
                 <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a> -->
                 <ul class="dropdown-menu multi-column columns-3">
                   <div class="row">
                     <div class="col-sm-3  multi-gd-img">
                       <ul class="multi-column-dropdown">
                         <h6>Submenu1</h6>

                         <li><?= Html::a('Products', ['products/index'], ['class'=>'', ''=>''])?></li>
                         <li><a href="products.html">Merchants</a></li>
                         <li><a href="products.html">Shoes</a></li>
                         <li><a href="products.html">Watches</a></li>
                         <li><a href="products.html"> Underwear </a></li>
                         <li><a href="products.html">Accessories</a></li>
                       </ul>
                     </div>
                     <div class="col-sm-3  multi-gd-img">
                       <ul class="multi-column-dropdown">
                         <h6>Submenu2</h6>
                         <li><a href="products.html">Sunglasses</a></li>
                         <li><a href="products.html">Wallets,Bags</a></li>
                         <li><a href="products.html">Footwear</a></li>
                         <li><a href="products.html">Watches</a></li>
                         <li><a href="products.html">Accessories</a></li>
                         <li><a href="products.html">Jewellery</a></li>
                       </ul>
                     </div>
                     <div class="col-sm-3  multi-gd-img">
                         <a href="products.html"><img src="images/woo.jpg" alt=" "/></a>
                     </div>
                     <div class="col-sm-3  multi-gd-img">
                         <a href="products.html"><img src="images/woo1.jpg" alt=" "/></a>
                     </div>
                     <div class="clearfix"></div>
                   </div>
                 </ul>
               </li>
               <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
                 <ul class="dropdown-menu multi-column columns-3">
                   <div class="row">
                     <div class="col-sm-3  multi-gd-img">
                       <ul class="multi-column-dropdown">
                         <h6>Submenu1</h6>
                         <li><a href="products.html">Clothing</a></li>
                         <li><a href="products.html">Wallets</a></li>
                         <li><a href="products.html">Shoes</a></li>
                         <li><a href="products.html">Watches</a></li>
                         <li><a href="products.html"> Underwear </a></li>
                         <li><a href="products.html">Accessories</a></li>
                       </ul>
                     </div>
                     <div class="col-sm-3  multi-gd-img">
                       <ul class="multi-column-dropdown">
                         <h6>Submenu2</h6>
                         <li><a href="products.html">Sunglasses</a></li>
                         <li><a href="products.html">Wallets,Bags</a></li>
                         <li><a href="products.html">Footwear</a></li>
                         <li><a href="products.html">Watches</a></li>
                         <li><a href="products.html">Accessories</a></li>
                         <li><a href="products.html">Jewellery</a></li>
                       </ul>
                     </div>
                     <div class="col-sm-3  multi-gd-img">
                         <a href="products1.html"><img src="images/woo3.jpg" alt=" "/></a>
                     </div>
                     <div class="col-sm-3  multi-gd-img">
                         <a href="products1.html"><img src="images/woo4.jpg" alt=" "/></a>
                     </div>
                     <div class="clearfix"></div>
                   </div>
                 </ul>
               </li>
               <li><a href="codes.html">Locations</a></li>
               <li><a href="mail.html">Merchants</a></li>
             </ul>
           </div>
           </nav>
         </div>
         <div class="logo-nav-right">
           <ul class="cd-header-buttons">
             <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
           </ul> <!-- cd-header-buttons -->
           <div id="cd-search" class="cd-search">
             <form action="#" method="post">
               <input name="Search" type="search" placeholder="Search...">
             </form>
           </div>
         </div>
         <div class="header-right2">
           <div class="cart box_1">
             <a href="checkout.html">
               <h3> <div class="total">
                 <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                 <?php echo Html::img('@web/images/bag.png', $options=['class'=> 'img-responsive']) ?>
               </h3>
             </a>
             <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
             <div class="clearfix"> </div>
           </div>
         </div>
         <div class="clearfix"> </div>
       </div>
     </div>
   </div>
 </div>
 <!--header-->

      <?= $content ?>


        <!---footer--->
              <div class="footer-w3l">
                <div class="container">
                  <div class="footer-grids">
                    <div class="col-md-3 footer-grid">
                      <h4>About </h4>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                      <div class="social-icon">
                        <a href="#"><i class="icon"></i></a>
                        <a href="#"><i class="icon1"></i></a>
                        <a href="#"><i class="icon2"></i></a>
                        <a href="#"><i class="icon3"></i></a>
                      </div>
                    </div>
                    <div class="col-md-3 footer-grid">
                      <h4>My Account</h4>
                      <ul>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="registered.html"> Create Account </a></li>
                      </ul>
                    </div>
                    <div class="col-md-3 footer-grid">
                      <h4>Information</h4>
                      <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="codes.html">Short Codes</a></li>
                        <li><a href="mail.html">Mail Us</a></li>
                        <li><a href="products1.html">products1</a></li>
                      </ul>
                    </div>
                    <div class="col-md-3 footer-grid foot">
                      <h4>Contacts</h4>
                      <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">E Comertown Rd, Westby, USA</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">1 599-033-5036</a></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> example@mail.com</a></li>

                      </ul>
                    </div>
                  <div class="clearfix"> </div>
                  </div>

                </div>
              </div>
        <!---footer--->
              <!--copy-->
              <div class="copy-section">
                <div class="container">
                  <div class="copy-left">
                    <p>&copy; <?= date('Y')?> Del-York Store . All rights reserved </a></p>
                  </div>
                  <div class="copy-right">
                    <img src="images/card.png" alt=""/>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            <!--copy-->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content modal-info">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                    <?php echo Html::img('@web/images/p5.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                      <div class="col-md-7 new-grid">
                        <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                          <div class="color-quality-left">
                            <h6>Color : </h6>
                            <ul>
                              <li><a href="#"><span></span>Red</a></li>
                              <li><a href="#" class="brown"><span></span>Yellow</a></li>
                              <li><a href="#" class="purple"><span></span>Purple</a></li>
                              <li><a href="#" class="gray"><span></span>Violet</a></li>
                            </ul>
                          </div>
                          <div class="color-quality-right">
                            <h6>Quality :</h6>
                            <div class="quantity">
                              <div class="quantity-select">
                                <div class="entry value-minus1">&nbsp;</div>
                                <div class="entry value1"><span>1</span></div>
                                <div class="entry value-plus1 active">&nbsp;</div>
                              </div>
                            </div>
                            <!--quantity-->
                                <script>
                                $('.value-plus1').on('click', function(){
                                  var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                  divUpd.text(newVal);
                                });

                                $('.value-minus1').on('click', function(){
                                  var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                  if(newVal>=1) divUpd.text(newVal);
                                });
                                </script>
                              <!--quantity-->
                          </div>
                          <div class="clearfix"> </div>
                        </div>
                      <div class="women">
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                        <div class="add">
                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content modal-info">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                    <?php echo Html::img('@web/images/p7.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                      <div class="col-md-7 new-grid">
                        <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                          <div class="color-quality-left">
                            <h6>Color : </h6>
                            <ul>
                              <li><a href="#"><span></span>Red</a></li>
                              <li><a href="#" class="brown"><span></span>Yellow</a></li>
                              <li><a href="#" class="purple"><span></span>Purple</a></li>
                              <li><a href="#" class="gray"><span></span>Violet</a></li>
                            </ul>
                          </div>
                          <div class="color-quality-right">
                            <h6>Quality :</h6>
                            <div class="quantity">
                              <div class="quantity-select">
                                <div class="entry value-minus1">&nbsp;</div>
                                <div class="entry value1"><span>1</span></div>
                                <div class="entry value-plus1 active">&nbsp;</div>
                              </div>
                            </div>
                            <!--quantity-->
                                <script>
                                $('.value-plus1').on('click', function(){
                                  var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                  divUpd.text(newVal);
                                });

                                $('.value-minus1').on('click', function(){
                                  var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                  if(newVal>=1) divUpd.text(newVal);
                                });
                                </script>
                              <!--quantity-->
                          </div>
                          <div class="clearfix"> </div>
                        </div>
                      <div class="women">
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                        <div class="add">
                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content modal-info">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                    <img src="images/p10.jpg" class="img-responsive" alt="">
                    </div>
                      <div class="col-md-7 new-grid">
                        <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                          <div class="color-quality-left">
                            <h6>Color : </h6>
                            <ul>
                              <li><a href="#"><span></span>Red</a></li>
                              <li><a href="#" class="brown"><span></span>Yellow</a></li>
                              <li><a href="#" class="purple"><span></span>Purple</a></li>
                              <li><a href="#" class="gray"><span></span>Violet</a></li>
                            </ul>
                          </div>
                          <div class="color-quality-right">
                            <h6>Quality :</h6>
                            <div class="quantity">
                              <div class="quantity-select">
                                <div class="entry value-minus1">&nbsp;</div>
                                <div class="entry value1"><span>1</span></div>
                                <div class="entry value-plus1 active">&nbsp;</div>
                              </div>
                            </div>
                            <!--quantity-->
                                <script>
                                $('.value-plus1').on('click', function(){
                                  var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                  divUpd.text(newVal);
                                });

                                $('.value-minus1').on('click', function(){
                                  var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                  if(newVal>=1) divUpd.text(newVal);
                                });
                                </script>
                              <!--quantity-->
                          </div>
                          <div class="clearfix"> </div>
                        </div>
                      <div class="women">
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                        <div class="add">
                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content modal-info">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                    <?php echo Html::img('@web/images/p12.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                      <div class="col-md-7 new-grid">
                        <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                          <div class="color-quality-left">
                            <h6>Color : </h6>
                            <ul>
                              <li><a href="#"><span></span>Red</a></li>
                              <li><a href="#" class="brown"><span></span>Yellow</a></li>
                              <li><a href="#" class="purple"><span></span>Purple</a></li>
                              <li><a href="#" class="gray"><span></span>Violet</a></li>
                            </ul>
                          </div>
                          <div class="color-quality-right">
                            <h6>Quality :</h6>
                            <div class="quantity">
                              <div class="quantity-select">
                                <div class="entry value-minus1">&nbsp;</div>
                                <div class="entry value1"><span>1</span></div>
                                <div class="entry value-plus1 active">&nbsp;</div>
                              </div>
                            </div>
                            <!--quantity-->
                                <script>
                                $('.value-plus1').on('click', function(){
                                  var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                  divUpd.text(newVal);
                                });

                                $('.value-minus1').on('click', function(){
                                  var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                  if(newVal>=1) divUpd.text(newVal);
                                });
                                </script>
                              <!--quantity-->
                          </div>
                          <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                        <div class="add">
                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
