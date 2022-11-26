<header id="header"
class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink"
data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
<div class="header-body border-top-0 bg-dark box-shadow-none">
    <div class="header-container container">
        <div class="header-row">
            <div class="header-column">
                <div class="header-row">
                    <div class="header-logo">
                        <a href="{{ route('welcome') }}">
                            <img alt="Porto" width="82" height="40"
                                src="{{ asset('images/b3a79706-a1fc-4102-ac81-797f7c96adeb.jpeg') }}">
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-column justify-content-end">
                <div class="header-row">
                    <div
                        class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                        <div
                            class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                            <nav class="collapse">
                                <ul class="nav nav-pills" id="mainNav">
                                    <li class="dropdown">
                                        <a class="dropdown-item active" href="{{ route('welcome') }}">
                                            Home
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item " href="{{route('about')}}">
                                            About Caans
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="{{route('president')}}">
                                            Presidential Message
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#">
                                            Caans Members
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="#">Honorary Presidents</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="#">Officers</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="#">Committees</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="#">Member Society</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="#">
                                            Events
                                        </a>

                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="#">
                                            Journals
                                        </a>

                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#">
                                            News
                                        </a>
                                    </li>
                                    {{-- <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Membership
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Single Product</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="shop-product-full-width.html">Full Width</a></li>
                                                        <li><a class="dropdown-item" href="shop-product-sidebar-left.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="shop-product-sidebar-right.html">Right Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="shop-product-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a></li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">3 Columns</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="shop-3-columns-full-width.html">Full Width</a></li>
                                                        <li><a class="dropdown-item" href="shop-3-columns-sidebar-left.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="shop-3-columns-sidebar-right.html">Right Sidebar </a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">2 Columns</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="shop-2-columns-full-width.html">Full Width</a></li>
                                                        <li><a class="dropdown-item" href="shop-2-columns-sidebar-left.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="shop-2-columns-sidebar-right.html">Right Sidebar </a></li>
                                                        <li><a class="dropdown-item" href="shop-2-columns-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">1 Column</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="shop-1-column-full-width.html">Full Width</a></li>
                                                        <li><a class="dropdown-item" href="shop-1-column-sidebar-left.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="shop-1-column-sidebar-right.html">Right Sidebar </a></li>
                                                        <li><a class="dropdown-item" href="shop-1-column-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
                                                <li><a class="dropdown-item" href="shop-login.html">Login</a></li>
                                                <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                                                <li><a class="dropdown-item" href="shop-order-complete.html">Order Complete</a></li>
                                            </ul>
                                        </li> --}}
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="#">
                                            Contact
                                        </a>

                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                            data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</header>