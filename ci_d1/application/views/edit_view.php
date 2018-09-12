<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: #fff;">หน้าหลัก</a>
  </div>
  <ul class="nav navbar-nav">
      <li class="active"><a href="#">เพิ่มข้อมูล</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">ออกจากระบบ</a></li>
    </ul>
</div>
</nav>



<div class="container">
  <h2>แก้ไขข้อมูล</h2>

  	<?php echo form_open('member/update/'.$rs['id']); ?>

    <div class="form-group">
      <label class="control-label col-sm-2" for="id">ID:</label>
      <div class="col-sm-10">
      <input type="text" value="<?php echo $rs['id']; ?>" class="form-control" id="id" placeholder="Enter id" name="id" readonly >
    </div>
	</div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
      <input type="text" value="<?php echo $rs['name']; ?>" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
	</div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="passwd">Password:</label>
      <div class="col-sm-10">
      <input type="text" value="<?php echo $rs['passwd']; ?>" class="form-control" id="passwd" placeholder="Enter passwd" name="passwd">
    </div>
	</div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="status">Status:</label>
      <div class="col-sm-10">
      <input type="text" value="<?php echo $rs['status']; ?>" class="form-control" id="status" placeholder="Enter status" name="status">
    </div>
	</div>

    <button type="submit" class="btn btn-default">Submit</button>
 <?php echo form_open(); ?>
</div>

</body>
</html>
