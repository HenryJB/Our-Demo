 <?php use yii\helpers\Html;?>
<div class="new-arrivals-w3agile">
      <div class="container">
        <h2 class="tittle">New Arrivals</h2>
        <div class="arrivals-grids">
          <?php foreach($products as $product): ?>
            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                    <div class="grid-img">
                        <?php echo Html::img('@web/images/'.$product->imageUrl, $options=['class'=> 'img-responsive']) ?>
                    </div>
                    <div class="grid-img">
                        <?php echo Html::img('@web/images/'.$product->imageUrl2, $options=['class'=> 'img-responsive']) ?>
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
                
                <button type="button" class="my-cart-b item_add" data-toggle="modal" 
                data-target='#myModal<?= $product->id; ?>'>
                  Add To Cart
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal<?= $product->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel"><?= $product->name; ?></h4>
                    </div>
                    <div class="modal-body">


                    </div>
                    
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>