@extends('master.master')

@section('title')
   বিল ইস্যু | ডিজিটাল ইজিবাইক লাইসেন্স ম্যানেজমেন্ট সিস্টেম
@endsection

@section('body')

    <section class="new-license-add px-3 " style="background: #d9ffdab3; border: 2px solid #2FCC8E; ">

        <!-- start page title -->
        <div class="row">
            <div class="col-12 py-1">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">ড্যাশবোর্ড</a></li>
                            <li class="breadcrumb-item active">বিল ইস্যু</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" >
                    <h4 style="background: #2FCC8E;" class="text-white py-2 px-3 mb-4">বিল ইস্যু করুন</h4>
                    <p class="text-center text-success font-size-20">{{Session::get('message')}}</p>

                    <form action="{{route('receipt.bill')}}" method="POST" >
                        @csrf
                        <div class="row py-2" >

                            <!---- first-half starts---->
                            <div class="col-md-6 first-half" >

                                <div class="form-group row mb-4">
                                    <label for="license_mode" class="col-md-3 col-form-label">লাইসেন্স স্ট্যাটাস<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <select name="license_mode" class="form-control" id="license_mode"  data-size="10" data-live-search="true" data-style="btn-white" required>
                                            <option value="" disabled selected>-বাছাই করুন-</option>
                                            <option value="new">নতুন লাইসেন্স</option>

                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label for="license_type" class="col-md-3 col-form-label">লাইসেন্স ধরণ<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <select name="license_type" class="form-control dynamic" id="license_type" data-dependent="license_number" data-size="10" data-live-search="true" data-style="btn-white" required>
                                            <option value=""  selected>-বাছাই করুন-</option>
                                            <option value="1">ইজিবাইক/অটোবাইক লাইসেন্স</option>
                                            <option value="2">ড্রাইভিং লাইসেন্স</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="license_number" class="col-md-3 col-form-label">লাইসেন্স নম্বর<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <select name="licence_number" class="form-control dynamic js-example-basic-single" id="licence_number" data-size="10" data-live-search="true" data-style="btn-white" required>
                                            <option value=""  selected>-বাছাই করুন-</option>

                                        </select>
                                    </div>
                                </div>







                                <div class="form-group row justify-content-end">
                                    <div class="col-md-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md "  style="letter-spacing: 2px;">বিল ইস্যু করুন</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!---- first-half ends---->
                            <!---- second-half starts---->
                            <div class="col-md-6 second-half"></div>
                            <!---- second-end ends---->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <script src="{{asset('/')}}js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript">
        $(document).ready(function(){

            $('select[name="license_type"]').on('change',function(){
                var license_type = $(this).val();
                if (license_type) {

                    $.ajax({
                        url: "{{ url('/bill-issue/fetch/') }}/"+license_type,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="licence_number"]').empty();
                            $.each(data, function(key, value){

                                $('select[name="licence_number"]').append('<option value="'+ value.licence_number + '">' + value.licence_owner_name + ' - ' + value.licence_number + '</option>');


                            });
                        },
                    });
                }else{
                    alert('danger');
                }
            });

            $('.js-example-basic-single').select2();


        });
    </script>




















@endsection
