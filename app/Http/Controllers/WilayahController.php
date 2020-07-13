<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wilayah;
use App\Wisata;
use DataTables;
use Storage;
use SweetAlert;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $wilayah = Wilayah::all();

        // return view('wilayah.wilayah', ['wilayah' => $wilayah]);

        if($request->ajax()){
            $data = Wilayah::latest()->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function($data){
                    $c = csrf_field();
                    return '
                        <form action="'.route('wilayah.destroy', $data->id).'" method="post" id="id'. $data->id.'">
                        '.$c.'
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                            <a href="'.route('wilayah.show', $data->id).'" class="btn btn-primary btn-sm"><i class="fas fa-file-archive"></i><span>&nbsp;Show</span></a>
                            <a href="'.route('wilayah.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i><span>&nbsp;Edit</span></a>
                            <button onclick="deleteData('. $data->id .')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;Delete</button>
                        ';
                })
            ->RawColumns(['action'])
            ->make(true);
        }
        return view('wilayah.wilayah');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wilayah.create');
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
            'pdf' => 'required|mimes:pdf',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,gif',
        ]);

        $wilayah = new Wilayah;
        $wilayah->nama_wilayah = $request->nama;
        $wilayah->pdf = $request->file('pdf')->store('document');
         //mengambil request gambar dengan nama asli
         $image = $request->file('gambar')->getClientOriginalName();
         //save gambar ke folder storage wilayah
         $wilayah->gambar = $request->file('gambar')->storeAs('wilayah', $image);
        $wilayah->save();

        return redirect('wilayah')->with('success','Data berhasil di simpan !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::where('wilayah_id',$id)->get();
        $wilayah = Wilayah::where('id',$id)->get();
        return view('wilayah.detail', ['wilayah' => $wilayah], ['wisata' => $wisata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wilayah = Wilayah::where('id',$id)->get();
        return view('wilayah.edit', ['wilayah' => $wilayah]);
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
            'pdf' => 'mimes:pdf',
            'gambar' => 'image|mimes:jpeg,jpg,png,gif',
        ]);

        $wilayah = Wilayah::findOrFail($id);

         $wilayah->nama_wilayah = $request->nama;

         if($request->pdf){
             Storage::delete($wilayah->pdf);
             $wilayah->pdf = $request->file('pdf')->store('document');

         }

         //update dan save gambar ke folder storage wilayah
         if ($request->gambar) {
            Storage::delete($wilayah->gambar);
            //mengambil request gambar dengan nama asli
            $image = $request->file('gambar')->getClientOriginalName();
            $wilayah->gambar = $request->file('gambar')->storeAs('wilayah', $image);
         }

         $wilayah->save();

         return redirect('wilayah')->with('success', 'Data berhasil di update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wilayah = Wilayah::findOrFail($id);
        if ($wilayah->pdf) {
            Storage::delete($wilayah->pdf);

        }

        $wilayah = Wilayah::findOrFail($id);
        if ($wilayah->gambar) {
            Storage::delete($wilayah->gambar);
        }

        $wilayah->delete();
        return redirect('wilayah')->with('success', 'Data berhasil di delete !');
    }
}
