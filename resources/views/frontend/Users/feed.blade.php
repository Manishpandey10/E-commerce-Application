@extends('frontend.Users.layouts.main')
@section('main')
    <!-- Content wrapper -->
    @if ($posts->isEmpty())
        <div class="content-wrapper">
            <div class="row mb-12 mt-7 g-6 justify-content-center">
                <div class="alert alert-danger alert-dismissible" role="alert">
                     No posts found for your search.
                </div>
            </div>
        </div>
    @else
        @foreach ($posts as $post)
            <div class="content-wrapper">
                <!-- Content -->
                <div class="row mb-12 mt-7 g-6 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ url('storage/' . $post->picture) }}" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Post Title :{{ $post->post_title }}</h5>

                                <h6 class="card-title">Post uploaded on: {{ $post->created_at }}</h5>

                                    <hr>
                                    <p class="card-text">
                                        <strong>Description</strong><br>
                                        {{ $post->description }}
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- / Content -->



                <div class="content-backdrop fade"></div>
            </div>
        @endforeach
    @endif
    <!-- Content wrapper -->
@endsection
