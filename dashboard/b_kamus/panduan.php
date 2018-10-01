<?php if($_GET['m']=="panduan"){ 
dtb();
$queryMenu = mysql_query("SELECT * FROM menu_web WHERE link_url='".$_GET['m']."'");
$readMenu = mysql_fetch_array($queryMenu);
if (isset($_POST['simpan'])){
	//Deklarasi Variable
	$getIsi = $_POST['isi'];
	$queryMenuUp = mysql_query("UPDATE menu_web SET keterangan='".$getIsi."' WHERE link_url='".$_GET['m']."'");
	if($queryMenuUp){
		echo "<script>
				 alert('Berhasil Diupdate');
			</script>";
	}else{
		echo "<script>
				 alert('Gagal Diupdate');
			</script>";

	}

}
?>
	<div class="content-container animated fadeInUp">

		<div class="entry-main">
			<div class="col s12 offset-m1 m8 card-panel">
			
            <p>
            	<h3 style="text-align:center;">Panduan
            	<?php if($blevel=="Super Administrator"){ ?>
            		<a href="./?m=panduan&e=edit" class="waves-effect waves-light btn right" style="margin: 0px"><i class="fa fa-pencil"></i></a>
            	<?php } ?>
            	</h3>
            </p>
			<div class="divider"></div>
			<div class="entry-content" style="text-align:justify;">
				<?php if(!empty($_GET['e'])=="edit"){ ?>
				<form method="POST">
					<div class="input-field">
						<textarea id="editor" placeholder="Isi Content" name="isi" class="input-form with-icons"><?php echo $readMenu['keterangan'];?></textarea>
					</div>

					<div class="button-field col s12">
						<a href="./?m=panduan">
							<button class="btn waves-effect red" type="button"><i class="fa fa-arrow-left"></i> Kembali</button>
						</a>
						<button class="btn waves-effect waves-light right" type="submit" name="simpan">Simpan
					    	<i class="fa fa-send"></i>
					  	</button>
						
					</div>
				</form>
			<?php
			}else{
				echo $readMenu['keterangan'];
			}
			?>
			</div>
		</div>

		</div>

	</div>

	<?php }else{
		//null
	}
	?>