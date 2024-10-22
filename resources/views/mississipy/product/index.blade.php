<style>
    body {
        background-color: #FFE866;
    }
    thead {
        background-color: #5E1A99;
        color: #FFFFFF;
    }
    table {
        background-color: #FF8066;
    }
    tbody tr:nth-child(even) {
        background-color: #33D6D9;
    }
    tbody tr:hover {
        background-color: #5BD65B;
    }
    h1 {
        color: #FF4DA9;
    }
    td {
        color: #000000;
    }
</style>
<h1>Product List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Vat</th>
            <th>Score</th>
            <th>Product Image</th>
            <th>Active</th>
            <th>Reason</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->vat }}</td>
                <td>{{ $product->score }}</td>
                <td>{{ $product->product_image }}</td>
                <td>{{ $product->active }}</td>
                <td>{{ $product->reason }}</td>
            </tr>
        @endforeach
    </tbody>
</table>