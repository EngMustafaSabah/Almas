<!-- Popper JS -->
<script src="{{asset('admin/libs/%40popperjs/core/umd/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Defaultmenu JS -->
<script src="{{asset('admin/js/defaultmenu.min.js')}}"></script>
<!-- Node Waves JS-->
<script src="{{asset('admin/libs/node-waves/waves.min.js')}}"></script>
<!-- Sticky JS -->
<script src="{{asset('admin/js/sticky.js')}}"></script>
<!-- Simplebar JS -->
<script src="{{asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin/js/simplebar.js')}}"></script>
<!-- Color Picker JS -->
<script src="{{asset('admin/libs/%40simonwep/pickr/pickr.es5.min.js')}}"></script>
<!-- JSVector Maps JS -->
<script src="{{asset('admin/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
<!-- JSVector Maps MapsJS -->
<script src="{{asset('admin/libs/jsvectormap/maps/world-merc.js')}}"></script>
<!-- Apex Charts JS -->
<script src="{{asset('admin/libs/apexcharts/apexcharts.min.js')}}"></script>
<!-- Chartjs Chart JS -->
<script src="{{asset('admin/libs/chart.js/chart.min.js')}}"></script>
<!-- CRM-Dashboard -->
<script src="{{asset('admin/js/crm-dashboard.js')}}"></script>

<script src="{{asset('admin/js/choices.js')}}"></script>
<!-- Quill Editor JS -->
<script src="{{asset('admin/libs/quill/quill.min.js')}}"></script>
<!-- Internal Quill JS -->
<script src="{{asset('admin/js/quill-editor.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('admin/js/custom.js')}}"></script>
<!-- Internal Select-2.js -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('#basic-usage').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
    });
</script>

@yield('script')