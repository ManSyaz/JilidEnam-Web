@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Order List</h2>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-borderless table-striped table-hover bg-white">
    <thead class="thead-light">
        <tr>
            <th>Order ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Order Details</th>
            <th style="width: 280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($orderlist->count() > 0)
            @foreach ($orderlist as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->orderdate }}</td>
                <td>{{ $s->ordertime }}</td>
                <td>{{ $s->quantity }} - {{ $s->menuname }}</td>
                <td>
                    <form action="{{ route('orderlists.destroy', $s->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-delete">
                            <i class="fas fa-trash nav-icon"></i>
                        </button>
                    </form>
                </td>
            </tr>

            @endforeach
        @else
            <tr>
                <td colspan="8" class="text-center">No data available</td>
            </tr>
        @endif
    </tbody>

</table>

@push('scripts')
    <script>
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                const form = this.closest('form');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
