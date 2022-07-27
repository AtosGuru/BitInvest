<style>
.scroll{
  
    overflow: auto;
}.pace-active{
  display: none;

}
</style>
<div id="header" class="header navbar-default">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <a href="{{url('admin/home')}}" class="navbar-brand"><span class="navbar-logo"></span>   <img src="{{ asset('assets/images/logo/logo.png') }}" style="max-height: 16; max-width: 100px; margin-top: 5px;" class="img-responsive"></a>
                <button type="button" class="navbar-toggle thrLines" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->
            
            <!-- begin header-nav -->
            <ul class="navbar-nav navbar-right">
              <!--   <li>
                    <form class="navbar-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter keyword" />
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li> -->
               <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                        <i class="fa fa-bell"></i>
                        <span class="label mycount bg-red">0</span>
                    </a>
                    <ul class="dropdown-menu media-list dropdown-menu-right scroll">
                        <li class="dropdown-header"></li>
                        <li class="media">
                          <div class="media-body">
                            <div class="media-heading">No Notifications</div>
                          </div>
                        </li>


                    </ul>
                </li>
                <li class="dropdown navbar-user dropdown-toggle">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="https://cdn3.iconfinder.com/data/icons/user-icon-3-1/100/user_3_Artboard_1-512.png" alt="" /> 
                        <span class="d-none d-md-inline">{{Auth::guard('admin')->user()->name}}</span> <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                     <!--    <a href="{{route('changepass')}}" class="dropdown-item"><span class="badge badge-danger pull-right"></span><i class="icon-lock"></i> Change Passsword</a> -->

                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                    </div>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
        <script>
 $( document ).ready(function() {
   

 var width = $( window ).width();
 
if(width < 750)
{
    $("#sidebar").hide();
 $(".sidebar-bg").hide();
 $(".navbar-nav").hide();
 $('.panel-heading').css("margin-top",'45px');

 
}
else
{
    $("#sidebar").show('slow');
 $(".sidebar-bg").show('slow');
 $(".navbar-nav").show('slow');
}
});




      $('.thrLines').click(function() {

  var clicks = $(this).data('clicks');
  if (clicks) {
     $(".sidebar-bg").show();
   $("#sidebar").show();
       
  } else {$(".sidebar-bg").hide();
       $("#sidebar").hide();
 
  }
  $(this).data("clicks", !clicks);
});

var api_url = window.location.protocol + "//" + window.location.host + "/admin/admin/getNotification";


console.log(api_url);

window.setInterval(function(){
            $.ajax({
            type: "GET",
            url: api_url,
            dataType:'json',
            success: function(data){
             $('.scroll').html('');

              $('.mycount').html(data.length);
              if(data.length ==0 ){
$('.scroll').css('height', '100px');
                    $('.scroll').append('<li class="media">'+
                            ''+
                               '<div class="media-left">'+
                                    '<br>'+
                                '</div>'+
                                '<div class="media-body">'+
                                    '<h6 class="media-heading">No Notifications'+
                                    ' <br></h6>'+
                                    '</div>'+
                            '</a></li>');
              }
                  data.forEach(function(element) {
                     time = timeSince(new Date(element.created_at));
              
                if(element.id !=""){

                  $('.scroll').css('height', '500px');

                     $('.scroll').append('<li class="media">'+
                            '<a onclick="delete_notify('+element.id+')">'+
                               '<div class="media-left"  >'+
                                    '<i class="fa fa-user media-object bg-silver-darker"></i>'+
                                '</div>'+
                                '<div class="media-body" style="word-wrap: break-word;width:250px;">'+
                                    '<h6 class="media-heading">'+ element.message +
                                    '  </h6>'+
                                    '<div class="text-muted f-s-11">'+time +' ago </div></div><span class="media-right" ><i style="font-size:15px;color:red;" class="fa fa-close fa-x3 "></i></span>'+
                            '</a></li>');

                 }
                  });

            }
        });

            }, 5000);

function delete_notify(id) {
    
    var delete_url = window.location.protocol + "//" + window.location.host + "/admin/admin/delete_notify";
    console.log(delete_url);
     $.ajax({
            type: "GET",
            url: delete_url+'/'+id,
            dataType:'json',
            success: function(data){
                console.log("delete -> "+ data);
             
          }
      });

    // body...
}

function timeSince(date) {
    
  var seconds = Math.floor((new Date() - date) / 1000);

  var interval = Math.floor(seconds / 31536000);

  if (interval > 1) {
    return interval + " years";
  }
  interval = Math.floor(seconds / 2592000);
  if (interval > 1) {
    return interval + " months";
  }
  interval = Math.floor(seconds / 86400);
  if (interval > 1) {
    return interval + " days";
  }
  interval = Math.floor(seconds / 3600);
  if (interval > 1) {
    return interval + " hours";
  }
  interval = Math.floor(seconds / 60);
  if (interval > 1) {
    return interval + " minutes";
  }
  return Math.floor(seconds) + " seconds";
}

            var bb='<li class="media">'+
                            '<a href="javascript:;">'+
                               '<div class="media-left">'+
                                    '<i class="fa fa-bug media-object bg-silver-darker"></i>'+
                                '</div>'+
                                '<div class="media-body">'+
                                    '<h6 class="media-heading">Server Error Report'+
                                    ' <i class="fa fa-exclamation-circle text-danger">'+
                                    '</i></h6>'+
                                    '<div class="text-muted f-s-11">3 minutes ago</div></div>'+
                            '</a></li>';
                          
                      
        </script>