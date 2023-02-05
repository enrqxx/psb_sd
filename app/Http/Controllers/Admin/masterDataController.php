<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_datasiswa;
use App\Models\M_jk;
use Illuminate\Support\Facades\DB;

class masterDataController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Data Pendaftar",
            'pend'  => M_datasiswa::pendidikan(),
            'jk' => M_jk::all(),
            'trans' => M_jk::getTrans(),
            'goldar' => M_jk::getGoldar(),
        ];
        return view('Admin/v_masterData', $data);
    }

    public function dataCalon()
    {
        $columns = [
            'id_data_siswa',
            'nik',
            'nama_lengkap',
            'jk',
            'tempat_lahir',
            'tanggal_lahir',
            'agama',
            'kewarganegaraan',
            'diterima_di',
            'anak_ke',
            'bahasa_sehari',
            'foto'
        ];
        $orderBy = $columns[request()->input("order.0.column")];
        $data = M_datasiswa::select([
            '*'
        ])
            ->join('alamat_siswa', 'alamat_siswa.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('data_ayah', 'data_ayah.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('data_ibu', 'data_ibu.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('ifrmdidikbaru', 'ifrmdidikbaru.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('jasmani_saba', 'jasmani_saba.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('kontak_orang_tua_wali', 'kontak_orang_tua_wali.nik_calon_siswa', '=', 'datasiswa.nik')
            ->leftjoin('wali_murid', 'wali_murid.nik_calon_siswa', '=', 'datasiswa.nik')
            ->orderBy('id_data_siswa', "asc");

        $recordsFiltered = $data->get()->count();

        if (request()->input("search.value")) {
            $data = $data->where(function ($query) {
                $query->whereRaw('LOWER(datasiswa.nik) like ?', ['%' . strtolower(request()->input("search.value")) . '%'])
                    ->orWhereRaw('LOWER(datasiswa.nama_lengkap) like ?', ['%' . strtolower(request()->input("search.value")) . '%']);
            });
        }

        $data = $data
            ->skip(request()->input('start'))
            ->take(request()->input('length'))
            ->orderBy($orderBy, request()->input("order.0.dir"))
            ->get();
        $recordsTotal = $data->count();

        return response()->json([
            'draw' => request()->input('draw'),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'all_request' => request()->all()
        ]);
    }

    public function aktivasi()
    {
        // dd(request()->get());
        $checked = request()->get('checked');
        $item = DB::table('tbl_daftar_aktivasi')
            ->where('id_daftar', request()->get('id_daftar'))->update([
                'active' => request()->get('checked'),

            ]);
        return response()->json($checked);
    }

    // Status Terima Cadangan Tolak
    public function status(Request $request)
    {
        // dd(request()->all());
        $siswa = M_datasiswa::find($request->input('id_data_siswa'));
        $siswa->status = $request->status;
        $siswa->diterima_di = $request->diterima_di;
        $siswa->save();
        return response()->json(true);
    }

    public function updateOrtu()
    {
        // dd(request()->all());
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

        DB::transaction(function () use ($data_ayah, $data_ibu): void {
            DB::table('data_ayah')->where('nik_calon_siswa', request()->get('nik'))->update($data_ayah);
            DB::table('data_ibu')->where('nik_calon_siswa', request()->get('nik'))->update($data_ibu);
        });
        return response()->json(true);
    }

    public function deleteData(Request $request)
    {
        DB::transaction(function () use ($request): void {
            DB::table('datasiswa')->where('nik', $request->nik)->delete();
            DB::table('data_ayah')->where('nik_calon_siswa', $request->nik)->delete();
            DB::table('data_ibu')->where('nik_calon_siswa', request()->get('nik'))->delete();
            DB::table('wali_murid')->where('nik_calon_siswa', request()->get('nik'))->delete();
            DB::table('ifrmdidikbaru')->where('nik_calon_siswa', request()->get('nik'))->delete();
            DB::table('jasmani_saba')->where('nik_calon_siswa', request()->get('nik'))->delete();
            DB::table('kontak_orang_tua_wali')->where('nik_calon_siswa', request()->get('nik'))->delete();
            DB::table('alamat_siswa')->where('nik_calon_siswa', request()->get('nik'))->delete();
        });
        return response()->json(true);
    }
    public function detailSiswa(Request $request, $id_data_siswa)
    {
        $data = [
            'title' => "Detail Data Pendaftar",
            'pend'  => M_datasiswa::pendidikan(),
            'jk' => M_jk::all(),
            'trans' => M_jk::getTrans(),
            'goldar' => M_jk::getGoldar(),
            'detail' => M_datasiswa::detail($id_data_siswa)
        ];
        return view('Admin.v_detailSiswa', $data);
        // dd($data['detail']);
    }
    public function updateWali(Request $request)
    {
        // dd(request()->all());
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
        DB::transaction(
            function () use ($request, $data_wali): void {
                DB::table('wali_murid')->where('nik_calon_siswa', $request->get('nik'))
                    ->delete();
                DB::table('wali_murid')->insert($data_wali);
            }
        );
        return response()->json(true);
    }

    public function updatePribadi(Request $request)
    {

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
            'anak_ke' => Request()->anak_ke,
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

        //Membuat upload Foto dan rapor
        $file_foto = $request->file('foto');
        //Membuat penamaan dari waktu dan nama original file
        $nama_file_foto = time() . "_" . $file_foto->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload_foto = 'dok_foto_siswa';
        $file_foto->move($tujuan_upload_foto, $nama_file_foto);
        $datasiswa_foto = [
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
        DB::transaction(function () use ($datasiswa_foto, $kontak, $informasi, $jasmani, $request): void {
            DB::table('datasiswa')->where('nik', $request->get('nik'))->update($datasiswa_foto);
            DB::table('ifrmdidikbaru')->where('nik_calon_siswa', $request->get('nik'))->update($informasi);
            DB::table('jasmani_saba')->where('nik_calon_siswa', $request->get('nik'))->update($jasmani);
            DB::table('kontak_orang_tua_wali')->where('nik_calon_siswa', $request->get('nik'))->update($kontak);
        });

        return redirect('/daftar_pendaftar')->with('pesan', 'Data Siswa Berhasil Diupdate.');
    }
}
