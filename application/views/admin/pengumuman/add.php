<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tambah Pengumuman
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/pengumuman'); ?>"><i class="fa fa-newspaper-o"></i>Pengumuman</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <?php echo form_open('admin/pengumuman/store'); ?>
                <div class="box-body">
                    <div class="form-group">
                        <?php echo form_label('Judul Pengumuman', 'judul'); ?>
                        <?php echo form_error('judul'); ?>
                        <?php
                        $data = array(
                                'type' => 'text',
                                'name' => 'judul',
                                'value' => set_value('judul'),
                                'id' => 'judul',
                                'class' => 'form-control',
                                'placeholder' => 'Judul Pengumuman',
                                'required' => 'required',
                                'autofocus' => 'autofocus');
                        echo form_input($data);
                        ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Isi', 'isi_pengumuman'); ?>
                        <?php echo form_error('isi_pengumuman'); ?>
                        <textarea class="textarea" name="isi_pengumuman" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <?php echo anchor(site_url('admin/pengumuman'), 'Kembali', 'class="btn btn-default"'); ?>
                    <?php echo form_submit('submit', 'Simpan', 'class="btn btn-primary"'); ?>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section><!-- /.content -->
