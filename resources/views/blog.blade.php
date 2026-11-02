@extends('layouts.app')

@section('title', 'blog — portofolio')
@section('logo_image', 'img/8.jpeg')
@section('top_right_image', 'img/9.jpeg')
@section('bottom_left_image', 'img/10.jpeg')
@section('bottom_right_image', 'img/3.jpeg')

@section('content')
    <?php
    $medium_feed = 'https://medium.com/feed/@wowmavic32';
    $rss = @simplexml_load_file($medium_feed);
    $articles = [];
    if ($rss) {
        foreach ($rss->channel->item as $item) {
            $articles[] = [
                'title' => (string)$item->title,
                'link' => (string)$item->link,
                'date' => date('d m y', strtotime((string)$item->pubDate)),
                'desc' => strip_tags((string)$item->description)
            ];
        }
    }
    ?>

    <div class="border-b border-neutral-200">
        <div class="mx-auto w-full max-w-7xl p-6 lg:p-10">
            <h1 class="mb-2 text-4xl font-bold text-black">blog</h1>
            <p class="text-neutral-700">baru coba meddium.</p>
        </div>
    </div>
    <div class="mx-auto w-full max-w-4xl p-6 lg:p-10">
        <div class="space-y-4">
            <?php if (empty($articles)): ?>
                <div class="p-5 border-2 border-neutral-600 bg-white font-bold text-neutral-500">failed to load articles or no articles found.</div>
            <?php else: ?>
                <?php foreach ($articles as $article): ?>
                    <article class="border-2 border-neutral-600 bg-white p-6 hover:bg-amber-50 rounded-sm">
                        <a href="<?= $article['link'] ?>" target="_blank" class="block">
                            <div class="mb-2 text-xs font-bold uppercase tracking-wide text-neutral-500 lowercase"><?= $article['date'] ?></div>
                            <h2 class="mb-3 text-2xl font-bold text-black leading-tight lowercase"><?= htmlspecialchars($article['title']) ?></h2>
                            <p class="text-sm text-neutral-700 line-clamp-3 mb-4 lowercase"><?= htmlspecialchars($article['desc']) ?></p>
                            <span class="inline-block text-sm font-bold text-amber-700">read more &rarr;</span>
                        </a>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
@endsection