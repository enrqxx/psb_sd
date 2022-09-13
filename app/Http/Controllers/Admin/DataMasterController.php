<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_datasiswa;
use App\Models\M_goldar;
use App\Models\M_jk;
use App\Models\M_pendaftaran;
use App\Models\M_pendidikan;
use App\Models\M_transportasi;
use Illuminate\Support\Facades\DB;

class DataMasterController extends Controller
{
    public function jenisKelamin()
    {
        $data = [
            'title' => "Jenis Kelamin",
        ];
        return view('Admin.DataMaster.v_jk', $data);
    }

    public function listJk()
    {
        $columns = [
            'id',
            'jenis_kelamin'
        ];
        $orderBy = $columns[request()->input("order.0.column")];
        $data = M_jk::select([
            '*'
        ])->orderBy('id', "asc");

        $recordsFiltered = $data->get()->count();

        if (request()->input("search.value")) {
            $data = $data->where(function ($query) {
                $query->whereRaw('LOWER(ref_jenis_kelamin.jenis_kelamin) like ?', ['%' . strtolower(request()->input("search.value")) . '%']);
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

    public function tambahJk(Request $request)
    {
        $this->validate($request, [
            'jenis_kelamin'  => ['required', 'unique:ref_jenis_kelamin'],
        ]);
        $jk = [
            'jenis_kelamin' => request()->get('jenis_kelamin')
        ];
        DB::table('ref_jenis_kelamin')->insert($jk);
        return response()->json(true);
    }

    public function editJk(Request $request)
    {
        $this->validate($request, [
            'jenis_kelamin'  => ['required', 'unique:ref_jenis_kelamin'],
        ]);
        DB::table('ref_jenis_kelamin')->where('id', request()->get('id'))
            ->update(request()->only(['jenis_kelamin']));
        return response()->json(true);
    }

    public function hapusJk()
    {
        $item = M_jk::findOrFail(request()->input('id'));
        $item->delete();
        return response()->json(true);
        // dd($item);
    }

    public function golDar()
    {
        $data = [
            'title' => "Golongan Darah",
        ];
        return view('Admin.DataMaster.v_goldar', $data);
    }

    public function listGoldar()
    {
        $columns = [
            'id_goldar',
            'goldar'
        ];
        $orderBy = $columns[request()->input("order.0.column")];
        $data = M_goldar::select([
            '*'
        ])->orderBy('id_goldar', "asc");

        $recordsFiltered = $data->get()->count();

        if (request()->input("search.value")) {
            $data = $data->where(function ($query) {
                $query->whereRaw('LOWER(ref_gol_darah.goldar) like ?', ['%' . strtolower(request()->input("search.value")) . '%']);
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

    public function tambahGoldar(Request $request)
    {
        $this->validate($request, [
            'goldar'  => ['required', 'min:2', 'unique:ref_gol_darah'],
        ]);
        $goldar = [
            'goldar' => request()->get('goldar')
        ];
        DB::table('ref_gol_darah')->insert($goldar);
        return response()->json(true);
    }

    public function editGoldar(Request $request)
    {
        $this->validate($request, [
            'goldar'  => ['required', 'min:2', 'unique:ref_gol_darah'],
        ]);
        DB::table('ref_gol_darah')->where('id_goldar', request()->get('id_goldar'))
            ->update(request()->only(['goldar']));
        return response()->json(true);
    }

    public function hapusGoldar()
    {
        $item = M_goldar::findOrFail(request()->input('id_goldar'));
        $item->delete();
        return response()->json(true);
        // dd($item);
    }

    public function trans()
    {
        $data = [
            'title' => "Jenis Transportasi",
        ];
        return view('Admin.DataMaster.v_transportasi', $data);
    }

    public function listTrans()
    {
        $columns = [
            'id_jenis_transportasi',
            'nama_transportasi'
        ];
        $orderBy = $columns[request()->input("order.0.column")];
        $data = M_transportasi::select([
            '*'
        ])->orderBy('id_jenis_transportasi', "asc");

        $recordsFiltered = $data->get()->count();

        if (request()->input("search.value")) {
            $data = $data->where(function ($query) {
                $query->whereRaw('LOWER(ref_jenis_transportasi.nama_transportasi) like ?', ['%' . strtolower(request()->input("search.value")) . '%']);
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

    public function tambahTrans(Request $request)
    {
        $this->validate($request, [
            'nama_transportasi'  => ['required', 'min:2', 'unique:ref_jenis_transportasi'],
        ]);
        $trans = [
            'nama_transportasi' => request()->get('nama_transportasi')
        ];
        DB::table('ref_jenis_transportasi')->insert($trans);
        return response()->json(true);
    }

    public function editTrans(Request $request)
    {
        $this->validate($request, [
            'nama_transportasi'  => ['required', 'min:2', 'unique:ref_jenis_transportasi'],
        ]);
        DB::table('ref_jenis_transportasi')->where('id_jenis_transportasi', request()->get('id_jenis_transportasi'))
            ->update(request()->only(['nama_transportasi']));
        return response()->json(true);
    }

    public function hapusTrans()
    {
        $item = M_transportasi::findOrFail(request()->input('id_jenis_transportasi'));
        $item->delete();
        return response()->json(true);
        // dd($item);
    }

    public function pend()
    {
        $data = [
            'title' => "Pendidikan",
        ];
        return view('Admin.DataMaster.v_pend', $data);
    }

    public function listPend()
    {
        $columns = [
            'id',
            'nama_pendidikan'
        ];
        $orderBy = $columns[request()->input("order.0.column")];
        $data = M_pendidikan::select([
            '*'
        ])->orderBy('id', "asc");

        $recordsFiltered = $data->get()->count();

        if (request()->input("search.value")) {
            $data = $data->where(function ($query) {
                $query->whereRaw('LOWER(ref_pendidikan.nama_pendidikan) like ?', ['%' . strtolower(request()->input("search.value")) . '%']);
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

    public function tambahPend(Request $request)
    {
        $this->validate($request, [
            'nama_pendidikan'  => ['required', 'unique:ref_pendidikan'],
        ]);
        $trans = [
            'nama_pendidikan' => request()->get('nama_pendidikan')
        ];
        DB::table('ref_pendidikan')->insert($trans);
        return response()->json(true);
    }

    public function editPend(Request $request)
    {
        $this->validate($request, [
            'nama_pendidikan'  => ['required', 'unique:ref_pendidikan'],
        ]);
        DB::table('ref_pendidikan')->where('id', request()->get('id'))
            ->update(request()->only(['nama_pendidikan']));
        return response()->json(true);
    }

    public function hapusPend()
    {
        $item = M_pendidikan::findOrFail(request()->input('id'));
        $item->delete();
        return response()->json(true);
        // dd($item);
    }

    public function infPendf()
    {
        $data = [
            'title' => "Informasi Pendaftaran",
        ];
        return view('Admin.DataMaster.v_infPendf', $data);
    }

    public function listPendaftaran()
    {
        $columns = [
            'id_daftar',
            'nama',
            'ket',
            'active',
            'tampil'
        ];
        $orderBy = $columns[request()->input("order.0.column")];
        $data = M_pendaftaran::select([
            '*'
        ])->orderBy('id_daftar', "asc")->first();

        $recordsFiltered = $data->get()->count();

        if (request()->input("search.value")) {
            $data = $data->where(function ($query) {
                $query->whereRaw('LOWER(tbl_daftar_aktivasi.nama) like ?', ['%' . strtolower(request()->input("search.value")) . '%']);
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

    public function editPendaftaran(Request $request)
    {
        $this->validate($request, [
            'nama'  => ['required'],
            'ket'   => 'required'
        ]);
        $update = [
            'nama' => request()->get('nama'),
            'ket'   => Request()->get('ket')
        ];
        DB::table('tbl_daftar_aktivasi')->where('id_daftar', request()->get('id_daftar'))
            ->update($update);
        return response()->json(true);
    }

    public function tampil(Request $request)
    {
        $penelitian = M_pendaftaran::find($request->input('id_daftar'));
        $penelitian->tampil = $request->tampil;
        $penelitian->save();
        return response()->json(true);
    }
}
