<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Client</title>
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
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="date"] {
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

    <h1>Create a New Electronic</h1>

    <form action="{{ route('electronic.store') }}" method="POST">
        @csrf

        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id" required>

        <label for="serial_num">Serial Number:</label>
        <input type="text" id="serial_num" name="serial_num" required>

        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand" required>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required>

        <label for="spec_tec">Spec Tec:</label>
        <input type="text" id="spec_tec" name="spec_tec" required>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required>

        <button type="submit">Create Electronic</button>
    </form>

</body>
</html>
