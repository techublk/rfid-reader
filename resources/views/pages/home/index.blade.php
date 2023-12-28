@extends('layouts.app')

@section('content')



<h1 class="text-center">Home</h1>

@include('components.colourditector')

<div class="history">

    <table class="table table-striped table-success table-striped mt-5 text-center">
        <thead>
            <tr>
                <th scope="col">C0</th>
                <th scope="col">c1</th>
                <th scope="col">c2</th>
                <th scope="col">c3</th>
                <th scope="col">timeStamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colorArr as $item)
                
            
                    
            <tr>
                        <td id='data_c0'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-circle-fill status-icon {{ $item->c0 == 1 ? 'green' : ($item->c0 == 0 ? 'red' : '') }}" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                        </td>
                        <td id='data_c1'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-circle-fill status-icon {{ $item->c1== 1 ? 'green' : ($item->c1 == 0 ? 'red' : '') }}" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                        </td>
                        <td id='data_c2'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-circle-fill status-icon {{ $item->c2 == 1 ? 'green' : ($item->c2 == 0 ? 'red' : '') }}" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                        </td>
                        <td id='data_c3'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-circle-fill status-icon {{$item->c3 == 1 ? 'green' : ($item->c3 == 0 ? 'red' : '') }}" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                        </td>
                        <td id='data_time'>
                            {{ $item->created_at }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>



     
    
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


