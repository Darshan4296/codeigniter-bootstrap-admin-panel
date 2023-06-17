 <?= $this->extend('layout') ?>
<?= $this->section('content') ?>
 
<!-- Page Heading  -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

    <div class="float-right" role="alert">
        <a class="btn btn-primary" href="<?php echo site_url('employee/add')?>" role="button">Add Employee</a>
    </div>
<div style="clear:both;" class="mb-3"></div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    
                </tfoot>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div> 
<?= $this->endSection(); ?> 
