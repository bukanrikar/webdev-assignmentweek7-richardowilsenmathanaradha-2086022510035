@extends('layouts.app')

@section('title', 'about — portofolio')
@section('logo_image', 'img/7.jpeg')
@section('top_right_image', 'img/8.jpeg')
@section('bottom_left_image', 'img/9.jpeg')
@section('bottom_right_image', 'img/10.jpeg')

@section('content')
    <div class="border-b border-neutral-200">
        <div class="mx-auto w-full max-w-7xl p-6 lg:p-10">
            <h1 class="mb-2 text-4xl font-bold text-black">about me</h1>
            <p class="max-w-2xl text-neutral-700">se blum tau mo tulis apa disini</p>
        </div>
    </div>
    <div class="mx-auto w-full max-w-7xl p-6 lg:p-10">
        <div class="grid gap-8 md:grid-cols-2">
            <div>
                <h2 class="mb-4 text-2xl font-bold text-black">Hello World!</h2>
                <div class="space-y-4 text-neutral-700">
                    <p>nama rikar, umur hampir 20, tinggal di rumah.</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/2.jpeg') }}" alt="picture" class="aspect-square w-full rounded-sm border-2 border-neutral-600 object-cover">
            </div>
        </div>
    </div>
@endsection