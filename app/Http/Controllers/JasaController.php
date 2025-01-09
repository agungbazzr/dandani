<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// models
use App\Models\Jasa;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jasa = Jasa::orderBy('created_at')->get();
        
        return view('admin.jasa.index', compact('jasa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jasa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
              'nama_jasa' => 'required|max:255',
              'jenis_jasa' => 'required|max:255',
              'harga_jasa' => 'required|max:255',
              'waktu_estimasi' => 'required|max:255',
              'keterangan_jasa' => 'required',
              
        ]);

        $jasa = Jasa::create([
            'nama_jasa' => $request->nama_jasa,
            'jenis_jasa' => $request->jenis_jasa,
            'harga_jasa' => $request->harga_jasa,
            'waktu_estimasi' => $request->waktu_estimasi,
            'keterangan_jasa' => $request->keterangan_jasa,
            
        ]);

        if($jasa){
            return redirect('jasa')->with('msg', 'Jasa Berhasil di Tambahkan!');
        } else {
            return redirect()->route('admin.jasa.create')->with('error', 'Jasa gagal di Tambahkan');
        }

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $jasa = Jasa::where('id', $id)->get();

        return view('admin.jasa.edit', ['jasa' => $jasa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update data
        $jasa = array(
            'id' => $request->id,
            'nama_jasa' => $request->nama_jasa,
            'jenis_jasa' => $request->jenis_jasa,
            'harga_jasa' => $request->harga_jasa,
            'waktu_estimasi' => $request->waktu_estimasi,
            'keterangan_jasa' => $request->keterangan_jasa,
            
        );

        $update = Jasa::where('id',$id)->update($jasa);

        return redirect()->route('admin.jasa.index')->with('msg', 'Jasa Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $jasa = Jasa::where('id',$id)->delete();
      
            return redirect('jasa')->with('msg', 'Jasa Berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('jasa')->with('msg', 'Jasa Gagal dihapus, Sudah digunakan di data lain.');
        }
    }
}
