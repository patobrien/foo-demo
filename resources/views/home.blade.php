@extends('core.base')

@section('title','Homepage Form')

@section('content')

@if (isset($first) && isset($last))

<p>The name is {{ $first }} {{ $last }}</p>
<a href="/">Back to the form</a>

@else

{!! Form::open() !!}

<div class="form-group">
    {!! Form::label('First Name') !!}
    {!! Form::text('fname', 'pat',
        array('required',
              'class'=>'form-control',
              'placeholder'=>'First name')) !!}
</div>
<div class="form-group">
    {!! Form::label('Last Name') !!}
    {!! Form::text('lname', 'last',
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Last name')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Submit',
      array('class'=>'btn btn-primary')) !!}
</div>

{!! Form::close() !!}

@endif

@endsection
