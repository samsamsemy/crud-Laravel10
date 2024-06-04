@extends('layout.main')

@section('content')
<h1>Data students</h1>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm bt    n-primary" onclick="window.location='{{ url('students/add') }}'">
        <i class="ri-add-circle-line"></i>Add new data
      </button>
    </div>
    <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>BERHASIL!</strong> {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Students</th>
                    <th>Full Name</th>
                    <th>Genre</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->idstudents }}</td>
                        <td>{{ $row->fullname }}</td>
                        <td>{{ $row->gender }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->emailaddress }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>
                            <button onclick="window.location='{{ url('students/'.$row->idstudents) }}'"
                                type="button" class="btn btn-sm btn-info" title="Edit Data">
                                <i class="ri-edit-box-line"></i>
                            </button>
                            <form onsubmit="return deleteData('{{ $row->fullname }}')" style="display: inline" method="POST" action="{{ url('students/'.$row->idstudents) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Hapus data" class="btn btn-sm btn-danger">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                    <script>
                        function deleteData(name){
                            pesan = confirm('Yakin data students dengan nama ${name} mau dihapus?');
                            if(pesan) return true;
                            else return false;
                        }
                    </script>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
@endsection
