@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Scores</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div>
    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="card">
            <div class="card-header">
            <h3 class="card-title">Score Table</h3>

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
            <a href="/addscore" class="btn" style=" border:1px solid #ced4da;color: #939ba2;float:right; height: 32px; font-size: 14px; display:flex; justify-content: center; align-items: center;">
            <i class="fas fa-plus" style="margin-right:10px"></i> User
            </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>VENDOR NAME</th>
                    <th>SERVICES/GOODS</th>
                    <th>ASSESSOR NAME</th>
                    <th>DATE</th>
                    <th>The quality of the results given</th>
                    <th>Quantity according to deal</th>
                    <th>Work results in accordance with agreed time together</th>
                    <th>Appropriate processing with the conditions that agreed together</th>
                    <th>Work process follow K3 requirements persyaratan mutually agreed</th>
                    <th>The readiness of vendors in handle complaints or input</th>
                    <th>Timeframe in resolve complaints or input </th>
                    <th>Results Assessment</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $score) { ?>
                
                <tr>
                    <td><?php echo $score->id ?></td>
                    <td><?php echo $score->vendor ?></td>
                    <td><?php echo $score->services ?></td>
                    <td><?php echo $score->assessor ?></td>
                    <td><?php echo $score->date ?></td>
                    <td><?php echo $score->question1_1 ?></td>
                    <td><?php echo $score->question1_2 ?></td>
                    <td><?php echo $score->question1_3 ?></td>
                    <td><?php echo $score->question2_1 ?></td>
                    <td><?php echo $score->question2_2 ?></td>
                    <td><?php echo $score->question3_1 ?></td>
                    <td><?php echo $score->question3_2 ?></td>
                    <td><?php echo $score->result ?></td>
                    <td>
                      <button type="button" class="btn">
                       <i class="fas fa-eye"></i>
                      </button>
                      <button type="button" class="btn">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn">
                      <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
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
