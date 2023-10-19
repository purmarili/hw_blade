@extends('layouts.app')

@section('content')
  <div class="row">
    @foreach ($quizzes as $quiz)
      <div class="col-md-4">
        <img src="{{ $quiz['photo'] }}" alt="{{ $quiz['name'] }}">
        <h5>{{ $quiz['name'] }}</h5>
        <div class="{{ $quiz['status'] === 'active' ? 'text-success' : 'text-danger' }}">
          {{ ucfirst($quiz['status']) }}
        </div>
      </div>
    @endforeach
  </div>
@endsection
