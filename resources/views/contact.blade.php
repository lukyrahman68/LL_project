@extends('layouts.master')

@section('header')
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center img_header">
        <div class="container" style="position:relative;">
        <div style="position:absolute;bottom:-80px;right:0;border: solid">
            <h3>Contact Us</h3>
        </div>
        </div>
    </header>
@endsection
@section('content')
<section style="background: #F2EEE2">
    <div class="container container_contact">
        <div class="contact_title">
            We're open for collaboration
        </div>
        <div class="contact_main">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque cum quo, porro voluptas error dolores, nam, nulla provident ut fugiat illum esse suscipit magnam voluptatem eos quis. Saepe, blanditiis rerum.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque cum quo, porro voluptas error dolores, nam, nulla provident ut fugiat illum esse suscipit magnam voluptatem eos quis. Saepe, blanditiis rerum.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque cum quo, porro voluptas error dolores, nam, nulla provident ut fugiat illum esse suscipit magnam voluptatem eos quis. Saepe, blanditiis rerum.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque cum quo, porro voluptas error dolores, nam, nulla provident ut fugiat illum esse suscipit magnam voluptatem eos quis. Saepe, blanditiis rerum.
        </div>
        <div class="contact_form">
            {!! Form::open(['method'=>'GET','action'=> 'cobaController@show']) !!}
                <div class="form-group">
                    {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('subject',null,['class'=>'form-control','placeholder'=>'Subject']) !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea('pesan',null,['class'=>'form-control','placeholder'=>'Message']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('send',['class'=>'btn btn-primary']) !!}
                </div>
            {!! form::close() !!}
        </div>
    </div>
</section>
@endsection
