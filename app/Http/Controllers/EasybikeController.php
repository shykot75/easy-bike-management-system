<?php

namespace App\Http\Controllers;

use App\Models\NewLicense;
use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;

class EasybikeController extends Controller
{
    private $easybikes;
    private $easybike;
    private $numto;
    public function manage(){
        $this->easybikes = NewLicense::where('license_type',1)->get();
        $this->numto = New NumberToBangla();
        return view('easy-bike.manage', ['easybikes' => $this->easybikes, 'numto' => $this->numto]);
    }

}
