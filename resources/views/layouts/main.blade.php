<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">

    <Nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row md:items-center justify-between px-6 sm:px-4 py-6">
            <div class="flex flex-col sm:flex-row">
                <div class="flex mx-auto sm:mx-0">
                <a href="{{route('movies.index')}}">
                        Logo Here
                    </a>
                </div>
                <ul class="flex flex-row items-center mt-4 sm:mt-0 justify-around">
                    <li class="sm:ml-16">
                        <a href="{{route('movies.index')}}" class="hover:text-gray-500">Movies</a>
                    </li>
                    <li class="sm:ml-6">
                        <a href="#" class="hover:text-gray-500">TV Show</a>
                    </li>
                    <li class="sm:ml-6">
                        <a href="#" class="hover:text-gray-500">Actors</a>
                    </li>
                </ul>
            </div>
            
            <div class="flex items-center mt-6 sm:mt-6 sm:m-4 sm:ml-0 md:m-0">
                <div class="relative flex-1">
                    <input type="text" class="bg-gray-800 text-sm px-4 pl-8 py-1 w-full rounded-full focus:outline-none focus:shadow-outline" placeholder="Search">
                
                    <img class="absolute top-0 ml-2 mt-2 w-4" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABaElEQVRIia2Uv07DMBCHPzKUgXSDJenAwN434DFaYIMBEKSdWGDjtagiBC0rTLB0gYEWVHWnICUdfFaDGvyH5iTLlvO7+3yx72DZ6kAXSIER8C1zCnSAsMTH2faATyA3jA+g9Z/gV0AmQe6BNhABNSAWeF++Z8Cl78kz4Ac4tWjPRJfhmEmdxW+xBS9CcmCMw510RXznGFzbQPwSmzAVYdsTsC9+PZtwJMLIExCL37tNOBNhzROwLn5fJlEATGW96QnYknlqEgXAi6x3PQFa/2wTdlCp9j2CrwEP4nduE4eo8s9R79vFEjzqAFRF6kq2QRLR5cCF44EA1Vt0Lxqg3nkD9boawAGL36LHBGj6QFqotE3ddCwnnxQgR8A1jrUUoi6uhyqimcw3sr8humYBosdQsq3MDlnO8BckWBGwXbK3A9xSUSYR6sRldzVE9auVLTZAHqsAmCBvVQH+ghxXCdCQJ+AVOAGYA9xJhKAfeGcBAAAAAElFTkSuQmCC"/>
                </div>
                <div class="ml-4">
                    <img class="w-6 rounded-full" src="/img/avatar.jpg" alt="avatar">
                </div>
            </div>
        </div>
    </Nav>
    @yield('content')
    
</body>
</html>