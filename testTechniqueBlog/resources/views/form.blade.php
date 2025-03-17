
    <form method="post" class="w-50" action="">
        {{csrf_field()}}
        <div class="form-group">
            <label for="inputAddress">Titre</label>
            <input type="text" class="form-control" id="inputAddress" name="title" value="{{$article->title??""}}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Auteur</label>
            <input type="text" class="form-control" id="inputAddress2"  name="auteur" value="{{$article->auteur??""}}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Contenu</label>
                <textarea type="text" class="form-control" id="inputCity"  name="contenu" >{{$article->contenu??""}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" >{{$article->title?"Modifier":"Créer"}}</button>
    </form>

