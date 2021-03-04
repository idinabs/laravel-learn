@extends('layouts.app')

@section('body')

                @if ($post->count())
                    <div class="container">
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
                            @foreach ($post as $item )
                                    <div class="col-md-4">  
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                {{ $item->title }}
                                            </div>
                                            <div class="card-body">
                                            {{ Str::limit($item->body, 40, '') }}
                                            <br>
                                            <a href="">Read More</a>
                                            </div>
                                            <div class="card-footer">
                                                Published on {{ $item->created_at->diffForHumans(null) }}
                                            </div>
                                            
                                        </div>
                                    </div>     
                            @endforeach        
                        </div>
                @else
                    <div class="alert alert-success" role="alert">
                        Maaf Tidak Ada Data Yang Ditemukan
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="/post/add" class="btn btn-primary">Add Post</a>
                    </div>
                @endif
                    <br>
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            {{ $post->links() }}
                        </div>
                    </div> 
                    
                </div>

   
    

@endsection