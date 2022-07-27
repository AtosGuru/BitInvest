@extends('layouts.user')
@section('content')       
<div class="row text-center">
  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
     Add Balance
    </div>
    <div class="panel-body table-responsive" style="text-align: left;">
     <p> 1. This is the first step for starting to earn just by lending.</p>
<p>2. You can add amount any time to your account. While adding BTC, it will redirect you to payment gateway, you can send to our BTC wallet.</p>
<p>3. You can track your deposit log from<a href="{{route('depositlog')}}"> here</a>.</p>
<p>4. If you face any difficulties in depositing, you can mail our support team</p>
  </div>
</div>

      <div class="col-md-8">
          <div class="panel panel-inverse cust-panel">
                <div class="panel-heading">
                   <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a; ">?</button></span>
                    <h4 class="panel-title">Add {{$gnl->cur}} Balance</h4>

                </div>
                <div class="panel-body">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Bitcoin Balance </h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>Here you can add Bitcoin to your Account.</b> </p>
          <p>1) Enter the BTC Amount</p>
          <p>2) Click Add</p>
          <p>3) You will be redirected to payment gateway</p>
          </div>
          <div class="col-md-12 col-md-4"></div>
          </div>
        </div>
        <div class="row">
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div>
      
    </div>
  </div>
                   
                    <form role="form" method="post" action="{{ route('deposit.confirm') }}" >
                          {{ csrf_field() }}
                      <div class="form-group">
                            <label for="amount">Amount</label>
                             <div class="input-group">
                                  <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" required>
                                   <span class="input-group-addon">{{$gnl->cursym}}</span>
                            </div>
                      </div>
                      <button type="submit" class="btn btn-lg btn-inverse btn-block" style="background-color: #008a8a; border-color: #008a8a;"><i class="fa fa-plus"> Add </i></button>
                    </form>
                </div>
          </div>
      </div>
      <div class="col-md-4">
            <div class="panel panel-inverse" data-sortable-id="ui-buttons-3">
             <div class="panel-heading">
              <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal1"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a; ">?</button></span>
                  <h4 class="panel-title">Your Account Balance</h4>
              </div>
              <div class="panel-body">
   <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Your Account Balance</h4>
        </div>
        <div class="modal-body">
          <p>The amount deposited by you will get showed here. Keep track of your BTC balance from here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                  <h2>{{Auth::user()->balance}} {{$gnl->cursym}}</h2>
              </div>
          </div>
      </div>
</div>

@endsection