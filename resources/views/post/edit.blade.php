<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer {{ $post->title}}
        </h2>
    </x-slot>

    {{-- template --}}

    <div class='flex items-center justify-center mt-6 mb-6'>
        <div class="rounded-xl border p-5 shadow-md w-9/12 bg-gray">
            <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="row pt-2 mb-2 text-red-500">
                    @if (isset($errors) && count($errors))

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </ul>

                    @endif
                </div>
                <div class="row">
                    <h1 class="display-4 text-center mx-auto mb-5 text-primary">Creer un nouveau blog</h1>
                </div>
                <div class="row pt-2 mb-3">
                    <div class="col">
                        <!-- Title input -->
                        <div class="form-outline">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" id="title" name="title" value="{{ $post->title }}" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <!-- Category select -->
                        <div class="form-outline">
                            <label class="form-label">Category</label>
                            <select name="category" id="category" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $post->category->id === $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row pt-2 mb-2 ">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-6">
                        <!-- File image input -->
                        <div class="form-outline">
                            <label class="form-label" for="title">Image du post</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label">Choose file...</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>

                <div class="row pt-2 mb-2">
                    <div class="col">
                        <!-- Content textarea -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example3">Content</label>
                            <textarea type="text" id="content" name="content" class="form-control" >{{ $post->content }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row pt-2 mb-2">
                    <!-- File button submit -->
                    <div class="col text-center">
                        <button class="btn btn-primary mt-3">let's update !</button>
                    </div>
                </div>
            </form>
        </div>
</x-app-layout>
