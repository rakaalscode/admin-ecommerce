<div class="modal fade" id="modal-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="categoryForm" method="post" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
            <div class="modal-body">
                <!--  fake fields are a workaround for chrome/opera autofill getting the wrong fields -->
                <input id="username" style="display:none" type="text" name="username" autocomplete="off">
                <input id="password" style="display:none" type="password" name="password" autocomplete="off">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Kategori</label>
                    <div class="col-sm-8">
                        <input type="hidden" id="id" name="id">
                        <input type="text" id="name" maxlength="175" class="form-control" name="name" />
                        <small class="hide-alert" style="display:none"></small>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" id="slug" maxlength="11" class="form-control" name="slug" />
                    </div>
                </div> -->
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gambar kategori</label>
                    <div class="col-sm-8">
                        <input type="file" id="feature_image" class="form-control" name="feature_image" />
                        <small class="hide-alert-image" style="display:none"></small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="button btn addKey btn-primary waves-effect waves-light">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
