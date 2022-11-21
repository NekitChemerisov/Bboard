@extends('layouts.base')
@section('title', 'Главная')
@section('main')
@if (count($bbs) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, тг.</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bbs as $bb)
        <tr>
            <td>
                <h3>{{ $bb->title }}</h3>
            </td>
            <td>{{ $bb->price }}</td>
            <td>
                <a href="{{ route('detail', ['bb' => $bb->id]) }}">Подробнее...</a> 
                <!-- Функция route() генерирует интернет-адрес на основе именованного маршрута -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection('main')




