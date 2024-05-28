<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" aria-label="Toggle Navigation" data-bs-original-title="Toggle Navigation">
                <span class="navbar-toggle-icon"><span class="toggle-line"></span></span>
            </button>
        </div>
        <a class="navbar-brand" href="#">
            <div class="d-flex align-items-center py-3">
                <img class="me-2" src="{{ asset('adminassets/assets/img/icons/spot-illustrations/falcon.png') }}"
                    alt="" width="40">
                <span class="font-sans-serif">Admin</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <!-- Dashboard Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <svg class="svg-inline--fa fa-chart-pie fa-w-17" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chart-pie" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                </li>

                <!-- Customers Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#customers" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="customers">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <svg class="svg-inline--fa fa-users fa-w-20" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="users" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M96 256a128 128 0 1 0 0-256 128 128 0 0 0 0 256zm448-32a128 128 0 1 0 0-256 128 128 0 0 0 0 256zM309.1 128c4.4 9.9 8.9 20.1 13.4 30.4a72 72 0 0 0 69.2 42.7H480a72 72 0 0 0 69.2-42.7c4.5-10.3 9-20.5 13.4-30.4H309.1zM120 256a120 120 0 0 0-120 120c0 66.2 53.8 120 120 120h56a72 72 0 0 0 72-72V360a72 72 0 0 0-72-72h-56zm240 64h56a72 72 0 0 1 72 72v24a72 72 0 0 1-72 72h-56a120 120 0 0 1-120-120 120 120 0 0 1 120-120zm240 0a120 120 0 0 0-120 120c0 66.2 53.8 120 120 120h56a72 72 0 0 0 72-72V360a72 72 0 0 0-72-72h-56z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Customers</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="customers">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('backend.customers.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('backend.customers.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>



                <!-- Orders Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#orders" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="orders">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for orders -->
                                <svg class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="shopping-cart" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M311.95 256l-33.5-67H120.86c-8.13 0-15.45 5.09-18.28 12.74L63.96 310.89c-1.72 4.24-.77 9.08 2.26 12.35a15.93 15.93 0 0 0 10.62 4.22h379.4l-49.54 140.72c-2.58 7.31.85 15.26 7.56 18.39a15.99 15.99 0 0 0 6.5 1.39c4.07 0 8.07-1.51 11.2-4.39l144-136c5.24-4.94 6.11-13.28 1.81-19.19l-112-224A16.15 16.15 0 0 0 431.95 96H103.36l31.4-112H488c6.9 0 13.12-4.27 15.56-10.71l64-160C572.17-4.23 564.94-.01 556.96 0H44.01C36.03 0 28.81-4.23 26.36-10.71l-24-64C.17-86.22-7.06-96 .01-96h48c13.25 0 24 10.75 24 24s-10.75 24-24 24H40.5l23.83 63.54 468.5 1.52 39.78-142.19c2.49-8.89 10.89-14.87 20.17-14.87h384c8.84 0 16 7.16 16 16s-7.16 16-16 16h-374c-5.8 0-11.05 3.19-13.77 8.32L330.84 256H311.95zM96.61 176h274.77l33.5 67H120.11zM496 32h-384c-2.21 0-4.2 1.12-5.39 2.96l-32 80c-.39.98-.61 2.04-.61 3.04h448zm16 160h-85.27l-32-64H512zm-191.51 96l26.04 52H232.45zM176 320h224c13.25 0 24 10.75 24 24s-10.75 24-24 24H176c-13.25 0-24-10.75-24-24s10.75-24 24-24zm0-96h224c13.25 0 24 10.75 24 24s-10.75 24-24 24H176c-13.25 0-24-10.75-24-24s10.75-24 24-24zm0-96h224c13.25 0 24 10.75 24 24s-10.75 24-24 24H176c-13.25 0-24-10.75-24-24s10.75-24 24-24zm-24 208c0 13.25 10.75 24 24 24h240c13.25 0 24-10.75 24-24s-10.75-24-24-24H176c-13.25 0-24 10.75-24 24zm0-96c0 13.25 10.75 24 24 24h240c13.25 0 24-10.75 24-24s-10.75-24-24-24H176c-13.25 0-24 10.75-24 24zm0-96c0 13.25 10.75 24 24 24h240c13.25 0 24-10.75 24-24s-10.75-24-24-24H176c-13.25 0-24 10.75-24 24z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Orders</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="orders">
                        <li class="nav-item">
                            <!-- Link to view all orders -->
                            <a class="nav-link" href="{{ route('backend.orders.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new order -->
                            <a class="nav-link" href="{{ route('backend.orders.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>



                <!-- Categories Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#categories" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="categories">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for categories -->
                                <svg class="svg-inline--fa fa-folder fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="folder" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M502.6 192H272l-42.8-64H59.4c-17.8 0-32.4 14.6-32.4 32.6v256.8c0 18 14.5 32.6 32.4 32.6h443.2c17.9 0 32.4-14.6 32.4-32.6V224.6c0-17.8-14.6-32.6-32.4-32.6zM48 416V192c0-8.8 7.2-16 16-16h125.2L256 288h246.7c4.7 0 9.3-1.9 12.7-5.3 3.3-3.3 5.3-7.9 5.3-12.7V96c0-8.8-7.2-16-16-16H168L97.9 24.9C95.8 23 94.1 20.7 92.3 18.9 88.7 15.3 83.5 16 80 16H32C14.3 16 0 30.3 0 48v352c0 17.7 14.3 32 32 32h416c17.7 0 32-14.3 32-32V256H96c-26.5 0-48 21.5-48 48v112H48zM496 96l-96-.1V64l96 .1V96z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Categories</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="categories">
                        <li class="nav-item">
                            <!-- Link to view all categories -->
                            <a class="nav-link" href="{{ route('backend.categories.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new category -->
                            <a class="nav-link" href="{{ route('backend.categories.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>


                <!-- Brands Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#brands" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="brands">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for brands -->
                                <svg class="svg-inline--fa fa-industry fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="industry" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M48 96v320c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32V96c0-17.67-14.33-32-32-32H80c-17.67 0-32 14.33-32 32zm152 160h-48v-48h48v48zm-64-96h48v48h-48v-48zm192 224H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16h192c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16zm-192 0h-32v-32h32v32z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Brands</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="brands">
                        <li class="nav-item">
                            <!-- Link to view all brands -->
                            <a class="nav-link" href="{{ route('backend.brands.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new brand -->
                            <a class="nav-link" href="{{ route('backend.brands.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>


                <!-- Carts Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#carts" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="carts">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for carts -->
                                <svg class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="shopping-cart" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M512 112l-42.42 212.1C466.3 346.8 448 352 432 352H160c-17.69 0-32-14.33-32-32s14.31-32 32-32h240l25.38-126.9A64 64 0 0 1 480 128h64c8.837 0 16-7.163 16-16s-7.163-16-16-16h-48c-8.836 0-16-7.163-16-16s7.164-16 16-16h64c35.35 0 64 28.65 64 64s-28.65 64-64 64h-79.1c-18.2 0-34.38 11.88-39.62 29.51l-31.6 94.82H160c-52.94 0-96 43.06-96 96s43.06 96 96 96h320c52.94 0 96-43.06 96-96s-43.06-96-96-96H273.9l20.02-60.06C303.4 275.9 320.4 272 336 272h176c17.69 0 32-14.33 32-32s-14.31-32-32-32H336c-8.836 0-16-7.163-16-16s7.164-16 16-16h138.3c28.03 0 53.08-19.18 59.72-46.42L576 64H128L94.63 13.51C92.6 9.25 88.5 6.570 84 6.570s-8.625 2.688-10.63 6.875L3.375 120.8c-3.125 5.25-2.875 11.86.75 16.62l56.12 69.12C29.44 216.8 0 258.9 0 304c0 44.18 35.82 80 80 80h48v32c0 35.29 28.71 64 64 64h320c35.29 0 64-28.71 64-64v-32h48c44.18 0 80-35.82 80-80 0-44.13-35.82-80-80-80zM192 432c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48zm288 0c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48zm64-96H160c-26.47 0-48-21.53-48-48s21.53-48 48-48h384c26.47 0 48 21.53 48 48s-21.53 48-48 48z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Carts</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="carts">
                        <li class="nav-item">
                            <!-- Link to view all carts -->
                            <a class="nav-link" href="{{ route('backend.carts.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new cart -->
                            <a class="nav-link" href="{{ route('backend.carts.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>


                <!-- Coupons Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#coupons" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="coupons">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for coupons -->
                                <svg class="svg-inline--fa fa-tags fa-w-20" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="tags" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M619.67 302.9L337.47 20.7c-9.4-9.4-24.6-9.4-33.9 0L20.7 303c-9.4 9.4-9.4 24.6 0 33.9l282.2 282.2c9.4 9.4 24.6 9.4 33.9 0l282.2-282.2c9.5-9.4 9.5-24.6.1-34zM284.4 84.7l256.3 256.3-82.2 82.2-256.3-256.3 82.2-82.2zm-29.8 221.2L83.5 497.5c-4.7 4.7-12.3 4.7-17 0l-56.6-56.6c-4.7-4.7-4.7-12.3 0-17l223.1-223.1 73.1 73.1-56.6 56.6zm322.7-34l-73.1-73.1L503 122.5l73.1 73.1-90.8 90.3zM146.2 32.7l73.1 73.1-90.3 90.8-73.1-73.1 90.3-90.8zm99.5 99.5L338.8 205l-49.3 49.3-22.6-22.6 49.3-49.3zm-65.6 22.6L375.5 205l-49.3 49.3-22.6-22.6 49.3-49.3zM318.9 307l-49.3 49.3-22.6-22.6 49.3-49.3 22.6 22.6zM256 346.8l49.3-49.3 22.6 22.6-49.3 49.3-22.6-22.6z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Coupons</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="coupons">
                        <li class="nav-item">
                            <!-- Link to view all coupons -->
                            <a class="nav-link" href="{{ route('backend.coupons.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new coupon -->
                            <a class="nav-link" href="{{ route('backend.coupons.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>


                <!-- Inventories Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#inventories" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="inventories">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for inventories -->
                                <svg class="svg-inline--fa fa-boxes fa-w-20" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="boxes" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M160 128V64h384v64zm128 192h128v128H288zm-192-64H64V192h128zm192 0H320V192h128zM64 320h128v128H64z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Inventories</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="inventories">
                        <li class="nav-item">
                            <!-- Link to view all inventories -->
                            <a class="nav-link" href="{{ route('backend.inventories.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new inventory -->
                            <a class="nav-link" href="{{ route('backend.inventories.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>


                <!-- Products Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#products" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="products">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for products -->
                                <svg class="svg-inline--fa fa-shopping-bag fa-w-20" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="shopping-bag" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M520 128H192c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h320c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zm-16 80c0 8.84-7.16 16-16 16H192c-8.84 0-16-7.16-16-16v-32c0-8.84 7.16-16 16-16h296v16c0 26.47 21.53 48 48 48s48-21.53 48-48v-16h40c8.84 0 16 7.16 16 16v32zM288 320c0 26.47-21.53 48-48 48s-48-21.53-48-48v-16h16c17.67 0 32-14.33 32-32s-14.33-32-32-32h-32v-16c0-26.47 21.53-48 48-48s48 21.53 48 48v16h-16c-17.67 0-32 14.33-32 32s14.33 32 32 32h32v16zm272-144h-96V96c0-53.02-42.98-96-96-96H184c-53.02 0-96 42.98-96 96v80H72c-13.26 0-24 10.74-24 24v304c0 13.26 10.74 24 24 24h528c13.26 0 24-10.74 24-24V224c0-13.26-10.74-24-24-24zm-456-32c0-26.47 21.53-48 48-48h288c26.47 0 48 21.53 48 48v32H104zm464 352H72V240h88v16c0 8.84 7.16 16 16 16h320c8.84 0 16-7.16 16-16v-16h88v384z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Products</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="products">
                        <li class="nav-item">
                            <!-- Link to view all products -->
                            <a class="nav-link" href="{{ route('backend.products.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new product -->
                            <a class="nav-link" href="{{ route('backend.products.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>


                <!-- Shipments Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#shipments" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="shipments">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for shipments -->
                                <svg class="svg-inline--fa fa-truck fa-w-20" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="truck" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M624 352h-16V240c0-8.84-7.16-16-16-16h-48v-64c0-17.67-14.33-32-32-32h-64v128h-64V112c0-17.67-14.33-32-32-32H16c-8.84 0-16 7.16-16 16v304c0 8.84 7.16 16 16 16h16v-16c0-17.67 14.33-32 32-32h192c17.67 0 32 14.33 32 32v16h128v-16c0-17.67 14.33-32 32-32h32v-16h176c8.84 0 16-7.16 16-16v-48c0-8.84-7.16-16-16-16zm-400-64v-64H32v64h192zM64 352c0-17.67-14.33-32-32-32s-32 14.33-32 32 14.33 32 32 32 32-14.33 32-32zm496 32c17.67 0 32-14.33 32-32s-14.33-32-32-32-32 14.33-32 32 14.33 32 32 32zm48-32h-64v-64h64v64zm-416-32c0-17.67-14.33-32-32-32s-32 14.33-32 32 14.33 32 32 32 32-14.33 32-32zm176 0h-64v-64h64v64zm0-96h-64v-32h64v32zm96 64h-64v-64h64v64zm0-96h-64v-32h64v32zm176 64h-64v-64h64v64z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Shipments</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="shipments">
                        <li class="nav-item">
                            <!-- Link to view all shipments -->
                            <a class="nav-link" href="{{ route('backend.shipments.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new shipment -->
                            <a class="nav-link" href="{{ route('backend.shipments.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>



                <!-- Transactions Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#transactions" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="transactions">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for transactions -->
                                <svg class="svg-inline--fa fa-money-bill fa-w-20" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="money-bill" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M320 144c-44.18 0-80 35.82-80 80s35.82 80 80 80 80-35.82 80-80-35.82-80-80-80zm-192 96c-8.84 0-16-7.16-16-16v-48c0-8.84 7.16-16 16-16s16 7.16 16 16v48c0 8.84-7.16 16-16 16zm416 0c-8.84 0-16-7.16-16-16v-48c0-8.84 7.16-16 16-16s16 7.16 16 16v48c0 8.84-7.16 16-16 16zM576 64H64C28.65 64 0 92.65 0 128v256c0 35.35 28.65 64 64 64h512c35.35 0 64-28.65 64-64V128c0-35.35-28.65-64-64-64zM320 336c-61.86 0-112-50.14-112-112s50.14-112 112-112 112 50.14 112 112-50.14 112-112 112zm128 64H192c-8.84 0-16-7.16-16-16s7.16-16 16-16h256c8.84 0 16 7.16 16 16s-7.16 16-16 16z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Transactions</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="transactions">
                        <li class="nav-item">
                            <!-- Link to view all transactions -->
                            <a class="nav-link" href="{{ route('backend.transactions.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new transaction -->
                            <a class="nav-link" href="{{ route('backend.transactions.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>


                <!-- Wishlists Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#wishlists" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="wishlists">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for wishlists -->
                                <svg class="svg-inline--fa fa-heart fa-w-20" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="heart" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M462.3 62.7c-54.5-46.4-136-38.6-186.4 13.6L256 96.9l-19.9-20.6c-50.3-52.1-131.9-60-186.4-13.6C7.4 82.2-10.6 132.3 1.7 178.3c9.2 35.5 30.3 70.2 59.5 98.7l175.4 178.7c6.6 6.7 15.3 10.2 24 10.2s17.4-3.4 24-10.2l175.4-178.7c29.3-28.5 50.4-63.2 59.5-98.7 12.2-46.1-5.7-96.2-48.6-115.6zM256 464L80.8 286.3C52 258.3 32 225.4 23.5 193.9 15.4 163.6 28.7 127.6 60.5 105.6c37.4-26 87.6-20.1 121.1 13.6L256 189.4l74.4-70.2c33.5-33.7 83.7-39.6 121.1-13.6 31.8 22 45.1 58 37 88.3-8.5 31.4-28.5 64.4-57.3 92.4L256 464z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Wishlists</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="wishlists">
                        <li class="nav-item">
                            <!-- Link to view all wishlists -->
                            <a class="nav-link" href="{{ route('backend.wishlists.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new wishlist -->
                            <a class="nav-link" href="{{ route('backend.wishlists.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>



                <!-- Payments Link -->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#payments" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="payments">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <!-- Icon for payments -->
                                <svg class="svg-inline--fa fa-credit-card fa-w-20" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="credit-card" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M0 80C0 53.49 21.49 32 48 32H528c26.51 0 48 21.49 48 48V144H0V80zM576 192v192c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V192H576zM128 320c-17.67 0-32 14.33-32 32s14.33 32 32 32h320c17.67 0 32-14.33 32-32s-14.33-32-32-32H128z">
                                    </path>
                                </svg>
                            </span>
                            <span class="nav-link-text ps-1">Payments</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="payments">
                        <li class="nav-item">
                            <!-- Link to view all payments -->
                            <a class="nav-link" href="{{ route('backend.payments.index') }}">View All</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link to create a new payment -->
                            <a class="nav-link" href="{{ route('backend.payments.create') }}">Add New</a>
                        </li>
                    </ul>
                </li>










            </ul>
        </div>
    </div>
</nav>
