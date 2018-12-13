@extends('template')

@section('content')
<div class="container-fluid">
  <div class="row no-padding">
    <div class="chat" id="chat-root"></div>

    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="/script/chat.js"></script>
  </div>
</div>
@endsection
