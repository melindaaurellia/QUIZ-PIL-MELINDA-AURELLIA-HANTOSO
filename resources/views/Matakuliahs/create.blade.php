@extends('layouts.app')

@section('title','matakuliahs')

@section('content')

<form action="/matakuliahs" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">nama_matakuliah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_matakuliah" aria-describedby="emailHelp" value="{{old('nama_matakuliah')}}">
    @error('nama_matakuliah')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">sks</label>
    <input type="text" class="form-control" name="sks" id="exampleInputPassword1" value="{{old('sks')}}">
    @error('sks')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection

    
