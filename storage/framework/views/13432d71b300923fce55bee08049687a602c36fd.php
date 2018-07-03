<?php $__env->startSection('content'); ?>

			<div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left" style="width: 80%">
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mata Kuliah yang Dipilih</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr style="text-align: center">
                          <th>No</th>
						  <th>Semester</th>
                          <th>Kode MK</th>
                          <th>Mata Kuliah</th>
                          <th>SKS</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr style="text-align: center">
                          <th scope="row">1</th>
						  <th>I</th>
                          <th>42623</th>
                          <th>Pemrograman WEB</th>
                          <th>4</th>
                          <th> <button type="button" class="btn btn-danger">Hapus</button> </th>
                        </tr>
                        <tr style="text-align: center">
                          <th scope="row">2</th>
						  <th>I</th>
                          <th>246272</th>
                          <th>IMK</th>
                          <th>2</th>
                          <th> <button type="button" class="btn btn-danger">Hapus</button> </th>
                        </tr>
                        <tr style="text-align: center">
                          <th scope="row">3</th>
						  <th>I</th>
                          <th>37272</th>
                          <th>Pemrograman Dasar</th>
                          <th>4</th>
                          <th> <button type="button" class="btn btn-danger">Hapus</button> </th>
                        </tr>
                         <tr style="text-align: center">
                          <th scope="row">4</th>
						  <th>I</th>
                          <th>26724</th>
                          <th>Jaringan Komputer</th>
                          <th>3</th>
                          <th> <button type="button" class="btn btn-danger">Hapus</button> </th>
                        </tr>
                      </tbody>
                    </table>
					</div>
					</div>
					</div>
                  </div>
                </div>
              </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>