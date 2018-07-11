@extends('layouts.main')

@section('content')

<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Basic Queue
        </div>
        <form action="/save" method="POST">
            @csrf
            <div class="form-group row">
                <label for="t1">Text 1</label>
                <input type="text" class="form-control" name="txt1" id="t1">
            </div>
            <div class="form-group row">
                <label for="t2">Text 2</label>
                <input type="text" class="form-control" name="txt2" id="t2">
            </div>
            <div class="form-group row">
                <label for="t3">Text 3</label>
                <input type="text" class="form-control" name="txt3" id="t3">
            </div>
            <br>
            <div class="form-group row">
                <button class="btn btn-primary col-md-12" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection