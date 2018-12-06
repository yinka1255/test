@include("includes.header")
@include("includes.vendor_sidemenu")
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Card Details </h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('vendor/dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url('vendor/cards')}}">Cards</a></li>
                            </ol>
                            <button type="button" class="btn btn-success d-none d-lg-block m-l-15" href="#" data-toggle="modal" data-target="#generate"><i class="fa fa-plus-circle"></i> Request For Cards</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="">{{$card->unit}} Units</h3>
                                <h6 class="card-subtitle" style="color:#00c292">N{{$card->amount}}</h6>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="white-box text-center"> 
                                                @if($card->image != null)
                                                <img src="{{asset('public/images/cards/'.$card->image)}}"  class="img-responsive" alt="card 100 unit"/>
                                                @endif
                                                @if($card->image == null)
                                                <img src="{{asset('public/images/no-image.jpeg')}}" alt="card" class="img-responsive"/>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                        
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h3 class="box-title m-t-40">Card Summary</h3>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Company</th>
                                                        <th>Unit</th>
                                                        <th>Amount</th>
                                                        <th>Quantity</th>
                                                        <th>Total</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($generated_card_summaries as $key => $card_summary)
                                                    <tr>
                                                        <td>{{$key + 1}}</td>
                                                        <td>{{$card_summary->brand_name}}</td>
                                                        <td>{{$card_summary->unit}}</td>
                                                        <td>{{$card_summary->amount}}</td>
                                                        <td>{{$card_summary->quantity}}</td>
                                                        <td>N{{$card_summary->quantity * $card_summary->amount}}</td>
                                                        <td>{{$card_summary->created_at}}</td>
                                                        @if($card_summary->status == 1)
                                                        <td><span class="label label-info">New</span></td>
                                                        @endif
                                                        @if($card_summary->status == 2)
                                                        <td><span class="label label-success">Delivered</span></td>
                                                        @endif
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>            
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Campaign -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Today's Schedule and sales overview -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" id="myGreen" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                        </div>    
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        <div class="modal fade" id="generate" tabindex="-1" role="dialog" aria-labelledby="generate"
            aria-hidden="true" animate="animate" modal-animation="true">
          <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">
                        Generate Card   
                      </h4>
                    </div>
                    <div class="modal-body modal-body-sub">
                        <form class="form-group" method="post"  enctype="multipart/form-data" action="{{url('vendor/generate_card')}}">    
                            <div class="row">
                                <div class="col-md-12">
                                        <input type="hidden" name="card_id" value="{{$card->id}}">
                                    <div class="form-group">
                                        <label class="form-label">Quantity</label>
                                        <input type="number" name="quantity" placeholder="Quantity" class="form-control" required/>
                                    </div>
                                    
                                </div>
                                   
                                <input type="submit" name="submit" class="action-button" value="Submit" />
                            </div>    
                        </form>    
                    </div>  
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default d-none d-lg-block m-l-15 pull-right" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
              </div>
          </div>      
        </div>   
        @include("includes.footer")
        <script>
            $("#myGreen").click();

            function clickImageInput(){
                $("#photo").click();
            }

            function readNewFile($event){
                if(event.target.files.length > 0) {
                    let file = event.target.files[0];
                    
                    var myReader = new FileReader();

                    myReader.onloadend = (e) => {
                        var img = myReader.result;
                        $("#img").attr('src',img);
                    }
                    myReader.readAsDataURL(file);
                }	
            }
        </script>    