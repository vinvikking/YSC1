<div class="modal fade" id="{{$modal_id}}" tabindex="-1" role="dialog" aria-labelledby="delete_confirm_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete_confirm_modal">Verwijderbevestiging</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Sluiten">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{$modal_delete_text}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuleren</button>
                <form class="form-inline float-right" action="{{$modal_delete_route}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-success">Bevestigen</button>
                </form>
            </div>
        </div>
    </div>
</div>
