{{-- <style>
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
</style> --}}
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container mt-5">
    <h1 class="text-center mb-4">Author List</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
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
    </div>
</div>

</table>
<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
