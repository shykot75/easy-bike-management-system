@extends('master.master')

@section('title')
    লাইসেন্সধারী সন্ধান | ডিজিটাল ইজিবাইক লাইসেন্স ম্যানেজমেন্ট সিস্টেম
@endsection


@section('body')


    <section class="tax-search px-3" style="background: #d9ffda87; border: 2px solid #2FCC8E; ">

        <!-- start page title -->
        <div class="row">
            <div class="col-12 py-1">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">ড্যাশবোর্ড</a></li>
                            <li class="breadcrumb-item active">সন্ধান</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="bg-primary text-white py-2 px-3 mb-4">লাইসেন্সধারীর সন্ধান করুন</h5>
                    <p class="text-center text-danger font-size-20">{{Session::get('message')}}</p>
                    <form action="{{route('license.searchNew')}}" method="GET">

                        <div class="row">

                            <div class="col-md-12 " >

                                <div class="form-group row mb-4">
                                    <label class="col-form-label"></label>
                                    <div class="col-md-4">
                                        <select name="license_type" class="form-control " data-size="10" data-live-search="true" data-style="btn-white" required>
                                            <option value="" disabled selected>-বাছাই করুন-</option>
                                            <option value="1">ইজিবাইক/অটোবাইক লাইসেন্স</option>
                                            <option value="2">ড্রাইভিং লাইসেন্স</option>
                                        </select>
                                    </div>

                                    <label for="license_search" class="col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="text" name="license_search" class="form-control" id="license_search" placeholder="Example:  লাইসেন্স নং " required value="{{$search}}">
                                    </div>
                                </div>




                                <div class="form-group row ">
                                    <div class="col-md-9">
                                        <div>
                                            <button type="submit" class="btn btn-success w-md font-weight-bold" style="letter-spacing: 2px;">সন্ধান করুন</button>
                                        </div>
                                    </div>
                                </div>


                            </div>





                        </div>


                    </form>

{{--                    <table>--}}
{{--                        @foreach($type as $license)--}}
{{--                        <tr>--}}
{{--                            <th>প্রোপাইটর/মালিক:</th>--}}
{{--                            <td>{{$license->license_type}}</td>--}}
{{--                        </tr>--}}
{{--                        @endforeach--}}
{{--                    </table>--}}






                    @if($license)



                        <div class="row col-md-8 mx-auto search-border-1">

                            <div class="col-md-6 text-left mx-left py-2">
                                <img src="{{asset($license->image)}}" alt="logo" class="img-responsive mx-left text-left " height="150" width="150">
                            </div>
                            <div class="col-md-6 text-right mx-right py-2">
                                <img class="" src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(120)->generate(url('').'/eblms/qr-code/'.$license->id) ) }}" alt="qr-code">
                            </div>
                        </div>

                        <div class="row col-md-8 mx-auto search-border-2">

                            <h3 class="text-center text-info py-3 mx-auto font-weight-bold">লাইসেন্সধারীর তথ্য</h3>

                            <table class="table thead-border-top-1 table table-hover mx-auto ">
                                <tr>
                                    <th>প্রোপাইটর/মালিক:</th>
                                    <td>{{$license->licence_owner_name}}</td>
                                </tr>

                                <tr>
                                    <th>পিতা/স্বামীর নাম:</th>
                                    <td>{{$license->father_name}}</td>
                                </tr>

                                <tr>
                                    <th>মাতার নামঃ</th>
                                    <td>{{$license->mother_name}}</td>
                                </tr>


                                <tr>
                                    <th>স্থায়ী ঠিকানা:</th>
                                    <td>{{$license->permanent_address}}</td>
                                </tr>

                                <tr>
                                    <th>বর্তমান ঠিকানা:</th>
                                    <td>{{$license->present_address}}</td>
                                </tr>

                                <tr>
                                    <th>থানা	:</th>
                                    <td>{{$license->thana}}</td>
                                </tr>

                                <tr>
                                    <th>জাতীয় পরিচয় পত্রের নাম্বারঃ</th>
                                    <td>{{$license->nid}}</td>
                                </tr>

                                <tr>
                                    <th>মোবাইল নাম্বার:</th>
                                    <td>{{$license->mobile_number}}</td>
                                </tr>

                                <tr>
                                    <th>লাইসেন্স নং:</th>
                                    <td>{{$numto->bnNum($license->licence_number)}}</td>
                                </tr>

                                <tr>
                                    <th>নাম্বার প্লেট নং:</th>
                                    <td>{{$numto->bnNum($license->plate_number)}}</td>
                                </tr>

                                <tr>
                                    <th>লাইসেন্স শাখার অনুমোদনের তারিখ:</th>
                                    <td>{{date_format($license->created_at, 'd-m-y')}}</td>

                                </tr>

                                <tr>
                                    <th>লাইসেন্স/লাইসেন্স নবায়ন ফি:</th>
                                    <td>{{ $license->licence_renew_fee == null ? '' : $numto->bnNum($license->licence_renew_fee)}}</td>

                                </tr>

                                <tr>
                                    <th>পরিশোধিত অর্থবছর:</th>
                                    <td>{{$license->paid_fiscal_year}}</td>

                                </tr>

                                <tr>
                                    <th>লাইসেন্সের ধরণ:</th>
                                    <td>
                                        @if($license->license_type == 1)
                                            ইজিবাইক/অটোবাইক লাইসেন্স
                                        @elseif($license->license_type == 2)
                                            ড্রাইভিং লাইসেন্স
                                        @else
                                            উল্লেখ্য নেই
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>স্ট্যাটাস:</th>
                                    <td>
                                        @if($license->status == 1)
                                            সক্রিয়
                                        @elseif($license->status == 2)
                                            নিষ্ক্রিয়
                                        @else
                                            উল্লেখ্য নেই
                                        @endif
                                    </td>

                                </tr>

                            </table>
                        </div>


                    @endif















                </div>
            </div>
        </div>
    </section>






@endsection
