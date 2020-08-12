@extends('layouts.master')
@section('content')
@if(\Session::has('success'))
         <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success')!!}</li>
            </ul>
         </div>
         @endif
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Nouveau Client</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/ajouter_client_submit" method="post">
              @csrf
                <div class="card-body">
                <div class="form-group">
                  <label>Titre</label>
                  <select name="titre" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option value="M">M</option>
                    <option value="Mme">Mme</option>
                    <option value="Mlle">Mlle</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input name="nom" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Prénom</label>
                    <input name="prenom" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Adresse</label>
                    <input name="adresse" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ville</label>
                    <input name="ville" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Code Postal</label>
                    <input name="cp" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input name="email" type="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Téléphone</label>
                    <input name="tel" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date Adhesion</label>
                    <input name="date_adhesion" type="date" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Montant</label>
                    <input name="montant" type="text" class="form-control">
                  </div>
    
                  <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Categorie</label>
                  <select name="categorie" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    @foreach($types_clients as $types_client)
                    <option value="{{$types_client->id}}" style="color:{{$types_client->couleur}};" >{{$types_client->nom}}</option>
                    @endforeach
                    
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          
            
    </section>

  @endsection