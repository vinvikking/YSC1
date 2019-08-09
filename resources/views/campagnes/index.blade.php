@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Campagnes</li>
    </ol>
@endsection

@section('body')
    @include('layouts.templates.tableIndex', [
        'data' => (object) [
            'url' => 'campagnes',
            'results' => $campagnes,
            'terms' => ['campagne', 'omschrijving'],
            'columns' => ['id', 'Campagne', 'Omschrijving'],
        ]
    ])
    @foreach ($campagnes as $campagne)
        <tr>
            <th class="text-center">
                <i class="icon-people"></i>
            </th>
            @if (!empty($search) && !empty($term) && $term=="id")
                <th>{!!$campagne->id = str_ireplace($search, "<mark><u>$search</u></mark>", $campagne->id)!!}</th>
            @else
                <th>{{$campagne->id}}</th>
            @endif
            @if (!empty($search) && !empty($term) && $term=="title")
                <th>{!!$campagne->title = str_ireplace($search, "<mark><u>$search</u></mark>", $campagne->title)!!}</th>
            @else
                <th>{{$campagne->title}}</th>
            @endif
            {{-- Voornaam --}}
            @if (!empty($search) && !empty($term) && $term=="description")
                <th>{!!$campagne->description = str_ireplace($search, "<mark><u>$search</u></mark>", $campagne->description)!!}</th>
            @else
                <th>{{$campagne->description}}</th>
            @endif
            <th><a class="btn btn-primary" href="{{route('campagnes.show', $campagne->id)}}">Details</th>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
@endsection

