@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of Event</h2>
        </div>
        <div class="pull-right my-2">
            <a href="{{ route('events.create') }}" class="btn btn-success">Add New Event</a>
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
            <th>Event ID</th>
            <th>Event Picture</th>
            <th>Event Name</th>
            <th>Event Place</th>
            <th>Event Date</th>
            <th>Event Time</th>
            <th style="width: 280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($events->count() > 0)
            @foreach ($events as $s)
            <tr>
                <td>{{ $s->eventid }}</td>
                <td><img src="{{ asset($s->eventpicture) }}" alt="Event Picture" style="width: 100px;"></td>
                <td>{{ $s->eventname }}</td>
                <td>{{ $s->eventplace }}</td>
                <td>{{ $s->eventdate }}</td>
                <td>{{ $s->eventtime }}</td>
                <td>
                    <form action="{{ route('events.destroy',$s->eventid)}}" method="post">
                        <a href="{{ route('events.show', $s->eventid)}}" class="btn btn-info">
                            <i class="fas fa-eye nav-icon"></i>
                        </a>
                        <a href="{{ route('events.edit', $s->eventid)}}" class="btn btn-primary">
                            <i class="fas fa-edit nav-icon"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        @if ($s->eventid != optional(Auth::user())->eventid)
                            <button type="submit" class="btn btn-danger btn-delete">
                                <i class="fas fa-trash nav-icon"></i>
                            </button>
                        @endif
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
