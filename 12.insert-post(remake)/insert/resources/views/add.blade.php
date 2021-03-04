@extends('layouts.app')

@section('body')
    
    <div class="container" style="padding-top: 40px">
        <div class="row">
            <div class="col-md-6">
                <form action="/post/add/send/" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                      <label for="body">Body</label>
                      <textarea type="body" name="body" class="form-control" id="body" rows="3" placeholder="Enter Body"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection