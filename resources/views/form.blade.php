@include ('top')
  </head>
  <body>
	<div class="container">
   	<div class="row col-md-offset-2 col-md-8">
			<div class="col-lg-12">
				@yield('form')
			</div>
		</div>
	</div>
	@include ('javascript')
	@yield('scripts')
  </body>
</html>