<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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
<div class="api-info w-full px-4 max-w-prose text-gray-400 mx-auto my-12">
    <div class="col-8 text-center">
        <h3 class="font-serif text-2xl mb-2">LOTR API</h3>
        <p class="mb-4">This is a RESTful API housing all* of the Lord of the Rings data you could want.<br>
            You can this data for RPG games, character sheets, or anything requring LOTR data.<br></p>
        <p class="mb-4"><strong class="font-black">Characters, Books, Films, Species, and Locations</strong></p>
        <p class="mb-4 big-text text-xl"><strong class="font-black">Includes data from the Hobbit!</strong></p>
        <p>Based on <a class="text-sky-600 hover:text-sky-800 hover:underline" href="https://swapi.co">swapi.co</a>.</p>
    </div>
</div>
<div class="my-4">
    <div class="flex flex-wrap justify-center leading-6 text-left text-neutral-800">
        <div
            class="relative px-4 w-full mx-auto md:w-5/6 leading-6 text-left sm:flex-shrink-0 sm:flex-grow-0 md:flex-shrink-0 md:flex-grow-0 md:basis-3/4 text-neutral-800"
            style="min-height: 1px;">
            <form action="" method="get" class="mb-4">
                <div class="relative flex w-full mx-auto">
                    <div class="flex">
                        <span
                            class="flex items-center py-2 px-4 mb-0 text-lg font-normal leading-normal text-center whitespace-nowrap bg-gray-200 rounded rounded-r-none border border-gray-300 border-solid text-zinc-600"
                            id="base-url"
                        >https://lotrapi.co/api/v1/</span
                        >
                    </div>
                    <input
                        type="text"
                        class="block overflow-visible relative flex-auto py-2 px-4 m-0 text-lg leading-normal bg-clip-padding bg-white rounded-none border border-gray-300 border-solid cursor-text text-zinc-600 focus:border-sky-300 focus:bg-white focus:text-zinc-600"
                        name="query-data"
                        id="query-data"
                        placeholder="characters/"
                        aria-describedby="query-data"
                        style="width: 1%; transition: none 0s ease 0s;"
                    />
                    <div class="flex">
                        <button
                            class="api-get inline-block overflow-visible relative py-2 px-4 m-0 text-lg font-normal leading-normal text-center text-gray-500 normal-case align-middle whitespace-nowrap bg-transparent bg-none rounded rounded-l-none border border-gray-500 border-solid cursor-pointer select-none hover:border-gray-500 hover:bg-gray-500 hover:text-white"
                            type="submit"
                            value="submit"
                            style="transition: none 0s ease 0s; z-index: 2;"
                        >
                            Submit
                        </button>
                    </div>
                </div>
            </form>
            <p class="mt-0 mb-4 font-sans leading-6 text-left text-neutral-400">
                Try typing <a href="#" class="text-white hint">characters/2</a> or <a href="#"
                                                                                      class="text-white hint">realms/3</a>
                or <a href="#" class="text-white hint">books/1</a>
            </p>
        </div>
    </div>
</div>
<div
    class="px-4 my-4 mx-auto w-full leading-6 text-left text-neutral-800"
>
    <div
        class="flex relative flex-col full md:w-5/6 sm:max-w-3xl md:max-w-6xl mx-auto min-w-0 leading-6 text-left break-words bg-clip-border bg-white rounded border border-solid border-neutral-200 text-neutral-800"
    >
        <div
            class="py-3 px-5 mb-0 leading-6 text-left break-words border-b border-solid border-neutral-200 bg-neutral-100 text-neutral-800 bg-opacity-[0.03]"
            style="border-radius: 3px 3px 0px 0px;"
        >
            API Example
        </div>
        <div
            class="overflow-scroll flex-auto p-5 leading-6 text-left break-words text-neutral-800"
            style="height: 400px;"
        >
            <pre id="apiSpan"></pre>
        </div>
    </div>
</div>
<div class="w-full">
    <div class="pb-8">
        <div
            class="relative flex-grow-0 flex-shrink-0 px-4 w-full max-w-full leading-6 text-center basis-full text-neutral-400"
            style="min-height: 1px;"
        >
            <p class="mt-0 mb-4 leading-6 text-center text-neutral-400">
                <small
                    class="font-normal leading-5 text-center text-neutral-400">
                    *Okay, Okay... You caught me. That's a bold statement. If you see something
                    missing let me know on the <a class="text-sky-600 hover:text-sky-800 hover:underline"
                                                  href="https://www.github.com/technetist/lotrapi">git repo</a>
                    or <a class="text-sky-600 hover:text-sky-800 hover:underline" href="mailto:adrien@maranville.io">email
                        me</a></small></p>
        </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
<script>
document.addEventListener("DOMContentLoaded", function (event) {
    window.apiRequest('characters');
});

document.addEventListener('click', function (event) {
    if (event.target.matches('.api-get')) {
        let query = document.getElementById("query-data").value;
        event.preventDefault();
        window.apiRequest(query);
    } else if (event.target.matches('.hint')) {
        document.getElementById("query-data").value = event.target.innerHTML;
        let query = document.getElementById("query-data").value;
        event.preventDefault();
        window.apiRequest(query);
    }
});
</script>
</body>
</html>
