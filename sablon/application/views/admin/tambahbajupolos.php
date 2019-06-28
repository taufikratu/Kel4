<body>
	<div class="container">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
      </div>
      <div class="card-body">
      <?php echo form_open_multipart('atambahbajupolos/upload');?>
      <input type="text" name="namabaju" class="form-control" placeholder="Masukkan Nama" required /><br>
					<textarea name="deskripsi" class="form-control" placeholder="Deskripsi" required></textarea> 
				<br><label class="control-label col-sm-2" for="pekerjaan">Tipe:</label>
					<select name="tipe" class="form-control">
						<option name="tipe" value="Kaos">Kaos</option>
						<option name="tipe" value="Jaket">Jaket</option>
						<option name="tipe" value="Olahraga">Olahraga</option>
					</select><br>
        <input type="file" name="userfile" size="20" required/><br /><br />
        <input type="number" name="hargas" class="form-control" placeholder="Harga Ukuran S" required />
        <br><input type="number" name="hargam" class="form-control" placeholder="Harga Ukuran M" required/>
        <br><input type="number" name="hargal" class="form-control" placeholder="Harga Ukuran L" required/>
        <br><input type="number" name="hargaxl" class="form-control" placeholder="Harga Ukuran XL" required/>
        <br><input type="submit" class="btn btn-success" value="Simpan"/>

      </div>
                
    </div>		
	</div>
</body>