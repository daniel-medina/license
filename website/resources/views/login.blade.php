@extends('template')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 login">
      <form method="post" action="/chat/login/validate">
        <div class="form-group">
          <input class="form-control" type="text" name="nickname" placeholder="Entrez votre pseudonyme." autofocus />
        </div>
        <input class="btn btn-primary" type="submit" value="Se connecter" />
      </form>
    </div>
  </div>
</div>
@endsection
