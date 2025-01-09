<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// models
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::orderBy('created_at')->get();
        
        return view('pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
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
             'id' => 'required|max:20 ',
              'nama_pelanggan' => 'required|max:255',
              'no_hp' => 'required|max:255',
              'email' => 'required|max:255',
              
        ]);

        $pelanggan = Pelanggan::create([
            'id' => $request->id,
            'nama_pelanggan' => $request->nama_pelanggan,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            
        ]);

        if($pelanggan){
            return redirect('pelanggan')->with('msg', 'Pelanggan Berhasil di Tambahkan!');
        } else {
            return redirect()->route('pelanggan.create')->with('error', 'Pelanggan gagal di Tambahkan');
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
        $pelanggan = Pelanggan::where('id', $id)->get();

        return view('pelanggan.edit', ['pelanggan' => $pelanggan]);
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
        $pelanggan = array(
            'id' => $request->id,
            'nama_pelanggan' => $request->nama_pelanggan,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            
        );

        $update = Pelanggan::where('id',$id)->update($pelanggan);

        return redirect()->route('pelanggan.index')->with('msg', 'Pelanggan Berhasil di ubah');
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
            $pelanggan = Pelanggan::where('id',$id)->delete();
      
            return redirect('pelanggan')->with('msg', 'Pelanggan Berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('pelanggan')->with('msg', 'Pelanggan Gagal dihapus, Sudah digunakan di data lain.');
        }
    }
}
