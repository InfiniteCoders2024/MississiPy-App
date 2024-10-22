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

<h1>Client List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
            <th>Zip Code</th>
            <th>City</th>
            <th>Country</th>
            <th>Phone Number</th>
            <th>Last Login</th>
            <th>Birthdate</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->firstname }}</td>
                <td>{{ $client->surname }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->password }}</td>
                <td>{{ $client->address }}</td>
                <td>{{ $client->zip_code }}</td>
                <td>{{ $client->city }}</td>
                <td>{{ $client->country }}</td>
                <td>{{ $client->phone_number }}</td>
                <td>{{ $client->last_login }}</td>
                <td>{{ $client->birthdate }}</td>
            </tr>
        @endforeach
    </tbody>
</table>