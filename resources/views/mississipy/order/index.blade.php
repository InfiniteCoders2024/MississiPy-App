<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<div class="container mt-5">
    <h1 class="text-center mb-4">Order List</h1>

    <!-- Back Button -->
    <div class="mb-3 text-end">
        <button class="btn btn-primary" onclick="goBack()">Back</button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
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
                   <tr style="cursor:pointer;"
                        onclick="showOrderDetails(
                        '{{ $order->id }}',
                        '{{ $order->date_time }}',
                        '{{ $order->delivery_method }}',
                        '{{ $order->status }}',
                        '{{ $order->payment_card_number }}',
                        '{{ $order->payment_card_name }}',
                        '{{ $order->payment_card_expiration }}')">

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
    </div>
</div>

<!-- For the Display Modal with the Order Details -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Order ID:</strong> <span id="modal-order-id"></span></p>
                <p><strong>Date Time:</strong> <span id="modal-date-time"></span></p>
                <p><strong>Delivery Method:</strong> <span id="modal-delivery"></span></p>
                <p><strong>Status:</strong> <span id="modal-status"></span></p>
                <p><strong>Payment Card:</strong> <span id="modal-payment-card"></span></p>
                <p><strong>Card Name:</strong> <span id="modal-card-name"></span></p>
            </div>
        </div>
    </div>
</div>

<script>
    function showOrderDetails(order_id, date_time, delivery_method, status, payment_card, card_name) {
        document.getElementById('modal-order-id').innerText = order_id;
        document.getElementById('modal-date-time').innerText = date_time; 
        document.getElementById('modal-delivery').innerText = delivery_method; 
        document.getElementById('modal-status').innerText = status; 
        document.getElementById('modal-payment-card').innerText = payment_card; 
        document.getElementById('modal-card-name').innerText = card_name; 
        $('#orderModal').modal('show');
    }

    function goBack() {
        window.history.back(); // Go back to the previous page
    }
</script>