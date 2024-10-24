{{-- <style>
    body {
        background-color: #F0E6EF;
    }
    thead {
        background-color: #4A6FA5;
        color: #FFFFFF;
    }
    table {
        background-color: #F9C784;
    }
    tbody tr:nth-child(even) {
        background-color: #9BDEAC;
    }
    tbody tr:hover {
        background-color: #F39C6B;
    }
    h1 {
        color: #B33951;
    }
    td {
        color: #2E4057;
    }
</style> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Books List</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Product ID</th>
                        <th>ISBN13</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Publisher</th>
                        <th>Publication Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->product_id }}</td>
                            <td>{{ $book->isbn13 }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->genre }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->publication_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
