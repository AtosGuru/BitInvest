@extends('admin.layout.master')

@section('content')
<style type="text/css">
  th {
    padding-top: 12px;
    padding-bottom: 12px;
   
    background-image: -webkit-linear-gradient(0deg, #1a2229 0%, #1a2229 100%);
    color: white;
}
.table_header{
	color:white;
}


.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 2;
    color: #fff;
    background: #1a2229;
    border-color: #1a2229;
    cursor: default;
}
.customColor{
   color: #FFBF29;
}
</style>



<div class="row">
    <div class=" col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Borrow User List </span>
                </div>
                <div class="actions">
                    <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px;background-color: #008a8a; border:#008a8a; ">?</button></span>
                </div>

            </div>
            <p>1. Manage you Borrowing users from here.</p>
            <p>2. You have the option to block/Unblock the users login.</p>
            <p>3. Delete the users account.</p>
            <p>4. Update a single user's profile</p>
            <div class="portlet-body">

              <div class="table-responsive">
  <table class="table">
                <thead>
                    <tr >
                        <th style="color: white">
                         Name 
                        </th>
                        <th style="color: white">
                            Email
                        </th>
                        <th style="color: white">
                            Username
                        </th>
                        <th style="color: white">
                             Phone
                        </th>
                        <th style="color: white">
                          Balance
                        </th>                         
                        <th style="color: white">
                            Actions
                        </th>
                     </tr>
                </thead>
                <tbody>
               @foreach($users as $user)
                     <tr>
                      <td>
                         <a href="{{route('borrow.single_user',$user->id)}}">  {{$user->name}}</a>  
                        </td>
                        <td>
                            {{$user->email}}      
                        </td> 
                        <td>
                            {{$user->username}}      
                        </td>
                        <td>
                            {{$user->mobile}}
                        </td>
                        <td>
                          {{number_format(floatval($user->balance), $gnl->decimal, '.', '')}} {{$gnl->cursym}}
                        </td>
                        <td>
                        	
                        	<a href="{{route('user.single', $user->id)}}"> <i class="fa fa-eye fa-1x" style="color:orange"></i>
                           </a> &nbsp;
                           <a href="{{route('user.lock', $user->id)}}"> <i class="fa fa-lock fa-1x" style="color:green"></i></a>
                           
                           &nbsp;
                            <a href="{{route('user.delete', $user->id)}}">
                            <i class="fa fa-trash fa-1x" style="color:red"></i></a>

                          
                        </td>
                     </tr>
      @endforeach 
      </tbody>
           </table>
           <?php echo $users->render(); ?>
        </div>
      
      </div><!-- row -->
      </div>
      </div>
    </div>
   
                
  </div> 
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Deposit Logs</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>Here you can see the deposits made by the users in the system</b> </p>
          
          </div>
          <div class="col-md-12 col-md-4"></div>
          </div>
        </div>
        <div class="row">
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div></div></div>


</div>
@endsection