@extends('layouts/add')
@section('content')
<h1>Contacts</h1>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="{{route('contact-form')}}" method="post" >

  @csrf

    <div class="form-group col-5">
      <label for="name">Введите имя</label>
      <input type="text" name="name" placeholder="Введите имя" id='name' class="form-control">
    </div>


    <div class="form-group col-5">
      <label for="email">Введите email</label>
      <input type="text" name="email" placeholder="Введите email" id='email' class="form-control">
    </div>

    <div class="form-group col-5">
      <label for="massege">Введите massege</label>
      <input type="text" name="message" placeholder="Введите massege" id='massege' class="form-control">
    </div>

    <button type="submit" class="btn btn-success mt-2">Submit!</button>
</form>
@endsection

@section('aside')
@parent
<p>Այստեղ կարող է լինել Ձեր գովազդը</p>
@endsection

@section('title-block')
Contacts
@endsection
