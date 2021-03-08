<!-- Modal -->
<div class="modal fade" id="addArticle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new post!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" action="{{route('add_article')}}">
                    @csrf
                    <div class="form-group">
                        <label for="article_text">Title</label>
                        <input name="title" type="text" class="form-control" id="article_title" aria-describedby="textHelp" placeholder="Post Titile">
                        <small id="textHelp" class="form-text text-muted">Just imagine something</small>
                    </div>
                    <div class="form-group custom-file">
                        <input name="file" type="file" class="custom-file-input" id="article_image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="form-group">
                        <label for="article_alt_text">Alt Text</label>
                        <input name="alt_text" type="text" class="form-control" id="article_alt_text" placeholder="Alt Text">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="article_save" type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
