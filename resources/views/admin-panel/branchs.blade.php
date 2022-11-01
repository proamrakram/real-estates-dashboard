@extends('partials.admin-panel.layout')

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
                                    <table class="datatables-basic table">
                                        <thead>
                                            <tr>
                                                <th>اسم الفرع</th>
                                                <th>كود الفرع</th>
                                                <th>المنطقة</th>
                                                <th>عدد المسوقين</th>
                                                <th>تحكم</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($branches as $branch)
                                                <tr>
                                                    <td>{{ $branch->name }}</td>
                                                    <td> {{ $branch->code }}</td>
                                                    <td>{{ $branch->city_name }}</td>
                                                    <td>87</td>
                                                    <td>
                                                        <x-edit-branch :branch="$branch" :cities="$cities">
                                                        </x-edit-branch>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
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

                                        <form id="addNewAddressForm" class="row gy-1 gx-2">

                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="name">اسم الفرع</label>
                                                <input type="text" id="name" name='name' class="form-control"
                                                    placeholder="اسم الفرع" />
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="form-label" for="code">كود الفرع</label>
                                                <input type="" id="code" name='code' class="form-control"
                                                    placeholder="مثال : QTF " />
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" for="city_id">المنطقة</label>
                                                <select id="city_id" name='city_id' class="select2 form-select">
                                                    @foreach ($cities as $city)
                                                        <option @if ($branch->city_id == $city->id) selected @endif>
                                                            {{ $city->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-12 text-center mt-2 pt-50">
                                                <button type="submit" class="btn btn-primary btn-submit me-1"
                                                    id="type-success">حفظ</button>
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
@endsection

