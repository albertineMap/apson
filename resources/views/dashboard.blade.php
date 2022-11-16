<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('succcess'))
                {{ session('succcess') }}
            @endif
        </div>
    </div>

    <div class="container mt-5">
        <div class="card-deck">
            @foreach ($posts as $post)
                <div class="card">
                    <img class="card-img-top w-50" src="{{ asset('/storage/' . $post->image) }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text"> {{ Str::limit($post->content, 120) }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">Updated {{ $post->created_at->format('d M Y') }}</div>
                            <div class="col"><a href="{{ route('posts.edit', $post) }}" class="">Editer </a>
                            </div>
                            <div class="col">
                                <a href="#" class="text-danger"
                                    onclick="event.preventDefault;
                                            document.getElementById('destroy-post-form').submit();">Supprimer
                                    <form action="{{ route('posts.destroy', $post) }}" method="post"
                                        id="destroy-post-form">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>
