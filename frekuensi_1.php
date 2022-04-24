<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Frekuensi 1 | Kelompok 2</title>
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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./e_potensial.php">Energi Potensial</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 active" href="./gaya.php">Gaya</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./massa_jenis.php">Massa Jenis</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./panjang_gelombang.php">Panjang Gelombang</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./percepatan.php">Percepatan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./frekuensi_1.php">Frekuensi 1</a>
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
						<div class="card-header">Rumus Frekuensi 1</div>
						<div class="card-body">
							<form>
								<div class="mb-3">
									<div class="row g-3 align-items-center">
										<div class="col-md-2">
											<label for="getaran" class="col-form-label">Jumlah Getaran</label>
										</div>
										<div class="col-md-6">
											<input type="number" id="getaran" class="form-control" aria-describedby="getaranHelpInline">
										</div>
										<div class="col-md-auto">
											<span id="getaranHelpInline" class="form-text">
												kali getaran getaran
											</span>
										</div>
									</div>
								</div>
								<div class="mb-3">
									<div class="row g-3 align-items-center">
										<div class="col-md-2">
											<label for="waktu" class="col-form-label">Waktu yang dibutuhkan untuk melakukan getaran</label>
										</div>
										<div class="col-md-6">
											<input type="number" id="waktu" class="form-control" aria-describedby="waktuHelpInline">
										</div>
										<div class="col-md-auto">
											<span id="waktuHelpInline" class="form-text">
												(s)
											</span>
										</div>
									</div>
								</div>
								<button type="button" id="submitFrekuensi" class="btn btn-primary">Hitung</button>
							</form>
						</div>
					</div>
					<!-- End Card Form Rumus -->
					<!-- Card Hasil -->
					<div class="card mt-3">
						<div class="card-header">Hasil Perhitungan Frekuensi 1</div>
						<div class="card-body">
							<h5 class="card-title" id="hasilFrekuensi"></h5>
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