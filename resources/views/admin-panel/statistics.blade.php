@extends('partials.admin-panel.layout')
@section('title', 'الإحصائيات')
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
                            <h2 class="content-header-title float-start mb-0">الصفحة الرئيسية</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">الاحصائيات
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <!-- Statistics card section -->
                <section id="statistics-card">
                    <!-- Miscellaneous Charts -->
                    <div class="row match-height">
                        <!-- Bar Chart -Orders -->
                        <div class="col-lg-2 col-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='users' class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ getUsersCount() }}</h2>
                                    <p class="card-text">عدد المستخدمين</p>
                                </div>
                            </div>
                        </div>
                        <!--/ Bar Chart -->

                        <!-- Line Chart - Profit -->
                        <div class="col-lg-2 col-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="globe" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ getBranchesCount() }}</h2>
                                    <p class="card-text">عدد الفروع</p>
                                </div>
                            </div>
                        </div>

                        <!-- Line Chart - Profit -->
                        <div class="col-lg-2 col-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="globe" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ getOrdersCount() }}</h2>
                                    <p class="card-text">عدد الطلبات</p>
                                </div>
                            </div>
                        </div>

                        <!-- Line Chart - Profit -->
                        <div class="col-lg-2 col-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="globe" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ getCustomersCount() }}</h2>
                                    <p class="card-text">عدد العملاء</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-2 col-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="globe" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ getCitiesCount() }}</h2>
                                    <p class="card-text">عدد المدن</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="globe" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ getNeighborhoodsCount() }}</h2>
                                    <p class="card-text">عدد الاحياء</p>
                                </div>
                            </div>
                        </div>




                        <!--/ Line Chart -->
                        {{-- <div class="col-lg-8 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">الاحصائيات</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text me-25 mb-0">تم تحديثها قبل ١ شهر </p>
                                    </div>
                                </div>


                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12 mb-2 mb-md-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">9,500,400 ريال</h4>
                                                    <p class="card-text font-small-3 mb-0">المبيعات</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-success me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">1,200,000 ريال</h4>
                                                    <p class="card-text font-small-3 mb-0">الأرباح</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!--/ Miscellaneous Charts -->

                    <!-- Stats Vertical Card -->
                    {{-- <div class="row">
                        <div class="col-xl-2 col-md-4 col-sm-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-success p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="star" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">39</h2>
                                    <p class="card-text">العروض المبيوعة</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="star" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">500</h2>
                                    <p class="card-text">العروض المتوفرة</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="shopping-bag" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">100</h2>
                                    <p class="card-text">الطلبات المفتوحة</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="shopping-bag" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">60</h2>
                                    <p class="card-text">الطلبات المغلقة</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-8">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="layout" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">23</h2>
                                    <p class="card-text">عدد المخططات</p>
                                </div>
                            </div>
                        </div>





                    </div> --}}

                    <!--/ Stats Vertical Card -->

                    <!-- Stats Horizontal Card -->
                    <!--/ Stats Horizontal Card -->

                    <!-- Line Area Chart Card -->
                    {{-- <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="users" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder mt-1">2000</h2>
                                    <p class="card-text">عدد العملاء</p>
                                </div>
                                <div id="line-area-chart-1"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-success p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="user-check" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder mt-1">900</h2>
                                    <p class="card-text">عدد عملاء القطاع العام</p>
                                </div>
                                <div id="line-area-chart-2"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-danger p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="user-check" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder mt-1">1200</h2>
                                    <p class="card-text">عدد عملاء القطاع الخاص</p>
                                </div>
                                <div id="line-area-chart-3"></div>
                            </div>
                        </div>
                    </div> --}}

                    <!--/ Line Area Chart Card -->

                    <!-- Line Chart Card -->
                    {{-- <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header align-items-start pb-0">
                                    <div>
                                        <h2 class="fw-bolder">4</h2>
                                        <p class="card-text">عدد المكاتب</p>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <div class="avatar-content">
                                            <i data-feather="monitor" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="line-area-chart-5"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header align-items-start pb-0">
                                    <div>
                                        <h2 class="fw-bolder">40,000</h2>
                                        <p class="card-text">عدد الرسائل</p>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <div class="avatar-content">
                                            <i data-feather="mail" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="line-area-chart-7"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="card card-transaction">
                                <div class="card-header">
                                    <h4 class="card-title">آخر العمليات</h4>
                                    <div class="dropdown chart-dropdown">
                                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"
                                            data-bs-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">آخر 28 يوم</a>
                                            <a class="dropdown-item" href="#">الشهر الاخير</a>
                                            <a class="dropdown-item" href="#">السنة الاخيرة</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-success rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="check" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">بيع - عرض رقم QTF-1001-USR9 </h6>
                                                <small>المسوق: سعيد القطان</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ 1,200,000 ريال</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-success rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="check" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">بيع - عرض رقم TRT-2019-USR12 </h6>
                                                <small>المسوق: محمد جودة</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ 1,500,000 ريال</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-success rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="check" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">بيع - عرض رقم QTF-2088-USR9 </h6>
                                                <small>المسوق: سعيد القطان</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ 1,305,000 ريال</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                    <!--/ Line Chart Card -->
                </section>
                <!--/ Statistics Card section-->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
