<?php

namespace App\Http\Controllers;

use App\Models\NewLicense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Rakibhstu\Banglanumber\NumberToBangla;
use PDF;

class CertificateController extends Controller
{
    private $licenseMode;
    private $licenseType;
    private $licenseNumber;
    private $data;
    private $numto;

    public function sonod(Request $request){
        $this->licenseType = $request->license_type;
        $this->licenseNumber = $request->licence_number;


        $this->data = NewLicense::where('license_type',$this->licenseType)->where('licence_number',$this->licenseNumber)->first();
        $this->numto = new NumberToBangla();
        return view('pdf.certificate', ['license' => $this->data, 'numto' => $this->numto]);
    }

    public function issue(){
        return view('admin.certificate.certificate-issue');
    }

    public function fetch($license_type){
        $this->licenseNumber = DB::table('new_licenses')
            ->select('licence_number', 'licence_owner_name')
            ->where('license_type',$license_type)
            ->get();
        return json_encode($this->licenseNumber);
    }

    public function receipt(Request $request){

        $this->licenseType = $request->license_type;
        $this->licenseNumber = $request->licence_number;


        $this->data = NewLicense::where('license_type',$this->licenseType)->where('licence_number',$this->licenseNumber)->first();
        $this->numto = new NumberToBangla();

        $this->mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'solaimanlipi',
        ]);

        $pdf = PDF::loadView('pdf.certificate', ['license' => $this->data, 'numto' => $this->numto]);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('certificate_'.time().rand('999', '9999999'));

    }







}
