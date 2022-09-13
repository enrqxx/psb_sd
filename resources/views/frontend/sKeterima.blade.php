@extends('layouts.main')
@if ($tampil == 1)
    @section('container')
        @vite(['public/scss/style.scss']);
        <div class="tbl-ppdb">
            <div class="container-tbl">
                <h1>Daftar Siswa Keterima/Tidak di SDIT An-Nahar</h1>
                <p>Perhatikan Nama Siswa/Siswa anda jika tidak ada nama yang dibawah ini segera kontak admin</p>
            </div>
            <table id="tableclient">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Kelas</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1 @endphp
                    @foreach ($all as $a)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $a->nama_lengkap }}</td>
                            <td><img id="ttd" src="{{ url('') }}/dok_foto_siswa/{{ $a->foto }}" width="104px"
                                    height="118px"></td>
                            <td>
                                <p>{{ $a->diterima_di }}</p>
                            </td>
                            <td>
                                @if ($a->status == 1)
                                    <p class="status status-success">Keterima</p>
                                @else
                                    <p class="status status-unsuccess">Tertolak</p>
                                @endif
                            </td>
                            <td><a href="/detail">Profile</a></td>
                        </tr>
                        @php $no++ ; @endphp
                    @endforeach

                </tbody>
            </table>
        </div>
        {{-- <script>
            $(function() {
                $('#tableclient').DataTable({
                    processing: true,
                    serverSide: false
                });
            });
        </script> --}}
    @stop
@else
    @section('container')
        @vite(['public/scss/style.scss']);
        <div class="tbl-ppdb">
            <div class="container-tbl">
                <h1>Daftar Siswa Keterima/Tidak di SDIT An-Nahar</h1>
                <p>Whops!</p>
            </div>
        </div>
    @stop
@endif
