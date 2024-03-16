<table  class="table" >
    <thead>
        <tr>
              <th> Product Name</th>
                <th>Quantity in Stock</th>
               <th>Price Per Item</th>
               <th>  Datetime  Submitted</th>
               <th>Total Value </th>
        </tr>
    </thead>
    <tbody>

        @foreach($products as $product)
         <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->quantity }}</td>
            <td>${{ $product->price }}</td>
            <td>{{ $product->created_at }}</td>
            <td>${{ $product->quantity * $product->price }}</td>
        </tr>
    
        @endforeach
    </tbody>
</table>
