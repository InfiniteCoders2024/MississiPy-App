<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <style>
        body {
            background-color: #f0f0f0; /* Light grey color */
        }
    </style>
</head>
<body>
    <h1>Welcome to the Employee Dashboard</h1>

    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
    <br>

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