@extends('layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Clients</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="card">
              <div class="card-header">
                <a href="/ajouter_client"><h3 class="card-title">Ajouter nouveau client</h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>ID_CLIENT</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Catégorie</th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($clients as $client)
                  <tr>
                    <td>#{{$client->id}}</td>
                    <td>{{$client->nom}}
                    </td>
                    <td>{{$client->prenom}}</td>
                    <td style="background-color:{{$client->type_client->couleur}}">{{$client->type_client->nom}}</td>
                    <td><i class="fas fa-edit"></i></td>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                  </tr>
                  @endforeach
                 
                 
                  
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
    @endsection