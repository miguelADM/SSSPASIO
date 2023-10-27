
@extends('components.layouts.plantilla')

@section('TituloPagina', 'Crud con LARAVEL 8')

@section('Contenido') {{--LLAMA AL @YIELD "Contenido"  DE LA VISTA "plantilla"--}}
<div class="card">
    <div class="card-header">
        GRUPOS DE TRABAJO
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif
            </div>
        </div>
      <h5 class="card-title text-center">Listado de grupos en el sistema</h5>
      <p>
        <a href="{{route('grupos.create')}}" class="btn btn-primary">
            <span><i class="fas fa-user-plus"></i></span> Agregar nuevo grupo
        </a>
      
        <hr>

      <div class="table table-responsive">       
        <table class="table table-sm table-bordered">
            <thead>
                <th>Grupo de trabajo</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>

                @foreach ($grupos_trabajo as $item)      
                <tr>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>
                        <form action="{{ route('grupos.edit',$item->id) }}" method="GET">
                            <button class="btn btn-warning btn-small">
                                <span class="fas fa-user-edit"></span> 
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('grupos.show',$item->id) }}" method="GET">
                            <button class="btn btn-danger btn-small">
                                <span class="fas fa-user-times"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
            </div>  
            <div class="row">
                <div class="col-sm-12 text-center">
                    {{-- $datos->links('pagination::bootstrap-4') --}}
                </div>
            </div>
        </p>
    </div>
</div>


@endsection
