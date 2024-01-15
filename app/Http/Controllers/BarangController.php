<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    public function index(){
        $barang=Barang::all();
        return view('home', ['barang' => $barang]);
    } 

    public function create(){
        $barang=Barang::all();
        return view('create', ['barang' => $barang]);
    } 

    public function createsave(Request $request)
    {
        $flight = new Barang;

        $flight->nama_hp = $request->nama_hp;
        $flight->kode_barang = $request->kode_barang;
        $flight->qty = $request->qty;
        $flight->harga = $request->harga;

        $flight->save();

        Alert::success('BERHASIL', 'data berhasil masuk');

        return redirect()->route('home');
    }

    public function update($id){
        $barang=Barang::find($id);

        return view('update', ['barang' => $barang]);
    }

    public function updatesave(Request $request){

        $flight = Barang::find($request->id);
 
        $flight->nama_hp = $request->nama_hp;
        $flight->kode_barang = $request->kode_barang;
        $flight->qty = $request->qty;
        $flight->harga = $request->harga;
         
        $flight->save();

        Alert::success('BERHASIL', 'data berhasil diupdate');

        return redirect()->route('home');
    }

    public function delete($id){

        $flight = Barang::find($id);

        $flight->delete($id);

        Alert::success('BERHASIL', 'data berhasil dihapus');

        return redirect()->route('home');
    }
}
