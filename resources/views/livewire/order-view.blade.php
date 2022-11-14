<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">

            <section class="app-user-view-account">


                <div class="row">

                    <div class="col-md-12 ">

                        <div class="row match-height">
                            <!-- Medal Card -->
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="card card-congratulation-medal">
                                    <div class="card-body">
                                        <h2>رقم الطلب</h2>
                                        {{-- <p class="card-text font-small-10">TRT-2343-USR{{$order->id}}</p> --}}
                                        <h3 class="mb-75 mt-2 pt-50">
                                            <a href="#">TRT-2343-USR{{ $order->id }}</a>
                                        </h3>
                                        {{-- <button type="button" class="btn btn-primary waves-effect waves-float waves-light">View Sales</button> --}}
                                        <a href="javascript:;"
                                            class="btn bg-light-success waves-effect waves-float waves-light"
                                            data-bs-target="#connectToOffer" data-bs-toggle="modal">
                                            <span>
                                                <i data-feather='plus-square'></i>
                                                ربط بالعرض
                                            </span>
                                        </a>
                                        <img src="{{ asset('app-assets/images/illustration/badge.svg') }}"
                                            class="congratulation-medal" alt="Medal Pic">
                                    </div>
                                </div>
                            </div>
                            <!--/ Medal Card -->

                            <!-- Statistics Card -->
                            <div class="col-xl-8 col-md-6 col-12">
                                <div class="card card-statistics">



                                    <div class="card-header">
                                        <h4 class="card-title">معلومات العميل</h4>
                                        <div class="d-flex align-items-center">
                                            <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                                        </div>
                                    </div>



                                    <div class="card-boady card-statistics">
                                        <div class="row">

                                            <div class="col-md-3 mb-1 ms-4">
                                                <label class="form-label fw-bold fs-5 text-primary"> الاسم :</label>
                                                <label class="form-label fs-6">{{ $order->customer_name }}</label>
                                            </div>


                                            <div class="col-md-3 mb-1 ms-4">
                                                <label class="form-label fw-bold fs-5 text-primary"> رقم الجوال
                                                    :</label>
                                                <label class="form-label fs-6">{{ $order->customer_phone }}</label>
                                            </div>
                                            <div class="col-md-3 mb-1 ms-4">
                                                <label class="form-label fw-bold fs-5 text-primary">هل مدعوم من
                                                    الاسكان:</label>
                                                @if ($order->support_eskan)
                                                    <span class="badge badge-glow bg-success">نعم</span>
                                                @else
                                                    <span class="badge badge-glow bg-danger">لا</span>
                                                @endif
                                                {{-- <label class="form-label fs-6 text-danger">{{ }}</label> --}}
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-3 mb-1 ms-4">
                                                <label class="form-label fw-bold fs-5 text-primary"> جهة العمل :</label>
                                                <label class="form-label fs-6">{{ $order->employer_name }}</label>
                                            </div>

                                            <div class="col-md-3 mb-1 ms-4">
                                                <label class="form-label fw-bold fs-5 text-primary"> نوع القطاع
                                                    :</label>
                                                <label class="form-label fs-6">قطاع
                                                    {{ $order->employee_type == 'public' ? 'عام' : 'خاص' }}</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-1 text-center">
                                            <a href="javascript:;" class="btn bg-light-warning"
                                                data-bs-target="#addNote" data-bs-toggle="modal">
                                                <i data-feather='plus-square'></i> إضافة ملاحظة</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Statistics Card -->
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <div class="card card-statistics">

                            <div class="card-header">
                                <h4 class="card-title">معلومات العقار</h4>
                                <div class="d-flex align-items-center">
                                    <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                                </div>
                            </div>

                            <div class="card-boady card-statistics">
                                <div class="row">

                                    <div class="col-md-3 mb-1 ms-4">
                                        <label class="form-label fw-bold fs-5 text-primary"> نوع العقار
                                            :</label>
                                        <label
                                            class="form-label fs-6">{{ getPropertyTypeName($order->property_type_id) }}</label>
                                    </div>


                                    <div class="col-md-3 mb-1 ms-4">
                                        <label class="form-label fw-bold fs-5 text-primary"> المساحة
                                            :</label>
                                        <label class="form-label fs-6">{{ $order->area }}</label>
                                    </div>

                                    <div class="col-md-3 mb-1 ms-4">
                                        <label class="form-label fw-bold fs-5 text-primary">الميزانية:</label>
                                        {{ $order->price_from }} - {{ $order->price_to }}
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-3 mb-1 ms-4">
                                        <label class="form-label fw-bold fs-5 text-primary">المنطقة:</label>
                                        <label class="form-label fs-6">{{ getCityName($order->city_id) }}</label>
                                    </div>

                                    <div class="col-md-3 mb-1 ms-4">
                                        <label class="form-label fw-bold fs-5 text-primary">المبلغ المتوفر:
                                        </label>
                                        <label class="form-label fs-6">{{ $order->avaliable_amount }}</label>
                                    </div>

                                    <div class="col-md-3 mb-1 ms-4">
                                        <label class="form-label fw-bold fs-5 text-primary"> طريقة الشراء:
                                        </label>
                                        <label
                                            class="form-label fs-6">{{ getPurchMethodName($order->purch_method_id) }}</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3 mb-1 ms-4">
                                        <label class="form-label fw-bold fs-5 text-primary"> ملاحظات على الطلب:
                                        </label>
                                        <p>العميل لديه مبلغ محرز</p>
                                    </div>

                                    <div class="mb-1 text-center">

                                        @if ($order->desire_to_buy_id == 1)
                                            <a class="btn bg-light-success">العميل:
                                                {{ getDesireToBuyName($order->desire_to_buy_id) }}</span>
                                            </a>
                                        @endif

                                        @if ($order->desire_to_buy_id == 2)
                                            <a class="btn bg-light-warning">العميل جاهز للشراء:
                                                {{ getDesireToBuyName($order->desire_to_buy_id) }}</span>
                                            </a>
                                        @endif

                                        @if ($order->desire_to_buy_id == 3)
                                            <a class="btn bg-light-danger">العميل جاهز للشراء:
                                                {{ getDesireToBuyName($order->desire_to_buy_id) }}</span>
                                            </a>
                                        @endif

                                        @if ($order->desire_to_buy_id == 4)
                                            <a class="btn bg-light-dark">العميل جاهز للشراء:
                                                {{ getDesireToBuyName($order->desire_to_buy_id) }}</span>
                                            </a>
                                        @endif


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">


                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="card ">
                                    <div class="card-header">
                                        <h4 class="card-title ">تتبع حالة الطلب</h4>
                                    </div>
                                    <div class="card-body ">
                                        <ul class="timeline ">
                                            <li class="timeline-item ">
                                                <span class="timeline-point timeline-point-indicator "></span>
                                                <div class="timeline-event ">
                                                    <div
                                                        class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1 ">
                                                        <h6>سعيد القطان </h6>
                                                        <span class="timeline-event-time ">2022-09-15</span>

                                                    </div>
                                                    <div
                                                        class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1 ">
                                                        <h6>تم إيجاد عرض الى العميل والعميل لم يرد </h6>

                                                    </div>


                                                </div>
                                            </li>

                                            <li class="timeline-item ">
                                                <span
                                                    class="timeline-point timeline-point-danger timeline-point-indicator "></span>
                                                <div class="timeline-event ">
                                                    <div
                                                        class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1 ">
                                                        <h6>تم إنشاء الطلب</h6>
                                                        <span class="timeline-event-time ">2022-09-10</span>

                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 ">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h4 class="card-title ">التعديلات</h4>
                                    </div>
                                    <div class="card-body ">
                                        <ul class="timeline ">
                                            <li class="timeline-item ">
                                                <span class="timeline-point timeline-point-indicator "></span>
                                                <div class="timeline-event ">
                                                    <div
                                                        class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1 ">
                                                        <h6>قام علي التاروتي بالتعديل</h6>
                                                        <span class="timeline-event-time ">ساعة مضت</span>
                                                    </div>

                                                </div>
                                            </li>

                                            <li class="timeline-item ">
                                                <span
                                                    class="timeline-point timeline-point-danger timeline-point-indicator "></span>
                                                <div class="timeline-event ">
                                                    <div
                                                        class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1 ">
                                                        <h6>قام محمد على بإلغاء العرض</h6>
                                                        <span class="timeline-event-time ">منذ 3 ساعات</span>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>



            <div class="modal fade" id="addNote" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-2">
                                <h1 class="mb-1">إضافة ملاحظة</h1>
                            </div>
                            <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">


                                <div class="col-12 col-md-6 ">
                                    <label class="form-label" for="fp-range">التاريخ</label>
                                    <input type="text" id="fp-range" class="form-control flatpickr-basic"
                                        placeholder="{{now()}}" disabled />
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <label class="form-label"> الحالة :</label>
                                    <select class="form-select">
                                        @foreach (getOrderNoteStatuse() as $order_status)
                                            <option value="{{ $order_status->id }}">{{ $order_status->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-12">
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

            <div class="modal fade" id="connectToOffer" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-2">
                                <h1 class="mb-1">ربط الطلب بالعرض</h1>
                            </div>
                            <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">


                                <div class="col-12">
                                    <label class="form-label" for="fp-range">التاريخ</label>
                                    <input type="text" id="fp-range" class="form-control flatpickr-basic"
                                        placeholder="2022-09-15" disabled />
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label" for="search">كود العرض </label>
                                        <input type="text" id="search" class="form-control" name="search"
                                            placeholder="الرجاء ادخال رقم أو كود العرض">
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <button class="btn btn-primary " style="margin-top: 20px">
                                            <i data-feather="search" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">بحث</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label">رقم الارض</label>
                                        <input type="text" class="form-control " placeholder="رقم الارض"
                                            value="1991" disabled />
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label">مساحة الارض</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" class="form-control " placeholder="سعر الارض"
                                                value="402" disabled />
                                            <span class="input-group-text">متر</span>
                                        </div>
                                    </div>
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
