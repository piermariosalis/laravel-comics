@extends('layouts.app')

@section('content')
<header>
            <div class="dc_sections">
                <ul>
                    <li><a href="#"></a><img src="{{asset('/img/logo.png')}}" alt=""></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <nav >
                <a href="{{ url('/') }}">
                <img src="{{asset('/img/logo.png')}}" alt="">
                </a>
                <ul>
                    <li><a href="">CHARACTERS</a> </li>
                    <li><a href="">COMICS</a> </li>
                    <li><a href="">MOVIES</a> </li>
                    <li><a href="">TV</a> </li>
                    <li><a href="">GAMES</a> </li>
                    <li><a href="">VIDEOS</a> </li>
                    <li><a href="">NEWS</a> </li>
                    <li><a href="">SHOP <i class="fas fa-angle-down    "></i></a> </li>
                    
                </ul>
  


            </nav>
        </header>
@endsection