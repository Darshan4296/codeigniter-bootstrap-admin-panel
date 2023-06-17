<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
 
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<div class="float-right" role="alert">
    <a class="btn btn-primary" href="<?php echo site_url('employee/add')?>" role="button">Add Employee</a>
</div>

<div style="clear:both;" class="mb-3"></div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Employees</h6>
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
                <tbody>
                <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['position'] ?></td>
                    <td><?= $user['office'] ?></td>
                    <td><?= $user['age'] ?></td>
                    <td><?= $user['date'] ?></td>
                    <td><?= $user['salary'] ?></td>
                    <td>
                        <a href="<?php echo base_url('/employee/edit/'.$user['id']); ?>">Edit</a>
                        <a href="<?php echo base_url('/employee/delete/').$user['id'] ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>