<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/custom.css') !!}">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<style>
		body{
			background-color: #D1E9ED;
		}
		h1{
			font-family:"Rockwell";
			color: #6D959F;
		}
		a.custom-button{
			background-color: #A9D2D6;
			color: black;
		}
		a.custom-button:hover{
			background-color: #5b818b;
			color: white;
		}
		/*thead tr{*/
		/*	background-color: #75b7bd;*/
		/*}*/
		/*tbody tr:nth-child(odd){*/
		/*	background-color: #eef6f7;*/
		/*}*/
		/*tbody tr:nth-child(even){*/
		/*	background-color: #A9D2D6;*/
		/*}*/
		/*tbody tr:hover{*/
		/*	background-color: #87c0c5;*/
		/*}*/
	</style>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>

	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<script src="{!! asset('js/jquery.min.js') !!}"></script>
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</body>
</html>