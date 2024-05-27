@extends('master.principal')
@section('title', 'Accueil')
@section('page-title', 'accueil')
@section('content')
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatum unde reprehenderit minima quos sint sapiente, amet voluptates, eos soluta aliquid necessitatibus voluptatibus quidem expedita at impedit ut voluptate debitis.</p>
    <div class="row mb-3">
        <div class="col-sm-4">
            <x-my-component title="Premiere activite" img="formation.jpg" url="#" paragraphe="Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatum unde reprehenderit minima quos sint sapiente, amet voluptates, eos soluta aliquid necessitatibus voluptatibus quidem expedita at impedit ut voluptate debitis." />
        </div>
        <div class="col-sm-4">
            <x-my-component title="Deuxieme activite" img="etude.jpg" url="#" paragraphe="Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatum unde reprehenderit minima quos sint sapiente, amet voluptates, eos soluta aliquid necessitatibus voluptatibus quidem expedita at impedit ut voluptate debitis." />
        </div>
        <div class="col-sm-4">
            <x-my-component title="Troisieme activite" img="integration.jpg" url="#" paragraphe="Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptatum unde reprehenderit minima quos sint sapiente, amet voluptates, eos soluta aliquid necessitatibus voluptatibus quidem expedita at impedit ut voluptate debitis." />
        </div>
    </div>
@endsection