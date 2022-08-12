<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | ডিজিটাল ইজিবাইক লাইসেন্স ম্যানেজমেন্ট সিস্টেম </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ডিজিটাল হোল্ডিং নাম্বার প্লেট ম্যানেজমেন্ট সিস্টেম" name="description" />
    <meta content="লক্ষ্মীপুর পৌরসভা" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}img/vs_logo.png">
    <!-- Font Css -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">

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


<section class="first">
    <div class="writing-side col-md-8 col-sm-6 m-0 p-0">
        <div class="logo-headline">
            <div class="container">
                <img src="{{asset('/')}}img/vs_logo.png" alt="logo" style="float: left; padding: 10px; width: 130px;" class="img-responsive">
                <span class="mt-3 font-size-20"> ডিজিটাল ইজিবাইক লাইসেন্স ম্যানেজমেন্ট সিস্টেম <br> লক্ষ্মীপুর পৌরসভা</span>
            </div>
        </div>
        <div class="meyor-lekha">
            <div class="container">
                <img src="{{asset('/')}}img/meyor.jpg" alt="logo" style="float: left; padding: 10px; width: 120px;" class="img-responsive">
                <span><b style="line-height: 2;"> লক্ষ্মীপুর পৌরসভার মেয়রের কথা </b> <br>
                        <br>
                       লক্ষ্মীপুর পৌরসভার তথ্য-প্রযুক্তির সুবিধাকে জনগণের দোরগোড়ায় পৌঁছে দেবার মানসে "ডিজিটাল ইজিবাইক লাইসেন্স ম্যানেজমেন্ট সিস্টেম" চালু হয়েছে জেনে আমি আনন্দিত। এ সফটওয়্যারটি ব্যবহারে ডিজিটাল পদ্ধতিতে পৌরসভার ইজিবাইক/অটোবাইক ও মটর রিক্সা গাড়ীর লাইসেন্স এবং তাদের ব্যক্তি ড্রাইভিং লাইসেন্স ইস্যু করা,পূর্ণাঙ্গ ডাটা বেইজ তৈরী ও সংরক্ষন, ডিজিটাল নাম্বার প্লেট তৈরী ও বিতরণ করা, গাড়ির মালিক ও ড্রাইভারদের রাস্তা চলাচলে শৃংখলা আনয়নসহ নির্দেশনামূলক এসএমএস প্রদান,গাড়িতে কিউআর কোড যুক্ত স্টীকার লাগানোর মাধ্যমে লাইসেন্সের সঠিকতা নিরুপন করা যাবে।যা এ পৌরসভা ডিজিটাল সেবাখাত হিসেবে একধাপ এগিয়ে যাবে এবং রাজস্ব আহরণ সহজিকরণ ও শতভাগ স্বচ্ছতা আনয়নে আদায় বৃদ্ধি পাবে। কাজেই সরাসরি সুফল পাওয়ায় সেবা প্রত্যাশী গাড়ির মালিক ও ড্রাইভারদের মাঝে একটি সেতু বন্ধন তৈরী হবে।এ সিস্টেমটি মাধ্যমে মাননীয় প্রধানমন্ত্রী ডিজিটাল দেশ বির্নিমানে একধাপ এগিয়ে গেলো।এই প্রয়াসের সাথে সম্পৃক্ত সকলকে আমার আন্তরিক অভিনন্দন ও ধন্যবাদ জ্ঞাপন করছি।
                    <br>
                    <br>
                    মোজাম্মেল হায়দার মাসুম ভূঁইয়া
                    <br>
                    মেয়র
                    <br>
                    লক্ষ্মীপুর পৌরসভা
                    </span>
            </div>
        </div>
    </div>



    <div class="login-side col-md-4 col-sm-6">
        <div class="welcome">
            <div class="container">
                <h3>Welcome To</h3>
                <p>Digital EasyBike License Management System</p>
            </div>
        </div>

        <div class="login-form">
            <div class="container">
                <h3 class="py-2">Sign In</h3>

                <x-jet-validation-errors class="mb-4" />


                {{--                @if (session('status'))--}}

                {{--                    <div class="mb-4 font-medium text-sm text-green-600">--}}
                {{--                        {{ session('status') }}--}}
                {{--                    </div>--}}
                {{--                @endif--}}

                <form class="form-horizontal" action="{{route('login')}}" method="POST">
                    @csrf


                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" :value="old('email')" class="form-control" id="email" placeholder="Enter Email" required />
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required >
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                        <label class="custom-control-label" for="remember_me">Remember me</label>

                    </div>

                    <div class="mt-3 ">
                        <button class="btn btn-info btn-block waves-effect waves-light font-size-18" type="submit">Log In</button>
                    </div>
                    <div class="mt-2 text-center">
                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                    </div>
                </form>

                <p class="copyright font-size-14 mt-2 font-weight-bold">Digital EasyBike License Management © All Right Reserved.</p>
                <p class="copyright font-size-14 mt-1">Design & Develop by <a href="">Shykot Hasan Shourav</a></p>


            </div>
        </div>
    </div>













</section>

























<!-- JAVASCRIPT -->
<script src="{{asset('/')}}assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}assets/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="{{asset('/')}}assets/js/app.js"></script>
</body>


</html>

