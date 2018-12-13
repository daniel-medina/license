<!doctype html>
<html lang="fr">
  <head>
    <title>Projet site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/stylesheet/style.css">
  </head>
  <body>
    <!-- Menu -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 menu">
          <ul>
            <li><a {{ (preg_match('$/chat$', app('url')->full())) ? '' : 'class=active' }} href="/">CV</a>
              <li><a {{ (!preg_match('$/chat$', app('url')->full())) ? '' : 'class=active' }} href="/chat">Chat</a>
              </ul>
            </div>
          </div>
        </div>

        @yield('content')
      </div>
    </div>
  </body>
</html>
