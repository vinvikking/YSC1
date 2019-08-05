
@php($results = $data->results)
@php($url = $data->url)
<div class="card">
    <div class="card-header">
        <nav class="navbar navbar-light bg-light">
            {{-- Search bar --}}
            <div class="float_left">
                    <form class="form-inline" action="{{route($url . 'S')}}">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-search"></i></div>
                        </div>
                        <input class="form-control mr-sm-2" type="text" onClick="this.select();" placeholder="Zoeken" name="q" value="{{empty($search) ? '' : $search}}">
                    </div>
                    <div class="input-group my-sm-0 mr-2">
                        <div class="input-group-prepend" >
                            <button class="btn btn-outline-info font-weight-bold" type="submit" value="{{empty($term) ? $data->terms[0] : $term}}" name="term"><i class="fas fa-filter mr-2"></i> Zoeken in {{empty($term) ? $data->terms[0] : $term}}</button>
                            <button class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-expanded="false">
                                <span class="caret"></span>
                            </button>
                            {{-- Dropdown --}}
                            <div class="dropdown-menu">
                                @foreach ($data->terms as $term)
                                    <button class="btn btn-outline-primary dropdown-item "  type="submit" value="{{$term}}" name="term">In {{$term}}</button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-outline-danger  my-sm-0 font-weight-bold" href=""><i class="fas fa-times mr-2"></i>Reset zoeken</a>
                </form>
            </div>
            <div class="text-muted"><b>{{$results->count() == 1 ? $results->count() . ' resultaat' : $results->count() . ' resultaten'}}</b></div>
            {{-- Add new result --}}
            <a class="btn btn-success float-right font-weight-bold" href=""><i class="fas fa-plus mr-2"></i>Nieuwe {{strtolower($data->columns[0])}}</a>
        </nav>
    </div>
    <div class="card-body">
        <table class="table table-responsive-sm table-hover table-outline mb-0">
            @if ($results->isEmpty())
                <div class="d-flex justify-content-center"><h5 class="text-muted">Geen {{str_replace('/', '', $data->url)}} gevonden</h5></div>
            @else
                <thead class="thead-light">
                <tr>
                    <th class="text-center">
                        <i class="icon-people"></i>
                    </th>
                    @foreach ($data->columns as $column)
                        <th>{{$column}}</th>
                    @endforeach
                    <th>Details</th>

                </tr>
                </thead>
                <tbody>
@endif
