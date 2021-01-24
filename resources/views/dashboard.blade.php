@extends('layouts.app')

@section('content')

    <div class="flex justify-center">

        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class=" p-4">KLIENTI</h1>
            @foreach($clients as $client)
                            <h1> <a href="{{ route('clients.info', $client->name) }}">{{$client->name}}</a></h1>
            @endforeach
        </div>

    </div>
@endsection
