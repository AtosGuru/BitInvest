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
          <span class="caption-subject bold uppercase">Borrowing requests</span> 
        </div> 
        <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" style="background-color: #008a8a; border:#008a8a; " data-target="#myModal">?</button></span>
      </div>
    <p>1. Here you can check the borrowing requests made by the borrow users in website.</p>
    <p>2. You can verify the users's profile, KYC, Borrow details.</p>
    <p>3. You have options to approve and cancel</p>
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
          <th>Borrow ID</th>
          <th>User</th>
          <th>Borrow</th>
          <th>Repay</th>
          <th>Monthly Payments</th>
          <th>Terms</th>
          <th>Action</th>
        </tr>
        @foreach($data as $log)
        <tr>
         <td>{{$log->id}}</td>
        <td>
 <a href="{{route('borrow.single_user',$log->user_id)}}">  {{$log->name}}</a>  
        </td>
        <td>{{$log->amount_in_btc}} {{$gnl->cur}}</td>
        <td>{{$log->repay}} BITCOIN</td>
        <td>{{$log->monthly_payments}} BITCOIN</td>
        <td>{{$log->installment}} Months</td>
        <td>
                          <a href="{{ route('borrow.verify', $log->id)}}" class="btn btn-outline btn-circle btn-sm green">
                             <i class="fa fa-check"></i> Verify </a>
                             <!-- <a href="{{ route('borrow.delete', $log->id)}}" data-toggle="confirmation"  data-title="Are You Sure?" data-content="Cancel This Deposit Request?" class="btn btn-outline btn-circle btn-sm red" >
                             <i class="fa fa-times"></i> Cancel </a> -->
                        </td>
        

      </tr>
      
      @endforeach
      <?php 
      if(count($data)==0){
        echo "<tr><td colspan=4><center>No Requests</center></td></tr>";
      }
      ?>

    </table>
  </div>
     </div>
           

</div><!-- row -->

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


        
            
    
   <div id="chartdiv">

   </div> 
</div>

</div>
</div>



      <style>
#chartdiv {
  width   : 100%;
  height    : 500px;
  font-size : 11px;
} 

.amExportButton {
  display: none;
}           
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

<!-- Chart code -->
<script>

  var sent_count=document.getElementById('sent_count').value;
  var sent_amount=document.getElementById('sent_amount').value;
  var rec_count=document.getElementById('rec_count').value;
  var rec_amount=document.getElementById('rec_amount').value;
var chart = AmCharts.makeChart("chartdiv", {
  "type": "pie",
  "startDuration": 0,
   "theme": "light",
  "addClassNames": true,
  "legend":{
    "position":"right",
    "marginRight":100,
    "autoMargins":false
  },
  "innerRadius": "30%",
  "defs": {
    "filter": [{
      "id": "shadow",
      "width": "200%",
      "height": "200%",
      "feOffset": {
        "result": "offOut",
        "in": "SourceAlpha",
        "dx": 0,
        "dy": 0
      },
      "feGaussianBlur": {
        "result": "blurOut",
        "in": "offOut",
        "stdDeviation": 5
      },
      "feBlend": {
        "in": "SourceGraphic",
        "in2": "blurOut",
        "mode": "normal"
      }
    }]
  },
  "dataProvider": [{
    "log_type": "Sent",
    "values": sent_amount
  }, {
    "log_type": "Received",
    "values": rec_amount
  }],
  "valueField": "values", 
  "titleField": "log_type",
  "export": {
    "enabled": true
  }
});

chart.addListener("init", handleInit);

chart.addListener("rollOverSlice", function(e) {
  handleRollOver(e);
});

function handleInit(){
  chart.legend.addListener("rollOverItem", handleRollOver);
}

function handleRollOver(e){
  var wedge = e.dataItem.wedge.node;
  wedge.parentNode.appendChild(wedge);
}
</script>
 
@endsection