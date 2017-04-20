@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Posts</h1>
                <ul>
                @foreach($posts as $post)
                    <li>{{ $post->title }}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection