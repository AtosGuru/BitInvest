@extends('layouts.user')
@section('content')       

   <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
<div class="right-content">
         <form method="post" class="margin-bottom-0"action="{{ route('borrow.kyc_update1') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <?php if(count($kyc)!=0){?>
                        <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">ID Proof <span class="text-danger">*</span></label>

                              <select name="id_proof" required="" class="form-control">
                                                 @if($kyc->id_proof_type =='PASSPORT')
                                                    <option selected="" value="PASSPORT">Passport</option>
                                                 @else
                                                    <option  value="PASSPORT">Passport</option>
                                                 @endif
                                                 @if($kyc->id_proof_type=='Rental Agreeent')
                                                <option selected value="Rental Agreeent">Rental Agreeent</option>
                                                @else
                                                <option value="Rental Agreeent">Rental Agreeent</option
                                                >
                                                @endif
                                                @if($kyc->id_proof_type=='Social Security Card')
                                                <option selected value="Social Security Card">Social Security Card</option>
                                                @else
                                                <option value="Social Security Card">Social Security Card</option>
                                                @endif
                                                @if($kyc->id_proof_type =='Drivers License')
                                                <option selected value="Drivers License">Drivers License</option
                                                    >
                                                    @else
                                                    <option value="Drivers License">Drivers License</option>
                                                    @endif
                                                @if($kyc->id_proof_type =='Others')
                                                <option selected value="Others">Others</option>
                                                @else
                                                <option value="Others">Others</option>
                                                @endif
                                            </select>

                              <span>
                                <br>
                                <img src="{{$kyc->id_proof}}" width="100%" height="60%">

                                 <input type="hidden" name="id_pf"  class="form-control" value="{{$kyc->id_proof}}">
                                

                              </span>
                              <br><br>
                                          <input type="file" name="id_proof_url"  class="form-control" >                            </div>
                                    <div class="col-md-5 m-b-15">
                                       <label class="control-label">Address Proof <span class="text-danger">*</span></label>

                                       <select name="address_proof" required="" class="form-control">
                                                 @if($kyc->address_proof_type =='PASSPORT')
                                                    <option selected="" value="PASSPORT">Passport</option>
                                                 @else
                                                    <option  value="PASSPORT">Passport</option>
                                                 @endif
                                                 @if($kyc->address_proof_type=='Rental Agreeent')
                                                <option selected value="Rental Agreeent">Rental Agreeent</option>
                                                @else
                                                <option value="Rental Agreeent">Rental Agreeent</option
                                                >
                                                @endif
                                                @if($kyc->address_proof_type=='Social Security Card')
                                                <option selected value="Social Security Card">Social Security Card</option>
                                                @else
                                                <option value="Social Security Card">Social Security Card</option>
                                                @endif
                                                @if($kyc->address_proof_type =='Drivers License')
                                                <option selected value="Drivers License">Drivers License</option
                                                    >
                                                    @else
                                                    <option value="Drivers License">Drivers License</option>
                                                    @endif
                                                @if($kyc->address_proof_type =='Others')
                                                <option selected value="Others">Others</option>
                                                @else
                                                <option value="Others">Others</option>
                                                @endif
                                           
                                            </select>
                                            <span>
                                                <br>
                                              <img src="{{$kyc->address_proof}}" width="100%" height="60%">
                                              <input type="hidden" name="address_pf"  class="form-control" value="{{$kyc->address_proof}}">
                                            </span>
                                            <br><br>
                                 <input type="file" name="address_proof_url"  class="form-control">
                            </div>
                        </div>
                         <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">Face proof<span class="text-danger">*</span><br>
                             <sup> Note : Please make sure that you upload a High Resolution image. Your face should also be visible clear and the details in the ID proof should also be very easily readble.</sup>
                        </label><select name="face_proof" required="" class="form-control">

                                                @if($kyc->face_proof_type =='PASSPORT')
                                                    <option selected="" value="PASSPORT">Passport</option>
                                                 @else
                                                    <option  value="PASSPORT">Passport</option>
                                                 @endif
                                                 @if($kyc->face_proof_type=='Rental Agreeent')
                                                <option selected value="Rental Agreeent">Rental Agreeent</option>
                                                @else
                                                <option value="Rental Agreeent">Rental Agreeent</option
                                                >
                                                @endif
                                                @if($kyc->face_proof_type=='Social Security Card')
                                                <option selected value="Social Security Card">Social Security Card</option>
                                                @else
                                                <option value="Social Security Card">Social Security Card</option>
                                                @endif
                                                @if($kyc->face_proof_type =='Drivers License')
                                                <option selected value="Drivers License">Drivers License</option
                                                    >
                                                    @else
                                                    <option value="Drivers License">Drivers License</option>
                                                    @endif
                                                @if($kyc->face_proof_type =='Others')
                                                <option selected value="Others">Others</option>
                                                @else
                                                <option value="Others">Others</option>
                                                @endif
                                            </select>
                                            <span>
                                                <br>
                                              <img src="{{$kyc->face_proof}}" width="100%" height="60%">
                                              <input type="hidden" name="face_pf"  class="form-control" value="{{$kyc->face_proof}}">
                                            </span>
                                            <br><br>
                                <input type="file" name="face_proof_url"  class="form-control" >
                            </div>
                               
                        </div>
                        
                    </div>
                  <?php }else{ ?>

                       <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">ID Proof <span class="text-danger">*</span></label>

                              <select name="id_proof" required="" class="form-control">
                                                
                                                    <option  value="PASSPORT">Passport</option>
                                            
                                                <option value="Rental Agreeent">Rental Agreeent</option
                                                >
                                                
                                                <option value="Social Security Card">Social Security Card</option>
                                               
                                                    <option value="Drivers License">Drivers License</option>
                                                 
                                                <option value="Others">Others</option>
                                               
                                            </select>

                              <span>
                                <br>
                                

                              </span>
                              <br><br>
                                          <input type="file" name="id_proof_url"  class="form-control" >                            </div>
                                    <div class="col-md-5 m-b-15">
                                       <label class="control-label">Address Proof <span class="text-danger">*</span></label>

                                       <select name="address_proof" required="" class="form-control">
                                               
                                                    <option  value="PASSPORT">Passport</option>
                                                 
                                                <option value="Rental Agreeent">Rental Agreeent</option
                                                >
                                               
                                                <option value="Social Security Card">Social Security Card</option>
                                               
                                                    <option value="Drivers License">Drivers License</option>
                                                   
                                                <option value="Others">Others</option>
                                               
                                           
                                            </select>
                                            <span>
                                                <br>
                                            
                                            </span>
                                            <br><br>
                                 <input type="file" name="address_proof_url"  class="form-control">
                            </div>
                        </div>
                         <div class="row row-space-10">
                            <div class="col-md-5 m-b-15">
                              <label class="control-label">Face proof<span class="text-danger">*</span><br>
                             <sup> Note : Please make sure that you upload a High Resolution image. Your face should also be visible clear and the details in the ID proof should also be very easily readble.</sup>
                        </label><select name="face_proof" required="" class="form-control">

                                   
                                                    <option  value="PASSPORT">Passport</option>
                                                 
                                              <option value="Rental Agreeent">Rental Agreeent</option>
                                                <option value="Social Security Card">Social Security Card</option>
                                                    <option value="Drivers License">Drivers License</option>
                                                  
                                                <option value="Others">Others</option>
                                               
                                            </select>
                                            <span>
                                                <br>
                                            </span>
                                            <br><br>
                                <input type="file" name="face_proof_url"  class="form-control" >
                            </div>
                               
                        </div>
                        
                    </div>

                  <?php } ?>

                    <input type="submit" style="background-color: #008a8a; color: white;"  class="btn green" value="Save Info">
                </form>
        
        </div>
         
</div>
</div>

 @endsection