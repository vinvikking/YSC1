@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gebruiker {{Auth::user()->name}}</li>
    </ol>
@endsection


@section('body')
    <form method="POST" action="{{route('user.update', $user->id)}}">
        @method('PATCH')
        @csrf
        <div class="p-2 flex-fill">
            <div class="form-group">

                <label for="name">Gebruikersnaam</label>
                <input type="text" class="form-control" id="name" name="id" value="{{$user->name}}" />
            </div>
            <div class="form-group">
                <label for="reden">Huidige Email</label>
                <input type="text" class="form-control" id="email" name="reden" value="{{$user->email}}" />
            </div>
        </div>

        <button class="btn btn-success mt-3 mb-3 mr-2 float-right" type="submit">Veranderingen opslaan</button>
        <a class="btn btn-danger mt-3 mb-3 mr-2 float-right" href="{{route('user.show', $user->id)}}">Annuleren</a>
    </form>

@endsection

