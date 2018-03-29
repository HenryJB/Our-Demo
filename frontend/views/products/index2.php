<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php $this->title ='Del-York Group International';?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- web fonts -->
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- //web fonts -->
    <?php $this->head() ?>

  <!-- start-smooth-scrolling -->

  <!-- //end-smooth-scrolling -->
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
  <!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="#">Del-York Store<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1">
				<form action="#" method="post" class="last">
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
	</div>
	<!-- //header -->
  <!-- navigation -->
	<div class="navigation">
		<div class="container">
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
						<li>
                <?= Html::a('Home', ['site/index'], ['class'=>'act'])?>

            </li>
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">

                  <?php  if(count($categories)> 0): ?>

                          <?php foreach ($categories as $category): ?>
                            <div class="col-sm-3">
                              <ul class="multi-column-dropdown">
                               <h6><?= $category->name?></h6>
                                <?php $products = $category->getProducts()->all(); ?>
                                <?php foreach ($products as $product):?>
                                  <li>
                                    <?= Html::a($product->name, ['products/view', 'id' => $product->id], ['class' => '']) ?>
                                  </li>
                                <?php endforeach;?>
                             </ul>
                           </div>
                         <?php endforeach?>
                  <?php endif?>




									<div class="clearfix"></div>
								</div>
							</ul>
						</li>

            <li><a href="mail.html">Locations</a></li>
            <li><a href="mail.html">Merchants</a></li>
            <li><a href="mail.html">Login</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

