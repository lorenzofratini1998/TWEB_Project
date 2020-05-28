@extends('layouts.user')
@section('title', 'Profilo Personale')


@section('content')
<div id="editProfile">
    <h1>Modifica profilo</h1>
    <form id="formEditProfile" name="editProfile"  method="post" action="{{route('editProfile.store')}}">
                    @csrf
                    <div  class="wrapInput">
                        <label class="labelInput" for="name">Nome </label>
                        <input class="input" type="text" name="name" id="name" value="{{ Auth::user()->name }}">
                        @if ($errors->first('name'))
                        <ul class="errors">
                            @foreach ($errors->get('name') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div  class="wrapInput">
                        <label class="labelInput" for="surname">Cognome </label>
                        <input class="input" type="text" name="surname" id="surname" value="{{ Auth::user()->surname }}">
                        @if ($errors->first('surname'))
                        <ul class="errors">
                            @foreach ($errors->get('surname') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div  class="wrapInput">
                        <label class="labelInput" for="email">Email </label>
                        <input class="input" type="text" name="email" id="email" value="{{ Auth::user()->email }}">
                        @if ($errors->first('email'))
                        <ul class="errors">
                            @foreach ($errors->get('email') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div  class="wrapInput">
                        <label class="labelInput" for="residence">Residenza </label>
                        <input class="input" type="text" name="residence" id="residence" value="{{ Auth::user()->residence }}">
                        @if ($errors->first('residence'))
                        <ul class="errors">
                            @foreach ($errors->get('residence') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div  class="wrapInput">
                        <label class="labelInput" for="birthday">Data di nascita </label>
                        <input class="input" type="date" name="birthday" id="birthday" value="{{Auth::user()->birthday }}">
                        @if ($errors->first('birthday'))
                        <ul class="errors">
                            @foreach ($errors->get('birthday') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div  class="wrapInput">
                        <label class="labelInput" for="job">Occupazione</label>
                        <select class="input" name="job" id="job">
                            @foreach($jobs as $job)
                            <option value="{{$job}}">{{ $job }}</option>
                            @endforeach
                        </select>
                    </div>               
                        <input type="submit" class="submit" value="Salva">
                        <button type="button" class="delete" href="{{route('profile')}}">Annulla</button>
    </form>
    <!--{{ Form::open(array('route' => 'newproduct.store', 'id' => 'editProfile', 'files' => false, 'class' => 'contact-form')) }}
                <div>
                    {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                    {{ Form::text('nome', "", ['class' => 'input', 'id' => 'nome']) }}
                    {{ Form::label('surname', 'Nome', ['class' => 'label-input']) }}
                    {{ Form::text('nome', "", ['class' => 'input', 'id' => 'nome']) }}
                    {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                    {{ Form::text('nome', "", ['class' => 'input', 'id' => 'nome']) }}
                    {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                    {{ Form::text('nome', "", ['class' => 'input', 'id' => 'nome']) }}
                    @if ($errors->first('nome'))
                    <ul class="errors">
                        @foreach ($errors->get('nome') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div >                
                    {{ Form::submit('Salva', ['class' => 'form-btn1']) }}
                </div>
    {{ Form::close() }}-->
</div>
    @endsection