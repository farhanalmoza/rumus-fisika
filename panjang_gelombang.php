<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Panjang Gelombang | Kelompok 2</title>
  </head>
  <body>
		<div class="container">	

			<!-- Card Form Rumus -->
			<div class="card mt-5">
				<div class="card-header">Rumus Panjang Gelombang</div>
				<div class="card-body">
					<form>
						<div class="mb-3">
							<div class="row g-3 align-items-center">
								<div class="col-md-3">
									<label for="frekuensi" class="col-form-label">Frekuensi Gelombang</label>
								</div>
								<div class="col-md-6">
									<input type="number" id="frekuensi" class="form-control" aria-describedby="frekuensiHelpInline">
								</div>
								<div class="col-md-auto">
									<span id="frekuensiHelpInline" class="form-text">
										(Hz)
									</span>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<div class="row g-3 align-items-center">
								<div class="col-md-3">
									<label for="cepatRambatGelombang" class="col-form-label">Cepat Rambat Gelombang</label>
								</div>
								<div class="col-md-6">
									<input type="number" id="cepatRambatGelombang" class="form-control" aria-describedby="cepatRambatGelombangHelpInline">
								</div>
								<div class="col-md-auto">
									<span id="cepatRambatGelombangHelpInline" class="form-text">
										(m/s)
									</span>
								</div>
							</div>
						</div>

						<button type="button" id="submitPanjangGelombang" class="btn btn-primary">Hitung</button>
					</form>
				</div>
			</div>
			<!-- End Card Form Rumus -->

			<!-- Card Hasil -->
			<div class="card mt-3">
				<div class="card-header">Hasil Perhitungan Panjang Gelombang</div>
				<div class="card-body">
					<h5 class="card-title" id="hasilPanjangGelombang"></h5>
				</div>
			</div>
			<!-- End Card Hasil -->

		</div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<!-- My Script -->
		<script src="./js/script.js"></script>
  </body>
</html>