<body style="background-color: #d2b48c; margin: 0; padding: 20px;">
    <div style="background-color: #7d7c7b; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <h1>Search Result</h1>
        The only way to do great work is to love what you do. - Steve Jobs
    </div>
    
   <div>
       <h1>Search Results for "{{ $searchText }}"</h1>

       @if($results->isEmpty())
           <p>No Products found matching your search criteria.</p>
       @elseif ($product_type == 'book')
           <table>
               <thead>
                   <tr>
                       <th>Product id</th>
                       <th>Title</th>
                       <th>ISBN13</th>
                       <th>Genre</th>
                       <th>Publisher</th>
                       <th>Publication date</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($results as $book)
                   <tr>
                       <td>{{ $book->product_id }}</td>
                       <td>{{ $book->title }}</td>
                       <td>{{ $book->isbn13 }}</td>
                       <td>{{ $book->genre }}</td>
                       <td>{{ $book->publisher }}</td>
                       <td>{{ $book->publication_date }}</td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
       @elseif ($product_type == 'electronic')
           <table>
               <thead>
                   <tr>
                       <th>Product id</th>
                       <th>Brand</th>
                       <th>Model</th>
                       <th>Spec Tec</th>
                       <th>Type</th>
                   </tr>
               </thead> 
               <tbody>
                   @foreach($results as $electronic)
                   <tr> 
                       <td>{{ $electronic->product_id }}</td>
                       <td>{{ $electronic->brand }}</td>
                       <td>{{ $electronic->model }}</td>
                       <td>{{ $electronic->spec_tec }}</td>
                       <td>{{ $electronic->type }}</td>
                   </tr>
                   @endforeach
               </tbody>
           </table> 
       @endif
   </div>
</body>