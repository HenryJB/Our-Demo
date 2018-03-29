<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

?>

<div class="products-index">

  <!--banner-->
  <div class="banner-w3">
    <div class="demo-1">
      <div id="example1" class="core-slider core-slider__carousel example_1">
        <div class="core-slider_viewport">
          <div class="core-slider_list">
            <div class="core-slider_item">
              <?php echo Html::img('@web/uploads/bora-on-off.jpg', $options=['class'=> 'img-responsive']) ?>

            </div>
             <div class="core-slider_item">
               <?php echo Html::img('@web/uploads/bora-klima.jpg', $options=['class'=> 'img-responsive']) ?>
             </div>
            >

           </div>
        </div>
        <div class="core-slider_nav">
          <div class="core-slider_arrow core-slider_arrow__right"></div>
          <div class="core-slider_arrow core-slider_arrow__left"></div>
        </div>
        <div class="core-slider_control-nav"></div>
      </div>
    </div>


  </div>
  <!--banner-->

  <!--content-->
<div class="content">
  <!--banner-bottom-->
    <div class="ban-bottom-w3l">
      <div class="container">
        <div class="col-md-6 ban-bottom">
          <div class="ban-top">
            <?php echo Html::img('@web/images/p1.jpg', $options=['class'=> 'img-responsive']) ?>
            <div class="ban-text">
              <h4>Men’s Clothing</h4>
            </div>
            <div class="ban-text2 hvr-sweep-to-top">
              <h4>50% <span>Off/-</span></h4>
            </div>
          </div>
        </div>
        <div class="col-md-6 ban-bottom3">
          <div class="ban-top">
              <?php echo Html::img('@web/images/p2.jpg', $options=['class'=> 'img-responsive']) ?>
            <div class="ban-text1">
              <h4>Women's Clothing</h4>
            </div>
          </div>
          <div class="ban-img">
            <div class=" ban-bottom1">
              <div class="ban-top">
                  <?php echo Html::img('@web/images/p3.jpg', $options=['class'=> 'img-responsive']) ?>
                <div class="ban-text1">
                  <h4>T - Shirt</h4>
                </div>
              </div>
            </div>
            <div class="ban-bottom2">
              <div class="ban-top">
                  <?php echo Html::img('@web/images/p4.jpg', $options=['class'=> 'img-responsive']) ?>
                <div class="ban-text1">
                  <h4>Hand Bag</h4>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  <!--banner-bottom-->
  <!--new-arrivals-->
    <div class="new-arrivals-w3agile">
      <div class="container">
        <h2 class="tittle">New Arrivals</h2>
        <div class="arrivals-grids">
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                    <div class="grid-img">
                        <?php echo Html::img('@web/images/p6.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                    <div class="grid-img">
                        <?php echo Html::img('@web/images/p5.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                  </a>
                </figure>
              </div>
              <div class="ribben">
                <p>NEW</p>
              </div>
              <div class="ribben1">
                <p>SALE</p>
              </div>
              <div class="block">
                <div class="starbox small ghosting"> </div>
              </div>
              <div class="women">
                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                <span class="size">XL / XXL / S </span>
                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal2">
                    <div class="grid-img">
                        <?php echo Html::img('@web/images/p7.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                    <div class="grid-img">
                        <?php echo Html::img('@web/images/p8.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                  </a>
                </figure>
              </div>
              <div class="ribben2">
                <p>OUT OF STOCK</p>
              </div>
              <div class="block">
                <div class="starbox small ghosting"> </div>
              </div>
              <div class="women">
                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                <span class="size">XL / XXL / S </span>
                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                <a href="#" data-text="Add To Cart" class=" my-cart-b item_add">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
                    <div class="grid-img">
                        <?php echo Html::img('@web/images/p10.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                    <div class="grid-img">
                        <?php echo Html::img('@web/images/p9.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                  </a>
                </figure>
              </div>
              <div class="ribben1">
                <p>SALE</p>
              </div>
              <div class="block">
                <div class="starbox small ghosting"> </div>
              </div>
              <div class="women">
                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                <span class="size">XL / XXL / S </span>
                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
                    <div class="grid-img">
                        <?php echo Html::img('@web/images/p11.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                    <div class="grid-img">
                        <?php echo Html::img('@web/images/p12.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                  </a>
                </figure>
              </div>
              <div class="block">
                <div class="starbox small ghosting"> </div>
              </div>
              <div class="women">
                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                <span class="size">XL / XXL / S </span>
                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  <!--new-arrivals-->
    <!--accessories-->
  <div class="accessories-w3l">
    <div class="container">
      <h3 class="tittle">20% Discount on</h3>
      <span>TRENDING DESIGNS</span>
      <div class="button">
        <a href="#" class="button1"> Shop Now</a>
        <a href="#" class="button1"> Quick View</a>
      </div>
    </div>
  </div>
  <!--accessories-->
  <!--Products-->
    <div class="product-agile">
      <div class="container">
        <h3 class="tittle1"> New Products</h3>
        <div class="slider">
          <div class="callbacks_container">
            <ul class="rslides" id="slider">
              <li>
                <div class="caption">
                  <div class="col-md-3 cap-left simpleCart_shelfItem">
                    <div class="grid-arr">
                      <div  class="grid-arrival">
                        <figure>
                          <a href="single.html">
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p14.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p13.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                          </a>
                        </figure>
                      </div>
                      <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="women">
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 cap-left simpleCart_shelfItem">
                    <div class="grid-arr">
                      <div  class="grid-arrival">
                        <figure>
                          <a href="single.html">
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p15.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p16.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                          </a>
                        </figure>
                      </div>
                      <div class="ribben">
                        <p>NEW</p>
                      </div>
                      <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="women">
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 cap-left simpleCart_shelfItem">
                    <div class="grid-arr">
                      <div  class="grid-arrival">
                        <figure>
                          <a href="single.html">
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p18.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p17.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                          </a>
                        </figure>
                      </div>
                      <div class="ribben1">
                        <p>SALE</p>
                      </div>
                      <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="women">
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 cap-left simpleCart_shelfItem">
                    <div class="grid-arr">
                      <div  class="grid-arrival">
                        <figure>
                          <a href="single.html">
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p20.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p19.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                          </a>
                        </figure>
                      </div>
                      <div class="ribben">
                        <p>-20%</p>
                      </div>
                      <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="women">
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li>
                <div class="caption">
                  <div class="col-md-3 cap-left simpleCart_shelfItem">
                    <div class="grid-arr">
                      <div  class="grid-arrival">
                        <figure>
                          <a href="single.html">
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p21.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p22.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                          </a>
                        </figure>
                      </div>
                      <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="women">
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 cap-left simpleCart_shelfItem">
                    <div class="grid-arr">
                      <div  class="grid-arrival">
                        <figure>
                          <a href="single.html">
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p24.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p23.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                          </a>
                        </figure>
                      </div>
                      <div class="ribben">
                        <p>NEW</p>
                      </div>
                      <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="women">
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 cap-left simpleCart_shelfItem">
                    <div class="grid-arr">
                      <div  class="grid-arrival">
                        <figure>
                          <a href="single.html">
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p26.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p25.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                          </a>
                        </figure>
                      </div>
                      <div class="ribben">
                        <p>-75%</p>
                      </div>
                      <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="women">
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 cap-left simpleCart_shelfItem">
                    <div class="grid-arr">
                      <div  class="grid-arrival">
                        <figure>
                          <a href="single.html">
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p10.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                            <div class="grid-img">
                                <?php echo Html::img('@web/images/p9.jpg', $options=['class'=> 'img-responsive']) ?>
                            </div>
                          </a>
                        </figure>
                      </div>
                      <div class="ribben">
                        <p>NEW</p>
                      </div>
                      <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="women">
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <span class="size">XL / XXL / S </span>
                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  <!--Products-->
  <div class="latest-w3">
    <div class="container">
      <h3 class="tittle1">Latest Fashion Trends</h3>
      <div class="latest-grids">
        <div class="col-md-4 latest-grid">
          <div class="latest-top">
            <?php echo Html::img('@web/images/l1.jpg', $options=['class'=> 'img-responsive']) ?>
            <div class="latest-text">
              <h4>Men</h4>
            </div>
            <div class="latest-text2 hvr-sweep-to-top">
              <h4>-50%</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 latest-grid">
          <div class="latest-top">
          <?php echo Html::img('@web/images/l2.jpg', $options=['class'=> 'img-responsive']) ?>
            <div class="latest-text">
              <h4>Shoes</h4>
            </div>
            <div class="latest-text2 hvr-sweep-to-top">
              <h4>-20%</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 latest-grid">
          <div class="latest-top">
            <?php echo Html::img('@web/images/l3.jpg', $options=['class'=> 'img-responsive']) ?>
            <div class="latest-text">
              <h4>Women</h4>
            </div>
            <div class="latest-text2 hvr-sweep-to-top">
              <h4>-50%</h4>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="latest-grids">
        <div class="col-md-4 latest-grid">
          <div class="latest-top">
            <?php echo Html::img('@web/images/l4.jpg', $options=['class'=> 'img-responsive']) ?>
            <div class="latest-text">
              <h4>Watch</h4>
            </div>
            <div class="latest-text2 hvr-sweep-to-top">
              <h4>-45%</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 latest-grid">
          <div class="latest-top">
            <?php echo Html::img('@web/images/l5.jpg', $options=['class'=> 'img-responsive']) ?>
            <div class="latest-text">
              <h4>Bag</h4>
            </div>
            <div class="latest-text2 hvr-sweep-to-top">
              <h4>-10%</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 latest-grid">
          <div class="latest-top">
            <?php echo Html::img('@web/images/l16.jpg', $options=['class'=> 'img-responsive']) ?>
            <div class="latest-text">
              <h4>Cameras</h4>
            </div>
            <div class="latest-text2 hvr-sweep-to-top">
              <h4>-30%</h4>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
    <div class="new-arrivals-w3agile">
      <div class="container">
        <h3 class="tittle1">Best Sellers</h3>
        <div class="arrivals-grids">
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="single.html">
                    <div class="grid-img">
                      <?php echo Html::img('@web/images/p28.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                    <div class="grid-img">
                      <?php echo Html::img('@web/images/p27.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                  </a>
                </figure>
              </div>
              <div class="ribben">
                <p>NEW</p>
              </div>
              <div class="ribben1">
                <p>SALE</p>
              </div>
              <div class="block">
                <div class="starbox small ghosting"> </div>
              </div>
              <div class="women">
                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                <span class="size">XL / XXL / S </span>
                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="single.html">
                    <div class="grid-img">
                    <?php echo Html::img('@web/images/p28.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                    <div class="grid-img">
                      <?php echo Html::img('@web/images/p27.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                  </a>
                </figure>
              </div>
              <div class="ribben2">
                <p>OUT OF STOCK</p>
              </div>
              <div class="block">
                <div class="starbox small ghosting"> </div>
              </div>
              <div class="women">
                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                <span class="size">XL / XXL / S </span>
                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="single.html">
                    <div class="grid-img">
                      <?php echo Html::img('@web/images/s2.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                    <div class="grid-img">
                      <?php echo Html::img('@web/images/s1.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                  </a>
                </figure>
              </div>
              <div class="ribben1">
                <p>SALE</p>
              </div>
              <div class="block">
                <div class="starbox small ghosting"> </div>
              </div>
              <div class="women">
                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                <span class="size">XL / XXL / S </span>
                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="single.html">
                    <div class="grid-img">
                      <?php echo Html::img('@web/images/s4.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                    <div class="grid-img">
                      <?php echo Html::img('@web/images/s3.jpg', $options=['class'=> 'img-responsive']) ?>
                    </div>
                  </a>
                </figure>
              </div>
              <div class="ribben">
                <p>NEW</p>
              </div>
              <div class="block">
                <div class="starbox small ghosting"> </div>
              </div>
              <div class="women">
                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                <span class="size">XL / XXL / S </span>
                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  <!--new-arrivals-->
</div>
<!--content-->

</div>
