@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">Deposit Requests</span>
                </div>
                <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px;background-color: #008a8a; border:#008a8a; ">?</button></span>
            </div>
            <div class="table-responsive">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Deposit Requests</h4>
        </div>
        <div class="modal-body">
          <p>"Here you can see all the deposit requests from the requests."</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <p>1. You can approve all deposit request from here.</p>
  <p>2. You can cancel deposit request here.</p>
  <table class="table" id="deposit_req">
                <thead style="background-color: black;">
                    <tr>
                        <th style="color: white;">
                            User
                        </th>
                        <th style="color: white;">
                            {{$gnl->cur}} Amount
                        </th>
                        <th style="color: white;">
                            Transaction ID
                        </th>
                         <th style="color: white;">
                             Status
                        </th> 
                        <th style="color: white;">
                        	Action
                        </th>
                  	 </tr>
                </thead>
                <tbody>
		 	@foreach($deposits as $dep)
                     <tr>
                        <td>
                            {{$dep->name}}
                        </td>
                        <td>
                             {{$dep->amount}} {{$gnl->cursym}}
                        </td>
                        <td>
                        	{{$dep->trxid}}
                        </td>
                          <td>
                        {{$dep->status_text}}                       </td> 
                        <td>
                        	<a href="" class="btn btn-outline btn-circle btn-sm green" data-toggle="modal" data-target="#Modal{{$dep->cid}}">
                             <i class="fa fa-check"></i> Approve </a>
                             <a href="{{ route('deposit.destroy', $dep->cid)}}" data-toggle="confirmation"  data-title="Are You Sure?" data-content="Cancel This Deposit Request?" class="btn btn-outline btn-circle btn-sm red" >
                             <i class="fa fa-times"></i> Cancel </a>
                        </td>

                     </tr>
                    
                     <!--Approve Modal -->
					  <div class="modal fade" id="Modal{{$dep->cid}}" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
							      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								          <h4 class="modal-title">Are You Sure?</h4>
								        </div>
								        
								        	<div class="modal-body">
								        		<form role="form" method="get" action="{{route('deposit.approve', $dep->cid)}}" enctype="multipart/form-data">
								        	{{ csrf_field() }}
											{{method_field('put')}}
												<h4>Approve <b>{{$dep->trxid}}</b> Deposit Request?</h4>
											<a href="{{route('deposit.approve', $dep->cid)}}">	 <button type="submit" class="btn btn-lg btn-success btn-block">Approve</button></a>
                           </form>
												 </div>
                                                 <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
												
											
											</div>
							      </div>
						    </div>
					  </div>
 			@endforeach 
 			<tbody>
           </table>
        </div>
			
				</div><!-- row -->
			</div>
		</div>
    <!-- Styles -->
<style>
#chartdiv {
  width : 100%;
  height  : 500px;
}
                    
</style>


<script>


    var api_url = window.location.protocol + "//" + window.location.host + "/admin/admin/getTrxStatus";



 window.setInterval(function(){


     $.ajax({
            type: "GET",
            url: api_url,
            dataType:'json',
            success: function(data){
    
                var text ='<thead style="background-color: black;"> <tr> <th style="color: white;"> User </th> <th style="color: white;"> {{$gnl->cur}} Amount </th> <th style="color: white;"> Transaction ID </th> <th style="color: white;"> Status </th> <th style="color: white;"> Action </th> </tr> </thead>';

          
                 data.forEach(function(element) {
                  console.log('element');
           
                 var route=window.location.protocol + "//" + window.location.host +"/admin/admin/deposit/"+element.cid+"/delete";

                      text +="<tbody>  <tr><td>"+element.name+"</td> <td> "+element.amount +"  BTC</td> <td>"+element.trxid+"  </td> <td>"+element.status_text+" </td> ";
                      text +='<td><a href="" class="btn btn-outline btn-circle btn-sm green" data-toggle="modal" data-target="#Modal'+element.cid+'"> <i class="fa fa-check"></i> Approve </a> <a href="'+route+'" data-toggle="confirmation" data-title="Are You Sure?" data-content="Cancel This Deposit Request?" class="btn btn-outline btn-circle btn-sm red" > <i class="fa fa-times"></i> Cancel </a> </td> </tr><tbody>';


                 });

                    $('#deposit_req').html(text);
          }
      });

     },1000);
  </script>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- Chart code -->
<script>
    api_url = "http://18.188.45.2/new/admin/deposits/requestsAjax";
    var n_chart_data= new Array();
  $.ajax({
            type: "GET",
            url: api_url,
            dataType:'json',
            success: function(data){
 console.log(data);
             
              data.forEach(function(element) {
               
                var newDate = element.created_at;
                var  res= newDate.slice(0, 10);
                n_chart_data.push( {
                  "date": res,
                  "value": element.amount,
                  
                } );
              
              });
           
   console.log(n_chart_data);

var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "light",
    "marginRight": 40,
    "marginLeft": 40,
    "autoMarginOffset": 20,
    "mouseWheelZoomEnabled":true,
    "dataDateFormat": "YYYY-MM-DD",
    "valueAxes": [{
        "id": "v1",
        "axisAlpha": 0,
        "position": "left",
        "ignoreAxisWidth":true
    }],
    "balloon": {
        "borderThickness": 1,
        "shadowAlpha": 0
    },
    "graphs": [{
        "id": "g1",
        "balloon":{
          "drop":true,
          "adjustBorderColor":false,
          "color":"#ffffff"
        },
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "bulletSize": 5,
        "hideBulletsCount": 50,
        "lineThickness": 2,
        "title": "red line",
        "useLineColorForBulletBorder": true,
        "valueField": "value",
        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
    }],
    "chartScrollbar": {
        "graph": "g1",
        "oppositeAxis":false,
        "offset":30,
        "scrollbarHeight": 80,
        "backgroundAlpha": 0,
        "selectedBackgroundAlpha": 0.1,
        "selectedBackgroundColor": "#888888",
        "graphFillAlpha": 0,
        "graphLineAlpha": 0.5,
        "selectedGraphFillAlpha": 0,
        "selectedGraphLineAlpha": 1,
        "autoGridCount":true,
        "color":"#AAAAAA"
    },
    "chartCursor": {
        "pan": true,
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "cursorAlpha":1,
        "cursorColor":"#258cbb",
        "limitToGraph":"g1",
        "valueLineAlpha":0.2,
        "valueZoomable":true
    },
    "valueScrollbar":{
      "oppositeAxis":false,
      "offset":50,
      "scrollbarHeight":10
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    },
    "dataProvider": n_chart_data
});
 }


});



</script>

<!-- HTML -->
<div id="chartdiv"></div>
	</div>

</div>
@endsection