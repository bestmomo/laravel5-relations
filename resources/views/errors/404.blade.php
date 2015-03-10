@include ('top')

    <link href="{!! url('css/cover.css') !!}" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="inner cover">
            <h1 class="cover-heading">Ooops !</h1>
            <h2>Error 404</h2>
            <div class="error-details">
                Sorry, this page does not exists !
            </div>
            <br>
            <div class="error-actions">
               {!! link_to('/', 'Home', ['class' => 'btn btn-primary btn-lg']) !!}
            </div>            
        </div>
      </div>
    </div>

  @include ('javascript')
  </body>
</html>
