<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Glassy Login Form A Responsive Widget Template :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<style>
		html,
		body,
		div,
		span,
		applet,
		object,
		iframe,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		p,
		blockquote,
		pre,
		a,
		abbr,
		acronym,
		address,
		big,
		cite,
		code,
		del,
		dfn,
		em,
		img,
		ins,
		kbd,
		q,
		s,
		samp,
		small,
		strike,
		strong,
		sub,
		sup,
		tt,
		var,
		b,
		u,
		i,
		dl,
		dt,
		dd,
		ol,
		nav ul,
		nav li,
		fieldset,
		form,
		label,
		legend,
		table,
		caption,
		tbody,
		tfoot,
		thead,
		tr,
		th,
		td,
		article,
		aside,
		canvas,
		details,
		embed,
		figure,
		figcaption,
		footer,
		header,
		hgroup,
		menu,
		nav,
		output,
		ruby,
		section,
		summary,
		time,
		mark,
		audio,
		video {
			margin: 0;
			padding: 0;
			border: 0;
			font-size: 100%;
			font: inherit;
			vertical-align: baseline;
			background: gray;
		}
		article,
		aside,
		details,
		figcaption,
		figure,
		footer,
		header,
		hgroup,
		menu,
		nav,
		section {
			display: block;
		}
		ol,
		ul {
			list-style: none;
			margin: 0px;
			padding: 0px;
		}
		blockquote,
		q {
			quotes: none;
		}
		blockquote:before,
		blockquote:after,
		q:before,
		q:after {
			content: '';
			content: none;
		}
		table {
			border-collapse: collapse;
			border-spacing: 0;
		}
		/* start editing from here */
		a {
			text-decoration: none;
		}
		.txt-rt {
			text-align: right;
		}
		/* text align right */
		.txt-lt {
			text-align: left;
		}
		/* text align left */
		.txt-center {
			text-align: center;
		}
		/* text align center */
		.float-rt {
			float: right;
		}
		/* float right */
		.float-lt {
			float: left;
		}
		/* float left */
		.clear {
			clear: both;
		}
		/* clear float */
		.pos-relative {
			position: relative;
		}
		/* Position Relative */
		.pos-absolute {
			position: absolute;
		}
		/* Position Absolute */
		.vertical-base {
			vertical-align: baseline;
		}
		/* vertical align baseline */
		.vertical-top {
			vertical-align: top;
		}
		/* vertical align top */
		nav.vertical ul li {
			display: block;
		}
		/* vertical menu */
		nav.horizontal ul li {
			display: inline-block;
		}
		/* horizontal menu */
		img {
			max-width: 100%;
		}
		/*end reset*/
		body {
			font-family: 'Open Sans', sans-serif;
			background: url(../images/bann.jpg) no-repeat 0px 0px;
			background-size: cover;
			-webkit-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			-moz-background-size: cover;
			background-position: center;
			background-attachment: fixed;
		}
		/*--header--*/
		/* Header */
		.main-w3layouts-agileinfo {
			width: 30%;
			margin: 0 auto;
			padding: 4em 2em;
			background: rgba(255, 255, 255, 0.07);
			-webkit-box-shadow: 0 6px 12px 0 rgb(37, 37, 37);
			-moz-box-shadow: 0 6px 12px 0 rgb(37, 37, 37);
			box-shadow: 0 6px 43px 0 rgba(0, 0, 0, 0.4);
		}
		.wthree-form h2 {
			color: #fff;
			font-size: 20px;
			font-weight: 300;
			text-align: center;
			margin-bottom: 1.5em;
			letter-spacing: 3px;
			text-shadow: 3px 3px 4px #000;
		}
		h1 {
			text-align: center;
			font-size: 45px;
			font-weight: 300;
			margin: 40px 0;
			color: #fff;
			letter-spacing: 9px;
			text-shadow: 4px 4px 3px #000;
			word-spacing: 4px;
			font-weight: 500;
			font-family: 'Josefin Slab', serif;
		}
		.icon-w3 i {
			color: #ffffff;
			font-size: 19px;
			line-height: 49px;
		}
		.icon-w3 {
			display: inline-block;
			position: absolute;
			right: 0px;
			bottom: 0;
			width: 53px;
			height: 50px;
			text-align: center;
			background: #00c6d7;
		}
		form {
			margin: 0 auto;
			width: 100%;
		}
		.submit-agileits {
			text-align: center;
			margin-top: 2em;
		}
		.form-sub-w3 {
			position: relative;
			margin-bottom: 20px;
		}
		.form-sub-w3 input[type="text"],
		input[type="password"] {
			width: 85%;
			padding: 15px 66px 15px 19px;
			text-align: left;
			background-color: rgba(0, 0, 0, 0.16);
			border: 0;
			border-left: 2px solid #00c6d7;
			font-size: 15px;
			letter-spacing: 1.5px;
			color: #fff;
			outline: 0;
			-webkit-box-shadow: 0 6px 12px 0 rgb(37, 37, 37);
			-moz-box-shadow: 0 6px 12px 0 rgb(37, 37, 37);
			box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.4);
			font-family: 'Open Sans', sans-serif;
		}
		.submit-agileits input[type="submit"] {
			text-align: center;
			border: 0;
			color: #ffffff;
			font-size: 17px;
			font-weight: 600;
			padding: 14px 90px;
			background-color: rgba(0, 0, 0, 0.34);
			border: 3px solid rgba(255, 255, 255, 0.43);
			-webkit-box-shadow: 0 12px 32px 0 rgba(0, 0, 0, 0.71);
			-moz-box-shadow: 0 12px 32px 0 rgba(0, 0, 0, 0.71);
			box-shadow: 0 12px 32px 0 rgba(0, 0, 0, 0.71);
			outline: none;
			cursor: pointer;
			font-family: 'Open Sans', sans-serif;
			letter-spacing: 1px;
			transition: 0.5s ease-in-out;
			-webkit-transition: 0.5s ease-in-out;
			-moz-transition: 0.5s ease-in-out;
			-o-transition: 0.5s ease-in-out;
			-ms-transition: 0.5s ease-in-out;
		}
		.submit-agileits input[type="submit"]:hover {
			color: #ffffff;
			border-color: #00c6d7;
		}
		/*-- checkbox --*/
		.anim {
			position: relative;
			display: block;
			margin-top: .5em;
		}
		label.anim span,
		label.anim a {
			color: #fff;
			font-size: 13px;
			display: inline;
			letter-spacing: 2px;
			text-transform: capitalize;
		}
		label.anim a {
			display: inline-block;
			text-decoration: none;
			margin-top: 4px;
		}
		.wthree-text ul li {
			displaY: block;
		}
		.wthree-text ul li:nth-child(1) {
			margin-right: 36px;
		}
		.agileits-login label {
			font-size: 1em;
			color: #fff;
			font-weight: 400;
			cursor: pointer;
			position: relative;
		}
		input.checkbox {
			background: #fff;
			cursor: pointer;
			width: 1.2em;
			height: 1.2em;
			margin: 0 6px 0 0 !important;
		}
		input.checkbox:before {
			content: "";
			position: absolute;
			width: 1.2em;
			height: 1.2em;
			background: inherit;
			cursor: pointer;
		}
		input.checkbox:after {
			content: "";
			transition: .4s ease-in-out;
			position: absolute;
			top: 1px;
			left: 0px;
			z-index: 1;
			width: 1.1em;
			height: 1.1em;
			/* margin-top: 4px; */
			border: 1px solid #00c6d7;
		}
		input.checkbox:checked:after {
			transform: rotate(-45deg);
			height: .5rem;
			border-color: #00c6d7;
			border-top-color: transparent;
			border-right-color: transparent;
		}
		.anim input.checkbox:checked:after {
			transform: rotate(-45deg);
			height: .5rem;
			border-color: transparent;
			border-right-color: transparent;
			animation: .4s rippling .4s ease;
			animation-fill-mode: forwards;
		}
		@keyframes rippling {
			50% {
				border-left-color: #d24747;
			}
			100% {
				border-bottom-color: #00c6d7;
				border-left-color: #00c6d7;
			}
		}
		/*-- //checkbox --*/
		/*--copy-right-starts-here--*/
		.footer p {
			margin: 0 auto;
			text-align: center;
			margin: 8em 0;
			font-size: 14px;
			color: #fff;
			letter-spacing: 2px;
			text-transform: none;
		}
		.footer a {
			color: #00c6d7;
			transition: 0.3s all;
			-webkit-transition: 0.3s all;
			-moz-transition: 0.3s all;
			-o-transition: 0.3s all;
			-ms-transition: 0.3s all;
		}
		.footer a:hover {
			color: #fff;
			transition: 0.3s all;
			-webkit-transition: 0.3s all;
			-moz-transition: 0.3s all;
			-o-transition: 0.3s all;
			-ms-transition: 0.3s all;
		}
		/*--copy-right-ends-here--*/
		/*--placeholder-color--*/
		::-webkit-input-placeholder {
			color: #fff;
		}
		:-moz-placeholder {
			/* Firefox 18- */
			color: #fff;
		}
		::-moz-placeholder {
			/* Firefox 19+ */
			color: #fff;
		}
		:-ms-input-placeholder {
			color: #fff;
		}
		/*--//placeholder-color--*/
		/*--- Responsive Code ---*/
		@media screen and (max-width: 1920px) {
			h1 {
				margin: 150px 0 100px;
				font-size: 55px;
			}
			.copyright p {
				margin: 50px 0px 150px;
			}
		}
		@media screen and (max-width: 1680px) {
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 82.6%;
			}
			h1 {
				margin: 130px 0 70px;
			}
		}
		@media screen and (max-width: 1600px) {
			h1 {
				margin: 2em 0 1.5em;
			}
			.copyright p {
				margin: 50px 0px;
			}
			.icon-w3 {
				right: 0px;
				bottom: 0;
				width: 53px;
				height: 50px;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 81.8%;
			}
			.footer p {
				margin: 4em 0em;
			}
			h1 {
				font-size: 50px;
			}
		}
		@media screen and (max-width: 1440px) {
			.main-w3layouts-agileinfo {
				width: 33%;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 81.5%;
			}
		}
		@media screen and (max-width: 1366px) {
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 80.8%;
			}
			h1 {
				margin: 1.7em 0 1em;
				font-size: 50px;
			}
		}
		@media screen and (max-width: 1280px) {
			.main-w3layouts-agileinfo {
				width: 36%;
			}
			.footer p {
				margin: 5em 0em;
			}
		}
		@media screen and (max-width: 1080px) {
			.main-w3layouts-agileinfo {
				width: 42%;
			}
			h1 {
				margin: 82px 0 0px;
			}
			.footer p {
				margin: 3em 0 4em;
			}
		}
		@media screen and (max-width: 1050px) {
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 83.5%;
			}
		}
		@media screen and (max-width: 1024px) {
			.main-w3layouts-agileinfo {
				width: 45%;
			}
			.footer p {
				margin: 4em 0em;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 80.8%;
			}
			h1 {
				margin: 1.8em 0 0.8em;
			}
			.submit-agileits input[type="submit"] {
				padding: 11px 90px;
			}
		}
		@media screen and (max-width: 991px) {
			h1 {
				margin: 1.5em 0 0.7em;
				font-size: 46px;
			}
			.footer p {
				margin: 3em 0em;
			}
			.main-w3layouts-agileinfo {
				padding: 3em 2em;
			}
			.wthree-form h2 {
				font-size: 18px;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 80.1%;
			}
		}
		@media screen and (max-width: 900px) {
			.main-w3layouts-agileinfo {
				width: 50%;
			}
		}
		@media screen and (max-width: 800px) {
			.main-w3layouts-agileinfo {
				width: 55%;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 79.8%;
			}
		}
		@media screen and (max-width: 768px) {
			.main-w3layouts-agileinfo {
				width: 58%;
			}
			h1 {
				margin: 2.5em 0 1em;
			}
			.footer p {
				margin: 5em 0em;
			}
			label.anim a {
				margin-top: 3px;
			}
		}
		@media screen and (max-width: 767px) {
			h1 {
				margin: 1.2em 0 0.7em;
			}
			.footer p {
				margin: 3em 0em;
			}
		}
		@media screen and (max-width: 736px) {
			.main-w3layouts-agileinfo {
				width: 60%;
			}
			h1 {
				font-size: 42px;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 79.7%;
			}
			.footer p {
				margin: 2.3em 0em;
			}
		}
		@media screen and (max-width: 667px) {
			.main-w3layouts-agileinfo {
				width: 68%;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				padding: 12px 60px 12px 15px;
				font-size: 14px;
				width: 82.9%;
			}
			.icon-w3 {
				width: 45px;
				height: 43px;
			}
			.icon-w3 i {
				font-size: 18px;
				line-height: 44px;
			}
			.footer p {
				margin: 2.7em 0em;
			}
		}
		@media screen and (max-width: 640px) {
			.main-w3layouts-agileinfo {
				width: 70%;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 82.8%;
			}
		}
		@media screen and (max-width: 600px) {
			.main-w3layouts-agileinfo {
				width: 73%;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 82.5%;
			}
			.footer p {
				margin: 3em 0em;
				font-size: 13px;
			}
		}
		@media screen and (max-width: 568px) {
			.main-w3layouts-agileinfo {
				width: 80%;
			}
			h1 {
				font-size: 38px;
				letter-spacing: 8px;
			}
			.footer p {
				margin: 2.2em 1em 2em;
				line-height: 28px;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 82.5%;
			}
		}
		@media screen and (max-width: 480px) {
			.main-w3layouts-agileinfo {
				width: 80%;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 80%;
			}
			h1 {
				letter-spacing: 5px;
			}
			.wthree-form h2 {
				font-size: 16px;
			}
			.footer p {
				margin: 2.2em 2em 2em;
			}
		}
		@media screen and (max-width: 440px) {
			h1 {
				letter-spacing: 4px;
				font-size: 36px;
				margin: 1.4em 0 0.9em;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 78%;
			}
			.main-w3layouts-agileinfo {
				padding: 2.5em 2em;
			}
		}
		@media screen and (max-width: 414px) {
			h1 {
				font-size: 35px;
			}
			.form-sub-w3 input[type="text"],
			input[type="password"] {
				width: 77%;
			}
			.footer p {
				margin: 3.2em 2em;
			}
		}
		@media screen and (max-width: 384px) {
			.form-sub-w3 input[type="text"],
			.form-sub-w3 input[type="password"] {
				width: 73.8%;
			}
			h1 {
				font-size: 31px;
			}
			.wthree-form h2 {
				letter-spacing: 2px;
			}
		}
		@media screen and (max-width: 320px) {
			.main-w3layouts-agileinfo {
				padding: 1.5em 1.3em;
				width: 80%;
			}
			h1 {
				font-size: 32px;
				letter-spacing: 0.5px;
				margin: 1em 0 0.6em;
			}
			.wthree-form h2 {
				letter-spacing: 1.5px;
				font-size: 14px;
				margin-bottom: 1em;
			}
			.form-sub-w3 input[type="text"],
			.form-sub-w3 input[type="password"] {
				padding: 12.5px 60px 12.5px 15px;
				font-size: 13px;
				width: 68.2%;
			}
			label.anim a {
				margin-top: 12px;
				text-align: center;
				float: none;
			}
			.anim {
				text-align: center;
				margin-top: 0em;
			}
			input.checkbox:after {
				left: 59px;
			}
			.submit-agileits input[type="submit"] {
				padding: 8px 68px;
				font-size: 15px;
			}
			.submit-agileits {
				margin-top: 1.3em;
			}
			.footer p {
				margin: 1.6em 2em;
				letter-spacing: 1.4px;
			}
		}
		/*--- //Responsive Code ---*/
	</style>
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!--header-->
	<div class="header-w3l">
		<h1>Glassy Login Form</h1>
	</div>
	<!--//header-->
	<!--main-->
	<div class="main-w3layouts-agileinfo">
		<!--form-stars-here-->
		<div class="wthree-form">
			<h2>Fill out the form below to login</h2>
			<form action="{{asset('home/login')}}" method="post">
			{{csrf_field()}}
				<div class="form-sub-w3">
					<input type="text" name="username" placeholder="Username " required="" />
					<div class="icon-w3">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="password" placeholder="Password" required="" />
					<div class="icon-w3">
						<i class="fa fa-unlock-alt" aria-hidden="true"></i>
					</div>
				</div>
				<label class="anim">
					<input type="checkbox" class="checkbox">
					<span>Remember Me</span>
					<a href="#">Forgot Password</a>
				</label>
				<label class="anim">

					<a href="{{asset('home/register')}}">Sign up</a>
				</label>
                <label class="anim">

					<a href="{{asset('home')}}">Home</a>
				</label>
				<div class="clear"></div>
				<div class="submit-agileits">
					<input type="submit" value="Login">
				</div>
			</form>

		</div>
		<!--//form-ends-here-->

	</div>
	<!--//main-->
	<!--footer-->
	<div class="footer">
		<p>&copy; 2017 Glassy Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
	<!--//footer-->
</body>

</html>