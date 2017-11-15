@extends('layouts.app-panel')

@section('title')

  {{ $title }}

@endsection

@section('content')

  <table class="table">
    <thead>
      <tr>
        <th>To</th>
        <th>Subject</th>
        <th>Last Updated Date</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($messages as $message)
      <tr>
        <td>{{ $message->recipient }}</td>
        <td>{{ $message->subject }}</td>
        <td>{{ $message->updated_at->format('H:m a, F d, Y') }}</td>
      </tr>
    @endforeach

  </table>

@endsection