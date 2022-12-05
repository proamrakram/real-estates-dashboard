<div class="vertical-wizard">
    <div class="bs-stepper vertical vertical-wizard-example">
        <div class="bs-stepper-header">

            <div class="step" data-target="#account-details-vertical" role="tab"
                id="account-details-vertical-trigger">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">1</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Account Details</span>
                        <span class="bs-stepper-subtitle">Setup Account Details</span>
                    </span>
                </button>
            </div>

            {{-- <div class="step" data-target="#personal-info-vertical" role="tab"
                id="personal-info-vertical-trigger">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">2</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Personal Info</span>
                        <span class="bs-stepper-subtitle">Add Personal Info</span>
                    </span>
                </button>
            </div>

            <div class="step" data-target="#address-step-vertical" role="tab" id="address-step-vertical-trigger">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">3</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Address</span>
                        <span class="bs-stepper-subtitle">Add Address</span>
                    </span>
                </button>
            </div>

            <div class="step" data-target="#social-links-vertical" role="tab" id="social-links-vertical-trigger">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">4</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Social Links</span>
                        <span class="bs-stepper-subtitle">Add Social Links</span>
                    </span>
                </button>
            </div> --}}
        </div>


        <div class="bs-stepper-content">

            <div id="account-details-vertical" role="tabpanel" aria-labelledby="account-details-vertical-trigger">

                <div class="content-header">
                    <h5 class="mb-0">Account Details</h5>
                    <small class="text-muted">Enter Your Account Details.</small>
                </div>


                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label">الاسم</label>
                        <input type="text" class="form-control" wire:model='customer_name' placeholder="الاسم" />
                        @error('customer_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-1 col-md-6">
                        <label class="form-label">رقم الجوال</label>
                        <input type="tel" class="form-control" maxlength="10" wire:model='customer_phone'
                            placeholder="رقم الجوال" />
                        @error('customer_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label">جهة العمل</label>
                        <input type="text" class="form-control" wire:model='employer_name' placeholder="جهة العمل" />
                        @error('employer_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label">هل أنت موظف قطاع عام أم قطاع خاص ؟</label>
                        <select class="form-control" wire:model='employee_type'>
                            <option value="public" selected>عام</option>
                            <option value="private">خاص</option>
                        </select>
                        @error('employee_type')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label">هل أنت مؤهل للحصول على دعم وزارة الاسكان ؟</label>
                        <select class="form-control" wire:model='support_eskan'>
                            <option value="1">نعم</option>
                            <option value="0">لا</option>
                        </select>
                        @error('support_eskan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-outline-secondary btn-prev" disabled>
                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                    </button>
                </div>
            </div>


            {{-- <div id="personal-info-vertical" role="tabpanel" aria-labelledby="personal-info-vertical-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Personal Info</h5>
                    <small>Enter Your Personal Info.</small>
                </div>
                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-first-name">First Name</label>
                        <input type="text" id="vertical-first-name" class="form-control" placeholder="John" />
                    </div>
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-last-name">Last Name</label>
                        <input type="text" id="vertical-last-name" class="form-control" placeholder="Doe" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-country">Country</label>
                        <select class="select2 w-100" id="vertical-country">
                            <option label=" "></option>
                            <option>UK</option>
                            <option>USA</option>
                            <option>Spain</option>
                            <option>France</option>
                            <option>Italy</option>
                            <option>Australia</option>
                        </select>
                    </div>
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-language">Language</label>
                        <select class="select2 w-100" id="vertical-language" multiple>
                            <option>English</option>
                            <option>French</option>
                            <option>Spanish</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                    </button>
                </div>
            </div>


            <div id="address-step-vertical" role="tabpanel" aria-labelledby="address-step-vertical-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Address</h5>
                    <small>Enter Your Address.</small>
                </div>
                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-address">Address</label>
                        <input type="text" id="vertical-address" class="form-control"
                            placeholder="98  Borough bridge Road, Birmingham" />
                    </div>
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-landmark">Landmark</label>
                        <input type="text" id="vertical-landmark" class="form-control"
                            placeholder="Borough bridge" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="pincode2">Pincode</label>
                        <input type="text" id="pincode2" class="form-control" placeholder="658921" />
                    </div>
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="city2">City</label>
                        <input type="text" id="city2" class="form-control" placeholder="Birmingham" />
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                    </button>
                </div>
            </div> --}}

            {{--
            <div id="social-links-vertical"  role="tabpanel"
                aria-labelledby="social-links-vertical-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Social Links</h5>
                    <small>Enter Your Social Links.</small>
                </div>
                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-twitter">Twitter</label>
                        <input type="text" id="vertical-twitter" class="form-control"
                            placeholder="https://twitter.com/abc" />
                    </div>
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-facebook">Facebook</label>
                        <input type="text" id="vertical-facebook" class="form-control"
                            placeholder="https://facebook.com/abc" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-google">Google+</label>
                        <input type="text" id="vertical-google" class="form-control"
                            placeholder="https://plus.google.com/abc" />
                    </div>
                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-linkedin">Linkedin</label>
                        <input type="text" id="vertical-linkedin" class="form-control"
                            placeholder="https://linkedin.com/abc" />
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-success btn-submit">Submit</button>
                </div>
            </div> --}}


        </div>
    </div>
</div>
