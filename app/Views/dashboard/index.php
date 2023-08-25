<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <div class="swallogin" data-swallogin="<?php echo session()->getFlashData('pesan'); ?>"></div>
            <div class="card mb-5 mb-xl-8">
                <!-- o -->
                <!--begin::Security summary-->
                <div class="card card-xxl-stretch mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header card-header-stretch">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3 class="m-0 text-gray-800">Dashboard</h3>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-7 pb-0 px-0">
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab panel-->
                            <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_hours" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row p-0 mb-5 px-9">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-4 fw-bold text-success d-block">Data pasien yang telah melakukan cek darah</span>
                                            <span class="fs-2hx fw-bolder text-gray-800" data-kt-countup="true"><?php echo $pasien; ?></span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                            <span class="fs-4 fw-bold text-primary d-block">Data pasien yang belum melakukan cek darah</span>
                                            <span class="fs-2hx fw-bolder text-gray-800" data-kt-countup="true"><?php echo $pasien2; ?></span>
                                        </div>
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->
                                <!--begin::Container-->

                                <!--end::Container-->
                            </div>
                            <!--end::Tab panel-->
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Security summary-->

            </div>
            <!--begin::Body-->