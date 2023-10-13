@section('pageTitle')
    {{ $data->nama }}
@endsection
@extends('layout.app')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data diri</h3>
        </div>
        <div class="card-body">


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Nama</h3>
                </div>
                <div class="card-body">
                    {{ $data->nama }}
                </div>
            </div>


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Umur</h3>
                </div>
                <div class="card-body">
                    {{ $data->umur }}
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bio</h3>
                </div>
                <div class="card-body">
                    {{ $data->bio }}
                </div>
            </div>
            <!-- /input-group -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="float-sm-right">
                <a href="{{ route('cast.cast') }}" class="btn btn-secondary">back</a>
                <a class="btn btn-info" href="{{ url('cast/' . $data->nama . '/edit') }}">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Ubah
                </a>
                <form class="d-inline" onsubmit="return confirm('sure to delete this data')"
                    action="{{ url('cast/' . $data->id . '/delete') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
