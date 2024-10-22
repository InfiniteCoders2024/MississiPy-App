<style>
    body {
        background-color: #F0F8FF; /* AliceBlue */
    }
    thead {
        background-color: #4B0082; /* Indigo */
        color: #FFFFFF;
    }
    table {
        background-color: #FFA07A; /* LightSalmon */
    }
    tbody tr:nth-child(even) {
        background-color: #E0FFFF; /* LightCyan */
    }
    tbody tr:hover {
        background-color: #98FB98; /* PaleGreen */
    }
    h1 {
        color: #FF69B4; /* HotPink */
    }
    td {
        color: #000000;
    }
</style>

<h1>BookAuthor List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>product_id</th>
            <th>author_id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookauthors as $bookauthor)
            <tr>
                <td>{{ $bookauthor->id }}</td>
                <td>{{ $bookauthor->product_id }}</td>
                <td>{{ $bookauthor->author_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>