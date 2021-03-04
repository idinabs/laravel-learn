@extends('layouts.app')

@section('body')
       <div class="container">
           <div class="col-md-6">        
              <div class="card">
                     <div class="card-header">
                            Tambah Post Anda
                     </div>
                     <div class="card-body">
                            <form action="/post/sending" method="post">
                                   @csrf
                                   <div class="form-group">
                                          <label for="title">Title</label>
                                          <input type="text" name="title" class="form-control" id="title"  placeholder="Masukan Title">
                                   </div>
                                   <div class="form-group">
                                          <label for="body">Masukan body</label>
                                          <textarea type="body" name="body" class="form-control" id="body" placeholder="Masukan Body"></textarea>
                                   </div>
                                   <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                     </div>
              </div>
           </div>
       </div>
@endsection