@extends('layouts.user')
@section('content')

<div class="row">
  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
   My Borrows
    </div>
    <div class="panel-body table-responsive" style="text-align: left;">
    <p>1. Keep track of all your Pending and Approved Borrows from here.</p>
    <p>2. You can start Borrowing from<a href="{{route('borrow')}}"> here.</a>
  </div>
</div>
  <div class="panel panel-inverse" style="background: linear-gradient(to right,  #196391); padding-top: 25px; padding-left: 15px; padding-right: 17px; padding-bottom: 25px;">
    <div class="panel-heading text-center">
      <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
      <h4 class="panel-title">My Borrowings</h4>
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
          <h4 class="modal-title">My Borrowings</h4>
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
          <div class="portlet-body">

              <div class="table-responsive">
  <table class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>
                  Coin 
                </th>
                <th>
                Repay in BTC
                </th>
                 <th>
                value in USD
                </th>
                <th>
                 Terms
                </th>
                <th>
                Monthly payment in BTC
                </th>
                 <th>
                Value in USD
                </th>
                <th>
                 Date
                </th>
                <th>
                 Status
                </th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1;?>
             @foreach($borrow as $borrows)
             <tr>
              <td>{{$i}}</td>
              <td>{{$borrows->amount_in_btc}} BTC</td>
              <td>{{$borrows->repay}} BTC</td>
              <td>$ {{$borrows->repay_usd}} </td>
            <td>{{$borrows->installment}} months</td>
               <td>{{$borrows->monthly_payments}} BTC</td>
                 <td>$ {{$borrows->monthly_payments}}</td>
            <td>{{$borrows->created_at}}</td>
                <td>
                  @if($borrows->status==0)
                <span class="btn-warning btn">Pending</span>
                @elseif($borrows->status==1)
              <span class="btn btn-success">Approved</span>
                @else
 <span class="btn-danger btn">Canceled</span>
                @endif
              </td>
           </tr>
           <?php $i++; ?>
           @endforeach
          
          
         </tbody>
       </table>

     </div>
   </div>
   </div>
 </div>

</div>

</div>

</div>
@endsection
