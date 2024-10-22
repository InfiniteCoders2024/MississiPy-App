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
<h1>Ordered Item List</h1>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Var Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ordered_items as $ordered_item)
            <tr>
                <td>{{ $ordered_item->id }}</td>
                <td>{{ $ordered_item->order_id }}</td>
                <td>{{ $ordered_item->product_id }}</td>
                <td>{{ $ordered_item->quantity }}</td>
                <td>{{ $ordered_item->price }}</td>
                <td>{{ $ordered_item->var_amount }}</td>
            </tr>
        @endforeach
    </tbody>
</table>