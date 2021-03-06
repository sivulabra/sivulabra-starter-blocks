class WooCommerce {
  constructor() {
    this.jquery()
    this.events()
  }

  events() {
    
  }

  jquery() {

    // Custom events when a product is added to the cart (with jQuery because there is no other way :D)
    (function($) {
      $(document.body).on('added_to_cart', function() {
        console.log("EVENT: Added to cart")
      })
    })(jQuery)

    // WooCommerce AJAX update cart (again with jQuery xD)
    let timeout
    jQuery(function($) {
      $('.woocommerce-cart').on('change', 'input.qty', function() {
        if (timeout !== undefined) {
          clearTimeout(timeout)
        }

        timeout = setTimeout(function() {
          $("[name='update_cart']").trigger("click")
        }, 500) // Delay amount in milliseconds
      })
    })

  }
}

export default WooCommerce