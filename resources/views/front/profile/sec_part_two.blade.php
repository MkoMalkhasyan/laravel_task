<div class="col-12 col-sm-12 col-md-7 section-2nd">
    <div class="alert alert-danger alert-post-error" role="alert">
        <strong>Invalid!</strong> Please type post, then send.
    </div>
    <div class="alert alert-success alert-post-success" role="alert">
        <strong>Complete!</strong> Posted successfully.
    </div>
    <div class="align-items-center">
        <h3> Make Post <i class="fa fa-pencil" aria-hidden="true"></i></h3>
        <form class="form-post">
            <div class="form-row">
                <div class="col-9">
                    <textarea class="form-control post-text" aria-describedby="emailHelp" placeholder="What's on your mind, {{ $data['name'] }}?"></textarea>
                </div>
                <div class="col">
                    <div class="form-check">
                        <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input type="checkbox" class="checkbox custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Private</span>
                        </label>
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary rounded-left h-100 w-75 post">Post</button>
                </div>
            </div>

        </form>
        <div class="cards">
            @if( $posts )
                @foreach( $posts as $post )
                    <div class="users-res card col-12 col-sm-12">
                        <div class="card-body">
                            <div class="card-text">
                                <img src="{{ $avatar }}" class="rounded-circle followers-avatar float-left">
                                <h5 class="card-title">{{ $data['name'] }}</h5>
                                <small class="form-text text-muted">{{ $post['date'] }}</small>
                            </div>
                            <div class="card-text mt-3">
                                <p class="text-justify">
                                    {{ $post['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
