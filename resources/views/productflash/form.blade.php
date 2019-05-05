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
            <div class="product-table text-dark no-border">
                <table class="table m-b-5 m-t-20 ">
                    <tbody>
                    <tr>
                        <td class="text-muted">Flash Sale: </td>
                        <td class="text-color">Hari raya idul fitri	</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Produk: </td>
                        <td class="text-color">Stick E-Tol</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Stok: </td>
                        <td class="text-color">70</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Stok Baru: </td>
                        <td class="text-color">70</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Harga Baru: </td>
                        <td class="text-color">10,000</td>
                    </tr>
                    </tbody>
                </table>
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
