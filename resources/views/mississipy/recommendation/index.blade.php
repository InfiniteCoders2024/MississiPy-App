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

<h1>Recommendation List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product ID</th>
            <th>Client ID</th>
            <th>Reason</th>
            <th>Start Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($recommendations as $recommendation)
            <tr>
                <td>{{ $recommendation->id }}</td>
                <td>{{ $recommendation->product_id }}</td>
                <td>{{ $recommendation->client_id }}</td>
                <td>{{ $recommendation->reason }}</td>
                <td>{{ $recommendation->start_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>