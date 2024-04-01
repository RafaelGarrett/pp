@extends('templates.template')

@section('content')
    <h1 class="text-center">Tasks</h1>
    <hr>
    <div class="text-center">
        <a href="{{url("tasks/create")}}">
            <button class="btn btn-success">Nova</button>
        </a>
    </div>
    <div class="col-8 m-auto">
    @csrf
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#id</th>
            <th scope="col">Título</th>
            <th scope="col">Descrição</th>
            <th scope="col">Status</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{$task->id}}</th>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{($task->completed == "0")? 'nova' : 'finalizada'}}</td>
                    <td scope="col">
                        <a href="{{url("tasks/$task->id")}}"><button class="btn btn-dark">Visualizar</button></a>
                        <a href="{{url("tasks/$task->id/edit")}}"><button class="btn btn-primary">Editar</button></a>
                        <a href="{{url("tasks/$task->id")}}" class="js-del"><button class="btn btn-danger">Deletar</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection