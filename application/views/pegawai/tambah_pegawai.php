<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.input-container {
    display: flex; /* Use flexbox */
    justify-content: space-between; /* Distribute space between elements */
    align-items: center; /* Align items vertically */
    padding: 0px; /* Add some padding for better spacing */
    border: 1px none;
    background-color: white;
}

/* Style the form container */
.half-width-form {
    display: flex; /* Use flexbox */
    justify-content: space-between; /* Distribute space between elements */
    align-items: center; /* Align items vertically */
    width: 49%; /* Take full width of the container */
    padding: 7px; /* Add some padding for better spacing */
    border: 1px solid #ccc;
    background-color: white; /* Make sure the color is lowercased */
}




  </style>
<?php $this->load->view("admin/_includes/head.php") ?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php $this->load->view("admin/_includes/header.php") ?>
    <?php $this->load->view("admin/_includes/sidebar.php") ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <section class="content-header">
        <h1>
          Kelola
          <small>Data Pegawai</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-fw fa-male"></i>  Pegawai</a></li>
          <li><a href="<?php echo base_url('Pegawai_controller/index') ?>">Lihat Data Pegawai</a></li>
          <li><a href="<?php echo base_url('Pegawai_controller/add') ?>">Tambah Data Pegawai</a></li>
        </ol>
      </section>


      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Pengisian Form</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url('Pegawai_controller/add') ?>" method="POST">
                <div class="box-body">

                <div class="form-group">
                    <label for="email" >Email</label>
                    <input name="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" placeholder="Email" type="email" required/>
                    <div class="invalid-feedback">
                      <?php echo form_error('email') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nohp" >Phone Number</label>
                    <input name="nohp" class="form-control <?php echo form_error('nohp') ? 'is-invalid':'' ?>" placeholder="Phone Number" type="text" required/>
                    <div class="invalid-feedback">
                      <?php echo form_error('nohp') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username" >Username</label>
                    <input name="username" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" placeholder="username" type="text" required/>
                    <div class="invalid-feedback">
                      <?php echo form_error('username') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" >Password</label>
                    <input name="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" placeholder="password" type="password" required/>
                    <div class="invalid-feedback">
                      <?php echo form_error('password') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nia" >NIK</label>
                    <input name="nia" class="form-control <?php echo form_error('nia') ? 'is-invalid':'' ?>" placeholder="Masukan NIK" type="text" required/>
                    <div class="invalid-feedback">
                      <?php echo form_error('nia') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama" >Nama</label>
                    <input name="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" placeholder="Masukan Nama" type="text" required>
                    <div class="invalid-feedback">
                      <?php echo form_error('nama') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="jenis_kelamin" >Gender</label>
                    <div class="radio">
                      <label>
                        <input type="radio" class="<?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>" name="jenis_kelamin" value="Laki-Laki" >
                        Laki-Laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" class="<?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>" name="jenis_kelamin" value="Perempuan">
                        Perempuan
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat" >Alamat</label>
                    <input name="alamat" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" placeholder="Alamat" type="text" required/>
                    <div class="invalid-feedback">
                      <?php echo form_error('alamat')?>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="tempat_lahir" >Tempat, </label><label for="birthday" > tanggal Lahir</label>
                    <div class="input-container " >
                      <input name="tempat_lahir" id="half-width-form" class="half-width-form <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>" placeholder="Tempat Lahir" type="text" required/>
                      <div class="invalid-feedback">
                      <?php echo form_error('tempat_lahir')?>
                      </div>
                      <input name="birthday" id="half-width-form" class="half-width-form <?php echo form_error('birthday') ? 'is-invalid':'' ?>" placeholder="Tanggal Lahir" type="date" required/>
                      <div class="invalid-feedback">
                      <?php echo form_error('birthday')?>
                      </div>
                    </div>            
                   </div>
                  </div>
                 
                <!-- /.box-body -->
                <!-- Dapaag -->           
                <div class="box-footer">
                  <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-plus"></i>Save</button>
                  <a href="<?php echo base_url('Pegawai_controller/index') ?>" class="btn btn-danger" type="reset"><i style="margin-left: -3px;"  ></i>Cancel</a>
                </div>
              </form>
            </div>
            <!-- /.box -->

          </div>
           <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $total_staff ?></h3>

              <p>Total Member</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Member <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view("admin/_includes/footer.php") ?>
    <?php $this->load->view("admin/_includes/control_sidebar.php") ?>

  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->
 <?php $this->load->view("admin/_includes/bottom_script_view.php") ?>
 <!-- page script -->
</body>
</html>
