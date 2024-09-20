@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of Menu</h2>
        </div>
        <div class="pull-right my-2">
            <a href="{{ route('menus.create') }}" class="btn btn-success">Add New Menu</a>
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
            <th>Menu ID</th>
            <th>Menu Picture</th>
            <th>Menu Name</th>
            <th>Menu Price</th>
            <th>Menu Description</th>
            <th>Category ID</th>
            <th style="width: 280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($menus->count() > 0)
            @foreach ($menus as $s)
            <tr>
                <td>{{ $s->menuid }}</td>
                <td>
                    @if($s->menupicture)
                        <img src="{{ asset($s->menupicture) }}" alt="Menu Picture" width="50">
                    @else
                        <img src="{{ asset('default-image-path') }}" alt="Default Picture" width="50"> <!-- Optional: Add a default image path -->
                    @endif
                </td>
                <td>{{ $s->menuname }}</td>
                <td>{{ $s->menuprice }}</td>
                <td>{{ $s->menudesc }}</td>
                <td>{{ $s->catid }}</td>
                <td>
                    <form action="{{ route('menus.destroy', $s->menuid) }}" method="post">
                        <a href="{{ route('menus.show', $s->menuid) }}" class="btn btn-info">
                            <i class="fas fa-eye nav-icon"></i>
                        </a>
                        <a href="{{ route('menus.edit', $s->menuid) }}" class="btn btn-primary">
                            <i class="fas fa-edit nav-icon"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        @if ($s->menuid != optional(Auth::user())->menuid)
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
                <td colspan="7" class="text-center">No data available</td>
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
@endsection
