
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>bs4 profile with messages and edit - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:20px;
}
/* User Cards */
.user-box {
    width: 110px;
    margin: auto;
    margin-bottom: 20px;
    
}

.user-box img {
    width: 100%;
    border-radius: 50%;
	padding: 3px;
	background: #fff;
	-webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    -ms-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.profile-card-2 .card {
	position:relative;
}

.profile-card-2 .card .card-body {
	z-index:1;
}

.profile-card-2 .card::before {
    content: "";
    position: absolute;
    top: 0px;
    right: 0px;
    left: 0px;
	border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    height: 112px;
    background-color: #e6e6e6;
}

.profile-card-2 .card.profile-primary::before {
	background-color: #008cff;
}
.profile-card-2 .card.profile-success::before {
	background-color: #15ca20;
}
.profile-card-2 .card.profile-danger::before {
	background-color: #fd3550;
}
.profile-card-2 .card.profile-warning::before {
	background-color: #ff9700;
}
.profile-card-2 .user-box {
	margin-top: 30px;
}

.profile-card-3 .user-fullimage {
	position:relative;
}

.profile-card-3 .user-fullimage .details{
	position: absolute;
    bottom: 0;
    left: 0px;
	width:100%;
}

.profile-card-4 .user-box {
    width: 110px;
    margin: auto;
    margin-bottom: 10px;
    margin-top: 15px;
}

.profile-card-4 .list-icon {
    display: table-cell;
    font-size: 30px;
    padding-right: 20px;
    vertical-align: middle;
    color: #223035;
}

.profile-card-4 .list-details {
	display: table-cell;
	vertical-align: middle;
	font-weight: 600;
    color: #223035;
    font-size: 15px;
    line-height: 15px;
}

.profile-card-4 .list-details small{
	display: table-cell;
	vertical-align: middle;
	font-size: 12px;
	font-weight: 400;
    color: #808080;
}

/*Nav Tabs & Pills */
.nav-tabs .nav-link {
    color: #223035;
	font-size: 12px;
    text-align: center;
	letter-spacing: 1px;
    font-weight: 600;
	margin: 2px;
    margin-bottom: 0;
	padding: 12px 20px;
    text-transform: uppercase;
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
	
}
.nav-tabs .nav-link:hover{
    border: 1px solid transparent;
}
.nav-tabs .nav-link i {
    margin-right: 2px;
	font-weight: 600;
}

.top-icon.nav-tabs .nav-link i{
	margin: 0px;
	font-weight: 500;
	display: block;
    font-size: 20px;
    padding: 5px 0;
}

.nav-tabs-primary.nav-tabs{
	border-bottom: 1px solid #008cff;
}

.nav-tabs-primary .nav-link.active, .nav-tabs-primary .nav-item.show>.nav-link {
    color: #008cff;
    background-color: #fff;
    border-color: #008cff #008cff #fff;
    border-top: 3px solid #008cff;
}

.nav-tabs-success.nav-tabs{
	border-bottom: 1px solid #15ca20;
}

.nav-tabs-success .nav-link.active, .nav-tabs-success .nav-item.show>.nav-link {
    color: #15ca20;
    background-color: #fff;
    border-color: #15ca20 #15ca20 #fff;
    border-top: 3px solid #15ca20;
}

.nav-tabs-info.nav-tabs{
	border-bottom: 1px solid #0dceec;
}

.nav-tabs-info .nav-link.active, .nav-tabs-info .nav-item.show>.nav-link {
    color: #0dceec;
    background-color: #fff;
    border-color: #0dceec #0dceec #fff;
    border-top: 3px solid #0dceec;
}

.nav-tabs-danger.nav-tabs{
	border-bottom: 1px solid #fd3550;
}

.nav-tabs-danger .nav-link.active, .nav-tabs-danger .nav-item.show>.nav-link {
    color: #fd3550;
    background-color: #fff;
    border-color: #fd3550 #fd3550 #fff;
    border-top: 3px solid #fd3550;
}

.nav-tabs-warning.nav-tabs{
	border-bottom: 1px solid #ff9700;
}

.nav-tabs-warning .nav-link.active, .nav-tabs-warning .nav-item.show>.nav-link {
    color: #ff9700;
    background-color: #fff;
    border-color: #ff9700 #ff9700 #fff;
    border-top: 3px solid #ff9700;
}

.nav-tabs-dark.nav-tabs{
	border-bottom: 1px solid #223035;
}

.nav-tabs-dark .nav-link.active, .nav-tabs-dark .nav-item.show>.nav-link {
    color: #223035;
    background-color: #fff;
    border-color: #223035 #223035 #fff;
    border-top: 3px solid #223035;
}

.nav-tabs-secondary.nav-tabs{
	border-bottom: 1px solid #75808a;
}
.nav-tabs-secondary .nav-link.active, .nav-tabs-secondary .nav-item.show>.nav-link {
    color: #75808a;
    background-color: #fff;
    border-color: #75808a #75808a #fff;
    border-top: 3px solid #75808a;
}

.tabs-vertical .nav-tabs .nav-link {
    color: #223035;
    font-size: 12px;
    text-align: center;
    letter-spacing: 1px;
    font-weight: 600;
    margin: 2px;
    margin-right: -1px;
    padding: 12px 1px;
    text-transform: uppercase;
    border: 1px solid transparent;
    border-radius: 0;
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem;
}

.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #dee2e6;
}

