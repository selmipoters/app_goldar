</div>
<!--end::Container-->
</div>
<!--end::Post-->
</div>
<!--end::Content-->
<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-bold me-1">2021©</span>
            <span class="text-muted fw-bold me-1">Sistem Cek Golongan Darah</span>
        </div>
        <!--end::Copyright-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Up-2.svg-->
    <span class="svg-icon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
            </g>
        </svg>
    </span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--end::Main-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?php echo base_url() ?>/assets/plugins/global/plugins.bundle.js"></script>
<script src="<?php echo base_url() ?>/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?php echo base_url() ?>/assets/js/custom/widgets.js"></script>
<script src="<?php echo base_url() ?>/assets/js/custom/modals/create-app.js"></script>
<script src="<?php echo base_url() ?>/assets/js/custom/modals/upgrade-plan.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?php echo base_url() ?>/assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/myswal.js"></script>
<!-- <script src="<?php echo base_url() ?>/assets/js/custom/pages/crud/forms/widgets/bootstrap-datepicker.js"></script> -->
<!-- <script src="<?php echo base_url() ?>/assets/js/jquery-3.6.0.min.js"></script> -->
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
<script>
    $("#ayo").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

    //flatpicker 
    $("#tgl_lahir").flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d",
    });
    $("#tgl_lahir1").flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d",
    });

    // goldar
    $('#goldar').change(function() {
        var kd_pasien = $(this).val();
        console.log(kd_pasien);
        $.ajax({
            type: 'GET',
            url: "<?php echo base_url(); ?>/goldar/cari",
            data: 'kd_pasien=' + kd_pasien,
            dataType: 'json',
            success: function(json) {

                $('#nama_pasien').attr('value', json[0].nama_pasien);
                $('#tgl_lahir').attr('value', json[0].tgl_lahir);
                $('#jenis_kelamin').attr('value', json[0].jenis_kelamin);
                $('#email').attr('value', json[0].email);
                $('#alamat').attr('value', json[0].alamat);
                $('#telepon').attr('value', json[0].telepon);
                $('#goldarinput').attr('value', json[0].nama_gol);
                if (json[0].nama_gol) {
                    // document.getElementById("tombol1").style.visibility = "hidden";
                    $("#tombol1").hide();
                } else {
                    // document.getElementById("tombol1").style.visibility = "visible";
                    $("#tombol1").show();
                }
                // console.log(json[0].kd_pasien);
            }
            // console.log();
        });
    });

    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                type: 'GET',
                url: "<?php echo base_url() ?>/goldar/getgoldar",
                data: "id_tampung=" + "1",
                dataType: 'json',
                success: function(json) {

                    $('#goldarinput').attr('value', json[0].nama_goldar);
                    console.log(json[0].nama_goldar);
                }

            });
        }, 500);
    });

    // // dasbor
    // $(document).ready(function() {
    //     setInterval(function() {
    //         $.ajax({
    //             type: 'GET',
    //             url: "<?php echo base_url() ?>/dashboard/getdasbor",
    //             data: "kd_pasien=" + "1",
    //             dataType: 'json'
    //         });
    //     }, 500);
    // });
    


</script>
<!--end::Javascript-->
</body>
<!--end::Body-->

</html>