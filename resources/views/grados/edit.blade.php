@extends('layouts.app')

@section('content')
    <div class="col-md-12">
     @include('common.errors')
              <!-- general form elements -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h2 class="box-title">Edit Grado</h2>
                </div><!-- /.box-header -->

        {!! Form::model($grado, ['route' => ['grados.update', $grado->id], 'method' => 'patch']) !!}
            <div class="box-body">
            @include('grados.fields')
            <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  {!! Form::button('<span class="glyphicon glyphicon-floppy-disk" ></span> Actualizar', ['class' => 'btn btn-primary']) !!}
                  <a href="{!! route('grados.index') !!}" class="btn btn-primary"><i class="fa fa-ban"></i> Cancelar</a>
              </div>

            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection


 