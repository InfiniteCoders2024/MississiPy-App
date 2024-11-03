<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- For the Display Modal with the Author Details -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<div class="container mt-5">
    <h1 class="text-center mb-4">Author List</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr style="cursor:pointer;"
                    onclick="showAuthorDetails('{{ $author->name }}', '{{ $author->fullname }}', '{{ $author->birthdate }}')">
                    <td>{{ $author->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


 <!-- For the Display Modal with the Author Details -->
<div class="modal fade" id="authorModal" tabindex="-1" aria-labelledby="authorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="authorModalLabel">Author Details</h5>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> <span id="modal-name"></span></p>
                <p><strong>Full Name:</strong> <span id="modal-fullname"></span></p>
                <p><strong>Birthdate:</strong> <span id="modal-birthdate"></span></p>
            </div>
        </div>
    </div>
</div>

<script>
    function showAuthorDetails(name, fullname, birthdate) {
        document.getElementById('modal-name').innerText = name;
        document.getElementById('modal-fullname').innerText = fullname;
        document.getElementById('modal-birthdate').innerText = birthdate;
        $('#authorModal').modal('show');
    }
</script>


<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

