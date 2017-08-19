
@extends('layouts.master')

@section('content')
 
<div class="page-content-wrapper ">
 
<div class="content ">
 
<div class="container-fluid container-fixed-lg">
<div id="rootwizard" class="m-t-50">
 
<ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm">
<li class="active">
<a data-toggle="tab" href="#tab1"><i class="fa fa-info tab-icon"></i> <span>Basic Information</span></a>
</li>
<li class="">
<a data-toggle="tab" href="#tab2"><i class="fa fa-info-circle tab-icon"></i> <span>Detailed Information</span></a>
</li>
<li class="">
<a data-toggle="tab" href="#tab3"><i class="fa fa-tasks tab-icon"></i> <span>Account Information</span></a>
</li>
<li class="">
<a data-toggle="tab" href="#tab4"><i class="fa fa-check tab-icon"></i> <span>Summary</span></a>
</li>
</ul>
 
<div class="tab-content">
<div class="tab-pane padding-20 active slide-left" id="tab1">
<div class="row row-same-height">
<div class="col-md-5 b-r b-dashed b-grey sm-b-b">
	<div class="padding-30 m-t-50">
	
	<h2>Basic Information About The Restaurant!</h2>
	<p>Discover goods you'll love from brands that inspire. The easiest way to open your own online store. Discover amazing stuff or open your own store for free!</p>
	<!-- <p class="small hint-text">All the fields in the form on the right is required to fill to proceed to the next part of the wizard.</p> -->
	</div>
</div>
<div class="col-md-7">
<div class="padding-30">



<form role="form">

<div class="form-group form-group-default required">
<label>Restaurant Name:</label>
<input type="text" class="form-control" required>
</div>

<br/>
<div class="form-group form-group-default required">
<label>Restaurant Address:</label>
<input type="text" id="geo_input" class="form-control" required>
</div>

<br/>
<div class="row">
<div class="col-sm-6">
<div class="form-group form-group-default required">
<label>Restaurant Email:</label>
<input type="email" class="form-control" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-group-default">
<label>Restaurant Contact No.</label>
<input type="text" class="form-control">
</div>
</div>
</div>


<br/>
<div class="col-sm-3"></div>
<div class="col-sm-6" style="text-align: center;">
<label data-placement="center"><b>Business Hours:</b></label>	
<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">	
		<input id="open_time" type="text" class="form-control">
		<span class="input-group-addon">to</span>
		<input id="close_time" type="text" class="form-control">
</div>
</div>
<div class="col-sm-3"></div>

</form>

</div>
</div>


</div>
</div>
<div class="tab-pane slide-left padding-20" id="tab2">
<div class="row row-same-height">
<div class="col-md-5 b-r b-dashed b-grey ">
<div class="padding-30 m-t-50">
<h2>Your Information is safe with us!</h2>
<p>We respect your privacy and protect it with strong encryption, plus strict policies . Two-step verification, which we encourage all our customers to use.</p>

</div>
</div>
<div class="col-md-7">
<div class="padding-30">
<form role="form">

<label><b>Cuisines Offered</b></label>
<select class="full-width" data-placeholder="Select Cuisines" data-init-plugin="select2" multiple>
<optgroup label="Type 1">
<option value="Jim">Indian</option>
<option value="John">Chinese</option>
</optgroup>
<optgroup label="Type 2">
<option value="jp">Japanese</option>
<option value="itl">Italian</option>
<option value="con">Continental</option>
</optgroup>
</select>

<br/>
<br/>

<label><b>Restaurant Type:</b></label>
<br/>
<div class="checkbox-iblock checkbox check-primary checkbox-circle " style="">
<input type="checkbox" checked="checked" value="1" id="checkbox9">
<label for="checkbox9">Pure Veg</label>
</div>
<div class="checkbox-iblock checkbox check-primary checkbox-circle">
<input type="checkbox" checked="checked" value="1" id="checkbox8">
<label for="checkbox8">Non Veg</label>
</div>

