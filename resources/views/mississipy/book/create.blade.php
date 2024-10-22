
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

    <h1>Create a New Book</h1>

    <form action="{{ route('book.store') }}" method="POST">
        @csrf

        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id" required>

        <label for="isbn13">ISBN13:</label>
        <input type="text" id="isbn13" name="isbn13" required>

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required>

        <label for="publisher">Publisher:</label>
        <input type="text" id="publisher" name="publisher" required>

        <label for="publication_date">Publication Date:</label>
        <input type="date" id="publication_date" name="publication_date" required>

        <button type="submit">Create Book</button>
    </form>

</body>
</html>