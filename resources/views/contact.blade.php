@extends('layouts.app')

@section('title', 'contact — portofolio')
@section('logo_image', 'img/5.jpeg')
@section('top_right_image', 'img/6.jpeg')
@section('bottom_left_image', 'img/7.jpeg')
@section('bottom_right_image', 'img/8.jpeg')

@section('content')
    <div class="border-b border-neutral-200">
        <div class="mx-auto w-full max-w-7xl p-6 lg:p-10">
            <h1 class="mb-2 text-4xl font-bold text-black">get in touch</h1>
            <p class="max-w-2xl text-neutral-700">have a project or just want to say hi?</p>
        </div>
    </div>
    <div class="mx-auto w-full max-w-7xl p-6 lg:p-10">
        <div class="grid gap-8 md:grid-cols-2">
            <form action="#" method="POST" class="rounded-sm border-2 border-neutral-600 bg-white p-6">
                <div class="mb-4">
                    <label class="mb-1.5 block text-sm font-bold text-black">name</label>
                    <input type="text" required class="block w-full rounded-sm border-2 border-neutral-300 px-3 py-2 text-sm focus:border-neutral-600 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="mb-1.5 block text-sm font-bold text-black">email</label>
                    <input type="email" required class="block w-full rounded-sm border-2 border-neutral-300 px-3 py-2 text-sm focus:border-neutral-600 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="mb-1.5 block text-sm font-bold text-black">message</label>
                    <textarea rows="4" required class="block w-full rounded-sm border-2 border-neutral-300 px-3 py-2 text-sm focus:border-neutral-600 focus:outline-none"></textarea>
                </div>
                <button type="button" class="rounded-sm border-2 border-blue-600 bg-blue-600 px-5 py-2.5 text-sm font-bold text-white hover:bg-blue-700">send message</button>
            </form>

            <div class="space-y-4">
                <div class="rounded-sm border-2 border-neutral-600 bg-white p-5">
                    <h3 class="mb-1 text-xs font-bold uppercase tracking-wide text-neutral-500">email</h3>
                    <p class="text-sm font-bold text-amber-700">wowmavic32@gmail.com</p>
                </div>
                <div class="rounded-sm border-2 border-neutral-600 bg-white p-5">
                    <h3 class="mb-1 text-xs font-bold uppercase tracking-wide text-neutral-500">github</h3>
                    <p class="text-sm font-bold text-amber-700">github.com/bukanrikar</p>
                </div>
            </div>
        </div>
    </div>
@endsection