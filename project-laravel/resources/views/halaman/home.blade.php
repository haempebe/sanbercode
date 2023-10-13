@section('pageTitle', 'dashboard')
@extends('layout.app')
@section('content')
    <h1>SanberBook</h1>
    <h2>Social Media Developer Santai Berkualitas</h2>
    <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
    <h2>Benefit Join di SanberBook</h2>
    <ul>
        <li>Mendapatkan motivasi dari sesama developer</li>
        <li>Sharing knowledge dari para mastah Sanber</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <h2>Cara Bergabung ke SanberBook</h2>
    <ul style="list-style-type: number;">
        <li>Mengunjungi Website ini</li>
        <li>Mendaftar di <a href="{{route('signup')}}">Form Sign Up</a></li>
        <li>Selesai!</li>
    </ul>
@endsection
