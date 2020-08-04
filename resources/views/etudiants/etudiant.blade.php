@extends('layouts')


@section('content')


    <div class="contenair">  
       <div class="row">
           <div class="col-md col-md-offset-2">
               <div class="panel panel-default">
                    <div class="panel-heading"><h1>liste des etudiants</h1></div>
                        <div class="panel-body">
                             <table  class="table table-bordered table-striped">
                                <thead>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Email</th>
                                    <th>Details</th>
                                    <th>Editer</th>
                                    <th>Supprimer</th>
                                </thead>
                                <tbody>
                                @foreach($etudiants as $etudiant)
                                    <tr>
                                    <td>{{$etudiant->name}}</td>
                                    <td>{{$etudiant->prenom}}</td>
                                    <td>{{$etudiant->email}}</td>
                                    <td>
                                        <a href="{{route('Details', ['id'=>$etudiant->id] )}}"  class="btn btn-sm btn-primary" >Details</a>
                                    </td>
                                    <td>
                                        <a href="{{route('edit', ['id'=>$etudiant->id] )}}" class="btn btn-sm btn-warning" >Editer</a>
                                    </td>
                                    <td>
                                        <a href="{{route('delete', ['id'=>$etudiant->id] )}}" class="btn btn-sm btn-danger" >Supprimer</a>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>                   
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endsection