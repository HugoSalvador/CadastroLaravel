@extends('layout.app', ["current" => "home"])

@section('body')
<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cadastro de produtos</h5>
            <p class="card=text">
                Cadastre seus produtos
            </p>
            <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
            <p class="card=text">
                Cadastre as categorias
            </p>
            <a href="/categorias" class="btn btn-primary">Cadastre suas categorias</a>
        </div>
      </div>
    </div>
  </div>
@endsection
