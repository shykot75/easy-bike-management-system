@extends('master.master')

@section('title')
    Administrator Dashboard | ডিজিটাল ইজিবাইক লাইসেন্স ম্যানেজমেন্ট সিস্টেম
@endsection

@section('body')

    <section class="home py-3" style="background: #d9ffdab3; ">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between px-2">

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">ড্যাশবোর্ড</a></li>
                            <li class="breadcrumb-item active">হোম</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="font-weight-bold">ইজিবাইক/অটোবাইক লাইসেন্স</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #237AD5; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body" >
                                    <p class=" font-weight-medium font-size-20"> <a href="{{route('list.easybike')}}" class="text-white">নতুন আবেদন</a> </p>

                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($easyLicense)  }}</h4>

                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                       <i class="fa fa-users font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #27ae60; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-20"> <a href="{{route('list.easybike')}}" class="text-white">মোট লাইসেন্স</a> </p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($easyLicense)  }}</h4>
                                </div>
                                <div class="align-self-center ">
                                    <span class="">
                                           <i class="fa fa-users font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #C65714; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-20"><a href="" class="text-white">নবায়ন(২০২১-২০২২)</a></p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">০</h4>
                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                            <i class="fa fa-users font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #8e44ad; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-20"> <a href="" class="text-white">বিতরণকৃত প্লেট</a> </p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">০</h4>
                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                            <i class="fa fa-users font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="font-weight-bold">ড্রাইভিং লাইসেন্স</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #237AD5; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body" >
                                    <p class=" font-weight-medium font-size-20"> <a href="{{route('list.drivinglicense')}}" class="text-white">নতুন আবেদন</a> </p>

                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($drivingLicense)  }}</h4>

                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                           <i class="fa fa-users font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #27ae60; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-20"> <a href="{{route('list.drivinglicense')}}" class="text-white">মোট লাইসেন্স</a> </p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">{{ $numto->bnNum($drivingLicense)  }}</h4>
                                </div>
                                <div class="align-self-center ">
                                    <span class="">
                                            <i class="fa fa-users font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #C65714; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-20"><a href="" class="text-white">নবায়ন(২০২১-২০২২)</a></p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">০</h4>
                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                           <i class="fa fa-users font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mini-stats-wid" style="background: #8e44ad; color: #FFF;">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-weight-medium font-size-20"> <a href="" class="text-white">বিতরণকৃত প্লেট</a> </p>
                                    <h4 class="mb-0 mt-0 text-white font-weight-medium font-size-24">০</h4>
                                </div>

                                <div class="align-self-center ">
                                    <span class="">
                                           <i class="fa fa-users font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>














@endsection
