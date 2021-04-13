@extends('layouts.app')
@section('content')

@if (count($comments) > 0)
<ul class="comment-wrapper">
  @foreach ($comments as $comment)
      <li class="comment-item">
        <p>{{ $comment->username }}</p>
        <p>{{ $comment->comment }}</p>
      </li>
  @endforeach
</ul>
@endif
    
@endsection