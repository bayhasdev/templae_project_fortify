@extends('dashboard.layouts.master')

@section('title', 'الرئيسية')

@section('custom_top_navbar')
    <div style="width: 100% "></div>
    <input class="form-control form-control-dark w-100" type="text" name="serach" placeholder="بحث" aria-label="بحث">
@stop

@section('sidebar_menu_extra_item')
    <x-dashboard.sidebar_menu_item isActive="{{ isCurrentUrlActive('dashboard') }}" url="#" title="رابط اضافي"
        featherIcon='plus' />
@endsection

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">عنوان القسم</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">تصدير</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                هذا الأسبوع
            </button>
        </div>
    </div>
  
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>عنوان</th>
                    <th>عنوان</th>
                    <th>عنوان</th>
                    <th>عنوان</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1,001</td>
                    <td>بيانات</td>
                    <td>عشوائية</td>
                    <td>تثري</td>
                    <td>الجدول</td>
                </tr> 
            </tbody>
        </table>
    </div>
@stop
