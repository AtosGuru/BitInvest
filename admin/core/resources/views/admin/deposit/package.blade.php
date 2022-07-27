@extends('admin.layout.master')
@section('content')
<style>
.tooltip {
  outline: none;
  width: 75px;
  min-width: 75px;
  min-width: 195px;7
}

.tooltip .tool-content {
  margin:0;
  padding:0;
  opacity: 0;
  visibility: hidden;
  width:100%;
  height:100%;
}
.fa-info-circle{
  color:#008a8a;
}
</style>
<div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-list font-dark"></i>
                        <span class="caption-subject bold uppercase">Lending Package</span>
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
          <h4 class="modal-title">Lending Package</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>Here you can customize the Lending package on which the website works</b> </p>
          <p>1) Minimum BTC - Minimum BTC any user can Lend</p>
          <p>2) Maximum BTC - Maximum BTC any user can Lend</p>
          <p>3) Every Time Return - This is the retuens %</p>
          <p>4) Return Period - Choose the return period timings</p>
          <p>5) Refer Commision on Deposit - Commison which user gets for the refferal deposit.</p>
          <p>6) Refer Commision on Every Return - COmmision which user gets for every return</p>
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
                    <form role="form" method="POST" action="{{route('package.update')}}">
                 {{ csrf_field() }}
                    <div class="form-group col-md-4">
                        <label><h4>Name</h4></label><a style="float:right" href="#" data-toggle="tooltip" title="This Name will be shown to the user"><i class="fa fa-info-circle"></i></a>
                        <input type="text" name="name" value="{{$pack->name}}" class="form-control" />
                    </div> 
                    <div class="form-group col-md-4">
                        <label for="min" ><h4>Minimum</h4></label><a style="float:right" href="#" data-toggle="tooltip" title="
Set the minimum amount which a user can Lend."><i class="fa fa-info-circle"></i></a>
                        <div class="input-group">
                        <input type="text" name="min" value="{{$pack->min}}" class="form-control">
                          <span class="input-group-addon">{{$gnl->cursym}}</span>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="max"><h4>Maximum</h4></label><a style="float:right" href="#" data-toggle="tooltip" title="Set he maximum amount which a user can Lend."><i class="fa fa-info-circle"></i></a>
                        <div class="input-group">
                        <input type="text" name="max" value="{{$pack->max}}" class="form-control">
                          
                          <span class="input-group-addon">{{$gnl->cursym}}</span>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="return"><h4>Every Time Return</h4></label><a style="float:right" href="#" data-toggle="tooltip" title="Set the % of interest the user will receive each time when he Lends."><i class="fa fa-info-circle"></i></a>
                        <div class="input-group">
                           <input type="text" name="return" value="{{$pack->ret}}" class="form-control">
                          <span class="input-group-addon">%</span>
                        </div>
                       
                    </div>
                    <div class="form-group col-md-4">
                        <label for="times"><h4>Times</h4></label><a style="float:right" href="#" data-toggle="tooltip" title="Set the number of Return Times here

"><i class="fa fa-info-circle"></i></a>
                        <input type="text" name="times" value="{{$pack->times}}" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="period"><h4>Return Period</h4></label><a style="float:right" href="#" data-toggle="tooltip" title="Set the return period here. You have an option to select – Hourly, Daily, Weekly, Monthly, Quarterly, Yearly"><i class="fa fa-info-circle"></i></a>
                        <select name="period" class="form-control">
                          <option value="1" {{$pack->period == '1' ? 'selected' : ''}}>Hourly</option>
                          <option value="24" {{$pack->period == '24' ? 'selected' : ''}}>Daily (24 Hours)</option>
                          <option value="168" {{$pack->period == '168' ? 'selected' : ''}}>Weekly (168 Hours)</option>
                          <option value="720" {{$pack->period == '720' ? 'selected' : ''}}>Monthly (720 Hours)</option>
                          <option value="2880" {{$pack->period == '2880' ? 'selected' : ''}}>Quaterly (2880 Hours)</option>
                          <option value="8640" {{$pack->period == '8640' ? 'selected' : ''}}>Yearly (8640 Hours)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="total"><h4>Total Return</h4></label><a style="float:right" href="#" data-toggle="tooltip" title="Total Return Percentage a user will get when he lends"><i class="fa fa-info-circle"></i></a>
                        <div class="input-group">
                        <input type="text" name="total" value="{{$pack->total}}" class="form-control" readonly>
                          <span class="input-group-addon">%</span>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="total"><h4>Refer Commision on Deposit</h4></label><a style="float:right" href="#" data-toggle="tooltip" title="Set referral commission for a user on successful deposit of the referred user."><i class="fa fa-info-circle"></i></a>
                        <div class="input-group">
                        <input type="text" name="fixcom" value="{{$pack->fixcom}}" class="form-control">
                          <span class="input-group-addon">%</span>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="total"><h4>Refer Commision ov Every Return</h4></label><a style="float:right" href="#" data-toggle="tooltip" title="Set referral commission for a user on successful return of the referred user."><i class="fa fa-info-circle"></i></a>
                        <div class="input-group">
                        <input type="text" name="pcncom" value="{{$pack->pcncom}}" class="form-control">
                          <span class="input-group-addon">%</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-success btn-block" >Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

@endsection