<!-- Admin modal Side -->

<div id="edit-admin" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div>
                    <center>
                        <h2>Edit Data Admin</h2>
                    </center>
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <label>Nama</label>
                    <input type="text" name="" id='edit_name_admin' class="form-control" placeholder="Masukkan Nama disini">
                </div>
                <div style="margin-top: 1%"></div>
                <div>
                    <label>Password</label>
                    <input type="password" name="" id="edit_password_admin" class="form-control" placeholder="Masukkan Password disini">
                </div>

                     <div style="display: none">
                    <label>Password</label>
                    <input type="text" name="" id="edit_id_admin" class="form-control" placeholder="Masukkan Password disini">
                </div>

                <div style="margin-top: 3%"></div>
                <div>
                    <label>Hak Akses</label>
                    <select class="form-control" id="edit_select_level"></select>
                </div>
              
                <div style="margin-top: 3%"></div>
                <div>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button class="btn btn-primary " onclick="ajax_action_edit_admin()">Edit Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="add-admin" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div>
                    <center>
                        <h2 class="text-popins">Tambah Data Admin</h2>
                    </center>
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <label>Nama</label>
                    <input type="text" name="" id="name_admin" class="form-control" placeholder="Masukkan Nama disini">
                </div>
                <div style="margin-top: 1%"></div>
                <div>
                    <label>Password</label>
                    <input type="password" name="" id="password_admin" class="form-control" placeholder="Masukkan Password disini">
                </div>
               
                <div style="margin-top: 3%"></div>
                <div>
                    <label>Hak Akses</label>
                    <select class="form-control" id="select_level"></select>
                </div>
                <br>
                <div>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button class="btn btn-primary " onclick="ajax_action_add_admin()">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end admin modal side -->

<!-- modal Kurir side-->

<div id="edit-kurir" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Tambah Kurir</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Nama Kurir</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="edit_name_kurir">
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Api Kurir</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Api disini" id="edit_api_kurir">
                        </div>
                         <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Status</label>
                            <select class="form-control text-popins" id="status_kurir">
                                <option value="1">Active</option>
                                <option value="2">Disable</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Logo Kurir</label>
                            <input type="file" name="" class="form-control" name="file" accept="image/*" id="edit_attachment_kurir"  onchange="loadFile(event,'edit_kurir_preview')">
                        </div>
                        <div style="margin-top: 8%">
                            <center>
                                <img src="" id="edit_kurir_preview">
                            </center> 
                        </div>
                    </div>
                    <div style="display: none">
                            <input type="" name="" id="edit_id_kurir">
                            <input type="" name="" id="edit_id_file_kurir">
                    </div>
                </div>
                <div class="row" style="margin-top: 8%">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary " onclick="ajax_action_edit_kurir()">Edit Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="add-kurir" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">TAMBAH Kurir</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Nama Kurir</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="name_kurir">
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Api Kurir</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Api disini" id="api_kurir">
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Logo Kurir</label>
                            <input type="file" name="" class="form-control" accept="image/*" id="attachment_kurir"  onchange="loadFile(event,'kurir_preview')">
                        </div>
                        <div style="margin-top: 8%">
                            <center>
                                <img src="" id="kurir_preview">
                            </center> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary text-popins" onclick="ajax_action_add_kurir()">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- End kurir side modal -->

<!-- modal category side-->

<div id="add-category" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Tambah Category</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Category</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="name_category">
                        </div>

                    </div>
               
                </div>
                <div class="row" style="margin-top: 5%">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary " onclick="ajax_action_add_category()">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="edit-category" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Edit Category</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Nama Category</label>
                            <input type="text" name="" id="edit_name_category" class="form-control" placeholder="Masukkan Nama disini">
                        </div>

                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Status</label>
                            <select class="form-control text-popins" id="status_category">
                                <option value="1">Active</option>
                                <option value="2">Disable</option>
                            </select>
                        </div>

                    </div>
                    <div style="display: none">
                        <input type="text" id="edit_id_category" name="" class="form-control">
                        <input type="text" id="edit_id_file" name="" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary text-popins" onclick="ajax_action_edit_category()">Edit Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- End category side modal -->

<!-- start side modal payment-method -->

