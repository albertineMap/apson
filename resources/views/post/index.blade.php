<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Apson-blog') }}
        </h2>
    </x-slot>

    {{-- template --}}

    @include('partials.top')
<!-- This is an example component -->
@foreach ($posts as $post)
    <div class='flex items-center justify-center mt-6 mb-6'>  <div class="rounded-xl border p-5 shadow-md w-9/12 bg-gray">
        <div class="flex w-full items-center justify-between border-b pb-3">
        <div class="flex items-center space-x-3">
            <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
            <div class="text-lg font-bold text-slate-700">{{ $post->user->name }}</div>
        </div>
        <div class="flex items-center space-x-8">
            <button class="rounded-2xl border bg-neutral-100 px-3 text-blue-600 py-1 text-xs font-semibold">{{ $post->category->name }}</button>
            <div class="text-xs text-neutral-500">{{ $post->created_at->format('d M Y') }}</div>
        </div>
        </div>

        <div class="mt-4 mb-6">
        <div class="mb-3 text-xl font-bold text-amber-700">{{ $post->title}}</div>
        <div class="text-sm text-neutral-600">{{ Str::limit($post->content, 120)}}</div>
        </div>

        <div>
        <div class="flex items-center justify-between text-slate-500">
            <div class="flex space-x-4 md:space-x-8">
            <div class="flex cursor-pointer items-center transition hover:text-slate-600">
                <a href="{{ route('posts.show', $post) }}">Read more</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
@endforeach

@include('partials.footer')
</x-app-layout>
