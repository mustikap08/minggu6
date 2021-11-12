@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
            <br><br>

                <div class="card-header">{{ __('USER DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <a href="/users/create" class="btn btn-primary">Add Data</a>
                <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                         <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $s)
                <tr>
                    <td>{{ $s->username }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->email }}</td>
                    <td>{{ $s->role }}</td>
                    <td>
                    <form action="/users/{{$s->id}}" method="post">
                    <a href="/users/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                    <a href="/students/{{$s->id}}/nilai" class="btn btn-info">Nilai</a>
                    </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection