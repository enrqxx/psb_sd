<?php

use App\Http\Controllers\Admin\DataMasterController;
use App\Http\Controllers\Admin\masterDataController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\depanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Siswa\PendaftaranSiswaController;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [depanController::class, 'halamanDepan']);
Route::get('/tentangsekolah', [depanController::class, 'tentangSekolah']);
Route::get('/kontak', [depanController::class, 'kontak']);
Route::get('/tutorial', [depanController::class, 'tutorial']);
Route::get('/sKeterima', [depanController::class, 'sKeterima']);
Route::get('/detail', [depanController::class, 'detail']);

// GOOGLE MAPS
Route::get('google-autocomplete', [GoogleController::class, 'index']);

// Pendaftaran
Route::get('/daftarsiswa', [PendaftaranSiswaController::class, 'index']);
Route::get('/daftar-nonaktif', [PendaftaranSiswaController::class, 'daftarNonaktif']);
Route::post('/add_siswa', [PendaftaranSiswaController::class, 'addData']);

Auth::routes([
    'register' => false,
]);

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    /*-------------------------
    MasterData Pilihan
    ----------------------------*/
    // Jenis Kelamin
    Route::get('/jeniskelamin', [DataMasterController::class, 'jenisKelamin']);
    Route::post('/list_jk', [DataMasterController::class, 'listJk']);
    Route::post('/tambah_jk', [DataMasterController::class, 'tambahJk']);
    Route::post('/edit_jk', [DataMasterController::class, 'editJk']);
    Route::post('/delete_jk', [DataMasterController::class, 'hapusJk']);

    // Golongan Darah
    Route::get('/goldar', [DataMasterController::class, 'golDar']);
    Route::post('/list_goldar', [DataMasterController::class, 'listGoldar']);
    Route::post('/tambah_goldar', [DataMasterController::class, 'tambahGoldar']);
    Route::post('/edit_goldar', [DataMasterController::class, 'editGoldar']);
    Route::post('/delete_goldar', [DataMasterController::class, 'hapusGoldar']);

    Route::get('/jenis_transport', [DataMasterController::class, 'trans']);
    Route::post('/list_trans', [DataMasterController::class, 'listTrans']);
    Route::post('/tambah_transportasi', [DataMasterController::class, 'tambahTrans']);
    Route::post('/edit_transportasi', [DataMasterController::class, 'editTrans']);
    Route::post('/delete_transportasi', [DataMasterController::class, 'hapusTrans']);

    Route::get('/pendidikan', [DataMasterController::class, 'pend']);
    Route::post('/list_pend', [DataMasterController::class, 'listPend']);
    Route::post('/tambah_pendidikan', [DataMasterController::class, 'tambahPend']);
    Route::post('/edit_pendidikan', [DataMasterController::class, 'editPend']);
    Route::post('/delete_pendidikan', [DataMasterController::class, 'hapusPend']);

    Route::get('/inf_pendaftaran', [DataMasterController::class, 'infPendf']);
    Route::post('/list_pendaftaran', [DataMasterController::class, 'listPendaftaran']);
    Route::post('/edit_pendaftaran', [DataMasterController::class, 'editPendaftaran']);
    Route::post('/pendaftaran/tampil', [DataMasterController::class, 'tampil']);

    Route::get('/users', [userController::class, 'user']);
    Route::post('/list_user', [userController::class, 'listUser']);
    Route::post('/tambah_user', [userController::class, 'tambahUser']);
    Route::post('/edit_user', [userController::class, 'editUser']);
    Route::post('/delete_user', [userController::class, 'hapusUser']);

    Route::get('/daftar_pendaftar', [masterDataController::class, 'index']);
    Route::post('/list_calon', [masterDataController::class, 'dataCalon']);
    Route::get('/detailSiswa/{id_data_siswa}', [masterDataController::class, 'detailSiswa']);
    Route::post('/activation', [masterDataController::class, 'aktivasi']);

    // Menerima atau Menolak Siswa
    Route::post('/status_terima', [masterDataController::class, 'status']);

    // Update Data 
    Route::post('/update_ortu', [masterDataController::class, 'updateOrtu']);
    Route::post('/update_wali', [masterDataController::class, 'updateWali']);
    Route::post('/update_pribadi', [masterDataController::class, 'updatePribadi']);

    //Delete data siswa
    Route::get('/delete_datasiswa', [masterDataController::class, 'deleteData']);

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
