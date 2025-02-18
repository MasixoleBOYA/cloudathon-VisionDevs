
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>virtual capital list - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;}
.event-schedule-area .section-title .title-text {
    margin-bottom: 50px;
}

.event-schedule-area .tab-area .nav-tabs {
    border-bottom: inherit;
}

.event-schedule-area .tab-area .nav {
    border-bottom: inherit;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-top: 80px;
}

.event-schedule-area .tab-area .nav-item {
    margin-bottom: 75px;
}
.event-schedule-area .tab-area .nav-item .nav-link {
    text-align: center;
    font-size: 22px;
    color: #333;
    font-weight: 600;
    border-radius: inherit;
    border: inherit;
    padding: 0px;
    text-transform: capitalize !important;
}
.event-schedule-area .tab-area .nav-item .nav-link.active {
    color: #4125dd;
    background-color: transparent;
}

.event-schedule-area .tab-area .tab-content .table {
    margin-bottom: 0;
    width: 80%;
}
.event-schedule-area .tab-area .tab-content .table thead td,
.event-schedule-area .tab-area .tab-content .table thead th {
    border-bottom-width: 1px;
    font-size: 20px;
    font-weight: 600;
    color: #252525;
}
.event-schedule-area .tab-area .tab-content .table td,
.event-schedule-area .tab-area .tab-content .table th {
    border: 1px solid #b7b7b7;
    padding-left: 30px;
}
.event-schedule-area .tab-area .tab-content .table tbody th .heading,
.event-schedule-area .tab-area .tab-content .table tbody td .heading {
    font-size: 16px;
    text-transform: capitalize;
    margin-bottom: 16px;
    font-weight: 500;
    color: #252525;
    margin-bottom: 6px;
}
.event-schedule-area .tab-area .tab-content .table tbody th span,
.event-schedule-area .tab-area .tab-content .table tbody td span {
    color: #4125dd;
    font-size: 18px;
    text-transform: uppercase;
    margin-bottom: 6px;
    display: block;
}
.event-schedule-area .tab-area .tab-content .table tbody th span.date,
.event-schedule-area .tab-area .tab-content .table tbody td span.date {
    color: #656565;
    font-size: 14px;
    font-weight: 500;
    margin-top: 15px;
}
.event-schedule-area .tab-area .tab-content .table tbody th p {
    font-size: 14px;
    margin: 0;
    font-weight: normal;
}

.event-schedule-area-two .section-title .title-text h2 {
    margin: 0px 0 15px;
}