<br/>
<br/>
<div class="row">
<div class="col-sm-6">
<div class="form-group form-group-default required">
<label>Estimated delivery time: </label>
<input type="text" class="form-control" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-group-default">
<label>Average Order Cost: (Approx)</label>
<input type="text" class="form-control">
</div>
</div>
</div>

<br/>
<label><b>Service Area:</b></label>
<div class="irs-wrapper blue">
<input type="text" id="example_6" name="example_name" value="1"/>
</div>

<br/> 
<label><b>Amenities:</b></label>
<br/>
	<div class="checkbox-iblock checkbox check-success checkbox-circle">
	<input type="checkbox" checked="checked" value="1" id="checkbox4">
	<label for="checkbox4">Bar</label>
	</div>
	<div class="checkbox-iblock checkbox check-success checkbox-circle">
	<input type="checkbox" checked="checked" value="1" id="checkbox5">
	<label for="checkbox5">Wifi</label>
	</div>
	<div class="checkbox-iblock checkbox check-success checkbox-circle">
	<input type="checkbox" checked="checked" value="1" id="checkbox7">
	<label for="checkbox7">Parking</label>
	</div>
	<div class="checkbox-iblock checkbox check-success checkbox-circle">
	<input type="checkbox" checked="checked" value="1" id="checkbox6">
	<label for="checkbox6">Smoking Area</label>
	</div>
	<div class="checkbox-iblock checkbox check-success checkbox-circle">
	<input type="checkbox" checked="checked" value="1" id="checkbox3">
	<label for="checkbox3">Private Dining</label>
	</div>



</form>
</div>
</div>
</div>
</div>
<div class="tab-pane slide-left padding-20" id="tab3">
<div class="row row-same-height">
<div class="col-md-5 b-r b-dashed b-grey ">
<div class="padding-30 m-t-50">
<h2>We Secured Your Line</h2>
<p>Below is a sample page for your cart , Created using pages design UI Elementes</p>


</div>
</div>


<div class="col-md-7">
<div class="padding-30">



	<br/>
	<div class="form-group form-group-default required">
	<label>Username:</label>
	<input type="text" class="form-control" required>
	</div>

	<br/>
	<div class="row">
	<div class="col-sm-6">
	<div class="form-group form-group-default required">
	<label>Password:</label>
	<input type="password" class="form-control" required>
	</div>
	</div>
	<div class="col-sm-6">
	<div class="form-group form-group-default">
	<label>Confirm Password:</label>
	<input type="password" class="form-control">
	</div>
	</div>
	</div>
	
	<br/>
	<div class="form-group form-group-default required">
	<label>Emergency Contact Number:</label>
	<input type="text" class="form-control" required>
	</div>


</div>
</div>
</div>
</div>
<div class="tab-pane slide-left padding-20" id="tab4">
<h1>Thank you.</h1>
</div>
<div class="padding-20 bg-white">
<ul class="pager wizard">
<li class="next">
<button class="btn btn-primary btn-cons btn-animated from-left fa fa-truck pull-right" type="button">
<span>Next</span>
</button>
</li>
<li class="next finish hidden">
<button class="btn btn-primary btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
<span>Finish</span>
</button>
</li>
<li class="previous first hidden">
<button class="btn btn-default btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
<span>First</span>
</button>
</li>
<li class="previous">
<button class="btn btn-default btn-cons pull-right" type="button">
<span>Previous</span>
</button>
</li>
</ul>
</div>
<div class="wizard-footer padding-20 bg-master-light">
<p class="small hint-text pull-left no-margin">
The Top Content Is Soley Created using pages UI Elements such as Invoice, Tabs, Form Layouts etc. and are prior for representation Purpose Only.
</p>
<div class="pull-right">
<img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
</div>
<div class="clearfix"></div>
</div>
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

