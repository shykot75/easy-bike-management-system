<?php

namespace App\Http\Controllers;

use App\Models\NewLicense;
use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;
use PDF;


class NewLicenseController extends Controller
{
    private $newLicense;
    private $newLicenses;
    private $numto;
    private $mpdf;
    private $data;


    public function index(){
        return view('admin.new-license.add');
    }

    public function create(Request $request){
        $this->newLicense = NewLicense::createNewLicense($request);
        return redirect('/add-new-license')->with('message', 'নতুন লাইসেন্সধারী সঠিকভাবে সংযোজিত হয়েছে!!');
    }

    public function manage(){
        $this->newLicenses = NewLicense::select('id', 'licence_number', 'licence_owner_name', 'father_name', 'mother_name', 'present_address', 'status', 'license_type')->get();
        $this->numto = new NumberToBangla();
        return view('admin.new-license.manage', ['licenses' => $this->newLicenses, 'numto' => $this->numto]);
    }

    public function show($id){
        $this->newLicense = NewLicense::find($id);
        $this->numto = new NumberToBangla();
        return view('admin.new-license.show', ['license' => $this->newLicense, 'numto' => $this->numto]);
    }

    public function edit($id){
        $this->newLicense = NewLicense::find($id);
        return view('admin.new-license.edit', ['license' => $this->newLicense]);
    }

    public function update(Request $request, $id){
       $this->newLicense = NewLicense::updateLicense($request, $id);
       return redirect('/manage-new-license')->with('message', 'লাইসেন্সধারীর তথ্য সঠিকভাবে সম্পাদন হয়েছে!!');
    }


    public function delete($id){
        $this->newLicense = NewLicense::find($id);
        if (file_exists($this->newLicense->image))
        {
            unlink($this->newLicense->image);
        }
        if (file_exists($this->newLicense->recommendation_reason))
        {
            unlink($this->newLicense->recommendation_reason);
        }
        $this->newLicense->delete();
        return redirect('/manage-new-license')->with('message', 'লাইসেন্সধারীর তথ্য সঠিকভাবে মুছেফেলা হয়েছে!!');
    }

    public function createPdf($id){
        $this->data = NewLicense::find($id);
        $this->numto = new NumberToBangla();

        $this->mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'default_font' => 'solaimanlipi',

        ]);

        $pdf = PDF::loadView('pdf.receipt', ['license' => $this->data, 'numto' => $this->numto]);
        $pdf->SetProtection(['copy', 'print-highres'], '', 'pass');


        return $pdf->stream('receipt_'.time().rand('999', '9999999'));
    }







}
