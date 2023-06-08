<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{ url('/stock') }}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">Tableau de Bord </span></a>
            </li>



            <li class="nav-item"><a href=""><i class="la la-barcode"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> Les Produits</span>
                        <ul class="menu-content">
                            <li >
                                <a class="menu-item" href="{{ route('vendor.ProductList') }}" data-i18n="nav.dash.ecommerce">
                                    La Liste  </a>
                            </li>
                            {{-- <li>
                                <a class="menu-item" href="{{ route('stock.ProductCreate') }}" data-i18n="nav.dash.crypto">
                                    Ajouter Nouveau </a>
                            </li>
                            {{-- <li>
                                <a class="menu-item" href="{{ route('importEmployeeExcel') }}" data-i18n="nav.dash.crypto">
                                    Importer Excel </a>
                            </li> --}}
                        </ul>
            </li>
            <li class="nav-item"><a href=""><i class="la la-cart-arrow-down"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> Les Ventes</span>
                    <ul class="menu-content">
                        <li >
                            <a class="menu-item" href="{{ route('vendor.SaleList') }}" data-i18n="nav.dash.ecommerce">
                                La Liste  </a>
                        </li>
                        <li>
                            <a class="menu-item" href="{{ route('vendor.SaleCreate') }}" data-i18n="nav.dash.crypto">
                                Ajouter Nouveau </a>
                        </li>

                    </ul>
        </li>


    </div>
</div>
