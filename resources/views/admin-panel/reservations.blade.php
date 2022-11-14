@extends('partials.admin-panel.layout')
@section('title', 'الحجوزات')
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
                            <h2 class="content-header-title float-start mb-0">الحجوزات</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">الحجوزات
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
                                    <table class="datatables-basic table">
                                        <thead>
                                            <tr>
                                                <th>رقم الحجز</th>
                                                <th>اسم العميل</th>
                                                <th>السعر</th>
                                                <th>التاريخ</th>
                                                <th>الحالة</th>
                                                <th>تحكم</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1523652</td>
                                                <td> محمد على</td>
                                                <td> 1000 ريال </td>
                                                <td> <span class="badge bg-success"> 21-10-2022 الى 21-11-2022</span>
                                                </td>
                                                <td><span class="badge bg-dark"> نشط</span></td>

                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="javascript:;" class="item-edit" data-bs-target="#editUser"
                                                            data-bs-toggle="modal">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button class="btn item-edit" style="padding:0;color:#EA5455 ">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new record -->

                    </section>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->
                <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">تفاصيل الحجز</h1>
                                </div>
                                <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserFirstName">اسم العميل</label>
                                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                            class="form-control" placeholder="اسم العميل"
                                            data-msg="برجاء ادخال اسم العميل" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserLastName">السعر</label>
                                        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                            class="form-control" placeholder="السعر" data-msg="برجاء ادخال السعر" />
                                    </div>

                                    <div class="col-12 col-md-6 ">
                                        <label class="form-label" for="fp-range">التاريخ</label>
                                        <input type="text" id="fp-range" class="form-control flatpickr-range"
                                            placeholder="YYYY-MM-DD to YYYY-MM-DD" />
                                    </div>


                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserEmail">ملاحظات:</label>
                                        <textarea class="form-control" id="notes" rows="3" placeholder="ملاحظات"></textarea>
                                    </div>

                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" class="btn btn-primary btn-submit me-1"
                                            id="type-success">حفظ</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            الغاء
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
