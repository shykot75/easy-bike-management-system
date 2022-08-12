<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>সনদ</title>
    <style>
        body {
            font-family: 'solaimanlipi', Arial, sans-serif !important; width: 100%; background: #FEFCBF;
        }
        .receipt .container{
            width: 100% !important; margin: auto !important; display: block !important; position: relative !important;
        }
        .header-row td{
            padding: 0px 15px !important;
        }

        .tableh2 {
            color: #000000!important; font-size: 40px!important; text-align: center!important;
        }
        .tablep {
            color: red!important; text-align: center!important; font-size: 16px!important; align-items: center!important; justify-content: center!important;
        }
        .tableh3{
             color: #0c4128; letter-spacing: 0.6px;
        }

        .bg-area {
            background-image:  url("{{asset('/img/creem-logo.png')}}"); background-repeat: no-repeat; background-position: center;
        }
        .license-type {
            padding: 10px 55px 10px 55px !important; font-family: 'solaimanlipi', Arial, sans-serif !important;
        }
        .receipt .license-type {
            width: 20% !important; margin: auto; text-align: center; align-items: center; justify-content: center; horiz-align: center; display: grid; overflow:hidden;
        }

        .img-table .bd table, .img-table .bd th, .img-table .bd td {
            border: 1px solid !important; font-weight: normal !important;
        }
        .img-table .bd table {
            width: 100%!important; border-collapse: collapse!important; font-weight: normal !important;
        }

        .license-details {
            width: 100%; overflow: hidden; margin-top: 10px;
        }
        .col-md-6 {
            width: 46%; float: left; overflow: hidden; margin: 0 2%;
        }

        .col-md-6 table th {
            padding-top: 4px; padding-bottom: 4px; line-height: 1.2em!important;
        }
        .col-md-6 table td {
            padding-top: 4px; padding-bottom: 4px; padding-left: 7px; line-height: 1.2em!important;
        }
        .license-details .first th {
            text-align: left!important;
        }
        .license-details .second th {
            text-align: right!important;
        }
        .license-expire {
            width: 80% !important; margin: 0px auto 60px auto; color: red; text-align: center; align-items: center; justify-content: center; horiz-align: center; display: grid; overflow:hidden;
        }

        .verify p {
            text-align: center!important;
        }

        .rules {
            margin-bottom: -10px!important;
        }
        .warning {
            width: 90% !important; margin: -10px auto 25px auto !important; color: red; text-align: center; align-items: center; justify-content: center; horiz-align: center; display: grid; overflow:hidden;
        }


    </style>
</head>
<body>

<section class="receipt">
    <div class="container">
        <div class="row header-row">
            <table class="lokkirpur-table" align="center">
                <tr>
                    <td width="130" >
                        <img class="bn_govt_logo " src="{{asset('/')}}img/vs_logo.png" width="120px"/>
                    <td class="text-center margin-auto" width="310" align="center">
                        <h2 class="tableh2"><b>লক্ষ্মীপুর পৌরসভা</b></h2>
                        <p class="tablep"><b>LAKSHMIPUR MUNICIPALITY</b></p>
                        <br>
                        <h3 class="tableh3">ব্যাটারি চালিত ইজিবাইক মালিক লাইসেন্স</h3>
                    </td>
                    <td class="text-center" width="150">
                        <img class="" src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(100)->backgroundColor(254, 252, 191)->generate(url('').'/eblms/qr-code/'.$license->id) ) }}" alt="">
                    </td>
                </tr>
            </table>
        </div>


        <div class="bg-area">

            <div class="row license-type" id="license-type">
                <h3 style=" font-family: 'solaimanlipi', Arial, sans-serif; text-align: center; background: #ff0000; color: #ffffff;  padding: 8px; border-radius: 20px; letter-spacing: 1px;  "  >
{{--                    {{ $license->license_type == 1 ? 'ইজিবাইক/অটোবাইক লাইসেন্স' : ''}}--}}
{{--                    {{ $license->license_type == 2 ? 'ড্রাইভিং লাইসেন্স' : '' }}--}}
                    সনদপত্র
                </h3>
            </div>
            <div class="row header-row">
                <table class="img-table " align="center">
                    <tr>
                        <td width="150" >
                            <img class="bn_govt_logo " src="{{asset($license->image)}}" width="120px"/>
                        <td class="text-center margin-auto" width="300" align="center">
{{--                            <h2 class="tableh2"><b>লক্ষ্মীপুর পৌরসভা</b></h2>--}}
{{--                            <p class="tablep"><b>LAKSHMIPUR MUNICIPALITY</b></p>--}}
{{--                            <br>--}}
{{--                            <h3 class="tableh3">ব্যাটারি চালিত ইজিবাইক মালিক লাইসেন্স</h3>--}}
                        </td>
                        <td class="text-center bd" width="250" >

                                <table>
                                    <thead>
                                    <tr>
                                        <th>আদায় বিবরণ</th>
                                        <th>টাকা</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <th>ফি</th>
                                        <th>{{ $license->licence_renew_fee == null ? '' : $numto->bnNum($license->licence_renew_fee)}}</th>
                                    </tr>
                                    <tr>
                                        <th>চার্জ</th>
                                        <th>০০.০০</th>
                                    </tr>
                                    <tr>
                                        <th>বিবিধ</th>
                                        <th>০০.০০</th>
                                    </tr>
                                    <tr>
                                        <th>মোট</th>
                                        <th>{{ $license->licence_renew_fee == null ? '' : $numto->bnNum($license->licence_renew_fee)}}</th>
                                    </tr>
                                    </tbody>

                                </table>


                        </td>
                    </tr>
                </table>
            </div>
            <div class="row license-details">
                <div class="col-md-6 first">
                    <table id="chandpur-header" align="left">
                        <tr>
                            <th>লাইসেন্স/পরিচিতি নং:</th>
                            <td>{{$license->licence_number}}</td>
                        </tr>
                        <tr>
                            <th>প্রোপাইটর মালিকঃ</th>
                            <td>{{$license->licence_owner_name}}</td>
                        </tr>
                        <tr>
                            <th>পিতা/স্বামীর নামঃ</th>
                            <td>{{$license->father_name}}</td>
                        </tr>

                        <tr>
                            <th>মাতার নামঃ</th>
                            <td>{{$license->mother_name}}</td>
                        </tr>

                        <tr>
                            <th>স্থায়ী ঠিকানাঃ</th>
                            <td>{{$license->permanent_address}}</td>
                        </tr>

                        <tr>
                            <th>বর্তমান ঠিকানাঃ</th>
                            <td>{{$license->present_address}}</td>
                        </tr>

                    </table>
                </div>
                <div class="col-md-6 second">
                    <table id="chandpur-header" >
                        <tr>
                            <th>গ্রাহকের মোবাইল নম্বরঃ</th>
                            <td>{{$license->mobile_number}}</td>
                        </tr>

                        <tr>
                            <th>গ্রাহক ধরণঃ</th>
                            <td>{{ $license->license_type == 1 ? 'ইজিবাইক/অটোবাইক লাইসেন্স' : ''}}
                                {{ $license->license_type == 2 ? 'ড্রাইভিং লাইসেন্স' : '' }}</td>
                        </tr>

                        <tr>
                            <th>ইস্যুর ধরণঃ</th>
                            <td>{{ $license->license_type == 1 ? 'ইজিবাইক/অটোবাইক লাইসেন্স' : ''}}
                                {{ $license->license_type == 2 ? 'ড্রাইভিং লাইসেন্স' : '' }}</td>
                        </tr>

                        <tr>
                            <th>ইস্যুর তারিখঃ</th>
                            <td>{{ bangla_date(time(),"en") }}</td>
                        </tr>

                        <tr>
                            <th>অর্থ বছরঃ</th>
                            <td>{{$license->paid_fiscal_year}}</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="row license-expire">
                <h3>এই লাইসেন্সের মেয়াদ ২০২৩ সালের ৩০ জুন পর্যন্ত বলবৎ থাকবে ।</h3>
            </div>

        </div>

        <div class="row header-row" style="width: 100%;">
                <table class="lokkirpur-table verify" width="100%">
                    <tr >
                        <td width="33%" class="first-child" align="left">
                            <p>সহকারী লাইসেন্স পরিদর্শক</p>
                            <h4 style="font-weight: normal; ">লক্ষ্মীপুর পৌরসভা, লক্ষ্মীপুর</h4>
                        <td  width="33%" class="second-child" align="center">
                            <p>লাইসেন্স পরিদর্শক</p>
                            <h4 style="font-weight: normal; ">লক্ষ্মীপুর পৌরসভা, লক্ষ্মীপুর</h4>
                        </td>
                        <td  width="33%" class="third-child" align="right">
                            <p>মেয়র</p>
                            <h4 style="font-weight: normal;  " >লক্ষ্মীপুর পৌরসভা, লক্ষ্মীপুর</h4>
                        </td>
                    </tr>
                </table>
            </div>

        <div class="row rules">
            <nav >
                <ol style="color: red; font-size: 11px">
                    <li> ব্যাটারি চালিত ইজিবাইক পরিচিতই নম্বর কার্ডটি হস্তান্তরযোগ্য নহে । </li>
                    <li> লাইসেন্স পরিচিতপত্র মালিক নিজ দায়িত্বে সংরক্ষন বা হেফাজত করিবেন। যদি হারিয়ে যায় বা নষ্ট হয়ে যায় তাহলে সঙ্গে সঙ্গে নিকটস্থ থানায় ডাইরি করে ডাইরির অনুলিপি পৌর কর্তৃপক্ষকে অবহিত করতে হবে, কর্তৃপক্ষের অনুমতিক্রমে নির্ধারিত ফিস জমা সাপেক্ষে তা গ্রহন করতে হবে।  </li>
                    <li> ইজিবাইকের ফিটনেস ভাল থাকতে হবে এবং চরিত্রবান ও সুসাস্থের অধিকারী চালক দ্বারা পৌরসভা কর্তৃক নির্ধারিত ভাড়ায় চালাতে হবে। </li>
                    <li> গাড়ির মালিক হস্তান্তরের ৭ দিনের মধ্যে পরিবর্তন হবে। </li>
                    <li> পৌরসভায় অনুমোদন ব্যাতীত কোন লইখনী ইজিবাইকের গায়ে থাকবে না। </li>
                    <li> প্রতি বছর ৩১ জুলাইয়ের মধ্যে লাইসেন্স নবায়ন করতে হবে। </li>
                    <li> লাইসেন্স/পরিচিতি পৌর কর্তৃপক্ষ যে কোন সময় পরিবর্তন বা বাতিল করার ক্ষমতা সংরক্ষন করেন। </li>
                    <li> কমপক্ষে ১৮ বছরের নিচে কেউ গাড়ি চালাতে পারবে না। </li>
                </ol>

                <div class="warning">
                   <h4>"উল্লেখ্য যে ইজিবাইকের মালিক কর্তৃক অপরাধ মূলক কার্যক্রম সংঘটিত হলে তার দায়িত্ব মালিক নিজ দায়িত্বে বহন করবেন। পৌরসভা এর দায়ভার বহন করবে না।"</h4>
                </div>

            </nav>
        </div>

        <div class="row header-row">
            <table class="lokkirpur-table" style="width: 100%;">
                <tr>
                    <td width="32%" align="left">
                        <p>Powered By: CusBD</p>

                    <td  width="32%" align="center">

                    </td>
                    <td  width="32%" align="right">
                        <p>জরুরী হটলাইনঃ ০১৭৩৭-১৩৬৭০০</p>
                    </td>
                </tr>
            </table>
        </div>





    </div>
</section>

</body>
</html>
