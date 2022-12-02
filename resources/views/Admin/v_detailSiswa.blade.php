@extends('layouts.mainBE')
@section('css')
<style type="text/css">
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }
</style>
@stop
@section('isi')
<div class="container-fluid_goldar">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">

                <h4 class="page-title">{{ $title }}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form id="data_pribadi" enctype="multipart/form-data" action="{{ url('update_pribadi') }}"
                        method="POST">
                        {{ csrf_field() }}
                        <div class="row g-2">
                            <div class="mb-3 col-md-3">
                                <label for="inputCity" class="form-label">NIK</label>
                                <input type="hidden" class="form-control" id="id_data_siswa" name="id_data_siswa"
                                    value="{{ $detail->id_data_siswa }}">
                                <input type="text" class="form-control" id="inputCity" name="nik"
                                    value="{{ $detail->nik }}" required>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="inputState" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputZip" name="nama_lengkap"
                                    value="{{ $detail->nama_lengkap }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jk" id="jk" required>
                                    @foreach ($jk as $j)
                                    <option value="{{ $j->id }}" {{ $j->id == $detail->jk ? 'selected' : '' }}>
                                        {{ $j->jenis_kelamin }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="floatingSelectGrid" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="inputZip" name="tempat_lahir"
                                    value="{{ $detail->tempat_lahir }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Tanggal Lahir</label>
                                <input type="date" id="example-fileinput" class="form-control" name="tanggal_lahir"
                                    value="{{ $detail->tanggal_lahir }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Agama</label>
                                <input type="text" id="example-fileinput" class="form-control" name="agama"
                                    value="{{ $detail->agama }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Kewarganegaraan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="kewarganegaraan"
                                    value="{{ $detail->kewarganegaraan }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Anak Ke-</label>
                                <input type="text" id="example-fileinput" class="form-control" name="anak_ke"
                                    value="{{ $detail->anak_ke }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Bahasa Sehari-Hari</label>
                                <input type="text" id="example-fileinput" class="form-control" name="bahasa_sehari"
                                    value="{{ $detail->bahasa_sehari }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Alamat Tempat Tinggal</label>
                                <input type="text" id="example-fileinput" class="form-control"
                                    name="alamat_tempat_tinggal" value="{{ $detail->alamat_tempat_tinggal }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">RT</label>
                                <input type="text" id="example-fileinput" class="form-control" name="rt"
                                    value="{{ $detail->rt }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">RW</label>
                                <input type="text" id="example-fileinput" class="form-control" name="rw"
                                    value="{{ $detail->rw }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Dusun</label>
                                <input type="text" id="example-fileinput" class="form-control" name="dusun"
                                    value="{{ $detail->dusun }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Desa</label>
                                <input type="text" id="example-fileinput" class="form-control" name="desa"
                                    value="{{ $detail->desa }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Kecamatan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="kecamatan"
                                    value="{{ $detail->kecamatan }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Kabupaten</label>
                                <input type="text" id="example-fileinput" class="form-control" name="kab"
                                    value="{{ $detail->kab }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Provinsi</label>
                                <input type="text" id="example-fileinput" class="form-control" name="prov"
                                    value="{{ $detail->prov }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Kode Pos</label>
                                <input type="text" id="example-fileinput" class="form-control" name="kode_pos"
                                    value="{{ $detail->kode_pos }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Ket Tinggal</label>
                                <input type="text" id="example-fileinput" class="form-control" name="ket_tinggal"
                                    value="{{ $detail->ket_tinggal }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Saudara Kandung</label>
                                <input type="text" id="example-fileinput" class="form-control"
                                    value="{{ $detail->brp_saudara }}" name="brp_saudara" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Jumlah Saudara</label>
                                <input type="text" id="example-fileinput" class="form-control" name="jml_saudara"
                                    value="{{ $detail->jml_saudara }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Golongan Darah</label>
                                <select class="form-select" name="id_goldar" id="id_goldar" required>
                                    @foreach ($goldar as $g)
                                    <option value="{{ $g->id_goldar }}" {{ $g->id_goldar == $detail->id_goldar ?
                                        'selected' : '' }}>
                                        {{ $g->goldar }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Berat Badan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="bb"
                                    value="{{ $detail->bb }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Tinggi Badan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="tb"
                                    value="{{ $detail->bb }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Riwayat Penyakit</label>
                                <input type="text" id="example-fileinput" class="form-control" name="riwayat_penyakit"
                                    value="{{ $detail->riwayat_penyakit }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Kelainan Jasmani</label>
                                <input type="text" id="example-fileinput" class="form-control" name="kelainan_jasmani"
                                    value="{{ $detail->kelainan_jasmani }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Alergi</label>
                                <input type="text" id="example-fileinput" class="form-control" name="alergi"
                                    value="{{ $detail->alergi }}" required>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="inputZip" class="form-label">Foto</label>
                                <input type="file" id="foto" class="form-control" name="foto">
                            </div>
                        </div>
                        <hr>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="inputCity" class="form-label">No. WA Ortu/Wali</label>
                                <input type="text" class="form-control" id="inputCity" name="no_wa"
                                    value="{{ $detail->no_wa }}" required>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="inputState" class="form-label">Email Ortu</label>
                                <input type="text" class="form-control" id="inputZip" name="email_ortu"
                                    value="{{ $detail->email_ortu }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Jarak Ke Sekolah</label>
                                <input type="text" class="form-control" id="inputZip" name="jarak"
                                    value="{{ $detail->jarak }}" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Transportasi Ke Sekolah</label>
                                <select class="form-select" name="id_jenis_transport" id="id_jenis_transport" required>
                                    @foreach ($trans as $tr)
                                    <option value="{{ $tr->id_jenis_transportasi }}" {{ $tr->id_jenis_transportasi ==
                                        $detail->id_jenis_transport ? 'selected' : '' }}>
                                        {{ $tr->nama_transportasi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Hobi Anak</label>
                                <input type="text" class="form-control" id="inputZip" name="hobi_anak"
                                    value="{{ $detail->hobi_anak }}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('modal')
@stop
@section('js')
@stop