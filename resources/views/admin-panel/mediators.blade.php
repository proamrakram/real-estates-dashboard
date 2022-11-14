@extends('partials.admin-panel.layout')
@section('title', 'الوسطاء')
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
                            <h2 class="content-header-title float-start mb-0">الوسطاء</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">الوسطاء
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="javascript:;" data-bs-target="#addNewAddressModal" data-bs-toggle="modal"
                            class="btn btn-primary"><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-plus me-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>إضافة وسيط</span></a>
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
                                                <th>اسم الوسيط</th>
                                                <th>رقم الجوال</th>
                                                <th>كود الوسيط</th>
                                                <th>صفة الوسيط</th>
                                                <th>تحكم</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>شركة الميثاق الذهبي</td>
                                                <td> 0591234567 </td>
                                                <td>METHAQ-GOLD</td>
                                                <td>مكتب</td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="javascript:;" class="item-edit"
                                                            data-bs-target="#addNewAddressModal" data-bs-toggle="modal">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button class="btn item-edit" style="padding:0;color:#EA5455 ">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>زينب الحليلي</td>
                                                <td> 0597654321 </td>
                                                <td>Zainab-H</td>
                                                <td>فرد</td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="javascript:;" class="item-edit"
                                                            data-bs-target="#addNewAddressModal" data-bs-toggle="modal">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button class="btn item-edit" style="padding:0;color:#EA5455 ">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>شركة الوسام</td>
                                                <td> 0541234432 </td>
                                                <td>WesamCo</td>
                                                <td>مكتب</td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="javascript:;" class="item-edit"
                                                            data-bs-target="#addNewAddressModal" data-bs-toggle="modal">
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

                        <!-- add new address modal -->
                        <div class="modal fade" id="createAppModal" tabindex="-1" aria-labelledby="createAppTitle"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-transparent">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body pb-3 px-sm-3">
                                        <h1 class="text-center mb-1" id="createAppTitle">إنشاء حساب عميل</h1>
                                        <p class="text-center mb-2"></p>

                                        <div class="bs-stepper vertical wizard-modern create-app-wizard">
                                            <div class="bs-stepper-header" role="tablist">
                                                <div class="step" data-target="#create-app-details" role="tab"
                                                    id="create-app-details-trigger">
                                                    <button type="button" class="step-trigger py-75">
                                                        <span class="bs-stepper-box">
                                                            <i data-feather="info" class="font-medium-3"></i>
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
                                                            <i data-feather="file-text" class="font-medium-3"></i>
                                                        </span>
                                                        <span class="bs-stepper-label">
                                                            <span class="bs-stepper-title">معلومات جهة العمل</span>
                                                            <span class="bs-stepper-subtitle"></span>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="step" data-target="#create-app-database" role="tab"
                                                    id="create-app-database-trigger">
                                                    <button type="button" class="step-trigger py-75">
                                                        <span class="bs-stepper-box">
                                                            <i data-feather="home" class="font-medium-3"></i>
                                                        </span>
                                                        <span class="bs-stepper-label">
                                                            <span class="bs-stepper-title">العنوان الوطني</span>
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
                                                    <div class="row">

                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label">البريد الالكترونى</label>
                                                            <input type="email" class="form-control "
                                                                placeholder="البريد الالكترونى" />
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label">رقم الهوية</label>
                                                            <input type="text" class="form-control "
                                                                placeholder="رقم الهوية" />
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
                                                    <div class="col-12 col-md-6">
                                                        <label class="form-label">جهة العمل</label>
                                                    </div>

                                                    <div class="col-12 ">
                                                        <input type="text" class="form-control "
                                                            placeholder="جهة العمل" />

                                                    </div>
                                                    <div class="row">.</div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-1">
                                                            <label class="form-label">هل أنت موظف قطاع عام أم خاص ؟</label>
                                                        </div>
                                                        <div class="col-md-6 mb-1">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptionsAA" id="inlineRadio1"
                                                                    value="option1" checked="">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">عام</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptionsAA" id="inlineRadio2"
                                                                    value="option2">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">خاص</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">.</div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-1">
                                                            <label class="form-label">هل أنت مؤهل للحصول على دعم وزارة
                                                                الاسكان ؟</label>
                                                        </div>
                                                        <div class="col-md-6 mb-1">
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
                                                    <div class="row">.</div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="modalAddressBID">رقم
                                                                المبنى</label>
                                                            <input type="text" id="modalAddressBID"
                                                                name="modalAddressBID" class="form-control"
                                                                placeholder="رقم المبنى" />
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="modalAddressStreetName">اسم
                                                                الشارع</label>
                                                            <input type="text" id="modalAddressStreetName"
                                                                name="modalAddressStreetName" class="form-control"
                                                                placeholder="اسم الشارع" />
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-12 col-md-6">
                                                                <label class="form-label" for="modalAddressDistName">اسم
                                                                    الحي</label>
                                                                <input type="text" id="modalAddressDistName"
                                                                    name="modalAddressDistName" class="form-control"
                                                                    placeholder="اسم الحي" />
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <label class="form-label" for="modalAddressZipCode">الرمز
                                                                    البريدي</label>
                                                                <input type="text" id="modalAddressZipCode"
                                                                    name="modalAddressZipCode" class="form-control"
                                                                    placeholder="الرمز البريدي" />
                                                            </div>

                                                        </div>
                                                        <div class="row">

                                                            <div class="col-12 col-md-6">
                                                                <label class="form-label" for="modalAddressZipCode">الرقم
                                                                    الإضافي</label>
                                                                <input type="text" id="modalAddressAddNum"
                                                                    name="modalAddressAddNum" class="form-control"
                                                                    placeholder="الرقم الاضافي" />
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <label class="form-label" for="modalAddressUnitNum">رقم
                                                                    الوحدة</label>
                                                                <input type="text" id="modalAddressUnitNum"
                                                                    name="modalAddressUnitNum" class="form-control"
                                                                    placeholder="رقم الوحدة" />
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-2">
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
                        </div>
                        <div class="modal fade" id="addNewAddressModal" tabindex="-1"
                            aria-labelledby="addNewAddressTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-transparent">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body pb-5 px-sm-4 mx-50">
                                        <h1 class="address-title text-center mb-1" id="addNewAddressTitle">إضافة وسيط</h1>
                                        <p class="address-subtitle text-center mb-2 pb-75"></p>

                                        <form id="addNewAddressForm" class="row gy-1 gx-2" onsubmit="return false">

                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="modalAddressFirstName">اسم الوسيط</label>
                                                <input type="text" id="modalAddressFirstName"
                                                    name="modalAddressFirstName" class="form-control"
                                                    placeholder="اسم الوسيط" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="modalAddressLastName">كود الوسيط</label>
                                                <input type="" id="modalAddressLastName"
                                                    name="modalAddressLastName" class="form-control"
                                                    placeholder="مثال : Almadar" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="modalAddressLastName">رقم الجوال</label>
                                                <input type="" id="modalAddressLastName"
                                                    name="modalAddressLastName" class="form-control"
                                                    placeholder="رقم الجوال" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="modalAddressCountry">صفة الوسيط</label>
                                                <select id="modalAddressCountry" name="modalAddressCountry"
                                                    class="form-select">
                                                    <option value="">اختيار صفة الوسيط</option>
                                                    <option value="1">مكتب</option>
                                                    <option value="2">فرد</option>

                                                </select>
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
                    </section>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
