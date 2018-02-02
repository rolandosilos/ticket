@extends('themes.default1.admin.layout.kb')

@section('widget')
    active
@stop
@section('side2')
    class="active"
@stop
<script type="text/javascript" src="{{asset('dist/js/SetnicEdit.js')}}"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

@section('content')

	{!! Form::model($side,['url' => 'side2/'.$side->id, 'method' => 'PATCH','files'=>true]) !!}

<!-- <div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}"> -->
	<!-- table  -->

<div class="box box-primary">
@if(Session::has('success'))
    <div class="alert alert-success alert-dismissable">
        <i class="fa  fa-check-circle"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('success')}}
    </div>
    @endif
    <!-- failure message -->
    @if(Session::has('fails'))
    <div class="alert alert-danger alert-dismissable">
        <i class="fa fa-ban"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('fails')}}
    </div>
    @endif
    <div class="box-header">
        <h3 class="box-title">{{trans('lang.sidewidget2')}}</h3>  {!! Form::submit(trans('lang.save'),['class'=>'form-group btn btn-primary pull-right'])!!}
    </div>
    <div class="box-body">

    <div class="row">


    <div class="col-md-10">

        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

            {!! Form::label('title',trans('lang.title')) !!}
            {!! $errors->first('title', '<spam class="help-block">:message</spam>') !!}
            {!! Form::text('title',null,['class' => 'form-control']) !!}

        </div>

        <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
            {!! Form::label('content',trans('lang.content')) !!}
            {!! $errors->first('content', '<spam class="help-block">:message</spam>') !!}
            {!! Form::textarea('content',null,['class' => 'form-control','size' => '128x10','id'=>'footer','placeholder'=>'Enter the description']) !!}
        </div>

    </div>

    </div>

    </div>

@stop
@section('FooterInclude')

@stop

<!-- /content -->
