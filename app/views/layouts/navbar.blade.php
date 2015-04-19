<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <img style="background-color:#000000" class="navbar-brand" src="https://www.eternallynocturnal.com/images/mainenheader.png">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li>{{link_to_route('productManager', 'Product Manager')}}</li>
            <li><a data-toggle="modal" data-target="#createProduct" class="btn" style="text-align:left">Add Product</a></li>
            <li class="divider"></li>
            <li><a href="#">Commerce Manager</a></li>
            <li><a href="#">Reports</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contacts <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li>{{link_to_route('contacts.index', 'Contact Manager')}}</li>
            <li><a data-toggle="modal" data-target="#createContact" class="btn" style="text-align:left">Add Contact</a></li>createVenue
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shows <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Show Manager</a></li>
            <li><a href="#">Add Show</a></li>
            <li class="divider"></li>
            <li><a href="#">Past Shows</a></li>
            <li><a href="#">Ticket Manager</a></li>
            <li class="divider"></li>
            <li>{{link_to_route('venues.index', 'Venue Manager')}}</a></li>
            <li><a data-toggle="modal" data-target="#createVenue" class="btn" style="text-align:left">Add Venue</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Art <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Art Manager</a></li>
            <li><a href="#">Add Artist</a></li>
            <li class="divider"></li>
            <li><a href="#">Band Manager</a></li>
            <li><a href="#">Add Band</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Affiliates <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Affiliate Manager</a></li>
            <li><a href="#">Add Affiliate</a></li>
          </ul>
        </li> 
      <li><a href="#">Settings</a></li>
    </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

