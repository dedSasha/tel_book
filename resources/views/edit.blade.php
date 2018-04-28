@extends('layouts.main')

@section('content')
<form method="POST" style="padding-top:3%">
        {{ csrf_field() }}
        <label>Имя</label>
        <input type="text" name="name" required value="{{$contact->name}}"><br>
        <label>Компания</label>
        <input type="text" name="job" value="{{$contact->job}}"><br>
        <label>Email</label>
        <input type="text" name="email" value="{{$contact->email}}"><br>
        <label>Комментарий</label>
        <textarea name="comment" class="materialize-textarea">{{$contact->comment}}</textarea><br>
        <input class="waves-effect waves-teal btn-flat" type="submit" value="Изменить">
</form>
@endsection
