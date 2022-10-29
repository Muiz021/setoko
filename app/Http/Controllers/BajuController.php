<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use Illuminate\Http\Request;

class BajuController extends Controller
{
    public function index()
    {
        $baju = Baju::all();
        return view('admin.baju.index', compact('baju'));
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

        $baju = Baju::create($request->all());
        return redirect('menu-baju')->with('status', 'Data Berhasil Ditambahkan');
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

            $baju = Baju::where('id', $id)->first();
            $baju->update($request->all());
            return redirect('menu-baju')->with('status', 'Data Berhasil Diubah');
        }
    }

    public function destroy($id)
    {
        Baju::destroy($id);
        return redirect('menu-baju')->with('status', 'Data Berhasil Dihapus');
    }
}
