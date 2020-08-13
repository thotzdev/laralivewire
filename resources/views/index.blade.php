@extends("layouts.main")

@section('content')
    <div class="container mx-auto px-6 sm:px-4 pt-12">
        <div class="popular-movies">
            <h2 class="text-lg uppercase text-orange-500 font-bold">
                Popular Movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :collectionGenres="$collectionGenres"/>
                @endforeach
            </div> <!-- POPULAR MOVIES -->

        <div class="now-playing-movies pt-12">
            <h2 class="text-lg uppercase text-orange-500 font-bold">
                Now Playing Movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" :collectionGenres="$collectionGenres"/>
                @endforeach
            </div>
        </div> <!-- Now Playing Movies -->
    </div>
    
@endsection