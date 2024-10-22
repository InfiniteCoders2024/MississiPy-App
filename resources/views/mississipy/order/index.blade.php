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

<h1>Order List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Date Time</th>
            <th>Delivery Method</th>
            <th>Status</th>
            <th>Payment Card Number</th>
            <th>Payment Card Name</th>
            <th>Payment Card Expiration</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->date_time }}</td>
                <td>{{ $order->delivery_method }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->payment_card_number }}</td>
                <td>{{ $order->payment_card_name }}</td>
                <td>{{ $order->payment_card_expiration }}</td>
            </tr>
        @endforeach
    </tbody>
</table>