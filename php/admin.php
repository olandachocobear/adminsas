<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_content">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <ul class="pagination pagination-split">
              <li><a href="#" data-toggle="modal" data-target="#myModal" >Add Admin</a></li>
            </ul>
          </div>

          <div class="clearfix"></div>
          <?php
            $admin = new Admin();

            $stmt = $admin->runQuery("SELECT * FROM tb_admin");
            $stmt->execute();
            // $upass = "admin";
            // $new_password = password_hash($upass, PASSWORD_DEFAULT);

            // echo $new_password;
            while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
              # code...
              ?>
          <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
            <div class="well profile_view">
              <div class="col-sm-12">
                <h4 class="brief"><i><?php echo $row['jabatan']; ?></i></h4>
                <div class="left col-xs-7">
                  <h2><?php echo $row['nama_admin']; ?></h2>
                  <p><strong>About: </strong> <?php echo $row['username']; ?> </p>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-building"></i> Kode: <?php echo $row['kode_admin']; ?></li>
                    <li><i class="fa fa-phone"></i> Phone #: </li>
                  </ul>
                </div>
                <div class="right col-xs-5 text-center">
                  <img src="images/<?php echo $row['picture']; ?>" alt="" class="img-circle img-responsive">
                </div>
              </div>
              <div class="col-xs-12 bottom text-center">
                <div class="col-xs-12 col-sm-6 emphasis">
                  <button type="button" class="btn btn-danger btn-xs"> <i class="fa fa-remove">
                    </i> disable</button>
                </div>
                <div class="col-xs-12 col-sm-6 emphasis">
                  
                  <button type="button" class="btn btn-primary btn-xs">
                    <i class="fa fa-user"> </i> View Profile
                  </button>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
          ?>

          


        </div>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
<div class="modal-content">

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
    </button>
    <h4 class="modal-title" id="myModalLabel"><span class="fa fa-users"></span> Add New Admin</h4>
  </div>
  <div class="modal-body">

    <form method="post" action="php/add-admin.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Jabatan</label>
    <input name="txt_kode" type="minimal 10 karakter" class="form-control" id="exampleInputEmail1" minlength="3" placeholder="jabatan admin" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input name="txt_email" type="email" class="form-control" id="exampleInputPassword1" placeholder="examples@domain.com" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="txt_password" type="password" class="form-control" id="exampleInputPassword1" minlength="3" placeholder="password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Admin</label>
    <input name="txt_nama" type="text" class="form-control" id="exampleInputPassword1" minlength="3" placeholder="nama lengkap" required>
  </div>
  <div class="form-group">
    <select name="jabatan" class="form-control">
      <option value="0" selected>--role--</option>
      <?php
            $admin = new Admin();

            $stmt = $admin->runQuery("SELECT * FROM roles");
            $stmt->execute();
            // $upass = "admin";
            // $new_password = password_hash($upass, PASSWORD_DEFAULT);

            // echo $new_password;
            while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
              # code...
              ?>
      <option value="<?=$row['id']?>"><?=$row['name']?> <i><?=$row['description']?></i></option>
      <?php } ?>
    </select>
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputFile">Picture</label>
    <input name="txt_picture" type="file" id="exampleInputFile">
    <p class="help-block">File jenis .jpeg, .jpg</p>
  </div> -->
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
  </div>

</div>    
  </div>
</div>

