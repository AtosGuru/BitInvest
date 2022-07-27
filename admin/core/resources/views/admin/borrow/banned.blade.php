@extends('admin.layout.master')

@section('content')
<style>

 th {
    padding-top: 12px;
    padding-bottom: 12px;
   
    background-image: -webkit-linear-gradient(0deg, #1a2229 0%, #1a2229 100%);
    color: white;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">Banned User List</span>
                </div>
                 <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="background-color: #008a8a; border:#008a8a; ">?</button></span>
            </div>
            <p>1. Once a user is banned, he will be able to login using his credentials.</p>
            <p>2. You can also unlock the user's account from here</p>
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
          <button type="button" class="btn btn-default green" style="background-color: #008a8a;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<div class="table-responsive">
  <table class="table">
                <thead>
                    <tr>
                        <th style="color: white">
                            Name 
                        </th>
                        <th style="color: white">
                            Email
                        </th>
                        <th style="color: white" >
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
                        	{{$user->name}}
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
                           <a href="{{route('user.unlock', $user->id)}}"> <i class="fa fa-unlock fa-1x" style="color:green"></i></a>
                           
                           &nbsp;
                            <a href="{{route('user.delete', $user->id)}}">
                            <i class="fa fa-trash fa-1x" style="color:red"></i></a>

                          
                        	
                        </td>
                     </tr>
 			@endforeach 
 			</tbody>
           </table>
       </div>
       
            <?php echo $users->render(); ?>
        </div>
			
			</div><!-- row -->
			</div>
		</div>
	</div>		
</div>
@endsection