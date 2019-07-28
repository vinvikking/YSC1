@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin ">Admin</a></li>
    <li class="breadcrumb-item"><a href="/admin/Roles ">Roles</a></li>
    </ol>
@endsection



@section('body')
		
	
	      <div class="card">
        <div class="card-header">
        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Role</th>
                    <th scope="col">Beschrijving</th>
                    <th scope="col">Details</th>
                  </tr>
                </thead>
                <tbody>
                  
                 @foreach ($role as $roles)
                  <tr>
                    <th scope="row">{{ $roles->id }}</th>
                    <td>{{ $roles->name }}</td>
                    <td>{{ $roles->description }}</td>
                    <td><a class="btn btn-primary" href="{{route('roles.show', $roles->id) }}">Details</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        </div>

@endsection

