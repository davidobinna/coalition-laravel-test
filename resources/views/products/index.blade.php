@extends('layouts.app')

 @section('content')
 <div class="container d-flex  justify-content-center    mt-5">
    <div style="width: 500px;" class="card mb-3" >

    <div class="card-header">
         <b> <i>Coalition Test form</i> </b> 
      </div>  
    <div class="card-body">


    <form action=""  id="productForm" >
         @csrf

         <div  class="form-group">
            <label for="name">Product Name </label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
         
        <div  class="form-group">
              <label for="quantity"> Quantity in Stock</label>
              <input type="text"  id="quantity" class="form-control" name="quantity">
        </div>
        
        <div  class="form-group">
             <label for=""> Price per Item</label>
             <input type="number" class="form-control" name="price" id="price">
        </div>

        <button type="submit" class="btn btn-primary"  > Sumbit </button>

      </form>
          
      <div  id="productList">
          @include('partials.product_table')
      </div>
          <div>
              <b>Total Product Value: </b> ${{ $theTotalProductValue }}
          </div>
    </div>
    </div>
 </div>
 @endsection

 @section('script')
   <script>
      $(document).ready(function() {
    // Submit form data via AJAX
    $('#productForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '/products',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#productList').load(location.href + ' #productList');
                $('#totalValue').load(location.href + ' #totalValue');
                $('#productForm')[0].reset();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});

   </script>
 @endsection