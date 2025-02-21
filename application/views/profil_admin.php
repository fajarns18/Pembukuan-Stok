<?php
defined('BASEPATH') or exit('No direct script access allowed');

//tampilkan pesan success
if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; 

//tampilkan pesan error
if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  <?php endif; ?>

<div class="row">
    <div class="col-sm-12 col-md-10">
        <h4 class="mb-0"><i class="fa fa-user"></i> Profil</h4>
    </div>
</div>
<hr class="mt-0" />
<?= form_open_multipart(); ?>
<div class="col-md-8">
    <input type="hidden" name="oldUsername" value="<?= $data->username; ?>" />

    <div class="form-group row">
        <label for="username" class="col-sm-3 col-form-label">Username</label>
        <div class="col-sm-9">
            <input type="text" class="form-control form-control-sm <?= (form_error('username')) ? 'is-invalid' : ''; ?>" id="username" required autofocus name="username" placeholder="Username" value="<?= (set_value('username')) ? set_value('username') : $data->username; ?>">
            <div class="invalid-feedback">
                <?= form_error('username', '<p class="error-message">', '</p>'); ?>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="fullname" class="col-sm-3 col-form-label">Fullname</label>
        <div class="col-sm-9">
            <input type="text" class="form-control form-control-sm <?= (form_error('fullname')) ? 'is-invalid' : ''; ?>" id="fullname" name="fullname" placeholder="Fullname" value="<?= (set_value('fullname')) ? set_value('fullname') : $data->fullname; ?>">
            <div class="invalid-feedback">
                <?= form_error('fullname', '<p class="error-message">', '</p>'); ?>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="foto" class="col-sm-3 col-form-label">Foto</label>
        <div class="col-sm-2">
            <img src="<?= base_url('assets/foto/' . $data->foto); ?>" class="img-thumbnail img-preview" />
        </div>
        <div class="col-sm-7">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="foto" name="foto" onchange="imgPreview()">
                <label class="custom-file-label" id="FileNameShow" for="foto">Pilih Foto...</label>
            </div>
            <small class="text-muted">
                <i>
                    <p class="my-0">Ukuran file Maksimal 2 MB.</p>
                    <p class="my-0">Format hanya boleh *.jpg, *.png, *.jpeg</p>
                </i>
            </small>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
            <input type="password" class="form-control form-control-sm <?= (form_error('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password" value="">
            <small class="text-muted"><i>Masukkan password anda untuk menyimpan perubahan</i></small>
            <div class="invalid-feedback">
                <?= form_error('password', '<p class="error-message">', '</p>'); ?>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-9 offset-md-3">
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm">Ubah Profil</button>
            <button type="button" class="btn btn-light btn-sm" onclick="window.history.back()">Kembali</button>
        </div>
    </div>
</div>
<?= form_close(); ?>