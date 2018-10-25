@extends ('page.layout')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-10 col-md-offset-1" style="padding: 2rem; padding-left: 2rem;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Noticias</h3></div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <tr>
                                <th>Titulo</th>
                                <th>Contenido</th>
                                <th>Imagen</th>
                                <th>Editar</th>
                                </tr>
                                @if(count($noticias) !== 0)
                                    @foreach($noticias as $noticia)
                                        <tr>
                                            <td>{{$noticia->titulo}}</td>
                                            <td>{{$noticia->contenido}}</td>
                                            <td>
                                                <img src="{{$noticia->imagen}}" width="100%;">
                                            </td>
                                            <td>{{$noticia->edicion}}</td>
                                            <td><a class="btn btn-primary btn-xs"
                                                   href="{{ route('noticias.edit',["id"=>$noticia->id])}}"><span
                                                            class="glyphicon glyphicon-pencil"></span></a></td>
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