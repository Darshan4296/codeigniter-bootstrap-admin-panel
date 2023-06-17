<?php echo $this->extend('layout') ?>
<?php echo $this->section('content') ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add/Edit</h1>

    <form class="user" method="post" action="<?php echo base_url('/page/update/'.$user['id']); ?>">
    <?php csrf_field();  ?>
        <?php if(!empty(session()->getFlashdata('fail'))):?>
            <div class="alert alert-danger"><?=session()->getFlashdata('fail')  ?></div>
        <?php endif ?>

        <?php if(!empty(session()->getFlashdata('success'))):?>
            <div class="alert alert-success"><?=session()->getFlashdata('success')  ?></div>
        <?php endif ?>

        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="firstname"
                    name="firstname" value="<?= $user['firstname'];  ?>" placeholder="First Name">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="lastname"
                    name="lastname" value="<?= $user['lastname'];  ?>"  placeholder="Last Name">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="email" class="form-control form-control-user" id="email"
                    name="email" value="<?= $user['email'];  ?>"  placeholder="Email Address">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user"
                    id="password" name= "password" value="<?= $user['password'];  ?>"  placeholder="Password">
            </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="<?php echo site_url('page')?>" class="btn btn-link">Back</a>
        </div>
    </form>
</div>
<?php echo $this->endSection(); ?>