@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vendor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vendor</li>
            </ol>
          </div>
        </div>
      </div>
    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="card">
            <div class="card-header">
            <h3 class="card-title">Vendor Table</h3>

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
            <a href="/addvendor" class="btn" style="border:1px solid #ced4da;color: #939ba2; border-radius: 4px; float:right; height: 32px; font-size: 14px; display:flex; justify-content: center; align-items: center;">
            <i class="fas fa-plus" style="margin-right: 10px; "> </i> User 
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
                    <td><?php if($score->question1_1 == 5){
                      echo ' the quality of the work does not match what expected and mutually agreed';
                    }elseif($score->question1_1 == 10){
                      echo 'the quality of the work in accordance with what expected and mutually agreed';
                    }else{
                      echo 'the quality of the work exceeds the expected and mutually agreed';
                    } ?></td>

                    <td><?php if($score->question1_2 == 5){
                      echo ' quantity of work that does not match expected and mutually agreed';
                    }elseif($score->question1_2 == 10){
                      echo 'quantity of work according to which expected and mutually agreed';
                    }else{
                      echo 'quantity of work exceeds with expected and mutually agreed';
                    } ?></td>

                    <td><?php if($score->question1_3 == 5){
                      echo ' The work is completed more than the time expected and mutually agreed';
                    }elseif($score->question1_3 == 10){
                      echo 'the work is completed in accordance with the time expected and mutually agreed';
                    }else{
                      echo 'the work is completed faster than the time expected and mutually agreed';
                    } ?></td>

                    <td><?php if($score->question2_1 == 5){
                      echo ' the work process is not in accordance with mutually agreed terms';
                    }elseif($score->question2_1 == 10){
                      echo 'the work process is in accordance with the provisions mutually agreed';
                    }else{
                      echo 'the work process is in accordance with the provisions mutually agreed upon and more effective, 
                        efficient and bring better process improvement improvement to customers';
                    } ?></td>

                    <td><?php if($score->question2_2 == 5){
                      echo 'the process does not follow the requirements mutually agreed K3';
                    }elseif($score->question2_2 == 10){
                      echo 'the work process follows the K3 requirements mutually agreed';
                    }else{
                      echo 'the work process follows the K3 requirements mutually agreed upon and more effective, 
                        efficient and bring better process improvement improvement to the company';
                    } ?></td>

                    <td><?php if($score->question3_1 == 5){
                      echo 'response from complaint or input more than 72 hours';
                    }elseif($score->question3_1 == 10){
                      echo 'response from complaint or input between 24 - 72 hours';
                    }else{
                      echo 'response from complaints or input is lacking from 24 hours';
                    } ?></td>

                    <td><?php if($score->question3_2 == 5){
                      echo 'settlement of complaints or input more than 120 hours';
                    }elseif($score->question3_2 == 10){
                      echo 'settlement of complaints or input between 48 - 120 hours';
                    }else{
                      echo 'settlement of complaints or input is lacking from 48 hours';
                    } ?></td>

                    <td><?php echo $score->total ?></td>
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
