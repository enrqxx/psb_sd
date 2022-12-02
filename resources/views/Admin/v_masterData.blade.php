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
<div class="container-fluid">

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
                    @if (session('pesan'))
                    <div class="col-sm-12">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Success - </strong> {{ session('pesan') }}!
                        </div>
                        @elseif (session('hapus'))
                        <div class="col-sm-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('hapus') }}</strong>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            </div>
                        </div>
                        @elseif(count($errors) > 0)
                        <div class="col-sm-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>
                                    @foreach ($errors->all() as $error)
                                    {{ $error }}
                                    @endforeach
                                </strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            </div>
                        </div>
                        @endif
                        <table id="mytable" class="table dt-responsive nowrap scroll-vertical scroll-horizontal">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th></th>
                                    <th>Nama Siswa</th>
                                    <th>Informasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div> <!-- end preview-->
                </div> <!-- end preview-->
            </div> <!-- end preview-->
        </div> <!-- end preview-->
    </div> <!-- end preview-->
    @stop
    @section('modal')
    <div class="modal fade" id="detail-ortu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Data Orang Tua</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form id="data_ortu" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" id="nik" name="nik">
                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="inputCity" class="form-label">Nama Ayah </label>
                                <input type="text" class="form-control" id="inputCity" name="nama_ayah">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputState" class="form-label">Tempat Lahir Ayah</label>
                                <input type="text" class="form-control" id="inputZip" name="tempat_lahir_ayah">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Tanggal Lahir Ayah</label>
                                <input type="date" class="form-control" id="inputZip" name="tanggal_lahir_ayah">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="floatingSelectGrid" class="form-label">Pendidikan Ayah</label>
                                <select class="form-select" name="id_pendidikan_ayah" id="id_pendidikan_ayah" required>
                                    @foreach ($pend as $p)
                                    <option value="{{ $p->id }}">
                                        {{ $p->nama_pendidikan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Perkejaan Ayah</label>
                                <input type="text" id="example-fileinput" class="form-control" name="pekerjaan_ayah">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Nomor Telepon Ayah</label>
                                <input type="text" id="example-fileinput" class="form-control" name="no_telp_ayah">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Nama Instansi Ayah Berkerja</label>
                                <input type="text" id="example-fileinput" class="form-control" name="instansi_ayah">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Alamat Pekerjaan Ayah</label>
                                <input type="text" id="example-fileinput" class="form-control" name="alamat_kerja_ayah">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Penghasilan Ayah Per Bulan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="penghasilan_ayah">
                            </div>
                        </div>
                        <hr>
                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="inputCity" class="form-label">Nama Ibu </label>
                                <input type="text" class="form-control" id="inputCity" name="nama_ibu">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputState" class="form-label">Tempat Lahir Ibu</label>
                                <input type="text" class="form-control" id="inputZip" name="tempat_lahir_ibu">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Tanggal Lahir Ibu</label>
                                <input type="date" class="form-control" id="inputZip" name="tanggal_lahir_ibu">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="floatingSelectGrid" class="form-label">Pendidikan Ibu</label>
                                <select class="form-select" name="id_pendidikan_ibu" id="id_pendidikan_ibu" required>
                                    @foreach ($pend as $p)
                                    <option value="{{ $p->id }}">
                                        {{ $p->nama_pendidikan }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Perkejaan Ibu</label>
                                <input type="text" id="example-fileinput" class="form-control" name="pekerjaan_ibu">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Nomor Telepon Ibu</label>
                                <input type="text" id="example-fileinput" class="form-control" name="no_tlp_ibu">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Nama Instansi Ibu Berkerja</label>
                                <input type="text" id="example-fileinput" class="form-control"
                                    name="instansi_kerja_ibu">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Alamat Pekerjaan Ibu</label>
                                <input type="text" id="example-fileinput" class="form-control" name="alamat_kerja_ibu">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Penghasilan Ibu Per Bulan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="penghasilan_ibu">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal fade" id="detail-wali" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Data Wali</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form id="data_wali" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" id="nik" name="nik">
                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="inputCity" class="form-label">Nama Wali Murid </label>
                                <input type="text" class="form-control" id="inputCity" name="nama_wali_murid" required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputState" class="form-label">Tempat Lahir Wali Murid</label>
                                <input type="text" class="form-control" id="inputZip" name="tempat_lahir_wali" required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Tanggal Lahir Wali Murid</label>
                                <input type="date" class="form-control" id="inputZip" name="tgl_lahir_wali" required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="floatingSelectGrid" class="form-label">Pendidikan Wali Murid</label>
                                <select class="form-select" name="id_pendidikan_wali" id="id_pendidikan_wali" required>
                                    @foreach ($pend as $p)
                                    <option value="{{ $p->id }}">
                                        {{ $p->nama_pendidikan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Perkejaan Wali Murid</label>
                                <input type="text" id="example-fileinput" class="form-control" name="pekerjaan_wali"
                                    required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Nomor Telepon Wali Murid</label>
                                <input type="text" id="example-fileinput" class="form-control" name="no_tlp_wali"
                                    required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Nama Instansi Wali Murid Berkerja</label>
                                <input type="text" id="example-fileinput" class="form-control"
                                    name="instansi_kerja_wali" required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Alamat Pekerjaan Wali Murid</label>
                                <input type="text" id="example-fileinput" class="form-control" name="alamat_kerja_wali"
                                    required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputZip" class="form-label">Penghasilan Wali Murid Per Bulan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="penghasilan_wali"
                                    required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="detail-pribadi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-full-width">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form id="data_pribadi" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="inputCity" class="form-label">NIK</label>
                                <input type="hidden" class="form-control" id="id_data_siswa" name="id_data_siswa">
                                <input type="text" class="form-control" id="inputCity" name="nik" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputState" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputZip" name="nama_lengkap" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jk" id="jk" required>
                                    @foreach ($jk as $j)
                                    <option value="{{ $j->id }}">
                                        {{ $j->jenis_kelamin }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="floatingSelectGrid" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="inputZip" name="tempat_lahir" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Tanggal Lahir</label>
                                <input type="date" id="example-fileinput" class="form-control" name="tanggal_lahir"
                                    required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Agama</label>
                                <input type="text" id="example-fileinput" class="form-control" name="agama" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Kewarganegaraan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="kewarganegaraan"
                                    required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Anak Ke-</label>
                                <input type="text" id="example-fileinput" class="form-control" name="anak_ke" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Bahasa Sehari-Hari</label>
                                <input type="text" id="example-fileinput" class="form-control" name="bahasa_sehari"
                                    required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Alamat Tempat Tinggal</label>
                                <input type="text" id="example-fileinput" class="form-control"
                                    name="alamat_tempat_tinggal" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">RT</label>
                                <input type="text" id="example-fileinput" class="form-control" name="rt" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">RW</label>
                                <input type="text" id="example-fileinput" class="form-control" name="rw" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Dusun</label>
                                <input type="text" id="example-fileinput" class="form-control" name="dusun" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Desa</label>
                                <input type="text" id="example-fileinput" class="form-control" name="desa" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Kecamatan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="kecamatan"
                                    required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Kabupaten</label>
                                <input type="text" id="example-fileinput" class="form-control" name="kab" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Provinsi</label>
                                <input type="text" id="example-fileinput" class="form-control" name="prov" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Kode Pos</label>
                                <input type="text" id="example-fileinput" class="form-control" name="kode_pos" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Ket Tinggal</label>
                                <input type="text" id="example-fileinput" class="form-control" name="ket_tinggal"
                                    required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Saudara Kandung</label>
                                <input type="text" id="example-fileinput" class="form-control" name="brp_saudara"
                                    required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Jumlah Saudara</label>
                                <input type="text" id="example-fileinput" class="form-control" name="jml_saudara"
                                    required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Golongan Darah</label>
                                <select class="form-select" name="id_goldar" id="id_goldar" required>
                                    @foreach ($goldar as $g)
                                    <option value="{{ $g->id_goldar }}">
                                        {{ $g->goldar }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Berat Badan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="bb" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Tinggi Badan</label>
                                <input type="text" id="example-fileinput" class="form-control" name="tb" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Riwayat Penyakit</label>
                                <input type="text" id="example-fileinput" class="form-control" name="riwayat_penyakit"
                                    required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Kelainan Jasmani</label>
                                <input type="text" id="example-fileinput" class="form-control" name="kelainan_jasmani"
                                    required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Alergi</label>
                                <input type="text" id="example-fileinput" class="form-control" name="alergi" required>
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
                                <input type="text" class="form-control" id="inputCity" name="no_wa" required>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="inputState" class="form-label">Email Ortu</label>
                                <input type="text" class="form-control" id="inputZip" name="email_ortu" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Jarak Ke Sekolah</label>
                                <input type="text" class="form-control" id="inputZip" name="jarak" required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Transportasi Ke Sekolah</label>
                                <select class="form-select" name="id_jenis_transport" id="id_jenis_transport" required>
                                    @foreach ($trans as $tr)
                                    <option value="{{ $tr->id_jenis_transportasi }}">
                                        {{ $tr->nama_transportasi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="inputZip" class="form-label">Hobi Anak</label>
                                <input type="text" class="form-control" id="inputZip" name="hobi_anak" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Terima --}}
    <div id="diterima-di" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="success-header-modalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-success">
                    <h4 class="modal-title" id="success-header-modalLabel">Terima Siswa</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <form id="form-terima" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <label for="inputCity" class="form-label">Di Terima Di Kelas: </label>
                        <input type="hidden" class="form-control" id="id_data_siswa" name="id_data_siswa">
                        <input type="hidden" class="form-control" id="status" name="status" value="1">
                        <input type="text" class="form-control" id="inputCity" name="diterima_di" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    @stop
    @section('js')
    <script type="text/javascript">
        let list_siswa = [];

          const table = $("#mytable").DataTable({
              "pageLength": 10,
              "lengthMenu": [
                  [10, 25, 50, 100],
                  [10, 25, 50, 100]
              ],
              "bLengthChange": true,
              "bFilter": true,
              "bInfo": true,
              "processing": true,
              "bServerSide": true,
              "order": [
                  [1, "asc"]
              ],
              "ajax": {
                  url: "{{ url('list_calon') }}",
                  type: "POST",
                  data: function(d) {
                      d._token = "{{ csrf_token() }}"
                  }
              },
              "columnDefs": [{
                  "targets": 0,
                  "data": "id_data_siswa",
                  "render": function(data, type, row, meta) {
                      list_siswa[row.id_data_siswa] = row;
                      return meta.row + meta.settings._iDisplayStart + 1;
                      // console.log(list_siswa)
                  }
              }, {
                  "targets": 1,
                  "data": "id_data_siswa",
                  "render": function(data, type, row, meta) {
                      return `<img id="ttd" src="{{ url('') }}/dok_foto_siswa/${row.foto}"
                                            width="104px" height="118px">`;

                  }
              }, {
                  "targets": 2,
                  "data": "nama_lengkap",
                  "render": function(data, type, row, meta) {
                      return data;
                  }
              }, {
                  "targets": 3,
                  "sortable": false,
                  "data": "id_data_siswa",
                  "render": function(data, type, row, meta) {
                      var stts = ``;
                      if (row.status == 1) {
                          stts += `<span class="badge badge-success-lighten ">Diterima di Kelas ` + row
                              .diterima_di + `</span>`
                      } else if (row.status == 2) {
                          stts += `<span class="badge badge-danger-lighten ">Tertolak</span>`
                      } else {
                          stts += `<span class="badge badge-warning-lighten">--</span>`
                      }
                      return `<p><b>Alamat: </b>` + row.alamat_tempat_tinggal + `, RT/RW. ` + row
                          .rt + `/` + row
                          .rw + `, ` + row.dusun + `, ` + row.kecamatan + `, ` +
                          `<br>` + row.kab + `, ` + row.prov + `, ` + row.kode_pos + `<br>` +
                          `<b>NIK: </b>` + row.nik + `<br>` +
                          `<b>Tempat, Tanggal Lahir: </b>` + row.tempat_lahir + `, ` + row.tanggal_lahir +
                          `<br>` +
                          `<b>Agama: </b>` + row.agama + `<br>` +
                          `<b>Kewarganegaraan: </b>` + row.kewarganegaraan + `<br>` +
                          `<b>Status: </b>` + stts + `</p>` +
                          `<button class="btn btn-sm btn-info" onclick="detailOrtu(${row.id_data_siswa})">Data Orang Tua</button>
                          <button class="btn btn-sm btn-info" onclick="detailWali(${row.id_data_siswa})">Data Wali</button>
                          <a class="btn btn-sm btn-info" href="/detailSiswa/${row.id_data_siswa}" target=_blank>Detail Pribadi</a>
                          <button class="btn btn-sm btn-warning" onclick="hapus(${row.nik})">Hapus</button>
                          `;
                  }
                  //  <a data-bs-toggle="modal" data-bs-target="#modalDetail"><i class='lni lni-eye'></i></a>
              }, {
                  "targets": 4,
                  "data": "id_data_siswa",
                  "render": function(data, type, row, meta) {
                      return `
                              <button class="btn btn-sm btn-success" onclick="terima(${row.id_data_siswa})">Terima</button>
                                <button class="btn btn-sm btn-danger" onclick="tolak(${row.id_data_siswa})">Tolak</button>`;
                  }
              }]
          });

          function toggleStatus(id_data_siswa) {

              const _c = confirm("Apakah Anda yakin?")
              if (_c === true) {

                  //   console.log(siswa)
                  const status_update = 1
                  const is_kirim = 2
                  $.ajax({
                      url: '{{ url('') }}/update_verif',
                      method: 'POST',
                      data: {
                          id_data_siswa: id_data_siswa,
                          id_akun: siswa.id_akun,
                          is_active: status_update,
                          is_kirim: is_kirim,
                          _token: '{{ csrf_token() }}'
                      },
                      success: function(res) {
                          if (res === true) {
                              table.ajax.reload(null, false)
                          }
                      }
                  })
              }
          };

          function terima(id_data_siswa) {
              $('#diterima-di').modal('show');
              $("#diterima-di [name='id_data_siswa']").val(id_data_siswa)
          };

          $('#form-terima').on('submit', function(event) {
              event.preventDefault() //jangan disubmit
              terimaSiswa()
          });

          $('#data_ortu').on('submit', function(event) {
              event.preventDefault() //jangan disubmit
              updateOrtu()
          });

          $('#data_wali').on('submit', function(event) {
              event.preventDefault() //jangan disubmit
              updateWali()
          });

          $('#data_pribadi').on('submit', function(event) {
              event.preventDefault() //jangan disubmit
              updatePribadi()
          });

          function terimaSiswa() {
              let form = $('#form-terima');
              const url = "{{ url('status_terima') }}";
              $.ajax({
                  url,
                  method: "POST",
                  data: form.serialize(),
                  success: function(response) {
                      if (response === true) {
                          table.ajax.reload(null, false)
                          alert('Berhasil!')
                      }
                  },
                  error: function(e) {
                      alert('Something wrong!')
                  }
              })
          }

          function updateOrtu() {
              let form = $('#data_ortu');
              const url = "{{ url('update_ortu') }}";
              $.ajax({
                  url,
                  method: "POST",
                  data: form.serialize(),
                  success: function(response) {
                      if (response === true) {
                          table.ajax.reload(null, false)
                          alert('Berhasil!')
                      }
                  },
                  error: function(e) {
                      alert('Something wrong!')
                  }
              })
          }

          function updateWali() {
              let form = $('#data_wali');
              const url = "{{ url('update_wali') }}";
              $.ajax({
                  url,
                  method: "POST",
                  data: form.serialize(),
                  success: function(response) {
                      if (response === true) {
                          table.ajax.reload(null, false)
                          alert('Berhasil!')
                      }
                  },
                  error: function(e) {
                      alert('Something wrong!')
                  }
              })
          }

          function updatePribadi() {
              var theForm = document.getElementById('data_pribadi').enctype = 'multipart/form-data';
              let form = theForm.serialize();
              var x = document.getElementById("foto").value;
              console.log(x)
              const url = "{{ url('update_pribadi') }}";
              $.ajax({
                  url,
                  method: "POST",
                  data: {
                      form,
                      foto: x,
                      _token: '{{ csrf_token() }}'
                  },
                  success: function(response) {
                      if (response === true) {
                          table.ajax.reload(null, false)
                          alert('Berhasil!')
                      }
                  },
                  error: function(e) {
                      alert('Something wrong!')
                  }
              })
          }

          function tolak(id_data_siswa) {

              const _c = confirm("Apakah Anda yakin menolak?")
              if (_c === true) {
                  const status_update = 2
                  $.ajax({
                      url: '{{ url('') }}/status_terima',
                      method: 'POST',
                      data: {
                          id_data_siswa: id_data_siswa,
                          status: status_update,
                          _token: '{{ csrf_token() }}'
                      },
                      success: function(res) {
                          if (res === true) {
                              table.ajax.reload(null, false)
                              alert('Berhasil Menolak Siswa!')
                          }
                      }
                  })
              }
          };

          function detailOrtu(id_data_siswa) {
              const siswa = list_siswa[id_data_siswa]

              $('#detail-ortu').modal('show')
              $("#data_ortu [name='nik']").val(siswa.nik)

              $("#data_ortu [name='nama_ayah']").val(siswa.nama_ayah)
              $("#data_ortu [name='tanggal_lahir_ayah']").val(siswa.tanggal_lahir_ayah)
              $("#data_ortu [name='tempat_lahir_ayah']").val(siswa.tempat_lahir_ayah)
              $("#data_ortu [name='id_pendidikan_ayah']").val(siswa.id_pendidikan_ayah)
              $("#data_ortu [name='pekerjaan_ayah']").val(siswa.pekerjaan_ayah)
              $("#data_ortu [name='no_telp_ayah']").val(siswa.no_telp_ayah)
              $("#data_ortu [name='instansi_ayah']").val(siswa.instansi_ayah)
              $("#data_ortu [name='alamat_kerja_ayah']").val(siswa.alamat_kerja_ayah)
              $("#data_ortu [name='penghasilan_ayah']").val(siswa.penghasilan_ayah)

              $("#data_ortu [name='nama_ibu']").val(siswa.nama_ibu)
              $("#data_ortu [name='tanggal_lahir_ibu']").val(siswa.tanggal_lahir_ibu)
              $("#data_ortu [name='tempat_lahir_ibu']").val(siswa.tempat_lahir_ibu)
              $("#data_ortu [name='id_pendidikan_ibu']").val(siswa.id_pendidikan_ibu)
              $("#data_ortu [name='pekerjaan_ibu']").val(siswa.pekerjaan_ibu)
              $("#data_ortu [name='no_tlp_ibu']").val(siswa.no_tlp_ibu)
              $("#data_ortu [name='instansi_kerja_ibu']").val(siswa.instansi_kerja_ibu)
              $("#data_ortu [name='alamat_kerja_ibu']").val(siswa.alamat_kerja_ibu)
              $("#data_ortu [name='penghasilan_ibu']").val(siswa.penghasilan_ibu)
          }

          function detailWali(id_data_siswa) {
              const siswa = list_siswa[id_data_siswa]

              $('#detail-wali').modal('show')
              $("#data_wali [name='nik']").val(siswa.nik)

              $("#data_wali [name='nama_wali_murid']").val(siswa.nama_wali_murid)
              $("#data_wali [name='tgl_lahir_wali']").val(siswa.tgl_lahir_wali)
              $("#data_wali [name='tempat_lahir_wali']").val(siswa.tempat_lahir_wali)
              $("#data_wali [name='id_pendidikan_wali']").val(siswa.id_pendidikan_wali)
              $("#data_wali [name='pekerjaan_wali']").val(siswa.pekerjaan_wali)
              $("#data_wali [name='no_tlp_wali']").val(siswa.no_tlp_wali)
              $("#data_wali [name='instansi_kerja_wali']").val(siswa.instansi_kerja_wali)
              $("#data_wali [name='alamat_kerja_wali']").val(siswa.alamat_kerja_wali)
              $("#data_wali [name='penghasilan_wali']").val(siswa.penghasilan_wali)
          }

          function detailPribadi(id_data_siswa) {
              const siswa = list_siswa[id_data_siswa]
              //   console.log(siswa.jarak)
              $('#detail-pribadi').modal('show')
              $("#data_pribadi [name='nik']").val(siswa.nik)
              $("#data_pribadi [name='id_data_siswa']").val(id_data_siswa)

              $("#data_pribadi [name='nama_lengkap']").val(siswa.nama_lengkap)
              $("#data_pribadi [name='jk']").val(siswa.jk)
              $("#data_pribadi [name='tempat_lahir']").val(siswa.tempat_lahir)
              $("#data_pribadi [name='tanggal_lahir']").val(siswa.tanggal_lahir)
              $("#data_pribadi [name='agama']").val(siswa.agama)
              $("#data_pribadi [name='kewarganegaraan']").val(siswa.kewarganegaraan)
              $("#data_pribadi [name='anak_ke']").val(siswa.anak_ke)
              $("#data_pribadi [name='bahasa_sehari']").val(siswa.bahasa_sehari)
              $("#data_pribadi [name='alamat_tempat_tinggal']").val(siswa.alamat_tempat_tinggal)
              $("#data_pribadi [name='rt']").val(siswa.rt)
              $("#data_pribadi [name='rw']").val(siswa.rw)
              $("#data_pribadi [name='dusun']").val(siswa.dusun)
              $("#data_pribadi [name='desa']").val(siswa.desa)
              $("#data_pribadi [name='kecamatan']").val(siswa.kecamatan)
              $("#data_pribadi [name='kab']").val(siswa.kab)
              $("#data_pribadi [name='prov']").val(siswa.prov)
              $("#data_pribadi [name='kode_pos']").val(siswa.kode_pos)
              $("#data_pribadi [name='ket_tinggal']").val(siswa.ket_tinggal)
              $("#data_pribadi [name='brp_saudara']").val(siswa.brp_saudara)
              $("#data_pribadi [name='jml_saudara']").val(siswa.jml_saudara)
              $("#data_pribadi [name='id_goldar']").val(siswa.id_goldar)
              $("#data_pribadi [name='bb']").val(siswa.bb)
              $("#data_pribadi [name='tb']").val(siswa.tb)
              $("#data_pribadi [name='riwayat_penyakit']").val(siswa.riwayat_penyakit)
              $("#data_pribadi [name='kelainan_jasmani']").val(siswa.kelainan_jasmani)
              $("#data_pribadi [name='alergi']").val(siswa.alergi)
              //   $("#data_pribadi [name='foto']").val(siswa.foto)
              $("#data_pribadi [name='no_wa']").val(siswa.no_wa)
              $("#data_pribadi [name='email_ortu']").val(siswa.email_ortu)
              $("#data_pribadi [name='jarak']").val(siswa.jarak)
              $("#data_pribadi [name='id_jenis_transport']").val(siswa.id_jenis_transport)
              $("#data_pribadi [name='hobi_anak']").val(siswa.hobi_anak)
          }

          function hapus(nik) {
              const c = confirm("Hapus data?")
              if (c === true) {
                  $.ajax({
                      url: "{{ url('delete_datasiswa') }}?nik=" + nik,
                      success: function(response) {
                          if (response === true) {
                              table.ajax.reload(null, false)
                              alert('Berhasil Menghapus!')
                          }
                      },
                      error: function(e) {
                          //   console.log(e)
                          alert("Something wrong!")
                      }
                  })
              }
          }
    </script>
    @stop