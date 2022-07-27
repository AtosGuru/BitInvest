@extends('admin.layout.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-list font-blue"></i>
                    <span class="caption-subject font-green bold uppercase">Logo and Icon Settings</span>
                </div>
                <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px;background-color: #008a8a; border:#008a8a; ">?</button></span>
            </div>
            <p>1. You can change the logo and favicon from this page.</p>
            <p>2. You can configure basic settings of site from <a href="{{route('general')}}">here</a>.</p>
            <div class="portlet-body">
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Logo and Icon</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>Here you can change logo of the website and favicon of the system</b> </p>
          
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
      <div class="row">
        <form role="form" method="POST" action="{{route('logo.update')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn btn-success btn-file">
                                    <span class="fileinput-new"> Change Logo </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="logo"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6">
                        <div class="form-group">
                         <div class="fileinput fileinput-new" data-provides="fileinput">
                             <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                 <img src="{{ asset('assets/images/logo/icon.png') }}" alt="" /> </div>
                             <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                             <div>
                                 <span class="btn btn-success btn-file">
                                     <span class="fileinput-new"> Change Icon </span>
                                     <span class="fileinput-exists"> Change </span>
                                     <input type="file" name="icon"> </span>
                                 <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                             </div>
                         </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions right">
                    <button type="submit" class="btn green btn-lg btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection