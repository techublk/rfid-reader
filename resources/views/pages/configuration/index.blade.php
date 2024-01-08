@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Configurations</h1>

        <form method="post" action="{{ route('configuration.update') }}">
            @csrf
            @foreach (['c0', 'c1', 'c2', 'c3'] as $column)
                <div class="row mt-4">
                    <div class="col-md-3 text-center">
                        <h2>{{ strtoupper($column) }}</h2>
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="{{ route('configuration.show', $column) }}" class="btn btn-primary mb-2">Add Configuration</a>
                    </div>
                    <div class="col-md-3 text-center">c1
                        @if (isset($latestRecord) && $selectedcolumn === $column )
                            <div class="input-group">
                                <input type="text" name="{{ $column }}" class="form-control" value="{{ $latestRecord->$column }}" placeholder="" readonly>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-3 text-center">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </div>
            @endforeach
        </form>

        @isset($configuration)
            <div class="mt-5">
                <h2 class="text-center mb-3">Current Configurations</h2>
                <table class="table table-striped table-light text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sensor Name</th>
                            <th scope="col">Permanent Configuration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>C0</td>
                            <td>{{ $configuration->c0 }}</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>C1</td>
                            <td>{{ $configuration->c1 }}</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>C2</td>
                            <td>{{ $configuration->c2 }}</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>C3</td>
                            <td>{{ $configuration->c3 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endisset
    </div>
@endsection

@push('css')
<style>
    body {
        background-color: #f8f9fa;
        color: #212529;
    }

    input.form-control {
        border: 1px solid #ced4da;
        padding: 8px;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
    }

    h1, h2 {
        color: #495057;
    }

    .btn-primary {
        background-color: #5f5f5f;
        border-color: #373737;
    }

    .btn-primary:hover {
        background-color: #393939;
        border-color: #161616;
    }

    .btn-success {
        background-color: #768493;
        border-color: #444c56;
    }

    .btn-success:hover {
        background-color: #48515b;
        border-color: #292e33;
    }

    .table {
        background-color: #fff;
        color: #212529;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f2f3f4;
    }
</style>
@endpush
