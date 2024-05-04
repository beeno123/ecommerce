<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                    <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul>
            </li>


            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hotel"></i><span>Manage
                        Slider</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.slider') }}">All Slider</a></li>



                </ul>
            </li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hotel"></i><span>
                        WhyChooseUs</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.whyChooseUs') }}">Why Choose Us</a></li>



                </ul>
            </li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hotel"></i><span>Manage
                        Resturent</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('all.category') }}">All Categories</a></li>
                    <li><a class="nav-link" href="{{ route('all.products') }}">All Products</a></li>


                </ul>
            </li>

            <a href="{{ route('admin.setting') }}" class="nav-link"><i class="fas fa-fire"></i><span>
                    Settings</span></a>

        </ul>


    </aside>
</div>