<div id="add-payment-method" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Tambah Payment method</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Nama</label>
                            <input type="text" name=""  id="name_payment_method" class="form-control" placeholder="Masukkan Nama disini">
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Code</label>
                            <input type="text" name="" id="code_payment_method" class="form-control" placeholder="Masukkan code disini">
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Api</label>
                            <input type="text" name="" id="api_payment_method" class="form-control" placeholder="Masukkan Api disini">
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Icon Metode</label>
                            <input type="file" name="file" id="payment_method_attachment" class="form-control" onchange="loadFile(event,'image_preview_payment_method')"  accept="image/*">
                        </div>
                        <div style="margin-top: 7%">
                            <center>
                                <img src="" id="image_preview_payment_method">
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 8%"> 
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary" onclick="ajax_action_add_payment_method()">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="edit-payment-method" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Edit Payment Method</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Nama</label>
                            <input type="text" name="" id="edit_name_payment_method" class="form-control" placeholder="Masukkan Nama disini">
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Code</label>
                            <input type="text" name="" id="edit_code_payment_method" class="form-control" placeholder="Masukkan code disini">
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Api</label>
                            <input type="text" name="" id="edit_api_payment_method" class="form-control" placeholder="Masukkan Api disini">
                        </div>

                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Status</label>
                            <select class="form-control text-popins" id="edit_status_payment_method">
                                <option value="1">Active</option>
                                <option value="2">Disable</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Icon Category</label>
                            <input type="file" name="" class="form-control"  onchange="loadFile(event,'edit_payment_method_preview')"  accept="image/*" id="edit_attachment_payment_method">
                        </div>
                        <div style="margin-top: 8%">
                            <center>
                                <img src="" id="edit_payment_method_preview">
                            </center>
                        </div>
                    </div>
                    <div style="display: none">
                        <input type="text" id="edit_id_payment_method" name="" class="form-control">
                        <input type="text" id="edit_id_file_payment_method" name="" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-top: 8%">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary text-popins" onclick="ajax_action_edit_payment_method()">Edit Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- end side modal payment-method -->


<!-- start sied modal payment-account -->

<div id="add-payment-account" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Tambah Payment Account</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-12">
                         <div>
                            <label class="text-popins">Payment Method</label>
                            <select class="form-control text-popins" id="id_payment_method">
                                <option>Auto</option>
                                <option>Manual</option>
                            </select>
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Nama</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="name_payment_account">
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Nomor</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan code disini" id="nomor_payment_account">
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Type</label>
                            <select class="form-control text-popins" id="type_payment_account">
                                <option value="1">Auto</option>
                                <option value="2">Manual</option>
                            </select>
                        </div>
                    </div>
                </div>
                 <div style="margin-top: 3%"></div>
                <div class="row">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary " onclick="ajax_action_add_payment_account()">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="edit-payment-account" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Edit Payment Account</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div>
                            <label class="text-popins">Payment Method</label>
                            <select class="form-control text-popins" id="edit_select_id_payment_method">
                                <option value="1">Auto</option>
                                <option value="2">Manual</option>
                            </select>
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Nama</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="edit_name_payment_account">
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Nomor</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan code disini" id="edit_nomor_payment_account">
                        </div>
                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Type</label>
                            <select class="form-control text-popins" id="edit_type_payment_account">
                                <option value="1">Auto</option>
                                <option value="2">Manual</option>
                            </select>
                        </div>

                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Status</label>
                            <select class="form-control text-popins" id="edit_status_payment_account">
                                <option value="1">Active</option>
                                <option value="2">Disable</option>
                            </select>
                        </div>
                        <div style="display: none">
                                <input type="" name="" id="edit_id_payment_account">
                        </div>

                    </div>
                </div>
                <div style="margin-top: 3%"></div>
                <div class="row">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary text-popins" onclick="ajax_action_edit_payment_account()">Edit Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end side modal payment-account -->

<!-- API side -->

