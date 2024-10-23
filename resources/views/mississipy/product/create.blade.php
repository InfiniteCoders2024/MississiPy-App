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

<form action="{{ route('mississipy.product.store') }}" method="POST">
    @csrf

    <label for="date_time">Date and Time:</label>
    <input type="datetime-local" id="date_time" name="date_time" required>

    <label for="delivery_method">Delivery Method:</label>
    <select id="delivery_method" name="delivery_method" required>
        <option value="Standard">Standard</option>
        <option value="Express">Express</option>
        <option value="Overnight">Overnight</option>
    </select>

    <form action="{{ route('mississipy.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>

        <label for="price">Price:</label>
        <input type="number" step="0.01" id="price" name="price" required>

        <label for="vat">VAT:</label>
        <input type="number" step="0.01" id="vat" name="vat" required>

        <label for="score">Score:</label>
        <input type="number" step="0.1" id="score" name="score" required>

        <label for="product_image">Product Image:</label>
        <input type="file" id="product_image" name="product_image" accept="image/*" required>

        <label for="active">Active:</label>
        <select id="active" name="active" required>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>

        <label for="reason">Reason:</label>
        <textarea id="reason" name="reason" rows="4" cols="50"></textarea>

        <button type="submit">Create Product</button>
    </form>
</body>
</html>
