@extends('layouts.user')

@section('content')
<div class="row">
<div class="col-md-12">
  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
    Deposit Log
    </div>
    <div class="panel-body table-responsive" style="text-align: left;">
    <p>1. From Deposit Logs you can keep track of all your previous deposits.</p>
    <p>2. You can Add a deposit from <a href="{{route('deposit')}}"> here.</a></p>
  </div>
</div>
  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
      <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a; ">?</button></span>
      <h4 class="panel-title">{{$gnl->cur}} Deposit Log</h4>
    </div>
    <div class="panel-body table-responsive">
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bitcoin Deposit Log: </h4>
        </div>
        <div class="modal-body">
          <p>In the bitcoin deposit log you will see the bitcoins deposited by users with the deposit id, amount and date deposited. The deposit id is taken from coinspayment gateway.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
     <table class="table table-striped" id="deposit_log">
    
                  
            
     </table>
  
     <?php echo $depos->render(); ?>
   </div>
 </div>
</div>   
</div>

<script>


    var api_url = window.location.protocol + "//" + window.location.host + "/user/home/getTrxStatus";

window.setInterval(function(){


     $.ajax({
            type: "GET",
            url: api_url,
            dataType:'json',
            success: function(data){

              $('#deposit_log').html('');

            //  var text='<table class="table table-striped" id="deposit_log">';
                var text ="<thead><tr> <th> Deposit ID </th> <th> Amount </th> <th> Status </th> <th> Processed on </th> <th>Check status</th></tr> </thead>";

          
                 data.forEach(function(element) {

                  if(element.status_text=="Waiting for buyer funds..."){
                    status_text="Waiting for Payment";
                  }else{
                    status_text=element.status_text;
                  }
                 //     console.log(element);

                      text +="<tbody>  <tr> <td> "+element.trxid +" </td> <td>"+element.amount+" BTC </td> <td>"+status_text+" </td> <td>"+element.updated_at+"</td> <td><a href='"+element.status_url+"' target='_blank'><span class='btn btn-default btn-primary' >Check Status</span></a></td> </tr><tbody>";


                 });

                    $('#deposit_log').html(text);

             
          }
      });

    },1000);
  </script>


@endsection
