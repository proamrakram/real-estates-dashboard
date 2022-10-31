@extends('partials.admin-panel.actions')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="{{ route('panel.home') }}">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                        y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill: currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h2 class="brand-text text-primary ms-1">المدار الواعد</h2>
                        </a>
                        <!-- /Brand logo-->

                        <!-- Left Text-->
                        <div class="col-lg-3 d-none d-lg-flex align-items-center p-0">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center">
                                <img class="img-fluid w-100" src="app-assets/images/illustration/create-account.svg"
                                    alt="multi-steps" />
                            </div>
                        </div>
                        <!-- /Left Text-->

                        <!-- Register-->
                        <div class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5 pt-3">
                            <div class="width-700 mx-auto">
                                <div class="bs-stepper register-multi-steps-wizard shadow-none">
                                    <div class="bs-stepper-header px-0" role="tablist">

                                        <div class="step" data-target="#personal-info" role="tab"
                                            id="personal-info-trigger">
                                            <button type="button" class="step-trigger">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="map-pin" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">تفاصيل العرض</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>
                                        <div class="step" data-target="#account-details" role="tab"
                                            id="account-details-trigger">
                                            <button type="button" class="step-trigger">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="user" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">بيانات العميل</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>
                                        <div class="step" data-target="#account-home-details" role="tab"
                                            id="account-home-details-trigger">
                                            <button type="button" class="step-trigger">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="home" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">العنوان الوطني</span>
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="bs-stepper-content px-0 mt-4">

                                        <div id="personal-info" class="content" role="tabpanel"
                                            aria-labelledby="personal-info-trigger">
                                            <div class="content-header mb-2">
                                                <h2 class="fw-bolder mb-75"> تفاصيل العرض</h2>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">رقم العرض</label>
                                                        <input type="text" class="form-control " value="QTF-1991-USR9"
                                                            disabled />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">الحي/ الخطط </label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" class="form-control " value="مسك تاروت"
                                                                disabled />
                                                            <span class="input-group-text">متر</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">رقم الارض</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="رقم الارض" value="1991" disabled />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">مساحة الارض</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" class="form-control "
                                                                placeholder="سعر الارض" value="402" disabled />
                                                            <span class="input-group-text">متر</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">سعر الارض</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" class="form-control "
                                                                placeholder="سعر الارض" value="1,550,000" disabled />
                                                            <span class="input-group-text">ريال</span>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">الضريبة</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="price" class="form-control"
                                                                name="vat" placeholder="الضريبة">
                                                            <span class="input-group-text">%</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">السعي</label>
                                                        <select class="form-control">
                                                            <option>نسبة</option>
                                                            <option>سعر</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">السعي</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="price" class="form-control"
                                                                name="saee" placeholder="السعي">
                                                            <span class="input-group-text">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">السعر الكلى</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" class="form-control "
                                                                placeholder="السعر الكلى" disabled value="1,550,000" />
                                                            <span class="input-group-text">ريال</span>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">المبلغ المدفوع</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="المبلغ المدفوع" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label"> طريقة الدفع الحالية</label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="option1" checked="">
                                                            <label class="form-check-label" for="inlineRadio3">كاش</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio2"
                                                                value="option2">
                                                            <label class="form-check-label"
                                                                for="inlineRadio4">تحويل</label>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 mb-1">
                                                        <label class="form-label"> طريقة الدفع فيما بعد</label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions1" id="inlineRadio3"
                                                                value="option1" checked="">
                                                            <label class="form-check-label" for="inlineRadio3">كاش</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions1" id="inlineRadio4"
                                                                value="option2">
                                                            <label class="form-check-label"
                                                                for="inlineRadio4">تحويل</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions1" id="inlineRadio5"
                                                                value="option3">
                                                            <label class="form-check-label" for="inlineRadio5">تمويل
                                                                بنكي</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="d-flex justify-content-between mt-2">
                                                <button class="btn btn-outline-secondary btn-prev" disabled>
                                                    <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                                </button>
                                                <button class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">التالى</span>
                                                    <i data-feather="chevron-right"
                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="account-details" class="content" role="tabpanel"
                                            aria-labelledby="account-details-trigger">
                                            <div class="content-header mb-2">
                                                <h2 class="fw-bolder mb-75">بيانات العميل</h2>
                                            </div>
                                            <form>
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
                                                            <span class="align-middle d-sm-inline-block d-none">بحث</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">الاسم</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="الاسم" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">رقم الجوال</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="رقم الجوال" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">البريد الالكترونى</label>
                                                        <input type="email" class="form-control "
                                                            placeholder="البريد الالكترونى" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">رقم الهوية</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="رقم الهوية" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">الجنسية</label>
                                                        <select class="form-control">
                                                            <option>سعودى</option>
                                                            <option>بحرينى</option>
                                                            <option>كويتى</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">موظف</label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="option1" checked="">
                                                            <label class="form-check-label" for="inlineRadio1">قطاع
                                                                عام</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio2"
                                                                value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">خاص</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">المنطقة</label>
                                                        <select class="form-control">
                                                            <option>الدمام</option>
                                                            <option>الرياض</option>

                                                        </select>
                                                    </div>

                                                </div>

                                            </form>


                                            <div class="d-flex justify-content-between mt-2">
                                                <button class="btn btn-outline-secondary btn-prev">
                                                    <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                                </button>
                                                <button class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">التالى</span>
                                                    <i data-feather="chevron-right"
                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="account-home-details" class="content" role="tabpanel"
                                            aria-labelledby="account-home-details-trigger">
                                            <div class="content-header mb-2">
                                                <h2 class="fw-bolder mb-75">الهنوان الوطني</h2>
                                            </div>
                                            <form>

                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">رقم المبنى</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="رقم المبنى" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">اسم الشارع</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="اسم الشارع" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">اسم الحي</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="اسم الحي" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">الرمز البريدي</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="الرمز البريدي" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">الرقم الاضافي</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="الرقم الاضافي" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">رقم الوحدة</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="رقم الوحدة" />
                                                    </div>
                                                </div>

                                            </form>


                                            <div class="d-flex justify-content-between mt-1">
                                                <button class="btn btn-primary btn-prev">
                                                    <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                                </button>
                                                <button class="btn btn-success btn-submit" id="type-success">
                                                    <i data-feather="check" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">حفظ</span>
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
        </div>
    </div>
    <!-- END: Content-->
@endsection
