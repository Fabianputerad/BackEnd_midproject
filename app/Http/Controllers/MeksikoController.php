<?php

namespace App\Http\Controllers;

use App\Http\Requests\LibraryRequest;
use App\Models\Meksiko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeksikoController extends Controller
{
    public function add(){
        return view('add');
    }

    public function view(){
        $karyawan2 = Karyawan::all();
        return view('view', ['karyawan2' => $karyawan2]);
    }

    public function deleteKaryawan($id){
        Karyawan::destroy($id);

        return redirect(route('addKaryawan'));
    }

    public function addKaryawan(Request $request){

        $request->validate([
            'Nama' => 'required|string|min:5|max:20',
            'Umur' => 'required|int|before:-20 years',
            'Alamat' => 'required|string|min:10|max:40',
            'Nomor' => 'required|numeric|min:9|max:12'
        ]);

        Library::create([
            'Nama' => $request->Nama,
            'Umur' => $request->Umur,
            'Alamat' => $request->Alamat,
            'Nomor' => $request->Nomor
        ]);

        return redirect(route('add'));
    }

    public function updateKaryawan($id){
        $library = Library::find($id);
        return view('update', ['library' => $library]);
    }

    public function update(Request $request, $id){
        $karyawan2 = Karyawan::find($id);

        $request->validate([
            'Nama' => 'required|string|min:5|max:20',
            'Umur' => 'required|int|before:-20 years',
            'Alamat' => 'required|string|min:10|max:40',
            'Nomor' => 'required|numeric|min:9|max:12'
         ]);

        $file = $request->file('file'); /*menyimpan data file yang diupload ke variabel $file */

	    $nama_file1 = time()."_".$file->getClientOriginalName();

	    $tujuan_upload = 'data_file'; /*isi dengan nama folder tempat kemana file diupload */
	    $file->move($tujuan_upload,$nama_file1);

        $library -> update([
            'Nama' => $request->Nama,
            'Umur' => $request->Umur,
            'Alamat' => $request->Alamat,
            'Nomor' => $request->Nomor
        ]);


        return redirect(route('view'));
    }

    public function delete($id){
        Library::destroy($id);
        return redirect(route('view'));
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $karyawan2 = DB::table('Karyawan')
        ->where('title','like',"%".$cari."%")->paginate();

    return view('view',['Karyawan' => $karyawan2]);
    }

}
