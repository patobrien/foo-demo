@extends('core.base')

@section('title')

Foo Page {{ $number or 'default' }}

@endsection

@section('content')

<p>The number is {{ $number or 'default' }}</p>
<p>random number {{ $random }}</p>

@endsection
