@extends('layouts.user')
@section('content')       
<div class="row text-center">
    <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
      Withdraw
    </div>
    <div class="panel-body table-responsive">
      <p>1. You can withdraw your lending amount with returns from here.</p>
      <p>2. You can only withdraw after the lending period completes.</p>
      <p>3. You can check your withdraw history from <a  href="{{route('withdrawlog')}}">here</a>.</p>
      <p>4. To add a deposit you can go <a href="{{route('deposit')}}">here</a>.</p>
    </div>
  </div>
      <div class="col-md-8">
            <div class="panel panel-inverse cust-panel">
                  <div class="panel-heading">
                    <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a; ">?</button></span>
                        <h4 class="panel-title">Withdraw {{$gnl->cur}}</h4>
                  </div>
                  <div class="panel-body">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Withdraw Bitcoin</h4>
        </div>
        <div class="modal-body">
          <p>You can withdraw Bitcoins present in your wallet from here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                        <form role="form" method="POST" action="{{ route('wdconfirm') }}" >
                              {{ csrf_field() }}
                              <div class="form-group">
                                    <label for="amount">Amount</label>
                                     <div class="input-group">
                                          <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" required>
                                           <span class="input-group-addon">{{$gnl->cursym}}</span>
                                    </div>
                              </div>
                              <button type="submit" class="btn btn-lg btn-inverse btn-block" style="background-color: #008a8a; border-color:  #008a8a;">Withdraw</button>
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
          <p>The total amount in your wallet is displayed here. Keep track of your BTC balance from here.</p>
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



