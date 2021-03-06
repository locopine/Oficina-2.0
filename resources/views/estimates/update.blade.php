@extends('layouts.app')

@section('content')
<div class="container">
<form action="/orcamentos/{{ $estimate->id }}" enctype="multipart/form-data" method="post">
      @csrf
      @method('PATCH')

      <div class="row">
         <div class="col-8 offset-2">

            <div class="row">
               <h1>Editar Orçamento</h1>
            </div>

            <div class="form-group row">
               <label for="client" class="col-md-4 col-form-label">Cliente</label>

               <input id="client" type="text"
                        class="form-control{{ $errors->has('client') ? ' is-invalid' : '' }}" 
                        name="client" 
                        value="{{ old('client') ?? $estimate->client }}" 
                        autocomplete="client" autofocus>

               @if ($errors->has('client'))
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('client') }}</strong>
               </span>
               @endif
            </div>

            <div class="form-group row">
               <label for="estimatedValue" class="col-md-4 col-form-label">Valor Orçado</label>

               <input id="estimatedValue" type="number" step="0.01"
                        class="form-control{{ $errors->has('estimatedValue') ? ' is-invalid' : '' }}" 
                        name="estimatedValue" 
                        value="{{ old('estimatedValue') ?? $estimate->estimatedValue }}" 
                        autocomplete="estimatedValue" autofocus>

               @if ($errors->has('estimatedValue'))
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('estimatedValue') }}</strong>
               </span>
               @endif
            </div>

            <div class="form-group row">
               <label for="description" class="col-md-4 col-form-label">Descrição</label>

               <input id="description" required size="240"
                        class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" 
                        name="description" 
                        value="{{ old('description') ?? $estimate->description }}" 
                        autocomplete="description" autofocus>

               @if ($errors->has('description'))
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('description') }}</strong>
               </span>
               @endif
            </div>

            <div class="row pt-4">
               <button type="submit" class="btn btn-dark">Salvar</button>
            </div>

            


         </div>
      </div>
   </form>
</div>
@endsection
