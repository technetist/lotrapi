<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="NONE,NOARCHIVE">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LOTR-API</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-neutral-800 leading-normal text-base">
<nav class="flex justify-center items-center py-3 px-4 bg-gray-700">
    {{--<div class="navbar-collapse collapse w-100 order-3 order-md-0 dual-collapse2">--}}
    {{--<ul class="navbar-nav nav-pills mr-auto">--}}
    {{--<li class="nav-item">--}}
    {{--<a class="nav-link" href="#">Tweet</a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    <div>
        <a class="font-serif text-white text-3xl py-1.5 inline-block" href="{{ route(name: 'home', absolute: false) }}">LOTR
            API</a>
    </div>

    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">--}}
    {{--<span class="navbar-toggler-icon"></span>--}}
    {{--</button>--}}
    {{--<div class="navbar-collapse collapse w-100 order-1 dual-collapse2">--}}
    {{--<ul class="navbar-nav ml-auto">--}}
    {{--<li class="nav-item">--}}
    {{--<a class="nav-link" href="#">Documentation</a>--}}
    {{--</li>--}}
    {{--<li class="nav-item">--}}
    {{--<a class="nav-link" href="#">About</a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
</nav>
<main role="main">
    <div class="py-12 leading-6 text-left text-neutral-800">
        <div class="px-4 w-full mx-auto md:w-5/6 leading-6 text-left text-neutral-800">
            <div class="request-info">
                <pre
                    class="prettyprint block overflow-auto mt-0  font-mono leading-5 text-left whitespace-pre p-4 bg-white rounded border border-solid border-zinc-500 text-neutral-800 mb-4"
                    style="font-size: 87.5%;"
                ><b>{{ $request->getMethod() }}</b> {{ $request->getRequestUri() }}</pre>
            </div>

            <div class="response-info">
                        <pre class="border bg-white p-3 rounded prettyprint"><code><div
                                    class="meta nocode"><b>HTTP {{ $response->status() }} {{ $response::$statusTexts[$response->status()] }}</b>
@foreach($response->headers as $key => $values)
@foreach($values as $value)
<b>{{ ucwords($key, '-') }}:</b> <span class="lit">{{ $value }}</span>
@endforeach
@endforeach
</div>{!! $response->getContent() !!}</code></pre>
            </div>
        </div>
    </div>
</main>

<div class="w-full">
    <div class="pb-8">
        <div class="px-4 w-full mx-auto md:w-5/6 disclaimer text-center text-neutral-400 text-sm">
            <a class="text-sky-600 hover:text-sky-800 hover:underline" href="https://www.github.com/technetist/lotrapi">git repo</a>
            |
            <a class="text-sky-600 hover:text-sky-800 hover:underline" href="mailto:adrien@maranville.io">email me</a></small></p>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
<script async src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<style>
    .prettyprint a .str {
        color: inherit
    }

    pre.prettyprint {
        padding: 1rem;
        border-radius: 0.25rem;
    }

    pre {
        font-size: 87.5%;
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal;
    }
</style>
</body>
</html>
