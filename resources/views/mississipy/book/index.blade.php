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

        <!-- Back Button -->
        <div class="mb-3 text-end">
            <button class="btn btn-primary" onclick="goBack()">Go Back</button>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Publisher</th>
                        <th>Publication Date</th>
                        <th>ISBN13</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr data-book-id="{{ $book->id }}"> <!-- Ensure you have data-book-id for identification -->
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->genre }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->publication_date }}</td>
                            <td>{{ $book->isbn13 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }

        document.addEventListener('DOMContentLoaded', function() {
            const bookRows = document.querySelectorAll('tbody tr');
            bookRows.forEach(row => {
                row.classList.add('book-row');
                row.addEventListener('click', function() {
                    const bookId = this.getAttribute('data-book-id');
                    window.location.href = `/mississipy/book/${bookId}`;
                });
            });
        });
    </script>
</body>
</html>

<style>
    .book-row {
        cursor: pointer;
    }
</style>