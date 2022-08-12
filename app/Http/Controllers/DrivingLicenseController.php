<?php

namespace App\Http\Controllers;

use App\Models\NewLicense;
use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;

class DrivingLicenseController extends Controller
{
    private $drivingLicenses;
    private $drivingLicense;
    private $numto;
    public function manage(){
        $this->drivingLicenses = NewLicense::where('license_type',2)->get();
        $this->numto = New NumberToBangla();
        return view('driving-license.manage', ['drivingLicenses' => $this->drivingLicenses, 'numto' => $this->numto]);
    }
}
