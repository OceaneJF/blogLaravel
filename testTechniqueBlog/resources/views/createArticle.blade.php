@extends('base')
@section('formulaire')
    <form method="post" class="w-50" action={{route('new')}} >
        {{csrf_field()}}
        <div class="form-group">
            <label for="inputAddress">Titre</label>
            <input type="text" class="form-control" id="inputAddress" name="article">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Auteur</label>
            <input type="text" class="form-control" id="inputAddress2"  name="article">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Contenu</label>
                <textarea type="text" class="form-control" id="inputCity"  name="article"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
@endsection
