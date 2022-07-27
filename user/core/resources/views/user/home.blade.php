@extends('layouts.user')

@section('content')
<style>
.scroll{
  height:500px;
}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/pages/css/style.min.css')}}">

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
      User Dashboard
    </div>
    @if($user_type==1)
    <div class="panel-body table-responsive">
      <h4>Bit Invest Dashboard</h4>
      <p>1. You can Lend BTC for returns using this dashboard</p>
      <p>2. Make sure you check our lending package before Lending.</p>
      <p>3. You need to deposit Money to your wallet first. You can start from <a href="{{route('deposit')}}">here.</a> </p>
      <p>4. Keep track of the amount you have invested from here - My Lendings <a href="{{route('my.invest')}}">here</a></p>
      <p>5. The returns which you have earned can be tracked from My Return <a href="{{route('returnlog')}}"> Log page</a></p>
      <p>6. Your amount can be withdrawn from <a href="{{route('user.withdraw')}}">here</a>.</p>
    </div>
    @else

    <div class="panel-body table-responsive">
      <h4>Bit Borrow Dashboard</h4>
      <p>1. You can Borrow BTC for Interest using this dashboard</p>
      <p>2. Make sure you check our Terms and Interest before applying for borrowing.</p>
      <p>3. You can request for a Borrow  from <a href="{{route('borrow')}}">here.</a> </p>
      <p>4. Keep track of your Borrow Requests from here - My Borrowings <a href="{{route('myborrowings')}}">here</a></p>
       <p>5. Keep track of your Borrow Monthly Payments from <a href="{{route('my_payments')}}">here</a></p>
      <p>6. Update your Profile information from   <a href="{{route('borrow.profile')}}"> Log page</a></p>
      <p>7. Update your KYC information from <a href="{{route('borrow.kyc')}}">here</a>.</p>
    </div>
    @endif


  </div>
    <div class="widget widget-stats" style="margin-bottom: 10px; background:#2ac46c">
      <div class="stats-info">
        <div class="pull-left icon">
           <!--<h4><img src="{{ asset('assets/images/logo/logo.png') }}" class="pull-left" style="width: 80%; margin-right: 10px; filter:invert(1) opacity(1); margin-top: 10px;"></h4>-->
          <!-- <h3>BitInvest</h3> -->       
        </div>
        <div class="pull-left" style="margin-top: 27px; margin-left: 25px;">
          @if($user_type==2)
           <p>Total Borrowing:<strong style="color: #face5c;"> @if($totol_borrow != null){{$totol_borrow}}  @else 0 @endif</strong> {{$gnl->cursym}}</p>

          @else
 <p>Your Balance :<strong style="color: #face5c;"> {{number_format(floatval(Auth::user()->balance) , $gnl->decimal, '.', '')}}</strong> {{$gnl->cursym}}</p>
          @endif
          
          <p class="f-s-20"><strong>1 {{$gnl->cursym}} = {{number_format(floatval($btcrate) , $gnl->decimal, '.', '')}} USD</strong></p>
        </div>
          @if($user_type==1)
        <div class="pull-right" style="margin-top: 44px; margin-left: 25px;">
         <a href="{{route('invest.coin')}}" class="btn pull-right btn-lg" style=
         'background: #f7da65' type="button" style="margin-top: 12px;">
        
          {{$gnl->cursym}} LENDING
          <i class="fa fa-angle-right fa-lg"></i>
        </a>
      </div> 
      @else
        <div class="pull-right" style="margin-top: 44px; margin-left: 25px;">
         <a href="{{route('myborrowings')}}" class="btn pull-right btn-lg" style=
         'background: #f7da65' type="button" style="margin-top: 12px;">
        
          {{$gnl->cursym}} Borrowings
          <i class="fa fa-angle-right fa-lg"></i>
        </a>
      </div> 
      @endif
    </div>
  </div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6">
        
          
          <!-- begin card -->
          <div class="card text-center">
            <div class="card-header">
              <strong>My BitCoin Wallet Address</strong>
            </div>
            <div class="card-block">
             <form name="edit_wallet" method="post" action="{{route('edit.wallet')}}">
               <div class="form-group">
        {{csrf_field()}}
            <input id="rurl" name="wallet_address" class="form-control input-lg" value="{{Auth::user()->wallet}}" readonly>
            <br>
            <span class="btn btn-success" id="cbtn">Copy</span>

            <span id="edit"><span class="btn btn-success" id="edit_button">Edit</span></span>
         
         </form>
        </div>  <script type="text/javascript">
          document.getElementById("cbtn").onclick = function() 
          {
            document.getElementById('rurl').select();
            document.execCommand('copy');
          }
           document.getElementById("edit_button").onclick = function() 
          {
            $('#rurl').prop('readonly',false);
            document.getElementById('edit').innerHTML='<button class="btn btn-success" name="submit" type="submit">Save</button>';
          
          }
        </script>

          </div>
        </div>
      </div>

          <div class="col-lg-6 col-md-6">
        
          
          <!-- begin card -->
          <div class="card text-center">
            <div class="card-header">
              <strong>Referal Link</strong>
            </div>
            <div class="card-block">
               <div class="form-group">
        
            <input type="text" class="form-control input-lg" id="rlink" value="{{url('/')}}/register/{{Auth::user()->username}}" readonly>
            <br>
            <span class="btn btn-success" id="copybtn">Copy</span>
        </div>
         <script type="text/javascript">
          document.getElementById("copybtn").onclick = function() 
          {
            document.getElementById('rlink').select();
            document.execCommand('copy');
          }
        </script>
      </div>

            
            
          </div>
        </div>

