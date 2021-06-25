@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>VENDOR ASSESMENT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">VENDOR ASSESMENT</li>
            </ol>
          </div>
        </div>
      </div>
    <div class="container">
      <div class="vender--assessment">
        <div class="row">
          <div class="col-12">
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
                      <input type="text" class="form-control" placeholder="Date" />
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Vender Name" />
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Service / Goods" />
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Assessor Name" />
                    </div>
                   
                  </div>
                </div>

              </div>
            </div>

              <!-- result details  -->
            <div class="result--detail">
                <!-- heading one  -->
              <div class="heading--one">
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
              </div>

              <!-- layer 1.1  -->
              <div class="1.1">
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
                        <p> The quality of the results provided </p>
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
                        <p class="line--one"> = the quality of the work is not as expected and mutually agreed </p>
                        <p class="line--two"> = quality of work as expected and mutually agreed </p>
                        <p class="line--three"> = the quality of the work exceeds what is expected and is mutually agreed upon </p>
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- layer 1.2 -->
              <div class="1.2">
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
                        <p> Quantity according to agreement </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-3">
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
                        <p class="line--one"> = the quality of the work is not as expected and mutually agreed </p>
                        <p class="line--two"> = quality of work as expected and mutually agreed </p>
                        <p class="line--three"> = the quality of the work exceeds what is expected and is mutually agreed upon </p>
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- layer 1.3  -->
              <div class="1.3">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group"style="text-align: right;">
                        <label for="number"> 1.3  </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-11">
                    <div class="right-side subject">
                      <div class="form-group">
                        <p> The results of the work in accordance with the mutually agreed time </p>
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
                          <input type="radio" id="star" name="results" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="results" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
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
                        <p class="line--one"> = the quality of the work is not as expected and mutually agreed </p>
                        <p class="line--two"> = quality of work as expected and mutually agreed </p>
                        <p class="line--three"> = the quality of the work exceeds what is expected and is mutually agreed upon </p>
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                <!-- heading two  -->
              <div class="heading--two">
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
              </div>

                <!-- layer 2.1  -->

              <div class="2.1">
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
                        <p> The work process is in accordance with mutually agreed terms </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-3">
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
                        <p class="line--one"> = the work process is not in accordance with the mutually agreed terms </p>
                        <p class="line--two"> = the work process is in accordance with mutually agreed terms </p>
                        <p class="line--three"> = the work process is in accordance with mutually agreed terms, more effective and efficient
                          and bring better process improvement to customers </p>
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- layer 2.2  -->
              <div class="2.2">
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
                        <p> The work process follows the agreed K3 requirements persyaratan </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-3">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="k3" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="k3" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="k3" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-10">
                    <div class="right-side content">
                      <div class="form-group">
                        <p class="line--one"> = the work process does not follow the agreed K3 requirements </p>
                        <p class="line--two"> = the work process follows the agreed K3 requirements </p>
                        <p class="line--three"> = the work process follows the agreed K3 requirements, is more effective and efficient
                          and bring better process improvement to the company </p>
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- heading three  -->
              <div class="heading--three">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 3 </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-11">
                    <div class="right-side heading">
                      <div class="form-group">
                        <label for="number"> Service </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- layer 3.1  -->
              <div class="3.1">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 3.1  </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-11">
                    <div class="right-side subject">
                      <div class="form-group">
                        <p> Vendor readiness in handling complaints or input </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-3">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="vendor" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="vendor" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="vendor" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-10">
                    <div class="right-side content">
                      <div class="form-group">
                        <p class="line--one"> = response to complaints or input more than 72 hours </p>
                        <p class="line--two"> = response to complaints or input between 24-72 hours </p>
                        <p class="line--three"> = response from complaints or input less than 24 hours </p>
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- layer 3.2  -->
              <div class="3.2">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group" style="text-align: right;">
                        <label for="number"> 3.2  </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-11">
                    <div class="right-side subject">
                      <div class="form-group">
                        <p> The time period for resolving complaints or inputs </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-3">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="time-period" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="time-period" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="time-period" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-10">
                    <div class="right-side content">
                      <div class="form-group">
                        <p class="line--one"> = settlement of complaints or input more than 120 hours </p>
                        <p class="line--two"> = settlement of complaints or inputs between 48 - 120 hours </p>
                        <p class="line--three"> = settlement of complaints or inputs in less than 48 hours </p>
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- total score table  -->
            <div class="total--score" style="margin-top: 80px;">
              <h3 class="main-heading" style="text-align: center;"> Total Score </h3>
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
                      <p class="star--one" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-start; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="total-score" value="5"/> 
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-start; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="total-score" value="10"/> 
                              <i class="far fa-star"></i> 
                              <i class="far fa-star"></i> 
                              <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="margin:0;font-size: 20px; color: skyblue; justify-content: flex-start; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="total-score" value="20"/> 
                              <i class="far fa-star"></i> 
                              <i class="far fa-star"></i> 
                              <i class="far fa-star"></i> 
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
            </div>

          </div>
        </div>
      </div>
