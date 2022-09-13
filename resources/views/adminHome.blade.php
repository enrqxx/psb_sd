@extends('layouts.mainBE')
@section('css')
    <style type="text/css">
        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .hidden {
            display: none;
        }

        .simpan {
            display: none;
        }
    </style>
@stop
@section('isi')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">

                    <h4 class="page-title">Dashboard Super Admin</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('pesan'))
                            <div class="col-sm-12">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
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
                        <h4 class="header-title mt-1 mb-3">{{ $title }}</h4>
                        {{-- <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            You are Siswa.
                        </div> --}}
                        <div class="col-md-6 col-xxl-3">
                            <!-- project card -->
                            <div class="card d-block">
                                <!-- project-thumbnail -->
                                <div class="card-body position-relative">
                                    <h4 class="mt-0">
                                        <a href="apps-projects-details.html" class="text-title">{{ $nama }}</a>
                                    </h4>

                                    <p class="text-muted font-13 mb-3">{{ $ket }}<a href="/inf_pendaftaran"
                                            class="fw-bold text-muted"> view more</a>
                                    </p>

                                    <!-- project detail-->
                                    <p class="mb-3">
                                        <span class="pe-2 text-nowrap">
                                            <i class="dripicons-user-group"></i>
                                            <b>
                                                @foreach ($jml as $j)
                                                    {{ $j->jumlah }}
                                                @endforeach
                                            </b> Pendaftar
                                        </span>
                                        <span class="text-nowrap">
                                            <i class=" dripicons-time-reverse"></i>

                                            <span id="omsetheading"
                                                class="badge badge-success-lighten hidden">Announced</span>

                                            <span id="omsetheading2" class="badge badge-warning-lighten hidden">To Be
                                                Announced</span>
                                            @if ($tampil == 1)
                                                <span id="tampil" class="badge badge-success-lighten ">Announced</span>
                                            @else
                                                <span id="tampil2" class="badge badge-warning-lighten ">To Be
                                                    Announced</span>
                                            @endif
                                        </span>
                                    </p>
                                    <div class="mt-2 mb-2"><input type="hidden" id="id_daftar" value="{{ $id }}"
                                            name="id_daftar" />
                                        @if ($status == 1)
                                            <input type="checkbox" id="switch3" checked data-switch="success"
                                                name="checked" />
                                            <label for="switch3" data-on-label="On" data-off-label="Off"></label>
                                        @else
                                            <input type="checkbox" id="switch0" data-switch="success" name="checked" />
                                            <label for="switch0" data-on-label="On" data-off-label="Off"></label>
                                        @endif
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

        </div>
        <!-- end row -->

    </div>
@stop
@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('input[name="checked"]').change(function() {
                var isChecked = $('input[name="checked"]').is(":checked") ? 1 : 0;
                let id_daftar = document.getElementById("id_daftar").value;
                // console.log(id_daftar)

                $.ajax({
                    url: '/activation',
                    method: "POST",
                    data: {
                        checked: isChecked,
                        id_daftar: id_daftar,

                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        // console.log(data)
                        if (data == 1) {
                            $('#tampil').addClass('hidden')
                            $('#tampil2').addClass('hidden')
                            $('#omsetheading2').removeClass('hidden')
                            $('#omsetheading').addClass('hidden')
                            alert(
                                "Berhasil Mengaktifkan! Silakan cek menu Informasi Pendaftaran."
                            )
                        } else {
                            $('#tampil').addClass('hidden')
                            $('#tampil2').addClass('hidden')
                            $('#omsetheading2').removeClass('hidden')
                            $('#omsetheading').addClass('hidden')
                            alert("Berhasil Menonaktifkan!")
                        }

                    }
                });
            });
        });
    </script>
@stop
