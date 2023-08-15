@extends('Admin.Partials.index')
@section('container')
<main id="main" class="main">
    <div>
        <h1>Data Diagnosa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                <li class="breadcrumb-item active">Data Diagnosa</li>
            </ol>
        </nav>

        <!-- Add input fields for start and end dates -->
        
       

        <div class="card p-3">
            <table id="diagnosaTable" class="table table-hover">

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="start_date">Dari Tanggal:</label>
                        <input type="date" id="start_date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="end_date">Hingga Tanggal:</label>
                        <input type="date" id="end_date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary mt-4" id="filter_btn">Filter</button>
                    </div>
                </div>
                
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Waktu Diagnosa</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Diagnosa</th> 
                        <th scope="col">aksi</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat_dignosa as $index => $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->umur }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->penyakit }}</td>
                        <td>
                            <a href="{{ route('Admin.Data_Diagnosa.show', ['id' => $item->id]) }}" class="btn btn-primary">  <i class='bx bx-show'></i></a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</main>

<!-- Include necessary CSS and JavaScript files for DataTables and Buttons -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>


<!-- Add this modified JavaScript code -->
<script>
    // 
    $(document).ready(function() {
    var table = $('#diagnosaTable').DataTable({
        dom: 'Bfrtip', // B: Buttons
        buttons: [
            {
                extend: 'pdfHtml5',
                text: 'Export PDF',
                title: 'DATA HISTORY KONSULTASI', // Nama file PDF
                customize: function(doc) {
                    doc.styles.title = {
                        color: 'black',
                        fontSize: '20',
                        alignment: 'center'
                    }
                }
            }
        ]
        
    });
        // Add event listener for the "Filter" button
        $('#filter_btn').on('click', function() {
            var startDate = $('#start_date').val();
            var endDate = $('#end_date').val();
    
            // Format the date range in the format "YYYY-MM-DD"
            var formattedStartDate = formatDate(startDate);
            var formattedEndDate = formatDate(endDate);

            // Filter table based on the selected date range (column index 1)
            table.columns(1).search(formattedStartDate + ' - ' + formattedEndDate).draw();
        });

        // Add the ability to clear the date filter and display all data
        $('#clear_btn').on('click', function() {
            $('#start_date').val('');
            $('#end_date').val('');
            table.columns(1).search('').draw();
        });

        // Helper function to format the date to "YYYY-MM-DD"
        function formatDate(dateString) {
            var dateObj = new Date(dateString);
            var year = dateObj.getFullYear();
            var month = String(dateObj.getMonth() + 1).padStart(2, '0');
            var day = String(dateObj.getDate()).padStart(2, '0');
            return year + '-' + month + '-' + day;
        }
    });
</script>

<!-- Initialize DataTable on the table with id "diagnosaTable" -->
{{-- <script>
    $(document).ready(function() {
        var table = $('#diagnosaTable').DataTable({
            dom: 'Bfrtip', // B: Buttons
            buttons: ['pdf'] // Add the PDF export button
        });
        $('#filter_btn').on('click', function() {
            var startDate = $('#start_date').val();
            var endDate = $('#end_date').val();
    
            // Format the date range in the format "YYYY-MM-DD"
            var formattedStartDate = formatDate(startDate);
            var formattedEndDate = formatDate(endDate);

            // Filter table based on the selected date range
            table.column(1).search(formattedStartDate + ' - ' + formattedEndDate, true, false).draw();
        });

        // Add the ability to clear the date filter and display all data
        $('#clear_btn').on('click', function() {
            $('#start_date').val('');
            $('#end_date').val('');
            table.column(1).search('').draw();
        });

        // Helper function to format the date to "YYYY-MM-DD"
        function formatDate(dateString) {
            var dateObj = new Date(dateString);
            var year = dateObj.getFullYear();
            var month = String(dateObj.getMonth() + 1).padStart(2, '0');
            var day = String(dateObj.getDate()).padStart(2, '0');
            return year + '-' + month + '-' + day;
        }
        
    });
    // Add event listener to filter button
    // $('#filter_btn').on('click', function() {
    //         var startDate = $('#start_date').val();
    //         var endDate = $('#end_date').val();
    
    //         // Filter the table based on the selected date range
    //         table.columns(1).search(startDate + ' - ' + endDate).draw();
    //     });
    
        // Add event listener to search input
        $('#search_input').on('keyup', function() {
            var searchValue = $(this).val();
    
            // Search the table based on the input value
            table.search(searchValue).draw();
        });
</script> --}}
    <!-- Add this modified JavaScript code -->

    @endsection
   
    
    
    
    

{{-- @extends('Admin.Partials.index')
@section('container')
<main id="main" class="main">
<div>
    <h1>Data Diagnosa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
            <li class="breadcrumb-item active">Data Diagnosa</li>
        </ol>
    </nav>

    <div class="card p-3">
        <table id="diagnosaTable" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Waktu Diagnosa</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Diagnosa</th>
                    <th scope="col">Persentase</th>
                    <th scope="col">Solusi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($riwayat_dignosa as $index => $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->penyakit }}</td>
                    <td>{{ $item->persentase }}</td>
                    <td>{{ $item->solusi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</main>

<!-- Include necessary CSS and JavaScript files for DataTables and Buttons -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<!-- Initialize DataTable on the table with id "diagnosaTable" -->
<script>
$(document).ready(function() {
    $('#diagnosaTable').DataTable({
        dom: 'Bfrtip', // B: Buttons
        buttons: ['pdf'] // Add the PDF export button
    });
});
</script>
@endsection --}}
