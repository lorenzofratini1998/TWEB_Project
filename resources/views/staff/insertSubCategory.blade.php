@extends('layouts.staff')

@section('title', 'Inserisci SottoCategorie')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/staff.css') }}" >
@endsection

@section('scripts')

@parent
<script src="{{ asset('js/formValid.js') }}" ></script>
<script>
    $(function () {
        var actionUrl = "{{ route('insertSubCategory.store') }}";
        var formId = 'insertSubCategory';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#insertSubCategory").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
    });
</script>
@endsection

@section('content')
<div class='insertCategory'> 
    <h1>Aggiungi Sottocategoria</h1>
    <p>Utilizza questa form per inserire una nuova Sottocategoria nel Catalogo</p>
    <hr>
     {{ Form::open(array('route' => 'insertSubCategory.store', 'id' => 'insertSubCategory')) }}
      <div class="wrapInput">
                {{ Form::label('name', 'Nome Sottocategoria', ['class' => 'labelInput']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
      </div>
     
      <div class="wrapInput">         
                {{ Form::label('desc', 'Descrizione', ['class' => 'labelInput']) }}
                {{ Form::text('desc', '', ['class' => 'input', 'id' => 'desc']) }}
      </div> 
      <div class="wrapInput">         
                {{ Form::label('codCat', 'Categoria', ['class' => 'labelInput']) }}
                {{ Form::select('codCat', $cats, '', ['class' => 'input','id' => 'codCat']) }}
      </div>
                {{ Form::submit('Aggiungi Sottocategoria', ['class' => 'submit']) }}

     {{ Form::close() }}
</div>


@endsection