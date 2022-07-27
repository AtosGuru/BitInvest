@extends('layouts.user')
@section('content')

<div class="row">
  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
   My Lendings
    </div>
    <div class="panel-body table-responsive" style="text-align: left;">
    <p>1. Keep track of all your Active and Completed lendings from here.</p>
    <p>2. You can start lending from<a href="{{route('invest.coin')}}"> here.</a>
  </div>
</div>
  <div class="panel panel-inverse" style="background: linear-gradient(to right,  #196391); padding-top: 25px; padding-left: 15px; padding-right: 17px; padding-bottom: 25px;">
    <div class="panel-heading text-center">
      <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
      <h4 class="panel-title">My {{$gnl->cur}} Investments</h4>
    </div>
    <div class="panel-body">
     <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-body">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">My BITCOIN Investments</h4>
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
          <table class="table table-responsive table-striped">
            <thead>
              <tr>
                <th>
                  Amount
                </th>
                <th>
                 Every Return Amount
                </th>
                <th>
                 Return Times
                </th>
                <th>
                 Total Return
                </th>
                <th>
                 Status
                </th>
              </tr>
            </thead>
            <tbody>
             @foreach($myinvests as $inv)
             <tr>
              <td>
                {{$inv->amount }} {{$gnl->cursym}}
              </td>
              <td>
                {{$inv->package->ret*$inv->amount/100}} {{$gnl->cursym}}
              </td>
              <td>
                {{$inv->package->times}}
              </td>
              <td>
                {{$inv->package->total*$inv->amount/100}} {{$gnl->cursym}}
              </td>
               <td>
                <span class="btn {{$inv->status == 1 ? 'btn-success' : 'btn-warning'}}">{{$inv->status == 1 ? 'Active' : 'Completed'}}</span>
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
