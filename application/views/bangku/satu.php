		<!-- <div class="topic">
			<div class="container">
				<div class="col-md-12">
					<a href="#" class="btn btn-warning" role="button">
						Generate
					</a>
				</div>
			</div>
		</div> -->
	</div>
	<!--documents-->
	<div class="container documents">
		<div class="example">
				<?php
				if(!empty($data)):
					$no=0;
					foreach($data as $res):
						if($no % 6 === 0):
							@$def1 = $data[$no];
							@$def2 = $data[$no+1];
							@$def3 = $data[$no+2];
							@$def4 = $data[$no+3];
							@$def5 = $data[$no+4];
							@$def6 = $data[$no+5];
				?>
			<div class="row">
				<div class="col-md-2"<?php echo (empty($def1))? " style=\"display:none;\"" : '';?>>
					<div class="thumbnail">
						<img class="img-rounded" src="<?php echo base_url('assets/img/mahasiswa/'.$def1['photo']);?>" >
						<div class="caption text-center">
							<!-- <h3><?php echo ucwords(strtolower($def1['nama']));?></h3> -->
							<p>
								<a href="#" class="btn btn-warning" role="button">
									<!-- <?php echo $def1['nim'];?> -->
									Bangku <?php echo $no+1;?>
								</a>

							</p>
						</div>
					</div>
				</div>
				<div class="col-md-2"<?php echo (empty($def2))? " style=\"display:none;\"" : '';?>>
					<div class="thumbnail">
						<img class="img-rounded" src="<?php echo base_url('assets/img/mahasiswa/'.$def2['photo']);?>" >
						<div class="caption text-center">
							<!-- <h3><?php echo ucwords(strtolower($def2['nama']));?></h3> -->
							<p>
								<a href="#" class="btn btn-warning" role="button">
									<!-- <?php echo $def2['nim'];?> -->
									Bangku <?php echo $no+2;?>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-2"<?php echo (empty($def3))? " style=\"display:none;\"" : '';?>>
					<div class="thumbnail">
						<img class="img-rounded" src="<?php echo base_url('assets/img/mahasiswa/'.$def3['photo']);?>" >
						<div class="caption text-center">
							<!-- <h3><?php echo ucwords(strtolower($def3['nama']));?></h3> -->
							<p>
								<a href="#" class="btn btn-warning" role="button">
									<!-- <?php echo $def3['nim'];?> -->
									Bangku <?php echo $no+3;?>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-2"<?php echo (empty($def4))? " style=\"display:none;\"" : '';?>>
					<div class="thumbnail">
						<img class="img-rounded" src="<?php echo base_url('assets/img/mahasiswa/'.$def4['photo']);?>" >
						<div class="caption text-center">
							<!-- <h3><?php echo ucwords(strtolower($def4['nama']));?></h3> -->
							<p>
								<a href="#" class="btn btn-warning" role="button">
									<!-- <?php echo $def4['nim'];?> -->
									Bangku <?php echo $no+4;?>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-2"<?php echo (empty($def5))? " style=\"display:none;\"" : '';?>>
					<div class="thumbnail">
						<img class="img-rounded" src="<?php echo base_url('assets/img/mahasiswa/'.$def5['photo']);?>" >
						<div class="caption text-center">
							<!-- <h3><?php echo ucwords(strtolower($def5['nama']));?></h3> -->
							<p>
								<a href="#" class="btn btn-warning" role="button">
									<!-- <?php echo $def5['nim'];?> -->
									Bangku <?php echo $no+5;?>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-2"<?php echo (empty($def6))? " style=\"display:none;\"" : '';?>>
					<div class="thumbnail">
						<img class="img-rounded" src="<?php echo base_url('assets/img/mahasiswa/'.$def6['photo']);?>" >
						<div class="caption text-center">
							<!-- <h3><?php echo ucwords(strtolower($def6['nama']));?></h3> -->
							<p>
								<a href="#" class="btn btn-warning" role="button">
									<!-- <?php echo $def6['nim'];?> -->
									Bangku <?php echo $no+6;?>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
				<?php
						endif;
					$no++;
					endforeach;
				endif;
				?>
			
		</div>
	</div>