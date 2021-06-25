@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div>
    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="card">
            <div class="card-header">
            <h3 class="card-title">Users</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px; margin: 0px 0px 0px 10px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                
                </div>
                
            </div>
            <a href="/addnewuser" class="btn" style=" border:1px solid #ced4da;color: #939ba2;float:right; height: 32px; font-size: 14px; display:flex; justify-content: center; align-items: center;">
            <i class="fas fa-plus" style="margin-right:10px;"></i> User
            </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $user) { ?>
                
                <tr>
                    <td><?php echo $user->id ?></td>
                    <td><?php echo $user->name ?></td>
                    <td><?php echo $user->email ?></td>
                    <td>
                    <form method='post' action='/user'>
                      @csrf

                    <input type="hidden" value="<?php echo $user->id ?>" name="id" />
                    <button type="submit"  class="delete btn" ><i class="fas fa-trash-alt"></i></button></form></td>
                </tr>
            <?php }?>

                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        </div>
    </div>
</div>
@endsection
