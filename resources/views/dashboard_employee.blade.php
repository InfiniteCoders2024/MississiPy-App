<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
</head>
<body>
    <h1>Welcome to the Employee Dashboard</h1>
    <p>Add a new:</p>

    <div class="text-center mt-4">
    <button onclick="window.location.href='/author/create'" class="btn btn-primary">
        Author
    </button>
        <button onclick="window.location.href='/product/create'" class="btn btn-primary">
        Product
    </button>
    <button onclick="window.location.href='/book/create'" class="btn btn-primary">
        Book
    </button>
    <button onclick="window.location.href='/electronic/create'" class="btn btn-primary">
        Electronic
    </button>
    <button onclick="window.location.href='/client/create'" class="btn btn-primary">
        Client
    </button>
</div>

</body>
</html>