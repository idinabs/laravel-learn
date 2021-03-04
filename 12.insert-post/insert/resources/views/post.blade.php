@extends('layouts.app')


@section('body')
                <div class="container">     
                    @if ($posts->count())
                        <div class="container">
                            <div class="row">
                                <div class="flex justify-content-between">
                                    <h2>All Post</h2>
                                    <a href="/post/add" class="btn btn-primary">Add Post</a>
                                    <hr>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                    @foreach ($posts as $post )
                                            <div class="col-md-4">  
                                                <div class="card mb-4">
                                                    <div class="card-header">
                                                        {{ $post->title }}
                                                    </div>
                                                    <div class="card-body">
                                                    {{ Str::limit($post->body, 100, '') }}
                                                    <br>
                                                    <a href="">Read More</a>
                                                    </div>
                                                    <div class="card-footer">
                                                        Published on {{ $post->create_at }}
                                                    </div>
                                                    
                                                </div>
                                            </div>     
                                    @endforeach        
                                </div>
                            <br>
                            <div class="container">
                                <div class="d-flex justify-content-center">
                                    {{ $posts->links() }}
                                </div>
                            </div> 
                
                    @else
                      <div class="alert alert-danger" role="alert">
                        Maaf Tidak Ada Data Yang Ditemukan
                      </div>
                    @endif
                </div>
             
@endsection  
   