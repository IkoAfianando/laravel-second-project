<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataRumah;
use Yajra\DataTables\Contracts\DataTable;

class DataRumahController extends Controller
{
    public function index()
    {
        $data_rumah = DataRumah::all();
        // return response()->json($data_rumah, 200);
        if (request()->ajax()) {
            return datatables()->of($data_rumah)
                ->addColumn('action', function($data_rumah){
                    $button = ' <button class="edit btn-warning" id="'.$data_rumah->id.'" name="edit">Edit</button>';
                    $button .= '<button class="edit btn-danger" id="'.$data_rumah->id.'" name="hapus">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('data.data_rumah');
    }
}
