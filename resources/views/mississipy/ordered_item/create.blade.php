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

    <h1>Create a New Ordered Item</h1>
    <form action="{{ route('ordered_item.store') }}" method="POST">
        @csrf

        <label for="order_id">Order ID:</label>
        <input type="text" id="order_id" name="order_id" required>

        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id" required>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>

        <label for="price">Price:</label>
        <input type="number" step="0.01" id="price" name="price" required>

        <label for="var_amount">Var Amount:</label>
        <input type="number" step="0.01" id="var_amount" name="var_amount" required>

        <button type="submit">Create Ordered Item</button>
    </form>
</body>
</html>
