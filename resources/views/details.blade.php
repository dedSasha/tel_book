@extends('layouts.main')

@section('content')
<h2>
  {{ $contact->name }}@if ($contact->job) <small>({{$contact->job}})</small> @endif
  <a class="waves-effect waves-teal btn-flat" href="{{url('/contact/'.$contact->id.'/edit')}}">Изменить</a>
  <a class="waves-effect waves-teal btn-flat" href="{{url('/contact/'.$contact->id.'/delete')}}">Удалить</a>
</h2>
@if ($contact->email) <p>Email: {{$contact->email}}</p> @endif
@if ($contact->comment) <p>Комментарий: {{$contact->comment}}</p> @endif
@endsection
