<style>
    body {
        background-color: #FFE866;
    }
    thead {
        background-color: #5E1A99;
        color: #FFFFFF;
    }
    table {
        background-color: #FF8066;
    }
    tbody tr:nth-child(even) {
        background-color: #33D6D9;
    }
    tbody tr:hover {
        background-color: #5BD65B;
    }
    h1 {
        color: #FF4DA9;
    }
    td {
        color: #000000;
    }
</style>

<h1>Operators List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($operators as $operator)
            <tr>
                <td>{{ $operator->id }}</td>
                <td>{{ $operator->firstname }}</td>
                <td>{{ $operator->surname }}</td>
                <td>{{ $operator->email }}</td>
                <td>{{ $operator->password }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
