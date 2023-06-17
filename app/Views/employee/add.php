<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Add Employee</h2>
    <form method="post" action="<?php echo site_url('/employee/store'); ?>">
    <?php csrf_field();  ?>
    <?php if(!empty(session()->getFlashdata('fail'))):?>
        <div class="alert alert-danger"><?=session()->getFlashdata('fail')  ?></div>
    <?php endif ?>
    
    <?php if(!empty(session()->getFlashdata('success'))):?>
        <div class="alert alert-success"><?=session()->getFlashdata('success')  ?></div>
    <?php endif ?>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Employee name">
      </div>
      <div class="form-group">
        <label for="position">Position:</label>
        <input type="text" class="form-control" id="position" name="position" placeholder="Enter Employee position">
      </div>
      <div class="form-group">
        <label for="office">Office</label>
        <input type="text" class="form-control" id="office" name="office" placeholder="Enter Location">
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="text" class="form-control" id="age" name="age" placeholder="Enter the Age">
      </div>
      <div class="form-group">
        <label for="startdate">Start Date:</label>
        <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date">
      </div>
      <div class="form-group">
        <label for="salary">Salary:</label>
        <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
  <!-- Add Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<?= $this->endSection(); ?>