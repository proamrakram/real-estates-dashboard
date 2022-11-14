@extends('partials.admin-panel.layout')
@section('title', 'الفروع')

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">

                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">الفروع</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">الفروع
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="javascript:;" data-bs-target="#addNewBranch" data-bs-toggle="modal"
                            class="btn btn-primary"><span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus me-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>إضافة فرع</span></a>
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





                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">



                                        <div class="card-header border-bottom p-1">
                                            <div class="head-label"></div>
                                            <div class="dt-action-buttons text-end">
                                                <div class="dt-buttons">
                                                    <button
                                                        class="dt-button buttons-collection btn btn-outline-secondary dropdown-toggle me-2"
                                                        tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-share font-small-4 me-50">

                                                                <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8">
                                                                </path>
                                                                <polyline points="16 6 12 2 8 6"></polyline>
                                                                <line x1="12" y1="2" x2="12"
                                                                    y2="15"></line>
                                                            </svg>
                                                            تصدير
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-between align-items-center mx-0 row">


                                            <div class="col-sm-12 col-md-6">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                                        <label>أظهر
                                                            <select name="DataTables_Table_0_length"
                                                                aria-controls="DataTables_Table_0" class="form-select">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> مدخلات
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-6">
                                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                    <label>ابحث:<input type="search" class="form-control" placeholder=""
                                                            aria-controls="DataTables_Table_0"></label>
                                                </div>
                                            </div>

                                        </div>


                                        <table class="table dataTable no-footer text-center" role="grid"
                                            aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting sorting_asc" tabindex="0" rowspan="1"
                                                        colspan="1" aria-sort="ascending">
                                                        الترتيب
                                                    </th>
                                                    <th class="sorting sorting_asc" tabindex="0" rowspan="1"
                                                        colspan="1" aria-sort="ascending">رقم
                                                        اسم الفرع
                                                    </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                                        كود الفرع</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                                        المنطقة
                                                    </th>

                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                                        الحالة
                                                    </th>

                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                                        عدد المسوقين</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                                        تحكم
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @foreach ($branches as $branch)
                                                    <tr class="odd">
                                                        <td class="sorting_1">{{ $branch->id }}</td>

                                                        <td>{{ $branch->name }}</td>
                                                        <td> {{ $branch->code }}</td>
                                                        <td>{{ $branch->city_name }}</td>
                                                        <td>
                                                            @if ($branch->status == 1)
                                                                <span class="badge bg-success">نشط</span>
                                                            @else
                                                                <span class="badge bg-danger"> غير نشط</span>
                                                            @endif
                                                        </td>

                                                        <td>87</td>
                                                        <td>
                                                            <a href="{{ route('panel.edit.branch', $branch->id) }}"
                                                                class="item-edit active">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a class="btn item-edit"
                                                                href="{{ route('admin.change.branch.status', $branch->id) }}"
                                                                style="padding:0;color:#EA5455 ">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>

                                        </table>

                                        <div class="d-flex justify-content-between mx-0 row">


                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                                    aria-live="polite"> إظهار
                                                    {{ $branches->perPage() }} من اصل {{ $branches->total() }}
                                                </div>
                                            </div>



                                            <div class="col-sm-12 col-md-6">


                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="DataTables_Table_0_paginate">
                                                    <ul class="pagination">
                                                        {{ $branches->withQueryString()->onEachSide(0)->links() }}
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new record -->



                        <div class="modal fade" id="addNewBranch" tabindex="-1" aria-labelledby="addNewAddressTitle"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-transparent">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body pb-5 px-sm-4 mx-50">
                                        <h1 class="address-title text-center mb-1" id="addNewAddressTitle">إضافة
                                            فرع
                                        </h1>
                                        <p class="address-subtitle text-center mb-2 pb-75"></p>

                                        <form
                                            class="row gy-1 gx-2 form form-horizontal"
                                             id="addNewAddressForm">
                                            {{-- @csrf --}}

                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="name">اسم الفرع</label>
                                                <input type="text" id="branch-name" name='branch_name'
                                                    class="form-control" placeholder="اسم الفرع"  />
                                                {{-- @error('branch_name') --}}
                                                <small class="text-danger" id="branch_name_message"></small>
                                                {{-- @enderror --}}
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="code">كود الفرع</label>
                                                <input type="text" id="branch-code" name='branch_code'
                                                    class="form-control" placeholder="مثال : QTF " />
                                                {{-- @error('branch_code') --}}
                                                <small class="text-danger" id="branch_code_message"></small>
                                                {{-- @enderror --}}
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" for="city_id">المنطقة</label>
                                                <select id="city-id" name='city_id' class="select2 form-select"
                                                    >
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}"
                                                            @if ($branch->city_id == $city->id) selected @endif>
                                                            {{ $city->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                {{-- @error('city_id') --}}
                                                <small class="text-danger" id="city_id_message"></small>
                                                {{-- @enderror --}}
                                            </div>

                                            <div class="col-12 text-center mt-2 pt-50">
                                                <button type="button" class="btn btn-primary btn-submit me-1"
                                                    id="save-branch">حفظ</button>
                                                <button type="reset" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal" aria-label="Close">الغاء </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </section>

            </div>
        </div>
    </div>

    @push('branch-scripts')
        <script>
            $(document).ready(function() {

                // Branch
                var branch_name = $("#branch-name");
                var branch_code = $("#branch-code");
                var city_id = $("#city-id");
                var branch_submit = $("#save-branch");

                var branch_name_message = $("#branch_name_message");
                var branch_code_message = $("#branch_code_message");
                var city_id_message = $("#city_id_message");

                branch_submit.click(function() {

                    $.ajax({
                        url: "{{ route('admin.store.branch') }}",
                        type: "POST",
                        data: {
                            _token: '{{ csrf_token() }}',
                            branch_name: branch_name.val(),
                            branch_code: branch_code.val(),
                            city_id: city_id.val()
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(result) {
                            console.log(result);

                            if (result.status) {
                                toastr.success(result.message, 'تمت المهمة!', {
                                    closeButton: true,
                                    tapToDismiss: false,
                                    progressBar: true,
                                    rtl: true
                                });

                                window.location.href = "{{ route('panel.branchs') }}";
                            }
                        },
                        error: function(result) {

                            errors = result.responseJSON.errors;
                            console.log(errors);

                            if (errors.branch_name) {
                                branch_name_message.text(errors.branch_name[0]);
                            }

                            if (errors.branch_code) {
                                branch_code_message.text(errors.branch_code[0]);
                            }

                        }
                    });
                });


            });
        </script>
    @endpush
@endsection
