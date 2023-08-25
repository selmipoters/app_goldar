



            <div class="card ">
    <div class="card-header card-header-stretch">
        <h3 class="card-title">Cetak Laporan Pasien</h3>
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_7">Cetak All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8">Periode</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9">Kategori</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">
                
            <div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Cetak Seluruh Pasien</h3>
        </div>
        <div class="swal" data-swal="<?php echo session()->getFlashData('pesan'); ?>"></div>
        <div class="card-toolbar">
            <form action="laporan/cetakall" method="post">
            <button type="submit" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Cetak Laporan</button>
            <!--end::Button-->
        </div>
    </div>
    </form>

            <!--begin::Button-->
            
         
 </div>
            </div>

            <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">
            <div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Cetak Laporan Pasien Per Periode</h3>
        </div>
        <div class="swal" data-swal="<?php echo session()->getFlashData('pesan'); ?>"></div>
        <div class="card-toolbar">
            <form action="laporan/cetakperiode" method="post">
            <button type="submit" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Cetak Laporan</button>
            <!--end::Button-->
        </div>
    </div>
    
    <div class="card-body">
        <div class="form-group row">
            <label class="col-form-label text-right col-lg-2 col-sm-12">Dari Tanggal</label>
            <div class="col-lg-2 col-md-9 col-sm-12">
            <input class="form-control form-control-solid" placeholder="Select date" name="start" id="tgl_lahir" required />
            </div>
            <label class="col-form-label text-right col-lg-2 col-sm-12">Sampai Tanggal</label>
            <div class="col-lg-2 col-md-9 col-sm-12">
                <input id="tgl_lahir1" class="form-control form-control-solid" placeholder="Select date"  name="end" required/>
            </div>
        </div>
    </div>
</div>

</form>
            </div>

            <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
                
            <div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">Cetak Pasien Berdasarkan Golongan Darah</h3>
        </div>
        <div class="swal" data-swal="<?php echo session()->getFlashData('pesan'); ?>"></div>
        <div class="card-toolbar">
            <form action="laporan/cetakkategori" method="post">
            <button type="submit" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Cetak Laporan</button>
            <!--end::Button-->
        </div>
    </div>
   

            <!--begin::Button-->
            
         
 </div>
         
            <label class="col-form-label text-right col-lg-2 col-sm-12">Golongan Darah</label>
            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Golongan Darah ..." data-allow-clear="true" multiple="multiple" name="goldar[]">
            <?php
            foreach ($goldar as $goldar) {  ?>
                <option value="<?php echo $goldar['nama_gol'] ?>"><?php echo $goldar['nama_gol'] ?></option>
                <?php
                                } ?>
            </select>
            </form>
            </div>
        </div>
    </div>
</div>

