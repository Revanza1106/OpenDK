<?php

namespace App\Http\Controllers;

// use App\Models\SettingAplikasi;

use IlLuminate\Support\Facades\View;

class LapakKecamatanController extends Controller {
    protected $settings;


    public function __construct()
    {
        return parent::__construct();
    }

    public function index(){
        $product = [];
        return view('lapak_kecamatan.index',compact('produk'));
    }
    public function show($id){
        $product = null;
        return view('lapak_kecamtan.php',compact('produk'));
    }
}
