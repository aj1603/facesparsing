<?php

namespace App\Exports;

use App\Models\Facestable;
use Maatwebsite\Excel\Concerns\FromCollection;

class Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Facestable::select('productCode','name','price','quantity','status','mainCategory','secCategory','language','description','imgUrl',)->get();
    }
}