<style>
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
</style>

<h1>Books List</h1>

<table>
    <thead>
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
