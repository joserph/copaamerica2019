@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Paises
                        <a href="{{ route('countries.create') }}" class="btn btn-primary btn-xs pull-right">Agregar</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Bandera</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($countries as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>Si o No</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
