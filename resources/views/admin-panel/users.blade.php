@extends('partials.admin-panel.layout')
@section('title', 'المستخدمين')
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
                            <h2 class="content-header-title float-start mb-0">المستخدمين</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active">المستخدمين
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="{{ route('panel.create.user.info') }}" class="btn btn-primary"><span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus me-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>انشاء مستخدم جديدة</span></a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
                    <div class="row">

                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">{{ getUsersCount() }}
                                        </h3>
                                        <span>عدد المستخدمين الكلي</span>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">{{ $users->where('user_type', 'finance')->count() }}
                                        </h3>
                                        <span>عدد المسوقين</span>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">{{ $users->where('user_type', 'admin')->count() }}</h3>
                                        <span>عدد الإدارة</span>
                                    </div>
                                    <div class="avatar bg-light-danger p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user-plus" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">{{ $users->where('user_type', 'office')->count() }}</h3>
                                        <span>عدد المكاتب</span>
                                    </div>
                                    <div class="avatar bg-light-success p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user-check" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">{{ $users->where('user_type', '1')->count() }}</h3>
                                        <span>عدد المراقبون</span>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user-x" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

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
                                                        colspan="1">الاسم</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">رقم
                                                        الجوال
                                                    </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">نوع
                                                        المستخدم
                                                    </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                                        الفروع
                                                    </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                                        الحالة
                                                    </th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                                                        تحكم
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>




                                                @foreach ($users as $user)
                                                    <tr class="odd">
                                                        <td class="sorting_1">{{ $user->id }}</td>
                                                        <td class="sorting_1">{{ $user->name }}</td>

                                                        <td> {{ $user->phone }} </td>

                                                        <td>
                                                            @if ($user->user_type == 'admin')
                                                                <span class="badge bg-danger">مدير</span>
                                                            @endif

                                                            @if ($user->user_type == 'office')
                                                                <span class="badge bg-warning">مكتب</span>
                                                            @endif

                                                            @if ($user->user_type == 'marketer')
                                                                <span class="badge bg-info">مسوق</span>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            <select>
                                                                @foreach (getUserBranches($user->branches_ids) as $branch)
                                                                    <option>{{ $branch->name }}</option>
                                                                @endforeach
                                                            </select>

                                                        </td>


                                                        <td>
                                                            @if ($user->user_status == 'active')
                                                                <span class="badge bg-success">نشط</span>
                                                            @else
                                                                <span class="badge bg-danger"> غير نشط</span>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            <div class="d-inline-flex">

                                                                <a href="{{ route('panel.edit.user.info', $user->id) }}"
                                                                    class="item-edit text-primary">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>


                                                                <a class="btn item-edit"
                                                                    href="{{ route('admin.change.user.status', $user->id) }}"
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
                                                    {{ $users->perPage() }} من اصل {{ $users->total() }}
                                                </div>
                                            </div>


                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="DataTables_Table_0_paginate">
                                                    <ul class="pagination">
                                                        {{ $users->withQueryString()->onEachSide(0)->links() }}
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new record -->

                    </section>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
