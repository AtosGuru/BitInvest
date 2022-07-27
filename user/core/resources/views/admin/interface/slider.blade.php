@extends('admin.layout.master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption">
          <i class="icon-list font-blue"></i>
          <span class="caption-subject font-green bold uppercase">Slider Settings</span>
        </div>
        <div class="actions">
          <a class="btn btn-circle btn-lg btn-success" data-toggle="modal" data-target="#addslide">
           <i class="icon-plus"></i> New Slide
         </a>
       </div>
     </div>
     <div class="portlet-body">
       <div class="row">
        @foreach($sliders as $slider)
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">Slide {{$slider->id}}</div>
            <div class="panel-body">
              <img src="{{ asset('assets/images/slider') }}/{{$slider->image}}" class="img-responsive" width="100%">
              <h5>
                {{$slider->small}}
              </h5>
              <h3>
                {{$slider->large}}
              </h3>
            </div>
            <div class="panel-footer">
              <a class="btn btn-circle btn-warning" data-toggle="modal" data-target="#editslide{{$slider->id}}">
                <i class="fa fa-edit"></i> Edit
              </a>

              <a class="btn btn-circle btn-danger"  href="{{ route('slider.destroy', $slider)}}" data-toggle="confirmation"  data-title="Are You Sure?" data-content="Delete This Slide?">
                <i class="fa fa-trash"></i> Delete
              </a>
            </div>
          </div>
        </div>

        <!-- Edit Slide -->
        <div id="editslide{{$slider->id}}" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Slide {{$slider->id}}</h4>
              </div>
              <div class="modal-body">
                <form role="form" method="POST" action="{{route('slider.update',$slider->id)}}" enctype="multipart/form-data">
                 {{ csrf_field() }}
                 {{method_field('put')}}
                 <div class="form-group">
                   <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      <img src="{{ asset('assets/images/slider') }}/{{$slider->image}}" alt="" /> </div>
                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                      <div>
                        <span class="btn btn-success btn-file">
                          <span class="fileinput-new"> Change Image </span>
                          <span class="fileinput-exists"> Change </span>
                          <input type="file" name="image"> </span>
                          <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="small">Small Text</label>
                      <input type="text" class="form-control" id="small" name="small" value="{{$slider->small}}" >
                    </div>
                    <div class="form-group">
                      <label for="large">Large Text</label>
                      <input type="text" class="form-control" id="large" name="large" value="{{$slider->large}}">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-lg btn-block btn-success" >Update</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Add Slide -->
<div id="addslide" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Slide</h4>
      </div>
      <div class="modal-body">
        <form role="form" method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
         {{ csrf_field() }}
         <div class="form-group">
           <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail">
              <img src="{{ asset('assets/images/slider/1920x850.png') }}" alt="" /> </div>
              <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
              <div>
                <span class="btn btn-success btn-file">
                  <span class="fileinput-new"> Change Image </span>
                  <span class="fileinput-exists"> Change </span>
                  <input type="file" name="image"> </span>
                  <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="small">Small Text</label>
              <input type="text" class="form-control" id="small" name="small" >
            </div>
            <div class="form-group">
              <label for="large">Large Text</label>
              <input type="text" class="form-control" id="large" name="large" >
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-lg btn-success btn-block" >Save</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  @endsection
