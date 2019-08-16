
@extends('layouts.templates.edit')

@section('page_title', {{trans('influencers.HeadShowPage')}})

@section('breadcrumb')
    <ol class='breadcrumb'>
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('influencers.index')}}">Influencers</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('influencers.HeadShowPage')}}</li>
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
                    <label for="voornaam">Titel&nbsp;</label>
                    <input type="text" id="voornaam" class="form-control mb-2" name="titel" placeholder="{{$influencer->name}}" tabindex="1" required>
                </div>
            </div>


            {{--Column 2--}}
            <div class="d-flex flex-fill flex-column">
                <div class="pl-2">
                    <label for="achternaam">Beschrijving&nbsp;</label>
                    <input type="text" id="achternaam" class="form-control mb-2" name="description" placeholder="{{$influencer->email}}" tabindex="2" required>
                </div>
            </div>
        </div>

        <h5>Persoonlijke gegevens</h5>
        <div class="d-flex">
        {{--Column 1--}}
        <div class="d-flex flex-fill flex-column">
            <div class="pr-2">
                <label for="telefoonnumer">Telefoonnummer&nbsp;</label>
                <input type="text" id="telefoonnumer" class="form-control mb-2" name="telefoonnummer" placeholder="Telfoonnummer" tabindex="1" required>
            </div>
        </div>

        {{--Column 2--}}
        <div class="d-flex flex-fill flex-column">
            <div class="pl-2">
                <label for="email">E-mailadres&nbsp;</label>
                <input type="text" id="email" class="form-control mb-2" name="email" placeholder="Email" tabindex="2" required>
            </div>
        </div>
        </div>


        <a class="btn btn-sm btn-success font-weight-bolder mt-3" href="{{route('influencers.edit', $influencer->id)}}"><i class="fas fa-plus" tabindex="10"></i>&nbsp;Aanpassen</a>
        <a class="btn btn-sm btn-danger font-weight-bolder mt-3" href="{{route('influencers.index')}}" tabindex="11"><i class="fas fa-times"></i>&nbsp;Annuleren</a>
    </form>
@endsection