<div id="edit-api" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div>
                    <center>
                        <h2 class="text-popins">Edit API</h2>
                    </center>
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <label>Nama Layanan api</label>
                    <input type="text" name="" id="edit_name_api" class="form-control" placeholder="Masukkan Nama disini">
                </div>
                <div style="margin-top: 1%"></div>
                <div>
                    <label>Api Key</label>
                    <input type="text" name="" id="edit_api_key" class="form-control" placeholder="Masukkan Api disini" >
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                            <label class="text-popins">Status</label>
                            <select class="form-control text-popins" id="edit_status_api">
                                <option value="1">Active</option>
                                <option value="2">Disable</option>
                            </select>
                        </div>

                <div style="display: none">
                        <input type="" id="edit_id_api" name="">
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button class="btn btn-primary " onclick="ajax_action_edit_api()">Edit Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="add-api" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div>
                    <center>
                        <h2 class="text-popins">Tambah API</h2>
                    </center>
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <label>Nama Layanan api</label>
                    <input type="text" name="" id="name_api" class="form-control" placeholder="Masukkan Nama disini">
                </div>
                <div style="margin-top: 1%"></div>
                <div>
                    <label>Api Key</label>
                    <input type="text" name="" id="api_key" class="form-control" placeholder="Masukkan Api disini" >
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button class="btn btn-primary " onclick="ajax_action_add_api()">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end admin modal side -->

<!-- end api side -->

<!-- level modal -->


<div id="add-level" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div>
                    <center>
                        <h2 class="text-popins">Tambah Level</h2>
                    </center>
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <label>Nama level</label>
                    <input type="text" name="" id="name_level" class="form-control" placeholder="Masukkan Nama disini">
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <label>Akses</label>
                    <div>
                        <table class="table table-bordered" id="list_menu">
                        </table>
                    </div>
                </div>
                <div style="display: none">
                    <input type="text" name="" id="akses" name="akses">  
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button class="btn btn-primary " onclick="ajax_action_add_level()">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div id="edit-level" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div>
                    <center>
                        <h2 class="text-popins">Edit Level</h2>
                    </center>
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <label>Nama level</label>
                    <input type="text" name="" id="edit_name_level" class="form-control" placeholder="Masukkan Nama disini">
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <label>Akses</label>
                    <div>
                        <table class="table table-bordered" id="edit_list_menu">
                        </table>
                    </div>
                </div>
                <div style="display: none">
                    <input type="text" name="" class="form-control" id="edit_akses" name="edit_akses">  
                    <input type="text" name="" class="form-control" id="edit_id_level" name="edit_id_level">  
                </div>
                <div style="margin-top: 3%"></div>
                <div>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button class="btn btn-primary " onclick="ajax_action_edit_level()">Edit Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- end level modal -->

<div id="add-merchant" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div>
                    <center>
                        <h2 class="text-popins">Tambah Merchant</h2>
                    </center>
                </div>
<div style="margin-top: 1%"></div>
                 <div>
                    <label>Nama Merchant</label>
                    <input type="text" name="" id="name_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>
<div style="margin-top: 1%"></div>
                 <div>
                    <label>Owner</label>
                    <input type="text" name="" id="owner_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>

<div style="margin-top: 1%"></div>
                 <div>
                    <label>Username</label>
                    <input type="text" name="" id="username_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>
<div style="margin-top: 1%"></div>
                 <div>
                    <label>Password</label>
                    <input type="password" name="" id="password_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>

<div style="margin-top: 1%"></div>
                 <div>
                    <label>Email</label>
                    <input type="text" name="" id="email_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>
<div style="margin-top: 1%"></div>
                 <div>
                    <label>No handphone</label>
                    <input type="text" name="" id="no_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>
<div style="margin-top: 1%"></div>
                  <div class="row">
                        <div class="col-sm-3">
                             <div>
                                <label>Provinsi</label>
                                <input type="text" name="" id="provinsi" class="form-control" placeholder="Masukkan  disini">
                            </div>
                        </div>

                          <div class="col-sm-3">
                             <div>
                                <label>Kota</label>
                                <input type="text" name="" id="edit_name_level" class="form-control" placeholder="Masukkan  disini">
                            </div>
                        </div>

                          <div class="col-sm-3">
                             <div>
                                <label>Kecamatan</label>
                                <input type="text" name="" id="edit_name_level" class="form-control" placeholder="Masukkan  disini">
                            </div>
                        </div>

                         <div class="col-sm-3">
                             <div>
                                <label>Kelurahan</label>
                                <input type="text" name="" id="edit_name_level" class="form-control" placeholder="Masukkan  disini">
                            </div>
                        </div>
                </div>
                 <div style="margin-top: 1%"></div>
                <div>
                    <label>Kode Pos</label>
                    <textarea class="form-control" id="kode_pos_merchant">
                    </textarea>
                </div>
                <div style="margin-top: 1%"></div>
                <div>
                    <label>Alamat</label>
                    <textarea class="form-control" id="alamat_merchant">
                    </textarea>
                </div>
            <div style="margin-top: 1%"></div>
                <div>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button class="btn btn-primary " onclick="ajax_action_add_merchant()">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>


