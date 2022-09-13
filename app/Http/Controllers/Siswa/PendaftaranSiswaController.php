<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\M_jk;
use App\Models\M_datasiswa;
use App\Models\M_alamatsiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\M_pendaftaran;

class PendaftaranSiswaController extends Controller
{
    public function index()
    {
        $daftar = M_pendaftaran::getDaftar();
        $data = [
            'title' => 'Daftar Siswa',
            'jk' => M_jk::all(),
            'pendidikan' => M_jk::getPend(),
            'trans' => M_jk::getTrans(),
            'goldar' => M_jk::getGoldar(),
            "status" => $daftar->active,
            'tampil' => $daftar->tampil,
            'nama' => $daftar->nama,
            'ket' => $daftar->ket,
        ];
        return view('frontend/daftar', $data);
    }

    public function daftarNonaktif()
    {
        $daftar = M_pendaftaran::getDaftar();
        $data = [
            'title' => 'Daftar Siswa',
            "status" => $daftar->active,
            'tampil' => $daftar->tampil,
        ];
        return view('frontend/daftar_nonaktif', $data);
    }

    public function addData(Request $request)
    {
        // dd(request()->all());
        $this->validate($request, [
            'nama_lengkap' => 'required',
            'tanggal_lahir'  => 'required',
            'tempat_lahir'  => 'required',
            'agama'  => 'required',
            'nik'  => ['required', 'min:16', 'unique:datasiswa'],
            'anak_ke'  => 'required',
            'bahasa_sehari'  => 'required',
            'kewarganegaraan'  => 'required',
            'jk'  => 'required',
            'alamat_tempat_tinggal'  => 'required',
            'rt'  => 'required',
            'rw'  => 'required',
            'dusun'  => 'required',
            'desa'  => 'required',
            'kecamatan'  => 'required',
            'kab'  => 'required',
            'prov'  => 'required',
            'kode_pos'  => 'required',
            'nama_ayah'  => 'required',
            'tempat_lahir_ayah'  => 'required',
            'tanggal_lahir_ayah'  => 'required',
            'pekerjaan_ayah'  => 'required',
            'no_telp_ayah'  => 'required',
            'instansi_ayah'  => 'required',
            'alamat_kerja_ayah'  => 'required',
            'penghasilan_ayah'  => 'required',
            'id_pendidikan_ayah'  => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'no_tlp_ibu' => 'required',
            'instansi_kerja_ibu' => 'required',
            'alamat_kerja_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'id_pendidikan_ibu' => 'required',
            'no_wa' => 'required',
            'email_ortu' => 'required',
            'jarak' => 'required',
            'id_jenis_transport' => 'required',
            'hobi_anak' => 'required',
            'ket_tinggal' => 'required',
            'anak_ke' => 'required',
            'jml_saudara' => 'required',
            'brp_saudara' => 'required',
            'id_goldar' => 'required',
            'bb' => 'required',
            'tb' => 'required',
            'riwayat_penyakit' => 'required',
            'kelainan_jasmani' => 'required',
            'alergi' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        //Membuat upload Foto dan rapor
        $file_foto = $request->file('foto');
        //Membuat penamaan dari waktu dan nama original file
        $nama_file_foto = time() . "_" . $file_foto->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload_foto = 'dok_foto_siswa';
        $file_foto->move($tujuan_upload_foto, $nama_file_foto);

        $datasiswa = [
            'nama_lengkap' => Request()->nama_lengkap,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'tempat_lahir' => Request()->tempat_lahir,
            'agama' => Request()->agama,
            'nik' => Request()->nik,
            'anak_ke' => Request()->anak_ke,
            'bahasa_sehari' => Request()->bahasa_sehari,
            'kewarganegaraan' => Request()->kewarganegaraan,
            'jk' => Request()->jk,
            'foto' => $nama_file_foto,
        ];
        $alamat_siswa = [
            'alamat_tempat_tinggal' => Request()->alamat_tempat_tinggal,
            'nik_calon_siswa' => Request()->nik,
            'rt' => Request()->rt,
            'rw' => Request()->rw,
            'dusun' => Request()->dusun,
            'desa' => Request()->desa,
            'kecamatan' => Request()->kecamatan,
            'kab' => Request()->kab,
            'prov' => Request()->prov,
            'kode_pos' => Request()->kode_pos,
        ];
        $data_ayah = [
            'nama_ayah' => Request()->nama_ayah,
            'tempat_lahir_ayah' => Request()->tempat_lahir_ayah,
            'tanggal_lahir_ayah' => Request()->tanggal_lahir_ayah,
            'pekerjaan_ayah' => Request()->pekerjaan_ayah,
            'no_telp_ayah' => Request()->no_telp_ayah,
            'instansi_ayah' => Request()->instansi_ayah,
            'alamat_kerja_ayah' => Request()->alamat_kerja_ayah,
            'penghasilan_ayah' => Request()->penghasilan_ayah,
            'id_pendidikan_ayah' => Request()->id_pendidikan_ayah,
            'nik_calon_siswa' => Request()->nik,
        ];
        $data_ibu = [
            'nama_ibu' => Request()->nama_ibu,
            'tempat_lahir_ibu' => Request()->tempat_lahir_ibu,
            'tanggal_lahir_ibu' => Request()->tanggal_lahir_ibu,
            'pekerjaan_ibu' => Request()->pekerjaan_ibu,
            'no_tlp_ibu' => Request()->no_tlp_ibu,
            'instansi_kerja_ibu' => Request()->instansi_kerja_ibu,
            'alamat_kerja_ibu' => Request()->alamat_kerja_ibu,
            'penghasilan_ibu' => Request()->penghasilan_ibu,
            'id_pendidikan_ibu' => Request()->id_pendidikan_ibu,
            'nik_calon_siswa' => Request()->nik,
        ];
        $data_wali = [
            'nama_wali_murid' => Request()->nama_wali_murid,
            'tempat_lahir_wali' => Request()->tempat_lahir_wali,
            'tgl_lahir_wali' => Request()->tgl_lahir_wali,
            'pekerjaan_wali' => Request()->pekerjaan_wali,
            'no_tlp_wali' => Request()->no_tlp_wali,
            'instansi_kerja_wali' => Request()->instansi_kerja_wali,
            'alamat_kerja_wali' => Request()->alamat_kerja_wali,
            'penghasilan_wali' => Request()->penghasilan_wali,
            'id_pendidikan_wali' => Request()->id_pendidikan_wali,
            'nik_calon_siswa' => Request()->nik,
        ];
        $kontak = [
            'no_wa' => Request()->no_wa,
            'email_ortu' => Request()->email_ortu,
            'jarak' => Request()->jarak,
            'id_jenis_transport' => Request()->id_jenis_transport,
            'hobi_anak' => Request()->hobi_anak,
            'nik_calon_siswa' => Request()->nik,
        ];
        $informasi = [
            'ket_tinggal' => Request()->ket_tinggal,
            'anak_ke' => Request()->anak_ke_inf,
            'jml_saudara' => Request()->jml_saudara,
            'brp_saudara' => Request()->brp_saudara,
            'nik_calon_siswa' => Request()->nik,
        ];
        $jasmani = [
            'id_goldar' => Request()->id_goldar,
            'bb' => Request()->bb,
            'tb' => Request()->tb,
            'riwayat_penyakit' => Request()->riwayat_penyakit,
            'kelainan_jasmani' => Request()->kelainan_jasmani,
            'alergi' => Request()->alergi,
            'nik_calon_siswa' => Request()->nik,
        ];

        DB::transaction(function () use ($datasiswa, $alamat_siswa, $data_ayah, $data_ibu, $request, $data_wali, $informasi, $jasmani, $kontak): void {
            if (empty($request->get('nama_wali_murid'))) {
                M_datasiswa::create($datasiswa);
                M_alamatsiswa::create($alamat_siswa);
                DB::table('data_ayah')->insert($data_ayah);
                DB::table('data_ibu')->insert($data_ibu);
                DB::table('ifrmdidikbaru')->insert($informasi);
                DB::table('jasmani_saba')->insert($jasmani);
                DB::table('kontak_orang_tua_wali')->insert($kontak);
            } else {
                M_datasiswa::create($datasiswa);
                M_alamatsiswa::create($alamat_siswa);
                DB::table('data_ayah')->insert($data_ayah);
                DB::table('data_ibu')->insert($data_ibu);
                DB::table('wali_murid')->insert($data_wali);
                DB::table('ifrmdidikbaru')->insert($informasi);
                DB::table('jasmani_saba')->insert($jasmani);
                DB::table('kontak_orang_tua_wali')->insert($kontak);
            }
        });
        return redirect('/daftarsiswa')->with('pesan', 'Data Luaran Berhasil Diupdate.');
    }
}
