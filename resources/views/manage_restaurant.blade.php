
@extends('layouts.master')

@section('content')
 
 
<div class="page-content-wrapper ">
 
<div class="content ">
 
<div class="container-fluid container-fixed-lg">

	
 
<ul class="breadcrumb">
<li>
<a href="#">Restaurant</a>
</li>
<li><a href="#" class="active">Manage Restaurant</a>
</li>
</ul>
 

 	



 <br/>



<div class="container-fluid container-fixed-lg bg-white">
 
<div class="panel panel-transparent">
<div class="panel-heading">
<div class="panel-title">
	<div class="col-xs-12" style="margin-left: -6%;">
		<input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
	</div>
</div>
<div class="export-options-container pull-right"></div> 
<div class="clearfix"></div>

</div>
<div class="panel-body">
	<br/>
<table class="table table-striped tableWithSearch" id="tableWithExportOptions">
<thead>
<tr>
<th>
	<div class="checkbox check-primary">
	<input type="checkbox" value="10" class="CheckAllBtn" id="checkbox10">
	<label for="checkbox10"></label>
	</div>
</th>	
<th>Name</th>
<th>Location</th>
<th>cuisines</th>
<th>Contact</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr class="odd gradeX">
<td>
	<div class="checkbox">
	<input type="checkbox" value="1" class="checkBoxClass" id="checkbox1">
	<label for="checkbox1"></label>
	</div>
</td>
<td >Andrew Garfield</td>
<td class="space_left_0">Afield@gmail.com</td>
<td class="space_left_0">+91-2365985898</td>
<td class="space_left_0">April 13,2014 10:13</td>
<td class="space_left_0">
 	<button class="btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>  <button class="btn" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>  <button class="btn" title="Manage Permissions"><i class="fa fa-tasks" aria-hidden="true"></i></button>
</td>
</tr>
<tr class="even gradeC">
<td>
	<div class="checkbox">
	<input type="checkbox" value="2" class="checkBoxClass" id="checkbox2">
	<label for="checkbox2"></label>
	</div>
</td>
<td >John Snow</td>
<td class="space_left_0">Jsnow@gmail.com</td>
<td class="space_left_0">+91-2365985898</td>
<td class="space_left_0">April 14,2014 10:15</td>
<td class="space_left_0">
 	<button class="btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>  <button class="btn" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>  <button class="btn" title="Manage Permissions"><i class="fa fa-tasks" aria-hidden="true"></i></button>
</td>
</tr>
<tr class="odd gradeA">
<td>
	<div class="checkbox">
	<input type="checkbox" value="3" class="checkBoxClass" id="checkbox3">
	<label for="checkbox3"></label>
	</div>
</td>	
<td>Bijit Gowal</td>
<td class="space_left_0">Bgyl@gmail.com</td>
<td class="space_left_0">+91-9865985896</td>
<td class="space_left_0">April 13,2014 10:15</td>
<td class="space_left_0">
 	<button class="btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>  <button class="btn" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>  <button class="btn" title="Manage Permissions"><i class="fa fa-tasks" aria-hidden="true"></i></button>
</td>
</tr>
<tr class="even gradeA">
<td>
	<div class="checkbox">
	<input type="checkbox" value="4" class="checkBoxClass" id="checkbox4">
	<label for="checkbox4"></label>
	</div>
</td>	
<td>Harold Pack</td>
<td class="space_left_0">hpf@gmail.com</td>
<td class="space_left_0">+91-58588985896</td>
<td class="space_left_0">April 13,2014 10:15</td>
<td class="space_left_0">
 	<button class="btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>  <button class="btn" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>  <button class="btn" title="Manage Permissions"><i class="fa fa-tasks" aria-hidden="true"></i></button>
</td>
</tr>
<tr class="odd gradeA">
<td>
	<div class="checkbox">
	<input type="checkbox" value="5" class="checkBoxClass" id="checkbox5">
	<label for="checkbox5"></label>
	</div>
