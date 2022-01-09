@extends("layouts.app")

@section("dashboard")
    <link href={{asset("css/tables.css")}} rel="stylesheet">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info">
        Launch Info Modal
    </button>
    <div class="container-fluid">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold" id="atasan">Data Warga</h6>
        </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="table" style="width: 100%">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Status Perkawinan</th>
                        <th>Status Warga</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                </table>
            </div>
    </div>
    <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Info Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- form start -->
                    <form action="" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Anda">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Foto</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-light">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
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
                    ajax: '{{ route('warga') }}',
                    columns: [
                        {data: 'nama', name: 'nama'},
                        {data: 'foto', name: 'foto'},
                        {data: 'alamat', name: 'alamat'},
                        {data: 'tanggal_lahir', name: 'tanggal_lahir'},
                        {data: 'email', name: 'email'},
                        {data: 'jenis_kelamin', name: 'jenis_kelamin'},
                        {data: 'status_perkawinan', name: 'status_perkawinan'},
                        {data: 'status_warga', name: 'status_warga'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });
            }
        </script>
    @endpush
@endsection


