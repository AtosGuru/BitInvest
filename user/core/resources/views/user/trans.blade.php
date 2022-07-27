@extends('layouts.user')

@section('content')
<style>
    .btn {
        width: 100px;
    }
</style>
<div class="row">
<div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
      My Transactions
    </div>
    <div class="panel-body table-responsive">
      <p>1. Here you can keep track of all you Deposits and withdrawals together.</p>
      <p>2. You can Add a deposit from <a href="{{route('deposit')}}">here</a>.</p>
      <p>3. You can request for withdrawal from <a  href="{{route('user.withdraw')}}">here</a>.</p>
    </div>
  </div>
<div class="col-md-12">
  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
         <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
      <h4 class="panel-title">{{$gnl->cur}} Transaction Log</h4>
    </div>
    <div class="panel-body table-responsive"> <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bitcoin Transaction Log</h4>
        </div>
        <div class="modal-body">
          <p>You can see all the Bitcoin transactions made by you here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
     <table class="table table-striped">
      <tr>
            <th>Type</th>
            <th>Amount</th>
        <th>Balance</th>
            <th>TRX ID</th>
        <th>Details</th>
      </tr>
      @foreach($trans as $log)
      <tr>
            <td><span class="btn btn-{{$log->type == '0' ? 'warning' : 'success'}}">
                {{$log->type == '0' ? 'Sent' : 'Received'}}
                </span>
            </td>
        <td>{{$log->amount}} {{$gnl->cur}}</td>
            <td>{{$log->balance}} {{$gnl->cur}}</td>
            <td>{{$log->trxid}}</td>
        <td>{{$log->details}}</td>
      </tr>
      @endforeach
     </table>
     <?php echo $trans->render(); ?>
   </div>
 </div>
</div>   
</div>


@endsection
