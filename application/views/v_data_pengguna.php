            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahpengguna">
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
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                    ?>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Fatimah Rizkyana Nuraini</td>
                                        <td>fatimahrizkyananuraini</td>
                                        <td>fatimahrizkyananuraini</td>
                                        <td>Owner</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm"  data-toggle="modal" data-target="#editpengguna">
                                                <i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm">
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
                                        <td>2</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editpengguna">
                                                <i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm">
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
        <div class="modal fade" id="tambahpengguna" role="dialog" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Registrasi Pengguna Baru</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-right">Nama <span style="color: red;">*</span></label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="nama_pengguna" placeholder="Nama Pengguna" value=""></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-right">Username <span style="color: red;">*</span></label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="username" placeholder="Username" value=""</div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="row">
                                <label class="col-sm-3 control-label text-right">Password <span style="color: red;">*</span></label>
                                <div class="col-sm-8"><input type="password" class="form-control" name="password" placeholder="Password" id="password" value="">
                                <input type="checkbox" onclick="passfunction()"> Lihat Password
                                <script>
                                    function passfunction(){
                                        var pass = document.getElementById("password");
                                        if (pass.type === "password"){
                                            pass.type = "text";
                                        } else {
                                            pass.type = "password";
                                        }
                                    }
                                </script>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-right">Role <span class="text-red" style="color: red;">*</span></label>
                                <div class="col-sm-8"><select name="role" class="form-control select2" id="" style="width: 100%;">
                                    <option value="" selected="selected">Pilih Satu</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Kasir">Kasir</option>
                                    <option value="Owner">Owner</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="nosave" type="button" class="btn tbn-danger" data-dismiss="modal">Batal</button>
                            <input type="submit" name="submit" id="" class="btn btn-primary" value="Simpan">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Data -->

    <div class="example-modal">
        <div class="modal fade" id="editpengguna" role="dialog" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data Pengguna</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                        <div class="form-group mt-3">
                            <div class="row">
                                <label class="col-sm-3 control-label text-right">Nama <span style="color: red;">*</span></label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="nama_pengguna" placeholder="Nama Pengguna" value=""></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-right">Username <span style="color: red;">*</span></label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="username" placeholder="Username" value=""</div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="row">
                                <label class="col-sm-3 control-label text-right">Password <span style="color: red;">*</span></label>
                                <div class="col-sm-8"><input type="password" class="form-control" name="password" placeholder="Password" id="password" value="">
                                <input type="checkbox" onclick="passfunction()"> Lihat Password
                                <script>
                                    function passfunction(){
                                        var pass = document.getElementById("password");
                                        if (pass.type === "password"){
                                            pass.type = "text";
                                        } else {
                                            pass.type = "password";
                                        }
                                    }
                                </script>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label text-right">Role <span class="text-red" style="color: red;">*</span></label>
                                <div class="col-sm-8"><select name="role" class="form-control select2" id="" style="width: 100%;">
                                    <option value="" selected="selected">Pilih Satu</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Kasir">Kasir</option>
                                    <option value="Owner">Owner</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="nosave" type="button" class="btn tbn-danger" data-dismiss="modal">Batal</button>
                            <input type="submit" name="submit" id="" class="btn btn-primary" value="Simpan">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>