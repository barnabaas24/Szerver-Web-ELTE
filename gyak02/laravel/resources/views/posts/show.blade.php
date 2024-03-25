@extends('layouts.main')

@section('content')

<h2 class="text-xl">{{$post->title}}</h2>
<i>{{$post->user->name}}</i>
{{$post->content}}


@endsection