.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
    border-bottom: 1px solid #dee2e6;
    border-right: 0;
    border-left: 1px solid #dee2e6;
}

.tabs-vertical-primary.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #008cff;
}

.tabs-vertical-primary.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-link.active {
    color: #008cff;
    background-color: #fff;
    border-color: #008cff #008cff #fff;
    border-bottom: 1px solid #008cff;
    border-right: 0;
    border-left: 3px solid #008cff;
}

.tabs-vertical-success.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #15ca20;
}

.tabs-vertical-success.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-success.tabs-vertical .nav-tabs .nav-link.active {
    color: #15ca20;
    background-color: #fff;
    border-color: #15ca20 #15ca20 #fff;
    border-bottom: 1px solid #15ca20;
    border-right: 0;
    border-left: 3px solid #15ca20;
}

.tabs-vertical-info.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #0dceec;
}

.tabs-vertical-info.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-info.tabs-vertical .nav-tabs .nav-link.active {
    color: #0dceec;
    background-color: #fff;
    border-color: #0dceec #0dceec #fff;
    border-bottom: 1px solid #0dceec;
    border-right: 0;
    border-left: 3px solid #0dceec;
}

.tabs-vertical-danger.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #fd3550;
}

.tabs-vertical-danger.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-link.active {
    color: #fd3550;
    background-color: #fff;
    border-color: #fd3550 #fd3550 #fff;
    border-bottom: 1px solid #fd3550;
    border-right: 0;
    border-left: 3px solid #fd3550;
}

.tabs-vertical-warning.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #ff9700;
}

.tabs-vertical-warning.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-link.active {
    color: #ff9700;
    background-color: #fff;
    border-color: #ff9700 #ff9700 #fff;
    border-bottom: 1px solid #ff9700;
    border-right: 0;
    border-left: 3px solid #ff9700;
}

.tabs-vertical-dark.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #223035;
}

.tabs-vertical-dark.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-link.active {
    color: #223035;
    background-color: #fff;
    border-color: #223035 #223035 #fff;
    border-bottom: 1px solid #223035;
    border-right: 0;
    border-left: 3px solid #223035;
}

.tabs-vertical-secondary.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #75808a;
}

.tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-link.active {
    color: #75808a;
    background-color: #fff;
    border-color: #75808a #75808a #fff;
    border-bottom: 1px solid #75808a;
    border-right: 0;
    border-left: 3px solid #75808a;
}

.nav-pills .nav-link {
    border-radius: .25rem;
    color: #223035;
    font-size: 12px;
    text-align: center;
	letter-spacing: 1px;
    font-weight: 600;
    text-transform: uppercase;
	margin: 3px;
    padding: 12px 20px;
	-webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease; 

}

.nav-pills .nav-link:hover {
    background-color:#f4f5fa;
}

.nav-pills .nav-link i{
	margin-right:2px;
	font-weight: 600;
}

.top-icon.nav-pills .nav-link i{
	margin: 0px;
	font-weight: 500;
	display: block;
    font-size: 20px;
    padding: 5px 0;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #008cff;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(0, 140, 255, 0.5);
}

.nav-pills-success .nav-link.active, .nav-pills-success .show>.nav-link {
    color: #fff;
    background-color: #15ca20;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(21, 202, 32, .5);
}

.nav-pills-info .nav-link.active, .nav-pills-info .show>.nav-link {
    color: #fff;
    background-color: #0dceec;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(13, 206, 236, 0.5);
}

.nav-pills-danger .nav-link.active, .nav-pills-danger .show>.nav-link{
    color: #fff;
    background-color: #fd3550;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(253, 53, 80, .5);
}

