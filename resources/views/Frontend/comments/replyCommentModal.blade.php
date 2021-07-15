<!-- Modal -->
<div class="modal fade replyCommentModal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Reply On Comment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="replyCommentForm" class="replyCommentForm" action="{{ route('frontend.comments.reply.save') }}" method="POST">
            @csrf

            <input type="hidden" name="comment_id" class="reply_comment_id" value="">

            <textarea name="comment_text" id="replyComment" rows="5" class="form-control replyComment" required>
                
            </textarea>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success text-white"> <i class="fa fa-plus"></i> Add Reply</button>
            </div>
        </form>

      </div>
        
    </div>

  </div>
</div>