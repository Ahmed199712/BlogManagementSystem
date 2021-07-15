<!-- Modal -->
<div class="modal fade editCommentModal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Your Comment .</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="updateCommentForm" class="updateCommentForm" action="{{ route('frontend.comments.update') }}" method="POST">
            @csrf

            <input type="hidden" name="comment_id" class="comment_id" value="">

            <textarea name="comment_text" id="editComment" rows="5" class="form-control editComment">
                
            </textarea>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

      </div>
        
    </div>

  </div>
</div>