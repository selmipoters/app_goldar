<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <div class="card mb-5 mb-xl-8">
                <div class=" card-body fs-6 p-10 p-lg-15">
                    <?php echo form_open(base_url('pasien/edit_simpan'), ' class="form-horizontal"') ?>
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <!--begin:Form-->
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column card-label fw-bolder fs-3 mb-1">Form Cek Gol - Darah</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <div class="mb-13 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Kode Pasien</span>
                            </label>
                            <select class="form-select form-select-solid" id="goldar" data-control="select2" data-placeholder="Pilih / masukan kode pasien" name="kd_pasien">
                                <option></option>
                                <?php
                                foreach ($pasien as $pasien) { ?>
                                    <option data-value="<?php echo $pasien['kd_pasien'] ?>" value="<?php echo $pasien['kd_pasien']  ?>"><?php echo $pasien['kd_pasien'] . " - " . $pasien['nama_pasien'] ?></option>
                                <?php
                                } ?>
                            </select>
                        </div>
                        <!-- end select2 -->
                        <!--begin::Input group-->

                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nama Pasien</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" name="nama_pasien" id="nama_pasien" required readonly />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tanggal Lahir</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" name="tgl_lahir" id="tgl_lahir" required readonly />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jenis Kelamin</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" name="jenis_kelamin" id="jenis_kelamin" required readonly />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Email</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" name="email" id="email" required readonly />
                        </div>
                        <input type="hidden" class="form-control form-control-solid" name="alamat" id="alamat" required readonly />
                        <input type="hidden" class="form-control form-control-solid" name="telepon" id="telepon" required readonly />
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Golongan Darah</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" name="goldar" id="goldarinput" required readonly />
                        </div>
                        <div class="text-center">
                            <button type="reset" id="tombol1 kt_modal_new_target_cancel" class="btn btn-white me-3 tombol1">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="tombol1">
                                <span class="indicator-label">Submit</span>
                            </button>
                        </div>
                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>