<!-- edit partners modal -->
<div class="modal fade" id="editHomePageModal{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Update Home Page Slider</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!! Form::open(['action' => ['HomePageController@update', $slider->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="modal-body">
                    <div class = "form-group row add">
                        {{Form::label('caption', 'Caption',['class' => 'control-label col-sm-6'])}}
                        <div class="col-sm-11">
                            {{Form::text('caption', $slider->caption, ['class' => 'form-control'])}}
                            <img src="/storage/HomePage_slider/{!! $slider->image !!}" style="width: 50px; height: auto; border-radius: 0%">
                            {{Form::file('image', '')}}
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
<div class="modal fade" id="deleteTeamModal{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Do you want to delete {{$slider->partners_name}} ??</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>

            </div>

            {!! Form::open(['action' => ['PartenersController@destroy', $slider->id], 'method' => 'POST']) !!}
                <div class="modal-body">

                    <div class = "form-group row add">
                        <div class="col-md-12">
                            <div align="center">
                                <img src="/storage/companies_logo/{!! $slider->partners_image !!}" style="width: 200px; height: auto; border-radius: 0%">
                            </div>
                            <div class="row">
                                <br>
                                <div class="col-md-6" align="left">
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger', 'style'=> 'background: RED;'])}}
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