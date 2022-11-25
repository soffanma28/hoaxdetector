@extends('layouts.layout')

@section('custom_css')
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<style>

    * {
        font-family: 'Roboto', sans-serif !important;
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 0.75rem 1rem;
        font-size: 1.1rem;
        font-weight: 500;
        line-height: 1.5;
        color: #181C32;
        background-color: #ffffff;
        background-clip: padding-box;
        border: 1px solid #E4E6EF;
        appearance: none;
        border-radius: 0.475rem;
        box-shadow: inset 0 1px 2px rgb(0 0 0 / 8%);
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .form-control.form-control-solid {
        background-color: #F5F8FA;
        border-color: #F5F8FA;
        color: #5E6278;
        transition: color 0.2s ease, background-color 0.2s ease;
    }

    /* // Medium devices (tablets, 768px and up) */
    @media (max-width: 768px) {
        h3 {
            font-size: 4em !important;
            font-weight: bold;
        }
        p {
            font-size: 2em !important;
        }
        .form-control.form-control-solid {
            font-size: 2em !important;
        }
        .resp-tabs-container input[type="submit"], .wthree_more a, .footer form input[type="submit"] {
            font-size: 2em !important;
            padding: 0.5em 1em;
        }
    }

    /* // Large devices (desktops, 992px and up) */
    @media (max-width: 992px) {
        h3 {
            font-size: 4em !important;
            font-weight: 600 !important;
            margin-bottom: 1rem !important;
        }
        p {
            font-size: 2em !important;
            margin-bottom: 1rem !important;
        }
        .form-control.form-control-solid {
            font-size: 2em !important;
            padding: 1rem;
        }
        .resp-tabs-container input[type="submit"], .wthree_more a, .footer form input[type="submit"] {
            font-size: 2.5em !important;
            padding: 0.5em 1em !important;
            width: 50% !important;
            border-radius: 0.475rem !important;
        }

        .fs1em {
            font-size: 1em !important;
        }
        .fs2em {
            font-size: 2em !important;
        }

        .fs3em {
            font-size: 3em !important;
        }
        .fs4em {
            font-size: 4em !important;
        }
    }
    .box {
        float: left;
        height: 1em;
        width: 1em;
        clear: both;
    }

    .red {
        background-color: #dc3545;
    }

    .green {
        background-color: #198754;
    }
</style>
@stop

@section('content')

<div id="home" style="margin-top: 30px;">
	<div class="container">
		<div class="agileits_w3layouts_heding">
			<h3>Aplikasi Pendeteksi Hoax</h3>
			<p>KKN TEMATIK IDBU UNDIP KELOMPOK 5 KELURAHAN ROWOSARI</p>
			<img src="images/head1.png" alt="Lines" />
		</div>

		<div class="resp-tabs-container">
			<div class="row">
				<div class="reset">
					<form id="form_classification" action="#" method="post">
						{{ csrf_field() }}

						<div class="col-md-12 fields">
							<textarea class="form-control form-control-solid" name="teks" placeholder="Paste berita yang mencurigakan disini (Headline berita, Paragraf, dan yang lainnya)" required="" style="height: 370px!important;"></textarea>
						</div>

						<div class="clearfix"></div>
						<br>

						<div class="col-sm-push-3 col-md-6 fields center-agileits" style="display: none;">
							<h6>Select the method</h6>
							<select name="metode" class="form-control">
								<option value="1" selected>K-Nearest Neighbour</option>
								<option value="2">Multinomial Naive Bayes</option>
							</select>
						</div>

						<div class="clearfix"></div>

						<input type="submit" value="Analisa">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modal_result" tabindex="-1">
    <div class="modal-dialog modal-xl modal-fullscreen-lg-down">
        <div class="modal-content">
            <div id="result" class="modal-body text-center px-5 py-5">
                <h3 class="mt-5">Hasil</h3>
                <div class="row" id="result_classification"></div>

                <button type="button" class="btn btn-primary w-50 fs3em mt-5" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
{{-- <div class="modal fade" id="modal_result" tabindex="-1" data-backdrop="static" role="dialog">
	<div class="modal-dialog modal-xl modal-fullscreen-lg-down">

		<div id="result" class="col-md-12 agileits_schedule_bottom_right">

			<div class="w3ls_schedule_bottom_right_grid">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3><span>Hasil</span></h3>
				</br>
				<div class="row" id="result_classification"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div> --}}


<div class="agile_services row">
	<div class="col-lg-6 col-md-12 col-sm-12 agileinfo_schedule_bottom_left">
		<img src="images/schedule.jpg" alt=" " class="img-fluid" />
	</div>
	<div class="col-lg-6 col-md-12 col-sm-12 agileits_schedule_bottom_right">
		<div class="w3ls_schedule_bottom_right_grid">
			<h3>Tentang <span>Hoax</span></h3>
			<p>Hoax merupakan informasi, kabar, berita yang palsu atau bohong. Pada Kamus Besar Bahasa Indonesia (KBBI) hoax diartikan sebagai berita yang bohong. Hoax yaitu informasi yang dibuat-buat atau direkayasa untuk menutupi informasi yang sebenarnya. Dengan kata lain, hoax diartikan sebagai upaya pemutarbalikan fakta menggunakan informasi yang seolah-olah meyakinkan akan tetapi tidak dapat diverifikasi kebenarannya.
			</p>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>


{{-- <div class="features">
	<div class="container">
		<div class="agileits_w3layouts_heding">
			<!--<p>We provide best Solutions</p>-->
			<h3>How it <span>Works</span></h3>
			<img src="images/head1.png" alt="Lines"/>
		</div>
		<div class="col-md-12">
			<img src="images/tahapan.png" alt=" " class="img-fluid center-block"/>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-4">
		</div>

	</div>
</div> --}}

<div id="team" class="team">
    <div class="agileits_w3layouts_heding">
        {{-- <p class="white-w3ls">KKN Tematik </p> --}}
        <h3 class="white-w3ls">Meet the <span>Team</span></h3>
        <img src="images/head1.png" alt="Lines" />
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Abi.jpg') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Abiyuda Wirahadi</h3>
                <p>Fakultas Ekonomika dan Bisnis</p>
                <p>Manajemen</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Ola.jpeg') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Saffana Aviola</h3>
                <p>Fakultas Ekonomika dan Bisnis</p>
                <p>Akuntansi</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Shafira.png') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Shafira Yulina Agatta</h3>
                <p>Fakultas Kesehatan Masyarakat</p>
                <p>Kesehatan Masyarakat</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/DavidJan.jpg') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>David Jan Vito</h3>
                <p>Fakultas Perikanan dan Ilmu Kelautan</p>
                <p>Ilmu Kelautan</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Rida.jpeg') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Rida Maritza</h3>
                <p>Fakultas Peternakan dan Pertanian</p>
                <p>Peternakan</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Shavira.png') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Shavira Maharani Fibrianti</h3>
                <p>Fakultas Psikologi</p>
                <p>Psikologi</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Elsa.png') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Elsavira arizkiyan az zaqi</h3>
                <p>Fakultas Sains dan Matematika</p>
                <p>Ilmu Komputer / Informatika</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Dea.jpg') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Larasati Dea Arsya</h3>
                <p>Fakultas Teknik</p>
                <p>ARSITEKTUR</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/DavidS.jpg') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>David Suwarno Kusweanto</h3>
                <p>Fakultas Teknik</p>
                <p>Perencanaan Wilayah Kota</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Cinka.jpg') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Cinka Sihaloho</h3>
                <p>Fakultas Teknik</p>
                <p>Sistem Komputer / Teknik Komputer</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Soffan.png') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Soffan Marsus Ahmad</h3>
                <p>Fakultas Teknik</p>
                <p>Sistem Komputer / Teknik Komputer</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Lala.png') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Laela Fitriana Anggraeni</h3>
                <p>Fakultas Teknik</p>
                <p>Teknik Geodesi</p>
            </div>
            <div class="col-lg-2 offset-lg-4 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Irkham.jpg') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Irkham Zumar</h3>
                <p>Sekolah Vokasi</p>
                <p>Akuntansi Pajak</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 w3_agile_team_grid">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="{{ asset('images/team/Galang.jpg') }}" alt=" " class="figure-img img-fluid rounded" /></figure>
                <h3>Galang Matahari</h3>
                <p>Sekolah Vokasi</p>
                <p>Akuntansi Pajak</p>
            </div>

            {{-- <div class="col-md-2 w3_agile_team_grid">
                <div class="hover14 column">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="images/6.jpg" alt=" " class="figure-img img-fluid rounded" /></figure>
                </div>
                <h3>Shaugi Chasbullah</h3>
                <p>G64154064</p>
                <div class="w3l-social">
                    <ul>
                        <li><a href="https://www.facebook.com/shaugi.nithue"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/skullker94"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/1/108311147601195581070"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 w3_agile_team_grid">
                <div class="hover14 column">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="images/7.jpg" alt=" " class="figure-img img-fluid rounded" /></figure>
                </div>
                <h3>Aulia Afriza</h3>
                <p>G64154054</p>
                <div class="w3l-social">
                    <ul>
                        <li><a href="https://www.facebook.com/aulia.potter"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 w3_agile_team_grid">
                <div class="hover14 column">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="images/8.jpg" alt=" " class="figure-img img-fluid rounded" /></figure>
                </div>
                <h3>Kania Latansa</h3>
                <p>G64154043</p>
                <div class="w3l-social">
                    <ul>
                        <li><a href="https://www.facebook.com/kania.latansaarziahutagaol"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 w3_agile_team_grid">
                <div class="hover14 column">
                    <figure class="figure d-flex align-items-center" style="height: 300px;"><img src="images/9.jpg" alt=" " class="figure-img img-fluid rounded" /></figure>
                </div>
                <h3>Ahmad Isyfalana Amin</h3>
                <p>G64154033</p>
                <div class="w3l-social">
                    <ul>
                        <li><a href="https://www.facebook.com/ahmadaminalf"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<div class="w3_agile_footer">
	<div class="container">
		<p>Thanks to <a href="https://github.com/ahisyfa/hoaxanalyzer">HoaxAnalyzer</a> From IPB</p>
		<div class="arrow-container animated fadeInDown">
			<a href="#home" class="arrow-2 scroll">
				<i class="fa fa-angle-up"></i>
			</a>
			<div class="arrow-1 animated hinge infinite zoomIn"></div>
		</div>
	</div>
</div>


<script src="js/bootstrap.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/easy-responsive-tabs.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>


<script type="text/javascript">
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "slide",	start: function(slider){
				$('body').removeClass('loading');
			}
		});

        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [ 1000, 7000 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


    });

    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });

        $('#form_classification').submit(function(e){
            e.preventDefault();

            $('#result_classification').html('<img src="images/ajax-loader.gif" alt=" "/>');
            $('#modal_result').modal('show');

            $.ajax({
                url: 'klasifikasi/submit',
                method: 'POST',
                type: 'html',
                data: $('#form_classification').serialize(),
                success: function(datanya){
                    $('#result_classification').html(datanya);
                    console.log(datanya);

                }
            });
        });

    });

</script>


@endsection
