@extends('partials.admin-panel.layout')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">ارسال الرسالة</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">ارسال الرسالة
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">

                    <!-- list and filter start -->
                    <section id="basic-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h2>إرسال الرسالة</h2>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-center pt-2 clear">


                                            <div class="col-md-4">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="checked" checked />
                                                <label class="form-check-label" for="inlineCheckbox1">العملاء</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="checked" />
                                                <label class="form-check-label" for="inlineCheckbox1">المكاتب</label>

                                            </div>
                                            <div class="col-md-4">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="checked" />
                                                <label class="form-check-label" for="inlineCheckbox1">المسوقين</label>

                                            </div>

                                        </div>
                                        <div class="col-12">


                                            <div class="d-flex justify-content-center pt-2 clear">

                                                <textarea id="txtarea" class="form-control" id="notes" rows="3" placeholder="محتوى الرسالة"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">

                                                <h5 id="count">0/255</h5>
                                            </div>
                                            <div class="col-2">

                                                <h5 id="countSMS">عدد الرسائل : 0</h5>

                                            </div>
                                        </div>


                                        <div class="info-container">

                                            <div class="d-flex justify-content-center pt-2 clear">
                                                <a href="javascript:;" class="btn btn-success me-1"
                                                    data-bs-target="#editUser" data-bs-toggle="modal">
                                                    إرسال الرسالة
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- Modal to add new record -->

            <!-- add new address modal -->
            </section>
            <!-- list and filter end -->
            </section>
            <!-- users list ends -->

        </div>
    </div>

    <!-- END: Content-->
@endsection
