@include ('top')

  <link href="css/cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Eloquent relations management</h3>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Choose an option</h1>
              <br>
              {!! link_to_route('countries.index', 'Countries', null, ['class' => 'btn btn-lg btn-success']) !!}
              {!! link_to_route('cities.index', 'Cities', null, ['class' => 'btn btn-lg btn-success']) !!}
              {!! link_to_route('authors.index', 'Authors', null, ['class' => 'btn btn-lg btn-success']) !!}
              {!! link_to_route('books.index', 'Books', null, ['class' => 'btn btn-lg btn-success']) !!}
              {!! link_to_route('editors.index', 'Editors', null, ['class' => 'btn btn-lg btn-success']) !!}
              {!! link_to_route('themes.index', 'Themes', null, ['class' => 'btn btn-lg btn-success']) !!}
              {!! link_to_route('categories.index', 'Categories', null, ['class' => 'btn btn-lg btn-success']) !!}
              {!! link_to_route('periods.index', 'Periods', null, ['class' => 'btn btn-lg btn-success']) !!}
              {!! link_to_route('formats.index', 'Formats', null, ['class' => 'btn btn-lg btn-success']) !!}
          </div>

        </div>

      </div>

    </div>

  @include ('javascript')
  </body>
</html>