<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="false">
                        {{-- <img src="{{ auth()->user()->avatar }}" alt="">{{ auth()->user()->name }} --}}
                        <img src="\img\core-img\administrator-male.png" alt="">Librarian
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="fas fa-sign-out pull-right"></i> {{ __('views.backend.section.header.menu_0') }}
                            </a>
                        </li>
                        <li>
                                <a href="{{ route('/') }}">
                                    <i class="fa fa-home pull-right"></i> Home
                                </a>
                            </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>