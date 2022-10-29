<?php

namespace App\Http\Controllers;

use App\Models\Celana;
use Illuminate\Http\Request;

class CelanaController extends Controller
{
    public function index()
    {
        $celana = Celana::all();
        return view('admin.celana.index',compact('celana'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required',
        ]);

        $newName = '';
        if ($request->file('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('file', $newName);
        }
        $request['file'] = $newName;

        $celana = Celana::create($request->all());
        return redirect('menu-celana')->with('status','Data Berhasil Ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('put')) {

            $newName = '';
            if ($request->file('gambar')) {
                $extension = $request->file('gambar')->getClientOriginalExtension();
                $newName = $request->nama . '-' . now()->timestamp . '.' . $extension;
                $request->file('gambar')->storeAs('file', $newName);
                $request['file'] = $newName;
            }

            $celana = Celana::where('id', $id)->first();
            $celana->update($request->all());
            return redirect('menu-celana')->with('status', 'Data Berhasil Diubah');
        }
    }

    public function destroy($id)
    {
        Celana::destroy($id);
        return redirect('menu-celana')->with('status', 'Data Berhasil Dihapus');
    }
}
