<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="http://www.eternallynocturnal.com/images/blackskull.jpg">
  <title>Eternally Nocturnal Shopping Cart</title>
  <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script> 
	<link rel="stylesheet" href="https://www.eternallynocturnal.com/store/public/foundation/css/foundation.css">
    <link rel="stylesheet" href="https://www.eternallynocturnal.com/store/public/foundation/css/normalize.css">
    <link rel="stylesheet" href="https://www.eternallynocturnal.com/store/public/foundation/foundation-icons/foundation-icons.css" />

@yield('header')
<style>


    body {
      margin:0;
      width: 100%;
      font-family:'Lato', sans-serif;
      text-align:center;
      color: #ffffff;


        background: -webkit-gradient(radial, top center, 0px, top center, 100%, , color-stop(0%, rgba(99,3,35,1)), color-stop(100%, rgba(41,8,20,1)));
        background: -webkit-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(41,8,20,1) 100%);
        background: rgba(99,3,35,1);


        background: -moz-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: -webkit-gradient(radial, top center, 0px, top center, 100%, , color-stop(0%, rgba(99,3,35,1)), color-stop(100%, rgba(7,0,16,1)));
        background: -webkit-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: -o-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: -ms-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: radial-gradient(ellipse at top center, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#036323', endColorstr='#072110', GradientType=1 );
        background-repeat: no-repeat;
        background-attachment: fixed;
    }



</style>



</head>




<body>

@yield('content')



  <script src="http://www.eternallynocturnal.com/store/public/foundation/js/vendor/jquery.js"></script>
  <script src="http://www.eternallynocturnal.com/store/public/foundation/js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>

  

@yield('footer')
 


<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
 
<script src="https://js.stripe.com/v2/"></script>
 

</body>
</html>
