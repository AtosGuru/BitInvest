@extends('admin.layout.master')

@section('content')
<style>

 th {
    padding-top: 12px;
    padding-bottom: 12px;
   
    background-image: -webkit-linear-gradient(0deg,#1a2229 0%,#1a2229 100%);
    color: white;
}
.btn-my{
  width:100px;
}
</style>
 
 
  
<div class="row">
  <div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption font-dark">
          <i class="icon-settings font-dark"></i>
          <span class="caption-subject bold uppercase">User Borrowing Log</span> 
        </div> 
        <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" style="background-color: #008a8a; border:#008a8a; " data-target="#myModal">?</button></span>
      </div>
       <!--  <p>1. You can check all the transactions - Deposit/Withdraw from this table.</p>
        <p>2. You can also check sent and received percentage in a pie chart.</p> -->
      <div class="portlet-body">
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Lorem ipsum </h4>
        </div>
        <div class="modal-body">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; border:#008a8a; " data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   <div class="table-responsive">
  <table class="table">
        <tr>
          <th>User</th>
          <th>Borrow</th>
          <th>Repay</th>
          <th>Monthly Payments</th>
          <th>Terms</th>
          <th>Action</th>
        </tr>
        @foreach($data as $log)
        <tr>
         
        <td>
          <a href="{{route('user.single', $log->user_id)}}">{{$log->name}}</a>
        </td>
        <td>{{$log->amount_in_btc}} {{$gnl->cur}}</td>
        <td>{{$log->repay}} BITCOIN</td>
        <td>{{$log->monthly_payments}} BITCOIN</td>
        <td>{{$log->installment}} Months</td>
        <td>
                          <a href="{{ route('borrow.approve', $log->id)}}" class="btn btn-outline btn-circle btn-sm green">
                             <i class="fa fa-check"></i> Approve </a>
                             <a href="{{ route('borrow.delete', $log->id)}}" data-toggle="confirmation"  data-title="Are You Sure?" data-content="Cancel This Deposit Request?" class="btn btn-outline btn-circle btn-sm red" >
                             <i class="fa fa-times"></i> Cancel </a> 
                        </td>
        

      </tr>
      @endforeach
    </table>
  </div>

   <div class="table-responsive">
  <table class="table" width="100%">
      
       <tr> <td colspan=2>Name</td> 
        <td  colspan=5>
          <a href="{{route('user.single', $users->id)}}">{{$users->name}}</a>
        </td><td rowspan=5 align="right"> <img src="{{$users->avatar}}" width="250px"  height="250"></td></tr>
        <tr><td colspan=2>Email</td><td colspan=5>{{$users->email}}</td></tr>
       <tr><td  colspan=2>Mobile</td> <td colspan=5>{{$users->mobile}}</td></tr>
        <tr><td  colspan=2>Country</td><td colspan=5>{{$users->country}}</td></tr>
        <tr><td colspan=2>City</td><td colspan=5>{{$users->city}}</td></tr>
         <tr><td colspan=2>Address</td><td colspan=5>{{$users->address}}</td></tr>
        <tr><td colspan=2>Postal Code</td><td colspan=5>{{$users->postal_code}}</td></tr>
       
        

      </tr>
    </table>
  </div>

   <div id="menu1" >
      
      <p>
         <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption font-dark">
          <i class="icon-settings font-dark"></i>
          <span class="caption-subject bold uppercase">User KYC details</span> 
        </div><br><br><br>
      <div class="register-content" >
        
                    
                        <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label"><h4>ID Proof ({{$kyc->id_proof_type}})</h4> </label>
                              <span>
                                <br>
                                <img src="{{$kyc->id_proof}}" width="100%" height="60%">
                              </span>
                              <br><br>
                                                                     </div>
                                    <div class="col-md-5 m-b-15">
                                       <label class="control-label"><h4>Address Proof ({{$kyc->address_proof_type}})</h4><br> </label>
                                            <span>
                                                <br>
                                              <img src="{{$kyc->address_proof}}" width="100%" height="60%">
                                              
                                            </span>
                                            <br><br>
                                 
                            </div>
                        </div>
                         <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label"><h4>Face proof ({{$kyc->face_proof_type}})</h4><br>
                            
                        </label>                <br>
                                              <img src="{{$kyc->face_proof}}" width="100%" height="60%">
                                           
                                            </span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </p>
                                </div>
                              </div>
                            </div>
<div class="row">
<!--  -->
    <div class="col-md-12">
<div class="row">



            <!-- <div class="portlet-title">
        <div class="caption font-dark">
          <h4><i class="icon-settings font-dark"></i>
          <span class="caption-subject bold uppercase"> Sent and Received Statistics</span></h4>
        </div>

      </div> -->


        
            
    
    
</div>

</div>
</div>
 
@endsection