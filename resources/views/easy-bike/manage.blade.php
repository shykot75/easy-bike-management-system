@extends('master.master')

@section('title')
    ইজিবাইক/অটোবাইইক তালিকা | ডিজিটাল ইজিবাইক লাইসেন্স ম্যানেজমেন্ট সিস্টেম
@endsection


@section('body')

    <div class="new-license-manage " >
        <!-- start page title -->
        <div class="row ">
            <div class="col-12 py-0 my-0">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">ড্যাশবোর্ড</a></li>
                            <li class="breadcrumb-item">লাইসেন্সধারী</li>
                            <li class="breadcrumb-item active">ইজিবাইক/অটোবাইইক লাইসেন্সধারীর তালিকা</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12 py-0 my-0">
                <div class="card">
                    <div class="card-body">
                        <p class="text-center text-success font-size-20">{{Session::get('message')}}</p>

                        <div class="panel-body">
                            <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                                <thead>
                                <tr>

                                    <th class="text-nowrap">ক্রমিক</th>
                                    <th style="width: 50px!important;" class="text-nowrap">লাইসেন্স নং</th>
                                    <th class="text-nowrap">লাইসেন্সধারীর তথ্য</th>
                                    <th class="text-nowrap">ঠিকানা</th>
                                    <th class="text-nowrap">স্ট্যাটাস</th>
                                    <th class="text-nowrap">লাইসেন্স ধরণ</th>
                                    <th style="width: 80px!important;" class="text-nowrap">অ্যাকশান</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($easybikes as $license)
                                    <tr class="odd gradeX">
                                        <td>{{ $loop->iteration }}</td>
                                        <td style="width: 50px!important;">{{$numto->bnNum($license->licence_number)}}</td>
                                        <td>
                                            <b>নামঃ</b> {{$license->licence_owner_name}} <br>
                                            <b>পিতা/স্বামীঃ</b> {{$license->father_name}} <br>
                                            <b>মাতাঃ</b> {{$license->mother_name}}
                                        </td>
                                        <td>{{$license->present_address}}</td>
                                        <td>{{$license->status == 1 ? 'সক্রিয়' : 'নিষ্ক্রিয়'}}</td>
                                        <td>
                                            {{$license->license_type == 1 ? 'ইজিবাইক/অটোবাইক লাইসেন্স' : ''}}
                                            {{$license->license_type == 2 ? 'ড্রাইভিং লাইসেন্স' : ''}}

                                        </td>

                                        <td>

                                            {{--                                            <a href="{{route('holdingStatus.update', ['id' => $license->id])}}" class="btn btn-sm {{$license->holding_plate_status == 1 ? 'btn-primary' : 'btn-warning'}} " title="{{$license->holding_plate_status == 1 ? 'হোল্ডিং প্লেট বাতিল করুন' : 'হোল্ডিং প্লেট বিতরণ করুন'}}">--}}
                                            {{--                                                <i class="{{$license->holding_plate_status == 1 ? 'fa fa-arrow-up' : 'fa fa-arrow-down'}} font-size-10 "></i>--}}
                                            {{--                                            </a>--}}
                                            {{--                                            <a href="" class="btn btn-sm btn-warning" title="">--}}
                                            {{--                                                <i class="fa fa-arrow-up font-size-10 "></i>--}}
                                            {{--                                            </a>--}}

                                            <a href="{{route('license.showNew', ['id' => $license->id])}}" class="btn btn-info btn-sm " title="বিস্তারিত">
                                                <i class="fa fa-eye font-size-10"></i>
                                            </a>

                                            <a href="{{route('license.editNew', ['id' => $license->id])}}" class="btn btn-success btn-sm " title="সম্পাদনা">
                                                <i class="fa fa-edit font-size-10"></i>
                                            </a>
                                            <a href="" onclick="deleteLicenser({{$license->id}})" class="btn btn-danger btn-sm" title="মুছে ফেলুন">
                                                <i class="fa fa-trash font-size-10"></i>
                                            </a>
                                            <form action="{{route('license.deleteNew', ['id' => $license->id])}}" method="POST" id="deleteLicenser{{$license->id}}">
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>

    <script>

        function deleteLicenser(id) {
            event.preventDefault();
            var check = confirm('Are You Sure To DELETE This License Holder?');

            if(check){
                document.getElementById('deleteLicenser'+id).submit();
            }


        }


        var options = {
            dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex me-0 me-md-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-md-5"i><"col-md-7"p>>>',
            buttons: [
                { extend: 'copy', className: 'btn-sm' },
                { extend: 'csv', className: 'btn-sm' },
                { extend: 'excel', className: 'btn-sm' },
                { extend: 'pdf', className: 'btn-sm' },
                { extend: 'print', className: 'btn-sm' }
            ],
            responsive: true,
            colReorder: true,
            keys: true,
            rowReorder: true,
            select: true
        };

        if ($(window).width() <= 767) {
            options.rowReorder = false;
            options.colReorder = false;
        }
        $('#data-table-combine').DataTable(options);
    </script>

@endsection