<div class="site-index">

  <!-- banner -->
	<div class="banner">
		<div class="container">
			<h3>Electronic Store, <span>Special Offers</span></h3>
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div>
					<!-- pop-up-box -->

					<!--//pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://www.youtube.com/embed/ZQa6GUVnbNM"></iframe>
					</div>

			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
        <?php  if(count($categories)> 0): ?>
                  <?php $count =1;?>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">

                      <?php foreach ($categories as $category): ?>
                            <li role="presentation" class="<?php echo $count ==1? "active": "" ?>">
                              <?= Html::a($category->name, ["#tab".$category->id], ["role"=>"tab", "data-toggle"=>"tab", "aria-controls"=>"tab".$category->id]) ?>
                            </li>
                          <?php $count++;?>
                      <?php endforeach;?>
            <?php endif?>


					</ul>
					<div id="myTabContent" class="tab-content">
            <?php if(count($categories)>0) :?>
              <?php $c =1;?>
                <?php foreach($categories as $category) :?>
						<div role="tabpanel" class="<?=$c ==1? "tab-pane fade active in": "tab-pane fade" ?> " id="tab<?=$category->id?>" aria-labelledby="tab-<?=$category->id?>">
							<div class="agile_ecommerce_tabs">
                <?php $products = $category->getProducts()->all(); ?>
                  <?php foreach ($products as $product) : ?>

      								<div class="col-md-4 agile_ecommerce_tab_left">
      									<div class="hs-wrapper">
                          <?php echo Html::img('@web/uploads/'.$product->imageUrl, $options=['class'=> 'img-responsive']) ?>
                          <?php echo Html::img('@web/uploads/'.$product->imageUrl2, $options=['class'=> 'img-responsive']) ?>


      										<div class="w3_hs_bottom">
      											<ul>
      												<li>
      													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
      												</li>
      											</ul>
      										</div>
      									</div>
      									<h5><a href="single.html"><?php echo $product->name ?></a></h5>
      									<div class="simpleCart_shelfItem">
      										<p><span>&#8358;380</span> <i class="item_price">&#8358;<?php echo $product->cost ?></i></p>
      										<form action="#" method="post">
      											<input type="hidden" name="cmd" value="_cart" />
      											<input type="hidden" name="add" value="1" />
                            <input type="hidden" name="product_id" value="<?php echo $product->id ?>" />
      											<input type="hidden" name="w3ls_item" value="<?php echo $product->name ?>" />
      											<input type="hidden" name="amount" value="<?php echo $product->cost ?>" />
      											<button type="submit" class="w3ls-cart">Buy Now</button>
      										</form>
      									</div>
      								</div>

              <?php endforeach; ?>

								<div class="clearfix"> </div>
							</div>

						</div>
            <?php $c++;?>
          <?php  endforeach ?>
        <?php  endif ?>

					</div> <!-- end of content Tab -->
				</div> <!-- end of Tab toggle -->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- modal-video -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							  <?php echo Html::img('@web/images/3.jpg', $options=['class'=> 'img-responsive']) ?>
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Mobile Phone 3GB</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							<div class="rating">
								<div class="rating-left">
									  <?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									 <?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									 <?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									 <?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									 <?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$380</span> <i class="item_price">$350</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Mobile Phone1">
									<input type="hidden" name="amount" value="350.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
               <?php echo Html::img('@web/images/9.jpg', $options=['class'=> 'img-responsive']) ?>
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Multimedia Home Accessories</h4>
							<p>Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in
								reprehenderit in voluptate velit esse cillum dolore
								eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
                   <?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
								<?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$180</span> <i class="item_price">$150</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Headphones">
									<input type="hidden" name="amount" value="150.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
              <?php echo Html::img('@web/images/11.jpg', $options=['class'=> 'img-responsive']) ?>

						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Quad Core Colorful Laptop</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in
								reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia  deserunt.</p>
							<div class="rating">
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
								<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$880</span> <i class="item_price">$850</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Laptop">
									<input type="hidden" name="amount" value="850.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
              <?php echo Html::img('@web/images/14.jpg', $options=['class'=> 'img-responsive']) ?>

						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Cool Single Door Refrigerator </h4>
							<p>Duis aute irure dolor inreprehenderit in voluptate velit esse cillum dolore
								eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
								<?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$950</span> <i class="item_price">$820</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Mobile Phone1">
									<input type="hidden" name="amount" value="820.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
              <?php echo Html::img('@web/images/17.jpg', $options=['class'=> 'img-responsive']) ?>

						</div>
						<div class="col-md-7 modal_body_right">
							<h4>New Model Mixer Grinder</h4>
							<p>Excepteur sint occaecat laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
								eu fugiat nulla pariatur cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
								  <?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>460</span> <i class="item_price">450</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Mobile Phone1">
									<input type="hidden" name="amount" value="450.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
              <?php echo Html::img('@web/images/36.jpg', $options=['class'=> 'img-responsive']) ?>

						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Dry Vacuum Cleaner</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
								<?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$960</span> <i class="item_price">$920</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Vacuum Cleaner">
									<input type="hidden" name="amount" value="920.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
              <?php echo Html::img('@web/images/37.jpg', $options=['class'=> 'img-responsive']) ?>

						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Kitchen & Dining Accessories</h4>
							<p>Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in
								reprehenderit in voluptate velit esse cillum dolore
								eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star-.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="rating-left">
									<?php echo Html::img('@web/images/star.png', $options=['class'=> 'img-responsive']) ?>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$280</span> <i class="item_price">$250</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Induction Stove">
									<input type="hidden" name="amount" value="250.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //modal-video -->
	<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
				<a href="products.html">Shop Now</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>hot deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom1 -->
	<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			<h2>Special Deals</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						  <?php echo Html::img('@web/images/21.jpg', $options=['class'=> 'img-responsive']) ?>
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>30%<span>Off/-</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4>We Offer <span>Best Products</span></h4>
						</div>
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;">
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
                      <?php echo Html::img('@web/images/t1.png', $options=['class'=> 'img-responsive']) ?>

										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Laura</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;">
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<?php echo Html::img('@web/images/t2.png', $options=['class'=> 'img-responsive']) ?>
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Michael</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;">
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<?php echo Html::img('@web/images/t3.png', $options=['class'=> 'img-responsive']) ?>
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Rosy</h4>
									</div>
								</div>
							</article>
						</div>
					</div>


				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right">
          <?php echo Html::img('@web/images/20.jpg', $options=['class'=> 'img-responsive']) ?>

					<div class="w3agile_special_deals_grid_right_pos">
						<h4>Women's <span>Special</span></h4>
						<h5>save up <span>to</span> 30%</h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //special-deals -->
	<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Products</h3>
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
              <?php echo Html::img('@web/images/25.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/23.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/24.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/22.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/26.jpg', $options=['class'=> 'img-responsive']) ?>

							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Laptops</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$520</span> <i class="item_price">$500</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3ls_item" value="Red Laptop">
								<input type="hidden" name="amount" value="500.00">
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
              <?php echo Html::img('@web/images/27.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/28.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/29.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/30.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/31.jpg', $options=['class'=> 'img-responsive']) ?>

							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Black Phone</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$380</span> <i class="item_price">$370</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3ls_item" value="Black Phone">
								<input type="hidden" name="amount" value="370.00">
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">

              <?php echo Html::img('@web/images/34.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/33.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/32.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/35.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/36.jpg', $options=['class'=> 'img-responsive']) ?>

							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Kids Toy</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$150</span> <i class="item_price">$100</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3ls_item" value="Kids Toy">
								<input type="hidden" name="amount" value="100.00">
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
              <?php echo Html::img('@web/images/37.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/38.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/39.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/40.jpg', $options=['class'=> 'img-responsive']) ?>
              <?php echo Html::img('@web/images/41.jpg', $options=['class'=> 'img-responsive']) ?>

							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Induction Stove</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$280</span> <i class="item_price">$250</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3ls_item" value="Induction Stove">
								<input type="hidden" name="amount" value="250.00">
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">
					<li>
            <?php echo Html::img('@web/images/tb1.jpg', $options=['class'=> 'img-responsive']) ?>

					</li>
					<li>
					<?php echo Html::img('@web/images/tb2.jpg', $options=['class'=> 'img-responsive']) ?>
					</li>
					<li>
						<?php echo Html::img('@web/images/tb3.jpg', $options=['class'=> 'img-responsive']) ?>
					</li>
					<li>
						<?php echo Html::img('@web/images/tb4.jpg', $options=['class'=> 'img-responsive']) ?>
					</li>
					<li>
						<?php echo Html::img('@web/images/tb5.jpg', $options=['class'=> 'img-responsive']) ?>
					</li>
				</ul>
			</div>

		</div>
	</div>
	<!-- //top-brands -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->


</div>
