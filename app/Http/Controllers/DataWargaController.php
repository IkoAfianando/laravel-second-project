<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataWarga;
use Yajra\DataTables\Contracts\DataTable;

class DataWargaController extends Controller
{
    public function index()
    {
        $data_warga = DataWarga::get();
        // return response()->json($data_warga, 200);
        if (request()->ajax()) {
            return datatables()->of($data_warga)
            ->addColumn('action', function($data_warga){
                $button = ' <button class="edit btn-warning" id="'.$data_warga->id.'" name="edit">Edit</button>';
                $button .= '<button class="edit btn-danger" id="'.$data_warga->id.'" name="hapus">Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('data.data_warga');
    }
}
