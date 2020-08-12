@extends('layouts.master')
@section('content')
      
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Gestion de la typologie et de la masse des différentes poubelles mises à disposition de la structure par la ville</h1>
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
                  <h1>Gérez ici la liste de vos bacs à déchets.</h1>
                  <p>Cet outil vous permet notamment de discerner les bacs de matières recyclables de ceux dont le contenu est destiné à un enfouissement ou une incinération.</p>
                  <div class="container">
                    <div class="panel-body"  style="margin-bottom:30px">
                      <div class="row">
                        <form action="/ajouter_type_poubelle" method="post">
                          @csrf
                          <label for="nom">Nom:</label>
                          <input type="text" name="nom" id="nom" value="" class="form-control" autocomplete="off" required="">
                          <label for="commentaire">Description:</label>
                          <input type="text" name="description" id="commentaire" value="" class="form-control" autocomplete="off" required="">
                          <label for="couleur">Masse:</label>
                          <input id="couleur" name="masse" type="text" value="" class="form-control" required="">
                          <label for="couleur">Déchet ultime?:</label>
                          <input id="couleur" name="ultime" type="checkbox" value="" class="form-control" checked>
                           <label for="couleur">Couleur:</label>
                           <input id="couleur" name="couleur" type="color" value="#" class="form-control" required="">
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
                          <th>Masse</th>
                          <th>Déchet ultime?</th>
                          <th>Couleur</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($type_poubelles as $type_poubelle)
                        <tr>
                          <td>{{$type_poubelle->created_at}}</td>
                          <td>{{$type_poubelle->nom}}</td>
                          <td>{{$type_poubelle->description}}</td>
                          <td>{{$type_poubelle->masse_bac}}</td>
                          @if($type_poubelle->ultime=1)
                          <td>oui</td>
                          @else
                          <td>non</td>
                          @endif
                          <td> <span class="badge" style="background-color:{{$type_poubelle->couleur}}">{{$type_poubelle->couleur}}</span></td>
                          <td><a href="/modifier_type_poubelle/{{$type_poubelle->id}}"><i class="fas fa-edit"></i></a></td>
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