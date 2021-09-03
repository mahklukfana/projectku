<?php

namespace App\Http\Controllers;

use App\Models\MatkulAsjk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatkulAsjkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Category::get();
        $data = DB::table('matkul_asjks')
            ->orderBy('created_at', 'desc')
            ->get();
        if (request()->ajax()) {
            return datatables()->of($data)
                ->addColumn('aksi', function ($data) {
                    // <button class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-outline-2x btn btn-outline-primary"><i class="lnr-store btn-icon-wrapper"> </i></button>
                    $button = "<button class='edit mb-2 mr-2 btn-sm btn-icon btn-icon-only btn-pill btn btn-outline-link text-warning' id='" . $data->id . "'><i class='lnr-pencil btn-icon-wrapper'></i></button>";
                    $button .= "<button class='hapus mb-2 mr-2 btn-sm btn-icon btn-icon-only btn-pill btn btn-outline-link text-danger' id='" . $data->id . "'><i class='lnr-trash btn-icon-wrapper'> </i></button>";
                    return $button;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('administrator.contents.matkul_asjk');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = new MatkulAsjk();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_handphone = $request->no_handphone;
        $simpan = $data->save();
        if ($simpan) {
            return response()->json(['data' => $data, 'text' => 'Data Berhasil Disimpan'], 200);
        } else {
            return response()->json(['data' => $data, 'text' => 'Data Gagal Disimpan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MatkulAsjk  $matkulAsjk
     * @return \Illuminate\Http\Response
     */
    public function show(MatkulAsjk $matkulAsjk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MatkulAsjk  $matkulAsjk
     * @return \Illuminate\Http\Response
     */
    public function edit(MatkulAsjk $matkulAsjk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MatkulAsjk  $matkulAsjk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatkulAsjk $matkulAsjk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MatkulAsjk  $matkulAsjk
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatkulAsjk $matkulAsjk)
    {
        //
    }
}
