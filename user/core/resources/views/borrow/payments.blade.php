@extends('layouts.user')
@section('content')

<div class="row">
    <div class=" col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
  <div class="panel panel-inverse" data-sortable-id="index-1">
     <div class="dropdown panel" style="float: right;">
    <button class="btn btn-success dropdown-toggle" style="height: 37px;" type="button" data-toggle="dropdown">Search By Borrow Id
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      @foreach($borrow_id as $borrow)
      <li><a href="{{route('payments.id',$borrow->id)}}">ID  {{$borrow->id}}</a></li>
      @endforeach
    </ul>
  </div>
    <div class="panel-heading">
   My Payments
    </div>
    <div class="panel-body table-responsive" style="text-align: left;">
    <p>1. Keep track of all your Pending and Approved Borrows from here.</p>
    <p>2. You can start Borrowing from<a href="{{route('borrow')}}"> here.</a></p>
  </div>
</div>
  <div class="panel panel-inverse" style="background: linear-gradient(to right,  #196391); padding-top: 25px; padding-left: 15px; padding-right: 17px; padding-bottom: 25px;">
    <div class="panel-heading text-center">
      <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
      <h4 class="panel-title">My Payments</h4>
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
          <h4 class="modal-title">My Payments</h4>
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
</div>
</div>
</div>
</div>



 @if($new_user ==1)
 
  <div class="panel panel-inverse">
  <div class="panel-heading green" >Last Month</div>
   <div class="portlet-body">

              <div class="table-responsive">
  <table class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Borrow ID</th>
                <th>
                  Total Coin 
                </th>
                <th>
                Total payments
                </th>
               <th>
                Total paid
                </th>
                <th>
                Remaining payments
                </th>
                <th>Terms
                </th>
                <th>
                 Monthly payments
                </th>
                <th>
                 Date
                </th>
                <th>
                 Status
                </th>
                  <th>
                 Action
                </th>
              </tr>
            </thead>
            <tbody>

              <?php $i=1;?>
             @foreach($last_month as $borrows)
             <tr>
              <td>{{$i}}</td>
               <td>{{$borrows->id}}</td> 
              <td>{{$borrows->amount_in_btc}} BTC</td> 
               <td>{{$borrows->repay}} BTC</td>
               <td>{{$lastMonth_paid}} BTC</td>
                <td>{{$lastMonth_remaining}} BTC</td>
             
            <td>{{$borrows->installment}} months</td>
               <td>{{$borrows->monthly_payments}} BTC</td>
            <td>{{$borrows->due_date}}</td>
               <td>
               @if($borrows->status==0)
                   Pay
                 @elseif($borrows->status==2)
              Payment Approved by Admin
               
               @elseif($borrows->status==3)
               
                 Old Payment Cancelled by Admin
                
               @else
              Waiting for Admin Approvel
                @endif

             </td>
              <td>
                 <form name="pay" action="{{route('pay.amount')}}" method="post">
                 {{ csrf_field() }}
              <input name="id" type="hidden" value="{{$borrows->payment_id}}">
              <input name="amount" type="hidden" value="{{$borrows->monthly_payments}}">
                  @if($borrows->status==0)
                   <button  type="submit" class="btn-success btn">Pay</button>
                 @elseif($borrows->status==2)
                 <span class="btn-success btn">Paid</span>
               
               @elseif($borrows->status==3)
               
                 <button  type="submit" class="btn-success btn">Pay</button>
                 <br>
                
               @else
                <span class="btn-warning btn">Pending</span>
                @endif
               </form>
              </td>
            
           </tr>
           <?php $i++; ?>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

          
       
  <div class="panel panel-inverse">
  <div class="panel-heading green" >This Month</div>
   <div class="portlet-body">

              <div class="table-responsive">
  <table class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Borrow ID</th>
                <th>
                  Total Coin 
                </th>
                <th>
                Total payments
                </th>
                  <th>
                Total paid
                </th>
                <th>
                Remaining payments
                </th>
                <th>Terms
                </th>
                <th>
                 Monthly payments
                </th>
                <th>
                 Date
                </th>
                <th>
                 Status
                </th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <?php $i=1;?>
             @foreach($this_month as $borrows)
             <tr>
              <td>{{$i}}</td>
              <td>{{$borrows->id}}</td> 
              <td>{{$borrows->amount_in_btc}} BTC</td>
              <td>{{$borrows->repay}} BTC</td>
               <td>{{$this_month_paid}} BTC</td>
                <td>{{$this_month_remaining}} BTC</td>
            <td>{{$borrows->installment}} months</td>
               <td>{{$borrows->monthly_payments}} BTC</td>
            <td>{{$borrows->due_date}}</td>
              <td>
               @if($borrows->status==0)
                   Pay
                 @elseif($borrows->status==2)
                Payment Approved by Admin
               
               @elseif($borrows->status==3)
               
                 Old Payment Cancelled by Admin
                
               @else
              Waiting for Admin Approvel
                @endif

             </td>
              <td>
                 <form name="pay" action="{{route('pay.amount')}}" method="post">
                 {{ csrf_field() }}
              <input name="id" type="hidden" value="{{$borrows->payment_id}}">
              <input name="amount" type="hidden" value="{{$borrows->monthly_payments}}">
                  @if($borrows->status==0)
                   <button  type="submit" class="btn-success btn">Pay</button>
                 @elseif($borrows->status==2)
                 <span class="btn-success btn">Paid</span>
               
               @elseif($borrows->status==3)
               
                 <button  type="submit" class="btn-success btn">Pay</button>
                 <br>
                
               @else
                <span class="btn-warning btn">Pending</span>
                @endif
               </form>
              </td>
            
           </tr>
           <?php $i++; ?>
           @endforeach
          
          
         </tbody>
       </table>
     </div>
