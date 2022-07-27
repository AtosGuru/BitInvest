<!DOCTYPE html>
<html lang="">
@php
    $cuser = \App\User::where('user_type','2')->where('id',Auth::id())->count();
   
@endphp

@include('layouts.head')

<body >

@include('layouts.preloader')

<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

@include('layouts.header')

@if($cuser==1)
@include('layouts.sidebar')
@else
@include('layouts.u_sidebar')
@endif
@include('layouts.message')
<div id="content" class="content">
@yield('content')
</div>
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
</div>
@yield('scripts')

<!--jquery script load-->
@include('layouts.scripts')
</body>
</html>
