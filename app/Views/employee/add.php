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
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Employee name">
      </div>
      <div class="form-group">
        <label for="position">Position:</label>
        <input type="text" class="form-control" id="position" placeholder="Enter Employee position">
      </div>
      <div class="form-group">
        <label for="office">Office</label>
        <input type="text" class="form-control" id="office" placeholder="Enter Location">
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="text" class="form-control" id="age" placeholder="Enter the Age">
      </div>
      <div class="form-group">
        <label for="startdate">Start Date:</label>
        <input type="date" class="form-control" id="date" placeholder="Enter Date">
      </div>
      <div class="form-group">
        <label for="salary">Salary:</label>
        <input type="text" class="form-control" id="salary" placeholder="Enter salary">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
  <!-- Add Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<?= $this->endSection(); ?>