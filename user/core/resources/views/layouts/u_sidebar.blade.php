<div id="sidebar" class="sidebar">
      <div data-scrollbar="true" data-height="100%">
        <ul class="nav text-center" >

            <li class="nav-profile">
                        <a href="javascript:;" data-toggle="nav-profile">
                            <div class="cover with-shadow"></div>
                            <div class="image">
                                <img src="https://www.mautic.org/media/images/default_avatar.png" alt="" />

                            </div>
                             <div class="info"  style="margin-right: 20px;">
                               
                                <strong style="text-transform: uppercase; ">{{Auth::user()->name}} </strong>  <small>{{Auth::user()->username}}</small>
                            </div>
                            
                        </a>
                    </li>
        </ul>
        <ul class="nav">
          <li class="@if(request()->path() == 'home') active @endif"><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
          <li class="has-sub @if(request()->path() == 'home/deposit') active 
            @elseif(request()->path() == 'home/deposit-log') active 
             @endif" >
            <a href="javascript:;">
                <b class="caret"></b>
                <i class="fa fa-plus"></i>
                <span>Deposit</span>
            </a>
            <ul class="sub-menu">
               <li class="@if(request()->path() == 'home/deposit') active @endif"><a href="{{route('deposit')}}"><i class="fa fa-plus" aria-hidden="true"></i> <span>Add Balance</span></a></li>
               <li class="@if(request()->path() == 'home/deposit-log') active @endif"><a href="{{route('depositlog')}}"><i class="fa fa-list" aria-hidden="true"></i> <span>Deposit Log</span></a></li>
            </ul>
          </li>

          <li class="has-sub @if(request()->path() == 'home/withdraw') active 
            @elseif(request()->path() == 'home/withdraw-log') active 
             @endif" >
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-share"></i>
                <span>Withdraw</span>
            </a>
            <ul class="sub-menu">
                <li class="@if(request()->path() == 'home/withdraw') active @endif"><a href="{{route('user.withdraw')}}"><i class="fa fa-share" aria-hidden="true"></i> <span>Withdraw</span></a></li>
               <li class="@if(request()->path() == 'home/withdraw-log') active @endif"><a href="{{route('withdrawlog')}}"><i class="fa fa-list" aria-hidden="true"></i> <span>Withdraw Log</span></a></li>
            </ul>
          </li>          
           
        
            <li class="@if(request()->path() == 'home/lending') active @endif"><a href="{{route('invest.coin')}}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> <span>Lending</span></a></li>
            <li class="@if(request()->path() == 'home/mylends') active @endif"><a href="{{route('my.invest')}}"><i class="fa fa-money" aria-hidden="true"></i> <span>My Lendings</span></a></li>
            <li class="@if(request()->path() == 'home/transactions') active @endif"><a href="{{route('my.transactions')}}"><i class="fa fa-list" aria-hidden="true"></i> <span>My Transactions</span></a></li>
            <li class="@if(request()->path() == 'home/returnlog') active @endif"><a href="{{route('returnlog')}}"><i class="fa fa-list" aria-hidden="true"></i> <span>My Returnlog</span></a></li>
            <li class="@if(request()->path() == 'home/refered') active @endif"><a href="{{route('refered')}}"><i class="fa fa-users" aria-hidden="true"></i> <span>Reference log</span></a></li>          

            <li class="@if(request()->path() == 'home/change/password') active @endif">
                <a href="{{route('changepass')}}"><i class="fa fa-lock" aria-hidden="true"></i> <span>Password</span></a>
            </li> 
            <li class="@if(request()->path() == 'home/g2fa') active @endif">
              <a href="{{route('go2fa')}}"><i class="fa fa-shield" aria-hidden="true"></i> <span>Security</span></a>
            </li>
            <li>
              <a href="{{ route('logout') }}">
            
              <span>SIGN OUT</span>
          </a>

      
          </li>
                 
              <!-- begin sidebar minify button -->
        <!--  <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
             end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
      </div>
      <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
    <!-- end #sidebar -->