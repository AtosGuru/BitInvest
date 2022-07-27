@extends('layouts.user')
@section('content') 
<input type="hidden" name="id" value="{{$status->trans_id}}" id="pay_id">      
<div class="row text-center">
    <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
      Pay 
    </div>
    
    <div><img src="{{$status->qr_url}}">
      <br>
      <span id="status"></span></div>
      <br><br>
 <div class="panel panel-inverse col-md-12" data-sortable-id="index-1">
    <div class="col-md-3"><h4>Amount Remaining </h4> <br> <span style="color: blue"><h4 style="font-weight: bold; border: 2px dotted  grey;background: #f4f5f7;padding: 10px;">{{$status->amount}} BTC</h4></span></div><div class="col-md-6"><h4>Address</h4> <br> <h4 style="font-weight: bold; border: 2px dotted  grey;background: #f4f5f7;padding: 10px;">{{$status->sent_to_address}} </h4></div><div class="col-md-3"><h4>Time Left</h4> <br><span><h4 style="font-weight: bold; border: 2px dotted  grey;background: #f4f5f7;padding: 10px;">14.00.52 </h4></span></div>


  </div>
</div></div>
 <div class="panel panel-inverse col-md-12" data-sortable-id="index-1">

   <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo">What to do next ?</button>
  <div id="demo" class="collapse" style="margin-left: 50px;line-height: 2.0;">
    <br>
    1) Please send <b>{{$status->amount}}</b> BTC to address <b>{{$status->sent_to_address}}</b>. (Make sure to send enough to cover any coin transaction <br>fees!) You will need to initiate the payment using your software or online wallet and copy/paste the address and payment amount into<br> it. We will email you when all funds have been received. You have 14 hours, 56 minutes, 43 seconds for us to receive confirmed <br>funds. If you send funds that don't confirm by the timeout or don't send enough coins you will receive an automatic email to claim your<br> funds within 8 hours. If you don't receive the email contact us with the information below and CoinPayments.net will send you a refund:<br><br>

    i) The transaction ID: <b>{{$status->trans_id}} </b> <br>

    ii) A payment address to send the funds to.<br>

 

2) After sending payment, review the status of your transaction <a href="{{$status->status_url}}" target="_blank"> on this page.</a> Once the payment is confirmed several times in the block<br> <br>chain, the payment will be completed and the merchant will be notified. The confirmation process usually takes 10-45 minutes but varies <br>based on the coin's target block time and number of block confirms required. The status page is available for the next 30 days.<br><br>
  </div>
  <br><br>
   <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo1">
What if I accidentally don't send enough? +</button>
  <div id="demo1" class="collapse" style="margin-left: 50px;line-height: 2.0;">
    <br>
  
If you don't send enough, that is OK. Just send the remainder and we will combine them for you. <br> You can also send from multiple wallets/accounts.<br><br>
  </div>

 


</div>




<script>

  var timestamp1 = 1530691645; // replace your timestamp
var date = new Date(timestamp1 * 1000);
var formattedDate1 = ('0' + date.getDate()).slice(-2) + '/' + ('0' + (date.getMonth() + 1)).slice(-2) + '/' + date.getFullYear() + ' ' + ('0' + date.getHours()).slice(-2) + ':' + ('0' + date.getMinutes()).slice(-2);
console.log(formattedDate1);


 var timestamp2 = 1530745645; // replace your timestamp
var date = new Date(timestamp2 * 1000);
var formattedDate2 = ('0' + date.getDate()).slice(-2) + '/' + ('0' + (date.getMonth() + 1)).slice(-2) + '/' + date.getFullYear() + ' ' + ('0' + date.getHours()).slice(-2) + ':' + ('0' + date.getMinutes()).slice(-2);
console.log(formattedDate2);


var today = new Date();


var Christmas = new Date(formattedDate2);


// console.log("today : "+today);
// console.log("Christmas : "+Christmas);

var diffMs = (Christmas - today); // milliseconds between now & Christmas
var diffDays = Math.floor(diffMs / 86400000); // days
var diffHrs = Math.floor((diffMs % 86400000) / 3600000); // hours
var diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000); // minutes
//console.log(diffDays + " days, " + diffHrs + " hours, " + diffMins + " minutes until Christmas 2009 =)");

var id=document.getElementById('pay_id').value;
 
 var api_url = window.location.protocol + "//" + window.location.host + "/user/home/get_status/"+id;
 console.log(api_url);


window.setInterval(function(){

     $.ajax({
            type: "GET",
            url: api_url,
            dataType:'json',
            success: function(data){
            
               data.forEach(function(element) {

                console.log(element);

                $('#status').html("<h5> Status :  "+element.status_text+"</h5>");
               });
              
            }
          })
    },5000);

</script>
@endsection



