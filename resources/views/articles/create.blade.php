@extends('layout.master')

@section('title', 'Create New Article')

@section('content')

<div class="row">
    <div class="col-md-6">
    <h4>Create new Article</h4>
    <hr>

<form action="{{ route('articles.create') }}" method="post">

@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
    <span class="invalid-feedback">The title is required</span>
</div>

<div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="10"></textarea>
    <span class="invalid-feedback">The content is required</span>
</div>

<button type="submit" class="btn btn-primary">Create</button>

</form>
</div>
</div>


@endsection