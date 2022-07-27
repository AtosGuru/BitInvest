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
          <span class="caption-subject bold uppercase">User Payment Requests</span> 
        </div> 
        <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" style="background-color: #008a8a; border:#008a8a; " data-target="#myModal">?</button></span>
      </div>
      <p>1. Track all monthly EMI payments made by users here with unique Borrow IDs.</p>
      <p>2. You can check the status of the transaction by checking the 'Check Status' column.</p>
      <p>3. The transaction ID is the actual transaction number given from payment gateway.</p>
      <p>4. You can track the due date for the payment.</p>
      <p>5. You can check all other required details for the borrowing from here.</p>
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

          <table class="table table-responsive">
            <thead>
              <tr >
                <th style="color: white">S.No</th>
                <th style="color: white">Borrow ID</th>
                <th style="color: white">Usename</th>
                <th style="color: white">
                  Total Coin 
                </th>
                <th style="color: white">
                Total payments
                </th>
                <th style="color: white">Terms
                </th>
                <th style="color: white">
                 Monthly payments
                </th>
                 <th style="color: white;width:20px">
                 TRX ID
                </th>
                <th style="color: white">
                 Due date
                </th>
                <th style="color: white">
                 Check status
                </th>
                <th style="color: white">
                 action
                </th>
              </tr>
            </thead>
            <tbody>

              <?php $i=1;?>
             @foreach($this_month as $borrows)
             <tr>
              <td>{{$i}}</td>
               <td> {{$borrows->borrow_id}}</td>
              <td><a href="{{route('borrow.single_user',$borrows->user_id)}}">  {{$borrows->name}} </a></td>
              <td>{{$borrows->amount_in_btc}} BTC</td>
              <td>{{$borrows->repay}} BTC</td>
            <td>{{$borrows->installment}} months</td>
            
               <td>{{$borrows->monthly_payments}} BTC</td>
             <td style="width:25px !important"> {{$borrows->trans_id}}</td>
            <td>{{$borrows->due_date}}</td>
                <td><a href="{{$borrows->status_url}}" target="_blank">Click here</a></td>
                 <td>
                          <div><a href="{{route('borrow.pay_approve',$borrows->payment_id)}}" class="btn btn-outline btn-circle btn-sm green">
                             <i class="fa fa-check"></i><sub> Approve</sub> </a>
                          </div><br> <div>
                             <a href="{{route('borrow.pay_delete',$borrows->payment_id)}}" data-toggle="confirmation"  data-title="Are You Sure?" data-content="Cancel This Deposit Request?" class="btn btn-outline btn-circle btn-sm red" >
                             <i class="fa fa-times"></i> <sub>Cancel</sub> </a>
                           </div>
                        </td>
              </td>
           </tr>
           <?php $i++; ?>
           @endforeach
          
          
         </tbody>
       </table>
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