<!-- TODO Etendre le layout "app" -->
@extends('layouts/app')

<!-- TODO Dans la séction "content", ajouter un container, et dans ce container faire une liste des users et de leur nombre de contacts-->

@section('content')

<div class="container">

	@forelse($user as $unique_user)
		<li>l'utilisateur {{ $unique_user->name }} à </li>	
	@empty
		<li>Il n'y à pas d'utilisateurs</li>
	@endforelse
		
</div>
@endsection
