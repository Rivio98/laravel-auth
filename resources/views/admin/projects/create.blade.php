@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Aggiungi nuovo progetto</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <lable class="control-lable">Nome Progetto</lable>
                            <input type="text" name="name" class="form-control form-control-sm"
                                placeholder="Nome Progetto">
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">Descrizione progetto</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control form-controll-sm"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
