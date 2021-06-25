@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>SCORE</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Score</li>
      </ol>
    </div>
  </div>
</div>
    <!-- scoring  -->

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Add Score</h3>
  </div>
  <div class="card-body">
    <form method="post" action="/addscore">
                @csrf
      <!-- <div class="scoring">
        <div class="row">
          <div class="col-12"> -->
            <!-- <div class="head">

              <div class="row">
                <div class="col-4">
                  <div class="left-side details">
                    <div class="form-group">
                      <label>DATE</label>
                    </div>

                    <div class="form-group">
                      <label>VENDOR NAME</label>
                    </div>

                    <div class="form-group">
                      <label>SERVICES / GOODS</label>
                    </div>

                    <div class="form-group">
                      <label>ASSESSOR NAME</label>
                    </div>
                    
                  </div>
                </div>

                <div class="col-8">
                  <div class="left-side details">
                    <div class="form-group">
                      <input type="text" class="form-control" name="date" placeholder="Date" />
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" name="vendor_name" placeholder="Vender Name" />
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" name="services" placeholder="Service / Goods" />
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" name="assessor" placeholder="Assessor Name" />
                    </div>
                   
                  </div>
                </div>

              </div>
            </div> -->

              <!-- result details  -->
            <!-- <div class="result--detail"> -->
                <!-- heading one  -->
              <!-- <div class="heading--one">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 1 </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-11">
                    <div class="right-side heading">
                      <div class="form-group">
                        <label for="number"> Work result </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- layer 1.1  -->
              <!-- <div class="1.1">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 1.1 </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-11">
                    <div class="right-side subject">
                      <div class="form-group">
                        <p> The quality of the results given </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="quality" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="quality" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="quality" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-10">
                    <div class="right-side content">
                      <div class="form-group">
                        <p class="line--one"> 1 = the quality of the work does not match what expected and mutually agreed </p>
                        <p class="line--two"> 2 = the quality of the work in accordance with what expected and mutually agreed </p>
                        <p class="line--three"> 3 = the quality of the work exceeds the expected and mutually agreed </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  </div>

                  <div class="col-11">
                    <div class="comment-box">
                      <div class="form-group">
                        <textarea style="height:120px; width: 100%; padding: 10px; " name="quality_comment" placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- layer 1.2 -->
              <!-- <div class="1.2">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 1.2  </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-11">
                    <div class="right-side subject">
                      <div class="form-group">
                        <p> Quantity according to deal </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="quantity" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="quantity" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="quantity" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-10">
                    <div class="right-side content">
                      <div class="form-group">
                        <p class="line--one"> 1 = quantity of work that does not match expected and mutually agreed </p>
                        <p class="line--two"> 2 = quantity of work according to which expected and mutually agreed</p>
                        <p class="line--three"> 3 = quantity of work exceeds with expected and mutually agreed </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  </div>

                  <div class="col-11">
                    <div class="comment-box">
                      <div class="form-group">
                        <textarea style="height:120px; width: 100%; padding: 10px; " name="quantity_comment" placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- layer 1.3  -->
              <!-- <div class="1.3">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 1.3  </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-11">
                    <div class="right-side subject">
                      <div class="form-group">
                        <p> Work results in accordance with agreed time together </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2">
                    <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin: 0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="results" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin: 0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="results" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin: 0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="results" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-10">
                    <div class="right-side content">
                      <div class="form-group">
                        <p class="line--one"> 1 = The work is completed more than the time expected and mutually agreed </p>
                        <p class="line--two"> 2 = the work is completed in accordance with the time expected and mutually agreed </p>
                        <p class="line--three"> 3 = the work is completed faster than the time expected and mutually agreed </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  </div>

                  <div class="col-11">
                    <div class="comment-box">
                      <div class="form-group">
                        <textarea style="height:120px; width: 100%; padding: 10px; " name="results_comment" placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

                <!-- heading two  -->
              <!-- <div class="heading--two">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 2 </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-11">
                    <div class="right-side heading">
                      <div class="form-group">
                        <label for="number"> Procedure </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

                <!-- layer 2.1  -->

              <!-- <div class="2.1">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 2.1  </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-11">
                    <div class="right-side subject">
                      <div class="form-group">
                        <p> Appropriate processing with the conditions that agreed together </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin: 0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="appropriate" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin: 0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="appropriate" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin: 0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="appropriate" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-10">
                    <div class="right-side content">
                      <div class="form-group">
                        <p class="line--one"> 1 = the work process is not in accordance with mutually agreed terms </p>
                        <p class="line--two"> 2 = the work process is in accordance with the provisions mutually agreed </p>
                        <p class="line--three"> 3 = the work process is in accordance with the provisions
                          mutually agreed upon and more effective, efficient
                          and bring better process improvement improvement
                          to customers </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  </div>

                  <div class="col-11">
                    <div class="comment-box">
                      <div class="form-group">
                        <textarea style="height:120px; width: 100%; padding: 10px; " name="appropriate_comment" placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- layer 2.2  -->
              <!-- <div class="2.2">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 2.2  </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-11">
                    <div class="right-side subject">
                      <div class="form-group">
                        <p> Work process follow K3 requirements persyaratan mutually agreed </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="process" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="process" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="process" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-10">
                    <div class="right-side content">
                      <div class="form-group">
                        <p class="line--one"> 1 = the process does not follow the requirements mutually agreed K3 </p>
                        <p class="line--two"> 2 = the work process follows the K3 requirements mutually agreed </p>
                        <p class="line--three"> 3 = the work process follows the K3 requirements
                          mutually agreed upon and more effective, efficient
                          and bring better process improvement improvement
                          to the company </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  </div>

                  <div class="col-11">
                    <div class="comment-box">
                      <div class="form-group">
                        <textarea style="height:120px; width: 100%; padding: 10px; " name="process_comment" placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- heading three  -->
              <!-- <div class="heading--three">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 3 </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-11">
                    <div class="right-side heading" >
                      <div class="form-group">
                        <label for="number"> Service </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- layer 3.1  -->
              <!-- <div class="3.1">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number" style="text-align: right;">
                      <div class="form-group">
                        <label for="number"> 3.1  </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-11">
                    <div class="right-side subject">
                      <div class="form-group">
                        <p> The readiness of vendors in handle complaints or input </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="readiness" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="readiness" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="readiness" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-10">
                    <div class="right-side content">
                      <div class="form-group">
                        <p class="line--one"> 1 = response from complaint or input more than 72 hours </p>
                        <p class="line--two"> 2 = response from complaint or input between 24 - 72 hours </p>
                        <p class="line--three"> 3 = response from complaints or input is lacking from 24 hours </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  </div>

                  <div class="col-11">
                    <div class="comment-box">
                      <div class="form-group">
                        <textarea style="height:120px; width: 100%; padding: 10px; " name="readiness_comment" placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- layer 3.2  -->
              <!-- <div class="3.2">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number" > 3.2  </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-11">
                    <div class="right-side subject">
                      <div class="form-group">
                        <p> Timeframe in resolve complaints or input </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="time-frame" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="time-frame" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="time-frame" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-10">
                    <div class="right-side content">
                      <div class="form-group">
                        <p class="line--one"> 1 = settlement of complaints or input more than 120 hours </p>
                        <p class="line--two"> 2 = settlement of complaints or input between 48 - 120 hours </p>
                        <p class="line--three"> 3 = settlement of complaints or input is lacking from 48 hours </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  </div>

                  <div class="col-11">
                    <div class="comment-box">
                      <div class="form-group">
                        <textarea style="height:120px; width: 100%; padding: 10px; " name="time_comment" placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- total score table  -->
            <!-- <div class="total--score" style="margin-top: 80px;">
              <h3 class="main-heading" style="text-align: center;"> Total Score <span id="total"></span> </h3>
              <input type="hidden" name="total" id="totalInput" value="" />
              <div class="sub-heading">
                <div class="form-group">
                  <label> Rating Description: </label>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <div class="total--results">
                    <p> Vendor = Minimum Score 75 </p>
                    <p> <strong> MINIMUM GRADUATION = 80 </strong> </p>
                  </div>
                </div>
                <div class="col-2">
                <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin:0; font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="total-score%" value="5"/> 
                            <i class="fas fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0; font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="total-score%" value="10"/>
                             <i class="fas fa-star"></i> 
                             <i class="fas fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0; font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                </div>
                <div class="col-4">
                  <div class="rating-percentage">
                    <p class="percentage--result"> = Good (>80%) </p>
                    <p class="percentage--result"> = Enough (50% - 80%) </p>
                    <p class="percentage--result"> = Less (< 50%)   </p> 
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
              </div>
            </div> -->

          <!-- </div>
        </div>
      </div> -->
                <!-- scoring table comnplete  -->
        <div class="head">
          <div class="row">
            <div class="col-4">
              <div class="left-side details">
                <div class="form-group">
                  <label>DATE</label>
                </div>

                <div class="form-group">
                  <label>VENDOR NAME</label>
                </div>

                <div class="form-group">
                  <label>SERVICES / GOODS</label>
                </div>

                <div class="form-group">
                  <label>ASSESSOR NAME</label>
                </div>
                
              </div>
            </div>

            <div class="col-8">
              <div class="left-side details">
                <div class="form-group">
                  <input type="text" class="form-control" name="date" placeholder="Date" />
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="vendor_name" placeholder="Vender Name" />
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="services" placeholder="Service / Goods" />
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="assessor" placeholder="Assessor Name" />
                </div>
              
              </div>
            </div>
          </div>
        </div>

        <!-- table start  -->
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                      <th class="number">No.</th>
                      <th class="work-result"></th>
                      <th class="scoring">SCORING</th>
                      <th class="weight">WEIGHT (%)</th>
                      <th class="score">SCORE</th>
                      <th class="resuls">RESULT </br> ASSESSMENT</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- heading one start -->
                  <tr>
                    <td class="number"><strong>1</strong></td>
                    <td class="work-result"><strong>Work result</strong></td>
                    <td class="scoring"></td>
                    <td class="weight"><strong>60%</strong></td>
                    <td class="score"></td>
                    <td class="resuls"></td>
                  </tr>
                  <!-- heading one end -->

                  <!-- line 1.1 start -->
                  <tr>
                    <td class="number">1.1</td>
                    <td class="work-result"> The quality of the results </br> given </td>
                    <td class="scoring">
                      <p>1 = the quality of the work does not match what </br>
                        expected and mutually agreed</p>
                      <p>2 = the quality of the work in accordance with what </br>
                        expected and mutually agreed</p>
                      <p>3 = the quality of the work exceeds the </br>
                        expected and mutually agreed</p>
                    </td>
                    <td class="weight">20%</td>
                    <td class="score">
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 20</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="far fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 10</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="far fa-star"></i> 
                              <i class="far fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 5</span>
                      </div>
                    </td>
                    <td class="results"> 10 </td>
                  </tr>

                  <!-- line 1.1 end  -->
                  
                  <!-- line 1.2 start -->
                  <tr>
                    <td class="number">1.2</td>
                    <td class="work-result"> Quantity according to </br> deal </td>
                    <td class="scoring">
                      <p>1 = quantity of work that does not match </br>
                        expected and mutually agreed </p>
                      <p>2 = quantity of work according to which </br>
                        expected and mutually agreed</p>
                      <p>3 = quantity of work exceeds with </br>
                        expected and mutually agreed</p>
                    </td>
                    <td class="weight">20%</td>
                    <td class="score">
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 20</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 10</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 5</span>
                      </div>
                    </td>
                    <td class="results"> 10 </td>
                  </tr>

                  <!-- line 1.2 end  -->

                  <!-- line 1.3 start -->
                  <tr>
                    <td class="number">1.3</td>
                    <td class="work-result"> Work results in accordance with </br> agreed time </br> together </td>
                    <td class="scoring">
                      <p>1 = The work is completed more than the time </br>
                        expected and mutually agreed </p>
                      <p>2 = the work is completed in accordance with the time </br>
                        expected and mutually agreed</p>
                      <p>3 = the work is completed faster than the time </br>
                        expected and mutually agreed</p>
                    </td>
                    <td class="weight">20%</td>
                    <td class="score">
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 20</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 10</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 5</span>
                      </div>
                    </td>
                    <td class="results"> 10 </td>
                  </tr>

                  <!-- line 1.3 end  -->

                  <!-- heading two start -->
                  <tr>
                    <td class="number"><strong>2</strong></td>
                    <td class="work-result"><strong>Procedure</strong></td>
                    <td class="scoring"></td>
                    <td class="weight"><strong>20%</strong></td>
                    <td class="score"></td>
                    <td class="resuls"></td>
                  </tr>
                  <!-- heading two end -->

                  <!-- line 2.1 start -->
                  <tr>
                    <td class="number">2.1</td>
                    <td class="work-result"> Appropriate processing </br> with the conditions that </br> agreed together </td>
                    <td class="scoring">
                      <p>1 = the work process is not in accordance with </br>
                        mutually agreed terms </p>
                      <p>2 = the work process is in accordance with the provisions </br>
                        mutually agreed</p>
                      <p>3 = the work process is in accordance with the provisions </br>
                          mutually agreed upon and more effective, efficient </br>
                          and bring better process improvement improvement </br>
                          to customers</p>
                    </td>
                    <td class="weight">10%</td>
                    <td class="score">
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 10</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 5</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 1</span>
                      </div>
                    </td>
                    <td class="results"> 5 </td>
                  </tr>

                  <!-- line 2.1 end  -->

                  <!-- line 2.2 start -->
                  <tr>
                    <td class="number">2.2</td>
                    <td class="work-result"> Work process </br> follow K3 requirements persyaratan </br> mutually agreed </td>
                    <td class="scoring">
                      <p>1 = the process does not follow the requirements </br>
                        mutually agreed K3 </p>
                      <p>2 = the work process follows the K3 requirements </br>
                        mutually agreed</p>
                      <p>3 = the work process follows the K3 requirements </br>
                        mutually agreed upon and more effective, efficient </br>
                        and bring better process improvement improvement </br>
                        to the company</p>
                    </td>
                    <td class="weight">10%</td>
                    <td class="score">
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 10</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 5</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 1</span>
                      </div>
                    </td>
                    <td class="results"> 5 </td>
                  </tr>

                  <!-- line 2.2 end  -->

                  <!-- heading three start -->
                  <tr>
                    <td class="number"><strong>3</strong></td>
                    <td class="work-result"><strong>Service</strong></td>
                    <td class="scoring"></td>
                    <td class="weight"><strong>20%</strong></td>
                    <td class="score"></td>
                    <td class="resuls"></td>
                  </tr>
                  <!-- heading three end -->

                  <!-- line 3.1 start -->
                  <tr>
                    <td class="number">3.1</td>
                    <td class="work-result"> The readiness of vendors in </br> handle complaints </br> or input </td>
                    <td class="scoring">
                      <p>1 = response from complaint or input more than </br>
                        72 hours </p>
                      <p>2 = response from complaint or input between 24 - </br>
                        72 hours</p>
                      <p>3 = response from complaints or input is lacking </br>
                        from 24 hours</p>
                    </td>
                    <td class="weight">10%</td>
                    <td class="score">
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 10</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 5</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 1</span>
                      </div>
                    </td>
                    <td class="results"> 5 </td>
                  </tr>

                  <!-- line 3.1 end  -->

                  <!-- line 3.2 start -->
                  <tr>
                    <td class="number">3.2</td>
                    <td class="work-result"> Timeframe in </br> resolve complaints </br> or input </td>
                    <td class="scoring">
                      <p>1 = settlement of complaints or input more than </br>
                        120 hours </p>
                      <p>2 = settlement of complaints or input between </br>
                        48 - 120 hours</p>
                      <p>3 = settlement of complaints or input is lacking </br>
                        from 48 hours</p>
                    </td>
                    <td class="weight">10%</td>
                    <td class="score">
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 10</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 5</span>
                      </div>
                      <div>
                        <span class="star--three" style="font-size: 20px; color: red">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> 
                          </label> 
                        </span> 
                        <span> 1</span>
                      </div>
                    </td>
                    <td class="results"> 5 </td>
                  </tr>

                  <!-- line 3.2 end  -->
                </tbody>
              </table>

              <div class="total--score" style="margin-top: 80px;">
                    <div class="row">
                      <div class="col-11">
                        <h3 class="main-heading" style="text-align: center;"> Total Score (%) <span id="total"></span> </h3>
                      </div>
                      <div class="col-1">
                        <h3 class="main-heading" style="text-align: center;"> 50 <span id="total"></span> </h3>
                      </div>
                    </div>
                    <input type="hidden" name="total" id="totalInput" value="" />
                    <div class="sub-heading">
                      <div class="form-group">
                        <label> Rating Description: </label>
                      </div>
                    </div>

                      <div class="row">
                        <div class="col-6">
                          <div class="total--results">
                            <p> Vendor = Minimum Score 75 </p>
                            <p> <strong> MINIMUM GRADUATION = 80 </strong> </p>
                          </div>
                        </div>
                        <div class="col-2">
                        <div  class="radio-section">
                              <div class="left-side rating--icons">
                              <p class="star--one" style="margin:0; font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                                <label> 
                                  <input type="radio" id="star" name="total-score%" value="5"/> 
                                    <i class="fas fa-star"></i>
                                </label>
                              </p>
                                <p class="star--two" style="margin:0; font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                                  <label> 
                                    <input type="radio" id="star2" name="total-score%" value="10"/>
                                    <i class="fas fa-star"></i> 
                                    <i class="fas fa-star"></i> 
                                  </label> 
                                </p>
                                <p class="star--three" style="margin:0; font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                                  <label> 
                                    <input type="radio" id="star3" name="total-score%" value="20"/> 
                                      <i class="fas fa-star"></i> 
                                      <i class="fas fa-star"></i> 
                                      <i class="fas fa-star"></i> 
                                  </label> 
                                </p>
                              </div>
                            </div>
                        </div>
                        <div class="col-4">
                          <div class="rating-percentage">
                            <p class="percentage--result"> = Good (>80%) </p>
                            <p class="percentage--result"> = Enough (50% - 80%) </p>
                            <p class="percentage--result"> = Less (< 50%)   </p> 
                          </div>
                        </div>
                      </div>

                    <div class="row">
                      <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </div>
                    </div>
                  </div>

        <!-- table end  -->
          <!-- scoring table comnplete  -->
      </form>
    </div>
    </div>
    </div>
  </div>
</div>







<script>
  $('.card-body').on('change',function(){

    let data = 0;
    $('body').find('input[type="radio"]:checked').each(function(e){
      data += parseInt(this.value)
      
    })
    $('#totalInput').val(data);
    $('#total').html(data);
  })
</script>

@endsection
