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
                            <h2 class="content-header-title float-start mb-0">المستخدمين</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">المستخدمين
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="{{ route('panel.create.user.info') }}" class="btn btn-primary"><span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus me-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>انشاء مستخدم جديدة</span></a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">21,459</h3>
                                        <span>عدد المسوقين</span>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">4,567</h3>
                                        <span>عدد الإدارة</span>
                                    </div>
                                    <div class="avatar bg-light-danger p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user-plus" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">19,860</h3>
                                        <span>عدد المكاتب</span>
                                    </div>
                                    <div class="avatar bg-light-success p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user-check" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">237</h3>
                                        <span>عدد المسوقين</span>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user-x" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list and filter start -->
                    <section id="basic-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <table class="datatables-basic table">
                                        <thead>
                                            <tr>
                                                <th>الاسم</th>
                                                <th>رقم الجوال</th>
                                                <th>نوع المستخدم</th>
                                                <th>الحالة</th>
                                                <th>الفرع</th>
                                                <th>تحكم</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>علي التاروتي</td>
                                                <td>0597555447</td>
                                                <td><span class="badge bg-danger"> مدير</span></td>
                                                <td><span class="badge bg-success">نشط</span></td>
                                                <td>مكة</td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="{{ route('panel.edit.user') }}" class="item-edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button class="btn item-edit" style="padding:0;color:#EA5455 ">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>محمد احمد</td>
                                                <td>0900000</td>
                                                <td><span class="badge bg-warning"> مكتب</span></td>
                                                <td><span class="badge bg-success">نشط</span></td>
                                                <td>مكة</td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="{{ route('panel.edit.user') }}" class="item-edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button class="btn item-edit" style="padding:0;color:#EA5455 ">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>محمد احمد</td>
                                                <td>0900000</td>
                                                <td><span class="badge bg-info"> مسوق</span></td>
                                                <td><span class="badge bg-success">نشط</span></td>
                                                <td>مكة</td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="{{ route('panel.edit.user') }}" class="item-edit">
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

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
