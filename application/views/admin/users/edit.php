<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit User
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo site_url('admin/users');?>"><i class="fa fa-users"></i>Users</a></li>
    <li class="active">Data Users</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <!-- form start-->
        <?php
          $attribute = array('id' => 'usersForm');
          echo form_open('admin/users/ubah', $attribute); ?>
          <div class="box-body">
            <div class="form-group">
              <?php echo form_label('Nama depan','nama_depan'); ?>
              <?php echo form_error('nama_depan'); ?>
              <?php
                  $nama_depan = array(
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'name' => 'nama_depan',
                                    'id' => 'nama_depan',
                                    'placeholder' => 'Nama depan',
                                    'required' => 'required',
                                    'autofocus' => 'autofocus');
               echo form_input($nama_depan, set_value('nama_depan',$user->nama_depan)); ?>
            </div>
            <div class="form-group">
              <?php echo form_label('Nama belakang','nama_belakang'); ?>
              <?php echo form_error('nama_belakang'); ?>
              <?php
                  $nama_belakang = array(
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'name' => 'nama_belakang',
                                    'id' => 'nama_belakang',
                                    'placeholder' => 'Nama belakang',
                                    'required' => 'required');
               echo form_input($nama_belakang, set_value('nama_belakang', $user->nama_belakang)); ?>
            </div>
            <div class="form-group">
              <?php echo form_label('Email','email'); ?>
              <?php echo form_error('email'); ?>
              <?php
                  $email = array(
                                    'type' => 'email',
                                    'class' => 'form-control',
                                    'name' => 'email',
                                    'id' => 'email',
                                    'placeholder' => 'Email',
                                    'required' => 'required');
               echo form_input($email, set_value('email',$user->email)); ?>
            </div>
            <div class="form-group">
              <?php if (isset($groups)): ?>
                <?php echo form_label('Groups', 'groups[]'); ?>
                <?php foreach ($groups as $group): ?>
                  <div class="radio">
                    <label>
                      <?php
                        $js = 'onclick="form_edit_check()"';
                        echo form_radio('groups[]', $group->id, set_radio('groups[]', $group->id, in_array($group->id,$usergroups)), $js); ?>
                      <?php echo $group->name; ?>
                    </label>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <?php echo form_label('Nim','nim'); ?>
              <?php echo form_error('nim'); ?>
              <?php
                  $nim = array(
                                'type' => 'text',
                                'class' => 'form-control',
                                'name' => 'nim',
                                'id' => 'nim',
                                'placeholder' => 'Nim');
               echo form_input($nim, set_value('nim',$user->nim)); ?>
            </div>
            <div class="form-group">
              <?php echo form_label('Nip','nip'); ?>
              <?php echo form_error('nip'); ?>
              <?php
                  $nip = array(
                                'type' => 'text',
                                'class' => 'form-control',
                                'name' => 'nip',
                                'id' => 'nip',
                                'placeholder' => 'Nip');
               echo form_input($nip, set_value('nim',$user->nip)); ?>
            </div>
            <div class="form-group">
              <?php echo form_label('Jurusan', 'id_jurusan'); ?>
              <?php echo form_error('id_jurusan'); ?>
              <select class="form-control" name="id_jurusan" id="jurusan" onchange="getProdi(this.value)">
                <option value="">Silahkan Pilih</option>
                <?php foreach ($dd_jurusan as $row): ?>
                  <option value="<?php echo $row['id'] ?>"
                    <?php if ($row['id'] == $user->id_jurusan): ?>
                      selected="selected"
                    <?php endif; ?>>
                    <?php echo $row['nama_jurusan'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <?php echo form_label('Prodi', 'id_prodi'); ?>
              <?php echo form_error('id_prodi'); ?>
              <select name="id_prodi" id="prodi" class="form-control">
                <option value="">Silahkan Pilih</option>
                <?php foreach ($dd_prodi as $row): ?>
                  <option value="<?php echo $row['id'] ?>"
                    <?php if ($row['id'] == $user->id_prodi): ?>
                      selected="selected"
                    <?php endif; ?>
                  >
                    <?php echo $row['nama_prodi'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="kelas">Kelas <?php echo form_error('id_kelas'); ?></label>
              <?php
                $extra = array(
                              'class' => 'form-control',
                              'id' => 'kelas'
                );
                echo form_dropdown('id_kelas', $dd_kelas, set_value('id_kelas',$user->id_kelas), $extra);
               ?>
            </div>
            <div class="form-group">
              <label for="semester">Semester <?php echo form_error('id_semester'); ?></label>
              <?php
                $extra = array(
                              'class' => 'form-control',
                              'id' => 'semester'
                );
                echo form_dropdown('id_semester', $dd_semester, set_value('id_semester',$user->id_semester), $extra);
               ?>
            </div>
          </div><!-- /. box-body -->
          <?php echo form_hidden('user_id',$user->id); ?>
          <div class="box-footer">
            <?php echo anchor(site_url('admin/users'),'Kembali','class="btn btn-default"'); ?>
            <?php echo form_submit('submit', 'Edit', 'class="btn btn-warning"'); ?>
          </div><!-- /. box-footer -->
        <?php echo form_close(); ?>
        <!-- /.form end -->
      </div>
    </div>
  </div>
</section><!-- /.content -->
