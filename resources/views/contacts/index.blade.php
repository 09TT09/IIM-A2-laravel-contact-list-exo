@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- TODO href de la balise <a> pour pointer vers la route de création de contact -->
                <a class="btn btn-primary float-right" href="{{ url('contacts/create') }}">Ajouter un contact</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom du contact</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- TODO : Début de la boucle -->
					@forelse($contact as $unique_contact)
                    <tr>
                        <td><!-- TODO Afficher l'id du contact -->{{$unique_contact->id}}</td>
                        <td><!-- TODO Afficher le nom du contact -->{{$unique_contact->name}}</td>
                        <td><!-- TODO Afficher le tel du contact -->{{$unique_contact->tel}}</td>
                        <td><!-- TODO Afficher l'email du contact -->{{$unique_contact->email}}</td>
                        <td>
                            <!-- TODO href de la balise <a> pour pointer vers la route de modification du contact -->
                            <a class="btn btn-primary" href="{{ url('contacts/'.$unique_contact->id.'/edit') }}">Modifier</a>
							   
                            <form method="POST" action="{{ route('contacts.destroy', $unique_contact->id) }}">
                                <!-- TODO Form pour la suppression d'un contact -->
								{{ csrf_field() }}
								{{ method_field('DELETE') }}

								<button type="submit" class="btn btn-danger"
                               onclick="document.getElementById('delete-form-{{$unique_contact->id}}').submit()">Supprimer</button>
								
                            </form>
                        </td>
                    </tr>
                    <!-- TODO : Conditions pas de contact -->
					@empty
                    <tr>
                        <td>Vous n'avez pas encore de contact</td>
                    </tr>
                    <!-- TODO : FIN Boucle -->
					@endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
