@extends('layouts.admin.app')
@section('asset-top')

@endsection
@section('body')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container ">
        <div class="kt-subheader__main">

            <h3 class="kt-subheader__title">
                                    Edit User
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>

            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                            Alex Stone                                    </span>

                            </div>

                    </div>
        <div class="kt-subheader__toolbar">

                            <a href="../../../index-2.html#.html" class="btn btn-default btn-bold">

                    Back                </a>

                                                <div class="btn-group">
                        <button type="button" class="btn btn-brand btn-bold">

                            Save Changes                        </button>
                        <button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-writing"></i>
                                        <span class="kt-nav__link-text">Save &amp; continue</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-medical-records"></i>
                                        <span class="kt-nav__link-text">Save &amp; add new</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-hourglass-1"></i>
                                        <span class="kt-nav__link-text">Save &amp; exit</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    </div>
    </div>
</div>
<!-- end:: Content Head -->
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
                                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenjang Pendidikan</th>
                                                    <th>Nama Sekolah</th>
                                                    <th>Jurusan</th>
                                                    <th>Kota</th>
                                                    <th>Tahun Lulus</th>
                                                    <th>No. Ijazah</th>
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
                                    <!-- row tabel PENDIDIKAN KEJURUAN -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Pendidikan Kejuruan</h5>
                                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Pendidikan Kejuruan</th>
                                                    <th>Kota</th>
                                                    <th>Tahun Lulus</th>
                                                    <th>Lama (Bulan)</th>
                                                    <th>Ranking</th>
                                                    <th>Lulus / Tidak</th>
                                                    <td>Keterangan</td>
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
                            <h5>Riwayat Kepangkatan </h5>
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pangkat</th>
                                    <th>TMT</th>
                                    <th>Pejabat</th>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                    <th>Dasar Peraturan</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                                </thead>
                           
                            <tbody class="show_r_kepangkatan">
                            </tbody>
                            <tr>
                                <td colspan="9" class="text-right"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-r-kepangkatan">(+)tambah</a></td>
                            </tr>
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
                                    <th>No</th>
                                    <th>Gaji</th>
                                    <th>Tanggal Mulai Terhitung</th>
                                    <th>Nomor SK</th>
                                    <th>Pejabat</th>
                                    <th>Tanggal SK</th>
                                    <th>Dasar Peraturan</th>
                                    <th width="10%">Aksi</th>
                                </thead>
                                <tbody class="show_r_gaji">
                                </tbody>
                                <tr>
                                    <td colspan="9" class="text-right"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-r-gaji">(+)tambah</a></td>
                                </tr>
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
                                    <th>No</th>
                                    <th>Nama Jabatan</th>
                                    <th>Nomor SK</th>
                                    <th>Pejabat</th>
                                    <th>Tanggal SK</th>
                                    <th>Tanggal Mulai Terhitung</th>
                                    <th>Keterangan</th>
                                    <th width="10%">Aksi</th>
                                </thead>
                                    <tbody class="show_r_jabatan">
                                    </tbody>
                                     <tr>
                                        <td colspan="9" class="text-right"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-r-jabatan">(+)tambah</a></td>
                                    </tr>
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
                                <tbody class="show_tanda_jasa">
                                </tbody>
                                <tr>
                                    <td colspan="9" class="text-right"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-tanda-jasa">(+)tambah</a></td>
                                </tr>
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

<!----------------------------------------------modal riwayat gaji---------------------------------------------------------------->
<!-- MODAL ADD -->
<div class="modal fade" id="modal-add-r-gaji" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah Jabatan</h3>
            </div>
            <!-- form -->
            <form class="form-horizontal" data-toggle="validator">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <form data-toggle="validator" method="post">
                        <input type="hidden" name="nip_nrp_r_jabatan" value="{{$datas->nip_nrp}}" >
                        <div class="form-group">
                            <label class="control-label" for="title">Gaji *:</label>
                            <input type="number" name="gaji" class="form-control" data-error="Please enter gaji." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *:</label>
                            <input type="date" name="tmt" class="form-control" data-error="Please enter tmt." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *:</label>
                            <input type="text" name="nomor_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *:</label>
                            <input type="text" name="pejabat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *:</label>
                            <input type="date" name="tanggal_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="title">Dasar peraturan :</label>
                            <input type="text" name="dasar_peraturan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-primary" id="btn_simpan_r_jabatan">Kirim</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-r-gaji" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form data-toggle="validator" method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id_r_gaji" value="">
                        <div class="form-group">
                            <label class="control-label" for="title">Gaji *:</label>
                            <input type="number" name="gaji" class="form-control" data-error="Please enter gaji." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *:</label>
                            <input type="date" name="tmt" class="form-control" data-error="Please enter tmt." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *:</label>
                            <input type="text" name="nomor_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *:</label>
                            <input type="text" name="pejabat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *:</label>
                            <input type="date" name="tanggal_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="title">Dasar peraturan :</label>
                            <input type="text" name="dasar_peraturan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary btn-edit-r-gaji">Edit</button>
                        </div>
                    </form>
            </div>
            <!-- body modal -->
        </div>
    </div>
