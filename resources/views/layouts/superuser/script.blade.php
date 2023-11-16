@livewireScripts

<script src="{{asset('assets/superuser/app/js/codebase.app.min-5.0.js')}}"></script>
<script src="{{asset('assets/superuser/app/js/lib/jquery.min.js')}}"></script>
<script src="{{ asset('assets/superuser/app/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

@include('packages.js.livewire-alert')

<script type="text/javascript">
    window.addEventListener('showModalAccountAdmin',function(e){
        $('#modalAccountAdmin').modal('show')
    });

    window.addEventListener('hideModalAccountAdmin',function(e){
        $('#modalAccountAdmin').modal('hide')
    });

    window.addEventListener('showModalAppointment',function(e){
        $('#modalAppointment').modal('show')
    });

    window.addEventListener('hideModalAppointment',function(e){
        $('#modalAppointment').modal('hide')
    });

    window.addEventListener('showModalService',function(e){
        $('#modalService').modal('show')
    });

    window.addEventListener('hideModalService',function(e){
        $('#modalService').modal('hide')
    });

    window.addEventListener('showModalSchedule',function(e){
        $('#modalSchedule').modal('show')
    });

    window.addEventListener('hideModalSchedule',function(e){
        $('#modalSchedule').modal('hide')
    });

    window.addEventListener('showModalSlider',function(e){
        $('#modalSlider').modal('show')
    });

    window.addEventListener('showModalAbstrak',function(e){
        $('#modalAbstrak').modal('show')
    });

    window.addEventListener('hideModalSlider',function(e){
        $('#modalSlider').modal('hide')
    });

    window.addEventListener('showModalBlogCategory',function(e){
        $('#modalBlogCategory').modal('show')
    });

    window.addEventListener('hideModalBlogCategory',function(e){
        $('#modalBlogCategory').modal('hide')
    });

    window.addEventListener('showModalBuktiPersyaratan',function(e){
        $('#modalBuktiPersyaratan').modal('show')
    });

    window.addEventListener('hideModalBuktiPersyaratan',function(e){
        $('#modalBuktiPersyaratan').modal('hide')
    });

    $("input[type=date]").on("change", function() {
        this.setAttribute(
            "data-date",
            moment(this.value, "MM-DD-YYYY")
                .format( this.getAttribute("data-date-format") )
        )
    }).trigger("change")
</script>

@yield('scripts')
@stack('scripts')



<script>Codebase.helpersOnLoad(['jq-magnific-popup', 'js-flatpickr', 'jq-datepicker', 'jq-colorpicker', 'jq-maxlength', 'jq-select2', 'jq-rangeslider', 'jq-masked-inputs', 'jq-pw-strength']);</script>
