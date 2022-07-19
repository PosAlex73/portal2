<div class="profile-tab">
    <div class="custom-tab-1">
        @include('front.profile.components.tabs')
        @include('front.profile.components.content')
    </div>
    <!-- Modal -->
    <div class="modal fade" id="replyModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Post Reply</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <textarea class="form-control" rows="4">Message</textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">btn-close</button>
                    <button type="button" class="btn btn-primary">Reply</button>
                </div>
            </div>
        </div>
    </div>
</div>
