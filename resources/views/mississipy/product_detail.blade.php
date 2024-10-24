<body style="background-color: #d2b48c; margin: 0; padding: 20px;">
    <div style="background-color: #7d7c7b; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <h1>Product Details</h1>
        Simplicity is the essence of happiness. - Cedric Bledsoe
    </div>
    
    <div>        
        <!-- Common fields from Product table -->
         <h2>Common Details</h2>
        <p>ID: {{ $common_details->id }}</p>
        <p>Quantity: {{ $common_details->quantity }}</p>
        <p>Price: {{ $common_details->price }}</p>
        <p>VAT: {{ $common_details->vat }}</p>
        <p>Score: {{ $common_details->score }}</p>
        <p>Product Image: {{ $common_details->product_image }}</p>
        <p>Active: {{ $common_details->active }}</p>
        <p>Reason: {{ $common_details->reason }}</p>
        
        <!-- Specific fields based on product type -->
        <h2>Specific Details</h2>
        @if ($product_type == 'book')
            <p>ISDN13: {{ $specific_details->isbn13 }}</p>
            <p>Title: {{ $specific_details->title }}</p>
            <p>Genre: {{ $specific_details->genre }}</p>
            <p>Publisher: {{ $specific_details->publisher }}</p>
            <p>Publication Date: {{ $specific_details->publication_date }}</p>
            <h3>Author Details</h3>
            @foreach ($author_details as $author)
                <p>Author Name: {{ $author->name }}</p>
                <p>Author fullname  : {{ $author->fullname }}</p>
                <p>Birth Date: {{ $author->birthdate }}</p>
            @endforeach
        @elseif ($product_type == 'electronic')
            <p>Serial number: {{ $specific_details->serial_number }}</p>
            <p>Brand: {{ $specific_details->brand }}</p>
            <p>Model: {{ $specific_details->model }}</p>
            <p>Spec Tec: {{ $specific_details->spec_tec }}</p>
            <p>Type: {{ $specific_details->type }}</p>
        @endif
    </div>
</body>
