@extends('layouts.admin')
@section('title', 'Gestisci Staff')

@section ('content')
<div>
    <h1>Gestisci Staff</h1>
    @if(!$staffs->isEmpty())
    <table border class="table"> 
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Modifica</th>
            <th>Cancella</th>
        </tr>
        @foreach($staffs as $staff)
        <tr>
            <td>{{$staff->name}}</td>
            <td>{{$staff->surname}}</td>
            <td>
                <form action="{{route('editStaff', $staff->id)}}" method="GET">
                    @csrf
                    <input type="submit" value="Modifica">          
                </form>
            </td>
            <td>
                <form action="{{route('deleteUser', $staff->id)}}" method="POST">
                    @csrf
                    <input type="submit" value="Cancella">              
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @else
    <p>Al momento non è registrato nessun utente Staff.</p>
    <p><a href="{{route('newstaff')}}">Clicca qui</a> per aggiungerne uno</p>
    @endif
    <br>
    <button type="button" onclick="location.href='{{route('newstaff')}}'" class="button">Aggiungi Staff</button>
</div>
@endsection