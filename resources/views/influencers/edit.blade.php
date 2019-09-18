@extends('layouts.templates.edit')

@section('page_title', 'Profiel aanpassen')

@section('breadcrumb')
    <ol class='breadcrumb'>
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('influencers.index')}}">Influencers</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profiel aanpassen</li>
    </ol>
@endsection

@section('card_body')
    <form action="{{route('influencers.index')}}" method="POST">
        @csrf
        <h5>Basisgegevens</h5>
        <div class="d-flex">
            {{--Column 1--}}
            <div class="d-flex flex-fill flex-column">
                <div class="pr-2">
                    <label for="voornaam">Titel&nbsp;<span class="badge badge-danger">verplicht</span></label>
                    <input type="text" id="voornaam" class="form-control mb-2" name="voornaam" placeholder="Voornaam" tabindex="1" required>
                </div>
            </div>


            {{--Column 2--}}
            <div class="d-flex flex-fill flex-column">
                <div class="pl-2">
                    <label for="achternaam">Beschrijving&nbsp;<span class="badge badge-danger">verplicht</span></label>
                    <input type="text" id="achternaam" class="form-control mb-2" name="achternaam" placeholder="Achternaam" tabindex="2" required>
                </div>
            </div>
        </div>

        <h5>Persoonlijke gegevens</h5>
        <div class="d-flex">
        {{--Column 1--}}
        <div class="d-flex flex-fill flex-column">
            <div class="pr-2">
                <label for="telefoonnumer">Telefoonnummer&nbsp;<span class="badge badge-danger">verplicht</span></label>
                <input type="text" id="telefoonnumer" class="form-control mb-2" name="telefoonnummer" placeholder="Telfoonnummer" tabindex="1" required>
            </div>
        </div>

        {{--Column 2--}}
        <div class="d-flex flex-fill flex-column">
            <div class="pl-2">
                <label for="email">E-mailadres&nbsp;<span class="badge badge-danger">verplicht</span></label>
                <input type="text" id="email" class="form-control mb-2" name="email" placeholder="Email" tabindex="2" required>
            </div>
        </div>
        </div>


        <button class="btn btn-sm btn-success font-weight-bolder mt-3" type="submit"><i class="fas fa-plus" tabindex="10"></i>&nbsp;Opslaan</button>
        <a class="btn btn-sm btn-danger font-weight-bolder mt-3" href="{{route('influencers.index')}}" tabindex="11"><i class="fas fa-times"></i>&nbsp;Annuleren</a>
    </form>
@endsection
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
