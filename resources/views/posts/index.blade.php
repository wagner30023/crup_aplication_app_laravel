@extends('posts.layout')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Criar um novo Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
    @if ($message = Session::get('danger'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Detalhes</th>
            <th width="200px">Ação</th>
        </tr>
        @foreach ($posts as $key => $value)
            <tr>
                <td>{{ $value->title }}</td>
                <td>{{ \Str::limit($value->description, 100) }}</td>

                <form action="{{ route('posts.destroy', $value->id) }}" method="POST">
                    <td>
                        <a class="btn btn-info" href="{{ route('posts.show', $value->id) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('posts.edit', $value->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </td>
                </form>
            </tr>
        @endforeach
    </table>
@endsection
