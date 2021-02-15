   <div class="container">
    <div class="row mt-3">
    <div class="coll-md-6">    
        <div class="card">
        <div class="card-header">Tabel Add info</div>
         <div class="card-body">
            <form action="<?php echo base_url('Backend/Info/ProsesAddInfo'); ?>" method="POST"></form>
            <form>
            <div class="form-group">
                <label for="info">Info</label>
                <input type="hidden" name="id_info">
                <input type="varchar" name="judul">
                <small class="form-text text-danger"><?= form_error('info'); ?></small>
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" name="isi">
                <small class="form-text text-danger"><?= form_error('isi'); ?></small>
            </div>
            <button type="submit">Tambah Info</button>
            </form>
            </div>
          </div>  
        </div>
        </div>
    </div>