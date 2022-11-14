@extends('partials.admin-panel.layout')
@section('title', 'العملاء')

@section('content')

    @push('livewire-styles')
        @livewireStyles()
    @endpush
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">العملاء</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">العملاء
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                @livewire('create-customer')



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
                                                        colspan="1" aria-sort="ascending">الترتيب</th>
                                                    <th class="sorting sorting_asc" tabindex="0" rowspan="1"
                                                        colspan="1" aria-sort="ascending">الاسم</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">رقم
                                                        الجوال
                                                    </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">المنطقة
                                                    </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">القطاع
                                                    </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">الحالة
                                                    </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">تحكم
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>




                                                @foreach ($customers as $customer)
                                                    <tr class="odd">
                                                        <td class="sorting_1">{{ $customer->id }}</td>
                                                        <td> {{ $customer->name }} </td>
                                                        <td> {{ $customer->phone }} </td>
                                                        <td> {{ getCityName($customer->city_id) }} </td>

                                                        <td>
                                                            @if ($customer->employee_type == 'public')
                                                                <span class="badge bg-success">عام</span>
                                                            @endif

                                                            @if ($customer->employee_type == 'private')
                                                                <span class="badge bg-dark">خاص</span>
                                                            @endif

                                                            @if (!$customer->employee_type == 'private' && !$customer->employee_type == 'public')
                                                                <span class="badge bg-dark">غير موجود</span>
                                                            @endif


                                                        </td>
                                                        <td>
                                                            @if ($customer->status == 1)
                                                                <span class="badge bg-success">نشط</span>
                                                            @endif

                                                            @if ($customer->status == 2)
                                                                <span class="badge bg-danger">غير نشط</span>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            <div class="d-inline-flex">

                                                                {{-- <a href="view-order.html" class="item-view">
                                                                    <i class="fas fa-eye"></i>
                                                                </a> --}}

                                                                @livewire('edit-button', ['customer_id' => $customer->id])

                                                                <a class="btn item-edit"
                                                                href="{{ route('admin.change.customer.status', $customer->id) }}"
                                                                style="padding:0;color:#EA5455 ">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <div class="d-flex justify-content-between mx-0 row">


                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                                    aria-live="polite"> إظهار
                                                    {{ $customers->perPage() }} من اصل {{ $customers->total() }}
                                                </div>
                                            </div>



                                            <div class="col-sm-12 col-md-6">


                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="DataTables_Table_0_paginate">
                                                    <ul class="pagination">
                                                        {{ $customers->withQueryString()->onEachSide(0)->links() }}
                                                        {{--
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="DataTables_Table_0_previous">
                                                        <a href="#" aria-controls="DataTables_Table_0"
                                                            data-dt-idx="0" tabindex="0"
                                                            class="page-link">السابق
                                                        </a>
                                                    </li>

                                                    <li class="paginate_button page-item active">
                                                        <a href="#" aria-controls="DataTables_Table_0"
                                                            data-dt-idx="1" tabindex="0"
                                                            class="page-link">1
                                                        </a>
                                                    </li>

                                                    <li class="paginate_button page-item next disabled"
                                                        id="DataTables_Table_0_next">
                                                        <a href="#" aria-controls="DataTables_Table_0"
                                                            data-dt-idx="2" tabindex="0" class="page-link">
                                                            التالي
                                                        </a>
                                                    </li> --}}
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new record -->




                        @livewire('edit-customer')



                    </section>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


    @push('customers-scripts')
        @livewireScripts()
    @endpush

@endsection
