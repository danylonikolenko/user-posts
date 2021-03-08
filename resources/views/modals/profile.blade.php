<!-- Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class=" modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="article_text">Name</label>
                        <input type="text" class="form-control" id="username" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="article_text">Surname</label>
                        <input type="text" class="form-control" id="user_surname" placeholder="Surname">
                    </div>
                    <div class="form-group">
                        <label for="article_text">Email</label>
                        <input type="text" class="form-control" id="user_email" placeholder="email">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="user_save" type="button" class="btn btn-primary">Save</button>
                    </div>
                    <p id="message_profile" class="text-success"></p>
                </form>
            </div>
        </div>
    </div>
</div>
