@extends('layouts.admin.app')

@section('asset-top')
@endsection

@section('body')
<!-- begin:: Content -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
		<div class="kt-portlet kt-portlet--tabs">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg>                        Detail
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>                        Data Keluarga
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_5" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>                        Riwayat Pekerjaan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg>                        Riwayat Pendidikan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_4" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"/>
        <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"/>
    </g>
</svg>                        Riwayat Kecakapan
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="kt-portlet__body">
        <form action="#" method="">
            <div class="tab-content">
                <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                        <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="kt-portlet__head-title">
                                                        Detail Pegawai
                                                    </h3>
                                                </div>
                                        </div>
                                    <div class="kt-portlet__body">
                                        <div class="form-group row"></div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="nrp">NIP / NRP</label>
                                                <input type="number" id="nrp" name="nip_nrp" class="form-control" placeholder="Masukkan NIP/NRP">
                                                <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="nama_pegawai">Nama Pegawai</label>
                                                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" placeholder="Masukkan Nama Lengkap">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="gelar_depan" class="">Gelar Depan</label>
                                                <input type="text" id="gelar_depan" name="gelar_depan" class="form-control" placeholder="Masukkan Gelar Depan">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="gelar_belakang">Gelar Belakang</label>
                                                <input type="text" id="gelar_belakang" name="gelar_belakang" class="form-control" placeholder="Masukkan Gelar Belakang">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        </div>
                        
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                    <label for="no_kta" class="">No KTA Pegawai</label>
                                                    <input type="number" id="no_kta" name="no_kta" class="form-control" placeholder="Masukkan No KTA Pegawai">
                                                    <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="jenis_pegawai" class="">Jenis Pegawai</label>
                                                <select class="form-control" id="jenis_pegawai">
                                                        <option value="">------- Pilih -------</option>
                                                        <option value="POLRI">POLRI</option>
                                                        <option value="POLRI PNS">POLRI PNS</option>
                                                        <option value="DOSEN EKSTERNAL">DOSEN EKSTERNAL</option>
                                                    </select>
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                    <label class="">Unit Kerja</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan Unit Kerja">
                                                    <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                            <div for="no_kep_jabatan" class="col-lg-6">
                                                    <label class="">No.Kep.Jabatan</label>
                                                    <input type="number" id="no_kep_jabatan" name="no_kep_jabatan" class="form-control" placeholder="Masukkan No.Kep.Jabatan">
                                                    <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                                </div>
                                        </div>    
                                        <div class="form-group row"></div>
                                        <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label for="email" class="">E-mail</label>
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan Email">
                                                    <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label for="password" class="">Password</label>
                                                    <input type="password" id="password" class="form-control" placeholder="Masukkan Password">
                                                    <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="retype_password" class="">Retype Password</label>
                                                    <input type="password" id="retype_password" class="form-control" placeholder="Masukkan Password Kembali">
                                                    <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                                </div>	 
                                        </div>
                                        <div class="form-group row"></div>
                        
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="nidn" class="">NIDN</label>
                                                <input type="number" id="nidn" name="nidn" class="form-control" placeholder="Masukkan NIDN">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="alamat" class="">Alamat</label>
                                                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat ">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        </div>	  
                        
                                        <div class="form-group row">
                                        <div class="col-lg-6">
                                                <label for="tempat_lahir" class="">Tempat Lahir</label>
                                                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="tgl_lahir" class="">Tanggal Lahir</label>
                                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label id="jk" class="">Jenis Kelamin</label>
                                                    <select class="form-control" id="jk" name="jk">
                                                        <option value="">------- Pilih -------</option>
                                                        <option value="L">Laki-Laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                    <!-- <input     type="" class="form-control" placeholder="Masukkan Jenis Kelamin"> -->
                                                    <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                                </div>
                                        <div class="col-lg-6">
                                            <label for="agama" class="">Agama</label>
                                                <select class="form-control" id="agama" name="agama">
                                                    <option value="">------- Pilih -------</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                </select>
                                        </div>
                                            </div>
                                            <div class="form-group row"></div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="nik" class="">NIK</label>
                                                <input type="number" id="nik" name="nik" class="form-control" placeholder="Masukkan NIK">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        <div class="col-lg-6">
                                            <label for="status_menikah" class="">Status Menikah</label>
                                                <select class="form-control" name="status_menikah" id="status_menikah">
                                                    <option value="">------- Pilih -------</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                </select>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="no_kk" class="">No Kartu Keluarga</label>
                                                <input type="number" id="no_kk" name="no_kk" class="form-control" placeholder="Masukkan No Kartu Keluarga">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        </div>	
                                    
                                        <div class="form-group row"></div>
                        
                                        <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label for="no_telp" class="">No Telepon</label>
                                                    <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Masukkan Nomer Telepon">
                                                    <!-- <span class="form-text text-muted">Please enter your contact</span> -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="no_hp" class="">No HP</label>
                                                    <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Masukkan Nomer Handphone">
                                                    <!-- <span class="form-text text-muted">Please enter your contact</span> -->
                                                    </div>
                                        </div>
                                        <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label for="tgl_masuk" class="">Tanggal Masuk</label>
                                                    <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" placeholder="Tanggal Masuk">
                                                    <!-- <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-info-circle"></i></span></span> -->
                                                    <!-- <span class="form-text text-muted">Please enter fax</span> -->
                                                </div>  
                                            </div>
                                        <div class="form-group row"></div>
                        
                                        <div class="form-group row">
                                        <div class="col-lg-6">
                                                <label for="tinggi_badan" class="">Tinggi Badan</label>
                                                <input type="text" id="tinggi_badan" name="tinggi_badan" class="form-control" placeholder="Tinggi">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="berat_badan" class="">Berat Badan</label>
                                                <input type="number" id="berat_badan" name="berat_badan" class="form-control" placeholder="Berat">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="warna_rambut" class="">Warna Rambut</label>
                                                <input type="text" id="warna_rambut" name="warna_rambut" class="form-control" placeholder="Masukkan Warna Rambut">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                            <div class="col-lg-6">
                                                    <label for="bentuk_muka" class="">Bentuk Muka</label>
                                                    <input type="text" id="bentuk_muka" name="bentuk_muka" class="form-control" placeholder="Masukkan Bentuk Muka">
                                                    <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="warna_kulit" class="">Warna Kulit</label>
                                                <input type="text" id="warna_kulit" name="warna_kulit" class="form-control" placeholder="Masukkan Warna Kulit">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="ciri_khas" class="">Ciri Khas</label>
                                                <input type="text" id="ciri_khas" name="ciri_khas" class="form-control" placeholder="Masukkan Ciri Khas">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        </div>
                        
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="cacat" class="">Cacat Tubuh</label>
                                                <input type="text" id="cacat" class="form-control" placeholder="Masukkan Cacat Tubuh">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="hobi" class="">Hobi</label>
                                                <input type="text" id="hobi" class="form-control" placeholder="Masukkan Hobi">
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                        </div>	  	                
                                        <div class="form-group row">
                                        </div>
                                        <label><b>Foto</b></label>
                                        <div class="kt-widget kt-widget--user-profile-1">
                                            <div class="kt-widget__head">
                                                <div class="kt-widget__media">
                                                    <img src="assets/media/users/100_1.jpg" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <input type="file" class="form-control col-lg-2">
                                        </div>	 
                                        <div class="row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-8">
                                                <button type="reset" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div><br><br><br>
                                        <div class="kt-portlet__foot">
                                            <div class="kt-form__actions">
                                                <!--  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane" id="kt_user_edit_tab_2" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <!-- row tabel KELUARGA  -->
                    <div class="row">
                            <div class="col-lg-12">
                                <h5>Data Keluarga</h5>
                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Hubungan Keluarga</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Status Hidup</th>
                                        <th>Pekerjaan</th>
                                        <th>Keterangan</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                                <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                                <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="10" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--end: datatable -->
                            </div>
                        </div> 	 
                        <!-- akhir row tabel  -->
                                </div>
                            </div>

                            <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane" id="kt_user_edit_tab_3" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <!-- row tabel PENDIDIKAN POLRI -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Pendidikan Polri</h5>
                                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pendidikan</th>
                                                    <th>Tahun</th>
                                                    <th>Lulus / Tidak</th>
                                                    <th>Lama (Bulan)</th>
                                                    <th>Ranking</th>
                                                    <th>File</th>
                                                    <th width="10%">Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!--end: datatable -->
                                        </div>
                                    </div> 	 
                                    <!-- akhir row tabel  -->
                                    <br><br>
                                    <!-- row tabel PENDIDIKN UMUM -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Pendidikan Umum</h5>
                                            @include('master.modal_show.coba')
                                            <!--end: datatable -->
                                        </div>
                                    </div> 	 
                                    <!-- akhir row tabel  -->
                                    <br><br>
                                    <!-- row tabel PENDIDIKAN KEJURUAN -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Pendidikan Kejuruan</h5>
                                            @include('master.modal_show.pendidikan_kejuruan')
                                            <!--end: datatable -->
                                        </div>
                                    </div> 	 
                                    <!-- akhir row tabel  -->
                                    <br><br>
                                    <!-- row tabel PENDIDIKAN NON FORMAL -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Pendidikan Non Formal</h5>
                                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pendidikan</th>
                                                    <th>Lama Pendidikan (Bulan)</th>
                                                    <th>Tahun Pendidikan</th>
                                                    <th>Tempat Pendidikan</th>
                                                    <th>Keterangan</th>
                                                    <th>File</th>
                                                    <th width="10%">Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!--end: datatable -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                            
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-xl-3"></div>
                                <div class="col-lg-9 col-xl-6">
                                    <a href="#" class="btn btn-label-brand btn-bold">Save changes</a>
                                    <a href="#" class="btn btn-clean btn-bold">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="kt_user_edit_tab_4" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <!-- row tabel  BAHASA-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Kecakapan Bahasa</h5>
                                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis Bahasa</th>
                                                    <th>Bahasa</th>
                                                    <th>Kemampuan Bahasa</th>
                                                    <th width="10%">Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!--end: datatable -->
                                        </div>
                                    </div> 	 
                                    <!-- akhir row tabel  -->
                                    <br><br>
                                    <!-- row tabel OLAHRAGA  -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Kecakapan Olah Raga dan Bela Diri</h5>
                                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Olahraga</th>
                                                    <th>Keterangan</th>
                                                    <th width="10%">Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!--end: datatable -->
                                        </div>
                                    </div> 	 
                                    <!-- akhir row tabel  -->
                                    <br><br>
                                    <!-- row tabel  BREVET-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Kecakapan Brevet</h5>
                                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Brevet</th>
                                                    <th>Asal Perolehan</th>
                                                    <th width="10%">Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!--end: datatable -->
                                        </div>
                                    </div> 	 
                                    <!-- akhir row tabel  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="kt_user_edit_tab_5" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <!-- row tabel MUTASI -->
                    <div class="row">
                            <div class="col-lg-12">
                                <h5>Riwayat Unit Kerja(Mutasi)</h5>
                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Mutasi</th>
                                        <th>Unit Kerja</th>
                                        <th>No SK</th>
                                        <th>Tanggal SK</th>
                                        <th>TMT</th>
                                        <th>Keterangan</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                                <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                                <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="8" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--end: datatable -->
                            </div>
                    </div> 	 
                    <!-- akhir row tabel  -->
                    <br><br>
                    <!-- row tabel PANGKAT -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Riwayat Kepangkatan</h5>
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pangkat</th>
                                    <th>Gol</th>
                                    <th>TMT</th>
                                    <th>Pejabat</th>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                    <th>Dasar Peraturan</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!--end: datatable -->
                        </div>
                    </div> 	 
                    <!-- akhir row tabel  -->
                    <br><br>
                    <!-- row tabel GAJI -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Riwayat Kenaikan Gaji Berkala</h5>
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gaji</th>
                                    <th>TMT</th>
                                    <th>Pejabat</th>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                    <th>Dasar Peraturan</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable -->
                        </div>
                    </div> 	 
                    <!-- akhir row tabel  -->
                    <br><br>
                    <!-- row tabel JABATAAN -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Riwayat Jabatan</h5>
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jabatan</th>
                                    <th>No. SK</th>
                                    <th>Tanggal SK</th>
                                    <th>Tanggal Mulai Terhitung</th>
                                    <th>Keterangan</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable -->
                        </div>
                    </div> 	 
                    <!-- akhir row tabel  -->
                    <br><br>
                    <!-- row tabel jASA -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Tanda Jasa / Prestasi</h5>
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Prestasi</th>
                                    <th>Tahun</th>
                                    <th>Keterangan</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                            <a class="badge badge-success" href="#modal-edit" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                            <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-right"><a href="" class="btn btn-primary btn-sm">(+)tambah</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable -->
                        </div>
                    </div> 	 
                    <!-- akhir row tabel  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>	</div>
       
@endsection

@section('asset-buttom')
    
@endsection