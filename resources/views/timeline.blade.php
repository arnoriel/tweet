<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Timeline') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card bg-white">
                <div class="card-body">
                    <form action="{{ route('tweets.store')}}" method="post">
                        @csrf
            <textarea name="content" class="textarea textarea-bordered w-full" placeholder="Apa yg kamu Pikirkan?" rows="3"></textarea>
            <input type="submit" value="Tweet" class="btn btn-primary">
                    </form>
                </div>
            </div>
            
            @foreach ($tweets as $tweet)
                <div class="card my-4 bg-white">
                    <div class="card-body">
                        <h2 class="text-xl font-bold">{{ $tweet->user->name }}</h2>
                    <p>{{ $tweet->content}}</p>
                        <div class="text-end">
                            @can('update', $tweet)
                            <a href="{{ route('tweets.edit', $tweet->id) }}" class="link link-hover text-blue-300">Edit</a>
                            @endcan
                            @can('delete', $tweet)
                            <form action="{{ route('tweets.destroy', $tweet->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-error btn-sm">Hapus</button>
                            </form>
                            @endcan
                        <span class="text-sm">{{ $tweet->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
