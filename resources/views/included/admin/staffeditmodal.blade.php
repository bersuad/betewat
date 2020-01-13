<!-- edit partners modal -->
<div class="modal fade" id="editStaffModal{{$staffs->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Add New Partner</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!! Form::open(['action' => ['StaffController@update', $staffs->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="modal-body">
                    <div class = "form-group row add">
                        {{Form::label('company_name', 'Name',['class' => 'control-label col-sm-2'])}}
                        <div class="col-sm-11">
                            {{Form::text('full_name', $staffs->full_name, ['class' => 'form-control'])}}
                        </div>
                            {{Form::label('description', 'Description',['class' => 'control-label col-sm-2'])}}
                        <div class="col-sm-11">
                            {{Form::text('description', $staffs->description, ['class' => 'form-control'])}}
                        </div>
                        {{Form::label('fb', 'Facebook',['class' => 'control-label col-sm-2'])}}
                        <div class="col-sm-11"> 
                            {{Form::text('facebook', $staffs->facebook, ['class' => 'form-control'])}}
                        </div>

                        {{Form::label('twitter', 'Twitter',['class' => 'control-label col-sm-2'])}}
                        <div class="col-sm-11"> 
                            {{Form::text('twitter', $staffs->twitter, ['class' => 'form-control'])}}
                        </div>
                        {{Form::label('linkedin', 'LinkedIn',['class' => 'control-label col-sm-2'])}}
                        <div class="col-sm-11"> 
                            {{Form::text('linkedin', $staffs->linkedIn, ['class' => 'form-control'])}}
                        </div>
                    </div>
                    <img src="/storage/staff_members/{!! $staffs->staff_picture !!}" style="width: 50px; height: auto; border-radius: 0%">
                    {{Form::file('staff_picture', '')}}
                </div>
                <div class="modal-footer">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Update', ['class' => 'btn btn-success'])}}
                </div>
            </div>
        </div>

            {!!Form::close()!!}

        </div>

    </div>

</div>
<!-- delete partners modal -->
<div class="modal fade" id="deleteStaffModal{{$staffs->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Do you want to delete {{$staffs->full_name}} ??</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>

            </div>
            {!! Form::open(['action' => ['StaffController@destroy', $staffs->id], 'method' => 'POST']) !!}
                <div class="modal-body">

                    <div class = "form-group row add">
                        <div class="col-md-12">
                            <div align="center">
                                <img src="/storage/staff_members/{!! $staffs->staff_picture !!}" style="width: 200px; height: auto; border-radius: 0%">
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