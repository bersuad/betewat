<!-- edit partners modal -->
<div class="modal fade" id="editBlogModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Add New Partner</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="modal-body">
                    <div class = "form-group row add">
                        {{Form::label('title', 'Title',['class' => 'control-label col-sm-12'])}}
                        <div class="col-sm-11">
                            {{Form::text('title', $post->title, ['class' => 'form-control'])}}
                        </div>
                        {{Form::label('description', 'Description',['class' => 'control-label col-sm-12'])}}
                        <div class="col-sm-11">
                            {{Form::textarea('description', $post->description, ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
                        </div>
                        {{Form::label('image', 'Image',['class' => 'control-label col-sm-12'])}}
                        <div class="col-sm-11">
                            <img src="/storage/blog/{!! $post->image !!}" style="width: 50px; height: auto; border-radius: 0%">
                            {{Form::file('company_logo',['class' =>'btn btn-default'])}}
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Update', ['class' => 'btn btn-success'])}}
                </div>
            {!!Form::close()!!}

        </div>

    </div>

</div>

<!-- delete partners modal -->
<div class="modal fade" id="deleteBlogModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Do you want to delete {{$post->title}} ??</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>

            </div>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                <div class="modal-body">

                    <div class = "form-group row add">
                        <div class="col-md-12">
                            <div align="center">
                                <img src="/storage/blog/{{ $post->image }}" style="width: 200px; height: auto; border-radius: 0%">
                            </div>
                            <div class="row">
                                <br>
                                <div class="col-md-6" align="left">
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger', 'style'=> 'background: red;'])}}
                                </div>
                                <div class="col-md-6" align="right">
                                    <button class="btn btn-default" data-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            {!!Form::close()!!}

        </div>

    </div>

</div>