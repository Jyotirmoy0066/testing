<nav class="page-sidebar" data-pages="sidebar">
 

 
 
<div class="sidebar-header">
<img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
<div class="sidebar-header-controls">
<button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
</button>
<button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
</button>
</div>
</div>
 
 
<div class="sidebar-menu">
 
<ul class="menu-items">

<li class="m-t-30 ">
<a href="{!! url('/dashboard') !!}" class="detailed">
<span class="title">Dashboard</span>
<span class="details">12 New Updates</span>
</a>
@if($page == "dashboard")
<span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
@endif
</li>




<li class="">
<a href="{!! url('/add_user') !!}">
<span class="title">Sub-Admin</span>
</a>
@if($page == "add_user")
<span class="bg-success icon-thumbnail"><i class="pg-layouts"></i></span>
@else
<span class="icon-thumbnail"><i class="pg-layouts"></i></span>
@endif
</li>

@if($page == "add_restaurant" || $page == "manage_restaurant")
<li class="open active">
<a href="javascript:;">
<span class="title">Restaurant</span>
<span class="open arrow"></span>
</a>
<span class="bg-success icon-thumbnail"><i class="pg-form"></i></span>
@else
<li class="">
<a href="javascript:;">
<span class="title">Restaurant</span>
<span class="arrow"></span>
</a>
<span class="icon-thumbnail"><i class="pg-form"></i></span>
@endif


<ul class="sub-menu">
<li class="">
<a href="{!! url('/add_restaurant') !!}">Add Restaurant</a>
<span class="icon-thumbnail">AR</span>
</li>
<li class="">
<a href="{!! url('/manage_restaurant') !!}">Manage Restaurant</a>
<span class="icon-thumbnail">MR</span>
</li>

</ul>
</li>




<li>
<a href="javascript:;"><span class="title">Tables</span>
<span class=" arrow"></span></a>
<span class="icon-thumbnail"><i class="pg-tables"></i></span>
<ul class="sub-menu">
<li class="">
<a href="tables.html">Basic Tables</a>
<span class="icon-thumbnail">bt</span>
</li>
<li class="">
<a href="datatables.html">Data Tables</a>
<span class="icon-thumbnail">dt</span>
</li>
</ul>
</li>





</ul>
<div class="clearfix"></div>
</div>
 
</nav>