<?php
$page = 'Home';
include 'admin/koneksi.php';
include 'menu.php';
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<?php
		$query = "SELECT p.*, i.nama FROM pengumuman p INNER JOIN image i ON i.id_pengumuman = p.id ORDER BY p.id DESC, i.id";
		$smt = $koneksi->prepare($query);
		$smt->execute();
		$result = $smt->get_result(); ?>

		<div class="modal-content">
			<div class="modal-header">
				<div>
					<p id="judul-pengumuman" class="mb-0"><strong>Pengumuan</strong></p>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

			</div>
			<div class="modal-body">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php for ($i = 0; $i < $result->num_rows; $i++) { ?>
							<li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" <?php if ($i == 0) echo 'class="active"' ?>></li>
						<?php } ?>
					</ol>

					<div class="carousel-inner">
						<?php
						$x = 0;
						while ($pengumuman = $result->fetch_assoc()) {
						?>
							<div class="carousel-item <?php if ($x == 0) echo 'active' ?>" data-judul="<?= $pengumuman['judul'] ?>">
								<a href="<?= $pengumuman['link'] ?>" target="blank"><img class="d-block w-100" src="admin/gambar/pengumuman/<?= $pengumuman['nama'] ?>"></a>
							</div>
						<?php $x++;
						} ?>
					</div>

					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

		</div>
	</div>
