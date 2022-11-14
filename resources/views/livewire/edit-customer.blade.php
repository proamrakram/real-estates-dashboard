<div class="modal fade" id="editCustomerForms" tabindex="-1" aria-labelledby="titleForms" aria-hidden="true"
    wire:ignore.self>


    <div class="modal-dialog modal-dialog-centered modal-lg">


        <div class="modal-content">

            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body pb-3 px-sm-3">
                <h1 class="text-center mb-1" id="titleForms">تحديث حساب عميل</h1>
                <p class="text-center mb-2"></p>

                <div class="bs-stepper vertical wizard-modern create-app-wizard">



                    <div class="bs-stepper-content shadow-none">
                        <div id="create-customer-details" role="tabpanel"
                            aria-labelledby="create-customer-details-trigger">

                            <h4>
                                <i data-feather="info" class="font-medium-3"></i>
                                معلومات العميل
                            </h4>

                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <label class="form-label" for="modalAddressFirstName">الاسم</label>
                                    <input type="text" class="form-control" wire:model='name' placeholder="الاسم" />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-1">
                                    <label class="form-label" for="customer-phone-number-id">رقم الجوال</label>
                                    <input type="text" class="form-control" wire:model='phone'
                                        placeholder="رقم الجوال" />
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12 col-md-6">
                                    <label class="form-label">البريد الالكترونى</label>
                                    <input type="email" class="form-control" wire:model='email'
                                        placeholder="البريد الالكترونى" />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label">رقم الهوية</label>
                                    <input type="text" class="form-control" wire:model='identification_number'
                                        placeholder="رقم الهوية" />
                                    @error('identification_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12 col-md-6 mb-1">
                                    <label class="form-label">حالة العميل</label>

                                    <select class="form-control" wire:model='status'>
                                        <option value="1">نشط</option>
                                        <option value="2">غير نشط</option>
                                    </select>

                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <h4>
                                <i data-feather="file-text" class="font-medium-3"></i>
                                معلومات جهة العمل
                            </h4>

                            <div class="col-12 col-md-6">
                                <label class="form-label">جهة العمل</label>
                            </div>

                            <div class="col-12 mb-1">
                                <input type="text" class="form-control" wire:model='employer_name'
                                    placeholder="جهة العمل" />
                                @error('employer_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row">

                                <div class="col-md-12 mb-1">
                                    <label class="form-label">هل أنت موظف قطاع عام أم خاص ؟</label>
                                    <select class="form-control" wire:model='employee_type'>
                                        <option value="public">عام</option>
                                        <option value="private">خاص</option>
                                    </select>
                                    @error('employee_type')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">

                                <div class="col-md-12 mb-1">
                                    <label class="form-label">هل أنت مؤهل للحصول على دعم وزارة الاسكان ؟</label>
                                    <select class="form-control" wire:model='is_support'>
                                        <option value="1">نعم</option>
                                        <option value="0">لا</option>
                                    </select>
                                    @error('is_support')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <h4>
                                <i data-feather="home" class="font-medium-3"></i>
                                العنوان الوطني
                            </h4>

                            <div class="col-12">
                                <label class="form-label" for="city-id">المنطقة</label>
                                <select wire:model='city_id' class="select2 form-select">
                                    <option value="">اختيار المنطقة</option>
                                    @foreach (getCities() as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row">.</div>

                            <div class="row">


                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="building-number-id">رقم المبنى</label>
                                        <input type="text" class="form-control" wire:model='building_number'
                                            placeholder="رقم المبنى" />
                                        <small class="text-danger"></small>
                                        @error('building_number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="street-name-id">اسم الشارع</label>
                                        <input type="text" class="form-control" wire:model='street_name'
                                            placeholder="اسم الشارع" />

                                        @error('street_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="neighborhood-name-id">اسم الحي</label>
                                        <input type="text" class="form-control" wire:model='neighborhood_name'
                                            placeholder="اسم الحي" />
                                        @error('neighborhood_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label">الرمز البريدي</label>
                                        <input type="text" class="form-control" wire:model='zip_code'
                                            placeholder="الرمز البريدي" />
                                        @error('zip_code')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="additional-number-id">الرقم الإضافي</label>
                                        <input type="text" class="form-control" wire:model='additional_number'
                                            placeholder="الرقم الاضافي" />
                                        @error('additional_number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="unit-number-id">رقم الوحدة</label>
                                        <input type="text" class="form-control" wire:model='unit_number'
                                            placeholder="رقم الوحدة" />

                                        @error('unit_number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>


                                <div class="d-flex justify-content-between mt-2">
                                    <button type="button" id="customer-submit-button" wire:click='updateCustomer'
                                        class="btn btn-success ">
                                        <span class="align-middle d-sm-inline-block d-none">تحديث</span>
                                        <i data-feather="check" class="align-middle ms-sm-25 ms-0"></i>
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
