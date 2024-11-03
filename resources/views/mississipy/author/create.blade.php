<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Author</title>
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
        input[type="number"] {
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

    <h1>Create a New Author</h1>

    <form action="{{ route('mississipy.author.store') }}" method="POST">
        @csrf

        <label for="name">Author Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="fullname">Author Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="birthdate">Author Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <br>
        <br>
        <button type="submit">Create Author</button>
    </form>

</body>
</html>
