<div class="modal fade" id="box" tabindex="-1" aria-labelledby="box" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-lg" wire:ignore.self>
        <div class="modal-content" wire:ignore.self>
            <div class="modal-header bg-transparent" wire:ignore.self>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-3 px-sm-3" wire:ignore.self>
                <h1 class="text-center mb-1" id="box" wire:ignore.self>تحديث تفاصيل العقارات</h1>
                <p class="text-center mb-2" wire:ignore.self>إضافة احدث انواع العقارات</p>

                <div class="bs-stepper vertical wizard-modern create-app-wizard" wire:ignore.self>


                    <div class="bs-stepper-header" role="tablist" wire:ignore.self>

                        <div class="step {{ $active_neighborhood }}" wire:click="changeTheme('neighborhood')"
                            data-target="#create-city-neighborhood" role="tab"
                            id="create-city-neighborhood-trigger">
                            <button type="button" class="step-trigger py-75">
                                <span class="bs-stepper-box" aria-selected="{{ $selected_neighborhood }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-book font-medium-3">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                    </svg>
                                </span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">المناطق والأحياء</span>
                                    <span class="bs-stepper-subtitle">إضافة منطقة او حي جديد</span>
                                </span>
                            </button>
                        </div>

                        {{-- <div class="step {{ $active_property_types }}" wire:click="changeTheme('property_types')"
                            data-target="#create-property-statuses-types" role="tab"
                            id="create-property-statuses-types-trigger">
                            <button type="button" class="step-trigger py-75">
                                <span class="bs-stepper-box" aria-selected="{{ $selected_property_types }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-package font-medium-3">
                                        <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                        </path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                    </svg>
                                </span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">انواع العقارات وحالاتها</span>
                                    <span class="bs-stepper-subtitle">إضافة نوع عقار او حالة عقار جديد</span>
                                </span>
                            </button>
                        </div> --}}
                    </div>

                    <!-- content -->
                    <div class="bs-stepper-content shadow-none" wire:ignore.self>

                        {{-- city neighborhood --}}
                        <div id="create-city-neighborhood" role="tabpanel"
                            aria-labelledby="create-city-neighborhood-trigger">

                            @if ($selected_neighborhood)

                                <h5>إضافة مناطق</h5>

                                <form class="needs-validation  form-horizontal mb-1">



                                    <div>
                                        <label class="form-label" for="city-name">اسم المنطقة</label>
                                        <input type="text" wire:model='city_name' class="form-control city"
                                            placeholder="ادخل اسم المنطقة" aria-label="اسم المنطقة"
                                            aria-describedby="city-name">
                                        @error('city_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="col-form-label" for="city-code">كود المنطقة</label>
                                        <input type="text" class="form-control city" wire:model='city_code'
                                            placeholder="كود المنطقة مثل QTF" aria-label="كود المنطقة"
                                            aria-describedby="city-code">

                                        @error('city_code')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <button type="reset" wire:click='saveCity'
                                            class="btn btn-success btn-sm me-1 waves-effect waves-float waves-light">إضافة</button>
                                    </div>
                                </form>

                                <h5>إضافة احياء</h5>

                                <form class="needs-validation  form-horizontal mb-1">



                                    <div>
                                        <label class="form-label">اختيار المنطقة</label>

                                        <select wire:model='city_id'>
                                            @foreach (getCities() as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('city_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="col-form-label" for="neighborhood-name">اسم
                                            الحي</label>

                                        <input type="text" wire:model='neighborhood_name' class="form-control city"
                                            placeholder="ادخل اسم الحي">
                                        @error('neighborhood_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="d-flex justify-content-between mt-2">
                                        <button type="reset" wire:click='neighborhoodSave'
                                            class="btn btn-success btn-sm me-1 waves-effect waves-float waves-light">إضافة</button>
                                    </div>
                                </form>

                            @endif



                            @if ($selected_property_types)
                                {{-- <h5>إضافة نوع عقار جديد</h5>

                                <form class="needs-validation  form-horizontal mb-1" novalidate>

                                    <label class="form-label" for="property-type-id">أنواع العقارات المتوفرة</label>
                                    <select class="select2 form-select select2-hidden-accessible"
                                        id="property-type-id" data-select2-id="property-type-id"
                                        name="property_type_id" tabindex="-1" aria-hidden="true">
                                        @foreach (getPropertyTypes() as $property_type)
                                            <option value="{{ $property_type->id }}" data-select2-id="2">
                                                {{ $property_type->name }}</option>
                                        @endforeach
                                    </select>

                                    <label class="col-form-label" for="property-type-name">اسم نوع العقار
                                        الجديد</label>

                                    <input type="text" id="property-type-name" class="form-control city"
                                        name="property_type_name" placeholder="ادخل اسم نوع العقار الجديد">

                                    <div class="d-flex justify-content-between mt-2">
                                        <button type="reset" id="property-type-submit"
                                            class="btn btn-success btn-sm me-1 waves-effect waves-float waves-light">تحديث</button>
                                    </div>
                                </form>

                                <h5>إضافة حالة عقار جديد</h5>

                                <form class="needs-validation form-horizontal">

                                    <label class="form-label" for="property-status">حالات العقارات المتوفرة</label>
                                    <select class="select2 form-select select2-hidden-accessible" id="property-status"
                                        data-select2-id="property-status" name="property_status_id" tabindex="-1"
                                        aria-hidden="true">
                                        @foreach (getPropertyStatues() as $property_status)
                                            <option value="{{ $property_status->id }}">{{ $property_status->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <label class="col-form-label" for="property-type-name">اسم حالة عقار جديدة</label>

                                    <input type="text" id="property-status-name" class="form-control city"
                                        name="property_status_name" placeholder="ادخل اسم حالة عقار جديدة">

                                    <div class="d-flex justify-content-between mt-2">
                                        <button type="reset" id="property-status-submit"
                                            class="btn btn-success btn-sm me-1 waves-effect waves-float waves-light">تحديث</button>
                                    </div>
                                </form> --}}
                            @endif


                            {{-- <div class="d-flex justify-content-between mt-5" wire:ignore>
                                <button class="btn btn-outline-secondary btn-prev" disabled>
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div> --}}
                        </div>


                        {{-- <div id="create-app-submit" class="content text-center" role="tabpanel"
                            aria-labelledby="create-app-submit-trigger" wire:ignore.self>
                            <h3>شكرا لك 🥳</h3>
                            <p>يمكنك رؤية البيانات المحدثة من خلال تفاصيل العقارات على القائمة الجانبية</p>
                            <img src="{{ asset('app-assets/images/illustration/pricing-Illustration.svg') }}"
                                height="218" alt="illustration" />
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-primary btn-prev">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-success btn-submit">
                                    <span class="align-middle d-sm-inline-block d-none">Submit</span>
                                    <i data-feather="check" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <button type="button"  hidden id="type-success"></button>
    <button type="button"  hidden id="type-error"></button>
    <button type="button"  hidden id="type-warning"></button>
    <button type="button"  hidden id="type-info"></button> --}}
    <button type="button" hidden id="progress-bar"></button>
    {{-- <button type="button"  hidden id="clear-toast-btn"></button> --}}
</div>
<!-- / create app modal -->
