@extends('layouts.user')

@section('content')
<div class="row">
   <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
      Lending
    </div>
    <div class="panel-body table-responsive">
      <p>1. You can use the deposited amount for lending from here.</p>
      <p>2. You can deposit BTC from <a href="{{route('deposit')}}">here</a>.</p>
      <p>3. You can have only one active lending at a time.</p>
      <p>4. Go through our lending package features first before lending.</p>
    </div>
  </div>
  <div class="col-md-8">
    <div class="panel panel-inverse">
      <div class="panel-heading">
        <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a; ">?</button></span>
        <h3 class="panel-title">Lending Package</h3>
      </div>

      <div class="panel-body text-center">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Lending Package</h4>
        </div>
        <div class="modal-body">
          <p>Please read the package carefully.
Based on the package, You will get your return amount % . This again depends on the Return Period.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
       <ul class="list-group">
        <li class="list-group-item list-group-item-success">Limit: <b> {{$pack->min}} ~  {{$pack->max}}</b> {{$gnl->cursym}}</li>
        <li class="list-group-item list-group-item-info">Return in <b>{{$pack->times}}</b> Times</li>
        <li class="list-group-item list-group-item-warning"><b>{{$pack->ret}}</b> % of investment Return Every Time </li>
        <li class="list-group-item list-group-item-default"><b>{{$pack->total}} %</b> Return of Total  Investment </li>
        <li class="list-group-item list-group-item-success"> Return Period:<b> 
          @if($pack->period == '1') Hourly
          @elseif($pack->period == '24') Daily 
          @elseif($pack->period == '168') Weekly 
          @elseif($pack->period == '720') Monthly 
          @elseif($pack->period == '2880') Quaterly 
          @elseif($pack->period == '8640') Yearly 
          @endif
          ({{$pack->period}} hours)</b>
        </li>
      </ul>
      <form action="{{route('invest.preview')}}" method="POST">
        {{csrf_field()}}

        <div class="form-group">
          <div class="input-group">
            <input placeholder="Enter Lending Amount" type="text" name="amount" class="form-control">
            <span class="input-group-addon">{{$gnl->cursym }}</span>
          </div>
        </div>
        <br/>
        <div class="form-group">
          <button class="btn btn-success btn-block">Lend</button>
        </div>

      </form>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="panel panel-inverse">
    <div class="panel-body">
      <h3>Your Balance: <strong>{{Auth::user()->balance}} {{$gnl->cursym}}</strong></h3>
    </div>
  </div>
</div>
</div>
@endsection
