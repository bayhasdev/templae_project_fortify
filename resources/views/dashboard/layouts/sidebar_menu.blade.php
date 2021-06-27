@section('sidebar_menu')
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <x-dashboard.sidebar_menu_item isActive="{{ AppHelpers::isCurrentUrl('dashboard.home') ? 'active' : '' }}"
                    url="{{ route('dashboard.home') }}" title="الرئيسية" featherIcon='home' />



                {{-- DropDown menu Items start --}}
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="tr"
                        aria-controls="collapseExample">
                        <span data-feather="chevron-down"></span>
                        المنتجات
                    </a>
                </li>
                <div class="collapse ps-4 border-bottom" id="collapseExample">
                    <x-dashboard.sidebar_menu_item isActive=" {{ request()->is('product') ? 'active' : '' }}" url="#"
                        title="المنتجات" />
                    <x-dashboard.sidebar_menu_item isActive=" {{ request()->is('category') ? 'active' : '' }}" url="#"
                        title="الفئات" />
                </div>
                {{-- DropDown menu Items end --}}

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file"></span> الطلبات
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="users"></span>
                        الزبائن
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2"></span>
                        التقارير
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        التكاملات
                    </a>
                </li>
            </ul>

            <hr>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>التقارير المحفوظة</span>
                <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <x-dashboard.sidebar_menu_item isActive="" url="#" title="الشهر الحالي" />
                <x-dashboard.sidebar_menu_item isActive="" url="#" title="الربع الأخير" />
                <x-dashboard.sidebar_menu_item isActive="" url="#" title="التفاعل الإجتماعي" />
                <x-dashboard.sidebar_menu_item isActive="" url="#" title="مبيعات نهاية العام" />

                {{-- add specific menu item from page content --}}
                @yield('sidebar_menu_extra_item')

            </ul>
        </div>
    </nav>
@show