</td>	
<td>Tride marold</td>
<td class="space_left_0">tr5mld@gmail.com</td>
<td class="space_left_0">+91-66588985896</td>
<td class="space_left_0">April 12,2014 23:51</td>
<td class="space_left_0">
 	<button class="btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>  <button class="btn" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>  <button class="btn" title="Manage Permissions"><i class="fa fa-tasks" aria-hidden="true"></i></button>
</td>
</tr>
<tr class="even gradeA">
<td>
	<div class="checkbox">
	<input type="checkbox" value="6" class="checkBoxClass" id="checkbox6">
	<label for="checkbox6"></label>
	</div>
</td>	
<td>Aride marold</td>
<td class="space_left_0">Ar5mld@gmail.com</td>
<td class="space_left_0">+91-66588985896</td>
<td class="space_left_0">April 12,2014 23:51</td>
<td class="space_left_0">
 	<button class="btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>  <button class="btn" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>  <button class="btn" title="Manage Permissions"><i class="fa fa-tasks" aria-hidden="true"></i></button>
</td>
</tr>
<tr class="gradeA">
<td>
	<div class="checkbox">
	<input type="checkbox" value="7" class="checkBoxClass" id="checkbox7">
	<label for="checkbox7"></label>
	</div>
</td>	
<td>Bide muyeish</td>
<td class="space_left_0">bhm25@gmail.com</td>
<td class="space_left_0">+91-66588985896</td>
<td class="space_left_0">April 12,2014 23:51</td>
<td class="space_left_0">
 	<button class="btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>  <button class="btn" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>  <button class="btn" title="Manage Permissions"><i class="fa fa-tasks" aria-hidden="true"></i></button>
</td>
</tr>
<tr class="gradeA">
<td>
	<div class="checkbox">
	<input type="checkbox" value="8" class="checkBoxClass" id="checkbox8">
	<label for="checkbox8"></label>
	</div>
</td>		
<td>Chandan vohra</td>
<td class="space_left_0">cv56@gmail.com</td>
<td class="space_left_0">+91-86858985896</td>
<td class="space_left_0">April 16,2014 23:51</td>
<td class="space_left_0">
 	<button class="btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>  <button class="btn" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>  <button class="btn" title="Manage Permissions"><i class="fa fa-tasks" aria-hidden="true"></i></button>
</td>
</tr>


</tbody>
</table>
</div>
</div>
 
</div>
 
</div>


<!-- <div class="btn-group pull-right m-b-8">
	<button type="button" class="btn btn-default" name="slideup_toggler" value="default" id="btnToggleSlideUpSize">Add new</button>
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="basicTable">
<thead>
<tr>
 
<th style="width:1%">
<button class="btn"><i class="pg-trash"></i>
</button>
</th>
<th style="width:20%">Username</th>
<th style="width:20%">Email</th>
<th style="width:29%">Phone No.</th>
<th style="width:15%">Action</th>
<th style="width:15%">Last Update</th>
</tr>
</thead>
<tbody>
<tr>
<td class="v-align-middle">
<div class="checkbox ">
<input type="checkbox" value="3" id="checkbox1">
<label for="checkbox1"></label>
</div>
</td>
<td class="v-align-middle ">
<p>John Snow</p>
</td>
<td class="v-align-middle">
<p>Js12@gmail.com</p>
</td>
<td class="v-align-middle">
<p>+91-865965889</p>
</td>
<td class="v-align-middle">
<p>Not yet</p>
</td>
<td class="v-align-middle">
<p>April 13,2014 10:13</p>
</td>
</tr>


