@extends('admin.layout.master')

@section('content')
<div class="row">
<div class="col-md-12">
<!-- BEGIN SAMPLE FORM PORTLET-->
<div class="portlet light bordered">
<div class="portlet-title">
<div class="caption font-dark">
<i class="icon-settings font-dark"></i>
<span class="caption-subject bold uppercase">Payment Gateway</span>
</div>
<span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px;background-color: #008a8a; border:#008a8a; ">?</button></span>
</div>
<div class="portlet-body">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">PAYMENT GATEWAY</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>You will have to configure the payment gateway</b> </p>
          <p>1. Configure the name of the Gateway - Default gateway configured is Coins Payments</p>
          <p>2. Configure the Merchent ID</p>
          <p>3. Configure the Secret key</p>
          <p>4. You can set the status of the payment gateway</p>
          </div>
          <div class="col-md-12 col-md-4"></div>
          </div>
        </div>
        <div class="row">
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div>
      
    </div>
  </div>
  <p>1. Configure coin payments gateway here.</p>
  <p>2. You can create one account here - <a href="http://coinpayments.net/">http://coinpayments.net/</a></p>
@foreach($gateways as $gateway)
<form role="form" method="POST" action="{{url('admin/gateway')}}/{{$gateway->id}}" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{method_field('put')}}
		<div class="row">
						<div class="form-group col-md-4 col-md-offset-4">
			           <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="{{ asset('assets/images/gateway') }}/{{$gateway->gateimg}}" alt="" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn btn-success btn-file">
                                    <span class="fileinput-new"> Change Logo </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="gateimg"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
				</div>
		</div>
				<div class="row">
			<div class="form-group col-md-6">
					<label for="name"><h4>Name of Gateway</h4></label>
					<input type="text" value="{{$gateway->name}}" class="form-control" id="name" name="name" >
				</div>
			<div class="form-group col-md-6">
					<label for="status"><h4>Status</h4></label>
				<input class="form-control" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" data-on="Active" data-off="Deactive" type="checkbox" value="1" name="status" {{ $gateway->status == "1" ? 'checked' : '' }}> 
			</div>
		</div>
		<div class="row">
			
				@if($gateway->id==1)
				<div class="form-group col-md-6">
					<label for="val1">PAYPAL BUSINESS EMAIL</label>
					<input type="text" value="{{$gateway->val1}}" class="form-control" id="val1" name="val1" >
				</div>
				@elseif($gateway->id==2)
				<div class="form-group col-md-6">
					<label for="val1">PM USD ACCOUNT</label>
					<input type="text" value="{{$gateway->val1}}" class="form-control" id="val1" name="val1" >
				</div>
				<div class="form-group col-md-6">
					<label for="val2">ALTERNATE PASSPHRASE</label>
					<input type="text" value="{{$gateway->val2}}" class="form-control" id="val2" name="val2" >
				</div>
				@elseif($gateway->id==3)
				<div class="form-group col-md-6">
					<label for="val1">API KEY</label>
					<input type="text" value="{{$gateway->val1}}" class="form-control" id="val1" name="val1" >
				</div>
				<div class="form-group col-md-6">
					<label for="val2">XPUB CODE</label>
					<input type="text" value="{{$gateway->val2}}" class="form-control" id="val2" name="val2" >
				</div>
				@elseif($gateway->id==4)
				<div class="form-group col-md-6">
					<label for="val1">SECRET KEY</label>
					<input type="text" value="{{$gateway->val1}}" class="form-control" id="val1" name="val1" >
				</div>
				<div class="form-group col-md-6">
					<label for="val2">PUBLISHABLE KEY</label>
					<input type="text" value="{{$gateway->val2}}" class="form-control" id="val2" name="val2" >
				</div>
				@elseif($gateway->id==5)
				<div class="form-group col-md-6">
					<label for="val1"><h4>Merchant ID</h4></label>
					<input type="text" value="{{$gateway->val1}}" class="form-control" id="val1" name="val1" >
				</div>
				<div class="form-group col-md-6">
					<label for="val2"><h4>Secret KEY</h4></label>
					<input type="text" value="{{$gateway->val2}}" class="form-control" id="val2" name="val2" >
				</div>
				@else
				<div class="form-group col-md-6">
					<label for="val1">Payment Details</label>
					<input type="text" value="{{$gateway->val1}}" class="form-control" id="val1" name="val1" >
				</div>								
				@endif
		</div>

		<div class="row">
			<div class="form-group col-md-12">
				<button type="submit" class="btn btn-lg btn-success btn-block">Update</button>
			</div>
		</div>
	

		</form>
@endforeach
</div>
</div>
</div>		
</div>

@endsection