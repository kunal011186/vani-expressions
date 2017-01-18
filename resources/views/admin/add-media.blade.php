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
        <!-- form method="post" action="{{route('file-upload',['folder'=>'post-pictures','keepFileName'=>1])}}" enctype="multipart/form-data" -->
        <!-- form enctype="multipart/form-data" role="form" id="uploadForm" action="" -->
          {{-- csrf_field() --}}
          <!-- input type="file" name="myfile" / -->
          <!-- input type="hidden" value="12" name="x" / -->
          <button onclick="uploadPic();" />Upload</button>
        <!-- /form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
function uploadPic()
{
  // url = '{{route('file-upload',['folder'=>'post-pictures','keepFileName'=>1])}}';
  // data = new FormData($("#uploadForm")[0]);
  console.log('abcd');
  // console.log('{{csrf_token()}}');
  var formData = new FormData();
  formData.append("x", 5);
  formData.append("token", '{{csrf_token()}}');

  // $.ajax(
  // { 
  //   type: "post",
  //   url: "{{route('file-upload',['folder'=>'post-pictures','keepFileName'=>1])}}",
  //   data: formData,
  //   success: function( msg ) 
  //   {
  //     alert(msg);
  //   }
  // });
  var ajax = $.ajax({
                type: 'post',
                url: "{{route('file-upload',['folder'=>'post-pictures','keepFileName'=>1])}}",
                data: formData,
                contentType: false,
                processData: false
            })
            .done(function() {
                alert("success");
            })
            .fail(function( jqXHR, textStatus) {
                alert("fail");
                console.log(jqXHR.responseText);
                console.log(textStatus);
            });
}
</script>