@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of Users</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Add New User</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<br>
<table class="table table-striped table-bordered table-hover">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Type</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th width="280px">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $index => $user)
      <tr>
        <td>{{ $user->custid }}</td>
        <td>{{ $user->custname }}</td>
        <td>{{ $user->custemail }}</td>
        <td>{{ $user->usertype }}</td>
        <td>{{ $user->custphone }}</td>
        <td>{{ $user->custaddress }}</td>
        <td>{{ $user->created_at }}</td>
        <td>{{ $user->updated_at }}</td>
        <td>
          <div class="btn-group">
            <a class="btn btn-sm btn-info" href="{{ route('users.show', $user->custid) }}">Show</a>
            <a class="btn btn-sm btn-primary" href="{{ route('users.edit', $user->custid) }}">Edit</a>
            <form action="{{ route('users.destroy', $user->custid) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
