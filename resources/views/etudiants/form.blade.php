@include('include.head')

@extends('layouts')


@section('content')
       
       <div class="col-md-6 offset-md-3">
            <div class="card card-outline-secondary">
                <div class="card-header">
                    <h1>Nouvel Enregistrement</h1>
                        <form action="{{route('enregistrer')}}"  method="POST">
                        @csrf

                            <div class="form-group">
                                <label for="nom" class="col-sm-2 control-label">Nom :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="col-sm-2 control-label">Prenom :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="prenom" id="prenom" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                                    <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Telephone:</label>
                                <div class="col-sm-8">
                                    <input type="phone" class="form-control" name="phone" id="phone" required>
                                </div>
                                </div>
                                    <div class="form-group">
                                <label for="filliere" class="col-sm-2 control-label">Filliere:</label>
                                <div class="col-sm-8">
                                    <input type="filliere" class="form-control" name="filliere" id="filliere" required>
                                </div>
                            </div>
                                  <button type="submit" class="btn btn-success btn-lg">Enregistrer Etudiant</button>
                    </form>
             </div>        
         </div>
    </div> 
    @endsection