<!-- scoring  -->
      <div class="scoring">
        <div class="row">
          <div class="col-12">
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
                      <input type="text" class="form-control" placeholder="Date" />
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Vender Name" />
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Service / Goods" />
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Assessor Name" />
                    </div>
                   
                  </div>
                </div>

              </div>
            </div>

              <!-- result details  -->
            <div class="result--detail">
                <!-- heading one  -->
              <div class="heading--one">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group">
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
              </div>

              <!-- layer 1.1  -->
              <div class="1.1">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group">
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
                  <div class="col-1">
                  </div>

                  <div class="col-3">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="quality" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="quality" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="quality" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-8">
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- layer 1.2 -->
              <div class="1.2">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group">
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
                  <div class="col-1">
                  </div>

                  <div class="col-3">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="quantity" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="quantity" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="quantity" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-8">
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- layer 1.3  -->
              <div class="1.3">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group">
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
                  <div class="col-1">
                  </div>

                  <div class="col-3">
                    <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="results" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="results" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="results" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-8">
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                <!-- heading two  -->
              <div class="heading--two">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group">
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
              </div>

                <!-- layer 2.1  -->

              <div class="2.1">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group">
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
                  <div class="col-1">
                  </div>

                  <div class="col-3">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="appropriate" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="appropriate" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="appropriate" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-8">
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- layer 2.2  -->
              <div class="2.2">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group">
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
                  <div class="col-1">
                  </div>

                  <div class="col-3">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="process" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="process" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="process" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-8">
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- heading three  -->
              <div class="heading--three">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group">
                        <label for="number"> 3 </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-11">
                    <div class="right-side heading">
                      <div class="form-group">
                        <label for="number"> Service </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- layer 3.1  -->
              <div class="3.1">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
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
                  <div class="col-1">
                  </div>

                  <div class="col-3">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="readiness" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="readiness" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="readiness" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-8">
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- layer 3.2  -->
              <div class="3.2">
                <div class="row">
                  <div class="col-1">
                    <div class="left-side number">
                      <div class="form-group">
                        <label for="number"> 3.2  </label>
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
                  <div class="col-1">
                  </div>

                  <div class="col-3">
                  <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="time-frame" value="5"/> <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="time-frame" value="10"/> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="font-size: 20px; color: skyblue; justify-content: flex-end; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="time-frame" value="20"/> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 
                          </label> 
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-8">
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
                        <textarea style="height:120px; width: 100%; padding: 10px; " placeholder="Comment:"> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- total score table  -->
            <div class="total--score" style="margin-top: 80px;">
              <h3 class="main-heading" style="text-align: center;"> Total Score % </h3>
              <div class="sub-heading">
                <div class="form-group">
                  <label> Rating Description: </label>
                </div>
              </div>

              <div class="row">
                <div class="col-8">
                <div  class="radio-section">
                      <div class="left-side rating--icons">
                      <p class="star--one" style="font-size: 20px; color: skyblue; justify-content: flex-start; display: flex; align-items: center;"> 
                        <label> 
                          <input type="radio" id="star" name="total-score%" value="5"/> 
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </label>
                      </p>
                        <p class="star--two" style="font-size: 20px; color: skyblue; justify-content: flex-start; display: flex; align-items: center; "> 
                          <label> 
                            <input type="radio" id="star2" name="total-score%" value="10"/>
                             <i class="far fa-star"></i> 
                             <i class="far fa-star"></i> 
                             <i class="far fa-star"></i> 
                          </label> 
                        </p>
                        <p class="star--three" style="font-size: 20px; color: skyblue; justify-content: flex-start; display: flex; align-items: center;">
                          <label> 
                            <input type="radio" id="star3" name="total-score%" value="20"/> 
                              <i class="far fa-star"></i> 
                              <i class="far fa-star"></i> 
                              <i class="far fa-star"></i> 
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
                  <div class="total--results">
                    <p> Vendor = Minimum Score 75 </p>
                    <p> <strong> MINIMUM GRADUATION = 80 </strong> </p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SCORING</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">SCORING</li>
            </ol>
          </div>
        </div>
      </div>
    <div class="container">
      
    </div>
  </div>
</div> -->
<!-- Scoring Design End  -->

<script>
$('#star').on('click', function(){
    $('.star--one').addClass('active');
    $('.star--two').removeClass('active');
    $('.star--three').removeClass('active');
});
$('#star2').on('click', function(){
    $('.star--two').addClass('active');
    $('.star--one').removeClass('active');
    $('.star--three').removeClass('active');
});
$('#star3').on('click', function(){
    $('.star--three').addClass('active');
    $('.star--two').removeClass('active');
    $('.star--one').removeClass('active');
});
</script>

@endsection
