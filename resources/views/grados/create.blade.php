@extends('layouts.app')

@section('customcss')
@endsection
@section('content')

  
     <div class="col-md-8">
     @include('common.errors')
              <!-- formulario general de create -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h2 class="box-title">Crear nuevo  Grado</h2>
                </div><!-- /.box-header -->

        {!! Form::open(['route' => 'grados.store']) !!}
            <div class="box-body">
             @include('grados.fields')
                         <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  {!! Form::button('<span class="glyphicon glyphicon-floppy-disk" ></span> Guardar', ['type' => 'submit','class' => 'btn btn-primary']) !!}
                  <a href="{!! route('grados.index') !!}" class="btn btn-primary"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
@section('customjs')
@endsection
