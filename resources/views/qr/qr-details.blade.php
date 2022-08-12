<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>লাইসেন্সধারীর তথ্য | ডিজিটাল ইজিবাইক লাইসেন্স ম্যানেজমেন্ট সিস্টেম</title>

    <!-- Font Css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Custom Css-->
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>
<section class="py-2">
    <div class="qr-details col-md-6 mx-auto">

        <div class="row col-md-12 mx-auto mb-5 pt-4">
            <table id="chandpur-header" align="center">
                <tr>
                    <td width="130" >
                        <img class="bn_govt_logo" src="{{asset('/')}}img/vs_logo.png" width="100px"/>
                    <td class='text-center'>
                        <h1 style="font-size:52px;color:red;"><b>লক্ষ্মীপুর পৌরসভা</b></h1>
                        <b><h2 style="font-size:20px;">LAKSHMIPUR MUNICIPALITY</h2></b>&nbsp;
                    </td>
                    <td class='text-center' width="150">
                        <img src="{{asset($license->image)}}" height="100" width="100"/>
                    </td>
                </tr>
            </table>
        </div>


        <div class="card-title"><h3 class="text-center text-dark">লাইসেন্সধারীর তথ্য</h3></div>
        <div class="card-body col-md-11 mx-auto ">
            <table class="table thead-border-top-1 table table-hover">
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
                    <td>{{$numto->bnNum($license->licence_renew_fee)}}</td>

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
    </div>
</section>


























<!-- JAVASCRIPT -->
<script src="{{asset('/')}}assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- App js -->
<script src="{{asset('/')}}assets/js/app.js"></script>
</body>
</html>
