@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-10 md:py-16 flex flex-col md:flex-row">
            <div>
                <img class="md:max-w-sm" src="/img/parasite.jpg" alt="parasite">
            </div>
            <div class="detail md:ml-10 lg:ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex items-center text-gray-500 text-sm">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                    <span class="ml-2">85%</span>
                    <span class="mx-4">|</span>
                    <span>Feb. 20, 2020</span>
                </div>
                <div class="text-gray-500">Action, Funny, Sci-fi</div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, cupiditate. Suscipit repellendus quas consequuntur, fuga, quis laudantium sed beatae eos natus vero quia laborum laboriosam eaque labore corrupti consectetur nihil error accusantium vel omnis. Tempore aliquam natus sed, ipsam eveniet sit a, quam, impedit beatae voluptatum quibusdam! Ab, soluta doloribus?
                </p>
                <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div class="col1">
                            <div class="">
                                Tom lee joe
                            </div>
                            <div class="text-sm text-gray-400">
                                Screen Play, Director
                            </div>
                        </div>
                        <div class="col2 ml-12">
                            <div class="">
                                Tom lee joe
                            </div>
                            <div class="text-sm text-gray-400">
                                Screen Play, Director
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <button class="flex items-center justify-center px-5 py-4 bg-orange-500 hover:bg-orange-600 
                        text-gray-800 font-semibold
                        cursor-pointer rounded">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        <div class="ml-2">Play Trailer</div>
                    </button>
                </div>
            </div>
            
        </div>
    </div>  <!-- Movie Infomation -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-10 md:py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                    </a>
                    <div class="mt-2">
                        <div class="text-lg">Real Name</div>
                        <a href="#" class="text-gray-500 hover:text-gray-600">John Deo</a>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                    </a>
                    <div class="mt-2">
                        <div class="text-lg">Real Name</div>
                        <a href="#" class="text-gray-500 hover:text-gray-600">John Deo</a>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                    </a>
                    <div class="mt-2">
                        <div class="text-lg">Real Name</div>
                        <a href="#" class="text-gray-500 hover:text-gray-600">John Deo</a>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                    </a>
                    <div class="mt-2">
                        <div class="text-lg">Real Name</div>
                        <a href="#" class="text-gray-500 hover:text-gray-600">John Deo</a>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                    </a>
                    <div class="mt-2">
                        <div class="text-lg">Real Name</div>
                        <a href="#" class="text-gray-500 hover:text-gray-600">John Deo</a>
                    </div>
                </div>
                
            </div>
        </div> 
    </div> <!-- Movie cast -->

    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-4 py-10 md:py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                    </a>
                </div>
            </div>
        </div> 
    </div> <!-- Images -->

@endsection