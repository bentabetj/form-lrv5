@extends('master')

@section('contenu')

<form action="" method="POST" role="form">
	<legend>Form title</legend>

	<div class="form-group">
		<label for="nom">Nom</label>
		<input type="text" name="nom" class="form-control" id="nom">
		<label for="">Mail</label>
		<input type="mail" name="" ="email"class="form-control" id="nom">
		<label for="inputTexte">Message</label>
		<textarea name="texte" name="message" id="inputTexte" class="form-control" rows="3">
		</textarea>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop