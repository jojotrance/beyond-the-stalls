@extends('layouts.adminstall')
@section('body')
   <x-app-layout>
    <x-slot name="header">
        @include('header.header')
    </x-slot>
<style>
    .about-section {
  padding: 50px;
  text-align: right;
  background-color: #344e41;
  color: white;
  font-family: "Times New Roman", Arial, sans-serif;
}

.image-section {
  padding: 50px;
  text-align: left;
  background-color: #344e41;
  color: white;
  font-family: "Times New Roman", Arial, sans-serif;
}
</style>

<body>
<div class="image-section">
<img src="" alt="Image description">
<div class="about-section">
<h1>Taguig People's Market</h1>
  <p> It is a marketplace located in Lower Bicutan, Taguig City. </p>
  <p> A wide variety of products are sold here, from school and office supplies to plasticware to clothes to fresh produce name it! <br>This place screams "General Merchandise".
    This is a go-to place for all individuals to find needs, may it be in everyday life or a one-time use. </p>
</div>
</div>

</x-app-layout>
@endsection
            