.nav-pills-warning .nav-link.active, .nav-pills-warning .show>.nav-link {
    color: #fff;
    background-color: #ff9700;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(255, 151, 0, .5);
}

.nav-pills-dark .nav-link.active, .nav-pills-dark .show>.nav-link {
    color: #fff;
    background-color: #223035;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(34, 48, 53, .5);
}

.nav-pills-secondary .nav-link.active, .nav-pills-secondary .show>.nav-link {
    color: #fff;
    background-color: #75808a;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(117, 128, 138, .5);
}
.card .tab-content{
	padding: 1rem 0 0 0;
}

.z-depth-3 {
    -webkit-box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);
    box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);
}
    </style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="profile-card-4 z-depth-3">
<div class="card">
<div class="card-body text-center bg-primary rounded-top">
<div class="user-box">
<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user avatar">
</div>
    <h5 class="mb-1 text-white">Josh Daniel</h5>
    <h6 class="text-light">Entrepreneur</h6>
</div>
<div class="card-body">
<ul class="list-group shadow-none">
<li class="list-group-item">
<div class="list-icon">
<i class="fa fa-phone-square"></i>
</div>
<div class="list-details">
<span>073 7772 121</span>
<small>Mobile Number</small>
</div>
</li>
<li class="list-group-item">
<div class="list-icon">
<i class="fa fa-envelope"></i>
</div>
<div class="list-details">
<span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdd4d3dbd2fdd8c5dcd0cdd1d893ded2d0">josh001@gmail.com</a></span>
<small>Email Address</small>
</div>
</li>
<li class="list-group-item">
<div class="list-icon">
<i class="fa fa-globe"></i>
</div>
<div class="list-details">
<span>www.joshdaniel.com</span>
<small>Website Address</small>
</div>
</li>
</ul>
<div class="row text-center mt-4">
<!--
<div class="col p-2">
<h4 class="mb-1 line-height-5">154</h4>
<small class="mb-0 font-weight-bold">Projects</small>
</div>


<div class="col p-2">
<h4 class="mb-1 line-height-5">2.2k</h4>
<small class="mb-0 font-weight-bold">Followers</small>
</div>

-->
<div class="col p-2">
<h4 class="mb-1 line-height-5">25</h4>
<small class="mb-0 font-weight-bold">Years of age</small>
<a href
</div>


</div>
</div>
<div class="card-footer text-center">
<a href="javascript:void()" class="btn-social btn-facebook waves-effect waves-light m-1"><i class="fa fa-facebook"></i></a>
<a href="javascript:void()" class="btn-social btn-google-plus waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a>
<a href="javascript:void()" class="list-inline-item btn-social btn-behance waves-effect waves-light"><i class="fa fa-behance"></i></a>
<a href="javascript:void()" class="list-inline-item btn-social btn-dribbble waves-effect waves-light"><i class="fa fa-dribbble"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="card z-depth-3">
<div class="card-body">
<ul class="nav nav-pills nav-pills-primary nav-justified">
<li class="nav-item">
<a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
</li>
<li class="nav-item">
<a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Messages</span></a>
</li>
<!-- <li class="nav-item">
<a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
</li> -->
</ul>
<div class="tab-content p-3">
<div class="tab-pane active show" id="profile">
<h1 class="mb-3">Sweet Delights Bakery</h1>
<div class="row">
<div class="col-md-6">
<!-- <h6>About</h6> -->
<p>
<div class="container">

        <h6>Mission</h6>
        <p>Sweet Delights Bakery brings joy through freshly baked goods. We blend traditional techniques with innovative recipes for a unique bakery experience.</p>

        <h6>Products</h6>
        <ul>
            <li><strong>Artisanal Breads:</strong> Handcrafted, baked fresh daily.</li>
            <li><strong>Gourmet Pastries:</strong> Croissants, danishes, éclairs, made with premium ingredients.</li>
            <li><strong>Custom Cakes:</strong> Tailored designs for special occasions.</li>
            <li><strong>Gluten-Free/Vegan:</strong> Options for everyone to enjoy.</li>
        </ul>

        <h6>Unique Selling Points</h6>
        <ul>
            <li><strong>Quality Ingredients:</strong> Locally sourced for top quality.</li>
            <li><strong>Community Focused:</strong> Collaborations and local event participation.</li>
            <li><strong>Sustainability:</strong> Eco-friendly practices and packaging.</li>
            <li><strong>Customer Experience:</strong> A welcoming space for friends and family.</li>
        </ul>

        <h6>Funding Purpose</h6>
        <ul>
            <li><strong>Equipment Upgrades:</strong> Enhance production with new baking tools.</li>
            <li><strong>Location Expansion:</strong> Open a second bakery to serve more customers.</li>
            <li><strong>Marketing:</strong> Increase brand awareness and attract new customers.</li>
            <li><strong>Sustainable Practices:</strong> More organic and locally-produced ingredients.</li>
        </ul>

        <p>Join us in making Sweet Delights Bakery a community staple, offering the finest baked goods with a touch of love and care.</p>
    </div>
