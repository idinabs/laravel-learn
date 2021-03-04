@extends('layouts.app')


@section('body')
            <div class="container">   
                <div class="col-sm-6">
                    <h2>All Post</h2> 
                        @foreach ($posts as $post )
                            <div class="container">
                                <div class="card md-6">
                                    <div class="card-header">
                                        {{ $post->title }}
                                    </div>
                                    <div class="card-body">
                                    {{ Str::limit($post->body, 100, '') }}
                                    <br>
                                    <a href="">Read More</a>
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach 
                </div>  
            </div>
            <br>
            <div class="container">
                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div> 
@endsection  
   