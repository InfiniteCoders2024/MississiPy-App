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
<h1>Electronic List</h1>

<table>
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Serial Number</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Spec Tec</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($electronics as $electronic)
            <tr>
                <td>{{ $electronic->product_id }}</td>
                <td>{{ $electronic->serial_num }}</td>
                <td>{{ $electronic->brand }}</td>
                <td>{{ $electronic->model }}</td>
                <td>{{ $electronic->spec_tec }}</td>
                <td>{{ $electronic->type }}</td>
            </tr>
        @endforeach
    </tbody>
</table>