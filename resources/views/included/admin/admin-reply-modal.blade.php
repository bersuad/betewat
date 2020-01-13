<!-- product modal -->
<div class="modal fade" id="replyModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Replying to {{$post->full_name}}</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div align="center">
                    <form action="mailto{!! $post->email !!}">
                        <div class="form-group">
                            {{Form::label('body', 'Body')}}
                            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Blog Description'])}}
                        </div>
                        {{Form::submit('Send', ['class' => 'btn btn-success'])}}
                    </form>
                </div>
            </div>

            <div class="modal-footer">
            </div>

        </div>

    </div>

</div>