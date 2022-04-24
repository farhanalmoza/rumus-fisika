<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Energi Potensial | Kelompok 2</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Rumus Fisika</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 active" href="./e_potensial.php">Energi Potensial</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./gaya.php">Gaya</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./massa_jenis.php">Massa Jenis</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./panjang_gelombang.php">Panjang Gelombang</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./percepatan.php">Percepatan</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./energi_kinetik.php">Energi Kinetik</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./rangkaian_listrik_ohm.php">RL Ohm</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./periode1.php">Periode 1</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./periode2.php">Periode 2</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./periode3.php">Periode 3</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./frekuensi_1.php">Frekuensi 1</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./frekuensi_2.php">Frekuensi 2</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./frekuensi_3.php">Frekuensi 3</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./daya.php">Daya</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./usaha.php">Usaha</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./kedalamanlaut.php">Kedalaman Laut</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./jarak.php">Jarak Tempuh</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./hambatanpenggantiseri.php">Hambatan Seri</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./hambatanpenggantipararel.php">Hambatan Paralel</a>
					<a class="list-group-item list-group-item-action list-group-item-light p-3" href="./cepatrambatgelombang.php">Cepat Rambat Gelombang</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Kelompok 2</a></li>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <!-- Card Form Rumus -->
					<div class="card mt-4">
						<div class="card-header">Rumus Energi Potensial</div>
						<div class="card-body">
							<form>
								<div class="mb-3">
									<div class="row g-3 align-items-center">
										<div class="col-md-2">
											<label for="massa" class="col-form-label">Massa Benda</label>
										</div>
										<div class="col-md-6">
											<input type="number" id="massa" class="form-control" aria-describedby="massanHelpInline">
										</div>
										<div class="col-md-auto">
											<span id="massanHelpInline" class="form-text">
												dalam satuan kilogram (kg)
											</span>
										</div>
									</div>
								</div>
								<div class="mb-3">
									<div class="row g-3 align-items-center">
										<div class="col-md-2">
											<label for="gravitasi" class="col-form-label">Gravitasi Bumi</label>
										</div>
										<div class="col-md-6">
											<input type="number" id="gravitasi" class="form-control" aria-describedby="gravitasiHelpInline">
										</div>
										<div class="col-md-auto">
											<span id="gravitasiHelpInline" class="form-text">
												(m/s^2)
											</span>
										</div>
									</div>
								</div>
								<div class="mb-3">
									<div class="row g-3 align-items-center">
										<div class="col-md-2">
											<label for="ketinggian" class="col-form-label">Ketinggian Benda</label>
										</div>
										<div class="col-md-6">
											<input type="number" id="ketinggian" class="form-control" aria-describedby="ketinggianHelpInline">
										</div>
										<div class="col-md-auto">
											<span id="ketinggianHelpInline" class="form-text">
												dalam satuan meter (m)
											</span>
										</div>
									</div>
								</div>

								<button type="button" id="submitEnergiPotensial" class="btn btn-primary">Hitung</button>
							</form>
						</div>
					</div>
					<!-- End Card Form Rumus -->

					<!-- Card Hasil -->
					<div class="card mt-3">
						<div class="card-header">Hasil Perhitungan Energi Potensial</div>
						<div class="card-body">
							<h5 class="card-title" id="hasilEnergiPotensial"></h5>
						</div>
					</div>
					<!-- End Card Hasil -->
                </div>
            </div>
        </div>

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./js/script.js"></script>
		<!-- sidebar -->
		<script src="./js/sidebar.js"></script>
    </body>
</html>