@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Modification du contact <b><!-- TODO Afficher le nom du contact --></b></h3>
                <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
                    <!-- TODO mise en place de la form pour modifier un contact -->
					{{ csrf_field() }}
                    {{ method_field('PUT') }}
					
					<label>Nom</label><br>
					<input type="text" name="name">
					<br><br>
				
					<label>Téléphone</label><br>		
					<input type="text" name="tel">
					<br><br>
					
					<label>Email</label><br>	
					<input type="text" name="email">
					<br><br>
					
                    <button type="submit">Modifier</button>
					
                </form>
            </div>
        </div>
    </div>
@endsection
