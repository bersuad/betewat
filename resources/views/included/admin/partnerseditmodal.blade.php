<!-- edit partners modal -->
<div class="modal fade" id="editTeamModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Add New Partner</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!! Form::open(['action' => ['PartenersController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="modal-body">
                    <div class = "form-group row add">
                        {{Form::label('company_name', 'Company Name',['class' => 'control-label col-sm-2'])}}
                        <div class="col-sm-11">
                            {{Form::text('company_name', $post->partners_name, ['class' => 'form-control'])}}
                            <img src="/storage/companies_logo/{!! $post->partners_image !!}" style="width: 50px; height: auto; border-radius: 0%">
                            {{Form::file('company_logo', '')}}
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
<div class="modal fade" id="deleteTeamModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Do you want to delete {{$post->partners_name}} ??</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>

            </div>

            {!! Form::open(['action' => ['PartenersController@destroy', $post->id], 'method' => 'POST']) !!}
                <div class="modal-body">

                    <div class = "form-group row add">
                        <div class="col-md-12">
                            <div align="center">
                                <img src="/storage/companies_logo/{{ $post->partners_image }}" style="width: 200px; height: auto; border-radius: 0%">
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