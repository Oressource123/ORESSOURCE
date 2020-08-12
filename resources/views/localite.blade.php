@extends('layouts.master')
@section('content')
      
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Gestion des localités de collecte</h1>
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
                  <h1>Définissez ici les localité d'origine possibles pour les matériaux entrant.</h1>
                  <p>Ces localités sont renseignées au moment de la collecte et permettent d'estimer l'impact territorial de la structure</p>
                  <div class="container">
                    <div class="panel-body"  style="margin-bottom:30px">
                      <div class="row">
                        <form action="/ajouter_localite" method="post">
                          @csrf
                          <label for="nom">Nom:</label>
                          <input type="text" name="nom" id="nom" value="" class="form-control" autocomplete="off" required="">
                          <label for="commentaire">Description:</label>
                          <input type="text" name="commentaire" id="commentaire" value="" class="form-control" autocomplete="off" required="">
                          <label for="commentaire">Lien externe:</label>
                          <input type="text" name="lien" id="commentaire" value="" class="form-control" autocomplete="off" required="">
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
                          <th>Lien externe</th>
                          <th>Couleur</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($localites as $localite)
                        <tr>
                          <td>{{$localite->created_at}}</td>
                          <td>{{$localite->nom}}</td>
                          <td>{{$localite->commentaire}}</td>
                          <td>{{$localite->relation_openstreetmap}}</td>
                          <td> <span class="badge" style="background-color:{{$localite->couleur}}">{{$localite->couleur}}</span></td>
                          <td><a href="/modifier_localite/{{$localite->id}}"><i class="fas fa-edit"></i></a></td>
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