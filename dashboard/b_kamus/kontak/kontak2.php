<div class="content-container animated fadeInUp">
		<div class="entry-main">
			<div class="col s12 offset-m1 m8 card-panel">
				<?php if($blevel=="Super Administrator"){ ?>
				<ul id="tabs-swipe" class="tabs">
				    <li class="tab col s6"><a href="#contact">Form</a></li>
				    <li class="tab col s6"><a href="#response">| &nbsp;Response<a></li>   
			  	</ul>
			  <?php }?>
			  <div id="contact" class="col s12 white">
				  	<br>
				  	<h1 class="entry-title page center">Kontak Kami</h1>
				  	<div class="divider"></div>
				  	<div class="entry-content">
					<p>
						<address><strong>Universitas Islam Indonesia</strong><br />
						Jl. Kebayoran
						<br />
						<abbr title="Phone">P :</abbr> (021) 123-456</address>
						<address><strong>Bagus Pambudi</strong><br />
						<a href="mailto:#">maspamzdev@gmail.com</a></address>
					</p>
					<form method="POST">
					<div class="input-field">
						<span class="icons">
							<i class="fa fa-user"></i>
						</span>
						<input type="text" name="nama" placeholder="Nama Lengkap" class="input-form with-icons">
					</div>

					<div class="input-field">
						<span class="icons">
							<i class="fa fa-envelope"></i>
						</span>
						<input type="text" name="email" placeholder="Email" class="input-form with-icons">
					</div>

					<div class="input-field">
						<span class="icons">
							<i class="fa fa-phone"></i>
						</span>
						<input type="text" placeholder="No. Handphone" name="phone" class="input-form with-icons">
					</div>

					<div class="input-field">
						<span class="icons">
							<i class="fa fa-map-marker"></i>
						</span>
						<input type="text" placeholder="Kota Tinggal" name="kota" class="input-form with-icons">
					</div>

					<div class="input-field">
						<span class="icons">
							<i class="fa fa-comment"></i>
						</span>
						<textarea placeholder="Pesan Anda" name="message" class="input-form with-icons"></textarea>
					</div>

					<div class="button-field">
						<button type="submit" name="simpan" class="button-form">Send</button>
					</div>
				</form>
				</div>
			  </div>

			  <?php if($blevel=="Super Administrator"){ ?>
			  <div id="response" class="col s12 white">
			  	<
			  	
			  </div>
			<?php }?>
			
			

			

			</div>
		</div>

	</div>