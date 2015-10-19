@extends('base')

@section('title','Homepage')

@section('content')

<h1>{{ $title }}</h1>
<p>{{ $text }}</p>

<h2>previous submission data</h2>

<pre>

  {{ var_dump($all) }}

</pre>

<h2>Title new blade form</h2>

{!! Form::open(array('url' => '/')) !!}

{!! Form::label('Title') !!}
{!! Form::text('title',
                $title,
                array(
                  'class'=>'form-control',
                  'placeholder'=>'First name'
                )
              )
!!}

{!! Form::label('Content') !!}
{!! Form::text('content',
                $text,
                array(
                  'class'=>'form-control',
                  'placeholder'=>'First name'
                )
              )
!!}
              {!! Form::submit('Submit',
                array('class'=>'btn btn-primary')) !!}

{!! Form::close() !!}


<h2>Declare a title Manual Form</h2>
<form method="POST" action="/">
  <input type='hidden' name='_token' value='{{ csrf_token() }}'>
  <input type="text" name="title" placeholder="name the page">
  <input type="text" name="content" placeholder="content">
  <input type="submit" value="submit">
</form>

<h2>Title in reverse</h2>
<form method="POST" action="/">
  <input type='hidden' name='_token' value='{{ csrf_token() }}'>
  <input type="text" name="title_reverse" placeholder="name the page">
  <input type="text" name="content_reverse" placeholder="content">
  <input type="submit" value="submit">
</form>


@endsection