<div id="edit-merchant" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div>
                    <center>
                        <h2 class="text-popins">Edit Merchant</h2>
                    </center>
                </div>
<div style="margin-top: 1%"></div>
                 <div>
                    <label>Nama Merchant</label>
                    <input type="text" name="" id="edit_name_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>
<div style="margin-top: 1%"></div>
                 <div>
                    <label>Owner</label>
                    <input type="text" name="" id="edit_owner_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>

<div style="margin-top: 1%"></div>
                 <div>
                    <label>Username</label>
                    <input type="text" name="" id="edit_username_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>

<div style="margin-top: 1%"></div>
                 <div>
                    <label>Email</label>
                    <input type="text" name="" id="edit_email_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>
<div style="margin-top: 1%"></div>
                 <div>
                    <label>No handphone</label>
                    <input type="text" name="" id="edit_no_merchant" class="form-control" placeholder="Masukkan  disini">
                </div>
<div style="margin-top: 1%"></div>
                  <div class="row">
                        <div class="col-sm-3">
                             <div>
                                <label>Provinsi</label>
                                <input type="text" name="" id="edit_provinsi_merchant" class="form-control" placeholder="Masukkan  disini">
                            </div>
                        </div>

                          <div class="col-sm-3">
                             <div>
                                <label>Kota</label>
                                <input type="text" name="" id="edit_kota_merchant" class="form-control" placeholder="Masukkan  disini">
                            </div>
                        </div>

                          <div class="col-sm-3">
                             <div>
                                <label>Kecamatan</label>
                                <input type="text" name="" id="edit_kecamatan_merchant" class="form-control" placeholder="Masukkan  disini">
                            </div>
                        </div>

                         <div class="col-sm-3">
                             <div>
                                <label>Kelurahan</label>
                                <input type="text" name="" id="edit_kelurahan_merchant" class="form-control" placeholder="Masukkan  disini">
                            </div>
                        </div>
                </div>
                 <div style="margin-top: 1%"></div>
                <div>
                    <label>Kode Pos</label>
                    <textarea class="form-control" id="edit_kode_pos_merchant">
                    </textarea>
                </div>
                <div style="margin-top: 1%"></div>
                <div>
                    <label>Alamat</label>
                    <textarea class="form-control" id="edit_alamat_lengkap_merchant">
                    </textarea>
                </div>
                 <div style="display: none">
                    <input type="text" name="" id="edit_id_merchant" class="form-control" placeholder="Masukkan Email disini">
                </div>
            <div style="margin-top: 1%"></div>
                <div>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button class="btn btn-primary " onclick="ajax_action_edit_merchant()">Edit Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
<!-- Merchant -->



<!-- end merchant -->

<!-- Banner -->

<div id="add-banner" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Tambah Banner</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Nama Banner</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="name_banner">
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Banner</label>
                            <input type="file" name="" class="form-control" name="file" accept="image/*" id="add_attacment_banner"  onchange="loadFile(event,'banner_preview')">
                        </div>
                        <div style="margin-top: 8%">
                            <center>
                                <img src="" id="banner_preview">
                            </center> 
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 8%">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary " onclick="ajax_action_add_banner()">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div id="edit-banner" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Edit banner</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Nama Banner</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="edit_name_banner">
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Logo Banner</label>
                            <input type="file" name="" class="form-control" name="file" accept="image/*" id="edit_attachment_banner"  onchange="loadFile(event,'edit_banner_preview')">
                        </div>
                        <div style="margin-top: 8%">
                            <center>
                                <img src="" id="edit_banner_preview">
                            </center> 
                        </div>
                    </div>
                    <div style="display: none">
                            <input type="" name="" id="edit_id_banner">
                            <input type="" name="" id="edit_id_file_banner">
                    </div>
                </div>
                <div class="row" style="margin-top: 8%">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary " onclick="ajax_action_edit_banner()">Edit Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end banner -->


