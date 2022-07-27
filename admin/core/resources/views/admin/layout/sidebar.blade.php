<div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%" >
                <!-- begin sidebar user -->
               
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                        <li class="nav-profile">
                        <a href="javascript:;" data-toggle="nav-profile">
                            <div class="cover with-shadow"></div>
                            <div class="image">
                                <img src="https://www.mautic.org/media/images/default_avatar.png" alt="" />
                            </div>
                            <div class="info">
                               
                                {{Auth::guard('admin')->user()->name}}
                                <small>{{Auth::guard('admin')->user()->email}}</small>
                            </div>
                        </a>
                    </li>

                    <li class="nav-header">Navigation</li>
                    <li class="has-sub @if(request()->path() == 'admin/home') active open @endif"  >
                        <a href="{{url('admin/home')}}">
                            <i class="fa fa-th-large"></i>
                            <span>Dashboard</span>
                        </a>
                        
                    </li>
                  
                    <li class="has-sub 
            @if(request()->path() == 'admin/users') active open
                @elseif(request()->path() == 'admin/user/search') active open
                @elseif(request()->path() == 'admin/banned/users') active open
                @elseif(request()->path() == 'admin/user-translog') active open
                @elseif(request()->path() == 'admin/broadcast') active open
                @elseif(request()->path() == 'admin/user-banned') active open
            @endif">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-user"></i>
                            <span>Lending Management</span> 
                        </a>
                        <ul class="sub-menu ">
                            <li class="@if(request()->path() == 'admin/users') active  
                    @elseif(request()->path() == 'admin/user/search') active
                    @endif"><a href="{{route('users')}}">Users</a></li>
                            <li class="@if(request()->path() == 'admin/user-translog') active     @endif"><a href="{{route('users.transactions')}}">Users Transactions</a></li>
                            <li class="@if(request()->path() == 'admin/broadcast') active @endif"><a href="{{route('broadcast')}}">Broadcast Email</a></li>
                            <li class="@if(request()->path() == 'admin/user-banned') active @endif"><a href="{{route('user.ban')}}">Banned Users</a></li>
                           
                        </ul>
                    </li>
                    <li class="@if(request()->path() == 'admin/lendings') active  @endif">
                        <a href="{{route('user.lendings')}}">
                           
                            <i class="fa fa-user"></i>
                            <span>Lending Log</span> 
                        </a>
                    </li>
                     <li class=" @if(request()->path() == 'admin/package') active @endif">
                        <a href="{{url('admin/package')}}">
                           
                            <i class="fa fa-user"></i>
                            <span>Lending Package</span> 
                        </a>
                    </li>
                     <li class="has-sub 
            @if(request()->path() == 'admin/users') active open
                @elseif(request()->path() == 'admin/borrow_requests') active open
                @elseif(request()->path() == 'admin/borrow_user') active open
                @elseif(request()->path() == 'admin/borrow_user_translog') active open
                @elseif(request()->path() == 'admin/borrow_package') active open
                  @elseif(request()->path() == 'admin/borrow/ongoing') active open
                    @elseif(request()->path() == 'admin/user_banned_borrow') active open
                    @elseif(request()->path() == 'admin/borrow/payments') active open
            @endif">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-user"></i>
                            <span>Borrow Management</span> 
                        </a>
                        <ul class="sub-menu ">
                            <li class="@if(request()->path() == 'admin/borrow_user') active  
                    @elseif(request()->path() == 'admin/user/search') active
                    @endif"><a href="{{route('borrow.users')}}">Users</a></li>

                     <li class="@if(request()->path() == 'admin/user_banned_borrow') active @endif"><a href="{{route('borrow.ban')}}"> Banned Users</a></li>

                            <!-- <li class="@if(request()->path() == 'admin/borrow_user_translog') active     @endif"><a href="{{route('borrow.transactions')}}">Users Transactions</a></li> -->
                            <li class="@if(request()->path() == 'admin/borrow_requests') active     @endif"><a href="{{route('borrow.requests')}}">Requests</a></li>
                           
                            <li class="@if(request()->path() == 'admin/borrow_package') active @endif"><a href="{{route('borrow.package')}}">Borrowing Packages</a></li>
                               <li class="@if(request()->path() == 'admin/borrow/ongoing') active @endif"><a href="{{route('borrow.ongoing')}}">Ongoing Borrowings</a></li>
                                <li class="@if(request()->path() == 'admin/borrow/payments') active @endif"><a href="{{route('borrow.payments')}}"> Borrow Payments</a></li>
                            
                           
                        </ul>
                    </li>
                    <li class="has-sub @if(request()->path() == 'admin/gateway') active open  
                @elseif(request()->path() == 'admin/deposits') active open
                @elseif(request()->path() == 'admin/deposits/requests') active open           
            @endif ">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-list-ol"></i>
                            <span>Deposit</span> 
                        </a>
                        <ul class="sub-menu">
                            <li class="@if(request()->path() == 'admin/deposits/requests') active  @endif"><a href="{{route('deposits.requests')}}">Deposit Requests <i class="fa  text-theme m-l-5"></i></a></li>
                            <li class="@if(request()->path() == 'admin/deposits') active @endif"><a href="{{route('deposits')}}">Deposit Log <i class="fa  text-theme m-l-5"></i></a></li>
                            <li class="@if(request()->path() == 'admin/gateway') active  @endif"><a href="{{url('admin/gateway')}}">Deposit Methods</a></li>
                        </ul>
                    </li>
                    <li class="has-sub @if(request()->path() == 'admin/withdraw') active open  
                @elseif(request()->path() == 'admin/withdraw') active open
                @elseif(request()->path() == 'admin/withdraw/requests') active open           
            @endif">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-table"></i>
                            <span>Withdraw</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="@if(request()->path() == 'admin/withdraw/requests') active  @endif"><a href="{{route('withdraw.requests')}}">Withdraw Requests</a></li>
                            <li class=" @if(request()->path() == 'admin/withdraw') active  @endif">
                                <a href="{{route('withdraw')}}"> Withdraw Log</a>
                            </li>
                        </ul>
                    </li>
                   <li class="has-sub @if(request()->path() == 'admin/general') active open
            @elseif(request()->path() == 'admin/logo') active open
            @elseif(request()->path() == 'admin/template') active open
             @endif">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-star"></i> 
                            <span>Website Control</span>
                        </a>
                        <ul class="sub-menu">
                            <li class=" @if(request()->path() == 'admin/general') active @endif"><a href="{{route('general')}}" >General settings</a></li>
                            <li class="@if(request()->path() == 'admin/logo') active @endif"><a href="{{route('logo')}}" >Logo and Icon</a></li>
                                <li class=" @if(request()->path() == 'admin/template') active  @endif"><a href="{{route('template')}}" >Email/Sms template</a></li>
                        </ul>
                    </li> 
                    <!--<li class="has-sub @if(request()->path() == 'admin/slide') active open
            @elseif(request()->path() == 'admin/services') active open 
            @elseif(request()->path() == 'admin/paymethod') active open 
            @elseif(request()->path() == 'admin/testim') active open 
            @elseif(request()->path() == 'admin/interface') active open 
            @elseif(request()->path() == 'admin/stats') active open @endif">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-envelope"></i>
                            <span>Interface Control</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="@if(request()->path() == 'admin/interface') active @endif"><a href="{{route('interface')}}">Interface Content</a></li>
                            <li class="@if(request()->path() == 'admin/slide') active  @endif"><a href="{{route('slide')}}">Sliders</a></li>
                            <li class="@if(request()->path() == 'admin/services') active  @endif"><a href="{{route('service')}}">Services</a></li>
                            <li class="@if(request()->path() == 'admin/stats') active  @endif"><a href="{{route('stat')}}">Statistics</a></li>
                             <li class="@if(request()->path() == 'admin/testim') active  @endif"><a href="{{route('testim')}}">Testtimonial</a></li>
                              <li class="@if(request()->path() == 'admin/paymethod') active  @endif"><a href="{{route('paymethod')}}">Paynethod</a></li>
                        </ul>
                    </li>-->
                    <li class="@if(request()->path() == 'admin/register') active  @endif">
                        <a href="{{route('admin.register')}}">
                           
                            <i class="fa fa-user"></i>
                            <span>Add new Admin</span> 
                        </a>
                    </li>

                    <li class="@if(request()->path() == 'admin/change-password') active  @endif">
                        <a href="{{route('change.password')}}">
                           
                            <i class="fa fa-lock"></i>
                            <span>Change Password</span> 
                        </a>
                    </li>
                    <!-- begin sidebar minify button -->
                 <!--   <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
