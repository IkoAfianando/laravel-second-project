@extends("layouts.app")

@section("dashboard")
    <link href={{asset("css/tables.css")}} rel="stylesheet">
    <div class="container-fluid">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold" id="atasan">Data Rumah</h6>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table" style="width: 100%">
                <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Alamat</th>
                    <th>Pemilik</th>
                    <th>Penghuni</th>
                    <th>Aksi</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    @push("js")
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function () {
                isi();
            })

            function isi() {
                $('#table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('rumah') }}',
                    columns: [
                        {data: 'nomor', name: 'nomor'},
                        {data: 'alamat', name: 'alamat'},
                        {data: 'pemilik', name: 'pemilik'},
                        {data: 'penghuni', name: 'penghuni'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });
            }
        </script>
    @endpush
@endsection


