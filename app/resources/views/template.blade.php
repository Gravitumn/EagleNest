<style>select{float:left;}</style>
@extends('layouts.auth-master')
@section('content')
    <form>

        <input type="hidden" name ="_token" value="{{csrf_token()}}"/>
        <img class="mb-4" src  ="{!! url('https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png')!!}"alt  =""  width="72"height="57">
        
        <h1 class="h3 mb-3  fw-normal">Event template</h1>

        @include('layouts.partials.messages')

        <div   class="form-group form-floating mb-3" >
            <input type="text" class="form-control" name ="username" value="{{ old('username') }}" placeholder="Username" required="required"autofocus>
            <label for  ="floatingName">Event name</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type ="password" class="form-control" name ="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for  ="floatingPassword">Lobby Password</label>
        </div>

        <select>
            <option value = "Q&A"> Q&A </option>
            <option value = "Poll"> Poll </option>
            <option value = "Quiz"> Quiz </option>
        </select>

        <button class="w -100 btn btn-lg btn-primary" type="submit">Create Event</button>

        @include('auth.partials.copy')
    </form>
@endsection