</div>
<!--end MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-r-gaji">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <p>Apakah Anda Yakin Menghapus Data </strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="btn-hapus-r-gaji">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!---------------------------------------------akhir modal riwayat gaji ----------------------------------------------------------->

<!---------------------------------------------awal modal riwayat jabatan---------------------------------------------------------->
<!--add MODAL -->
<div class="modal fade " id="modal-add-r-jabatan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Add Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- form -->
            <form class="form-horizontal" data-toggle="validator">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                        <input type="hidden" name="nip_nrp_r_jabatan" value="{{$datas->nip_nrp}}" >

                        <div class="form-group">
                            <label class="control-label" for="title">Nama Jabatan *:</label>
                            <select name="id_jabatan_r_jabatan" id="id_jabatan" class="form-control" data-error="Please enter title." required>
                                <option value="">Pilih Jabatan</option>
                                @foreach ($jabatan as $jabat)
                                        <option value="{{$jabat->id}}">{{$jabat->nama_jabatan}}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *:</label>
                            <input type="text" name="nomor_sk_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *:</label>
                            <input type="text" name="pejabat_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *:</label>
                            <input type="date" name="tgl_sk_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *:</label>
                            <input type="date" name="tgl_mulai_terhitung_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Keterangan :</label>
                            <input type="text" name="keterangan_r_jabatan" class="form-control"  />
                            {{-- <div class="help-block with-errors"></div> --}}
                        </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-primary" id="btn_simpan_jabatan">Kirim</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-r-jabatan" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Riwayat Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form data-toggle="validator" method="post">
                        <input type="hidden" name="nip_nrp_r_jabatan" value="" >
                        <input type="hidden" name="id_r_jabatan" value="">
                        <div class="form-group">
                            <label class="control-label" for="title">Nama Jabatan s *:</label>
                            <select name="id_jabatan_r_jabatan" id="id_jabatan" class="form-control" data-error="Please enter title." required>
                            <option value="">Pilih Jabatan</option>
                                @foreach ($jabatan as $jabat)
                                    <option value="{{$jabat->id}}">{{$jabat->nama_jabatan}}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *:</label>
                            <input type="text" name="nomor_sk_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *:</label>
                            <input type="text" name="pejabat_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *:</label>
                            <input type="text" name="tgl_sk_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *:</label>
                            <input type="date" name="tgl_mulai_terhitung_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Keterangan :</label>
                            <input type="text" name="keterangan_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary btn-edit-r-jabatan">Edit</button>
                        </div>
                    </form>
            </div>
                <!-- body modal -->
        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-r-jabatan">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <p>Apakah Anda Yakin Menghapus Data </strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="btn-hapus-r-jabatan">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!---------------------------------------------akhir modal riwayat jabatan------------------------------------------------------------>

<!--------------------------------------------------awal modal tanda jasa------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-tanda-jasa" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Add Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- form -->
        <form class="form-horizontal" data-toggle="validator" method="post" action="{{route('tanda_jasa.store')}}">
            @csrf
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Prestasi *</label>
                        <input type="text" class="form-control" name="nama_prestasi"required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tahun *</label>
                        <input class="form-control" type="number" name="tahun" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Keterangan </label>
                        <input class="form-control" name="keterangan" type="text" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button type="submit" class="btn btn-primary simpan" id="btn_simpan_tanda_jasa">Kirim</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-tanda-jasa" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Riwayat Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form data-toggle="validator" method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Prestasi *</label>
                            <input type="text" class="form-control" name="nama_prestasi" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tahun *</label>
                            <input class="form-control" type="number" name="tahun" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Keterangan</label>
                            <input class="form-control" name="keterangan" type="text">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary btn-edit-tanda-jasa">Edit</button>
                        </div>
                    </form>
            </div>
                <!-- body modal -->
        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-tanda-jasa">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <p>Apakah Anda Yakin Menghapus Data </strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="btn-hapus-tanda-jasa">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!--------------------------------------------------akhir modal tanda jasa------------------------------------------------------------>

