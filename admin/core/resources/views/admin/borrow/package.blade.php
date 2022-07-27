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
    <div class=" col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Borrow Package</span>
                </div>

                <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" style="background-color: #008a8a; border:#008a8a; " data-target="#myModal">?</button></span>
      </div>
   <p> 1. You can set borrowing terms and respective package Interest from here.</p>
<p>2. This package will be shown to the user as options to select while borrowing.</p>
<p>3. Based on the terms selected by the user, the interest will be calculated on the total borrow amount which the user gives.</p>
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
<br><br><br>
 <form name="package" method="post" action="{{route('update.package')}}">

          {{ csrf_field() }}

          

          @foreach($package as $pack)
         <div class="row row-space-10" >
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">Month  <span class="text-danger">*</span></label>

                               
                                <input type="number" value="{{$pack->month}}" name="month[]" id="" value="" class="form-control" placeholder="Month" required="">
                            </div>
                                <div class="col-md-5 m-b-15">
                                  <label class="control-label">Interest (%) <span class="text-danger">*</span></label>
                                  
                             
                                <input type="text" id="repay"  value="{{$pack->percentage}}" name="percentage[]" value="0" class="form-control"  placeholder="Interests"  required="">
                          
                            </div>

                        </div>
                        @endforeach

                        <input type="submit" style="background-color: #008a8a; color: white;"  class="btn green" value="Save">
                    </form>
         </div>

     </div>
 </div>
</div>
 



 @endsection

<!-- 
in user dashboard screen:

profile -> user can edit his profile here. 
kyc -> the user need to add him KYC (must) for borrow.
borrow-> here will display profile and KYC details for validation and updating Process. also included Apply Borrow here.

	ie : 
			 Interest calculation 3 months 5% interest when user borrows 2 BTC- 5/100 * 2 BTC = 0.1 BTC

	 		 total amount to repay - 2.1 BTC

	 		 User will have to pay - 2.1/3 = 0.7 per month


My Borrowings -> user can track him borrowing requests.

My Transations -> user can track him send/ Received transactions.


in admin panel:

users-> who one has registered as Borrower, they details has been listed here.

transaction -> send and receive transactions of borrows.

packakge -> the interest calculation month and interest % has been update here.

_____________________

future:

requests:(under borrow tab it will be listed)

the borrowings request will be listed here the admin can approve or decline. -->
