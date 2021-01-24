@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @if($items->count())
                @foreach($items as $item)
                        {{ $item->item_type }}
                @endforeach
{{--                {{ $posts->links() }}--}}
            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection
