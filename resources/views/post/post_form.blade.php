@extends('layouts.master_layout')



@section('content')
<div class="container-fluid">
<div class="row">

@include('partials.sidebar')

<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
<h1>Create Post</h1>
<div class="col-md-4">
<form method="POST" action="{{route('post.form')}}">
{{csrf_field()}}
<div class="form-group">
<label for="name">Title</label>
<input type="text" class="form-control" id="id_title" name="title" aria-describedbay="title" placeholder="Enter title">
</div>
<div class="form-group">
<label for="description">Description</label>
<textarea rows="3" class="form-control" id="id_description" name="description"  placeholder="Description">
</textarea>
</div>
<button type="submit" class="btn btn-primary">Create post</button>
</form>
</div>
</main>
</div>
</div>
@endsection