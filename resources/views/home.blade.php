
@extends('layouts/add')
@section('content')
<div class="d-flex flex-column">
  <h1>Գլխավոր ԷՋ</h1>
  <p class="fs-2">Ողջունում եմ Ձեզ իմ կայքում</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

@endsection

@section('aside')
@parent
<p>Дополнительный текст</p>
@endsection


@section('title-block')
Welcome
@endsection
