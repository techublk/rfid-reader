@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class=" text-center">Configarations</h1>

        <form method="post" action="{{ route('configuration.update') }}">
        @foreach (['c0', 'c1', 'c2', 'c3'] as $column)
                @csrf
                <div class="row mt-5">
                    <div class="col-md-3  text-center">
                        <h2>{{ strtoupper($column) }}</h2>
                    </div>
                    <div class="col-md-3  text-center">
                        <a href="{{ route('configuration.show', $column) }}" class="btn btn-primary mb-2">Add Configuration</a>
                    </div>
                    <div class="col-md-3  text-center">
                        @if (isset($latestRecord) && $selectedcolumn === $column )
                        <span class="input-group-text">configuration : <input type="text" name="{{ $column }}" class="form-control" value="{{ $latestRecord->$column }}" placeholder="" readonly> </span><br/><br/> 
                        @endif
                    </div>
                    <div class="col-md-3  text-center">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </div>
        @endforeach
        </form>
        
        @isset($configuration)
        <table class="table table-striped table-success table-striped mt-5 text-center">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Sensor Name</th>
            <th scope="col">Permenent Configuration</th>
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
        @endisset


        
    </div>
@endsection




@push('css')
<style>
input.form-control {
    /* Your styles for input tags go here */
    border: 1px solid #ccc;
    padding: 8px;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}
</style>
@endpush



@push('js')
<script>

</script>
@endpush
