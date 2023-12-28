@extends('layouts.app')

@section('content')
    <h1 class="text-center">Home</h1>
    @include('components.colourditector')
    
@endsection




@push('css')
    <style>
       .status-icon {
            color: gray; 
        }

        .status-icon.green {
            color: green;
        }

        .status-icon.red {
            color: red;
        }
    </style>
@endpush



@push('js')

@endpush


