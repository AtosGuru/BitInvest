@extends('layouts.user')

@section('content')
<div class="row">
      <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
      Reference Log
    </div>
    <div class="panel-body table-responsive">
      <p>1. You can refer your friend using your own unique link.</p>
      <p>2. After their successful registration by clicking the link. Their details will be displayed in My References table.</p>
    </div>
  </div>
<div class="col-md-6">
  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
       <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
      <h4 class="panel-title">My References</h4>
    </div>
    <div class="panel-body table-responsive">
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">My References </h4>
        </div>
        <div class="modal-body">
          <p>Here you can see the list of persons referred by you successfully. </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
     <table class="table table-striped">
     	<tr>
            <th>Username</th>
     		<th>Full Name</th>
     		<th>Joining Date</th>
     	</tr>
     	@foreach($refers as $ref)
     	<tr>
            <td>{{$ref->username}}</td>
     		<td>{{$ref->name}}</td>
     		<td>{{$ref->created_at}}</td>
     	</tr>
     	@endforeach
     </table>
     <?php echo $refers->render(); ?>
   </div>
 </div>
</div> 
<div class="col-md-6">
    <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
        <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal1"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
      <h4 class="panel-title">Referal URL</h4>
    </div>
    <div class="panel-body">
    <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Referral URL</h4>
        </div>
        <div class="modal-body">
          <p>You can share this URL to people who you wish to refer. The successfully referred persons can be tracked from My References tab </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control input-lg" id="rlink" value="{{url('/')}}/register/{{Auth::user()->username}}" readonly>
            <span class="input-group-addon btn btn-success" id="copybtn">Copy</span>
        </div>
    </div>
    </div>
    </div>
    
</div> 
</div>

<!--Copy Data -->
<script type="text/javascript">
  document.getElementById("copybtn").onclick = function() 
  {
    document.getElementById('rlink').select();
    document.execCommand('copy');
  }
</script>

@endsection
