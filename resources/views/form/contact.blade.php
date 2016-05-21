@extends('master')

@section('contenu')

<form action="http://localhost/form-lrv5/public/contact" method="POST" role="form">
	<legend>Form title</legend>
	<div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
		<label for="nom">Nom</label></br>
		{{ $errors->first('nom', '<small class="help-block">:message</small>') }}
	</div>	
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="nom" class="form-control" id="nom">
		<label for="email">Mail</label></br>
		<input type="mail" name="email" class="form-control" id="email"></br>
		<label for="inputTexte">Message</label>
		<textarea name="texte" id="inputTexte" class="form-control" rows="3">
		</textarea>
	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop

