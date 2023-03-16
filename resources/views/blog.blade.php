@section('title','about')

@extends('layouts.app')
@section('content')
<H1> BLOG </H1>
@foreach ( $posts as $post )
<H1>
{{ $post->title}}  
</H1>  
@endforeach
@endsection
 
