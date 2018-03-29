
$(function() {
  w3ls.render();
  //w3ls.reset();

  w3ls.cart.on('w3sb_checkout', function (evt) {
    var items, len, i;

    if (this.subtotal() > 0) {
      items = this.items();
      console.log(JSON.stringify(items));

      $.ajax({
        url :'http://localhost/delyorkgroup/frontend/web/orders/confirm',
        data: 'data='+items,
        success: function(res){
          alert(res);
        },
        error: function(err){
          alert(err);

        }
      });
      // for (i = 0, len = items.length; i < len; i++) {
      // }
    }
  });
})// end of document
