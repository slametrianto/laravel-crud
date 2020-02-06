@extends('layout.master')


@section('title', 'Home')



@section('content')

<div class="container">



@foreach($articles as $article)

<p>{{$article->title}}</p>
<p>{{$article->body}}</p>

@endforeach

</div>



@endsection