<?php

namespace App\Http\Controllers;

use App\Models\BajuMuslim;
use Illuminate\Http\Request;

class BajuMuslimController extends Controller
{
    public function index()
    {
        $bajuMuslim = BajuMuslim::all();
        return view('admin.bajumuslim.index', compact('bajuMuslim'));
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

        $bajuMuslim = BajuMuslim::create($request->all());
        return redirect('menu-baju-muslim')->with('status', 'Data Berhasil Ditambahkan');
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

            $bajuMuslim = BajuMuslim::where('id', $id)->first();
            $bajuMuslim->update($request->all());
            return redirect('menu-baju-muslim')->with('status', 'Data Berhasil Diubah');
        }
    }

    public function destroy($id)
    {
        BajuMuslim::destroy($id);
        return redirect('menu-baju-muslim')->with('status', 'Data Berhasil Dihapus');
    }
}
