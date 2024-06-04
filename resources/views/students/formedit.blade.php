@extends('layout.main')

@section('content')
<h1>Edit students</h1>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('students') }}'">
        <i class="ri-add-circle-line"></i>kembali
      </button>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('students/'.$txtid) }}">
        @csrf
        @method('PUT')
        {{-- Id Students --}}
        <div class="row mb-3">
            <label for="txtid" class="col-sm-2 col-form-label">ID students</label>
            <div class="col-sm-4">
              <input type="text" class="form-control-plaintext" id="txtid" name="txtid" value="{{ $txtid }}">
            </div>
        </div>
        {{-- Id Students end --}}

        {{-- name --}}
        <div class="row mb-3">
            <label for="txtfullname" class="col-sm-2 col-form-label">Fullname</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="txtfullname" name="txtfullname" value="{{ $txtfullname }}">
            </div>
        </div>
        {{-- name end --}}

        {{-- gender --}}
        <div class="row mb-3">
            <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-6">
              <select class="form-select form-select-sm" name="txtgender" id="txtgender">
                <option value="" selected>Pilih</option>
                <option value="M" {{ ($txtgender=='M') ? 'selected' : '' }}>Male</option>
                <option value="F" {{ ($txtgender=='F') ? 'selected' : '' }}>Female</option>
              </select>
            </div>
        </div>
        {{-- gender end --}}

        {{-- Address --}}
        <div class="row mb-3">
            <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-6">
                <textarea class="form-control" name="txtaddress" id="txtaddress" cols="30" rows="10" >{{ $txtaddress }}</textarea>
                @error('txtaddress')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        {{-- Address end --}}

        {{-- Email --}}
        <div class="row mb-3">
            <label for="txtemail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" value="{{ $txtemail }}" id="txtemail" name="txtemail" >
                @error('txtemail')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        {{-- Email end --}}

        {{-- Phone --}}
        <div class="row mb-3">
            <label for="txtphone" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="txtphone" name="txtphone" value="{{ $txtphone }}">
              @error('txtphone')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
        </div>
        {{-- Phone end --}}

        {{-- button --}}
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-sm btn-success">Update</button>
            </div>
        </div>
        {{-- button end --}}
        </form>
    </div>
</div>
@endsection
