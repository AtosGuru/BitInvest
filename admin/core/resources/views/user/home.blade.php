@extends('layouts.user')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/pages/css/style.min.css')}}">

<div class="row">
  <div class="col-md-12">
    <div class="widget widget-stats" style="margin-bottom: 10px; background:#2ac46c">
      <div class="stats-info">
        <div class="pull-left icon">
           <!--<h4><img src="{{ asset('assets/images/logo/logo.png') }}" class="pull-left" style="width: 80%; margin-right: 10px; filter:invert(1) opacity(1); margin-top: 10px;"></h4>-->
          <!-- <h3>BitInvest</h3> -->       
        </div>
        <div class="pull-left" style="margin-top: 27px; margin-left: 25px;">
          <p>Your Balance :<strong style="color: #face5c;"> {{number_format(floatval(Auth::user()->balance) , $gnl->decimal, '.', '')}}</strong> {{$gnl->cursym}}</p>
          <p class="f-s-20"><strong>1 {{$gnl->cursym}} = {{number_format(floatval($btcrate) , $gnl->decimal, '.', '')}} USD</strong></p>
        </div>
        <div class="pull-right" style="margin-top: 44px; margin-left: 25px;">
         <a href="{{route('invest.coin')}}" class="btn btn-warning pull-right btn-lg" type="button" style="margin-top: 12px;">
          <i class="fa fa-angle-double-right fa-lg"></i>
          {{$gnl->cursym}} LENDING
          <i class="fa fa-angle-double-right fa-lg"></i>
        </a>
      </div> 
    </div>
  </div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6">
        
          
          <!-- begin card -->
          <div class="card text-center">
            <div class="card-header">
              <strong>BitCoin Wallet ID</strong>
            </div>
            <div class="card-block">
             
               <div class="form-group">
          <div class="input-group">
            <input id="rurl" class="form-control input-lg" value="{{Auth::user()->wallet}}" readonly>
            <span class="btn btn-success input-group-addon" id="cbtn">Copy</span>
          </div>
        </div>  <script type="text/javascript">
          document.getElementById("cbtn").onclick = function() 
          {
            document.getElementById('rurl').select();
            document.execCommand('copy');
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
        <div class="input-group">
            <input type="text" class="form-control input-lg" id="rlink" value="{{url('/')}}/register/{{Auth::user()->username}}" readonly>
            <span class="input-group-addon btn btn-success" id="copybtn">Copy</span>
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
        </div>


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
      </div>


@endsection
