<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="https://www.eternallynocturnal.com/images/blackskull.jpg">
  <title>Stay Awake to Create</title>
   <link rel="stylesheet" href="https://www.eternallynocturnal.com/store/public/foundation/css/foundation.css">
   <link rel="stylesheet" href="https://www.eternallynocturnal.com/store/public/foundation/css/normalize.css">
   <link rel="stylesheet" href="//localhost/enwebstore_beta1/public/foundation/foundation-icons/foundation-icons.css" />



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









    }

    .mainbody{
      width: 80%;
      min-height: 900px;
      border-radius:30px;

      margin-left: 10%;
      background-color: #000000;
      color: #ffffff;
    }

    .blackouttext{
      color:#000000;
    }

    .whiteoutext{
      color:#ffffff;
    }

  


    a, a:visited {
      text-decoration:none;
    }

    h1 {
      font-size: 32px;
      margin: 16px 0 0 0;
      color:#ffffff;
    }
  </style>



  @section('style')


</head>



<body>


   


 


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56104944-1', 'auto');
  ga('send', 'pageview');

</script>



 <div class="row">
        <div class="large-12 columns">
         
     
         
          <div class="row">
            <div class="large-12 columns">


<ul class="example-orbit" data-orbit style="max-height:300px">
  <li>
    <img src="https://www.eternallynocturnal.com/images/halloween15.jpg" alt="slide 1" />
  </li>
</li>    
 <li>
  <img src="https://www.eternallynocturnal.com/images/MaskShirtSlide.png" alt="slide 2" />

</li>  
  <li >
  <img src="https://www.eternallynocturnal.com/images/WebsiteAddSlide.png" alt="slide 3" />
</li>

 

</li>
<img src="https://www.eternallynocturnal.com/images/iand.jpg" alt="slide 4" />
</li>
</ul>







<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="https://www.eternallynocturnal.com/store/public/product"><img src="https://www.eternallynocturnal.com/images/mainenheader.png"></a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>




  <section class="top-bar-section">
    <!-- Right Nav Section -->
  


                  <ul class="right">
                     

                    <li class="has-dropdown">
                      <a a href="https://www.eternallynocturnal.com/store/public/product">SHOP</a>
                      <ul class="dropdown">
                            @foreach(ProductCat::get() as $category)
                              
                            <li> <a style="color:#ffffff"{{link_to_route('sortProducts', Str::title($category->name), $category->name)}}</li>
        <li class="divider"></li>
                            @endforeach
</ul>
                            <li>

                              

                              <a href="{{URL::to('cart')}}"><i class="fi-shopping-cart">  </i></a>
                             
                            </li>                          
                      </ul>

                  </ul>

                  <ul class="left">
                    <li class="divider"></li>
                    <li>
                      <a href="https://twitter.com/enclothingco" target="blank"><i class="fi-social-twitter" style="font-size:20px"></i></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="https://www.facebook.com/EternallyNocturnal" target="blank"><i class="fi-social-facebook" style="font-size:20px"></i></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="https://instagram.com/eternally_nocturnal/" target="blank"><i class="fi-social-instagram" style="font-size:20px"></i></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a data-reveal-id="commentPop" ><i class="fi-comment" style="font-size:20px"></i></a>
                    </li>
                       
                    <li class="divider"></li>
                  </ul>

                </section>
              </nav>
               
            </div>
          </div>

    




</div>
  <center>
<div style="min-height:100%;background-color:#000000;">

@yield('content')



                        {{--COMMENT--}}

                              <div id="commentPop" class="reveal-modal" style="max-width:400px;max-height:60%;background-color:#000000;" data-reveal> 
                                                        <h1>Send us a message!</h1>
                                                         {{Form::open(array('route' => 'commentFeedback', 'method' => 'post'))}}
                                                         <div class="row">
                                                            <div class="small-12 large-12 columns">
                                                              {{Form::text('name', '', array('placeholder' => 'Name'))}}
                                                            </div>
                                                            
                                                            <div class="small-12 large-12 columns">
                                                              {{Form::text('email', '', array('placeholder' => 'An email we can reply to'))}}
                                                            </div>

                                                            <div class="small-12 large-12 columns">
                                                              {{Form::textarea('message', '', array('placeholder' => 'Message', 'style' => 'color:#000000;max-height:150px;'))}}
                                                            </div>
                                                            <button style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i> Send Feedback </button>
                                                            {{Form::close()}}
                                                          </div>

                                    <a class="close-reveal-modal">&#215;</a>


                                  </div>

                            {{--COMMENT--}}
</div>
</center>



  <script src="https://www.eternallynocturnal.com/store/public/foundation/js/vendor/jquery.js"></script>
  <script src="https://www.eternallynocturnal.com/store/public/foundation/js/foundation.min.js"></script>

  <script>
    $(document).foundation();
         $(document).ready(function(){$('#showspecial').foundation('reveal', 'open')});
    </script>
  </script>


</body>
</html>