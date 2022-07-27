


        <div id="header" class="header navbar navbar-default navbar-fixed-top">
            <!-- begin container-fluid -->
            <div class="container-fluid"  style="background-color: white;">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <a href="{{url('admin/home')}}" class="navbar-brand"><span class="navbar-logo"></span> <b>Bit</b> Invest</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->
            
            <!-- begin header-nav -->

            <ul class="nav navbar-nav">
                    <li class="dropdown">
                       <a href="#" style="font-size: 20px; color:#00acac; margin-right: 20px;">1 BTC = {{number_format(floatval($btcrate) , $gnl->decimal, '.', '')}} USD</a>
                    </li>
                </ul>

<ul class="nav navbar-nav navbar-right">
               
                <li class="dropdown navbar-user dropdown-toggle">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="https://cdn3.iconfinder.com/data/icons/user-icon-3-1/100/user_3_Artboard_1-512.png" alt="" /> 
                        <span class="d-none d-md-inline" style="text-transform: uppercase;">{{Auth::user()->username}}</span> <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        
                        <a href="{{route('change.password')}}" class="dropdown-item"><span class="badge badge-danger pull-right"></span><i class="fa fa-lock"></i> Change Passsword</a>
                        
                        <div class="dropdown-divider"></div>
                       
              <a href="{{ route('logout') }}" class="dropdown-item"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
              <span>SIGN OUT</span>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        
                    </div>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
    </div>
