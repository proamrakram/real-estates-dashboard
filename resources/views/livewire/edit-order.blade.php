<div class="modal fade" id="createAppModal" tabindex="-1" aria-labelledby="createAppTitle" aria-hidden="true"
    wire:ignore.self>
    <style>
        .coloring:hover {
            background-color: #7367F0;
            color: white;
            cursor: pointer;
        }
    </style>
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-3 px-sm-3">
                <h1 class="text-center mb-1" id="createAppTitle">إضافة طلب</h1>
                <p class="text-center mb-2"></p>


                <h3 style="background-color: #7367F0; color:white; border-radius: 5px;">معلومات العميل</h3>

                <div class="row mb-1">

                    <div class="col-md-6">
                        <label class="form-label">الاسم</label>
                        <input type="text" class="form-control" wire:model='customer_name' placeholder="الاسم" />
                        @error('customer_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">رقم الجوال</label>
                        <input type="tel" class="form-control" maxlength="10" wire:model='customer_phone'
                            placeholder="رقم الجوال" />
                        @error('customer_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>


                <div class="row mb-1">

                    <div class="col-12 col-md-6">
                        <label class="form-label">جهة العمل</label>
                    </div>

                    <div class="col-12">
                        <input type="text" class="form-control" wire:model='employer_name' placeholder="جهة العمل" />
                        @error('employer_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>



                <div class="row mb-1">

                    <div class="col-12 col-md-6">
                        <label class="form-label">هل أنت موظف قطاع عام أم قطاع خاص ؟</label>
                    </div>

                    <div class="col-12">
                        <select class="form-control" wire:model='employee_type'>
                            <option value="public">عام</option>
                            <option value="private">خاص</option>
                        </select>
                        @error('employee_type')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>


                <div class="row mb-1">

                    <div class="col-12 col-md-6">
                        <label class="form-label">حالة الطلب</label>
                    </div>

                    <div class="col-12">
                        <select class="form-control" wire:model='order_status_id'>
                            @foreach (getOrderStatuses() as $order_status)
                                <option value="{{ $order_status->id }}">{{ $order_status->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('order_status_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-12 col-md-9">
                        <label class="form-label">هل أنت مؤهل للحصول على دعم وزارة الاسكان ؟</label>
                    </div>

                    <div class="col-12">
                        <select class="form-control" wire:model='support_eskan'>
                            <option value="1">نعم</option>
                            <option value="0">لا</option>
                        </select>
                        @error('support_eskan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>


                <h3 style="background-color: #7367F0; color:white; border-radius: 5px;">معلومات العقار</h3>

                <div class="col-12 mb-1">
                    <label class="form-label">نوع العقار</label>
                    <select class="form-select" wire:model='property_type_id' id="s1">
                        @foreach (getPropertyTypes() as $property_type)
                            <option value="{{ $property_type->id }}">{{ $property_type->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('property_type_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-12 mb-1">
                    <label class="form-label">المنطقة</label>
                    <select wire:model='city_id' class="select2 form-select">
                        @foreach (getCities() as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    @error('city_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="col-12 mb-1">
                    <label class="form-label">الفرع</label>
                    <select wire:model='branch_id' class="select2 form-select">
                        @foreach (getBranches() as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                        @endforeach
                    </select>
                    @error('branch_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="col-12 mb-1">
                    <label class="form-label">المساحة</label>
                    <input type="number" class="form-control" wire:model='area' placeholder="المساحة" />
                    @error('area')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row mb-1">
                    <div class="col-12 col-md-6">
                        <label class="form-label">السعر من</label>
                        <input type="number" class="form-control" wire:model='price_from' placeholder="السعر من" />
                        @error('price_from')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label">السعر الى</label>
                        <input type="number" class="form-control" wire:model='price_to' placeholder="السعر إلى" />
                        @error('price_to')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-12 col-md-6">
                        <label class="form-label">متى ترغب في الشراء</label>
                        <select class="form-select" wire:model="desire_to_buy_id" id="s1">
                            @foreach (getDesireToBuys() as $desire_to_buy)
                                <option value="{{ $desire_to_buy->id }}">{{ $desire_to_buy->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('desire_to_buy_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label">كيفية الشراء</label>
                        <select class="form-select" wire:model='purch_method_id' id="s1">
                            @foreach (getPurchaseMethods() as $getPurchaseMethod)
                                <option value="{{ $getPurchaseMethod->id }}">
                                    {{ $getPurchaseMethod->name }}</option>
                            @endforeach
                        </select>
                        @error('purch_method_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>

                <div class="col-12 mb-1">
                    <label class="form-label">المبلغ المتوفر</label>
                    <input type="number" class="form-control" wire:model='avaliable_amount'
                        placeholder="المبلغ المتوفر" />
                    @error('avaliable_amount')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <h3 style="background-color: #7367F0; color:white; border-radius: 5px; ">الملاحظات</h3>

                <div class="col-12 mb-1">
                    <label class="form-label">ملاحظات عامة:</label>
                    <textarea class="form-control" wire:model='notes' rows="3" placeholder="ملاحظات"></textarea>
                    @error('notes')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-12 mb-1">

                    <label class="form-label"> توجيه الطلب إلى :</label>
                    <select class="select2 form-select" wire:model='assign_to'>
                        @foreach (getUserMarketers() as $user_marketer)
                            <option value="{{ $user_marketer->id }}">{{ $user_marketer->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('assign_to')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex justify-content-between mt-2">
                    <button class="btn btn-primary btn-prev">
                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">السابق</span>
                    </button>
                    <button wire:click='update' class="btn btn-success btn-next">
                        <span class="align-middle d-sm-inline-block d-none">حفظ</span>
                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                    </button>
                </div>


                {{--
                <div class="bs-stepper vertical wizard-modern create-app-wizard">


                    <div class="bs-stepper-header" role="tablist">

                        <div class="step" data-target="#create-app-details" role="tab"
                            id="create-app-details-trigger" wire:ignore.self>
                            <button type="button" class="step-trigger py-75" wire:ignore.self>


                                <span
                                    class="bs-stepper-box
                            @if ($errors->has('customer_name') || $errors->has('customer_phone') || $errors->has('street_name') || $errors->has('employer_name') || $errors->has('employee_type') || $errors->has('additional_number') || $errors->has('order_status_id') || $errors->has('support_eskan')) bg-danger @endif
                            ">
                                    <span wire:ignore>
                                        <i data-feather="book" class="font-medium-3"></i>
                                    </span>
                                </span>

                                <span class="bs-stepper-label">
                                    <span
                                        class="bs-stepper-title
                                    @if ($errors->has('customer_name') || $errors->has('customer_phone') || $errors->has('street_name') || $errors->has('employer_name') || $errors->has('employee_type') || $errors->has('additional_number') || $errors->has('order_status_id') || $errors->has('support_eskan')) text-danger @endif
                                ">معلومات
                                        العميل</span>
                                    <span class="bs-stepper-subtitle"></span>
                                </span>
                            </button>
                        </div>


                        <div class="step" data-target="#create-app-frameworks" role="tab"
                            id="create-app-frameworks-trigger" wire:ignore.self>
                            <button type="button" class="step-trigger py-75" wire:ignore.self>
                                <span
                                    class="bs-stepper-box
                            @if ($errors->has('property_type_id') || $errors->has('city_id') || $errors->has('branch_id') || $errors->has('area') || $errors->has('price_from') || $errors->has('price_to') || $errors->has('desire_to_buy_id') || $errors->has('purch_method_id') || $errors->has('avaliable_amount')) bg-danger @endif
                            ">
                                    <span wire:ignore>
                                        <i data-feather="package" class="font-medium-3"></i>
                                    </span>
                                </span>
                                <span class="bs-stepper-label">
                                    <span
                                        class="bs-stepper-title
                                @if ($errors->has('property_type_id') || $errors->has('city_id') || $errors->has('branch_id') || $errors->has('area') || $errors->has('price_from') || $errors->has('price_to') || $errors->has('desire_to_buy_id') || $errors->has('purch_method_id') || $errors->has('avaliable_amount')) text-danger @endif
                                ">معلومات
                                        العقار</span>
                                    <span class="bs-stepper-subtitle"></span>
                                </span>
                            </button>
                        </div>


                        <div class="step" data-target="#create-app-database" role="tab"
                            id="create-app-database-trigger" wire:ignore.self>
                            <button type="button" class="step-trigger py-75" wire:ignore.self>
                                <span class="bs-stepper-box @if ($errors->has('assign_to')) bg-danger @endif ">
                                    <span wire:ignore>
                                        <i data-feather="command" class="font-medium-3"></i>
                                    </span>
                                </span>
                                <span class="bs-stepper-label">
                                    <span
                                        class="bs-stepper-title @if ($errors->has('assign_to')) text-danger @endif ">الملاحظات</span>
                                    <span class="bs-stepper-subtitle"></span>
                                </span>
                            </button>
                        </div>

                    </div>

                    <!-- content -->


                    <div class="bs-stepper-content shadow-none" wire:ignore.self>




                      <div id="create-app-details" class="content" role="tabpanel"
                            aria-labelledby="create-app-details-trigger">

                        </div>




                        <div id="create-app-frameworks" class="content" role="tabpanel"
                            aria-labelledby="create-app-frameworks-trigger" >

                            <div class="d-flex justify-content-between mt-2">
                                <button class="btn btn-outline-secondary btn-prev" disabled>
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                </button>
                                <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">التالي</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>

                        </div>



                        <div id="create-app-database" class="content" role="tabpanel"
                            aria-labelledby="create-app-database-trigger">

                            <div class="col-12 mb-1">
                                <label class="form-label">ملاحظات عامة:</label>
                                <textarea class="form-control" wire:model='notes' rows="3" placeholder="ملاحظات"></textarea>
                                @error('notes')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-12 mb-1">

                                <label class="form-label"> توجيه الطلب إلى :</label>
                                <select class="select2 form-select" wire:model='assign_to'>
                                    @foreach (getUserMarketers() as $user_marketer)
                                        <option value="{{ $user_marketer->id }}">{{ $user_marketer->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('assign_to')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between mt-2">
                                <button class="btn btn-primary btn-prev">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                </button>
                                <button wire:click='update' class="btn btn-success btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">حفظ</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>

                        </div>




                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>
