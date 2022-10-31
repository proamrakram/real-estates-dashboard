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
                            <h2 class="content-header-title float-start mb-0">الطلبات</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">الطلبات
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="javascript:;" data-bs-target="#createAppModal" data-bs-toggle="modal"
                            class="btn btn-primary"><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-plus me-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>انشاء طلب جديد</span></a>
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
                                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab-fill" data-bs-toggle="tab"
                                                href="#home-fill" role="tab" aria-controls="home-fill"
                                                aria-selected="true">طلبات مضافة من قبلي</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="home2-tab-fill" data-bs-toggle="tab" href="#home2-fill"
                                                role="tab" aria-controls="home2-fill" aria-selected="false">طلبات تم
                                                إسنادها إلي</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-1">
                                        <div class="tab-pane active" id="home-fill" role="tabpanel"
                                            aria-labelledby="home-tab-fill">

                                            <table class="datatables-basic table">
                                                <thead>
                                                    <tr>
                                                        <th>رقم الطلب</th>
                                                        <th>التاريخ</th>
                                                        <th>نوع العقار</th>
                                                        <th>المنطقة</th>
                                                        <th>اسم العميل</th>
                                                        <th>الميزانية</th>
                                                        <th>الحالة</th>
                                                        <th>الفرع</th>
                                                        <th>تحكم</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>1523652</td>
                                                        <td> 11-12-2022 </td>
                                                        <td><span class="badge bg-primary"> فيلا</span> </td>
                                                        <td> <span class="badge bg-dark"> الخزامي</span></td>
                                                        <td>على محمد</td>
                                                        <td>1,000,000 - 2,000,000 </td>
                                                        <td><span class="badge bg-success"> تم ربطه بعرض</span></td>
                                                        <td><span class="badge bg-primary"> الرياض</span></td>
                                                        <td>
                                                            <div class="d-inline-flex">
                                                                <a href="view-order.html" class="item-view">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>

                                                                <a href="javascript:;" class="item-edit"
                                                                    data-bs-target="#createAppModal" data-bs-toggle="modal">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <button class="btn item-edit"
                                                                    style="padding:0;color:#EA5455 ">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="tab-pane " id="home2-fill" role="tabpanel"
                                            aria-labelledby="home2-tab-fill">

                                            <table class="datatables-basic table">
                                                <thead>
                                                    <tr>
                                                        <th>رقم الطلب</th>
                                                        <th>التاريخ</th>
                                                        <th>نوع العقار</th>
                                                        <th>المنطقة</th>
                                                        <th>اسم العميل</th>
                                                        <th>الميزانية</th>
                                                        <th>الحالة</th>
                                                        <th>الفرع</th>
                                                        <th>تحكم</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>TRT-2090-USR13</td>
                                                        <td> 11-12-2022 </td>
                                                        <td><span class="badge bg-primary"> فيلا</span> </td>
                                                        <td> <span class="badge bg-dark"> الخزامي</span></td>
                                                        <td>على محمد</td>
                                                        <td>1,000,000 - 2,000,000 </td>
                                                        <td><span class="badge bg-success"> تم ربطه بعرض</span></td>
                                                        <td><span class="badge bg-primary"> الرياض</span></td>
                                                        <td>
                                                            <div class="d-inline-flex">
                                                                <a href="javascript:;" class="item-edit"
                                                                    data-bs-target="#createAppModal" data-bs-toggle="modal">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <button class="btn item-edit"
                                                                    style="padding:0;color:#EA5455 ">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1523652</td>
                                                        <td> 11-12-2022 </td>
                                                        <td><span class="badge bg-info"> ارض</span> </td>
                                                        <td> <span class="badge bg-dark"> النابية</span></td>
                                                        <td>على محمد</td>
                                                        <td>1,000,000 - 2,000,000 </td>
                                                        <td><span class="badge bg-danger"> لايوجد تعليق</span></td>
                                                        <td><span class="badge bg-primary"> القطيف</span></td>
                                                        <td>
                                                            <div class="d-inline-flex">
                                                                <a href="javascript:;" class="item-edit"
                                                                    data-bs-target="#createAppModal"
                                                                    data-bs-toggle="modal">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <button class="btn item-edit"
                                                                    style="padding:0;color:#EA5455 ">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1523652</td>
                                                        <td> 11-12-2022 </td>
                                                        <td><span class="badge bg-primary"> فيلا</span> </td>
                                                        <td> <span class="badge bg-dark"> مسك تاروت</span></td>
                                                        <td>على محمد</td>
                                                        <td>1,000,000 - 2,000,000</td>
                                                        <td><span class="badge bg-warning"> لم يتم الرد</span></td>
                                                        <td><span class="badge bg-primary"> الخبر</span></td>
                                                        <td>
                                                            <div class="d-inline-flex">
                                                                <a href="javascript:;" class="item-edit"
                                                                    data-bs-target="#createAppModal"
                                                                    data-bs-toggle="modal">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <button class="btn item-edit"
                                                                    style="padding:0;color:#EA5455 ">
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
                            </div>
                        </div>
                        <!-- Modal to add new record -->
                        <div class="modal fade" id="modals-slide-in" tabindex="-1" aria-labelledby="addNewAddressTitle"
                            aria-hidden="true">

                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-transparent">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body pb-5 px-sm-4 mx-50">
                                        <h1 class="address-title text-center mb-1" id="addNewAddressTitle">إضافة طلب
                                        </h1>
                                        <p class="address-subtitle text-center mb-2 pb-75"></p>
                                        <div class="bs-stepper-header px-0" role="tablist">
                                            <div class="step" data-target="#account-details" role="tab"
                                                id="account-details-trigger">
                                                <button type="button" class="step-trigger">
                                                    <span class="bs-stepper-box">
                                                        <i data-feather="home" class="font-medium-3"></i>
                                                    </span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">بيانات المستخدم</span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="line">
                                                <i data-feather="chevron-right" class="font-medium-2"></i>
                                            </div>
                                            <div class="step" data-target="#personal-info" role="tab"
                                                id="personal-info-trigger">
                                                <button type="button" class="step-trigger">
                                                    <span class="bs-stepper-box">
                                                        <i data-feather="user" class="font-medium-3"></i>
                                                    </span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">الصلاحيات</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <form id="addNewAddressForm" class="row gy-1 gx-2" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label" for="search">رقم الجوال /
                                                        الهوية</label>
                                                    <input type="text" id="search" class="form-control"
                                                        name="search" placeholder="رقم الجوال / الهوية">
                                                </div>
                                                <div class="col-md-6 mb-1">
                                                    <button class="btn btn-primary " style="margin-top: 20px">
                                                        <i data-feather="search" class="align-middle me-sm-25 me-0"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">بحث</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="modalAddressFirstName">الاسم</label>
                                                <input type="text" id="modalAddressFirstName"
                                                    name="modalAddressFirstName" class="form-control"
                                                    placeholder="الاسم" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="modalAddressLastName">رقم
                                                    الجوال</label>
                                                <input type="" id="modalAddressLastName"
                                                    name="modalAddressLastName" class="form-control"
                                                    placeholder="رقم الجوال" />
                                            </div>


                                            <div class="col-12 ">
                                                <label class="form-label"> توجيه الطلب إلى :</label>
                                                <select class="select2 form-select">
                                                    <option value="">اختيار المسوق</option>
                                                    <option value="1">سعيد القطان - USR12</option>
                                                    <option value="2">زينب الحليلي - USR13</option>
                                                    <option value="3">محمد جوده - USR10</option>

                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="modalEditUserEmail">ملاحظات:</label>
                                                <textarea class="form-control" id="notes" rows="3" placeholder="ملاحظات"></textarea>
                                            </div>





                                            <div class="col-12 text-center mt-2 pt-50">
                                                <button type="submit" class="btn btn-primary btn-submit me-1"
                                                    id="type-success">حفظ</button>
                                                <button type="reset" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    الغاء
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="createAppModal" tabindex="-1" aria-labelledby="createAppTitle"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-transparent">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body pb-3 px-sm-3">
                                        <h1 class="text-center mb-1" id="createAppTitle">إضافة طلب</h1>
                                        <p class="text-center mb-2"></p>

                                        <div class="bs-stepper vertical wizard-modern create-app-wizard">
                                            <div class="bs-stepper-header" role="tablist">
                                                <div class="step" data-target="#create-app-details" role="tab"
                                                    id="create-app-details-trigger">
                                                    <button type="button" class="step-trigger py-75">
                                                        <span class="bs-stepper-box">
                                                            <i data-feather="book" class="font-medium-3"></i>
                                                        </span>
                                                        <span class="bs-stepper-label">
                                                            <span class="bs-stepper-title">معلومات العميل</span>
                                                            <span class="bs-stepper-subtitle"></span>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="step" data-target="#create-app-frameworks" role="tab"
                                                    id="create-app-frameworks-trigger">
                                                    <button type="button" class="step-trigger py-75">
                                                        <span class="bs-stepper-box">
                                                            <i data-feather="package" class="font-medium-3"></i>
                                                        </span>
                                                        <span class="bs-stepper-label">
                                                            <span class="bs-stepper-title">معلومات العقار</span>
                                                            <span class="bs-stepper-subtitle"></span>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="step" data-target="#create-app-database" role="tab"
                                                    id="create-app-database-trigger">
                                                    <button type="button" class="step-trigger py-75">
                                                        <span class="bs-stepper-box">
                                                            <i data-feather="command" class="font-medium-3"></i>
                                                        </span>
                                                        <span class="bs-stepper-label">
                                                            <span class="bs-stepper-title">الملاحظات</span>
                                                            <span class="bs-stepper-subtitle"></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="step" data-target="#create-app-submit" role="tab"
                                                    id="create-app-submit-trigger">
                                                    <button type="button" class="step-trigger py-75">
                                                        <span class="bs-stepper-box">
                                                            <i data-feather="check" class="font-medium-3"></i>
                                                        </span>
                                                        <span class="bs-stepper-label">
                                                            <span class="bs-stepper-title">إرسال الطلب</span>
                                                            <span class="bs-stepper-subtitle"></span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- content -->
                                            <div class="bs-stepper-content shadow-none">
                                                <div id="create-app-details" class="content" role="tabpanel"
                                                    aria-labelledby="create-app-details-trigger">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-1">
                                                            <label class="form-label" for="search">رقم الجوال /
                                                                الهوية</label>
                                                            <input type="text" id="search" class="form-control"
                                                                name="search" placeholder="رقم الجوال / الهوية">
                                                        </div>
                                                        <div class="col-md-6 mb-1">
                                                            <button class="btn btn-primary " style="margin-top: 20px">
                                                                <i data-feather="search"
                                                                    class="align-middle me-sm-25 me-0"></i>
                                                                <span
                                                                    class="align-middle d-sm-inline-block d-none">بحث</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-1">
                                                            <label class="form-label"
                                                                for="modalAddressFirstName">الاسم</label>
                                                            <input type="text" id="modalAddressFirstName"
                                                                name="modalAddressFirstName" class="form-control"
                                                                placeholder="الاسم" />
                                                        </div>
                                                        <div class="col-md-6 mb-1">
                                                            <label class="form-label" for="modalAddressLastName">رقم
                                                                الجوال</label>
                                                            <input type="" id="modalAddressLastName"
                                                                name="modalAddressLastName" class="form-control"
                                                                placeholder="رقم الجوال" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label class="form-label">جهة العمل</label>
                                                    </div>

                                                    <div class="col-12 ">
                                                        <input type="text" class="form-control "
                                                            placeholder="جهة العمل" />

                                                    </div>
                                                    <div class="row">.</div>
                                                    <div class="row">
                                                        <div class="col-md-8 mb-1">
                                                            <label class="form-label">هل أنت موظف قطاع عام أم قطاع خاص
                                                                ؟</label>
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptions1" id="inlineRadio1"
                                                                    value="option1" checked="">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">عام</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptions1" id="inlineRadio2"
                                                                    value="option2">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">خاص</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">.</div>
                                                    <div class="row">
                                                        <div class="col-md-8 mb-1">
                                                            <label class="form-label">هل أنت مؤهل للحصول على دعم وزارة
                                                                الاسكان ؟</label>
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptionsA" id="inlineRadio3"
                                                                    value="option1" checked="">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">نعم</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptionsA" id="inlineRadio4"
                                                                    value="option2">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">لا</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-2">
                                                        <button class="btn btn-outline-secondary btn-prev" disabled>
                                                            <i data-feather="arrow-left"
                                                                class="align-middle me-sm-25 me-0"></i>
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none">السابق</span>
                                                        </button>
                                                        <button class="btn btn-primary btn-next">
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none">التالي</span>
                                                            <i data-feather="arrow-right"
                                                                class="align-middle ms-sm-25 ms-0"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div id="create-app-frameworks" class="content" role="tabpanel"
                                                    aria-labelledby="create-app-frameworks-trigger">
                                                    <div class="col-12">
                                                        <label class="form-label">نوع العقار</label>
                                                        <select class="form-select" id="s1">
                                                            <option>أرض</option>
                                                            <option>فيلا</option>
                                                        </select>

                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label"
                                                            for="modalAddressCountry">المنطقة</label>
                                                        <select id="modalAddressCountry" name="modalAddressCountry"
                                                            class="select2 form-select">
                                                            <option value="">اختيار المنطقة</option>
                                                            <option value="1">جزيرة تاروت</option>
                                                            <option value="2">القطيف</option>
                                                            <option value="3">سيهات</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label"
                                                            for="modalAddressCountry">المساحة</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="المساحة" />

                                                    </div>
                                                    <div class="row">

                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label">السعر من</label>
                                                            <input type="number" class="form-control "
                                                                placeholder="السعر من" />
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label">السعر الى</label>
                                                            <input type="number" class="form-control "
                                                                placeholder="السعر إلى" />
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label">متى ترغب في الشراء</label>
                                                            <select class="form-select" id="s1">
                                                                <option>جاهز للشراء</option>
                                                                <option>بعد ٦ شهور</option>
                                                                <option>بعد سنة</option>
                                                                <option>بعد سنتين</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label">كيفية الشراء</label>
                                                            <select class="form-select" id="s1">
                                                                <option>كاش</option>
                                                                <option>تحويل</option>
                                                                <option>تمويل</option>
                                                                <option>دفعة أولى كاش والمتبقي تمويل</option>

                                                            </select>

                                                        </div>

                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label">المبلغ المتوفر</label>
                                                        <input type="number" class="form-control "
                                                            placeholder="المبلغ المتوفر" />
                                                    </div>



                                                    <div class="d-flex justify-content-between mt-2">
                                                        <button class="btn btn-primary btn-prev">
                                                            <i data-feather="arrow-left"
                                                                class="align-middle me-sm-25 me-0"></i>
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none">السابق</span>
                                                        </button>
                                                        <button class="btn btn-primary btn-next">
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none">التالي</span>
                                                            <i data-feather="arrow-right"
                                                                class="align-middle ms-sm-25 ms-0"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="create-app-database" class="content" role="tabpanel"
                                                    aria-labelledby="create-app-database-trigger">
                                                    <div class="col-12">
                                                        <label class="form-label" for="modalEditUserEmail">ملاحظات
                                                            عامة:</label>
                                                        <textarea class="form-control" id="notes" rows="3" placeholder="ملاحظات"></textarea>
                                                    </div>

                                                    <div class="col-12 ">
                                                        <label class="form-label"> توجيه الطلب إلى :</label>
                                                        <select class="select2 form-select">
                                                            <option value="">اختيار المسوق</option>
                                                            <option value="1">سعيد القطان - USR12</option>
                                                            <option value="2">زينب الحليلي - USR13</option>
                                                            <option value="3">محمد جوده - USR10</option>

                                                        </select>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-2">
                                                        <button class="btn btn-primary btn-prev">
                                                            <i data-feather="arrow-left"
                                                                class="align-middle me-sm-25 me-0"></i>
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none">السابق</span>
                                                        </button>
                                                        <button class="btn btn-primary btn-next">
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none">التالي</span>
                                                            <i data-feather="arrow-right"
                                                                class="align-middle ms-sm-25 ms-0"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="create-app-submit" class="content text-center" role="tabpanel"
                                                    aria-labelledby="create-app-submit-trigger">
                                                    <h3>إرسال وحفظ 🥳</h3>
                                                    <p>أنت على بعد خطوة من إرسال الطلب </p>
                                                    <img src="app-assets/images/illustration/pricing-Illustration.svg"
                                                        height="218" alt="illustration" />
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <button class="btn btn-primary btn-prev">
                                                            <i data-feather="arrow-left"
                                                                class="align-middle me-sm-25 me-0"></i>
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none">السابق</span>
                                                        </button>
                                                        <button class="btn btn-success btn-submit">
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none">إرسال</span>
                                                            <i data-feather="check"
                                                                class="align-middle ms-sm-25 ms-0"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
