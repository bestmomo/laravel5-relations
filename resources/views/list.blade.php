@include ('top')
  </head>
  <body>
	<div class="container">
   	<div class="row col-md-offset-3 col-md-6">
			@include('messages')
			<h1>
				@yield('top')
			</h1>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						@yield('title')
					</h3>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@yield('table')
					</tbody>
				</table>
			</div>
			{!! $links !!}
			{!! link_to('/', 'Come back home', ['class' => 'btn btn-primary pull-right']) !!}
		</div>
	</div>

  	@include ('javascript')
  </body>
</html>