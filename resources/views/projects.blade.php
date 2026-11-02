@extends('layouts.app')

@section('title', 'projects — portofolio')
@section('logo_image', 'img/4.jpeg')
@section('top_right_image', 'img/5.jpeg')
@section('bottom_left_image', 'img/6.jpeg')
@section('bottom_right_image', 'img/7.jpeg')

@section('content')
    <?php
    $token = env('GITHUB_TOKEN', '');
    $username = env('GITHUB_USERNAME',);
    $opts = [
        'http' => [
            'method' => 'GET',
            'header' => "User-Agent: PHP-Portfolio\r\n" . ($token ? "Authorization: token $token\r\n" : '')
        ]
    ];
    $context = stream_context_create($opts);
    $json = @file_get_contents("https://api.github.com/users/$username/repos?per_page=100&sort=updated", false, $context);
    $repos = $json ? json_decode($json, true) : [];
    $repos = array_filter($repos, fn($r) => !$r['fork']);
    ?>
    
    <div class="border-b border-neutral-200">
        <div class="mx-auto w-full max-w-7xl p-6 lg:p-10">
            <h1 class="mb-2 text-4xl font-bold text-black">projects</h1>
            <p class="text-neutral-700">semua repo github ku btw</p>
        </div>
    </div>
    <div class="mx-auto w-full max-w-7xl p-6 lg:p-10">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <?php if (empty($repos)): ?>
                <div class="col-span-full p-5 border-2 border-neutral-600 bg-white font-bold text-neutral-500">failed to load repositories.</div>
            <?php else: ?>
                <?php foreach ($repos as $repo): ?>
                    <article class="overflow-hidden border-2 border-neutral-600 bg-white flex flex-col rounded-sm">
                        <div class="p-5 flex-1">
                            <h3 class="mb-4 text-xl font-bold text-black lowercase"><?= htmlspecialchars($repo['name']) ?></h3>
                            <div class="flex flex-wrap gap-3 text-xs font-bold text-neutral-500 lowercase">
                                <span><?= $repo['language'] ?? 'code' ?></span>
                            </div>
                        </div>
                        <div class="border-t-2 border-neutral-600 p-5 bg-neutral-50">
                            <a href="<?= $repo['html_url'] ?>" target="_blank" class="font-bold text-amber-700 hover:text-amber-900 text-sm">view code &rarr;</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
@endsection