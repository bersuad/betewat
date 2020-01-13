<div id="essayModal{{$apply->id}}" class="modal fade" role="dialog">

  <div class="modal-dialog modal-lg">
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="modal-title" class="modal-title">{{$apply->full_name}}'s Essay </h4>
      </div>
      <div class="modal-body" id="essay-body" >
        {!!$apply->essay!!}
      </div>

      <div class="modal-footer">
        <!-- <button class="btn btn-primary" type="button" name="button">Download</button> -->

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
