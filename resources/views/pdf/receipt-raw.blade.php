<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>বিল ভাউচার</title>
    <style>
        body {
            font-family: 'solaimanlipi', Arial, sans-serif !important; width: 100%; background: #dfe6e9;
        }
        .receipt .copy {
            width: 15%; text-align: center; align-items: end; justify-content: end; horiz-align: right; display: grid; overflow:hidden;  padding-top: 10px;
        }
        .header-row td{
            padding: 0px 15px !important;
        }
        .receipt .container{
            width: 100% !important; margin: auto !important; height: 600px !important; display: block !important; position: relative !important;
        }
        .bg-area {
            background-image:  url("{{asset('/img/receit-bg.png')}}"); background-repeat: no-repeat; background-position: center;
        }
        .license-type {
            padding: 50px 55px 100px 55px !important; font-family: 'solaimanlipi', Arial, sans-serif !important;
        }
        .receipt .license-type {
            width: 30%; margin: auto; text-align: center; align-items: center; justify-content: center; horiz-align: center; display: grid; overflow:hidden;
        }
        .license-details {
            width: 100%; overflow: hidden;
        }
        .col-md-6 {
            width: 48%; float: left; overflow: hidden; margin: 0 1%;
        }
        .col-md-6 table th {
            text-align: right; padding-top: 8px; padding-bottom: 8px;
        }
        .col-md-6 table td {
            padding-top: 8px; padding-bottom: 8px; padding-left: 20px;
        }
        .footer {
            margin-top: 150px;
        }

    </style>
