@extends('layouts.app')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading">
 View Task
 </div>
 <div class="panel-body">
 <div class="pull-right">
 <a class="btn btn-default" href="{{ route('tasks.index') }}">Inapoi</a>
 </div>
 <div class="form-group">
 <strong>Nume: </strong> {{ $task->name }} <!--- preluam din task numele --->
 </div>
 <div class="form-group">
 <strong>Descriere: </strong> {{ $task->description }}
 </div>
 </div>
 </div>
@endsection
<!--- afiseaza datele pe ecran cum sunt in baza de date cu id-ul curent --->