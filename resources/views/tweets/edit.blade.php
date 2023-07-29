<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tweet
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="card bg-white">
        <div class="card-body">
            <form action="{{ route('tweets.update', $tweet->id) }}" method="post">
                @csrf
                @method('put')
    <textarea name="content" class="textarea textarea-bordered w-full" placeholder="Apa yg kamu Pikirkan?" rows="3">{{ $tweet->content }}</textarea>
    <input type="submit" value="Edit" class="btn btn-primary">
            </form>
        </div>
    </div>
    </div>
</div>
</x-app-layout>
