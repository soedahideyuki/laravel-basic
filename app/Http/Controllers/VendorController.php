<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function show($id){
        $vendor = Vendor::find($id);

        $products = $vendor->products;

        return view('vendors.show', compact('vendor', 'products'));
    }

    public function create(){
        return view('vendors.create');
    }

    public function store(Request $request){
        //バリデーしょんの設定
        $request->validate([
            'vendor_code' => 'required|inteder|min:0|unique:vendors,vendor_code',
            'vender_name' => 'required|max:255'
        ]);

        $vendor = new Vendor();
        $vendor -> vendor_code = $request->input('vendor_code');
        $vendor -> vender_name = $request->input('vender_name');
        $vendor -> save();

        return redirect("/vendors/{$vendor->id}");
    }
}
