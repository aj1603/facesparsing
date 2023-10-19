<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Money;


class MoneyController extends Controller
{
    public function create()
    {
        $moneys = DB::select('SELECT (money) from money');
        return view('money.create', ['moneys' => $moneys]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'money' => 'required',
        ]);
        ($formFields);

        $fullmoney = $formFields['money'];
        DB::insert("INSERT INTO money (money) VALUES ($fullmoney)");

        $moneys = DB::select('SELECT (money) from money');
        return view('money.create', ['moneys' => $moneys]);
    }

    public function edit(Money $money)
    {
        return view('money.edit', [
            'money' => $money
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'new_money' => 'required',
        ]);

        $tmoney = $request['new_money'];

        DB::update("UPDATE money SET money = $tmoney where id=$id");

        return redirect()->route('products.index')
            ->with('success', 'Succsesfylly updated!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Succsesfylly deleted!');
    }
}