@extends('layouts.profile')

@section('title','profile新規作成画面')

@section('content')

   <div class="container">
       <div class="row">
           <div class="col-md-8 mx-auto">
                <h2>My profile</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">gender</label>
                        <div class ="col-md-10">
                            <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">hobby</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                        </div>
                    </div>        
                    <div class='from-group row'>
                        <label class="col-md-2">introduction</label>
                        <div class="col-md-10">
                        <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>    
                    </div>    
                            {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="送信">
                </form>
            </div>
        </div>
    </div>
@endsection