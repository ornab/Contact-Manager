@extends('layouts.main')




@section('content')

<div class="panel panel-default">
            <div class="panel-heading">
              <strong>Edit Contact</strong>
            </div>
              
            {!! Form::model($contact, ['route' => ['contacts.update', $contact->id], 'method'=> 'PATCH'])  !!}
                                  
               @include('contacts.form')
            
            {!! Form::close() !!}
            
          </div>


@endsection