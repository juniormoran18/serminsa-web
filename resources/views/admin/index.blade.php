@extends ('page.layout')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Noticias</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                            <!-- <a href="{{ route('noticias.create') }}" class="btn btn-info" >Añadir Noticia</a> -->
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>

                                <th>Titulo</th>
                                <th>Contenido</th>
                                <th>Imagen</th>
                                <th>Editar</th>
                                <<!--<th>Eliminar</th>->
                                </thead>
                                <tbody>
                                @if(count($noticias) !== 0)
                                    @foreach($noticias as $noticia)
                                        <tr>
                                            <td>{{$noticia->titulo}}</td>
                                            <td>{{$noticia->contenido}}</td>
                                            <td>
                                                <img src="{{$noticia->imagen}}" width="50%;">
                                            </td>
                                            <td>{{$noticia->edicion}}</td>
                                            <td><a class="btn btn-primary btn-xs"
                                                   href="{{ route('noticias.edit',["id"=>$noticia->id])}}"><span
                                                            class="glyphicon glyphicon-pencil"></span></a></td>
                                            <!--<td>
                                                <a href="{{ route('noticias.delete',["id"=>$noticia->id])}}"
                                                   class="btn btn-danger btn-xs"
                                                   onclick="return confirm('Deseas eliminar la noticia?');">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            </td>-->
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection