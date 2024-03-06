@extends('layouts.admin')
@section('body')
    <x-app-layout>
        <x-slot name="header">
            @include('header.headers')
        </x-slot>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeyondTheStall</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/> -->
</head>
    <style>
    body {
        background-image: url('/images/430837379_333900309104849_4293786303333364672_n.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
      }

    img {
        max-width: 100%;
        height: 100%;
        height:auto;
        background:#e0e2e4 ;
        background: radial-gradient(white 30%, #e0e2e4 70%);
    }


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: center;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;

}

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

.team-container{
  padding: 50px;
  height: auto;
  text-align: center;
  background-color: #588157;
  color: white;
  font-family: "Times New Roman", Arial, sans-serif;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>

<body>
<div class="image-section">
<img src="building-solid.png" alt="Image description">
<div class="about-section">
<h1>Beyond The Stalls</h1>
  <p> Monitoring such large estates is a heavy burden on one’s shoulder, the marketplace almost accommodates  more or less than a hundred stalls and that many tenants cannot be handled just by a simple record of pen and paper. This is where technology comes in, particularly the invention of management systems, thus incorporating technology in this field, creating a management system for the marketplace is a way to optimize occupancy, revenue and compliance of the marketplace rentals.</P>
  <p>
    This site aims to monitor the rental management system of Taguig People’s Market in Lower Bicutan, Taguig City <br>
    with the hopes of enhancing efficiency, transparency, and accountability in market operations.
</p>
</div>
</div>

<div class="team-container">
<h2 style="text-align:center">Meet the Team</h2>
<h5 style= "text-align:center">This site is created by second-year IT Students from Technological University of the Philippines-Taguig Campus</h5>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="" alt="Adrian" style="width:100%">
      <div class="container">
        <h2>Adrian Philip Onda</h2>
        <p class="title">Head Developer</p>
        <p>adrianphilip@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="" alt="Gwyn" style="width:100%">
      <div class="container">
        <h2>Gwyn Barte</h2>
        <p class="title">Developer</p>
        <p>gwynbarte@gmail.com</p>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="" alt="Joey" style="width:100%">
      <div class="container">
        <h2>Joey Lavega</h2>
        <p class="title">Developer</p>
        <p>joeylavega@gmail.com</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="" alt="Mikylla" style="width:100%">
      <div class="container">
        <h2>Mikylla Fabro</h2>
        <p class="title">Developer</p>
        <p>mikyllafabro@gmail.com</p>
      </div>
    </div>
  </div>
</div>
</div>
</body>

<footer class="site-footer">
  <div class="container">
    <div class="row">
        <p class="copyright">&copy; 2024 Beyond The Stalls. All Rights Reserved.</p>
      </div>
  </div>
</footer>
</x-app-layout>
