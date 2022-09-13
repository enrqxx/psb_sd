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

         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-body">
                         <table id="mytable" class="table dt-responsive">
                             <thead>
                                 <tr>
                                     <th>Judul</th>
                                     <th>Keterangan</th>
                                     <th>Aktivasi</th>
                                     <th>Status Pengumuman</th>
                                     <th>Aksi</th>
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
     <div id="edit-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="success-header-modalLabel"
         aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header modal-colored-header bg-success">
                     <h4 class="modal-title" id="success-header-modalLabel">Edit Informasi Pendidkan</h4>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                 </div>
                 <form id="form-edit" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="modal-body">
                         <div class="fields">
                             <div class="input-field">
                                 <label for="inputCity" class="form-label">Informasi Pendidkan</label>
                                 <input type="hidden" class="form-control" id="id" name="id_daftar">
                                 <input type="text" class="form-control" id="inputCity" name="nama" required>
                             </div>
                             <div class="input-field">
                                 <label for="inputCity" class="form-label">Keterangan</label>
                                 <textarea class="form-control" name="ket" id="ket" placeholder="Alamat Tempat Tinggal..." rows="3"
                                     required>{{ old('ket') }}</textarea>
                             </div>
                         </div>
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
         let list_pendaftaran = [];
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
                 url: "{{ url('list_pendaftaran') }}",
                 type: "POST",
                 data: function(d) {
                     d._token = "{{ csrf_token() }}"
                 }
             },
             "columnDefs": [{
                 "targets": 0,
                 "data": "nama",
                 "render": function(data, type, row, meta) {
                     list_pendaftaran[row.id_daftar] = row;
                     return data;
                     // console.log(list_siswa)
                 }
             }, {
                 "targets": 1,
                 "data": "ket",
                 "render": function(data, type, row, meta) {
                     return data;

                 }
             }, {
                 "targets": 2,
                 "data": "active",
                 "render": function(data, type, row, meta) {
                     var tampilan = ``;
                     if (data == 1) {
                         tampilan += `<span class="badge badge-success-lighten ">Aktif</span>`;
                     } else {
                         tampilan += `<span class="badge badge-warning-lighten ">Nonaktif</span>`;
                     }
                     return tampilan;

                 }
             }, {
                 "targets": 3,
                 "data": "tampil",
                 "render": function(data, type, row, meta) {
                     var tampilan = ``;

                     if (data == 1) {
                         tampilan += ` <input type="checkbox" id="switch3" checked data-switch="success"
                                                name="checked" onclick="toggleStatus('${row.id_daftar}')"/>
                                            <label for="switch3" data-on-label="On" data-off-label="Off"></label>`;
                     } else {
                         tampilan += `<input type="checkbox" id="switch0" data-switch="success" name="checked" onclick="toggleStatus('${row.id_daftar}')"/>
                                            <label for="switch0" data-on-label="On" data-off-label="Off"></label>`;
                     }


                     return tampilan;
                 }
             }, {
                 "targets": 4,
                 "data": "id_daftar",
                 "render": function(data, type, row, meta) {
                     return `<a class="action-icon" onclick="edit(${row.id_daftar})"><i class="mdi mdi-square-edit-outline"></i></a>`;
                 }
             }]
         });


         function edit(id_daftar) {
             const pendaftaran = list_pendaftaran[id_daftar]
             $('#edit-data').modal('show');
             $("#edit-data [name='id_daftar']").val(id_daftar)
             $("#edit-data [name='nama']").val(pendaftaran.nama)
             $("#edit-data [name='ket']").val(pendaftaran.ket)
         }

         $('#form-edit').on('submit', function(event) {
             event.preventDefault() //jangan disubmit
             editnama()
         });

         function editnama() {
             let form = $('#form-edit');
             const url = "{{ url('edit_pendaftaran') }}";
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

         function toggleStatus(id_daftar) {

             const _c = confirm("Apakah Anda yakin?")
             if (_c === true) {
                 let pendaftaran = list_pendaftaran[id_daftar]
                 let status_update = ''
                 if (pendaftaran.tampil == 1) {
                     status_update = 0
                 } else {
                     status_update = 1
                 }

                 $.ajax({
                     url: '{{ url('') }}/pendaftaran/tampil',
                     method: 'POST',
                     data: {
                         id_daftar: id_daftar,
                         tampil: status_update,
                         _token: '{{ csrf_token() }}'
                     },
                     success: function(res) {
                         if (res === true) {
                             table.ajax.reload(null, false)
                             alert('Berhasil mengubah status!')
                         }
                     }
                 })
             }
         };
     </script>
 @stop
