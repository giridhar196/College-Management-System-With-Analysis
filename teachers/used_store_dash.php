<?php include "header.php" ?>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-image" style="background-image: url('assets/img/photos/photo26@2x.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top content-full text-center">
                            <div class="py-20">
                                <h1 class="h2 font-w700 text-white mb-10">Products</h1>
                                <h2 class="h4 font-w400 text-white-op mb-0">You currently have 4.360 in the catalog!</h2>
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
                            <span class="breadcrumb-item active">Products</span>
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Overview -->
                    <h2 class="content-heading">Overview</h2>
                    <div class="row gutters-tiny">
                        <!-- All Products -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-circle-o fa-2x text-info-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-info" data-toggle="countTo" data-to="3580">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">All Products</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END All Products -->

                        <!-- Top Sellers -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-star fa-2x text-warning-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-warning" data-toggle="countTo" data-to="95">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Top Sellers</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Top Sellers -->

                        <!-- Out of Stock -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-warning fa-2x text-danger-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-danger" data-toggle="countTo" data-to="30">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Out of Stock</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Out of Stock -->

                        <!-- Add Product -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-shadow" href="be_pages_ecom_product_edit.html">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-archive fa-2x text-success-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-success">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">New Product</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Add Product -->
                    </div>
                    <!-- END Overview -->

                    <!-- Products -->
                    <div class="content-heading">
                        <div class="dropdown float-right">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-products-filter-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-products-filter-drop">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-star text-warning mr-5"></i>Top Sellers
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-warning text-danger mr-5"></i>Out of Stock
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-circle-o text-info mr-5"></i>All
                                </a>
                            </div>
                        </div>
                        <div class="dropdown float-right mr-5">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-products-category-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Category
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-products-category-drop">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-gamepad mr-5"></i>Video Games
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-desktop mr-5"></i>Electronics
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-mobile-phone mr-5"></i>Mobile Phones
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-home mr-5"></i>House
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-soccer-ball-o mr-5"></i>Hobby
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-car mr-5"></i>Auto - Moto
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-users mr-5"></i>Kids
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-heartbeat mr-5"></i>Health
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-black-tie mr-5"></i>Fashion
                                </a>
                            </div>
                        </div>
                        Products (3580)
                    </div>
                    <div class="block block-rounded">
                        <div class="block-content bg-body-light">
                            <!-- Search -->
                            <form action="be_pages_ecom_products.html" method="post" onsubmit="return false;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search products..">
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
                            
                            <!-- Products Table -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                            
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">ID</th>
                                        <th class="d-none d-sm-table-cell">Status</th>
                                        <th class="d-none d-sm-table-cell">Submitted</th>
                                        <th>Product</th>
                                        <th class="d-none d-md-table-cell">Category</th>
                                        <th class="text-right">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.424</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Available</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/27                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #24</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Fashion</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$49</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.423</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Out of Stock</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/26                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #23</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Hobby</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$16</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.422</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Available</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/25                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #22</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Electronics</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$18</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.421</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Out of Stock</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/24                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #21</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Health</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$72</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.420</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Available</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/23                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #20</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Auto - Moto</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$86</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.419</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Out of Stock</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/22                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #19</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Health</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$34</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.418</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Out of Stock</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/21                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #18</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Mobile Phones</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$99</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.417</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Available</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/20                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #17</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Health</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$17</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.416</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Available</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/19                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #16</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Hobby</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$39</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.415</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Available</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/18                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #15</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Mobile Phones</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$32</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.414</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Available</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/17                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #14</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Video Games</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$42</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.413</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Out of Stock</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/16                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #13</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Fashion</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$97</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.412</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Out of Stock</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/15                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #12</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Health</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$59</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.411</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Out of Stock</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/14                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #11</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Hobby</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$81</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.410</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Available</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/09/13                        </td>
                                        <td>
                                            <a href="be_pages_ecom_product_edit.html">Product #10</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="be_pages_ecom_products.html">Hobby</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$63</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Products Table -->

                           
                        </div>
                    </div>
                    <!-- END Products -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 1.3</a> &copy; <span class="js-year-copy">2017</span>
                    </div>
                </div>
            </footer>
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
         <!-- Page JS Plugins -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/data_table_product.js"></script>
    </body>
</html>