@extends('layouts.app')

@section('content')



<h1 class="text-center">Home</h1>

@include('components.colourditector')

@include('components.history')
    
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    // Function to update page content
    function updatePageContent(data) {
        // Update your HTML elements with new data
        // Example:
        $('#c0').html(data.c0);
        $('#c1').html(data.c1);
        $('#c2').html(data.c2);
        $('#c3').html(data.c3);

        // Update history table
        // Example:
        // Clear existing rows
        $('#histories tbody').empty();
        // Add new rows
        data.colorArr.forEach(item => {
            $('#histories tbody').append(`
                <tr>
                    <td>${item.c0}</td>
                    <td>${item.c1}</td>
                    <td>${item.c2}</td>
                    <td>${item.c3}</td>
                    <td>${item.created_at}</td>
                </tr>
            `);
        });
    }

    // Periodically check for updates
    function checkForUpdates() {
        $.ajax({
            url: '{{ route("home") }}',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                updatePageContent(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            },
            complete: function() {
                // Repeat the check after a certain interval
                setTimeout(checkForUpdates, 5000); // Adjust the interval as needed
            }
        });
    }

    // Start checking for updates when the page is ready
    $(document).ready(function() {
        checkForUpdates();
    });
</script>
@endpush