<!----------------------------------------------awal modal riwayat kepangkatan------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-r-kepangkatan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Add Kepangkatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- form -->
        <form class="form-horizontal" data-toggle="validator" method="post" action="{{route('riwayat_kepangkatan.store')}}">
            @csrf
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama pangkat *</label>
                        <select name="id_pangkat" id=""class="form-control">
                            <option value="">Pilih Pangkat</option>
                            @foreach ($pangkats as $pang)
                                <option value="{{$pang->id}}">{{$pang->nama_pangkat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">TMT *</label>
                        <input class="form-control" type="date" name="tmt" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nomor SK *</label>
                        <input class="form-control"name="nomor_sk" type="text" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Pejabat *</label>
                        <input class="form-control"name="pejabat" type="text" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tanggal SK *</label>
                        <input class="form-control"name="tanggal_sk" type="date" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Dasar Peraturan * </label>
                        <input class="form-control"name="dasar_peraturan" type="text" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button type="submit" class="btn btn-primary " id="btn-simpan-r-kepangkatan">Kirim</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-r-kepangkatan" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Riwayat Kepangkatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form data-toggle="validator" method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama pangkat *</label>
                            <select name="id_pangkat" id="id_pangkat_r_kepangkatan" class="form-control">
                                <option value="">Pilih Pangkat</option>
                                @foreach ($pangkats as $pang)
                                    <option value="{{$pang->id}}">{{$pang->nama_pangkat}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">TMT *</label>
                            <input class="form-control" type="date" name="tmt" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nomor SK *</label>
                            <input class="form-control"name="nomor_sk" type="text" >
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Pejabat *</label>
                            <input class="form-control" name="pejabat" type="text" >
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tanggal SK *</label>
                            <input class="form-control"name="tanggal_sk" type="date" >
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Dasar Peraturan * </label>
                            <input class="form-control"name="dasar_peraturan" type="text" >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary btn-edit-r-kepangkatan">Edit</button>
                        </div>
                    </form>
            </div>
                <!-- body modal -->
        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-r-kepangkatan">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <p>Apakah Anda Yakin Menghapus Data </strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="btn-hapus-r-kepangkatan">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!-------------------------------------------------akhir modal riwayat kepagkatan------------------------------------------------------------>
@endsection


@section('asset-buttom')
<script>
 var nrp='<?php echo $datas->nip_nrp?>';
</script>
<!----------------------------------------------------------------------riwayat gaji------------------------------------------------->
<script>
    tampil_data_riwayat_gaji();   //pemanggilan fungsi gaji.
            //fungsi tampil barang
    function tampil_data_riwayat_gaji(){
        $.ajax({
            type  : 'GET',
            beforeSend: function(){
                $('.ajax-loader').css("visibility", "visible");
            },
            url   : '/riwayat_gaji/'+nrp,
            async : true,
            dataType : 'json',
            success : function(data){
                console.log(data);
                var i;
                var no=1;
                var rows ='';
                $.each( data, function( key, value ) {
                    rows = rows + '<tr>';
                    rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none" >'+value.nip_nrp+'</td>';
                    rows = rows + '<td >'+value.gaji+'</td>';
                    rows = rows + '<td>'+value.tmt+'</td>';
                    rows = rows + '<td>'+value.nomor_sk+'</td>';
                    rows = rows + '<td>'+value.pejabat+'</td>';
                    rows = rows + '<td>'+value.tanggal_sk+'</td>';
                    rows = rows + '<td>'+value.dasar_peraturan+'</td>';
                    rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-r-gaji" class="badge badge-success edit-item-r-gaji"><span class="fas fa-fw fa-edit " ></a> ';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-r-gaji" class="badge badge-danger delete-r-gaji"><span class="fas fa-fw fa-trash"></button>';
                    rows = rows + '</td>';
                    rows = rows + '</tr>';
                });
                $('.show_r_gaji').html(rows);
            },
            error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
            complete: function(){
                $('.ajax-loader').css("visibility", "hidden");
            }
        });
    } //tutup akhir tampil
    //Simpan
     $('#btn_simpan_r_jabatan').click(function(){
        var nip_nrp=$("input[name=nip_nrp_r_jabatan]").val();
        var gaji=$("input[name=gaji]").val();
        var tmt=$("input[name=tmt]").val();
        var nomor_sk=$("input[name=nomor_sk]").val();
        var pejabat=$("input[name=pejabat]").val();
        var tanggal_sk=$("input[name=tanggal_sk]").val();
        var dasar_peraturan=$("input[name=dasar_peraturan]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('riwayat_gaji.store')}}',
                datatype:"json",
                data : {nip_nrp:nip_nrp,gaji:gaji,tmt:tmt,nomor_sk:nomor_sk,pejabat:pejabat,tanggal_sk:tanggal_sk,dasar_peraturan:dasar_peraturan,_token: '{{csrf_token()}}' },
                success: function(data){

                    $("input[name=gaji]").val("");
                    $("input[name=tmt]").val("");
                    $("input[name=nomor_sk]").val("");
                    $("input[name=pejabat]").val("");
                    $("input[name=tanggal_sk]").val("");
                    $("input[name=dasar_peraturan]").val("");
                   tampil_data_riwayat_gaji();
                    $('.modal').modal('hide');
                console.log(data);
                },
                error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })

        });
        // edit
        /* Edit Post */
        $("body").on("click",".edit-item-r-gaji",function(){
            var id = $(this).parent("td").data('id');
            var nip_nrp = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var gaji = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var tmt = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nomor_sk =  $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var pejabat = $(this).parent("td").prev("td").prev("td").prev("td").text();
            var tanggal_sk =  $(this).parent("td").prev("td").prev("td").text();
            var dasar_peraturan = $(this).parent("td").prev("td").text();
            //
            $("#edit-r-gaji").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-r-gaji").find("input[name='gaji']").val(gaji);
            $("#edit-r-gaji").find("input[name='tmt']").val(tmt);
            $("#edit-r-gaji").find("input[name='nomor_sk']").val(nomor_sk);
            $("#edit-r-gaji").find("input[name='pejabat']").val(pejabat);
            $("#edit-r-gaji").find("input[name='tanggal_sk']").val(tanggal_sk);
            $("#edit-r-gaji").find("input[name='dasar_peraturan']").val(dasar_peraturan);
            $("#edit-r-gaji").find("input[name='id_r_gaji']").val(id);
        });
        /* Updated  Post baru (Updated new Post) */
        $(".btn-edit-r-gaji").click(function(e){
            e.preventDefault();
            var id =   $("#edit-r-gaji").find("input[name='id_r_gaji']").val();
            var nip_nrp =   $("#edit-r-gaji").find("input[name='nip_nrp']").val();
            var gaji =   $("#edit-r-gaji").find("input[name='gaji']").val();
            var nomor_sk =   $("#edit-r-gaji").find("input[name='nomor_sk']").val();
            var pejabat =   $("#edit-r-gaji").find("input[name='pejabat']").val();
            var tanggal_sk =   $("#edit-r-gaji").find("input[name='tanggal_sk']").val();
            var dasar_peraturan = $("#edit-r-gaji").find("input[name='dasar_peraturan']").val();
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: '{{route('riwayat_gaji.update')}}',
                data:{id:id,nip_nrp:nip_nrp,gaji:gaji,nomor_sk:nomor_sk,pejabat:pejabat,tanggal_sk:tanggal_sk,dasar_peraturan:dasar_peraturan,_token: '{{csrf_token()}}'},
                 success: function(data){
                     console.log(data);
                 }
            }).done(function(data){
                tampil_data_riwayat_gaji()
                $(".modal").modal('hide');
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
            // console.log(unit_kerja);
        })
            // klik delete
            $("body").on("click",".delete-r-gaji",function(){
                var id = $(this).parent("td").data('id');
                $("#hapus-r-gaji").find("input[name='id_hapus']").val(id);
                console.log(id);
            });
            /* Remove Post (Hapus) */
            $("#btn-hapus-r-gaji").click(function(e){
            event.preventDefault();
            var id = $("#hapus-r-gaji").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'post',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('riwayat_gaji.delete')}}',

            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                 tampil_data_riwayat_gaji();
                  $(".modal").modal('hide');
            });
            });




