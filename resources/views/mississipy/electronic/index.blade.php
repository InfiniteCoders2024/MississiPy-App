<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- For the Display Modal with the Electronic Details -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<div class="container mt-5">
    <h1 class="text-center mb-4">Electronic List</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($electronics as $electronic)
                    <tr style="cursor:pointer;"
                        onclick="showElectronicDetails(
                        '{{ $electronic->product_id }}', 
                        '{{ $electronic->serial_num }}', 
                        '{{ $electronic->brand }}', 
                        '{{ $electronic->model }}', 
                        '{{ $electronic->spec_tec }}', 
                        '{{ $electronic->type }}')">
                        <td>{{ $electronic->brand }}</td>
                        <td>{{ $electronic->model }}</td>
                        <td>{{ $electronic->type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- For the Display Modal with the Electronic Details -->
<div class="modal fade" id="electronicModal" tabindex="-1" aria-labelledby="electronicModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="electronicModalLabel">Electronic Details</h5>
            </div>
            <div class="modal-body">
                <p><strong>Product ID:</strong> <span id="modal-product-id"></span></p>
                <p><strong>Serial Number:</strong> <span id="modal-serial-number"></span></p>
                <p><strong>Brand:</strong> <span id="modal-brand"></span></p>
                <p><strong>Model:</strong> <span id="modal-model"></span></p>
                <p><strong>Spec Tec:</strong> <span id="modal-spec-tec"></span></p>
                <p><strong>Type:</strong> <span id="modal-type"></span></p>
            </div>
        </div>
    </div>
</div>

<script>
    function showElectronicDetails(product_id, serial_num, brand, model, spec_tec, type) {
        document.getElementById('modal-product-id').innerText = product_id;
        document.getElementById('modal-serial-number').innerText = serial_num;
        document.getElementById('modal-brand').innerText = brand;
        document.getElementById('modal-model').innerText = model;
        document.getElementById('modal-spec-tec').innerText = spec_tec;
        document.getElementById('modal-type').innerText = type;
        $('#electronicModal').modal('show');
    }
</script>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
