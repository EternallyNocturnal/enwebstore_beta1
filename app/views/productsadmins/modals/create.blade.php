<div class="modal fade" id="createProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="width:60%;color:#ffffff;background-color:#000000;border-radius:35px;border:2px #ffffff solid;">
    <div class="modal-content" style="background-color:#000000;color:#ffffff;border-radius:35px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="createProduct" style="background-color:#000000;color:#ffffff;border-radius:35px;">Create a new Product</h4>
      </div>
      <div class="modal-body col-sm-12 col-md-12" style="background-color:#000000">
        
        <div class="col-sm-12 col-md-5" style="text-align:left">
                    {{Form::open(array('route' => 'newProduct', 'files' => 'true', 'method' => 'post'))}}
                  <label class="whiteouttext">Product Name</label><br>
                  {{Form::text('name', '', array('placeholder' => 'Name'))}}<br>
             


                  <label class="whiteouttext">Description</label><br>
                  {{Form::text('description', '', array('placeholder' => 'Description'))}}<br>


                <label class="whiteouttext">Paypal ID</label><br>
                  {{Form::text('paypal', '', array('placeholder' => 'Paypal ID'))}}<br>
              

                <label class="whiteouttext">Price Display</label><br>
                  {{Form::text('price', '', array('placeholder' => 'Price Display'))}}<br>
                

                
                  <label class="whiteouttext">Product Category</label><br>
                  <select name="category" style="color:#000000;max-width:300px">
                    <option value="">Select a category....</option>
                      @foreach(Productcat::select('name')->distinct()->get() as $cats)
                        <option value="{{$cats->name}}">{{$cats->name}}</option>
                      @endforeach
                  </select><br>

                
                  <label class="whiteouttext"></label><br>
                  {{Form::checkbox('active', 1)}}<label>Active</label>
                
                
                  <label class="whiteouttext"></label><br>
                  {{Form::checkbox('upcomming', 1)}}<label>Upcomming</label>
                
                
                  <label class="whiteouttext"></label><br>
                  {{Form::checkbox('onsale', 1)}}<label>On Sale</label><br><br>
                  
                  <label>Main Image</label><br>
                      {{Form::file('main_image')}}
        </div>




          <div class="col-sm-12 col-md-6">
            <div class="col-sm-12 col-md-4" style="text-align:left">
              <label class="whiteouttext">Available Sizes</label><br>
                {{Form::hidden('onesize', 0)}}
              @foreach(Size::select('size')->distinct()->get() as $size)
                {{Form::hidden($size->size, 0)}}
                <input type="checkbox" name="{{$size->size}}" value="1">       
                <label>{{Str::title($size->size)}}</label><br> 
              @endforeach
              {{Form::checkbox('onesize', 1)}}
              <label>One Size Only</label>
            </div>

            <div class="col-sm-12 col-md-4">
               <label style="color:#ffffff">Inventory</label><br>
               @foreach(Size::select('size')->distinct()->get() as $size)
                {{Form::text($size->size."_inv", '', array('placeholder' => "$size->size Quantity"))}}
               @endforeach
               {{Form::text('onesize_inv', '', array('placeholder' => 'One Size Quantity'))}}
            </div>

            <div class="col-sm-12 col-md-4">
              <label style="color:#ffffff">Price</label><br>
              @foreach(Size::select('size')->distinct()->get() as $size)
                {{Form::text($size->size."_price", '', array('placeholder' => "$"."$size->id"."9.99 is "."$size->id"."999 etc."))}}
              @endforeach
              {{Form::text('onesize_price', '', array('placeholder' => 'One Size Price'))}}
            </div>


      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        
  {{Form::close()}}

      </div>
    </div>
  </div>
</div>

