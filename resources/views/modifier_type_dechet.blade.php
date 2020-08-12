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
            <h1 class="m-0 text-dark">Modifier type dechet</h1>
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
              <div class="card-header">
                <h3 class="card-title">#{{$type_dechet->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/modifier_type_dechet_submit" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Nom</label>
                    <input name="id" type="hidden" class="form-control" placeholder="" value="{{$type_dechet->id}}">
                    <input name="nom" type="text" class="form-control" placeholder="" value="{{$type_dechet->nom}}">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <input name="description" type="text" class="form-control" placeholder=""  value="{{$type_dechet->description}}">
                  </div>
                  <div class="form-group">
                    <label>Couleur</label>
                    <input name="couleur" type="color" class="form-control"  placeholder="" value="{{$type_dechet->couleur}}">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input name="image" type="file" class="form-control"  placeholder="" value="{{$type_dechet->image}}">
                    <img src="..." alt="..." class="img-thumbnail">
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          
            
    </section>
    <!-- /.content -->
   
@endsection