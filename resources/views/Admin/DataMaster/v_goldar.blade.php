 @extends('layouts.mainBE')
 @section('css')
     <style type="text/css">
         hr {
             margin-top: 1rem;
             margin-bottom: 1rem;
             border: 0;
             border-top: 1px solid_goldar rgba(0, 0, 0, 0.1);
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
             <div class="col-md-12 ">
                 <button class="btn btn-success mb-2" onClick="tambahData()" id="tambah-SKIM"><i
                         class="mdi mdi-plus-circle-outline"></i>
                     Tambah Data</button>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-body">
                         <table id="mytable" class="table dt-responsive nowrap scroll-vertical scroll-horizontal">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Golongan Darah</th>
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
     <div id="tambah-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="success-header-modalLabel"
         aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header modal-colored-header bg-success">
                     <h4 class="modal-title" id="success-header-modalLabel">Tambah Golongan Darah</h4>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                 </div>
                 <form id="form-tambah" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="modal-body">
                         <label for="inputCity" class="form-label">Golongan Darah</label>
                         <input type="text" class="form-control" id="inputCity" name="goldar" required>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-success">Simpan</button>
                     </div>
                 </form>
             </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
     </div><!-- /.modal -->
     <div id="edit-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="success-header-modalLabel"
         aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header modal-colored-header bg-success">
                     <h4 class="modal-title" id="success-header-modalLabel">Edit Golongan Darah</h4>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                 </div>
                 <form id="form-edit" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="modal-body">
                         <label for="inputCity" class="form-label">Golongan Darah</label>
                         <input type="hidden" class="form-control" id="id" name="id_goldar">
                         <input type="text" class="form-control" id="inputCity" name="goldar" required>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-success">Simpan</button>
                     </div>
                 </form>
             </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
     </div><!-- /.modal -->
     <!-- Success Alert Modal -->
     <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-sm">
             <div class="modal-content modal-filled bg-success">
                 <div class="modal-body p-4">
                     <div class="text-center">
                         <i class="dripicons-checkmark h1"></i>
                         <h4 class="mt-2">Success!</h4>
                         <p class="mt-3">Data Tersimpan.</p>
                         <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                     </div>
                 </div>
             </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
     </div><!-- /.modal -->
     <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-sm">
             <div class="modal-content modal-filled bg-danger">
                 <div class="modal-body p-4">
                     <div class="text-center">
                         <i class="dripicons-wrong h1"></i>
                         <h4 class="mt-2">Oh snap!</h4>
                         <p class="mt-3">Something Wrong :(</p>
                         <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                     </div>
                 </div>
             </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
     </div><!-- /.modal -->
 @stop
 @section('js')
     <script type="text/javascript">
         let list_goldar = [];
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
                 url: "{{ url('list_goldar') }}",
                 type: "POST",
                 data: function(d) {
                     d._token = "{{ csrf_token() }}"
                 }
             },
             "columnDefs": [{
                 "targets": 0,
                 "data": "id_goldar",
                 "render": function(data, type, row, meta) {
                     list_goldar[row.id_goldar] = row;
                     return meta.row + meta.settings._iDisplayStart + 1;
                     // console.log(list_siswa)
                 }
             }, {
                 "targets": 1,
                 "data": "goldar",
                 "render": function(data, type, row, meta) {
                     return data;

                 }
             }, {
                 "targets": 2,
                 "data": "id_goldar",
                 "render": function(data, type, row, meta) {
                     return `
                              <a class="action-icon" onclick="edit(${row.id_goldar})"><i class="mdi mdi-square-edit-outline"></i></a>
                              <a class="action-icon" onclick="hapus(${row.id_goldar})"><i class="mdi mdi-trash-can"></i></a>
                                `;
                 }
             }]
         });

         function tambahData() {
             $('#tambah-data').modal('show');
         }

         function edit(id_goldar) {
             const goldar = list_goldar[id_goldar]
             $('#edit-data').modal('show');
             $("#edit-data [name='id_goldar']").val(id_goldar)
             $("#edit-data [name='goldar']").val(goldar.goldar)
         }

         $('#form-tambah').on('submit', function(event) {
             event.preventDefault() //jangan disubmit
             tambahgoldar()
         });

         $('#form-edit').on('submit', function(event) {
             event.preventDefault() //jangan disubmit
             editgoldar()
         });

         function tambahgoldar() {
             let form = $('#form-tambah');
             const url = "{{ url('tambah_goldar') }}";
             $.ajax({
                 url,
                 method: "POST",
                 data: form.serialize(),
                 success: function(response) {
                     if (response === true) {
                         $('#tambah-data').modal('hide');
                         table.ajax.reload(null, false)
                         $('#success-alert-modal').modal('show')
                     }
                 },
                 error: function(e) {
                     $('#danger-alert-modal').modal('show')
                 }
             })
         }

         function editgoldar() {
             let form = $('#form-edit');
             const url = "{{ url('edit_goldar') }}";
             $.ajax({
                 url,
                 method: "POST",
                 data: form.serialize(),
                 success: function(response) {
                     if (response === true) {
                         $('#edit-data').modal('hide');
                         table.ajax.reload(null, false)
                         $('#success-alert-modal').modal('show')
                     }
                 },
                 error: function(e) {
                     $('#danger-alert-modal').modal('show')
                 }
             })
         }

         function hapus(id_goldar) {
             const c = confirm("Hapus data?")
             if (c === true) {
                 $.ajax({
                     url: "{{ url('delete_goldar') }}?id_goldar=" + id_goldar,
                     method: "POST",
                     data: {
                         _token: '{{ csrf_token() }}'
                     },
                     success: function(response) {
                         if (response === true) {
                             $('#tambah-data').modal('hide');
                             table.ajax.reload(null, false)
                             $('#success-alert-modal').modal('show')
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
