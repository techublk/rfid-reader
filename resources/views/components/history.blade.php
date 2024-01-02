<div class="history">

    <h2 class="text-center">History</h2>

    <table class="table table-striped mt-5 text-center">
        <thead class="bg-dark text-light">
            <tr>
                <th scope="col">C0</th>
                <th scope="col">C1</th>
                <th scope="col">C2</th>
                <th scope="col">C3</th>
                <th scope="col">Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colorArr as $item)
                <tr>
                    <td>
                        <div class="status-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-circle-fill status-icon {{ $item->c0 == 1 ? 'green' : ($item->c0 == 0 ? 'red' : '') }}" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="status-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-circle-fill status-icon {{ $item->c1 == 1 ? 'green' : ($item->c1 == 0 ? 'red' : '') }}" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="status-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-circle-fill status-icon {{ $item->c2 == 1 ? 'green' : ($item->c2 == 0 ? 'red' : '') }}" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="status-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-circle-fill status-icon {{ $item->c3 == 1 ? 'green' : ($item->c3 == 0 ? 'red' : '') }}" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                        </div>
                    </td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('css')
<style>
    .status-icon-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .status-icon {
        margin: auto;
    }

    .history {
        max-width: 1200px; /* Adjust the width as needed */
        margin: 0 auto;
        margin-top: 4%;
    }
</style>
@endpush
