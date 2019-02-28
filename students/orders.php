<?php include "header.php" ?>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-image" style="background-image: url('assets/img/photos/photo26@2x.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top content-full text-center">
                            <div class="py-20">
                                <h1 class="h2 font-w700 text-white mb-10">Orders</h1>
                                <h2 class="h4 font-w400 text-white-op mb-0">You are doing great, keep it up!</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Breadcrumb -->
                <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="store_dashboard">Books Store</a>
                            <span class="breadcrumb-item active">Orders</span>
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
                        <div class="dropdown float-right">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Today
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-stats-drop">
                                <a class="dropdown-item active" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>Today
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                                </a>
                            </div>
                        </div>
                        Statistics <small class="d-none d-sm-inline">Looking good!</small>
                    </div>
                    <div class="row gutters-tiny">
                        <!-- Pending -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-sun" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-spinner fa-spin text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="12">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Pending</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Pending -->

                        <!-- Canceled -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-cherry" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-times text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="2">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Canceled</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Canceled -->

                        <!-- Completed -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-lake" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-check text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="21">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Completed</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Completed -->

                        <!-- All -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-transparent bg-gd-dusk" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-archive text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="35">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-white-op">All</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END All -->
                    </div>
                    <!-- END Statistics -->

                    <!-- Orders -->
                    <div class="content-heading">
                        <div class="dropdown float-right">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Today
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-drop">
                                <a class="dropdown-item active" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>Today
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                                </a>
                            </div>
                        </div>
                        <div class="dropdown float-right mr-5">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-filter-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-filter-drop">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-spinner fa-spin text-warning mr-5"></i>Pending
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-refresh fa-spin text-info mr-5"></i>Processing
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-times text-danger mr-5"></i>Canceled
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-check text-success mr-5"></i>Completed
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-circle-o mr-5"></i>All
                                </a>
                            </div>
                        </div>
                        Orders (35)
                    </div>
                    <div class="block block-rounded">
                        <div class="block-content bg-body-light">
                            <!-- Search -->
                            <form action="#" method="post" onsubmit="return false;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search orders..">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END Search -->
                        </div>
                        <div class="block-content">
                            <!-- Orders Table -->
                            <table class="table table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">ID</th>
                                        <th>Status</th>
                                        <th class="d-none d-sm-table-cell">Submitted</th>
                                        <th class="d-none d-sm-table-cell">Products</th>
                                        <th class="d-none d-sm-table-cell">Teacher</th>
                                        <th class="text-right">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1851</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/27                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">6</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Jose Wagner</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$222</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1850</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/26                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">7</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Lori Moore</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$745</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1849</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/25                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">3</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Justin Hunt</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$984</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1848</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Processing</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/24                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">7</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">David Fuller</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$802</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1847</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/23                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">1</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Andrea Gardner</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$753</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1846</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning">Pending</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/22                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">5</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Sara Fields</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$549</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1845</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/21                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">4</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Lori Grant</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$524</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1844</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/20                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">2</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Sara Fields</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$377</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1843</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/19                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">9</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Ryan Flores</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$700</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1842</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/18                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">8</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Justin Hunt</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$647</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1841</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Canceled</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/17                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">7</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Lori Grant</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$870</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1840</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning">Pending</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/16                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">7</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Judy Ford</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$569</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1839</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning">Pending</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/15                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">7</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Ryan Flores</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$482</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1838</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Canceled</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/14                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">3</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Melissa Rice</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$673</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">ORD.1837</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning">Pending</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/13                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">7</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">Carol Ray</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$420</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Orders Table -->

                            <!-- Navigation -->
                            <nav aria-label="Orders navigation">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript:void(0)">...</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">8</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">9</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- END Navigation -->
                        </div>
                    </div>
                    <!-- END Orders -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include "footer.php" ?>
            <!-- END Footer -->
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
    </body>
</html>