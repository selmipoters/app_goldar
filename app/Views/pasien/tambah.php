<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <div class="card">
                <div class="card-body fs-6 p-10 p-lg-15">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <!--begin:Form-->
                        <?php echo form_open(base_url('pasien/simpan_data'), ' class="form-horizontal"') ?>
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column card-label fw-bolder fs-3 mb-1">Tambah Data Pasien</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="mb-13 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Kode Pasien</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Kode diberikan otomatis oleh sistem"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" value="<?php echo $newkd_pasien ?>" name="kd_pasien" id="kd_pasien" readonly="readonly" required />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->

                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nama Pasien</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama" name="nama_pasien" id="nama_pasien" required />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tanggal Lahir</span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" placeholder="Masukan tanggal lahir" name="tgl_lahir" id="tgl_lahir" required />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jenis Kelamin</span>
                            </label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select form-select-solid" aria-label="Select example" required>
                                <option value="Laki-Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Alamat</span>
                            </label>
                            <!--end::Label-->
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukan Alamat" name="alamat" id="alamat" required />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Telepon</span>
                            </label>
                            <!--end::Label-->
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukan telepon" name="telepon" id="telepon" required />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Email</span>
                            </label>
                            <!--end::Label-->
                            <!--end::Label-->
                            <input type="email" class="form-control form-control-solid" placeholder="Masukan email" name="email" id="email" required />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-white me-3">Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                        <?php echo form_close(); ?>
                        <!--end:Form-->


                    </div>
                </div>
            </div>