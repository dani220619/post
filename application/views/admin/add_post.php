<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <form class="admin" method="post" action="<?= base_url('admin/insert_post'); ?>" enctype="multipart/form-data">
                <div class="row">
                    <input hidden type="text" class="form-control" id="id_user" name="id_user" value="<?= $user['id_user'] ?>" placeholder="Enter Title">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Post</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="comment">Content</label>
                                            <textarea class="ckeditor" id="ckedtor" name="content" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Post Info</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="Date">Date</label>
                                            <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date" value="<?= date('Y-m-d') ?>">
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <button class="btn btn-success">Submit</button>
                                        <a href="<?= base_url('admin/post') ?>" class="btn btn-danger">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>