</div>
</div>

  <div class="panel panel-inverse">
  <div class="panel-heading green" >Upcomming</div>
   <div class="portlet-body">

              <div class="table-responsive">
  <table class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Borrow ID</th>
                <th>
                  Total Coin 
                </th>
                <th>
                Total payments
                </th>
                  <th>
                Total paid
                </th>
                <th>
                Remaining payments
                </th>
                <th>Terms
                </th>
                <th>
                 Monthly payments
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
             @foreach($upcomming as $borrows)
             <tr>
              <td>{{$i}}</td>
              <td>{{$borrows->id}}</td> 
              <td>{{$borrows->amount_in_btc}} BTC</td>
              <td>{{$borrows->repay}} BTC</td>
                <td>{{$upcomming_paid}} BTC</td>
                <td>{{$upcomming_remaining}} BTC</td>
            <td>{{$borrows->installment}} months</td>
               <td>{{$borrows->monthly_payments}} BTC</td>
            <td>{{$borrows->due_date}}</td>
                <td>
                  @if($borrows->status==0)
                   <span class="btn-success btn disabled" disabled>Pay</span>
                 @elseif($borrows->status==2)
                 <span class="btn-success btn">Paid</span>
               
               @elseif($borrows->status==3)
                <span class="btn-danger btn">Cancelled</span>
               @else
                <span class="btn-warning btn">Pending</span>
                @endif
               
              </td>
           </tr>
           <?php $i++; ?>
           @endforeach
          
          
         </tbody>
       </table>
</div></div>
</div>
@elseif($history==1)
<div class="panel panel-inverse">
  <div class="panel-heading green" >Pay history</div>
   <div class="portlet-body">

              <div class="table-responsive">
  <table class="table">
            <thead>
              <tr>
                <th>S.No</th>
                <th>
                  Total Coin 
                </th>
                <th>
                Total payments
                </th>
                 
                <th>Terms
                </th>
                <th>
                 Monthly payments
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
             @foreach($payments as $borrows)
             <tr>
              <td>{{$i}}</td>
              <td>{{$borrows->amount_in_btc}} BTC</td>
              <td>{{$borrows->repay}} BTC</td>
            
            <td>{{$borrows->installment}} months</td>
               <td>{{$borrows->monthly_payments}} BTC</td>
            <td>{{$borrows->due_date}}</td>
                <td>
                  @if($borrows->status==0)
                   <span class="btn-success btn disabled" disabled>Pay</span>
                 @elseif($borrows->status==2)
                 <span class="btn-success btn">Paid</span>
               
               @elseif($borrows->status==3)
                <span class="btn-danger btn">Cancelled</span>
               @else
                <span class="btn-warning btn">Pending</span>
                @endif
               
              </td>
           </tr>
           <?php $i++; ?>

           @endforeach
          
          
         </tbody>
       </table>
</div></div>  </div>


@else

   <h4><center> <p>No Payments, start Borrowing from<a href="{{route('borrow')}}"> here.</a></p></center></h4>

@endif
     </div>
   </div>
 </div>

</div>

</div>

</div>
@endsection
