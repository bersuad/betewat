<!-- edit partners modal -->
<div class="modal fade" id="editProductModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Add New Partner</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!! Form::open(['action' => ['ProductServicesController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="modal-body">
                    <div class = "form-group row add">
                        {{Form::label('title', 'Title',['class' => 'control-label col-sm-12'])}}
                        <div class="col-sm-11">
                            {{Form::text('title', $post->product_caption, ['class' => 'form-control'])}}
                        </div>
                        {{Form::label('description', 'Description',['class' => 'control-label col-sm-12'])}}
                        <div class="col-sm-11">
                            {{Form::textarea('description', $post->description, ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
                        </div>
                        <label class="control-label col-sm-12">Type: {{$post->type}}</label>
                        {{Form::label('type', 'Type',['class' => 'control-label col-sm-12'])}}
                        <div  class="col-sm-11">
                            <select class="form-control" name="type">
                                <option value="Network Management">-- Select Type --</option>
                                <option>Application Management & Orchestration</option>
                                <option>Identity and Policy Control</option>
                                <option>Network Edge Services</option>
                                <option>Network Management</option>
                                <option>Network Operating System</option>
                                <option>Packet Optical</option>
                                <option>Routers</option>
                                <option>Security</option>
                                <option>Software Defined Networking</option>
                                <option>Switches</option>
                                <option>Software</option>
                            </select>
                        </div>

                        {{Form::label('image', 'Image',['class' => 'control-label col-sm-12'])}}
                        <div class="col-sm-11">
                            <img src="/storage/product_services/{!! $post->product_image !!}" style="width: 50px; height: auto; border-radius: 0%">
                            {{Form::file('image',['class' =>'btn btn-default'])}}
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
<div class="modal fade" id="deleteProductModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <label class="modal-title" id="exampleModalLabel">Do you want to delete {{$post->product_caption}} ??</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>

            </div>

            {!! Form::open(['action' => ['ProductServicesController@destroy', $post->id], 'method' => 'POST']) !!}
                <div class="modal-body">

                    <div class = "form-group row add">
                        <div class="col-md-12">
                            <div align="center">
                                <img src="/storage/product_services/{{ $post->product_image }}" style="width: 200px; height: auto; border-radius: 0%">
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