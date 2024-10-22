<style>
    body {
        background-color: #F0F4F8;
    }
    thead {
        background-color: #1A365D;
        color: #FFFFFF;
    }
    table {
        background-color: #EDF2F7;
    }
    tbody tr:nth-child(even) {
        background-color: #E2E8F0;
    }
    tbody tr:hover {
        background-color: #CBD5E0;
    }
    h1 {
        color: #2D3748;
    }
    td {
        color: #4A5568;
    }
</style>

<h1>Author List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Full Name</th>
            <th>Birthdate</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name }}</td>
                <td>{{ $author->fullname }}</td>
                <td>{{ $author->birthdate }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
