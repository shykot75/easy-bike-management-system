<?php

namespace App\Http\Controllers;

use App\Models\NewLicense;
use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;

class AdminDashboardController extends Controller
{

    private $easyLicenseNumber;
    private $drivingLicenseNumber;
    private $numto;

    public function index(){
        $this->numto = new NumberToBangla();
        $this->easyLicenseNumber = NewLicense::where('license_type',1)->count();
        $this->drivingLicenseNumber = NewLicense::where('license_type',2)->count();

        return view('admin.dashboard.dashboard', [
            'easyLicense' => $this->easyLicenseNumber,
            'drivingLicense' => $this->drivingLicenseNumber,
            'numto'  => $this->numto
        ]);
    }

}