<!-- product type modal -->
<div id="add-product-type" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Tambah Product Type</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-12">

                     <div>
                            <label class="text-popins">Category</label>
                            <select class="form-control text-popins" id="id_category">
                            </select>
                        </div>


                        <div>
                        <br>
                            <label class="text-popins">Product Type</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="name_product_type">
                        </div>

                    </div>
               
                </div>
                <div class="row" style="margin-top: 5%">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary " onclick="ajax_action_add_product_type()">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="edit-product-type" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Edit Product Type</h3>
                    <hr>
                </div>

                      <div>
                            <label class="text-popins">Category</label>
                            <select class="form-control text-popins" id="select_edit_id_category">
                            </select>
                        </div>

                <div class="row">
                <br>
                    <div class="col-12">
                        <div>
                            <label class="text-popins">Nama Product Type</label>
                            <input type="text" name="" id="edit_name_product_type" class="form-control" placeholder="Masukkan Nama disini">
                        </div>

                        <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Status</label>
                            <select class="form-control text-popins" id="status_product_type">
                                <option value="1">Active</option>
                                <option value="2">Disable</option>
                            </select>
                        </div>

                    </div>
                    <div style="display: none">
                        <input type="text" id="edit_id_product_type" name="" class="form-control">
                        <input type="text" id="edit_id_file" name="" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="text-align: right;">
                    <br>
                        <button class="btn btn-primary text-popins" onclick="ajax_action_edit_product_type()">Edit Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end product type modal -->


<!-- product  modal -->
<div id="add-product" class="modal fade" role="dialog">
    <div class="modal-dialog  modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Tambah Product</h3>
                    <hr>
                </div>
                <div>
                            <label class="text-popins">Product Type</label>
                            <select class="form-control text-popins" id="id_product_type">
                            </select>
                        </div>
                        <br>
                <div class="row">
                     

                    <div class="col-6">
                    <div>
                            <label class="text-popins">Kode Product</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="kode_product">
                        </div>

                        <div>
                            <label class="text-popins">Name Product</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="name_product">
                        </div>

                    </div>
                    <br>
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Price Buy</label>
                            <input type="number" name="" class="form-control" placeholder="Masukkan  disini" id="price_buy">
                        </div>


                        <div>
                            <label class="text-popins">Price Sell</label>
                            <input type="number" name="" class="form-control" placeholder="Masukkan  disini" id="price_sell">
                        </div>

                    </div>
               
                </div>
                <div class="row" style="margin-top: 5%">
                    <div class="col-12" style="text-align: right;">
                        <button class="btn btn-primary " onclick="ajax_action_add_product()">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="edit-product" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="padding: 3%">
                <div style="text-align: center;">
                    <h3 class="text-popins">Edit product</h3>
                    <hr>
                </div>


                      <div>
                            <label class="text-popins">Product Type</label>
                            <select class="form-control text-popins" id="edit_id_product_type_select">
                            </select>
                        </div>

                        
                <div class="row">


                    <div class="col-6">
                    <div>
                            <label class="text-popins">Kode Product</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="edit_kode_product">
                        </div>

                        <div>
                            <label class="text-popins">Name Product</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="edit_name_product">
                        </div>

                    </div>
                    <br>
                    <div class="col-6">
                        <div>
                            <label class="text-popins">Price Buy</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="edit_price_buy">
                        </div>


                        <div>
                            <label class="text-popins">Price Sell</label>
                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama disini" id="edit_price_sell">
                        </div>



                    </div>

                   

                    </div>
                     <div style="margin-top: 3%"></div>
                        <div>
                            <label class="text-popins">Status</label>
                            <select class="form-control text-popins" id="status_product_type">
                                <option value="1">Active</option>
                                <option value="2">Disable</option>
                            </select>
                        </div>
                    <div style="display: none">
                        <input type="text" id="edit_id_product_type" name="" class="form-control">
                        <input type="text" id="edit_id_product" name="" class="form-control">
                    </div>

                      <div class="row">

                    <div class="col-12" style="text-align: right;">
                    <br>
                        <button class="btn btn-primary text-popins" onclick="ajax_action_edit_product()">Edit Data</button>
                    </div>
                </div>
               
                </div>

              
            </div>
        </div>

    </div>
<!-- end product  modal -->

<!-- modal topup -->



<!-- end modal topup -->