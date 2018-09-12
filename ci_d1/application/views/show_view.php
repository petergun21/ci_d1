<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <h2>โชว์ข้อมูล</h2>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Password</th>
        <th>Status</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($rs as &$r) {?>
      <tr>
        <td><?php echo $r['id'] ?></td>
        <td><?php echo $r['name'] ?></td>
        <td><?php echo $r['passwd'] ?></td>
        <td><?php echo $r['status'] ?></td>
        <th><a href="edit/<?php echo $r['id'] ?>"><button class="btn btn-info">แก้ไข</button></a></th>
        <th><a href="del/<?php echo $r['id'] ?>" onclick="return confirm('แน่ใจน้ะตัวเทอ?')";><button class="btn btn-danger"><i class=" glyphicon glyphicon-trash"></i></button></a></th>
      </tr>
      
    </tbody>
    <?php } ?>
  </table>
</div>

</body>
</html>
