@extends('admin.layout.master')

@section('content')
<style>
.button{

         background-image: linear-gradient(0deg, #2ac46c 0%, #2ac46c 100%);
         color: white;
         font-weight: bold;
}
</style>
<div class="row">
  <div class="col-md-12">
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="col-md-6">
         <div class="caption">
          <i class="icon-list font-blue"></i>
          <span class="caption-subject font-green bold uppercase">User information</span> 
          <h3>{{ $user->name }}</h3> 
          <h5>Username: <b>{{ $user->username }}</b></h5>
        </div>
      </div>   
      <div class="col-md-3 pull-right">
       <div class="dashboard-stat purple">
        <div class="visual">
          <i class="fa fa-money"></i>
        </div>
        <div class="details">
          <div class="number">
            <span data-counter="counterup" data-value="{{number_format(floatval($user->balance), $gnl->decimal, '.', '')}}">{{number_format(floatval($user->balance), $gnl->decimal, '.', '')}}</span>  </div>
            <div class="desc">{{$gnl->cursym}} Balance</div>
          </div>
        </div>
      </div>
    </div>
    <div class="portlet-body">
      <div class="row">
          <div class="portlet box blue-ebonyclay">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-cogs"></i>Operations
        </div>
        </div>
        <div class="portlet-body">
          <div class="row">
                      <div class="col-md-6">
              <a href="{{route('email',$user->id)}}" class="btn btn-lg btn-block button" style="margin-bottom:10px;">Send Email</a>
          </div>
          <div class="col-md-6"> 
            <button type="button" class="btn btn-warning btn-lg btn-block button" data-toggle="modal" data-target="#mbalance">Manage Balance</button>        
          </div>
          </div>            

        </div>
      </div>
      </div>

      <div class="row">
        <div class="portlet box green">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-user"></i>Update Profile</div>
        </div>
        <div class="portlet-body">
            <form id="form" method="POST" action="{{route('user.status', $user->id)}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{method_field('put')}}
          <div class="form-group col-md-4">
                <label>Users Name</label>
                <input type="text" name="name" class="form-control input-sz" value="{{$user->name}}">
            </div>
            <div class="form-group col-md-4">
                <label>Phone</label>
                <input type="text" name="mobile" class="form-control input-sz" value="{{$user->mobile}}">
            </div>
         
          <div class="form-group col-md-4 ">
            <label>User Status</label>
            <input class="form-control" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" data-on="Active" data-off="Deactive" type="checkbox" value="1" name="status" {{ $user->status == "1" ? 'checked' : '' }}> 
          </div> 
          <div class="form-group col-md-4">
            <label>Google Authentication</label>
            <input class="form-control" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" data-on="Active" data-off="Deactive" type="checkbox" value="1" name="tauth" {{ $user->tauth == "1" ? 'checked' : '' }}> 
          </div> 
          <div class="form-group col-md-4">
            <label>Email Verification</label>
            <input class="form-control" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" data-on="Yes" data-off="No" type="checkbox" value="1" name="emailv" {{ $user->emailv == "1" ? 'checked' : '' }}> 
          </div>   
           <div class="form-group col-md-4">
            <label>SMS Verification</label>
            <input class="form-control" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" data-on="Yes" data-off="No" type="checkbox" value="1" name="smsv" {{ $user->smsv == "1" ? 'checked' : '' }}> 
          </div> 
          <div class="form-group col-md-12">
                <label>Bitcoin Wallet Address</label>
                <input type="text" name="wallet" class="form-control input-sz" value="{{ $user->wallet }}">
            </div>

             <div class="form-group col-md-4">
                <label>Country</label>
                <input type="text" name="country" class="form-control input-sz" value="{{$user->country}}">
            </div>
            <div class="form-group col-md-4">
                <label>City</label>
                <input type="text" name="postal_code" class="form-control input-sz" value="{{$user->postal_code}}">
            </div>
            <div class="form-group col-md-4">
                <label>Postal Code</label>
                <input type="text" name="city" class="form-control input-sz" value="{{$user->city}}">
            </div>
            <div class="form-group col-md-12">
                <label>Address</label>
                <input type="text" name="address" class="form-control input-sz" value="{{ $user->address }}">
            </div>
          
           <hr/>
            <button type="submit" class="btn btn-lg btn-primary btn-block">Update</button>
     
        </form>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="portlet box green">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-user"></i>Kyc Details</div>
        </div>
        <div class="portlet-body">
          <?php if(count($kyc)==0){
            ?>
             <div class="portlet-body">
<center><h4>No kyc Details </h4> </center>
                            
                               
                        
         <?php  }else{?>
             <div class="row row-space-10">
                            <div class="col-md-6 m-b-15">
                              <label class="control-label"><h4>ID Proof ({{$kyc->id_proof_type}})</h4> </label>
                              <span>
                                <br>
                                <img src="{{$kyc->id_proof}}" width="100%" height="60%">
                              </span>
                              <br><br>
                                                                     </div>
                                    <div class="col-md-6 m-b-15">
                                       <label class="control-label"><h4>Address Proof ({{$kyc->address_proof_type}})</h4><br> </label>
                                            <span>
                                                <br>
                                              <img src="{{$kyc->address_proof}}" width="100%" height="60%">
                                              
                                            </span>
                                            <br><br>
                                 
                            </div>
                        </div>

                           <div class="row row-space-10">
                            <div class="col-md-6 m-b-15">
                              <label class="control-label"><h4>ID Proof ({{$kyc->id_proof_type}})</h4> </label>
                              <span>
                                <br>
                                <img src="{{$kyc->id_proof}}" width="100%" height="60%">
                              </span>
                              <br><br>
                                                                     </div>
                                 
                        </div>

<?php } ?>

        </div>
      </div>
    </div>

    </div>
  </div>
</div>
</div>

<!--Balance Modal -->
<div id="mbalance" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Manage Balance</h4>
      </div>
      <div class="modal-body">
         <form role="form" method="POST" action="{{route('user.balance', $user->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{method_field('put')}}
            <div class="form-group">
              <label>Operation</label>
              <input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" data-on="Add Balance" data-off="Substract Balance" type="checkbox" value="1" name="status" > 
            </div>
            <div class="form-group">
              <label>Amount</label>
              <div class="input-group">
                <input type="text" name="amount" class="form-control">
                <span class="input-group-addon">{{$gnl->cur}}</span>
              </div>
            </div>
            <div class="form-group">
              <label>Message</label>
              <input type="text"  name="message" class="form-control" rows="5">
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
          </form>
      </div>
   
    </div>

  </div>
</div>

@endsection

