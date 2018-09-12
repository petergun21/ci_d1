<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="show" style="color: #fff;">หน้าหลัก</a>
  </div>
  <ul class="nav navbar-nav">
      <li class="active"><a href="add">เพิ่มข้อมูล</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login">ออกจากระบบ</a></li>
    </ul>
</div>
</nav>

<div class="container">
	<h1>เพิ่มสมาชิก</h1>
</div>


<div class="container">
  <form method="get" action="<?=base_url();?>index.php/member/add_member">
  	<div class="form-group">
      <label for="usr">ID:</label>
      <input type="text" class="form-control" id="id" name="id">
    </div>
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="passwd"  name="passwd">
    </div>
    <div class="form-group">
      <label for="usr">status:</label>
      <input type="text" class="form-control" id="status" name="status">
    </div><input type="submit" value="Save" name="bntsave">
  </form>
</div>

