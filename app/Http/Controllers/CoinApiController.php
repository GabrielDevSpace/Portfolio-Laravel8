<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class CoinApiController extends Controller
{
 
    public function coinapi()
    {  
        $datas = Cryptocap::getAssetsWithLimit(1000);

        $key = env('CURRENCYLAYER_ACCESS_KEY');
        $url = "http://apilayer.net/api/live?access_key=$key&currencies=BRL&source=USD&format=1";
        $response = file_get_contents($url);
        $currency = json_decode($response);
    
        return view('projetos.coinapi', compact('datas', 'currency'));
    }
    
    
}
