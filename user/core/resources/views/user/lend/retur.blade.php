@extends('layouts.user')
@section('content')

<div class="row">
  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
  My Return Log
    </div>
    <div class="panel-body table-responsive" style="text-align: left;">
    <p>1. Here you can check the returns earned from a completed lending.</p>
    <p>2. Only returns from a completed lending period will be displayed here</p>
    <p>3. You can start lending from<a href="{{route('invest.coin')}}"> here.</a>
  </div>
</div>
  <div class="panel panel-inverse">
    <div class="panel-heading text-center">
       <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
      <h4 class="panel-title">My {{$gnl->cur}} Investment Returns</h4>
    </div>
    <div class="panel-body">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">My BITCOIN Investments </h4>
        </div>
        <div class="modal-body">
          <p>Here you will see the Bitcoin Investments made by you. You can track the amount invested, Return Amount, Return times, Total return and status. </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
     <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-body">
          <table class="table table-responsive table-striped">
            <thead>
              <tr>
                <th>
                  Transaction ID
                </th>
                <th>
                  Transaction Time
                </th>
                <th>
                 Return Amount
                </th>
              </tr>
            </thead>
            <tbody>
             @foreach($rlogs as $rlog)
             <tr>
              <td>
                {{ $rlog->trxid }} 
              </td>
              <td>
                {{$rlog->trxtime }}
              </td>
              <td>
                {{$rlog->amount}} {{$gnl->cursym}}
              </td>
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
@endsection
