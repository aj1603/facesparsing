<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MoneyController extends Controller
{
    public function allmoney() {
        $allmoney = DB::select("SELECT * FROM money");
        return $allmoney;
    }

    public function create() {
        $moneys = DB::select('SELECT (money) from money');
        return view('money.create', ['moneys'=>$moneys]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'money'=> 'required',
        ]);
        ($formFields);

        $fullmoney = $formFields['money'];
        DB::insert("INSERT INTO money (money) VALUES ($fullmoney)");

        $moneys = DB::select('SELECT (money) from money');
        return view('money.create', ['moneys'=>$moneys]);
    }
}
