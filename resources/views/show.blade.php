@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-10 md:py-16 flex flex-col md:flex-row">
            <div>
            <img class="md:max-w-sm" src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" alt="{{$movie['title']}}">
            </div>
            <div class="detail md:ml-10 lg:ml-24">
                <h2 class="text-4xl font-semibold">{{$movie['title']}}</h2>
                <div class="flex items-center text-gray-500 text-sm">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                    <span class="ml-2">{{ $movie['vote_average'] * 10 }}%</span>
                    <span class="mx-4">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                </div>
                <div class="text-gray-500">
                    @foreach ($movie['genres'] as $genre)
                        {{ $genre['name'] }}@if(!$loop->last),@endif
                    @endforeach
                </div>
                <p class="text-gray-300 mt-8">
                    {{$movie['overview']}}
                </p>
                <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index > 1)
                                @break
                            @endif
                            <div class="col1 mr-12">
                                <div class="">
                                    {{$crew['name']}}
                                </div>
                                <div class="text-sm text-gray-400">
                                    {{$crew['job']}}
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="mt-10">
                <a href="https://www.youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" class="flex items-center justify-center w-48 py-4 bg-orange-500 hover:bg-orange-600 
                        text-gray-800 font-semibold
                        cursor-pointer rounded">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        <div class="ml-2">Play Trailer</div>
                    </a>
                </div>
            </div>
            
        </div>
    </div>  <!-- Movie Infomation -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-10 md:py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                        @if ($loop->index > 4)
                            @break
                        @endif
                    <div class="mt-8">
                        <a href="#">
                            <img src="https://image.tmdb.org/t/p/w500/{{$cast['profile_path']}}" alt="{{$cast['name']}}" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                        </a>
                        <div class="mt-2">
                            <div class="text-lg">{{$cast['name']}}</div>
                            <a href="#" class="text-gray-500 hover:text-gray-600">{{$cast['character']}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> 
    </div> <!-- Movie cast -->

    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-4 py-10 md:py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($movie['images']['posters'] as $poster)
                    @if ($loop->index > 8)
                        @break
                    @endif
                    <div class="mt-8">
                        <a href="#">
                            <img src="https://image.tmdb.org/t/p/w500/{{$poster['file_path']}}" alt="poster" class="hover:opacity-75 transition ease-in-out divide-purple-200 " />
                        </a>
                    </div>
                @endforeach            
            </div>
        </div> 
    </div> <!-- Images -->

@endsection