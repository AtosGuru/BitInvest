<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    @include('admin.layout.sidebar')
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div id="page-container" class="page-content fade page-sidebar-fixed page-header-fixed show">
            @include('admin.layout.message')
            @include('admin.layout.error')
            <!-- BEGIN PAGE HEADER-->
            @yield('content')

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>  