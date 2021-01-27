<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">All Categories</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Basic Initialisation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- multi-column ordering -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger</td>
                                        <td>Nixon</td>
                                        <td>
                                            <a href="<?php echo base_url('adminpanel/editPortfolio/1'); ?>"><button class="btn btn-info waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-pencil-alt"></i></span> Edit</button></a>
                                            <a href="#"><button class="btn btn-danger waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-trash-alt"></i></span> Delete</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Donna</td>
                                        <td>Snider</td>
                                        <td>
                                        <a href="<?php echo base_url('adminpanel/editPortfolio/1'); ?>"><button class="btn btn-info waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-pencil-alt"></i></span> Edit</button></a>
                                        <a href="#"><button class="btn btn-danger waves-effect waves-light" type="button"><span class="btn-label"><i class="fas fa-trash-alt"></i></span> Delete</button></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>