<tr>
<td class="v-align-middle">
<div class="checkbox ">
<input type="checkbox" value="3" id="checkbox2">
<label for="checkbox2"></label>
</div>
</td>
<td class="v-align-middle ">
<p>Andrew garfield</p>
</td>
<td class="v-align-middle">
<p>Andrew122@gmail.com</p>
</td>
<td class="v-align-middle">
<p>+91-2365898965</p>
</td>
<td class="v-align-middle">
<p>not yet</p>
</td>
<td class="v-align-middle">
<p>April 13,2014 10:13</p>
</td>
</tr>

</tbody>
</table>
</div>
</div> -->
</div>
 
</div>
 
 


<div class="modal fade stick-up" id="addNewAppModal" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header clearfix ">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
</button>
<h4 class="p-b-5"><span class="semi-bold">Add</span> Sub-Admin</h4>
</div>
<div class="modal-body">
<!-- <p class="small-text">Create a new app using this form, make sure you fill them all</p> -->
<form id="form-personal" role="form" autocomplete="off">


<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Username</label>
<input type="text" class="form-control" name="username" placeholder="Minimum of 4 characters." required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Email</label>
<input type="email" class="form-control" name="email" placeholder="" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Phone No.</label>
<input type="text" class="form-control" name="phone" placeholder="" required>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-sm-6">
<div class="form-group form-group-default required">
<label>Password</label>
<input type="text" class="form-control" name="firstName" name="password" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-group-default">
<label>Password Confirmation</label>
<input type="text" class="form-control" name="lastName" name="password_confirmation" required>
</div>
</div>
</div>
<br/>





</div>
<div class="clearfix"></div>
<div class="modal-footer">
<button id="add-app" type="button" class="btn btn-primary  btn-cons">Create new User</button>
<button type="button" class="btn btn-cons" data-dismiss="modal">Close</button>
</div>
</form>

</div>
</div>
</div>




<div class="modal fade slide-up disable-scroll" id="modalSlideUp" tabindex="-1" role="dialog" aria-hidden="false">
<div class="modal-dialog ">
<div class="modal-content-wrapper">
<div class="modal-content">
<div class="modal-header heading_style1  clearfix text-left">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-25"></i>
</button>
<!-- <h5>Payment <span class="semi-bold">Information</span></h5>
<p class="p-b-10">We need payment information inorder to process your order</p> -->


		<div class="heading_title panel-title">User <span class="semi-bold">Addition</span></div>
	
</div>
<div class="modal-body">
	<div class="panel-body">
<form id="form-personal" role="form" autocomplete="off">


<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Username</label>
<input type="text" class="form-control" name="username" placeholder="Minimum of 4 characters." required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Email</label>
<input type="email" class="form-control" name="email" placeholder="" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Phone No.</label>
<input type="text" class="form-control" name="phone" placeholder="" required>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-sm-6">
<div class="form-group form-group-default required">
<label>Password</label>
<input type="text" class="form-control" name="firstName" name="password" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-group-default">
<label>Password Confirmation</label>
<input type="text" class="form-control" name="lastName" name="password_confirmation" required>
</div>
</div>
</div>
<br/>


<div class="clearfix"></div>
<button class="btn btn-primary" type="submit" style="margin-left: 38%;">Create new User</button>
</form>
</div>



</div>
</div>
</div>
 
</div>
</div>





 
<div class="overlay hide" data-pages="search">
 
<div class="overlay-content has-results m-t-20">
 
<div class="container-fluid">
 
<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
 
 
<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>
 
</div>
 
<div class="container-fluid">
 
<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>
 
</div>
 
<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">
 
<div class="">
 
<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>
 
<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>
 
 
<div class="">
 
<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>
 
<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>
 
 
<div class="">
 
<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>
 
<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>
 
</div>
<div class="col-md-6">
 
<div class="">
 
<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>
 
<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>
 
 
<div class="">
 
<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>
 
<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>
 
 
<div class="">
 
<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>
 
<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via google plus</p>
</div>
</div>
 
</div>
</div>
</div>
</div>
 
</div>
 
</div>
 
 

@endsection
