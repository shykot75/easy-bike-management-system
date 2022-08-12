<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewLicense extends Model
{
    use HasFactory;

    private static $image;
    private static $imageName;
    private static $directory;
    private static $taxpayer;
    private static $newLicense;
    private static $imageUrl;
    private static $fileUrl;
    private static $message;


    public static function getImageUrl($request){
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getclientOriginalName();
        self::$directory    = 'new-licenses/owners/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function fileUrl($request){
        self::$image        = $request->file('recommendation_reason');
        self::$imageName    = self::$image->getclientOriginalName();
        self::$directory    = 'new-licenses/recommendation-reasons/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }


    public static function createNewLicense($request){
        self::$newLicense = new NewLicense();
        self::$newLicense->licence_owner_name = $request->licence_owner_name;
        self::$newLicense->father_name = $request->father_name;
        self::$newLicense->mother_name = $request->mother_name;
        self::$newLicense->present_address = $request->present_address;
        self::$newLicense->permanent_address = $request->permanent_address;
        self::$newLicense->thana = $request->thana;
        self::$newLicense->thana = $request->thana;
        self::$newLicense->nid = $request->nid;
        self::$newLicense->mobile_number = $request->mobile_number;
        self::$newLicense->licence_number = $request->licence_number;
        self::$newLicense->plate_number = $request->plate_number;

        if(isset($request->image)){
            self::$newLicense->image = self::getImageUrl($request);
        }

        self::$newLicense->license_approve_date = $request->license_approve_date;
        self::$newLicense->paid_fiscal_year = $request->paid_fiscal_year;
        self::$newLicense->paid_fiscal_year = $request->paid_fiscal_year;
        self::$newLicense->licence_renew_fee = $request->licence_renew_fee;
        self::$newLicense->license_type = $request->license_type;
        self::$newLicense->license_fee_discount = $request->license_fee_discount;

        if(isset($request->recommendation_reason)){
            self::$newLicense->recommendation_reason = self::fileUrl($request);
        }
        self::$newLicense->save();
    }

    public static function updateLicense($request, $id){
        self::$newLicense = NewLicense::find($id);

        if($request->file('image'))
        {
            if (file_exists(self::$newLicense->image))
            {
                unlink(self::$newLicense->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$newLicense->image;
        }

//        if($request->file('recommendation_reason'))
//        {
//            if (file_exists(self::$newLicense->recommendation_reason))
//            {
//                unlink(self::$newLicense->recommendation_reason);
//            }
//            self::$fileUrl = self::fileUrl($request);
//        }
//        else
//        {
//            self::$fileUrl = self::$newLicense->recommendation_reason;
//        }

        self::$newLicense->licence_owner_name = $request->licence_owner_name;
        self::$newLicense->father_name = $request->father_name;
        self::$newLicense->mother_name = $request->mother_name;
        self::$newLicense->present_address = $request->present_address;
        self::$newLicense->permanent_address = $request->permanent_address;
        self::$newLicense->thana = $request->thana;
        self::$newLicense->thana = $request->thana;
        self::$newLicense->nid = $request->nid;
        self::$newLicense->mobile_number = $request->mobile_number;
        self::$newLicense->licence_number = $request->licence_number;
        self::$newLicense->plate_number = $request->plate_number;

        self::$newLicense->image = self::$imageUrl;

        self::$newLicense->license_approve_date = $request->license_approve_date;
        self::$newLicense->paid_fiscal_year = $request->paid_fiscal_year;
        self::$newLicense->paid_fiscal_year = $request->paid_fiscal_year;
        self::$newLicense->licence_renew_fee = $request->licence_renew_fee;
        self::$newLicense->license_type = $request->license_type;
        self::$newLicense->license_fee_discount = $request->license_fee_discount;
        self::$newLicense->save();





    }












}
