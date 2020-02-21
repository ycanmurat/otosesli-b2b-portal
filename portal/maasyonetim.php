<?include("header.php");?>

<div class="container-fluid fatura-edilen">
	<div class="row">
		<div class="col-md-4"><h4 class="pagetitle ml-3 mb-0 mt-4">MAAŞ YÖNETİM RAPORU</h4></div>
		<div class="col-md-8">
			<ul class="nav justify-content-end mr-3 nav-tabs list-style-type mt-4" id="myTab" role="tablist">
				<li class="nav-item">
					<form>
						<select class="custom-select w-auto db-spy">
							<option selected="">Şirket Seçiniz..</option>
							<option>OTOSESLİ 2018</option>
							<option>KODAKIL 2018</option>
						</select>
						<input class="form-control date-picker" id="from" placeholder="Tarih Seçiniz" name="fdate">
						<input class="form-control date-picker" id="to" placeholder="Tarih Seçiniz" name="ldate">
						<button class="date-picker-btn"><i class="fas fa-search"></i></button>
					</form>
				</li>
			</ul>
		</div>
		<div class="col-md-12 p-4 shadow">
			<div class="scroll-responsive">
				<table class="table siparis-tutar-table hesap-yaslandirma-table maas-yonetim">
					<thead>
						<tr class="final-table-head">
							<th scope="col">İsim Soyisim</th>
							<th scope="col">Birim</th>
							<th scope="col">Ünvan</th>
							<th scope="col">Maaş</th>
							<th scope="col">Mesai</th>
							<th scope="col">İzin</th>
							<th scope="col">İkramiye</th>
							<th scope="col">Prim</th>
							<th scope="col">Kar Payı</th>
							<th scope="col">Kesinti</th>
							<th scope="col">Avans</th>
							<th scope="col">Bakiye</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row"><p>Kaan SÖNMEZ</p></td>
							<td><p>Depo</p></td>
							<td><p>Depo Müdürü</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>-2,54 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>2990,01 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>-22,55 TL</p></td>
						</tr>
						<tr>
							<td scope="row"><p>Şükrü ÇÜRÜKOĞLU</p></td>
							<td><p>Muhasebe</p></td>
							<td><p>Dış Ticaret Müdürü</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>-2,54 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>2990,01 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>-22,55 TL</p></td>
						</tr>
						<tr>
							<td scope="row"><p>Kaan SÖNMEZ</p></td>
							<td><p>Depo</p></td>
							<td><p>Depo Müdürü</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>-2,54 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>2990,01 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>-22,55 TL</p></td>
						</tr>
						<tr>
							<td scope="row"><p>Kaan SÖNMEZ</p></td>
							<td><p>Depo</p></td>
							<td><p>Depo Müdürü</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>-2,54 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>227,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>8,12990,01 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>-9,222,55 TL</p></td>
						</tr>
						<tr>
							<td scope="row"><p>Şükrü ÇÜRÜKOĞLU</p></td>
							<td><p>Muhasebe</p></td>
							<td><p>Dış Ticaret Müdürü</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>-2,54 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>2990,01 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>-22,55 TL</p></td>
						</tr>
						<tr>
							<td scope="row"><p>Kaan SÖNMEZ</p></td>
							<td><p>Depo</p></td>
							<td><p>Depo Müdürü</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>-2,54 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>2990,01 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>-22,55 TL</p></td>
						</tr>
						<tr>
							<td scope="row"><p>Şükrü ÇÜRÜKOĞLU</p></td>
							<td><p>Muhasebe</p></td>
							<td><p>Dış Ticaret Müdürü</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>-2,54 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>2990,01 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>-22,55 TL</p></td>
						</tr>
						<tr>
							<td scope="row"><p>Kaan SÖNMEZ</p></td>
							<td><p>Depo</p></td>
							<td><p>Depo Müdürü</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>-2,54 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>2990,01 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>-22,55 TL</p></td>
						</tr>
						<tr>
							<td scope="row"><p>Şükrü ÇÜRÜKOĞLU</p></td>
							<td><p>Muhasebe</p></td>
							<td><p>Dış Ticaret Müdürü</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>-2,54 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="rising"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>990,00 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>2990,01 TL</p></td>
							<td  data-toggle="modal" data-target="#exampleModal" class="down"><p>-22,55 TL</p></td>
						</tr>
						<tr class="toplam">
							<td scope="row"></td>
							<td></td>
							<td><p>TOPLAM :</p></td>
							<td class="rising"><p>-2,54 TL</p></td>
							<td class="rising"><p>990,00 TL</p></td>
							<td class="rising"><p>990,00 TL</p></td>
							<td class="rising"><p>990,00 TL</p></td>
							<td class="rising"><p>990,00 TL</p></td>
							<td class="rising"><p>990,00 TL</p></td>
							<td class="down"><p>990,00 TL</p></td>
							<td class="down"><p>2,990,01 TL</p></td>
							<td class="down"><p>-33,222,55 TL</p></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="order-plan-footer mt-2 mb-2">
				<button class="Save-pdf Save-excel"><i class="far fa-file-excel"></i> Excel'e Kaydet</button>
			</div>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="print-pos-makbuz modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">AVANS</h5>

				<button class="print-btn" onclick="printPage()"><i class="fas fa-print"></i> Yazdır</button>
				<button class="Save-pdf"><i class="fas fa-file-pdf"></i> PDF Kaydet</button>

				<button type="button" class="close exit-button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div id="content" class="modal-body inv-modal">
				<div class="row">
					<div class="col-md-12">
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th><p>Cari Kodu</p></th>
									<th><p>Hesap Adı</p></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><p><b>335-03-002</b></p></td>
									<td><p><b>HAKAN SAL AVANS</b></p></td>
								</tr>
							</tbody>
						</table>
						<table class="table fatura-iskonto">
							<thead>
								<tr>
									<th scope="col">Tarih</th>
									<th scope="col">Fiş No</th>
									<th scope="col">Açıklama</th>
									<th scope="col">Borç Tutarı</th>
									<th scope="col">Alacak Tutarı</th>
									<th scope="col">Bakiye</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">29.03.2018</th>
									<td>00000000000003541</td>
									<td>LOREM İPSUM DOLOR SİT AMET MODEUS FİGRAN TES UN DE COLOR FİLL İS AUTO.</td>
									<td>0,01 TL</td>
									<td>0,00 TL</td>
									<td>21,021,52 TL</td>
								</tr>
								<tr>
									<th scope="row">29.03.2018</th>
									<td>00000000000003541</td>
									<td>LOREM İPSUM DOLOR SİT AMET MODEUS FİGRAN TES UN DE COLOR FİLL İS AUTO.</td>
									<td>0,01 TL</td>
									<td>0,00 TL</td>
									<td>21,021,52 TL</td>
								</tr>
								<tr>
									<th scope="row">29.03.2018</th>
									<td>00000000000003541</td>
									<td>LOREM İPSUM DOLOR SİT AMET MODEUS FİGRAN TES UN DE COLOR FİLL İS AUTO.</td>
									<td>0,01 TL</td>
									<td>0,00 TL</td>
									<td>21,021,52 TL</td>
								</tr>
								<tr>
									<th scope="row">29.03.2018</th>
									<td>00000000000003541</td>
									<td>LOREM İPSUM DOLOR SİT AMET MODEUS FİGRAN TES UN DE COLOR FİLL İS AUTO.</td>
									<td>0,01 TL</td>
									<td>0,00 TL</td>
									<td>21,021,52 TL</td>
								</tr>
								<tr>
									<th scope="row">29.03.2018</th>
									<td>00000000000003541</td>
									<td>LOREM İPSUM DOLOR SİT AMET MODEUS FİGRAN TES UN DE COLOR FİLL İS AUTO.</td>
									<td>0,01 TL</td>
									<td>0,00 TL</td>
									<td>21,021,52 TL</td>
								</tr>
								<tr class="toplam">
									<th scope="row"></th>
									<td></td>
									<td>GENEL TOPLAM</td>
									<td>0,01 TL</td>
									<td>0,00 TL</td>
									<td>21,021,52 TL</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?include("footer.php");?>