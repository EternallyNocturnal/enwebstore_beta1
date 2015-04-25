	{{Form::open(array('route' => 'processPayment', 'method' => 'post'))}}
	{{Form::hidden('data-description', $cart->checkoutPrice())}}
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_W6oEoaW2cMMfY48MU483R4ia"
    data-amount="{{$cart->checkoutPrice()}}"
    data-name="Demo Site"
    data-description= "${{substr($pricetag,0,-2)}}.{{substr($pricetag,-2)}}"
    data-image="/128x128.png">
  </script>
  	{{Form::close()}}