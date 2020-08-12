@extends('layouts.master')
@section('content')
      
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Type sorties hors boutique</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <section class="">
                <div class="container">
                  <h1>Gérez ici les différents types de collectes</h1>
                  <div class="panel-heading">Gérez ici les différents types de sorties hors-boutique.</div>
                  <p>Permet de différencier les collectes en fonction de leur origine (apport volontaire, collecte à domicile, collecte en pied d'immeuble...).</p>
                  <div class="container">
                    <div class="panel-body"  style="margin-bottom:30px">
                      <div class="row">
                        <form action="/ajouter_type_collectes" method="post">
                          @csrf
                          <label for="nom">Nom:</label>
                          <input type="text" name="nom" id="nom" value="" class="form-control" autocomplete="off" required="">
                          <label for="commentaire">Description:</label>
                          <input type="text" name="commentaire" id="commentaire" value="" class="form-control" autocomplete="off" required="">
                          <label for="couleur">Couleur:</label><input id="couleur" name="couleur" type="color" value="#" class="form-control" required="">
                          <br><button class="btn btn-primary">Créer</button> <br>
                        </form>
                      </div>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Date Création</th>
                          <th>Nom</th>
                          <th>Description</th>
                          <th>Couleur</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($type_collectes as $type_collecte)
                        <tr>
                          <td>{{$type_collecte->created_at}}</td>
                          <td>{{$type_collecte->nom}}</td>
                          <td>{{$type_collecte->description}}</td>
                          <td> <span class="badge" style="background-color:{{$type_collecte->couleur}}">{{$type_collecte->couleur}}</span></td>
                          <td><a href="/modifier_type_collectes/{{$type_collecte->id}}"><i class="fas fa-edit"></i></a></td>
                          <td><a href=""><i class="fa fa-times" aria-hidden="true"></i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </section>
              <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
   
@endsection