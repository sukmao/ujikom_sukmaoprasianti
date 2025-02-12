@extends('layoutsadmin.app')
@section('contentadmin')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Masyarakat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Masyarakat</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Masyarakat</h3>
                    <a href="/masyarakat/create" class="btn float-right btn-outline-secondary btn-md"><li class="fa fa-plus"></li> Add Data Masyarakat</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>3207172222000000</td>
                                <td>Lukman</td>
                                <td>Bandung</td>
                                <td>
                                    <a href="/masyarakat/create/1" class="btn btn-warning btn-xs" title="Edit Masyarakat"><li class="fa fa-edit"></li></a>
                                    <a href="" class="btn btn-primary btn-xs" title="Detail Masyarakat"><li class="fa fa-list"></li></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>3207172222000000</td>
                                <td>Fery</td>
                                <td>Bandung</td>
                                <td>
                                    <a href="/masyarakat/create/2" class="btn btn-warning btn-xs" title="Edit Masyarakat"><li class="fa fa-edit"></li></a>
                                    <a href="" class="btn btn-primary btn-xs" title="Detail Masyarakat"><li class="fa fa-list"></li></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>3207172222000000</td>
                                <td>Samsu</td>
                                <td>Bandung</td>
                                <td>
                                    <a href="/masyarakat-add.html" class="btn btn-warning btn-xs" title="Edit Masyarakat"><li class="fa fa-edit"></li></a>
                                    <a href="" class="btn btn-primary btn-xs" title="Detail Masyarakat"><li class="fa fa-list"></li></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection
