@extends('layouts.master')
@section('content')
      <style>
      .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    color: #555;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
    cursor: default;
    padding:10px;
}
.nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Grille des prix</h1>
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
                
 
  <ul class="nav nav-tabs">
   @foreach($type_dechets as $type_dechet)
    <li><a data-toggle="tab" href="#{{$type_dechet->id}}">{{$type_dechet->nom}}</a></li>
   @endforeach
  </ul>

  <div class="tab-content">
   @foreach($type_dechets as $type_dechet)
    <div id="{{$type_dechet->id}}" class="tab-pane">
      <h3>{{$type_dechet->nom}}</h3>
      <form action="/ajouter_grille_des_prix" method="post" enctype="multipart/form-data">
      @csrf
      <input id="nom" class="form-control" type="hidden" value="{{$type_dechet->id}}" name="id_type_dechet" >
        <div class="row input-group">
          <div class="col-lg-3">
            <label for="nom">Nom:</label>
            <input id="nom" class="form-control" type="text" placeholder="nom" name="nom" required="" autofocus="">
          </div>
          <div class="col-lg-3">
            <label for="description">Description:</label>
            <input id="description" class="form-control" type="text" placeholder="description" name="description" required="">
          </div>
          <div class="col-lg-3">
            <label for="prix">Prix:</label>
            <input id="prix" class="form-control" type="text" placeholder="prix" name="prix" required="">
            <input class="form-control" type="hidden" value="6" name="typo">
          </div>
          <div class="col-lg-3">
            <label for="prix">Image:</label>
            <input id="prix" class="form-control" type="file" placeholder="prix" name="image" >
          </div>
          <div class="col-lg-3">
            <br> <!-- TODO: trouver plus elegant en CSS que ce hack... -->
            <button name="creer" class="btn btn-success">Créer</button>
          </div>
        </div>
      </form>
      @php
      $grilles = \App\Grille_Des_Prix::where('id_type_dechet',$type_dechet->id)->get();
      @endphp
      <table id="example1" class="table table-bordered table-striped" style="margin-top:20px;">
                      <thead>
                        <tr>
                          <th>Date Création</th>
                          <th>Nom</th>
                          <th>Description</th>
                          <th>Prix</th>
                          <th>Visible</th>
                          <th>Icon</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($grilles as $grille)
                        <tr>
                          <td>{{$grille->created_at}}</td>
                          <td>{{$grille->nom}}</td>
                          <td>{{$grille->description}}</td>
                          <td>{{$grille->prix}}</td>
                          <td>{{$grille->visible}}</td>
                          <td><img src="/images/{{$grille->image}}" width="20"></td>
                          <td><a href="/modifier_grille_des_prix/{{$grille->id}}"><i class="fas fa-edit"></i></a></td>
                          <td><a href=""><i class="fa fa-times" aria-hidden="true"></i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

      
    </div>
    
    @endforeach

    
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