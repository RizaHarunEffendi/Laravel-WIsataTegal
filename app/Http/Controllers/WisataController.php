<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Wisata;
use App\Wilayah;
use DataTables;
use SweetAlert;
use Storage;

use Illuminate\Http\Request;


class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $wisata = Wisata::all();

        // return view('wisatas.wisata', ['wisata' => $wisata]);

        if($request->ajax()){
            $data = Wisata::latest()->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function($data){
                    $c = csrf_field();
                    return '
                        <form action="'.route('wisata.destroy', $data->id).'" method="post" id="data'. $data->id.'">
                        '.$c.'
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                            <a href="'.route('wisata.show', $data->id).'" class="btn btn-primary btn-sm"><i class="fas fa-file-archive"></i><span>&nbsp;Show</span></a>
                            <a href="'.route('wisata.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i><span>&nbsp;Edit</span></a>
                            <button onclick="deleteData('. $data->id .')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;Delete</button>
                        ';
                })
            ->RawColumns(['action'])
            ->make(true);
        }
        return view('wisatas.wisata');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengambil relasi wilayah
        $wilayah = Wilayah::all();
        return view('wisatas.create', ['wilayah' => $wilayah]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|min:3',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,gif',
            'pdf' => 'required|mimes:pdf',
        ]);

        $wisata = new Wisata;
        $wisata->nama_wisata = $request->nama;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->wilayah_id = $request->wilayah_id;
        $wisata->jam_buka = $request->jam_buka;
        $wisata->jam_tutup = $request->jam_tutup;
        //mengambil request gambar dengan nama asli
        $image = $request->file('gambar')->getClientOriginalName();
        //save gambar ke folder storage wisata
        $wisata->gambar = $request->file('gambar')->storeAs('wisata', $image);
        $wisata->pdf = $request->file('pdf')->store('document');

        $wisata->save();

        return redirect('wisata')->with('success','Data berhasil di simpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::where('id',$id)->get();
        return view('wisatas.detail', ['wisata' => $wisata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengambil relasi wilayah
        $wilayah = Wilayah::all();
        $wisata = Wisata::where('id',$id)->get();
        return view('wisatas.edit', ['wisata' => $wisata], ['wilayah' => $wilayah] );
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
        $validatedData = $request->validate([
            'nama' => 'required|string|min:3',
            'deskripsi' => 'required|string',
            'gambar' => 'image|mimes:jpeg,jpg,png,gif',
            'pdf' => 'mimes:pdf',
        ]);

         $wisata = Wisata::findOrFail($id);
         $wisata->nama_wisata = $request->nama;
         $wisata->deskripsi = $request->deskripsi;
         $wisata->wilayah_id = $request->wilayah_id;
         $wisata->jam_buka = $request->jam_buka;
         $wisata->jam_tutup = $request->jam_tutup;
        //update dan save gambar ke folder storage wisata
         if ($request->gambar) {
            Storage::delete($wisata->gambar);
            //mengambil request gambar dengan nama asli
            $image = $request->file('gambar')->getClientOriginalName();
            $wisata->gambar = $request->file('gambar')->storeAs('wisata', $image);
         }
          //update dan save pdf ke folder storage document
         if($request->pdf){
            Storage::delete($wisata->pdf);
            $wisata->pdf = $request->file('pdf')->store('document');
        }
         $wisata->save();

         return redirect('wisata')->with('success', 'Data berhasil di update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);
        if ($wisata->gambar) {
            Storage::delete($wisata->gambar);
        }
        if ($wisata->pdf) {
            Storage::delete($wisata->pdf);
        }
        $wisata->delete();
        return redirect('wisata')->with('success', 'Data berhasil di delete !');
    }
}
