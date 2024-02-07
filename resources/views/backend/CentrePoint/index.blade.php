@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Set Center Point
                        <a href="{{ route('centre-point.create') }}" class="btn btn-info btn-sm float-end">Create data</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table" id="dataCenterPoint">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">No</th>
                                        <th class="px-4 py-2">Nama</th>
                                        <th class="px-4 py-2">Titik Koordinat</th>
                                        <th class="px-4 py-2">Keterangan</th>
                                        <th class="px-4 py-2">Alamat</th>
                                        <th class="px-4 py-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <form action="" method="POST" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" style="display:none">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataCenterPoint').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                lengthChange: true,
                autoWidth: true,
                ajax: '{{ route('centre-point.data') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nama'
                    },
                    {
                        data: 'coordinates'
                    },
                    {
                        data: 'keterangan'
                    },
                    {
                        data: 'alamat'
                    },
                    {
                        data: 'action'
                    }
                ]
            });
        });
    </script>
@endpush
