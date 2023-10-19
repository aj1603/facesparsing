<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Export;
use Illuminate\Support\Facades\DB;
use App\Imports\Import;


class ProductController extends Controller
{
    public function allproducts(Request $request){
        return view('importproduct');
    }
 
    public function import(Request $request){
        Excel::import(new Import,
                        $request->file('file')->store('files'));
        return redirect()->back();
    }
    
    public function export(Request $request){
        return Excel::download(new Export, 'products.xlsx');
    }

    public function productall(Request $request){
        $products = DB::select("SELECT * FROM facestables");
        return view('productall', ['products' => $products]);
    }

    public function delete(Product $product)
    {
        DB::table('products')->delete();
        return "Successfully deleted all products";
    }
}
