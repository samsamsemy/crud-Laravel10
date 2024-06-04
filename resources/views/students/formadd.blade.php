@extends('layout.main')

@section('content')
<h1>Add students</h1>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('students') }}'">
        <i class="ri-add-circle-line"></i>kembali
      </button>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('students') }}">
        @csrf
        {{-- Id Students --}}
        <div class="row mb-3">
            <label for="txtid" class="col-sm-2 col-form-label">ID students</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm @error('txtid') is-invalid @enderror" id="txtid" name="txtid" value="{{ old('txtid') }}">
              @error('txtid')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
        </div>
        {{-- Id Students end --}}

        {{-- name --}}
        <div class="row mb-3">
            <label for="txtfullname" class="col-sm-2 col-form-label">Fullname</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm @error('txtfullname') is-invalid @enderror" id="txtfullname" name="txtfullname" value="{{ old('txtfullname') }}">
                @error('txtfullname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- name end --}}

        {{-- gender --}}
        <div class="row mb-3">
            <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-6">
              <select class="form-select form-select-sm @error('txtgender') is-invalid @enderror" name="txtgender" id="txtgender">
                <option value="" selected>Pilih</option>
                <option value="M" {{ (old('txtgender')=='M') ? 'selected' : '' }}>Male</option>
                <option value="F" {{ (old('txtgender')=='F') ? 'selected' : '' }}>Female</option>
              </select>
            </div>
        </div>
        {{-- gender end --}}

        {{-- Address --}}
        <div class="row mb-3">
            <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-6">
                <textarea class="form-control @error('txtemail') is-invalid @enderror" name="txtaddress" id="txtaddress" cols="30" rows="10"></textarea>
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
              <input type="text" class="form-control form-control-sm @error('txtemail') is-invalid @enderror" id="txtemail" name="txtemail">
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
              <input type="text" class="form-control form-control-sm @error('txtphone') is-invalid @enderror" id="txtphone" name="txtphone">
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
                <button type="submit" class="btn btn-sm btn-success">save</button>
            </div>
        </div>
        {{-- button end --}}
        </form>
    </div>
</div>
@endsection
