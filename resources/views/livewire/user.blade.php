<div class="row">
    <div class="col-12">
        <div class="card">

            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">


                <div class="card-header border-bottom p-1">
                    <div class="head-label"></div>
                    <div class="dt-action-buttons text-end">
                        <div class="dt-buttons">
                            <button class="dt-button buttons-collection btn btn-outline-secondary dropdown-toggle me-2"
                                tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true"
                                aria-expanded="false">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-share font-small-4 me-50">

                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8">
                                        </path>
                                        <polyline points="16 6 12 2 8 6"></polyline>
                                        <line x1="12" y1="2" x2="12" y2="15"></line>
                                    </svg>
                                    تصدير
                                </span>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-between align-items-center mx-0 row">


                    <div class="col-sm-12 col-md-3">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length">
                                <label>أظهر
                                    <select aria-controls="DataTables_Table_0" wire:model='rows_number'
                                        class="form-select">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> مدخلات
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-9">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter">

                            {{-- <label> الفرع:
                                <select wire:model='branch_id'>
                                    <option value="all" selected>الكل</option>

                                    @foreach (getBranches() as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                    @endforeach
                                </select>
                            </label> --}}

                            <label>حالة المستخدم:
                                <select wire:model='user_status'>
                                    <option value="all" selected>الكل</option>
                                    <option value="active" selected>نشط</option>
                                    <option value="inactive" selected>غير نشط</option>
                                </select>
                            </label>

                            <label> نوع المستخدم:
                                <select wire:model='user_type'>
                                    <option value="all" selected>الكل</option>
                                    {{-- <option value="superadmin" selected>ادمن رئيسي</option> --}}
                                    <option value="admin" selected>أدمن</option>
                                    <option value="office" selected>مكتب</option>
                                    <option value="marketer" selected>مسوق</option>
                                </select>
                            </label>

                            <label>ابحث:<input type="search" wire:model='search' class="form-control"
                                    placeholder="الاسم/ رقم الهاتف"></label>
                        </div>
                    </div>

                </div>

                <table class="table dataTable no-footer text-center" role="grid"
                    aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting sorting_asc" tabindex="0" rowspan="1" colspan="1"
                                aria-sort="ascending">الترتيب</th>
                            <th class="sorting sorting_asc" tabindex="0" rowspan="1" colspan="1">الاسم</th>
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
                                    @if ($user->user_type == 'superadmin')
                                        <span class="badge bg-success">ادمن رئيسي</span>
                                    @endif

                                    @if ($user->user_type == 'admin')
                                        <span class="badge bg-danger">ادمن فرعي</span>
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


                                        <a class="btn item-edit" wire:click='changeUserStatus({{ $user->id }})'
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
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            إظهار
                            {{ $users->perPage() }} من اصل {{ $users->total() }}
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
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
