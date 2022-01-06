<footer id="footer"><!--Footer-->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
    <form action="/AddCart" method="post">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Masukan Jumlah</h4>
    </div>
    <div class="modal-body">
        <input type="hidden" id="id_barang" class="id_barang" name="id_barang" value="3487">
        <div class="form-group">
        <label for="exampleInputEmail1">Jumlah Beli</label>
        <input type="text" class="form-control " id="jumlah" name="jumlah" placeholder="Jumlah Beli">
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-default">Beli</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
</form>
</div>
</div>

</div>

<script type="text/javascript">
 $(".jumlah").click(function() {
  $(".id_barang").val($(this).attr('data-id'));
  });
 </script>
