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
		<div class="col-md-7">
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
            <img src="/images/{{$grille->image}}" class="figure-img img-fluid rounded img-thumbnail" data-toggle="modal" data-target="#exampleModal" data-id="{{$grille->id}}"  data-prix="{{$grille->prix}}">
            <figcaption class="figure-caption text-center">{{$grille->nom}}</figcaption>
            </figure>
            @endforeach
            </div>
        @endforeach

        </div>
		</div>
		<div class="col-md-5">
        <div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Panier</a>
				<div class="list-group-item">
                <div class="form-group">
                  <label>Client</label>
                  <select name="titre" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option value="0">Client non-adherant</option>
                    @foreach($clients as $client)
                    <option value="{{$client->id}}">{{$client->nom}}</option>
                    @endforeach
                    
                  </select>
                </div>
				</div>
				<div class="list-group-item">
					<h4 class="list-group-item-heading">
                    
					</h4>
					<p class="list-group-item-text">
						@if(isset($datas))
                        @foreach($datas as $data)
                        <li>{{$data->nom}}</li>
                        @endforeach
                        @endif
					</p>
				</div>
				<div class="list-group-item justify-content-between">
				
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Total : <span class="badge badge-light badge-pill">14</span></a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter au panier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form  method="post" id="addToCart" action="/add_to_cart">
        @csrf
          <input type="hidden" class="id_objet" name="id_objet" >
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Unité/Lot?:</label>
            <select name="titre" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
            <option value="unite">Unité</option>
                    <option value="lot">Lot</option>
                    
            </select>
            <label for="" class="col-form-label">Quantité:</label>
            <input type="number" name="quantite" class="form-control" value="1">
            <label for="" class="col-form-label">Prix:</label>
            <input type="number" name="prix" class="form-control prix" value="0">
            <label for="" class="col-form-label">Masse:</label>
            <input type="text" name="masse" class="form-control" value="0"  id="message-text">

          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      
      </div>
    </div>
  </div>
</div>
<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever') 
  var name = button.data('name') 
  var prix = button.data('prix') 
  var modal = $(this)
  modal.find('.id_objet').val(id)
  modal.find('.prix').val(prix)
  modal.find('.modal-title').text('Ajouter ' + name + ' au panier')
})</script>


<script>
$('addToCart').submit(function( event ) {
    event.preventDefault();
    $.ajax({
        url: '/add_to_cart',
        type: 'post',
        data: $('form').serialize(), // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function( _response ){
            // Handle your response..
        },
        error: function( _response ){
            // Handle error
        }
    });
});
</script>
@endsection

