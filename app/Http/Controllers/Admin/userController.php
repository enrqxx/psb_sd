<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function user()
    {
        $data = [
            'title' => "Master Data User",
        ];
        return view('Admin.DataMaster.v_user', $data);
    }

    public function listUser()
    {
        $columns = [
            'id',
            'name',
            'email',
            'type',
            'password'
        ];
        $orderBy = $columns[request()->input("order.0.column")];
        $data = User::select([
            '*'
        ])->orderBy('id', "asc")->first();

        $recordsFiltered = $data->get()->count();

        if (request()->input("search.value")) {
            $data = $data->where(function ($query) {
                $query->whereRaw('LOWER(users.name) like ?', ['%' . strtolower(request()->input("search.value")) . '%'])
                    ->orWhereRaw('LOWER(users.email) like ?', ['%' . strtolower(request()->input("search.value")) . '%']);
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

    public function editUser(Request $request)
    {
        // dd(request()->all());
        if (empty(request()->get('password'))) {
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email'  => ['required', 'string', 'email', 'max:255'],
            ]);
            $update = [
                'name' => request()->get('name'),
                'email' => request()->get('email'),
                'type' => request()->get('type'),
            ];
            DB::table('users')->where('id', request()->get('id'))
                ->update($update);
        } else {
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email'  => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:8'],
            ]);
            $update = [
                'name' => request()->get('name'),
                'email' => request()->get('email'),
                'password' => Hash::make(request()->get('password')),
                'type' => request()->get('type'),
            ];
            DB::table('users')->where('id', request()->get('id'))
                ->update($update);
        }

        return response()->json(true);
    }

    public function tambahUser(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email'  => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        $item = [
            'name' => request()->get('name'),
            'email' => request()->get('email'),
            'password' => Hash::make(request()->get('password')),
            'type' => request()->get('type'),
        ];
        DB::table('users')->insert($item);
        return response()->json(true);
    }

    public function hapusUser()
    {
        $item = User::findOrFail(request()->input('id'));
        $item->delete();
        return response()->json(true);
        // dd($item);
    }
}
