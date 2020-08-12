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
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    box-shadow: 0 1px 2px rgba(0,0,0,.075);
    width: 100px;
    height: 100px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
<div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Point de vente</h1>
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
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
        <ul class="nav nav-tabs">
        @foreach($type_dechets as $type_dechet)
            <li><a data-toggle="tab" href="#{{$type_dechet->id}}">{{$type_dechet->nom}}</a></li>
        @endforeach
        </ul>

        <div class="tab-content">
        @foreach($type_dechets as $type_dechet)
            <div id="{{$type_dechet->id}}" class="tab-pane">
            <h3>{{$type_dechet->nom}}</h3>
            @php
            $grilles = \App\Grille_Des_Prix::where('id_type_dechet',$type_dechet->id)->get();
            @endphp
            @foreach($grilles as $grille)
            <figure class="figure">
            <img src="/images/{{$grille->image}}" class="figure-img img-fluid rounded img-thumbnail" >
            <figcaption class="figure-caption text-center">{{$grille->nom}}</figcaption>
            </figure>
            @endforeach
            </div>
        @endforeach

        </div>
		</div>
		<div class="col-md-4">
        bla
		</div>
	</div>
</div>
@endsection

