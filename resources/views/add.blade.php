@extends('layouts.main')

@section('content')
<form method="POST" style="padding-top:3%">
        {{ csrf_field() }}
        <label>Имя</label>
        <input type="text" name="name" required value="{{old('name')}}"><br>
        <label>Компания</label>
        <input type="text" name="job" value="{{old('job')}}"><br>
        <label>Email</label>
        <input type="text" name="email" value="{{old('email')}}"><br>
        <label>Комментарий</label>
        <textarea name="comment" class="materialize-textarea">{{old('comment')}}</textarea><br>
        <input class="waves-effect waves-teal btn-flat" type="submit" value="Добавить">
</form>
@endsection
