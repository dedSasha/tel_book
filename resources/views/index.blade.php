@extends('layouts.main')

@section('content')
<table>
  <thead>
    <tr>
      <th>Имя</th>
      <th>Компания</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
        <tr>
          <td><a href="{{url('contact/'.$contact->id)}}">{{$contact->name}}</a></td> @if ($contact->job) <td>({{$contact->job}})</td> @endif
        </tr>
    @endforeach
  </tbody>
</table>

<a class="waves-effect waves-teal btn-flat centered" href="{{url('/add')}}">Добавить</a>
@endsection
