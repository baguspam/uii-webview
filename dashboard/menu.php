	<div id="slide-out-left" class="side-nav">

		<ul class="collapsible" data-collapsible="accordion">
			<li>
				<a href="./"><i class="fa fa-home"></i> Home Layout </a>
			</li>
			<li>
				<a href="./?m=about"><i class="fa fa-question-circle"></i> Tentang Aplikasi</a>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-file-o"></i> Pembinaan <span class="angle-right fa fa-angle-right"></span></div>
				<div class="collapsible-body">
					<ul>
						<li><a href="./?m=pta">PTA</a></li>
						<li><a href="./?m=pkd1">PKD 1</a></li>
						<li><a href="./?m=pkd2">PKD 2</a></li>
						<li><a href="./?m=pndi">PNDI 1</a></li>
						<li><a href="./?m=pndi2">PNDI 2</a></li>
						<li><a href="./?m=ppd">PPD</a></li>
						<li><a href="./?m=btaq">BTAQ</a></li>
					</ul>
				</div>
			</li>
			
			<li>
				<a href="./?m=panduan"><i class="fa fa-terminal"></i> Panduan</a>
			</li>
			<li>
				<a href="./?m=kontak"><i class="fa fa-envelope-o"></i> Kontak</a>
			</li>
		</ul>

	</div>

	<div id="slide-out-right" class="side-nav">
		<ul class="collapsible" data-collapsible="accordion">
			<br>
			Menu Member
			<li>
				<a href="./?m=profile">> Profile </a>
			</li>
			<li>
				<a href="./?m=ubah_password">> Ubah Password</a>
			</li>
			<li>
				<a href="./?m=logout">> Logout</a>
			</li>
		</ul>
	</div>


	<div id="page">
	
	<div class="top-navbar">
		<div class="top-navbar-left">
			<a href="#" id="menu-left" data-activates="slide-out-left"><i class="fa fa-bars"></i></a>
			<a href="#" style="color:white;text-decoration:none;padding-top:2px;"><h2><?php echo $nama_aplikasi;?></h2></a>
		</div>
		<div class="top-navbar-right">
			<a href="./"><i class="fa fa-refresh"></i></a>
			<a href="#" id="menu-right" data-activates="slide-out-right"><i class="fa fa-user"></i></a>
		</div>
	</div>