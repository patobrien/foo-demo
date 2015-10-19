@extends('base')

@section('title')
  {{ isset($title) ? $title : 'Default' }}
@endsection

@section('content')

  @include('shared.header')

  <p>This resource blade template extends the base blade template and sets values for title and content.</p>
@endsection
