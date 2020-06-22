@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <h6 class="mb-3">Total Bagian : {{ $total }}</h6>
                                <thead>
                                    <tr>
                                        <th scope="col" style="border-bottom: 0">Nama Bagian</th>
                                        <th scope="col" style="border-bottom: 0">Nama Supervisor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $bagian)
                                    <tr>
                                        <td>
                                            @can('view', $bagian)
                                            <a href="{{ route('bagian.show', $bagian->id) }}" class="btn btn-sm btn-success my-1">{{ $bagian->nama_bagian }}</a>
                                            @endcan
                                            @cannot('view', $bagian)
                                            {{ $bagian->nama_bagian }}
                                            @endcannot
                                            @can('delete', $bagian)
                                            <form action="{{ route('bagian.destroy', $bagian->id) }}" method="post" class="my-1 d-inline-block">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                            @endcan
                                        </td>
                                        <th>{{ $bagian->nama_supervisor }}</th>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2" class="text-center">Data Tidak Ditemukan!</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection