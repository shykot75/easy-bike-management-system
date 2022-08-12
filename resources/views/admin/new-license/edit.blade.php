@extends('master.master')

@section('title')
    লাইসেন্স সম্পাদনা | ডিজিটাল ইজিবাইক লাইসেন্স ম্যানেজমেন্ট সিস্টেম
@endsection

@section('body')

    <section class="new-license-add px-3 " style="background: #d9ffdab3; border: 2px solid #2FCC8E; border-top: none;">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">ড্যাশবোর্ড</a></li>
                            <li class="breadcrumb-item">লাইসেন্সধারী</li>
                            <li class="breadcrumb-item active">লাইসেন্সধারী সম্পাদন</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="container-fluid">
                <div class="row">
                <div class="col-md-12" >
                    <h4 style="background: #2FCC8E;" class="text-white py-2 px-3 mb-4">লাইসেন্সধারী সম্পাদন করুন</h4>
                    <p class="text-center text-success font-size-20">{{Session::get('message')}}</p>
                    <h5>বিশেষ দ্রষ্টব্যঃ <span class="text-danger mb-2">ডিজিটগুলো সর্বদাই ইংরেজীতে লিখতে হবে।</span></h5>
                    <form action="{{route('license.updateNew', ['id' => $license->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row py-2" >

                            <!---- first-half starts---->
                            <div class="col-md-6 first-half" >

                                <div class="form-group row mb-4">
                                    <label for="licence_owner_name" class="col-md-3 col-form-label">প্রোপাইটর/মালিক<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="licence_owner_name" class="form-control" id="licence_owner_name" placeholder="প্রোপাইটর/মালিক" required value="{{$license->licence_owner_name}}">
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label for="father_name" class="col-md-3 col-form-label">পিতা/স্বামীর নাম<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="father_name" class="form-control" id="father_name" placeholder="পিতা/স্বামীর নাম" required value="{{$license->father_name}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="mother_name" class="col-md-3 col-form-label">মাতার নাম<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="মাতার নাম" required value="{{$license->mother_name}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="present_address" class="col-md-3 col-form-label">বর্তমান ঠিকানা</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="present_address" class="form-control" id="present_address" placeholder="বর্তমান ঠিকানা" >{{$license->present_address}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="permanent_address" class="col-md-3 col-form-label">স্থায়ী ঠিকানা</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="permanent_address" class="form-control" id="permanent_address" placeholder="স্থায়ী ঠিকানা" >{{$license->permanent_address}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="thana" class="col-md-3 col-form-label">থানা<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="thana" class="form-control" id="thana" placeholder="থানা" required value="{{$license->thana}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="nid" class="col-md-3 col-form-label">জাতীয় পরিচয় পত্র নম্বর<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="number" maxlength="17" max="99999999999999999" name="nid" class="form-control" id="nid" placeholder="জাতীয় পরিচয় পত্র নম্বর"  required value="{{$license->nid}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="mobile_number" class="col-md-3 col-form-label">মোবাইল<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="number" maxlength="11"  max="99999999999" name="mobile_number" class="form-control" id="mobile_number" placeholder="মোবাইল"  required value="{{$license->mobile_number}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="licence_number" class="col-md-3 col-form-label">লাইসেন্স নং<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="number" maxlength="11"  max="99999999999" name="licence_number" class="form-control" id="licence_number" placeholder="লাইসেন্স নং"  required value="{{$license->licence_number}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="plate_number" class="col-md-3 col-form-label">নাম্বার প্লেট নং<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="number" maxlength="11"  max="99999999999" name="plate_number" class="form-control" id="plate_number" placeholder="নাম্বার প্লেট নং"  required value="{{$license->plate_number}}">
                                    </div>
                                </div>

                            </div>
                            <!---- first-half ends---->


                            <!---- second-half starts---->


                            <div class="col-md-6 second-half">

                                <div class="form-group row mb-4">
                                    <label for="image" class="col-md-3 col-form-label">লাইসেন্স মালিকের ছবি</label>

                                    <div class="col-md-9">
                                        <img src="{{asset($license->image)}}" alt="" height="100" width="100" class="mb-2">
                                        <input type="file" name="image" class="form-control-file" accept="images/*" id="image">

                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="license_approve_date" class="col-md-3 col-form-label">লাইসেন্স শাখার অনুমোদনের তারিখ</label>
                                    <div class="col-md-9">
                                        <span class="font-size-11">yyyy-mm-dd</span>
                                        <input type="text" name="license_approve_date" class="form-control" id="license_approve_date" value="{{$license->license_approve_date}}">
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label for="paid_fiscal_year" class="col-md-3 col-form-label">পরিশোধিত অর্থবছর<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <span class="font-size-11">yyyy - yyyy</span>
                                        <input type="text" name="paid_fiscal_year" class="form-control" id="paid_fiscal_year" value="{{$license->paid_fiscal_year}}" required >
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label for="licence_renew_fee" class="col-md-3 col-form-label">লাইসেন্স/লাইসেন্স নবায়ন ফি</label>
                                    <div class="col-md-9">
                                        <input type="number"  max="99999999" name="licence_renew_fee" class="form-control" id="licence_renew_fee"  placeholder="লাইসেন্স/লাইসেন্স নবায়ন ফি" value="{{$license->licence_renew_fee}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-md-3">লাইসেন্স ধরণ<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <select name="license_type" class="form-control " data-size="10" data-live-search="true" data-style="btn-white" required>
                                            <option value="" disabled selected>-বাছাই করুন-</option>
                                            <option value="1" {{$license->license_type == 1 ? 'selected' : ''}} >ইজিবাইক/অটোবাইক লাইসেন্স</option>
                                            <option value="2" {{$license->license_type == 2 ? 'selected' : ''}} >ড্রাইভিং লাইসেন্স</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-form-label col-md-12 text-danger">লাইসেন্স/নবায়ন ফি কমানুর সুপারিশ থাকলে নিচের তথ্যগুলু পুরন করুন।</label>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="license_fee_discount" class="col-md-3 col-form-label">লাইসেন্স ফি কমানোর পরিমান</label>
                                    <div class="col-md-9">
                                        <input type="number" name="license_fee_discount" class="form-control" id="license_fee_discount" placeholder="লাইসেন্স ফি কমানোর পরিমান" value="{{$license->license_fee_discount}}">
                                    </div>
                                </div>



                                <div class="form-group row justify-content-end">
                                    <div class="col-md-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md " style="letter-spacing: 2px;">সম্পাদন করুন</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!---- second-end ends---->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




















@endsection
