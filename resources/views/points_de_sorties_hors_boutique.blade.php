@extends('layouts.master')
@section('content')
      
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Gestion des points de sortie hors-boutique</h1>
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
                  <h1>Gérez ici les différents points de sortie hors-boutique.
</h1>
                  
                  <div class="container">
                    <div class="panel-body"  style="margin-bottom:30px">
                      <div class="row">
                        <form action="/ajouter_points_de_sorties_hors_boutique" method="post">
                          @csrf
                          <label for="nom">Nom:</label>
                          <input type="text" name="nom" id="nom" value="" class="form-control" autocomplete="off" required="">
                          <label for="nom">Adresse:</label>
                          <input type="text" name="adresse"  value="" class="form-control" autocomplete="off" required="">
                          <label for="commentaire">Description:</label>
                          <input type="text" name="commentaire" id="commentaire" value="" class="form-control" autocomplete="off" required="">
                          <label for="nom">Pesée Max:</label>
                          <input type="text" name="pesee_max"  value="" class="form-control" autocomplete="off" required="">
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
                          <th>Adresse</th>
                          <th>Description</th>
                          <th>Pesée Max</th>
                          <th>Couleur</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($points_de_sorties as $points_de_sortie)
                        <tr>
                          <td>{{$points_de_sortie->created_at}}</td>
                          <td>{{$points_de_sortie->nom}}</td>
                          <td>{{$points_de_sortie->adresse}}</td>
                          <td>{{$points_de_sortie->commentaire}}</td>
                          <td>{{$points_de_sortie->pesee_max}}</td>
                          <td> <span class="badge" style="background-color:{{$points_de_sortie->couleur}}">{{$points_de_sortie->couleur}}</span></td>
                          <td><a href="/modifier_points_de_sorties_hors_boutique/{{$points_de_sortie->id}}"><i class="fas fa-edit"></i></a></td>
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