</script>
<!-------------------------------------------------------------------akhir riwayat gaji----------------------------------------------->

<!--------------------------------------------------------------------riwayat jabatan------------------------------------------------->
<script>
    tampil_data_riwayat_jabatan();   //pemanggilan fungsi tampil barang.
    //fungsi tampil barang
    function tampil_data_riwayat_jabatan(){
        $.ajax({
            type  : 'GET',
            beforeSend: function(){
                $('.ajax-loader').css("visibility", "visible");
            },
            url   : '/riwayat_jabatan/'+nrp,
            async : true,
            dataType : 'json',
            success : function(data){
                console.log(data);
                var i;
                var no=1;
                var rows ='';
                $.each( data, function( key, value ) {
                    rows = rows + '<tr>';
                    rows = rows + '<td>'+ no++ +'</td>';
                    rows = rows + '<td style="display:none" >'+value.nip_nrp+'</td>';
                    rows = rows + '<td style="display:none" >'+value.id_jabatan+'</td>';
                    rows = rows + '<td>'+value.jabatan.nama_jabatan+'</td>';
                    rows = rows + '<td>'+value.nomor_sk+'</td>';
                    rows = rows + '<td>'+value.pejabat+'</td>';
                    rows = rows + '<td>'+value.tgl_sk+'</td>';
                    rows = rows + '<td>'+value.tgl_mulai_terhitung+'</td>';
                    rows = rows + '<td>'+value.keterangan+'</td>';
                    rows = rows + '<td  class="text-center" data-id="'+value.id+'">';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-r-jabatan" class="badge badge-success edit-item-r-jabatan"><span class="fas fa-fw fa-edit " ></a> ';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-r-jabatan" class="badge badge-danger delete-r-jabatan"><span class="fas fa-fw fa-trash"></button>';
                    rows = rows + '</td>';
                    rows = rows + '</tr>';
                });
                $('.show_r_jabatan').html(rows);
            },
            error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
            complete: function(){
                $('.ajax-loader').css("visibility", "hidden");
            }
        });
    } //tutup akhir tampil
    //Simpan Barang
    $('#btn_simpan_jabatan').click(function(){
        var nomor_sk_r_jabatan=$("#modal-add-r-jabatan").find("input[name='nomor_sk_r_jabatan']").val();
        var pejabat_r_jabatan= $("#modal-add-r-jabatan").find("input[name='pejabat_r_jabatan']").val();
        var tgl_sk_r_jabatan =$("#modal-add-r-jabatan").find("input[name='tgl_sk_r_jabatan']").val();
        var tgl_mulai_terhitung_r_jabatan =$("#modal-add-r-jabatan").find("input[name='tgl_mulai_terhitung_r_jabatan']").val();
        var keterangan_r_jabatan =$("#modal-add-r-jabatan").find("input[name='keterangan_r_jabatan']").val();
        var nip_nrp_r_jabatan =$("#modal-add-r-jabatan").find("input[name='nip_nrp_r_jabatan']").val();
        var id_jabatan_r_jabatan =$("#modal-add-r-jabatan").find("select[name=id_jabatan_r_jabatan]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('riwayat_jabatan.store')}}',
                datatype:"html",
                data :{
                    nip_nrp:nip_nrp_r_jabatan,
                    id_jabatan:id_jabatan_r_jabatan,
                    nomor_sk:nomor_sk_r_jabatan,
                    pejabat:pejabat_r_jabatan,
                    tgl_sk:tgl_sk_r_jabatan,
                    tgl_mulai_terhitung:tgl_mulai_terhitung_r_jabatan,
                    keterangan:keterangan_r_jabatan,
                    _token: '{{csrf_token()}}',
                },
                success: function(data){
                    $("#modal-add-r-jabatan").find("input[name='nomor_sk_r_jabatan']").val("");
                    $("#modal-add-r-jabatan").find("input[name='pejabat_r_jabatan']").val("");
                    $("#modal-add-r-jabatan").find("input[name='tgl_sk_r_jabatan']").val("");
                    $("#modal-add-r-jabatan").find("input[name='tgl_mulai_terhitung_r_jabatan']").val("");
                    $("#modal-add-r-jabatan").find("input[name='keterangan_r_jabatan']").val("");

                    $("#modal-add-r-jabatan").find("select[name=id_jabatan_r_jabatan]").val("");
                    tampil_data_riwayat_jabatan();
                    $('#modal-add-r-jabatan').modal('hide');
                },
                error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
    });
    /* Edit Post */
    $("body").on("click",".edit-item-r-jabatan",function(){
        var id = $(this).parent("td").data('id');
        var nip_nrp =$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var id_jabatan = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var nomor_sk =$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var pejabat = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
        var tgl_sk = $(this).parent("td").prev("td").prev("td").prev("td").text();
        var tgl_mulai_terhitung =$(this).parent("td").prev("td").prev("td").text();
        var keterangan =$(this).parent("td").prev("td").text();
        // set value ke form
        var i;
        var x= document.getElementById("id_jabatan");
            for(i=0; i<x.options.length;i++){
                if(x.options[i].value == id_jabatan){
                    $("#edit-r-jabatan").find("select[name=id_jabatan_r_jabatan]").val(id_jabatan);
                }
                else{
                    $("#edit-r-jabatan").find("select[name=id_jabatan_r_jabatan]").val();
                }
            }
        $("#edit-r-jabatan").find("input[name='nomor_sk_r_jabatan']").val(nomor_sk);
        $("#edit-r-jabatan").find("input[name='pejabat_r_jabatan']").val(pejabat);
        $("#edit-r-jabatan").find("input[name='tgl_sk_r_jabatan']").val(tgl_sk);
        $("#edit-r-jabatan").find("input[name='tgl_mulai_terhitung_r_jabatan']").val(tgl_mulai_terhitung);
        $("#edit-r-jabatan").find("input[name='keterangan_r_jabatan']").val(keterangan);
        $("#edit-r-jabatan").find("input[name='nip_nrp_r_jabatan']").val(nip_nrp);
        $("#edit-r-jabatan").find("input[name='id_r_jabatan']").val(id);
        // console.log(tgl_mulai_terhitung);

    });
    /* Updated  Post baru (Updated new Post) */
    $(".btn-edit-r-jabatan").click(function(e){
        e.preventDefault();
        // get value from form
        var nomor_sk_r_jabatan=$("#edit-r-jabatan").find("input[name='nomor_sk_r_jabatan']").val();
        var pejabat_r_jabatan= $("#edit-r-jabatan").find("input[name='pejabat_r_jabatan']").val();
        var tgl_sk_r_jabatan =$("#edit-r-jabatan").find("input[name='tgl_sk_r_jabatan']").val();
        var tgl_mulai_terhitung_r_jabatan =$("#edit-r-jabatan").find("input[name='tgl_mulai_terhitung_r_jabatan']").val();
        var keterangan_r_jabatan =$("#edit-r-jabatan").find("input[name='keterangan_r_jabatan']").val();
        var nip_nrp_r_jabatan =$("#edit-r-jabatan").find("input[name='nip_nrp_r_jabatan']").val();
        var id_jabatan_r_jabatan =$("#edit-r-jabatan").find("select[name=id_jabatan_r_jabatan]").val();
        var id_r_jabatan =$("#edit-r-jabatan").find("input[name='id_r_jabatan']").val();
        $.ajax({
            type:'POST',
            dataType: 'json',
            url: '{{route('riwayat_jabatan.update')}}',
            data:{
                id:id_r_jabatan,
                nip_nrp:nip_nrp_r_jabatan,
                id_jabatan:id_jabatan_r_jabatan,
                nomor_sk:nomor_sk_r_jabatan,
                pejabat:pejabat_r_jabatan,
                tgl_sk:tgl_sk_r_jabatan,
                tgl_mulai_terhitung:tgl_mulai_terhitung_r_jabatan,
                keterangan:keterangan_r_jabatan,
                _token: '{{csrf_token()}}',
            },
            success : function(data){
                console.log(data);
            }
        }).done(function(data){
            tampil_data_riwayat_jabatan();
            $(".modal").modal('hide');
            toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
        })
    })
    // klik delete
        $("body").on("click",".delete-r-jabatan",function(){
        var id = $(this).parent("td").data('id');
        $("#hapus-r-jabatan").find("input[name='id_hapus']").val(id);

    });
    /* Remove Post (Hapus) */
        $("#btn-hapus-r-jabatan").click(function(e){
        e.preventDefault();
        var id =  $("#hapus-r-jabatan").find("input[name='id_hapus']").val();
        var c_obj = $(this).parents("tr");
        confirm
        $.ajax({
            dataType: 'json',
            type:'post',
            data:{id:id,_token: '{{csrf_token()}}'},
            url: '{{route('riwayat_jabatan.delete')}}',
        }).done(function(data){
            c_obj.remove();
            toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            tampil_data_riwayat_jabatan();
                $(".modal").modal('hide');
        });
        // console.log(id);
    })
</script>
<!------------------------------------------------------------------akhir riwayat jabatan-------------------------------------------->
<!--------------------------------------------------------------------awal tanda jasa----------------------------------------------->
<script>
  $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    tampil_data_tanda_jasa();  //pemanggilan fungsi gaji.
            //fungsi tampil barang
    function tampil_data_tanda_jasa(){
        $.ajax({
            type  : 'GET',
            beforeSend: function(){
                $('.ajax-loader').css("visibility", "visible");
            },
            url   : '/tanda_jasa/'+nrp,
            async : true,
            dataType : 'json',
            success : function(data){
                console.log(data);
                var i;
                var no=1;
                var rows ='';
                $.each( data, function( key, value ) {
                    rows = rows + '<tr>';
                    rows = rows + '<td>'+ no++ +'</td>';
                    rows = rows +'<td style="display:none" >'+value.nip_nrp+'</td>';
                    rows = rows + '<td >'+value.nama_prestasi+'</td>';
                    rows = rows + '<td>'+value.tahun+'</td>';
                    rows = rows + '<td>'+value.keterangan+'</td>';
                    rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-tanda-jasa" class="badge badge-success edit-item-tanda-jasa"><span class="fas fa-fw fa-edit " ></a> ';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-tanda-jasa" class="badge badge-danger delete-tanda-jasa"><span class="fas fa-fw fa-trash"></button>';
                    rows = rows + '</td>';
                    rows = rows + '</tr>';
                });
                $('.show_tanda_jasa').html(rows);
            },
            error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
            complete: function(){
                $('.ajax-loader').css("visibility", "hidden");
            }
        });
    } //tutup akhir tampil
    //Simpan
     $('.simpan').click(function(e){
        e.preventDefault();
        var nip_nrp=$("#modal-add-tanda-jasa").find("input[name=nip_nrp]").val();
        var nama_prestasi=$("#modal-add-tanda-jasa").find("input[name=nama_prestasi]").val();
        var tahun=$("#modal-add-tanda-jasa").find("input[name=tahun]").val();
        var keterangan=$("#modal-add-tanda-jasa").find("input[name=keterangan]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('tanda_jasa.store')}}',
                datatype:"html",
                data : {nip_nrp:nip_nrp,nama_prestasi:nama_prestasi,tahun:tahun,keterangan:keterangan},
                success: function(data){

                    $("input[name=nama_prestasi]").val("");
                    $("input[name=tahun]").val("");
                    $("input[name=keterangan]").val("");
                    tampil_data_tanda_jasa();
                    $('.modal').modal('hide');
                },
                error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })

        });
        // edit
        /* Edit Post */
        $("body").on("click",".edit-item-tanda-jasa",function(){
            var id = $(this).parent("td").data('id');
            var nip_nrp = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama_prestasi = $(this).parent("td").prev("td").prev("td").prev("td").text();
            var tahun = $(this).parent("td").prev("td").prev("td").text();
            var keterangan =  $(this).parent("td").prev("td").text();
            $("#edit-tanda-jasa").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-tanda-jasa").find("input[name='nama_prestasi']").val(nama_prestasi);
            $("#edit-tanda-jasa").find("input[name='tahun']").val(tahun);
            $("#edit-tanda-jasa").find("input[name='keterangan']").val(keterangan);
            $("#edit-tanda-jasa").find("input[name='id']").val(id);
            // console.log(nip_nrp)
        });
        /* Updated  Post baru (Updated new Post) */
        $(".btn-edit-tanda-jasa").click(function(e){
            e.preventDefault();
            var id = $("#edit-tanda-jasa").find("input[name='id']").val();
            var nip_nrp =  $("#edit-tanda-jasa").find("input[name='nip_nrp']").val();
            var nama_prestasi =  $("#edit-tanda-jasa").find("input[name='nama_prestasi']").val();
            var tahun =   $("#edit-tanda-jasa").find("input[name='tahun']").val();
            var keterangan =  $("#edit-tanda-jasa").find("input[name='keterangan']").val();
            $.ajax({
                dataType: 'json',
                type:'post',
                url: '{{route('tanda_jasa.update')}}',
                data:{id:id,nip_nrp,nama_prestasi:nama_prestasi,tahun:tahun,keterangan:keterangan,_token: '{{csrf_token()}}'},
                 success: function(data){
                     console.log(data);
                 }
            }).done(function(data){
            tampil_data_tanda_jasa();
            $(".modal").modal('hide');
            toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
        })

        })
            // klik delete
            $("body").on("click",".delete-tanda-jasa",function(){
                var id = $(this).parent("td").data('id');
                $("#hapus-tanda-jasa").find("input[name='id_hapus']").val(id);
                console.log(id);
            });
            /* Remove Post (Hapus) */
            $("#btn-hapus-tanda-jasa").click(function(e){
            event.preventDefault();
            var id = $("#hapus-tanda-jasa").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'post',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('tanda_jasa.delete')}}',

            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                 tampil_data_tanda_jasa();
                  $(".modal").modal('hide');
            });
            });

  })//end ready
