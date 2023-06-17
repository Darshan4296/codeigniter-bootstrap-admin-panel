<?php echo $this->extend('layout') ?>
<?php echo $this->section('content') ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add/Edit</h1>

    <form class="user" method="post" action="<?php echo base_url('/employee/update/'.$user['id']); ?>">
    <?php csrf_field();  ?>
        <?php if(!empty(session()->getFlashdata('fail'))):?>
            <div class="alert alert-danger"><?=session()->getFlashdata('fail')  ?></div>
        <?php endif ?>

        <?php if(!empty(session()->getFlashdata('success'))):?>
            <div class="alert alert-success"><?=session()->getFlashdata('success')  ?></div>
        <?php endif ?>

        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="name"
                    name="name" value="<?= $user['name'];  ?>" placeholder=" Employee name">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="position"
                    name="position" value="<?= $user['position'];  ?>"  placeholder="Employee position">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="office"
                    name="office" value="<?= $user['office'];  ?>"  placeholder="Employee office">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user"
                    id="age" name= "age" value="<?= $user['age'];  ?>"  placeholder="Employee age">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="date" class="form-control form-control-user"
                    id="date" name= "date" value="<?= $user['date'];  ?>"  placeholder="Employee age">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user"
                    id="salary" name= "salary" value="<?= $user['salary'];  ?>"  placeholder="Employee salary">
            </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="<?php echo site_url('page')?>" class="btn btn-link">Back</a>
        </div>
    </form>
</div>
<?php echo $this->endSection(); ?>