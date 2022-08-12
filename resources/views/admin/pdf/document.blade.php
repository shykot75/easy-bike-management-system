

<style>


    .first {
        height: 800px;
    }

    #chandpur-header {
        font-family: 'solaimanlipi', Arial, sans-serif !important;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>
</head>
<body>


<section class="first">
    <div class="row col-md-12 mx-auto mb-5 pt-4">
        <table id="chandpur-header" align="center">
            <tr>
                <td width="130" >
                    <img class="bn_govt_logo " src="{{asset('/')}}img/vs_logo.png" width="150px"/>
                <td class='text-center'>
                    <h1 style="font-size:52px;color:red;"><b>লক্ষ্মীপুর পৌরসভা</b></h1>
                    <b><h2 style="font-size:20px;">LAKSHMIPUR MUNICIPALITY</h2></b>&nbsp;
                </td>
                <td class='text-center' width="150">
                    <img class="" src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(120)->generate(url('').'/eblms/qr-code/'.$license->id) ) }}" alt="">
                </td>
            </tr>
        </table>
    </div>


    <div class="row col-md-9 mx-auto">

        <div class="col-md-4">
            <div class="profile-image">
                <img src="{{asset($license->image)}}" height="200" width="200"/>
            </div>
        </div>
        <div class="col-md-8">
            <h2 class="text-center text-success py-3 mx-auto">লাইসেন্সধারীর তথ্য</h2>
            <table id="chandpur-header" class="table thead-border-top-1 table table-hover mx-auto ">
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
    </div>

    <hr>
</section>




