<body style="background-color: #d2b48c; margin: 0; padding: 20px;">
    <div style="background-color: #7d7c7b; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <h1>Search Result</h1>
        The only way to do great work is to love what you do. - Steve Jobs
    </div>
    
   <div>
       <h1>Search Results for "{{ $searchText }}"</h1>

       @if($results->isEmpty())
           <p>No books found matching your search criteria.</p>
       @else
           <table class="table">
               <thead>
                   <tr>
                       <th>product_id</th>
                       <th>title</th>
                       <th>isbn13</th>
                       <th>genre</th>
                       <th>publisher</th>
                       <th>publication_date</th>
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
       @endif
   </div>
