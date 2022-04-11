<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class CoinApiController extends Controller
{
    public function coinapi()
    {  
        $datas = Cryptocap::getAssetsWithLimit(1000);
        return view('api.coinapi', compact('datas'));
    }
}
