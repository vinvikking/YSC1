@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gebruiker {{Auth::user()->name}}</li>
    </ol>
@endsection


@section('body')
    <form method="POST" action="{{route('influencers.update', $influencer->id)}}">
        @method('PATCH')
        @csrf
        <div class="p-2 flex-fill">
            <div class="form-group">

                <label for="name">Voornaam</label>
                <input type="text" class="form-control" id="name" name="id" value="{{$influencer->voornaam}}" />
            </div>
            <div class="form-group">
                <label for="reden">Achternaaml</label>
                <input type="text" class="form-control" id="email" name="reden" value="{{$influencer->email}}" />
            </div>
        </div>

        <button class="btn btn-success mt-3 mb-3 mr-2 float-right" type="submit">Veranderingen opslaan</button>
        <a class="btn btn-danger mt-3 mb-3 mr-2 float-right" href="{{route('influencers.show', $influencer->id)}}">Annuleren</a>
    </form>

@endsection

