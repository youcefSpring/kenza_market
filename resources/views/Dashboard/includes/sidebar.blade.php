<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{ url('/admin') }}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">لوحة القيادة </span></a>
            </li>


            <li class="nav-item"><a href=""><i class="la la-barcode"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> المستندات</span>
                <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                    <ul class="menu-content">
                        <li >

                            <a class="menu-item" href="{{ route('document.index') }}" data-i18n="nav.dash.ecommerce">
                                القائمة</a>
                        </li>


                    </ul>
        </li>

    </div>
</div>
