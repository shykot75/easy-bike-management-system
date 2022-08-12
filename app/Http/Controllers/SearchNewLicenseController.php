<?php

namespace App\Http\Controllers;

use App\Models\NewLicense;
use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;

class SearchNewLicenseController extends Controller
{
    private $newLicenses;
    private $licenseType;
    private $licenseSearch;
    private $numto;
    private $type;
    private $other;
    private $paisi;


    public function search(Request $request){
        $this->numto = new NumberToBangla();
        $this->licenseType = $request->license_type;
        $this->licenseSearch = $request->license_search;

        $this->type = NewLicense::where('license_type',$this->licenseType)->get();
        if($this->type){
            $this->other = NewLicense::where('license_type',$this->licenseType)->where('licence_number',$this->licenseSearch)->first();
        }
//        if($this->other == null){
//            return back()->with('message', 'কোনো তথ্য পাওয়া যায়নি!!');
//        }

       return view('admin.new-license.search', ['license' => $this->other, 'search' => $this->licenseSearch, 'numto' => $this->numto]);
   }

}
