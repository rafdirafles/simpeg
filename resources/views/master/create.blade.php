@extends("layouts.admin.app")
@section('body')

<!-- Begin Input Pegawai  -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Input Pegawai
                </h3>
            </div>
        </div>
        <!--begin::Form-->
    <form class="kt-form kt-form--label-right" action="{{route('master.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="kt-portlet__body">
                <label><b>Foto</b></label>
                <div class="kt-widget kt-widget--user-profile-1">
                    <div class="kt-widget__head">
                        <div class="kt-widget__media">
                            <img src="assets/media/users/100_1.jpg" alt="image">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" col-lg-6" placeholder="Upload Foto">
                    @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
                <div class="form-group row"></div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label>NIP / NRP</label>
                        <input type="text" name="nip_nrp" value="{{ old('nip_nrp') }}" class="form-control @error('nip_nrp') is-invalid @enderror" placeholder="Masukkan NIP/NRP" required>
                        @error('nip_nrp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" value="{{ old('nama_pegawai') }}" class="form-control @error('nama_pegawai') is-invalid @enderror" placeholder="Masukkan Nama Lengkap">
                        @error('nama_pegawai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">Gelar Depan</label>
                        <input type="text"  name="gelar_depan" value="{{ old('gelar_depan') }}" class="form-control @error('gelar_depan') is-invalid @enderror" placeholder="Masukkan Gelar Depan">
                        @error('gelar_depan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Gelar Belakang</label>
                        <input type="text"  name="gelar_belakang"  value="{{ old('gelar_belakang') }} " class="form-control @error('gelar_belakang') is-invalid @enderror" placeholder="Masukkan Gelar Belakang">
                        @error('gelar_belakang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                            <label class="">No KTA Pegawai</label>
                        <input type="text"  name="no_kta_pegawai" class="form-control @error('no_kta_pegawai') is-invalid @enderror" value="{{ old('no_kta_pegawai') }}" placeholder="Masukkan No KTA Pegawai">
                        @error('no_kta_pegawai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Jenis Pegawai</label>
                        <input type="text"  name="jenis_pegawai" class="form-control @error('jenis_pegawai') is-invalid @enderror" value="{{ old('jenis_pegawai') }}" placeholder="Masukkan Jenis Pegawai">
                        @error('jenis_pegawai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Unit kerja</label>
                            <select class="form-control @error('id_unit_kerja') is-invalid @enderror" value="{{ old('id_unit_kerja') }}" name="id_unit_kerja" id="sel1" required>
                                <option value="">select unit kerja</option>
                            @foreach ($datas as $data)
                                <option value="{{$data->id}}">{{$data->nama_unit_kerja}}</option>
                            @endforeach
                            </select>
                            @error('id_unit_kerja')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                                <label class="">No.Kep.Jabatan</label>
                                <input type="text" name="no_kep_jabatan" class="form-control @error('no_kep_jabatan') is-invalid @enderror" value="{{ old('no_kep_jabatan') }}" placeholder="Masukkan No.Kep.Jabatan">
                               @error('no_kep_jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                        </div>
                </div>

                <div class="form-group row"></div>
                <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">E-mail</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Masukkan Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                </div>
                <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Password</label>
                            <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Masukkan Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                        <div class="col-lg-6">
                            <label class="">Retype Password</label>
                            <input type="password" name="re_password" class="form-control @error('re_password') is-invalid @enderror" value="{{ old('re_password') }}" placeholder="Masukkan Password Kembali">
                            @error('re_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                </div>
                <div class="form-group row"></div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">NIDN</label>
                        <input type="text" name="nidn" class="form-control @error('nidn') is-invalid @enderror" value="{{ old('nidn') }}" placeholder="Masukkan NIDN">
                        @error('nidn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Alamat</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" placeholder="Masukkan Alamat ">
                       @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}" placeholder="Masukkan Tempat Lahir">
                       @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}" placeholder="Masukkan Tanggal Lahir">
                       @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">Jenis Kelamin</label>
                        <select class="form-control @error('jk') is-invalid @enderror" value="{{ old('jk') }}" name="jk" id="sel1">
                            <option></option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Agama</label>
                        <select class="form-control @error('agama') is-invalid @enderror" value="{{ old('agama') }}" name="agama" id="sel1">
                                <option></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                        </select>
                       @error('agama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row"></div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">NIK</label>
                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" placeholder="Masukkan NIK">
                       @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Status menikah</label>
                        <select class="form-control @error('status_menikah') is-invalid @enderror" value="{{ old('status_menikah') }}" name="status_menikah" id="sel1">
                                <option></option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Janda">Janda</option>
                                <option value="Duda">Duda</option>
                        </select>
                        @error('status_menikah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                    <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">No Kartu Keluarga</label>
                        <input type="text" name="no_kk" class="form-control @error('no_kk') is-invalid @enderror" value="{{ old('no_kk') }}" placeholder="Masukkan No Kartu Keluarga">
                       @error('no_kk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row"></div>

                <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">No Telepon</label>
                            <input type="text" name="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" value="{{ old('no_tlp') }}" placeholder="Masukkan Nomer Telepon">
                            @error('no_tlp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                        <div class="col-lg-6">
                            <label class="">No HP</label>
                            <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}" placeholder="Masukkan Nomer Handphone">
                            @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                            </div>
                </div>
                <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Tanggal Masuk</label>
                            <input type="date" name="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror" value="{{ old('tgl_masuk') }}" placeholder="Tanggal Masuk">
                            @error('tgl_masuk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                </div>
                <div class="form-group row"></div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">Tinggi Badan</label>
                        <input type="text" name="tinggi_badan" class="form-control @error('tinggi_badan') is-invalid @enderror" value="{{ old('tinggi_badan') }}" placeholder="Tinggi">
                       @error('tinggi_badan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Berat Badan</label>
                        <input type="text" name="berat_badan" class="form-control @error('berat_badan') is-invalid @enderror" value="{{ old('berat_badan') }}" placeholder="Berat">
                       @error('berat_badan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Warna Rambut</label>
                            <input type="text" name="warna_rambut" class="form-control @error('warna_rambut') is-invalid @enderror" value="{{ old('warna_rambut') }}" placeholder="Masukkan Warna Rambut">
                        @error('warna_rambut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label class="">Bentuk Muka</label>
                            <input type="text" name="bentuk_muka" class="form-control @error('bentuk_muka') is-invalid @enderror" value="{{ old('bentuk_muka') }}" placeholder="Masukkan Bentuk Muka">
                            @error('bentuk_muka')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Warna Kulit</label>
                            <input type="text" name="warna_kulit" class="form-control @error('warna_kulit') is-invalid @enderror" value="{{ old('warna_kulit') }}" placeholder="Masukkan Warna Kulit">
                            @error('warna_kulit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label class="">Ciri Khas</label>
                            <input type="text" name="ciri_khas" class="form-control @error('ciri_khas') is-invalid @enderror" value="{{ old('ciri_khas') }}" placeholder="Masukkan Ciri Khas">
                            @error('ciri_khas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Cacat Tubuh</label>
                            <input type="text" name="cacat_tubuh" class="form-control @error('cacat_tubuh') is-invalid @enderror" value="{{ old('cacat_tubuh') }}" placeholder="Masukkan Cacat Tubuh">
                            @error('cacat_tubuh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                                <label class="">Hobi</label>
                                <input type="text" name="hobi" class="form-control @error('hobi') is-invalid @enderror" value="{{ old('hobi') }}" placeholder="Masukkan Hobi">
                            @error('hobi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        {{-- <div class="col-lg-4"></div> --}}
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            {{-- <button type="submit" class="btn btn-secondary">Cancel</button> --}}
                        </div>
                    </div>
                </div>
            </div>
    </form>
        <!--end::Form-->
    </div>
    </div>
</div>
</div>
<!-- End form input -->
@endsection
