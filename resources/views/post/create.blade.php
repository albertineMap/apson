<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer un post') }}
        </h2>
    </x-slot>

    {{-- template --}}
    <div class='flex items-center justify-center mt-6 mb-6'>  <div class="rounded-xl border p-5 shadow-md w-9/12 bg-gray">
        <form action="{{ route('posts.store')}}" method ="post" enctype="multipart/form-data">
        </form>
    </div>

@include('partials.footer')
</x-app-layout>
