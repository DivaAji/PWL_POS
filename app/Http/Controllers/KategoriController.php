<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable){

        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }
    
    public function store (Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }

    public function edit($kategori_id)
    {
        $kategori = KategoriModel::find($kategori_id);
        return view('kategori.edit', compact('kategori'));
    }
    
    public function update(Request $request, $id)
    {
        $kategori = KategoriModel::find($id);
        $kategori->update([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect()->route('kategori.index')->with('success', 'Kategori has been updated successfully.');
    }
    

    public function delete($id)
    {
        $kategori = KategoriModel::find($id);
        
        if (!$kategori) {
            return redirect()->back()->with('error', 'Kategori not found.');
        }

        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Data berhasil dihapus.');
    }
}


        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data baru berhasil';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row. ' baris';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row. ' baris';
            
        // $data = DB::table('m_kategori')->get();
        // return view('kategori', ['data' => $data]);
        //Buat kategori.blade.php