</div>

<!-- <div class="col-md-6">
<h6>Recent badges</h6>
<a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
<a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
<a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
<a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
<a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
<a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
<a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
<a href="javascript:void();" class="badge badge-dark badge-pill">responsive-design</a>
<hr>
<span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
<span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
<span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
</div> -->


<!-- <div class="col-md-12">
<h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
<table class="table table-hover table-striped">
<tbody>
<tr>
<td>
<strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
</td>
</tr>
<tr>
<td>
<strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
</td>
</tr>
<tr>
<td>
<strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
</td>
</tr>
<tr>
<td>
<strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
</td>
</tr>
<tr>
<td>
<strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
</td>
</tr>
</tbody>
</table>
</div> -->
</div>

</div>

<div class="tab-pane" id="messages">
<div class="alert alert-info alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert">×</button>
<div class="alert-icon">
<i class="icon-info"></i>
</div>
<div class="alert-message">

<div class="container">
        <h1>Contact Information</h1>
        <ul>
            <li><strong>Sweet Delights Bakery</strong></li>
            <li><strong>Address:</strong> 123 Baker's Lane, Johannesburg, ZA 2000</li>
            <li><strong>Phone:</strong> +27 10 123 4567</li>
            <li><strong>Email:</strong> <a href="mailto:info@sweetdelightsbakery.co.za">info@sweetdelightsbakery.co.za</a></li>
            <li><strong>Website:</strong> <a href="http://www.sweetdelightsbakery.co.za" target="_blank">www.sweetdelightsbakery.co.za</a></li>
        </ul>

        <h2>Social Media</h2>
        <ul>
            <li><strong>Facebook:</strong> <a href="http://facebook.com/sweetdelightsbakery" target="_blank">facebook.com/sweetdelightsbakery</a></li>
            <li><strong>Instagram:</strong> <a href="http://instagram.com/sweetdelightsbakery" target="_blank">instagram.com/sweetdelightsbakery</a></li>
            <li><strong>Twitter:</strong> <a href="http://twitter.com/sweetdelightsbakery" target="_blank">twitter.com/sweetdelightsbakery</a></li>
        </ul>
    </div>


</div>

<!--
</div>
<table class="table table-hover table-striped">
<tbody>
<tr>
<td>
<span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
</td>
</tr>
<tr>
<td>
<span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
</td>
</tr>
<tr>
<td>
<span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
</td>
</tr>
<tr>
<td>
<span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus.
</td>
</tr>
<tr>
<td>
<span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros.
</td>
</tr>
</tbody>
</table> -->
<!-- </div> -->
<!-- <div class="tab-pane" id="edit">
<form>
<div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label">First name</label>
<div class="col-lg-9">
<input class="form-control" type="text" value="Mark">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label">Last name</label>
<div class="col-lg-9">
<input class="form-control" type="text" value="Jhonsan">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label">Email</label>
<div class="col-lg-9">
<input class="form-control" type="email" value="mark@example.com">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label">Change profile</label>
<div class="col-lg-9">
<input class="form-control" type="file">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label">Website</label>
<div class="col-lg-9">
<input class="form-control" type="url" value>
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label">Address</label>
<div class="col-lg-9">
<input class="form-control" type="text" value placeholder="Street">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label"></label>
<div class="col-lg-6">
<input class="form-control" type="text" value placeholder="City">
</div>
<div class="col-lg-3">
<input class="form-control" type="text" value placeholder="State">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label">Username</label>
<div class="col-lg-9">
<input class="form-control" type="text" value="jhonsanmark">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label">Password</label>
<div class="col-lg-9">
<input class="form-control" type="password" value="11111122333">
</div>
</div>
<div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
<div class="col-lg-9">
<input class="form-control" type="password" value="11111122333">
</div>
</div> -->
<!-- <div class="form-group row">
<label class="col-lg-3 col-form-label form-control-label"></label>
<div class="col-lg-9">
<input type="reset" class="btn btn-secondary" value="Cancel">
<input type="button" class="btn btn-primary" value="Save Changes">
</div>
</div>
</form> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>