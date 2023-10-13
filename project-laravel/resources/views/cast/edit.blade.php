@section('pageTitle', 'Edit Cast')
@section('btn')
    <a href="{{ route('cast.cast') }}" class="btn btn-secondary">back</a>
@endsection
@extends('layout.app')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit</h3>
        </div>
        <form action="{{ url('cast/' . $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mt-3 mb-3">Nama</h5>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" name="nama" class="form-control" placeholder="nama"
                                value="{{ $data->nama }}">
                        </div>
                        @error('nama')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-2">
                        <h5 class="mt-3 mb-3">Umur</h5>
                        <div class="input-group mb-3">
                            <input type="number" name="umur" min="1" max="100" class="form-control"
                                placeholder="umur" value="{{ $data->umur }}">
                            <div class="input-group-append">
                                <span class="input-group-text">tahun</span>
                            </div>
                        </div>
                    </div>
                    @error('umur')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>
                        <h5 class="mt-3 mb-3">BIO</h5>
                    </label>
                    <textarea class="form-control" name="bio" rows="3" placeholder="Enter ..." style="height: 139px;">{{ $data->bio }}</textarea>
                    @error('bio')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- /input-group -->
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <!-- /.card-body -->
        </form>
    </div>

@endsection
