@extends('layouts')


@section('content')
       
       <div class="col-md-6 offset-md-3">
            <div class="card card-outline-secondary">
                <div class="card-header">
                   <div class="panel-heading"> Affichage de l'etudiant {{$etudiant->id}}</div>
                        <form >
                        <div class="form-group">
                                <label for="id" class="col-sm-2 control-label">ID :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$etudiant->id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nom" class="col-sm-2 control-label">Nom :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$etudiant->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="col-sm-2 control-label">Prenom :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$etudiant->prenom}}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" value="{{$etudiant->email}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">telephone:</label>
                                <div class="col-sm-8">
                                    <input type="phone" class="form-control" value="{{$etudiant->phone}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="filliere" class="col-sm-2 control-label">Filliere :</label>
                                <div class="col-sm-8">
                                    <input type="text" value="{{$etudiant->filliere}}" class="form-control" name="filliere" id="filliere" required>
                                </div>
                            </div>
            
                    </form>
             </div>        
         </div>
    </div> 
    @endsection