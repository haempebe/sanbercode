@section('pageTitle', 'Cast')
@extends('layout.app')
@section('btn')
    <div class="btn-list">
        <a href="{{ route('cast.create') }}" class="btn btn-primary">Create New</a>
    </div>
@endsection
@section('content')
    @if (Session::has('success'))
        <div>
            <div class="alert alert-success">
                {{ session::get('success') }}
            </div>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama</th>
                        <th style="width: 10%">Umur</th>
                        <th style="width: 40%">Bio</th>
                        <th style="width: 20%"></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($allCast as $item)
                        <tr>
                            <td>{{ $i }}.</td>
                            <td class="text-muted">{{ $item->nama }}</td>
                            <td class="text-muted">{{ $item->umur }}</td>
                            <td class="text-muted">{{ Str::of($item->bio)->limit(80) }}</td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{ url('cast/' . $item->nama . '/show') }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ url('cast/' . $item->nama . '/edit') }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Ubah
                                </a>
                                <form class="d-inline" onsubmit="return confirm('sure to delete this data')"
                                    action="{{ url('cast/' . $item->id . '/delete') }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
