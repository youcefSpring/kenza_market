<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{ url('/admin') }}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">Tableau de bord  </span></a>
            </li>


            <li class="nav-item"><a href=""><i class="la la-barcode"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> Les produits</span>
                <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                    <ul class="menu-content">
                        <li >

                            <a class="menu-item" href="{{ route('produits.index') }}" data-i18n="nav.dash.ecommerce">
                                La liste</a>
                        </li>


                    </ul>
        </li>
        <li class="nav-item"><a href=""><i class="la la-barcode"></i>
            <span class="menu-title" data-i18n="nav.dash.main"> Les magasins</span>
            <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                <ul class="menu-content">
                    <li >

                        <a class="menu-item" href="{{ route('magasins.index') }}" data-i18n="nav.dash.ecommerce">
                            La liste</a>
                    </li>


                </ul>
    </li>
    <li class="nav-item"><a href=""><i class="la la-barcode"></i>
        <span class="menu-title" data-i18n="nav.dash.main"> Les categories</span>
        <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
            <ul class="menu-content">
                <li >

                    <a class="menu-item" href="{{ route('categories.index') }}" data-i18n="nav.dash.ecommerce">
                        La liste</a>
                </li>


            </ul>
</li>
<li class="nav-item"><a href=""><i class="la la-barcode"></i>
    <span class="menu-title" data-i18n="nav.dash.main"> Les commandes</span>
    <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
        <ul class="menu-content">
            <li >

                <a class="menu-item" href="{{ route('commandes.index') }}" data-i18n="nav.dash.ecommerce">
                    La liste</a>
            </li>


        </ul>
</li>
<li class="nav-item"><a href=""><i class="la la-barcode"></i>
    <span class="menu-title" data-i18n="nav.dash.main"> Les fraudes</span>
    <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
        <ul class="menu-content">
            <li >

                <a class="menu-item" href="{{ route('fraudes.index') }}" data-i18n="nav.dash.ecommerce">
                    La liste</a>
            </li>


        </ul>
</li>
    </div>
</div>
