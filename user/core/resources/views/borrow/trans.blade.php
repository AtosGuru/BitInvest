@extends('layouts.user')

@section('content')
<style>
    .btn {
        width: 100px;
    }
</style>
<div class="row">
<div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
      My Transactions
    </div>
    <div class="panel-body table-responsive">
      <p>1. Here you can keep track of all your Transactions.</p>
      <p>2. You can start Borrowing from<a href="{{route('borrow')}}"> here.</a>
    </div>
  </div>
<div class="col-md-12">
  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
         <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
      <h4 class="panel-title"> Borrowings Transaction Log</h4>
    </div>
    <div class="panel-body table-responsive"> <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Borrowings Transaction Log</h4>
        </div>
        <div class="modal-body">
          <p>You can see all the Bitcoin transactions made by you here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
     <table class="table table-striped">
     	<tr>
              <th>Type</th>
              <th>Amount in BTC</th>
       		<th>Amount in USD</th>
              <th>TRX ID</th>
       		<th>Details</th>
     	</tr>
     
     	<tr>
            <td><span class="btn btn-warning success">
                Send
                </span>
            </td>
     		<td>3</td>
            <td>$18,0150</td>
            <td>TRANS4584541545236</td>
     		<td>March month's EMI</td>
     	</tr>
        <tr>
            <td><span class="btn btn-warning success">
                Send
                </span>
            </td>
        <td>1</td>
            <td>$6286.055</td>
            <td>TRANS4584541545222</td>
        <td>June month's EMI</td>
      </tr>
        <tr>
            <td><span class="btn btn-warning success">
                Send
                </span>
            </td>
        <td>5</td>
            <td>$30,250</td>
            <td>TRANS4584541545555</td>
        <td>July Month's EMI</td>
      </tr>
        <tr>
            <td><span class="btn btn-success">
                Received
                </span>
            </td>
        <td>7</td>
            <td>$42,250</td>
            <td>TRANS121212121121</td>
        <td>May Month Received </td>
      </tr> <tr>
            <td><span class="btn btn-warning success">
                Send
                </span>
            </td>
        <td>2</td>
            <td>$12,050</td>
            <td>TRANS4584547848445</td>
        <td>November month's EMI</td>
      </tr>
        <tr>
            <td><span class="btn btn-warning success">
                Send
                </span>
            </td>
        <td>4</td>
            <td>$24,200</td>
            <td>TRANS1234697901478</td>
        <td>July month's EMI</td>
      </tr>
    
     </table>
    
   </div>
 </div>
</div>   
</div>


@endsection