@if($user_type==1)
<div class="row">
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-red">
            <div class="stats-icon"><i class="fa fa-desktop"></i></div>
            <div class="stats-info">
              <h4>Active Lending Amount</h4>
              <p><strong>{{$gnl->cursym}} @if($actinv != null) {{$actinv->amount}} @else 0 @endif</strong></p>  
            </div>
            
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-orange">
            <div class="stats-icon"><i class="fa fa-link"></i></div>
            <div class="stats-info">
              <h4>Every Return Amount</h4>
              <p><strong>{{$gnl->cursym}} @if($actinv != null) {{$actinv->package->ret*($actinv->amount/100)}}  @else 0 @endif</strong></p> 
            </div>
            
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-blue">
            <div class="stats-icon"><i class="fa fa-users"></i></div>
            <div class="stats-info">
              <h4>Returned</h4>
              <p><strong>@if($actinv != null) {{$actinv->returned}}  @else 0 @endif Times</strong></p>  
            </div>
            
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-purple">
            <div class="stats-icon"><i class="fa fa-clock"></i></div>
            <div class="stats-info">
              <h4>Returned Amount</h4>
              <p><strong>{{$gnl->cursym}} @if($actinv != null) {{($actinv->package->ret*$actinv->amount/100)*$actinv->returned}}  @else 0 @endif</strong></p> 
            </div>
           
          </div>
        </div>
        <!-- end col-3 -->
      </div>

<div class="row">
        <!-- begin col-3 -->
        <div class="col-lg-6 col-md-6">
          <div class="widget widget-stats bg-grey-darker ">
            <div class="stats-icon"><i class="fa fa-currency"></i></div>
            <div class="stats-info">
             <center> <h4>Next Return Time</h4></center>
             <center> <p><strong>@if($actinv != null) {{$actinv->next}}  @else No Lending @endif</strong></p> </center> 
            </div>
            
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-6 col-md-6">
          <div class="widget widget-stats  bg-black-lighter ">
            <div class="stats-icon"><i class="fa fa-currency"></i></div>
            <div class="stats-info">
              <center><h4>Total Returning Amount</h4></center>
              <center><p><strong>{{$gnl->cursym}} @if($actinv != null){{$actinv->package->total*$actinv->amount/100}}  @else 0 @endif</strong></p></center> 
            </div>
            
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        
        <!-- end col-3 -->
        <!-- begin col-3 -->
       
        <!-- end col-3 -->
      </div>@else
<div class="row">
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-red">
            <div class="stats-icon"><i class="fa fa-desktop"></i></div>
            <div class="stats-info">
              <h4>Active Borrowing Amount </h4>
              <p><strong> @if($borrow != null) {{$borrow->amount_in_btc}} @else 0 @endif BTC</strong></p>  
            </div>
            
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-orange">
            <div class="stats-icon"><i class="fa fa-link"></i></div>
            <div class="stats-info">
              <h4>Active borrowing Term</h4>
              <p><strong>@if($borrow != null) {{$borrow->installment}}  @else 0 @endif Months</strong></p> 
            </div>
            
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-blue">
            <div class="stats-icon"><i class="fa fa-users"></i></div>
            <div class="stats-info">
              <h4>Current Month Payments</h4>
              <p><strong>@if($current != null) {{$current->amount}}  @else 0 @endif BTC</strong></p>  
            </div>
            
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-purple">
            <div class="stats-icon"><i class="fa fa-clock"></i></div>
            <div class="stats-info">
              <h4>Last Month Paid</h4>
              <p><strong> @if($last != null) {{$last->amount}}  @else 0 @endif BTC</strong></p> 
            </div>
           
          </div>
        </div>
        <!-- end col-3 -->
      </div>

<div class="row">
        <!-- begin col-3 -->
        <div class="col-lg-6 col-md-6">
          <div class="widget widget-stats bg-grey-darker ">
            <div class="stats-icon"><i class="fa fa-currency"></i></div>
            <div class="stats-info">
             <center> <h4>Next Borrow Due payment date</h4></center>
             <center> <p><strong>@if($next_due != null)  {{ Carbon\Carbon::parse($next_due->due_date)->format('d-m-Y') }}
              @else No Payments     @endif</strong></p> </center> 
            </div>
            
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-6 col-md-6">
          <div class="widget widget-stats  bg-black-lighter ">
            <div class="stats-icon"><i class="fa fa-currency"></i></div>
            <div class="stats-info">
              <center><h4>Total Payments made</h4></center>
              <center><p><strong> @if($total_paid != null){{$total_paid}}  @else 0 @endif Times</strong></p></center> 
            </div>
            
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        
        <!-- end col-3 -->
        <!-- begin col-3 -->
       
        <!-- end col-3 -->
      </div>
      @endif


@endsection