</div>
<div role="main" class="main">
	<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-big' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
			<ul>
				<li class="slide-overlay" data-transition="fade">
					<img src="img/sdu.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
				

						<h1 class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center" data-voffset="['0','0','0','-30']" data-start="700" data-fontsize="['22','22','22','40']" data-lineheight="['25','25','25','45']" data-letterspacing="0" data-transform_in="y:[-50%];opacity:0;s:500;"> Selamat Datang</h1>
						<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['60','60','60','85']" data-fontsize="['50','50','50','70']" data-lineheight="['55','55','55','95']" data-letterspacing="0">KSATRIA MUDA UDAYANA !</div>
			
				</li>

			</ul>

		</div>
	</div>

	<div class="container">

		<br>

		<section class="popupVid appear-animation" data-appear-animation-delay="800" data-appear-animation="fadeInUpShorter">
			<h2 class="font-weight-normal text-6 mb-3 text-center"><strong class="font-weight-extra-bold">After Event Student Day 2019</strong></h2>
			<hr>
			<iframe class="videoteaser-bottom" src="https://www.youtube.com/embed/Pe_ypzMKYgk" allow="autoplay; encrypted-media" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="100%" auto height="600"></iframe>
		</section>

		<hr class="solid mb-5">

		<div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
			<div class="col-md-4 mb-4 mb-md-0">
				<img class="img-fluid scale-3 p-3 pr-md-0 my-4 lazy-load-loaded" width="100%" data-plugin-lazyload="" data-plugin-options="{'effect' : 'fadeIn'}" src="img/logo/logo-sdu2020-fix-stroke.png" alt="layout styles" style="animation-duration: 1s;" />
			</div>
			<div class="col-md-8 pl-md-5">
				<div class="accordion" id="accordionExample">

					<div id="headingOne" class="appear-animation" data-appear-animation="fadeInUpShorter">
						<h2 class="mb-0 ">
							<button class="btn btn-collapse" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<strong class="title-expand font-weight-bolder text-6" data-content="Selayang Pandang" style="color: black;text-decoration: none;"> Selayang Pandang</strong>
								<i class="fas" aria-hidden="true"></i>

							</button>
						</h2>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="container text-justify text-3">
							<big class="">Mahasiswa Baru Univeristas Udayana 2020, ingatlah bahwa hari ini teman-teman telah memasuki universitas. Ini berarti, teman-teman harus mulai meningkatkan kapasitas. Karena hari ini, teman-teman akan membawa sebuah identitas; sebagai sekelompok intelektual muda yang memikul tanggung jawab di pundaknya; sekelompok orang muda yang senantiasa memiliki inspirasi untuk berkarya; sekelompok orang yang akan meneruskan nafas dan cita-cita bangsa. Siapakah orang-orang itu?
								Kalian lah, Mahasiswa!
								Selamat Datang di Kampus Sang Prabu, semangat menapaki perjalanan baru dan menggengggam arah bangsa di tanganmu!</big>

						</div>
					</div>
					<hr class="solid">


					<div id="headingTwo" class="appear-animation" data-appear-animation="fadeInUpShorter">
						<h2 class="mb-0">
							<button class="btn collapsed btn-collapse" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<strong class="title-expand font-weight-bolder text-6" data-content="Spirit Utama" style="color: black;text-decoration: none;">Spirit Utama

								</strong>
								<i class="fas" aria-hidden="true"></i>
							</button>

						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="container text-justify text-3">
							<big class="">Kami memaknai Student Day sebagai sebuah kegiatan yang membawa semangat, pikiran dan pemikiran. Berbicara tentang Student Day 2020 tentunya tidak terlepas dari sebuah semangat yang kami angkat di tahun ini. Inspiratif adalah satu kata yang kami angkat sebagai semangat utama yang secara sederhana kami makani sebagai sebuah proses mentransfer makna, karya, ide, gagasan dan hal-hal baik lainnya kepada orang lain, utamanya panitia dan peserta Student Day 2020 Universitas Udayana. Besar harapan kami agar setiap elemen yang terlibat dalam kegiatan ini dapat senantiasa menjiwai spirit Inspiratif dalam cita dan karya yang nantinya dapat bermafaat bagi banyak pihak.</big>

						</div>
					</div>
					<hr class="solid">


					<div id="headingThree" class="appear-animation" data-appear-animation="fadeInUpShorter">
						<h2 class="mb-0">
							<button class="btn collapsed btn-collapse" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<strong class="title-expand font-weight-bolder text-6" data-content="Tema Dan Logo" style="color: black;text-decoration: none;"> Tema Dan Logo

								</strong>
								<i class="fas" aria-hidden="true"></i>

							</button>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="container text-justify text-3">
							<big class="">Mengangkat tema <strong>Ksatria Adibrata Upangganing Dharma</strong>, yang berarti ksatria yang bertingkah laku unggul dalam berkarya dengan berlandaskan dharma. Memiliki harapan agar mahasiswa sebagai ksatria muda udayana, sebagai tunas muda udayana dapat menjadi sosok yang bertingkah laku unggul dalam berkarya dengan berlandasakan kebaikan. <br>
								Logo yang merupakan kolaborasi daripada spirit utama, di tahun ini memiliki bentuk dasar tetesan air yang bermakna sebagai sumber kehidupan dan kebermanfaatan. Terdiri atas ornamen-ornamen pembentuk, yaitu:
								<strong>Pena Bulu</strong> yang melambangkan produktivitas karya dan kreativitas akademik mahasiswa dalam rangka memajukan pengetahuan.
								<strong>Lembaran Buku Yang Terbuka</strong> melambangkan sumber ilmu pengetahuan yang akan diperoleh oleh mahasiswa baru, serta melambangkan lembaran cerita yang akan dilalui dalam kehidupan perkuliahan. <strong>Obor</strong> melambangkan cahaya penerang pikiran menuju cita-cita dan keluhuran budi. <strong>Tiga Helai Daun</strong> melambangkan Tri Dharma Perguruan Tinggi sebagi spirit utama yang senantiasa dijunjung oleh mahasiswa. <strong>Tunas</strong> mempresentasikan Student Day 2020 sebagai fase awal perjalanan seorang mahasiswa baru yang selalu bertumbuh dan membawa kebermanfaatan bagi masyarakat. <strong>Siluet Orang</strong> mempresentasikan sosok mahasiswa baru yang memiliki semangat berkarya dalam kebaikan dan <strong>Cakra Universitas Udayana</strong> melambangkan Almamater Universitas Udayana yang selalu tersemat dalam diri civitas akademika Universitas Udayana.
							</big>

						</div>
					</div>

					<hr class="solid">
				</div>
			</div>
		</div>

		<hr class="solid mb-5">

		<div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900">
			<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Apa Itu
						Student Day ?</strong></h2>
				<big>
					<p class="text-3 text-justify">Student Day 2020 Universitas Udayana adalah kegiatan masa orientasi bagi mahasiswa baru Universitas Udayana yang bersifat wajib. Lebih dari itu, Student Day 2020 Universitas Udayana adalah sebuah momentum penanaman nilai-nilai positif serta akselerator daripada proses perjalanan seseorang dalam menapaki kehidupan kampus. Karena di saat ini lah, mahasiswa akan memperoleh sedikit tidaknya proses berpikir, memahami, belajar, dan mengembangkan diri melalui seluruh rangkaian kegiatan yang telah dirancang. Berangkat dari pentingnya peran mahasiswa untuk kemajuan bangsa dan negara ini, maka dipandang perlu untuk mengadakan Student Day 2020 Universitas Udayana sebagai wadah orientasi mahasiswa baru yang mencakup pemberian nilai, gagasan, pembentukan karakter, serta pemberian bekal keterampilan soft skill serta hard skill yang harapannya dapat menunjang kapabilitas diri mahasiswa dalam menjalani kehidupan perkuliahan, lebih jauh lagi dalam kehidupan bermasyarakat dan bernegara.</p>
				</big>
			</div>
			<div class="col-md-4 px-5 px-md-3">
				<img class="img-fluid scale-2 my-4" src="img/_MG_9820.jpg" alt="style switcher" />
			</div>
		</div>

		<hr class="solid mb-5">

		<div class="row text-center">
			<div class="col">
				<h2 class="font-weight-normal text-6 mt-4  appear-animation" data-appear-animation="fadeInUpShorter"> <strong class="font-weight-extra-bold">Music Student Day</strong></h2>
			</div>
		</div>

		<div class="container py-2  appear-animation" data-appear-animation="fadeInUpShorter">
			<div class="card col-md-8 mx-auto" style=" box-shadow: 0px 0px 44px -10px rgba(0, 0, 0, 0.15);">
				<div class="player p-4" style="height: auto;">
					<div class="details">
						<div class="now-playing">PLAYING x OF y</div>
						<div class="track-art"></div>
						<div class="track-name">Track Name</div>
						<div class="track-artist">Track Artist</div>
					</div>
					<div class="buttons justify-content-center">
						<div class="loop-track pr-3" style="opacity: .5;" onclick="loopTrack()"><i class="fas fa-redo fa-2x" style="cursor: pointer;"></i></div>
						<div class="prev-track" onclick="prevTrack()"><i class="fa fa-step-backward fa-2x"></i></div>
						<div class="playpause-track p-lg-3 p-1" onclick="playpauseTrack()"><i class="fa fa-play-circle fa-5x"></i></div>
						<div class="next-track" onclick="nextTrack()"><i class="fa fa-step-forward fa-2x"></i></div>
						<div class=" pl-3"><i class="fas fa-bars fa-2x" id="accordion" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="cursor: pointer;"></i></div>
					</div>
					<div class="card col-12 mx-auto">
						<div id="collapseOne" class="collapse container">
							<h3 class="pt-3">List Lagu</h3>
							<hr>
							<div class="list p-3 text-gray" style="color: black;">
								<ul style="list-style: none;">
									<li onclick="playToTrack(0)" style="cursor: pointer;">Bhakti Udayana</li>
									<hr>
									<li onclick="playToTrack(1)" style="cursor: pointer;">Mars Udayana</li>
									<hr>
									<li onclick="playToTrack(2)" style="cursor: pointer;">Hynme Udayana</li>
									<hr>
									<li onclick="playToTrack(3)" style="cursor: pointer;">Mars Mahasiswa</li>
									<hr>
									<li onclick="playToTrack(4)" style="cursor: pointer;">Buruh tani</li>
									<hr>
									<li onclick="playToTrack(5)" style="cursor: pointer;">Darah juang</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="slider_container">
						<div class="current-time">00:00</div>
						<input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
						<div class="total-duration">00:00</div>
					</div>
					<div class="slider_container">
						<i class="fa fa-volume-down"></i>
						<input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
						<i class="fa fa-volume-up"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr class="solid my-1 mt-5">
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<h2 class="font-weight-normal text-6 mt-4  appear-animation" data-appear-animation="fadeInUpShorter"> <strong class="font-weight-extra-bold">Kalender
						Event</strong></h2>
			</div>
		</div>
		<section class="card appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style=" box-shadow: 0px 0px 44px -10px rgba(0, 0, 0, 0.15);">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
						<div id="calendar" class="col-centered">
						</div>
					</div>
				</div>
			</div>
		</section>
		<br>
	</div>
</div>

<?php include 'footer.php'; ?>
<script>
	var judul = $('.carousel-item.active').data('judul');
	$('#judul-pengumuman').text(judul);

	$('#carouselExampleIndicators').bind('slid.bs.carousel', function(e) {
		var judul = $('.carousel-item.active').data('judul');
		$('#judul-pengumuman').text(judul);
		console.log('slide event!' + judul);
	});

	$('.collapse').on('shown.bs.collapse', function() {
		$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
	}).on('hidden.bs.collapse', function() {
		$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
	});
</script><?php /**PATH C:\xampp\htdocs\web-SDU\resources\views/index.blade.php ENDPATH**/ ?>