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
                                                <a class="dropdown-item" href="{{route('honorary')}}">Honorary Presidents</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="{{route('officers')}}">Officers</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="{{route('committee')}}">Committees</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="{{route('members-society')}}">Member Society</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="{{route('events')}}">
                                            Events
                                        </a>

                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="{{route('journals')}}">
                                            Journals
                                        </a>

                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#">
                                            News
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="{{route('contact')}}">
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