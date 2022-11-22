@extends('partials.admin-panel.layout')
@section('title', 'تغير كلمة المرور')
@section('content')

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="html/rtl/vertical-menu-template/index.html"><span
                            class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
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
                                                style="fill:currentColor"></path>
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
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">المدار الواعد</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                            data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="statistics.html"><i
                            data-feather="trending-up"></i><span class="menu-title text-truncate" data-i18n="Email">الصفحة
                            الرئيسية</span></a>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="users.html"><i
                            data-feather="users"></i><span class="menu-title text-truncate"
                            data-i18n="Email">المستخدمين</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="offers.html"><i
                            data-feather="star"></i><span class="menu-title text-truncate"
                            data-i18n="Chat">العروض</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="reservations.html"><i
                            data-feather="phone"></i><span class="menu-title text-truncate"
                            data-i18n="Todo">الحجوزات</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="orders.html"><i
                            data-feather="shopping-cart"></i><span class="menu-title text-truncate"
                            data-i18n="Calendar">الطلبات</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="clients.html"><i
                            data-feather="users"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">العملاء</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="selles.html"><i
                            data-feather="dollar-sign"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">المبيعات</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="branchs.html"><i
                            data-feather="globe"></i><span class="menu-title text-truncate"
                            data-i18n="branchs">الفروع</span></a>

                <li class=" nav-item"><a class="d-flex align-items-center" href="mediators.html"><i
                            data-feather="briefcase"></i><span class="menu-title text-truncate"
                            data-i18n="mediators">الوسطاء</span></a>
                <li class=" nav-item"><a class="d-flex align-items-center" href="sendSMS.html"><i
                            data-feather="message-square"></i><span class="menu-title text-truncate"
                            data-i18n="sendSMS">إرسال رسالة</span></a>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">تحديث كلمة المرور</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">تحديث كلمة المرور
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i
                                        class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                    href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a>
                                <a class="dropdown-item" href="app-email.html"><i class="me-1"
                                        data-feather="mail"></i><span class="align-middle">Email</span></a><a
                                    class="dropdown-item" href="app-calendar.html"><i class="me-1"
                                        data-feather="calendar"></i><span class="align-middle">Calendar</span></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">

                        <!-- security -->

                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">تحديث كلمة المرور</h4>
                            </div>
                            <div class="card-body pt-1">
                                <!-- form -->
                                <form action="{{ route('panel.update.password') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="account-old-password">كلمة المرور
                                                الحالية</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" class="form-control" id="account-old-password"
                                                    name="old_password" placeholder="أدخل كلمة المرور الحالية" />
                                                <div class="input-group-text cursor-pointer">
                                                    <i data-feather="eye"></i>
                                                </div>
                                            </div>
                                            @if (session()->has('old_password'))
                                                <small class="text-danger">{{ session()->get('old_password') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="account-new-password">كلمة المرور
                                                الجديدة</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" id="account-new-password" name="new_password"
                                                    class="form-control" placeholder="أدخل كلمة المرور الجديدة" />
                                                <div class="input-group-text cursor-pointer">
                                                    <i data-feather="eye"></i>
                                                </div>
                                            </div>
                                            @if (session()->has('new_password'))
                                                <small class="text-danger">{{ session()->get('new_password') }}</small>
                                            @endif
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="account-retype-new-password">تأكيد كلمة المرور
                                                الجديدة</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" class="form-control"
                                                    id="account-retype-new-password" name="confirm_new_password"
                                                    placeholder="تأكيد كلمة المرور الجديده" />
                                                <div class="input-group-text cursor-pointer"><i data-feather="eye"></i>
                                                </div>
                                            </div>
                                            @if (session()->has('confirm_new_password'))
                                                <small
                                                    class="text-danger">{{ session()->get('confirm_new_password') }}</small>
                                            @endif
                                        </div>
                                        {{-- <div class="col-12">
                                            <p class="fw-bolder">متطلبات كلمة المرور:</p>
                                            <ul class="ps-1 ms-25">
                                                <li class="mb-50">يجب أن تحتوي كلمة المرور على الأقل 8 خانات.
                                                </li>
                                                <li class="mb-50">يجب أن تحتوي حرفا كبيرا على الأقل.
                                                </li>
                                                <li>يجب أن تحتوي على رقم على الأقل.
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1 mt-1">حفط</button>
                                            {{-- <button type="reset" class="btn btn-outline-secondary mt-1">إلغاء</button> --}}
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection
