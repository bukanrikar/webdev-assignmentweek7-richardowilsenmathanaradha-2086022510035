@extends('layouts.app')
@section('title', 'home — portofolio')
@section('logo_image', 'img/3.jpeg')
@section('top_right_image', 'img/4.jpeg')
@section('bottom_left_image', 'img/5.jpeg')
@section('bottom_right_image', 'img/6.jpeg')

@section('content')
    <section class="border-b border-neutral-200 flex-1 flex items-center">
        <div class="mx-auto w-full max-w-7xl p-6 lg:p-10">
            <div class="grid items-center gap-8 md:grid-cols-5">
                <div class="md:col-span-3">
                    <p class="mb-3 text-sm font-bold uppercase tracking-wide text-amber-700">ini web paling niat (trust)</p>
                    <h1 class="mb-4 text-5xl font-bold leading-tight text-black sm:text-6xl lg:text-7xl">Hello World!</h1>
                    <p class="mb-6 max-w-xl text-neutral-700">dibikin sama chatgpt, gemini, deepseek, claude, dan rikar.</p>
                </div>
                <div class="md:col-span-2">
                    <img src="{{ asset('img/1.jpeg') }}" alt="picture" class="aspect-square w-full rounded-sm border-2 border-neutral-600 object-cover">
                </div>
            </div>
        </div>
    </section>
@endsection