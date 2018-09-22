@extends('layouts.master')

@section('header')
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center img_header">
        <div class="container" style="position:relative;">
        <div style="position:absolute;bottom:-80px;right:0;">
            <h3>About Angelynn and Helen</h3>
        </div>
        </div>
    </header>
@endsection
@section('content')
<section style="background: #F2EEE2">
    <div class="container container_about">
        <div class="left_item padding_art SourceSansPro_Regular">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius atque harum voluptatibus nulla. Nam ducimus tenetur expedita aut praesentium voluptatum quam? Nam at unde repellat sed atque consectetur vitae distinctio?
            </p>
        </div>
        <div class="right_item">
            <img src="img/About Us Foto 1.png" alt="">
        </div>
    </div><br><br><br>
    <div class="container container_about">
        <div class="left_item">
            <img src="img/About Us Foto 2.png" alt="">
        </div>
        <div class="right_item padding_art SourceSansPro_Regular">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius atque harum voluptatibus nulla. Nam ducimus tenetur expedita aut praesentium voluptatum quam? Nam at unde repellat sed atque consectetur vitae distinctio?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, voluptatem sit reprehenderit voluptates ad vel quo placeat numquam dolores aliquam qui tenetur quidem molestiae, aperiam natus sequi. Vero, consectetur est?
            </p>
        </div>
    </div>
</section>
@endsection
