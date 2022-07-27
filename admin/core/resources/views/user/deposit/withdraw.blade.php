@extends('layouts.user')
@section('content')       
<div class="row text-center">
      <div class="col-md-8">
            <div class="panel panel-inverse cust-panel">
                  <div class="panel-heading">
                        <h4 class="panel-title">Withdraw {{$gnl->cur}}</h4>
                  </div>
                  <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('wdconfirm') }}" >
                              {{ csrf_field() }}
                              <div class="form-group">
                                    <label for="amount">Amount</label>
                                     <div class="input-group">
                                          <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" required>
                                           <span class="input-group-addon">{{$gnl->cursym}}</span>
                                    </div>
                              </div>
                              <button type="submit" class="btn btn-lg btn-inverse btn-block">Withdraw</button>
                        </form>
                  </div>
            </div>
      </div>
      <div class="col-md-4">
            <div class="panel panel-inverse" data-sortable-id="ui-buttons-3">
             <div class="panel-heading">
                  <h4 class="panel-title">Your Account Balance</h4>
              </div>
              <div class="panel-body">
                  <h2>{{Auth::user()->balance}} {{$gnl->cursym}}</h2>
              </div>
          </div>
      </div>
</div>
@endsection



