@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button" class="btb btn-outline-primary btn-lg" data-toggle="modal" name="button"
                            data-target="#addBookmarkBtn" >Add Bookmark</button>

                    <div class="modal fade" id="addBookmarkBtn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Bookmark</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!! Form::open(['action' => 'BookmarksController@addBookmark', 'method' => 'POST']) !!}
                                    {{ Form::bsText('name') }}
                                    {{ Form::bsText('url') }}
                                    {{ Form::bsText('description') }}
                                    {{ Form::bsSubmit() }}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <h3>Bookmarks List</h3>
                <div>
                    @if(count($bookmarks) > 0)
                        @foreach($bookmarks as $bookmark)
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ $bookmark->url }}" target="_blank">{{ $bookmark->name }}</a>
                                    <span class="col-form-label-sm">{{ $bookmark->description }}</span>
                                    <button data-id="{{ $bookmark->id }}" class="dom-delete-bookmark btn btn-danger float-right" type="button">
                                        <i class="fa fa-trash-alt"></i> Delete
                                    </button>
                                </li>
                            </ul>
                            <br>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
