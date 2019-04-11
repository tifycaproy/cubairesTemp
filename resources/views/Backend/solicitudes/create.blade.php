
@extends ('Backend.layout.layout')

@section('content')
@php
  use Carbon\Carbon;
@endphp
<input id="mostra_vista" value="tramites" hidden disabled>
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<script>
$(document).ready(function(){
CKEDITOR.replace( 'editor',{
uiColor:"#DCDCDC",
toolbarGroups : [
  { name: 'basicstyles', groups: [ 'basicstyles'] },
  { name: 'paragraph',   groups: [ 'list', 'indent', 'align', 'bidi' ] },
  { name: 'document',	   groups: [ 'doctools' ] },
  { name: 'editing',     groups: ['spellchecker' ] },
  { name: 'styles' },
  { name: 'colors' },
  { name: 'tools' }
]
// removeButtons: 'Cut,Copy,Paste,Undo,Redo,Anchor,Underline,Strike,Subscript,Superscript'
});
});
</script>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Enviar Respuesta</h4>
          <p class="card-category">Complete todos los datos</p>
        </div>
        <div class="card-body">
            <form action="{{ route('enviarrespuesta',['id'=>$solicitud->solicitud_id])}}" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
          <div class="row">
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('titulo') ? ' has-error' : '' }}">
                {!! Form::label('titulo', 'Titulo del Cuerpo del Mensaje') !!}
                {!! Form::text('titulo', null, ['class' => 'form-control' , 'required' => 'required', 'autofocus'=> 'autofocus']) !!}

                @if ($errors->has('titulo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('titulo') }}</strong>
                    </span>
                @endif
              </div>
            </div>            
          </div>
          <div class="row">
            <div class="col-md-12">
            <div class="form-group {{ $errors->has('mensaje') ? ' has-error' : '' }}">
              {!! Form::label('mensaje','Cuerpo Del Mensaje') !!}
              {!! Form::text('mensaje', null, ['class' => 'form-control' , 'required' => 'required']) !!}
              @if ($errors->has('mensaje'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mensaje') }}</strong>
                    </span>
                @endif
            </div>
          </div>
        </div>
            <input class="btn btn-primary pull-right" id="submit" type="submit" value="Enviar Mensaje">
          <div class="clearfix"></div>
{!! Form::close() !!}
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>

@endsection
@push('scripts')
<script>
envio(function(){
  var notify = $.notify('<strong>Enviando</strong> No cierre la página...', {
	allow_dismiss: false,
	showProgressbar: true
});

setTimeout(function() {
	notify.update({'type': 'success', 'message': '<strong>Listo</strong> Su mensaje ha sido enviadp', 'progress': 25});
}, 4500);
});
  
  </script>
@endpush
