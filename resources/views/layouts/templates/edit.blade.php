@extends('coreui::master')

@section('title')
    @yield('page_title') - YSC
@endsection

@section('body')
    <!-- Card -->
    <div class="card">
        <div class="card-header">
            <i class="fas fa-pen"></i>&nbsp;<strong class="align-middle pb-1">@yield('page_title')</strong>
        </div>
        <div class="card-body">
            @yield('card_body')
        </div>
        <div class="card-footer"></div> <!-- Can be filled if needs be, leaving it empty now adds up to internal consistency -->
    </div>
    @push('js')
    <script>
         $(document).ready(function(){
             function validateForm(id, valid = true, text = "") {
                if (valid === true) {
                    $("#" + id).addClass("is-valid");
                    $("#" + id).removeClass("is-invalid");
                    $("#" + id + "-error").attr("hidden", true);
                }
                else {
                    $("#" + id).removeClass("is-valid");
                    $("#" + id).addClass("is-invalid");
                    $("#" + id + "-error").attr("hidden",false);
                    $("#" + id + "-error").text(text);
                }
            }
        // Get all form fields
            $(":input").each(function(){
                var input = $(this); // This is the jquery object of the input, do what you will
                input.after("<span class='invalid-feedback' id='" + input.attr('id') +"-error' hiddenrole='alert' hidden><strong>test</strong></span>")
                var labelText = $('label[for='+  input.attr('id')  +']').text();
                if (labelText.indexOf("verplicht") >= 0) {
                        text = labelText.replace("verplicht", "");
                        if (!$.trim($("#"+ input.attr('id')).val())) {
                            validateForm(input.attr('id'), false, text + 'is leeg');
                        }
                        else {
                            validateForm(input.attr('id'));
                        }
                    }
                // If form field is unfocused
                $("#"+ input.attr('id')).on('focusout', function() {
                    if (labelText.indexOf("verplicht") >= 0) {
                        text = labelText.replace("verplicht", "");
                        if (!$.trim($("#"+ input.attr('id')).val())) {
                            validateForm(input.attr('id'), false, text + 'is leeg');
                        }
                        else {
                            validateForm(input.attr('id'));
                        }
                    }
                });
            });
        });
        </script>
    @endpush
@endsection
