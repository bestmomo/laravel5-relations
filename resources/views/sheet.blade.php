@include ('top')
  </head>
  <body>
	<div class="container">
   	<div class="row col-md-offset-3 col-md-6">
   		@yield('title')
   		@yield('content')
			<a href="javascript:history.back()" class="btn btn-primary">
				<span class="glyphicon glyphicon-circle-arrow-left"></span> Back
			</a>
		</div>
	</div>
	<div class="text-center">
		<br>
		@yield('image')
	</div>
  </body>
</html>