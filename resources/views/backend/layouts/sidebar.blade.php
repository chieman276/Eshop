<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ route('backend.pase.home')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="{{ route('backend.categories.index')}}">
                                <div class="sb-nav-link-icon"></div>
                                Danh Mục Sản Phẩm
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="{{ route('backend.products.index')}}">
                                <div class="sb-nav-link-icon"></div>
                                Danh Sách Sản Phẩm
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="{{ route('customers.index')}}">
                                <div class="sb-nav-link-icon"></div>
                                Danh Sách Khách Hàng
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="">
                                <div class="sb-nav-link-icon"></div>
                                Danh Sách Người Dùng
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>



                </nav>
            </div>