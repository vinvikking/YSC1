@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Influencers</li>
    </ol>
@endsection

@section('body')
    @include('layouts.templates.tableIndex', [
        'data' => (object) [
            'url' => 'influencers',
            'results' => $influencers,
            'terms' => ['naam', 'email'],
            'columns' => ['id', 'Naam', 'Email'],
        ]
    ])
    @foreach ($influencers as $influencer)
        <tr>
            <th class="text-center">
                <i class="icon-people"></i>
            </th>
            @if (!empty($search) && !empty($term) && $term=="id")
                <th>{!!$influencer->id = str_ireplace($search, "<mark><u>$search</u></mark>", $influencer->id)!!}</th>
            @else
                <th>{{$influencer->id}}</th>
            @endif
            @if (!empty($search) && !empty($term) && $term=="name")
                <th>{!!$influencer->name = str_ireplace($search, "<mark><u>$search</u></mark>", $influencer->name)!!}</th>
            @else
                <th>{{$influencer->name}}</th>
            @endif
            {{-- Voornaam --}}
            @if (!empty($search) && !empty($term) && $term=="email")
                <th>{!!$influencer->email = str_ireplace($search, "<mark><u>$search</u></mark>", $influencer->email)!!}</th>
            @else
                <th>{{$influencer->email}}</th>
            @endif
            <th><a class="btn btn-primary" href="{{route('influencers.show', $influencer->id)}}">Details</th>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
@endsection

