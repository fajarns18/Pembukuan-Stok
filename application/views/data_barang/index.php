<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="card shadow">
  <div class="card-body">
  <div class="row">
    <div class="col-sm-12 col-md-10">
        <h4 class="mb-0"><i class="fa fa-cubes"></i> Data Barang</h4>
    </div>
    <div class="col-sm-12 col-md-2">
        <a href="<?= site_url('tambah_barang'); ?>" class="btn btn-success btn-sm btn-block">Tambah Data</a>
    </div>
</div>
  </div>
</div>
<br>
<?php
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


<div class="card shadow">
  <div class="card-body">
  <div class="table-responsive">
    <table class="table table-sm table-hover table-striped border" id="tables">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Brand</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
  </div>
</div>

