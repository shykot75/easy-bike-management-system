<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>বিল ভাউচার</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        body {
            font-family: 'solaimanlipi', Arial, sans-serif !important;
            width: 90%;
            margin: 20px auto;
        }
        .invoice .copy {
            width: 10%;
            align-items: end;
            justify-content: end;
            horiz-align: right;
            display: grid;

        }
        .invoice .copy p {
            background: #a4d0f8;
            padding: 5px 8px;
        }
        .invoice .container {
            width: 90%;
            margin: auto;
            height: 100vh;
            display: block;
            position: relative;
        }
        .bgl::before {
            content: '';
            background-image: url("{{asset('/img/vs_logo.png')}}");
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            background-position: center;
            background-size: 500px;
            background-repeat: no-repeat;
            opacity: 0.10;
        }
        .first-row table td {
            padding: 0px 10px;
        }
        .lokkirpur-table h2 {
            font-size: 46px;
            color: red;
        }
        .lokkirpur-table p {
            text-align: center;
        }

        .license-type {
            padding: 40px;
        }

        .license-type h3 {
            text-align: center;
            background: red;
            color: #FFF;
            font-weight: normal;
            padding: 5px 8px;
            border-radius: 2px;
            /*display: inline-block;*/
            /*align-items: center;*/
            /*justify-content: center;*/
            /*position: absolute;*/
        }
    </style>

</head>
<body>

<section class="invoice">
    <div class="container">

        <div class="row copy">
            <p >ব্যাংক কপি</p>
        </div>

        <div class="row first-row">
            <table class="lokkirpur-table" align="center">
                <tr>
                    <td width="130" >
                        <img class="bn_govt_logo " src="{{asset('/')}}img/vs_logo.png" width="120px"/>
                    <td class='text-center'>
                        <h2><b>লক্ষ্মীপুর পৌরসভা</b></h2>
                        <p> <b>LAKSHMIPUR MUNICIPALITY</b>&nbsp;</p>
                    </td>
                    <td class='text-center' width="150">
                        <img class="" src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(100)->generate(url('').'/eblms/qr-code/') ) }}" alt="">
                    </td>
                </tr>
            </table>
        </div>

        <div class="bgl"></div>

        <div class="row license-type">
            <table class="type" align="center">
                <td><h3>ইজিবাইক/অটোবাইক লাইসেন্স</h3></td>
            </table>
        </div>

        <div class="row content-row">

        </div>



    </div>

















</section>











<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
