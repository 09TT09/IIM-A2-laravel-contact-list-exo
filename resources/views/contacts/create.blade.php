@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <form method="POST" action="{{ route('contacts.store') }}">
                    <!-- TODO mise en place de la form pour créer un contact -->
					{{ csrf_field() }}
				
					<label>Nom</label><br>
					<input type="text" name="name">
					<br><br>
				
					<label>Téléphone</label><br>		
					<input type="text" name="tel">
					<br><br>
					
					<label>Email</label><br>	
					<input type="text" name="email">
					<br><br>
					
                    <button type="submit">Créer</button>
					
                </form>
            </div>
        </div>
    </div>
@endsection
