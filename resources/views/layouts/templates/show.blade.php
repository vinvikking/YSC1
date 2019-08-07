@extends('coreui::master')

@section('title')
    @yield('page_title') - YSC 
@endsection

@section('body')
    <!-- Card -->
    <div class="card">
        <div class="card-header">
            <strong class="align-middle">@yield('page_title')</strong>
            <button class="btn btn-sm btn-danger float-right font-weight-bolder" type="submit" data-toggle="modal" data-target="#confirm_modal" tabindex="2"><i class="fas fa-trash"></i>&nbsp;@yield('show_type') verwijderen</button>
            <a class="btn btn-sm btn-info float-right mr-2 text-white font-weight-bolder" href="@yield('edit_link')"><i class="fas fa-pen" tabindex="1"></i>&nbsp;@yield('show_type') bewerken</a>
        </div>
        <div class="card-body">
            @yield('card_body')
        </div>
        <div class="card-footer">
            <a class="btn btn-sm btn-info text-white font-weight-bolder" href="{{url()->previous()}}"><i class="fas fa-arrow-left"></i>&nbsp;Terug</a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirm_modal" tabindex="-1" role="dialog" aria-labelledby="modal_label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_label">Weet je zeker dat je @yield('delete_text') wilt verwijderen?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Sluiten">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuleren</button>
                    <form class="form-inline float-right" action="@yield('delete_link')" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-success">Bevestigen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
