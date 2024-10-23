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

<h1>Create a New Recommendation</h1>
    <form action="{{ route('mississipy.recommendation.store') }}" method="POST">
    @csrf

        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id" required>

        <label for="client_id">Client ID:</label>
        <input type="text" id="client_id" name="client_id" required>

        <label for="reason">Reason:</label>
        <textarea id="reason" name="reason" rows="4" cols="50" required></textarea>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>

        <button type="submit">Create Recommendation</button>
    </form>
</body>
</html>