.event-schedule-area-two ul.custom-tab {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 30px;
}
.event-schedule-area-two ul.custom-tab li {
    margin-right: 70px;
    position: relative;
}
.event-schedule-area-two ul.custom-tab li a {
    color: #252525;
    font-size: 25px;
    line-height: 25px;
    font-weight: 600;
    text-transform: capitalize;
    padding: 35px 0;
    position: relative;
}
.event-schedule-area-two ul.custom-tab li a:hover:before {
    width: 100%;
}
.event-schedule-area-two ul.custom-tab li a:before {
    position: absolute;
    left: 0;
    bottom: 0;
    content: "";
    background: #4125dd;
    width: 0;
    height: 2px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
.event-schedule-area-two ul.custom-tab li a.active {
    color: #4125dd;
}

.event-schedule-area-two .primary-btn {
    margin-top: 40px;
}

.event-schedule-area-two .tab-content .table {
    -webkit-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
    margin-bottom: 0;
}
.event-schedule-area-two .tab-content .table thead {
    background-color: #007bff;
    color: #fff;
    font-size: 20px;
}
.event-schedule-area-two .tab-content .table thead tr th {
    padding: 20px;
    border: 0;
}
.event-schedule-area-two .tab-content .table tbody {
    background: #fff;
}
.event-schedule-area-two .tab-content .table tbody tr.inner-box {
    border-bottom: 1px solid #dee2e6;
}
.event-schedule-area-two .tab-content .table tbody tr th {
    border: 0;
    padding: 30px 20px;
    vertical-align: middle;
}
.event-schedule-area-two .tab-content .table tbody tr th .event-date {
    color: #252525;
    text-align: center;
}
.event-schedule-area-two .tab-content .table tbody tr th .event-date span {
    font-size: 50px;
    line-height: 50px;
    font-weight: normal;
}
.event-schedule-area-two .tab-content .table tbody tr td {
    padding: 30px 20px;
    vertical-align: middle;
}
.event-schedule-area-two .tab-content .table tbody tr td .r-no span {
    color: #252525;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap h3 a {
    font-size: 20px;
    line-height: 20px;
    color: #cf057c;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap h3 a:hover {
    color: #4125dd;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .categories {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin: 10px 0;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .categories a {
    color: #252525;
    font-size: 16px;
    margin-left: 10px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .categories a:before {
    content: "\f07b";
    font-family: fontawesome;
    padding-right: 5px;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .time span {
    color: #252525;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .organizers {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin: 10px 0;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .organizers a {
    color: #4125dd;
    font-size: 16px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .organizers a:hover {
    color: #4125dd;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .organizers a:before {
    content: "\f007";
    font-family: fontawesome;
    padding-right: 5px;
}
.event-schedule-area-two .tab-content .table tbody tr td .primary-btn {
    margin-top: 0;
    text-align: center;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-img img {
    width: 100px;
    height: 100px;
    border-radius: 8px;
}

    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="event-schedule-area-two bg-color pad100">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title text-center">
<div class="title-text">
<h2>Feed Page</h2>
</div>
<!-- <p>
This should be feed page.
</p> -->
</div>
</div>

</div>

<div class="row">
<div class="col-lg-12">
<ul class="nav custom-tab" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active show" id="home-taThursday" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All</a>
</li>
<li class="nav-item">
<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tech</a>
</li>
<li class="nav-item">
<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Finance</a>
</li>
<li class="nav-item d-none d-lg-block">
<a class="nav-link" id="sunday-tab" data-toggle="tab" href="#sunday" role="tab" aria-controls="sunday" aria-selected="false">Social Impact</a>
</li>
<li class="nav-item mr-0 d-none d-lg-block">
<a class="nav-link" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-selected="false">Other</a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade active show" id="home" role="tabpanel">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th class="text-center" scope="col">Date Posted</th>
<th scope="col">Ventures</th>
<th scope="col">Business Description</th>

<th class="text-center" scope="col"></th>
</tr>
</thead>
<tbody>
<tr class="inner-box">
<th scope="row">
<div class="event-date">
<span>16</span>
<p>Novembar</p>
</div>
</th>
<td>
<div class="event-img">
<img src="/assets/img/logo/random-logo-1.png" alt />
</div>
</td>
<td>
<div class="event-wrap">
<h3><a href="#">Dev Tech</a></h3>
<p> Dev Tech delivers innovative, custom software solutions to enhance productivity and drive growth. Our services include cloud computing, AI, machine learning, data analytics, and cybersecurity. We offer scalable, secure, and tailored software, leveraging the latest technologies to meet your unique business needs. With an expert team and continuous support, Dev Tech ensures optimal performance and adaptability. Partner with us for cutting-edge, secure software solutions.
</p>
</div>
</td>

<td>
<div class="primary-btn">
<a class="btn btn-primary" href="#">Read More</a>
</div>
</td>
</tr>
<tr class="inner-box">
<th scope="row">
<div class="event-date">
<span>20</span>
<p>Novembar</p>
</div>
</th>
<td>
<div class="event-img">
<img src="/assets/img/logo/insurance.jpeg" alt />
</div>
</td>
<td>
<div class="event-wrap">
<h3><a href="#">Life Saver</a></h3>
<p> Life Saver offers tailored insurance solutions designed to protect what matters most. We provide a wide range of coverage options, including health, auto, home, and life insurance, all customized to meet your specific needs. Our expert team ensures you get the best value by finding the most affordable and comprehensive policies. With a focus on exceptional customer service and continuous support, Insurance Saver makes managing your insurance simple and stress-free. Partner with us for reliable, cost-effective insurance solutions.
</p>    
</div>
</td>

<td>
<div class="primary-btn">
<a class="btn btn-primary" href="#">Read More</a>
</div>
</td>
</tr>
<tr class="inner-box border-bottom-0">
<th scope="row">
<div class="event-date">
<span>18</span>
<p>Novembar</p>
</div>
</th>
<td>
<div class="event-img">
<img src="/assets/img/logo/eagle.jpeg" alt />
</div>
</td>
<td>
<div class="event-wrap">
<h3><a href="#">Aviation Smart Solutions</a></h3>
<p>Aviation Smart Solutions delivers innovative, customized services to optimize aviation operations. We offer advanced solutions in fleet management, maintenance, logistics, and safety compliance, designed to enhance efficiency and reduce costs. Our expert team leverages cutting-edge technology to provide real-time data and insights, ensuring your operations run smoothly and securely. With a commitment to exceptional service and continuous support, Aviation Smart Solutions helps your aviation business soar to new heights. Partner with us for smart, reliable aviation solutions.
</p>
</div>
</td>

<td>
<div class="primary-btn">
<a class="btn btn-primary" href="#">Read More</a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th scope="col">Date</th>
<th scope="col">Speakers</th>
<th scope="col">Session</th>
<th scope="col">Venue</th>
<th scope="col">Venue</th>
</tr>
</thead>
<tbody>
<tr class="inner-box">
<th scope="row">
<div class="event-date">
<span>16</span>
<p>Novembar</p>
</div>
</th>
<td>
<div class="event-img">
<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt />
</div>
</td>
<td>
<div class="event-wrap">
<h3><a href="#">Toni Duggan</a></h3>
<div class="meta">
<div class="organizers">
<a href="#">Aslan Lingker</a>
</div>
<div class="categories">
<a href="#">Inspire</a>
</div>
<div class="time">
<span>05:35 AM - 08:00 AM 2h 25'</span>
</div>
</div>
</div>
</td>
