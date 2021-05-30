<div class="layout-px-spacing">
	<div class="row layout-top-spacing">
		<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
			<div class="widget-content widget-content-area br-6">
				<div class="mt-3">
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="collapseForm">
						Tambah Data
					</button>
					<div class="collapse mt-3" id="form">
						<div class="col-md-6">
							<div class="widget-content widget-content-area">
								<form>
									<div class="form-group mb-4">
										<label for="namaproduk">Kasir *</label>
										<input type="text" class="form-control" id="namaproduk" placeholder="">
									</div>
									<div class="form-group">
										<label for="email">Email *</label>
										<input type="email" class="form-control" name="email" id="email">
									</div>
									<div class="form-group">
										<label for="">Password *</label>
										<input type="password" class="form-control" name="password" id="password">
									</div>
									<div class="form-group">
										<label for="">No Hp *</label>
										<input type="number" class="form-control" name="no-hp" id="no-hp">
									</div>

									<div class="form-group">
										<label for="">Level *</label>
										<input type="select" class="form-control" name="level" id="level">
									</div>


									<small id="emailHelp2" class="form-text text-muted">*Required Fields</small>
									<button type="submit" class="btn btn-primary mt-3">Simpan</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="table-responsive mb-4 mt-4">
					<table id="table-list-product" class="table table-hover" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Produk</th>
								<th>Kategori</th>
								<th>Jenis</th>
								<th>Deskripsi</th>
								<th>Foto</th>
								<th>Aksi</th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<th>No</th>
								<th>Nama Produk</th>
								<th>Kategori</th>
								<th>Jenis</th>
								<th>Deskripsi</th>
								<th>Foto</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>