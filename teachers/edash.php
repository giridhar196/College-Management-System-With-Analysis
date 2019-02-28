<?php include "header.php"; ?>

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-image" style="background-image: url('assets/img/photos/photo26@2x.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top content-full text-center">
                            <div class="py-20">
                                <h1 class="h2 font-w700 text-white mb-10">e-Commerce Dashboard</h1>
                                <h2 class="h4 font-w400 text-white-op mb-0">Welcome Admin, you have <a class="text-primary-light link-effect" href="be_pages_ecom_orders.html">12 pending orders</a>.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Breadcrumb -->
                <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="be_pages_ecom_dashboard.html">e-Commerce</a>
                            <span class="breadcrumb-item active">Dashboard</span>
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Statistics -->
                    <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
                    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
                    <div class="content-heading">
                        
                        Statistics <small class="d-none d-sm-inline">Awesome!</small>
                    </div>
                    <div class="row gutters-tiny">
                        <!-- Earnings -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-elegance" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-area-chart text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="2420" data-before="$">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Earnings</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Earnings -->

                        <!-- Orders -->

                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-dusk" href="be_pages_ecom_orders.html">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-archive text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="35">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Orders</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Orders -->

                        <!-- New Customers -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-sea" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-users text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="15">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">New Customers</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END New Customers -->

                        <!-- Conversion Rate -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-aqua" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options-item">
                                        <i class="fa fa-cart-arrow-down text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white">5.6%</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Conversion</div>
                                                        <div class="block-options">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Conversion Rate -->
                    </div>
                    <!-- END Statistics -->

                   

                   

                    <!-- Latest Orders and Top Products -->
                    <div class="row gutters-tiny">
                        <!-- Latest Orders -->
                        <div class="col-xl-6">
                            <h2 class="content-heading">Latest Orders</h2>
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 100px;">ID</th>
                                                <th>Status</th>
                                                <th class="d-none d-sm-table-cell">Customer</th>
                                                <th class="text-right">Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1851</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Ralph Murray</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$815</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1850</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">Processing</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Brian Stevens</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$198</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1849</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">Processing</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Brian Stevens</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$986</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1848</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Adam McCoy</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$899</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1847</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">Processing</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Melissa Rice</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$811</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1846</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Albert Ray</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$244</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1845</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Canceled</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Wayne Garcia</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$968</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1844</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">Processing</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Jose Wagner</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$706</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1843</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Amanda Powell</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$329</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-w600" href="be_pages_ecom_order.html">ORD.1842</a>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <a href="be_pages_ecom_customer.html">Melissa Rice</a>
                                                </td>
                                                <td class="text-right">
                                                    <span class="text-black">$261</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Latest Orders -->

                        <!-- Top Products -->
                        <div class="col-xl-6">
                            <h2 class="content-heading">Top Products</h2>
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th class="d-none d-sm-table-cell" style="width: 100px;">ID</th>
                                                <th>Product</th>
                                                <th class="text-center">Orders</th>
                                                <th class="d-none d-sm-table-cell text-center">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.258</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Dark Souls III</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">912</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.198</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Bioshock Collection</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">895</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.852</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Alien Isolation</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">820</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.741</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Bloodborne</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">793</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.985</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Forza Motorsport 7</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">782</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.056</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Fifa 18</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">776</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.036</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Gears of War 4</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">680</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.682</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Minecraft</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">670</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.478</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Dishonored 2</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">640</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.952</a>
                                                </td>
                                                <td>
                                                    <a href="be_pages_ecom_product_edit.html">Gran Turismo Sport</a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.html">630</a>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Top Products -->
                    </div>
                    <!-- END Latest Orders and Top Products -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

           <?php include "footer.php"; ?>
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_ecom_dashboard.js"></script>
    </body>
</html>