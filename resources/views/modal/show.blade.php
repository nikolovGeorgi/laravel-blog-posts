<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">@{{form_title}}</h4>
            </div>{{-- modal-header end --}}

            <div class="modal-body">
                <form name="frmPost" class="form-horizontal" novalidate="">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Post Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="postTitle" name="postTitle" placeholder="Post Title" value="@{{postTitle}}" ng-model="post.postTitle" ng-required="true" required>
                            <span ng-show="frmPost.postTitle.$invalid && frmPost.postTitle.$touched">Post Title field is required</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Post Body</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="postBody" value="@{{postBody}}" ng-model="post.postBody" ng-required="true" required></textarea>
                            <span ng-show="frmPost.postBody.$invalid && frmPost.postBody.$touched">Post Body field is required</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Post Author</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="postAuthor" name="postAuthor" placeholder="Post Author" value="@{{postAuthor}}" ng-model="post.postAuthor" ng-required="true" required>
                            <span ng-show="frmPost.postAuthor.$invalid && frmPost.postAuthor.$touched">Post Author field is required</span>
                        </div>
                    </div>
                </form>
            </div>{{-- modal-body end --}}

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmPost.$invalid">Save Changes</button>
            </div>

        </div>
    </div>
</div>