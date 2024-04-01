@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($task))Editar @else Nova @endif</h1>
    <hr>

    <div class="col-8 m-auto">
        @if (isset($errors) && count($errors)>0)
            <div class="mt-4 mb-4 p-2 alert-danger" style="background-color: lightcoral;">
                <ul style="margin-bottom: 0px; list-style: decimal;">
                @foreach($errors->all() as $erro)
                    <li>{{$erro}}</li>
                @endforeach
                </ul>
            </div>
        @endif

        @if(isset($task))
            <form name="formEdit" id="formEdit" method="post" action="{{url("tasks/$task->id")}}">
            @method('PUT')
        @else 
            <form name="formNew" id="formNew" method="post" action="{{url('tasks')}}"> 
        @endif
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Título:" value="{{$task->title ?? ''}}" required><br>
            <input class="form-control" type="text" name="description" id="description" placeholder="Descrição:" value="{{$task->description ?? ''}}" required><br>
            <input type="radio" id="new" name="completed" value="0" @if(isset($task) && $task->completed == '0') checked @endif><label for="new">&nbsp;Nova</label><br>
            <input type="radio" id="finish" name="completed" value="1" @if(isset($task) && $task->completed == '1') checked @endif><label for="finish">&nbsp;Finalizada</label><br>
            <br>
            <input class="btn btn-primary" type="submit" value="@if(isset($task)) Editar @else Cadastrar @endif">
        </form>
    </div>
@endsection