</head>
<body>
<section class="receipt">
    <div class="container">
        <div class="row copy">
            <p style="background: #a4d0f8 !important; padding: 8px !important; border-radius: 2px;">ব্যাংক কপি</p>
        </div>
        <div class="row header-row">
            <table class="lokkirpur-table" align="center">
                <tr>
                    <td width="130" >
                        <img class="bn_govt_logo " src="{{asset('/')}}img/vs_logo.png" width="120px"/>
                    <td class='text-center'>
                        <h2 style="color: red; font-size: 40px;"><b>লক্ষ্মীপুর পৌরসভা</b></h2>
                        <p style="text-align: center; margin: auto; font-size: 16px; align-items: center; justify-content: center; horiz-align: center;"><b>LAKSHMIPUR MUNICIPALITY</b>&nbsp;</p>
                    </td>
                    <td class='text-center' width="150">
                        <img class="" src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(100)->backgroundColor(223, 230, 233)->generate(url('').'/eblms/qr-code/'.$license->id) ) }}" alt="">
                    </td>
                </tr>
            </table>
        </div>
        <div class="bg-area">
            <div class="row license-type" id="license-type">
                <h3 style=" font-family: 'solaimanlipi', Arial, sans-serif; text-align: center; background: #000000; color: #ffffff; font-weight: normal;  padding: 5px 8px; border-radius: 50px;   "  >
                    গাড়ির নিবন্ধন বিল
                </h3>
            </div>
            <div class="row license-details">
                <div class="col-md-6">
                    <table id="chandpur-header" >
                        <tr>
                            <th>লাইসেন্স নম্বরঃ</th>
                            <td>{{$license->licence_number}}</td>
                        </tr>
                        <tr>
                            <th>গ্রাহকের নামঃ</th>
                            <td>{{$license->licence_owner_name}}</td>
                        </tr>
                        <tr>
                            <th>পিতা/স্বামীর নামঃ</th>
                            <td>{{$license->father_name}}</td>
                        </tr>
                        <tr>
                            <th>লাইসেন্স/নবায়ণ ফিঃ</th>
                            <td>{{ $license->licence_renew_fee == null ? '' : $numto->bnNum($license->licence_renew_fee)}}</td>
                        </tr>
                        <tr>
                            <th>বিকল্প লাইসেন্স ফিঃ</th>
                            <td>00.00</td>
                        </tr>
                        <tr>
                            <th>লাইসেন্স নাম পরিবর্তন ফিঃ</th>
                            <td>00.00</td>
                        </tr>
                        <tr>
                            <th>সারচার্জঃ</th>
                            <td>00.00</td>
                        </tr>
                        <tr>
                            <th>মোটঃ</th>
                            <td>{{ $license->licence_renew_fee == null ? '' : $numto->bnNum($license->licence_renew_fee)}}</td>
                        </tr>
                        <tr>
                            <th>মোট টাকা কথায়ঃ</th>
                            <td>{{ $numto->bnMoney( $license->licence_renew_fee) }} মাত্র</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table id="chandpur-header" >
                        <tr>
                            <th>বিল নম্বরঃ</th>
                            <td>{{$license->licence_number}}</td>
                        </tr>
                        <tr>
                            <th>অর্থ বছরঃ</th>
                            <td>{{$license->paid_fiscal_year}}</td>
                        </tr>
                        <tr>
                            <th>ইস্যুর তারিখঃ</th>
                            <td>{{ bangla_date(time(),"en") }}</td>
                        </tr>
                        <tr>
                            <th>পরিশোধের শেষ তারিখঃ</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>বিলের ধরণঃ</th>
                            <td>{{ $license->license_type == 1 ? 'ইজিবাইক/অটোবাইক লাইসেন্স' : ''}}
                                {{ $license->license_type == 2 ? 'ড্রাইভিং লাইসেন্স' : '' }}</td>
                        </tr>
                        <tr>
                            <th>গ্রাহকের মোবাইল নম্বরঃ</th>
                            <td>{{$license->mobile_number}}</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>বিল প্রস্তুতকারী</th> <br>
                            <td><hr></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row header-row footer">
            <table class="lokkirpur-table" >
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
<section class="receipt">
    <div class="container">
        <div class="row copy">
            <p style="background: #e74c3c !important; padding: 8px !important; color: #ffffff; border-radius: 2px;">গ্রাহক কপি</p>
        </div>
        <div class="row header-row">
            <table class="lokkirpur-table" align="center">
                <tr>
                    <td width="130" >
                        <img class="bn_govt_logo " src="{{asset('/')}}img/vs_logo.png" width="120px"/>
                    <td class='text-center'>
                        <h2 style="color: red; font-size: 40px;"><b>লক্ষ্মীপুর পৌরসভা</b></h2>
                        <p style="text-align: center; margin: auto; font-size: 16px; align-items: center; justify-content: center; horiz-align: center;"><b>LAKSHMIPUR MUNICIPALITY</b>&nbsp;</p>
                    </td>
                    <td class='text-center' width="150">
                        <img class="" src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(100)->backgroundColor(223, 230, 233)->generate(url('').'/eblms/qr-code/'.$license->id) ) }}" alt="">
                    </td>
                </tr>
            </table>
        </div>
        <div class="bg-area">
            <div class="row license-type" id="license-type">
                <h3 style=" font-family: 'solaimanlipi', Arial, sans-serif; text-align: center; background: #000000; color: #ffffff; font-weight: normal;  padding: 5px 8px; border-radius: 50px;   "  >
                     গাড়ির নিবন্ধন বিল
                </h3>
            </div>
            <div class="row license-details">
                <div class="col-md-6">
                    <table id="chandpur-header" >
                        <tr>
                            <th>লাইসেন্স নম্বরঃ</th>
                            <td>{{$license->licence_number}}</td>
                        </tr>
                        <tr>
                            <th>গ্রাহকের নামঃ</th>
                            <td>{{$license->licence_owner_name}}</td>
                        </tr>
                        <tr>
                            <th>পিতা/স্বামীর নামঃ</th>
                            <td>{{$license->father_name}}</td>
                        </tr>
                        <tr>
                            <th>লাইসেন্স/নবায়ণ ফিঃ</th>
                            <td>{{ $license->licence_renew_fee == null ? '' : $numto->bnNum($license->licence_renew_fee)}}</td>
                        </tr>
                        <tr>
                            <th>বিকল্প লাইসেন্স ফিঃ</th>
                            <td>00.00</td>
                        </tr>
                        <tr>
                            <th>লাইসেন্স নাম পরিবর্তন ফিঃ</th>
                            <td>00.00</td>
                        </tr>
                        <tr>
                            <th>সারচার্জঃ</th>
                            <td>00.00</td>
                        </tr>
                        <tr>
                            <th>মোটঃ</th>
                            <td>{{ $license->licence_renew_fee == null ? '' : $numto->bnNum($license->licence_renew_fee)}}</td>
                        </tr>
                        <tr>
                            <th>মোট টাকা কথায়ঃ</th>
                            <td>{{ $numto->bnMoney( $license->licence_renew_fee) }} মাত্র</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table id="chandpur-header" >
                        <tr>
                            <th>বিল নম্বরঃ</th>
                            <td>{{$license->licence_number}}</td>
                        </tr>
                        <tr>
                            <th>অর্থ বছরঃ</th>
                            <td>{{$license->paid_fiscal_year}}</td>
                        </tr>
                        <tr>
                            <th>ইস্যুর তারিখঃ</th>
                            <td>{{ bangla_date(time(),"en") }}</td>
                        </tr>
                        <tr>
                            <th>পরিশোধের শেষ তারিখঃ</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>বিলের ধরণঃ</th>
                            <td>{{ $license->license_type == 1 ? 'ইজিবাইক/অটোবাইক লাইসেন্স' : ''}}
                                {{ $license->license_type == 2 ? 'ড্রাইভিং লাইসেন্স' : '' }}</td>
                        </tr>
                        <tr>
                            <th>গ্রাহকের মোবাইল নম্বরঃ</th>
                            <td>{{$license->mobile_number}}</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>বিল প্রস্তুতকারী</th> <br>
                            <td><hr></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row header-row footer">
            <table class="lokkirpur-table" >
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
<section class="receipt">
    <div class="container">
        <div class="row copy">
            <p style="background: #9b59b6 !important; padding: 8px !important; color: #ffffff; border-radius: 2px;">অফিস কপি</p>
        </div>
        <div class="row header-row">
            <table class="lokkirpur-table" align="center">
                <tr>
                    <td width="130" >
                        <img class="bn_govt_logo " src="{{asset('/')}}img/vs_logo.png" width="120px"/>
                    <td class='text-center'>
                        <h2 style="color: red; font-size: 40px;"><b>লক্ষ্মীপুর পৌরসভা</b></h2>
                        <p style="text-align: center; margin: auto; font-size: 16px; align-items: center; justify-content: center; horiz-align: center;"><b>LAKSHMIPUR MUNICIPALITY</b>&nbsp;</p>
                    </td>
                    <td class='text-center' width="150">
                        <img class="" src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(100)->backgroundColor(223, 230, 233)->generate(url('').'/eblms/qr-code/'.$license->id) ) }}" alt="">
                    </td>
                </tr>
            </table>
        </div>
        <div class="bg-area">
            <div class="row license-type" id="license-type">
                <h3 style=" font-family: 'solaimanlipi', Arial, sans-serif; text-align: center; background: #000000; color: #ffffff; font-weight: normal;  padding: 5px 8px; border-radius: 50px;   "  >
                    গাড়ির নিবন্ধন বিল
                </h3>
            </div>
            <div class="row license-details">
                <div class="col-md-6">
                    <table id="chandpur-header" >
                        <tr>
                            <th>লাইসেন্স নম্বরঃ</th>
                            <td>{{$license->licence_number}}</td>
                        </tr>
                        <tr>
                            <th>গ্রাহকের নামঃ</th>
                            <td>{{$license->licence_owner_name}}</td>
                        </tr>
                        <tr>
                            <th>পিতা/স্বামীর নামঃ</th>
                            <td>{{$license->father_name}}</td>
                        </tr>
                        <tr>
                            <th>লাইসেন্স/নবায়ণ ফিঃ</th>
                            <td>{{ $license->licence_renew_fee == null ? '' : $numto->bnNum($license->licence_renew_fee)}}</td>
                        </tr>
                        <tr>
                            <th>বিকল্প লাইসেন্স ফিঃ</th>
                            <td>00.00</td>
                        </tr>
                        <tr>
                            <th>লাইসেন্স নাম পরিবর্তন ফিঃ</th>
                            <td>00.00</td>
                        </tr>
                        <tr>
                            <th>সারচার্জঃ</th>
                            <td>00.00</td>
                        </tr>
                        <tr>
                            <th>মোটঃ</th>
                            <td>{{ $license->licence_renew_fee == null ? '' : $numto->bnNum($license->licence_renew_fee)}}</td>
                        </tr>
                        <tr>
                            <th>মোট টাকা কথায়ঃ</th>
                            <td>{{ $numto->bnMoney( $license->licence_renew_fee) }} মাত্র</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table id="chandpur-header" >
                        <tr>
                            <th>বিল নম্বরঃ</th>
                            <td>{{$license->licence_number}}</td>
                        </tr>
                        <tr>
                            <th>অর্থ বছরঃ</th>
                            <td>{{$license->paid_fiscal_year}}</td>
                        </tr>
                        <tr>
                            <th>ইস্যুর তারিখঃ</th>
                            <td>{{ bangla_date(time(),"en") }}</td>
                        </tr>
                        <tr>
                            <th>পরিশোধের শেষ তারিখঃ</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>বিলের ধরণঃ</th>
                            <td>{{ $license->license_type == 1 ? 'ইজিবাইক/অটোবাইক লাইসেন্স' : ''}}
                                {{ $license->license_type == 2 ? 'ড্রাইভিং লাইসেন্স' : '' }}</td>
                        </tr>
                        <tr>
                            <th>গ্রাহকের মোবাইল নম্বরঃ</th>
                            <td>{{$license->mobile_number}}</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>বিল প্রস্তুতকারী</th> <br>
                            <td><hr></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row header-row footer">
            <table class="lokkirpur-table" >
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
