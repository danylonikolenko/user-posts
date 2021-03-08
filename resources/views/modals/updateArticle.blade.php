<!-- Modal -->
<div class="modal fade" id="updateArticle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update post!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" action="{{route('update_article')}}">
                    @csrf
                    <div class="form-group">
                        <label for="article_text">Title</label>
                        <input name="title" type="text" class="form-control" id="article_title_update" aria-describedby="textHelp" placeholder="Post Titile">
                        <small id="textHelp" class="form-text text-muted">Just imagine something</small>
                    </div>
                    <div class="form-group custom-file">
                        <input name="file" type="file" class="custom-file-input" id="article_image_update">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="form-group">
                        <label for="article_alt_text">Alt Text</label>
                        <input name="alt_text" type="text" class="form-control" id="article_alt_text_update" placeholder="Alt Text">
                    </div>
                    <input name="id" type="hidden" id="hidden_id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="article_update" type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
