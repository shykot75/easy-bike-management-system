<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewLicense;
use Rakibhstu\Banglanumber\NumberToBangla;

class QrController extends Controller
{
    private $license;
    private $numto;

    public function qrGenerate($id){
        $this->license = NewLicense::find($id);
        $this->numto = new NumberToBangla();
        return view('qr.qr-details', ['license' => $this->license, 'numto' => $this->numto]);
    }
}
