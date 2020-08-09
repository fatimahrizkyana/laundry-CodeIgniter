<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahcabang">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah
                        </a>
                    </div>
                    <div class="col-12">
                        <div class="card mt-3">
                            <table class="table table-striped table-bordered" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Alamat Cabang</th>
                                        <th>Nomor Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                    ?>
                                    <tr>
                                        <td>1</td>
                                        <td>Fatimah Rizkyana Nuraini</td>
                                        <td>fatimahrizkyananuraini</td>
                                        <td>081617734428</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm"  data-toggle="modal" data-target="#editcabang">
                                                <i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm" class="btn btn-success btn-sm" data-toggle="modal" data-target="#hapuscabang">
                                                <i class="fas fa-trash-alt" aria-hidden="true"></i> Hapus
                                            </a>
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fas fa-search-plus" aria-hidden="true"></i> Detil
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>abcdef</td>
                                        <td>a</td>
                                        <td>r</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editcabang">
                                                <i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm" class="btn btn-success btn-sm" data-toggle="modal" data-target="#hapuscabang">
                                                <i class="fas fa-trash-alt" aria-hidden="true"></i> Hapus
                                            </a>
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fas fa-search-plus" aria-hidden="true"></i> Detil
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data Pengguna -->

    <div class="example-modal">
        <div class="modal fade" id="tambahcabang" role="dialog" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Registrasi Cabang Baru</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 text-right">
                                    <label class="control-label">
                                        Nama <span style="color: red;">*</span>
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama_cabang" placeholder="Nama Cabang" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 text-right">
                                    <label class="control-label">
                                        Alamat <span style="color: red;">*</span>
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <textarea name="alamat_cabang" id="" cols="30" rows="2" placeholder="Alamat Cabang" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="row">
                                <div class="col-sm-3 text-right">
                                    <label class="control-label">
                                        No Telepon <span style="color: red;">*</span>
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="no_tlpn" placeholder="No Telepon" value="">
                                </div>
                            </div>
                        </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <hr class="bg-secondary">
                                </div>
                                <div class="col-12 text-center">
                                    <button id="nosave" type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <input type="submit" name="submit" id="" class="btn btn-primary" value="Simpan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Modal Edit Data -->

        <div class="example-modal">
            <div class="modal fade" id="editcabang" role="dialog" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Ubah Data Cabang</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3 text-right">
                                        <label class="control-label">
                                            Nama <span style="color: red;">*</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama_cabang" placeholder="Nama Cabang" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3 text-right">
                                        <label class="control-label">
                                            Alamat <span style="color: red;">*</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea name="alamat_cabang" id="" cols="30" rows="2" placeholder="Alamat Cabang" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <div class="row">
                                    <div class="col-sm-3 text-right">
                                        <label class="control-label">
                                            No Telepon <span style="color: red;">*</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="no_tlpn" placeholder="No Telepon" value="">
                                    </div>
                                </div>
                            </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <hr class="bg-secondary">
                                    </div>
                                    <div class="col-12 text-center">
                                        <button id="nosave" type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                        <input type="submit" name="submit" id="" class="btn btn-primary" value="Simpan">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Modal Hapus Data -->

        <!-- <div class="example-modal">
            <div id="hapuspelanggan" class="modal fade" role="dialog" style="display: none;">
                <div class="modal-gialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                            <h4 class="modal-title">Konfirmasi Hapus Data Pelanggan</h4>
                        </div>
                        <div class="modal-body">
                            <h4 align="center">Apakah anda yakin ingin menghapus data ini?</h4>
                        </div>
                        <div class="modal-footer">
                            <button id="batalhapus" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                            <a href="#" class="btn btn-primary">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>         -->

    </div>