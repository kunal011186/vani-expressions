<!-- Modal -->
<div id="addPicture" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Picture</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('file-upload')}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="file" name="myfile" />
          <button type="submit"/>Upload</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>