</script>
<!---------------------------------------------------------------------akhir tanda jasa---------------------------------------------->

<!-----------------------------------------------------------------awal riwayat kepangkatan--------------------------------------------->
<script>
  
    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_r_kepangkatan();  //pemanggilan fungsi 
    //fungsi tampil 
      function tampil_data_r_kepangkatan(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/riwayat_kepangkatan/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                  console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {
                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none" >'+value.nip_nrp+'</td>';
                      rows = rows + '<td style="display:none">'+value.id_pangkat+'</td>';
                      rows = rows + '<td>'+value.pangkat.nama_pangkat+'</td>';
                      rows = rows + '<td>'+value.tmt+'</td>';
                      rows = rows + '<td>'+value.nomor_sk+'</td>';
                      rows = rows + '<td>'+value.pejabat+'</td>';
                      rows = rows + '<td>'+value.tanggal_sk+'</td>';
                      rows = rows + '<td>'+value.dasar_peraturan+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-r-kepangkatan" class="badge badge-success edit-item-r-kepangkatan"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-r-kepangkatan" class="badge badge-danger delete-r-kepangkatan"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_r_kepangkatan').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
    $('#btn-simpan-r-kepangkatan').click(function(e){
        e.preventDefault();
        var nip_nrp=$("#modal-add-r-kepangkatan").find("input[name=nip_nrp]").val();
        var id_pangkat=$("#modal-add-r-kepangkatan").find("select[name=id_pangkat]").val();
        var tmt=$("#modal-add-r-kepangkatan").find("input[name=tmt]").val();
        var nomor_sk=$("#modal-add-r-kepangkatan").find("input[name=nomor_sk]").val();
        var pejabat=$("#modal-add-r-kepangkatan").find("input[name=pejabat]").val();
        var tanggal_sk=$("#modal-add-r-kepangkatan").find("input[name=tanggal_sk]").val();
        var dasar_peraturan=$("#modal-add-r-kepangkatan").find("input[name=dasar_peraturan]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('riwayat_kepangkatan.store')}}',
                datatype:"html",
                data : {nip_nrp:nip_nrp,id_pangkat:id_pangkat,tmt:tmt,nomor_sk:nomor_sk,pejabat:pejabat,tanggal_sk:tanggal_sk,dasar_peraturan:dasar_peraturan},
                success: function(data){
                $("#modal-add-r-kepangkatan").find("input[name=id_pangkat]").val("");
                $("#modal-add-r-kepangkatan").find("input[name=tmt]").val("");
                $("#modal-add-r-kepangkatan").find("input[name=nomor_sk]").val("");
                $("#modal-add-r-kepangkatan").find("input[name=pejabat]").val("");
                $("#modal-add-r-kepangkatan").find("input[name=tanggal_sk]").val("");
                $("#modal-add-r-kepangkatan").find("input[name=dasar_peraturan]").val("");
                tampil_data_r_kepangkatan();
                $('.modal').modal('hide');
                },
                error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })

    });
          // edit
          /* Edit Post */
          $("body").on("click",".edit-item-r-kepangkatan",function(){
            var id = $(this).parent("td").data('id');
            var nip_nrp = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var id_pangkat=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama_pangkat=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var tmt=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nomor_sk=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var pejabat=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var tanggal_sk=$(this).parent("td").prev("td").prev("td").text();
            var dasar_peraturan=$(this).parent("td").prev("td").text();
            // set
            $("#edit-r-kepangkatan").find("input[name='id']").val(id);
            $("#edit-r-kepangkatan").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-r-kepangkatan").find("input[name='tmt']").val(tmt);
            $("#edit-r-kepangkatan").find("input[name='nomor_sk']").val(nomor_sk);
            $("#edit-r-kepangkatan").find("input[name='pejabat']").val(pejabat);
            $("#edit-r-kepangkatan").find("input[name='tanggal_sk']").val(tanggal_sk);
            $("#edit-r-kepangkatan").find("input[name='dasar_peraturan']").val(dasar_peraturan);
            var i;
            var x= document.getElementById("id_pangkat_r_kepangkatan");
            for(i=0; i<x.options.length;i++){
                if(x.options[i].value == id_pangkat){
                    $("#edit-r-kepangkatan").find("select[name=id_pangkat]").val(id_pangkat);
                }
                else{
                    $("#edit-r-kepangkatan").find("select[name=id_pangkat]").val();

                }
            }
          });
          /* Updated  Post baru (Updated new Post) */
          $(".btn-edit-r-kepangkatan").click(function(e){
              e.preventDefault();
              var id = $("#edit-r-kepangkatan").find("input[name='id']").val();
              var nip_nrp =  $("#edit-r-kepangkatan").find("input[name='nip_nrp']").val();
              var id_pangkat =  $("#edit-r-kepangkatan").find("input[name='id_pangkat']").val();
              var tmt =   $("#edit-r-kepangkatan").find("input[name='tmt']").val();
              var pejabat =  $("#edit-r-kepangkatan").find("input[name='pejabat']").val();
              var nomor_sk =  $("#edit-r-kepangkatan").find("input[name='nomor_sk']").val();
              var tanggal_sk =  $("#edit-r-kepangkatan").find("input[name='tanggal_sk']").val();
              var dasar_peraturan =  $("#edit-r-kepangkatan").find("input[name='dasar_peraturan']").val();
              $.ajax({
                  dataType: 'json',
                  type:'post',
                  url: '{{route('riwayat_kepangkatan.update')}}',
                  data:{id:id,nip_nrp,id_pangkat:id_pangkat,tmt:tmt,pejabat:pejabat,nomor_sk:nomor_sk,tanggal_sk:tanggal_sk,dasar_peraturan:dasar_peraturan,_token: '{{csrf_token()}}'},
                   success: function(data){
                       console.log(data);
                   }
              }).done(function(data){
              tampil_data_r_kepangkatan();
              $(".modal").modal('hide');
              toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
          })
  
          })
        // klik delete
        $("body").on("click",".delete-r-kepangkatan",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-r-kepangkatan").find("input[name='id_hapus']").val(id);
           
        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-r-kepangkatan").click(function(e){
        event.preventDefault();
        var id = $("#hapus-r-kepangkatan").find("input[name='id_hapus']").val();
        var c_obj = $(this).parents("tr");
        $.ajax({
            dataType: 'json',
            type:'POST',
            data:{id:id,_token: '{{csrf_token()}}'},
            url: '{{route('riwayat_kepangkatan.delete')}}',

        }).done(function(data){
            c_obj.remove();
            toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            tampil_data_r_kepangkatan();
            $(".modal").modal('hide');
        });
        });
  
})//end ready
</script>
<!----------------------------------------------------------------akhir riwayat kepangkatan-------------------------------------------->
@endsection
