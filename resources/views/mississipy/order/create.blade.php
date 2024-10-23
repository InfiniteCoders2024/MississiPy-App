<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="datetime-local"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<h1>Create a New Order</h1>

<form action="{{ route('mississipy.order.store') }}" method="POST">
    @csrf

    <label for="date_time">Date and Time:</label>
    <input type="datetime-local" id="date_time" name="date_time" required>

    <label for="delivery_method">Delivery Method:</label>
    <select id="delivery_method" name="delivery_method" required>
        <option value="Standard">Standard</option>
        <option value="Express">Express</option>
        <option value="Overnight">Overnight</option>
    </select>

    <label for="status">Status:</label>
    <select id="status" name="status" required>
        <option value="Pending">Pending</option>
        <option value="Processing">Processing</option>
        <option value="Shipped">Shipped</option>
        <option value="Delivered">Delivered</option>
    </select>

    <label for="payment_card_number">Payment Card Number:</label>
    <input type="text" id="payment_card_number" name="payment_card_number" required>

    <label for="payment_card_name">Payment Card Name:</label>
    <input type="text" id="payment_card_name" name="payment_card_name" required>

    <label for="payment_card_expiration">Payment Card Expiration:</label>
    <input type="text" id="payment_card_expiration" name="payment_card_expiration" placeholder="MM/YY" required>

    <button type="submit">Create Order</button>
</form>

</body>
</html>
