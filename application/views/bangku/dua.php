<!-- 		<div class="topic"> -->
			<div class="container" style="margin-top:20px;">
				<div class="col-md-5" style="text-align:center;">
				</div>
				<div id="giliran" class="col-md-1 thumbnail" style="text-align:center;">
					Giliran
					<img class="img-rounded" src="<?php echo base_url('assets/img/default.jpg');?>" >
				</div>
				<div class="col-md-5">
					<!-- <select name="selecter_basic" onchange="order(this);" class="selecter_2">
						<option value="asc">Asc</option>
						<option value="desc">Desc</option>
					</select> -->
				</div>
			</div>
		<!-- </div> -->
	</div>
	<!--documents-->
	<div class="container documents">
		<div class="example" id="bangkus">
			<?php
				if(!empty($bangku)):
					$no=0;
					foreach ($bangku as $bangkuna):
						if($no % 12 === 0):
			?>
			<div class="row">
				<?php for($i=0;$i<12;$i++):
						@$def = $bangku[$no+$i];
				?>
					<div class="col-md-1" id="bangku"<?php echo (empty($def))? " style=\"display:none;\"" : '';?>>
						<div class="thumbnail" id="innerBangku">
							<img class="img-rounded" id="poto" src="<?php echo base_url('assets/img/default.jpg');?>" >
							<div class="caption text-center">
								<span class="label label-primary"><?php echo $def;?></span>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
			<?php
						endif;
					$no++;
					endforeach;
				endif;
			?>
		</div>
	</div>

	<script type="text/javascript">
		var ke;

		ke=1;

        var datana = [];

        getData();

        function order(sel) {
			getData(sel.value);
		}

        function getData(orderby='asc'){
        	$.get("<?php echo site_url('api/getMhsAct');?>", function(data){
	        	// $(".bangku:first-child").clone().appendTo("#bangkus");
	        	datana.splice(0,datana.length);
	        	if(orderby=='asc'){
	        		// Asc
		        	for(var i=0;i<data.length;i++){
		        		datana.push({nim : data[i].nim, nama : data[i].nama, photo : '<?php echo base_url('assets/img/mahasiswa');?>'+'/'+data[i].photo});
		        	}
	        	}else{
	        		// Desc
		        	for(var i=data.length-1;i>=0;i--){
		        		datana.push({nim : data[i].nim, nama : data[i].nama, photo : '<?php echo base_url('assets/img/mahasiswa');?>'+'/'+data[i].photo});
		        	}
	        	}

	        	console.log(datana.length);

	        	// console.log(datana[ke-1].photo);
	        	$(".caption").css({ opacity:0 });

	        	$('#giliran img').attr('src', datana[ke-1].photo);

	        	$("#bangkus").click(function(e) {
	        		var source = $(e.target);

	        		if(source.is("#poto")){
	        			// console.log(source.attr('src'));
	        			// source.addClass("kartu-removed");
	        			// console.log(source);
	        			// source.css({ opacity:0 });
	        			source.replaceWith("<img class=\"img-rounded\" src='"+datana[ke-1].photo+"' >");
	        			// source.attr('src', datana[ke-1].photo);
	        			// $('#innerBangku img').attr('src', datana[ke-1].photo);

	        			// $("."+pattern).css({ opacity: 0 });


	        			ke++;
						if(ke<=data.length){
							$(".selecter_2").prop('disabled', true);
							$('#giliran img').attr('src', datana[ke-1].photo);
		        		}else{
		        			$(".caption").css({ opacity:100 });
		        			$(".selecter_2").prop('disabled', false);
		        			$('#giliran img').attr('src', '<?php echo base_url('assets/img/default.jpg');?>');
		        		}
	        		}
					
				});

				// $("#bangkus").find(".row").children().each(function(index) {
				// 	if(index<=data.length){
				// 		console.log("Index : "+index);
				// 	}
				// });
				// console.log($("#bangkus").find(".row").children());
	        	

			}, "json" );
        }


	</script>