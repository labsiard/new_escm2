<div class="row">
    <div class="col-12">        
        <div class="card">
            <div class="card-header border-bottom pb-2">
                <h4 class="card-title">Jadwal Pengadaan</h4>
            </div>  

            <div class="card-content">
				<div class="col-12">
					<div class="card">
						<div class="card-body col-md-12">
							<?php $is_tgl_pembukaan = (strtotime($prep['ptp_reg_opening_date']) > 0) ? date("Y-m-d H:i", strtotime($prep['ptp_reg_opening_date'])) : ""; ?>

							<div class="row form-group ">
								<label class="col-sm-2 text-right tgl_pembukaan">Tanggal Pembukaan Pendaftaran *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<input readonly  name="tgl_pembukaan_pendaftaran_inp" class="form-control tgl_pembukaan_pendaftaran_inp" required id="tgl_pembukaan_pendaftaran_inp" value="">
									</div>
								</div>
							</div>

							<div class="row form-group">
								<label class="col-sm-2 text-right">Periode Tender *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<select disabled class="form-control periode_tender" name="periode_tender" id="periode_tender">
											<option value="0">Pilih</option>
											<?php foreach ($periodes as $key => $value) { ?>
												<option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $value ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row form-group ">
								<label class="col-sm-2 text-right">Tanggal Penutupan Pendaftaran *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<input readonly  name="tgl_penutupan_pendaftaran_inp" id="tgl_penutupan_pendaftaran_inp" required class="form-control  tgl_penutupan_pendaftaran_inp" value="<?= $prep['ptp_reg_closing_date']; ?>">
									</div>
								</div>
								<label class="col-sm-2 text-right toogle_hide ">Negosiasi *</label>
								<div class="col-sm-4 toogle_hide ">
									<div class="input-group date">
										<input readonly  name="negosiasi" id="negosiasi" required class="form-control negosiasi" value="<?= $prep['ptp_quot_closing_date']; ?>">
									</div>
								</div>
							</div>

							<div class="row form-group toogle_hide ">
								<label class="col-sm-2 text-right">Tanggal Aanwijzing *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<input readonly  name="tgl_aanwijzing_inp" id="tgl_aanwijzing_inp" class="form-control tgl_aanwijzing_inp" required value="<?= $prep['ptp_prebid_date']; ?>">
									</div>
								</div>
								<label class="col-sm-2 text-right">USKEP *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<input readonly  name="uskep" id="uskep" required class="form-control uskep" value="<?= $prep['ptp_quot_closing_date']; ?>">
									</div>
								</div>
							</div>

							<div class="row form-group toogle_hide ">
								<label class="col-sm-2 text-right">Tanggal Mulai Kirim Penawaran *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<input readonly  name="tgl_mulai_penawaran_inp" id="tgl_mulai_penawaran_inp" class="form-control  tgl_mulai_penawaran_inp" required value="">
									</div>
								</div>

								<label class="col-sm-2 text-right">Pengumuman *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<input readonly  name="pengumuman" id="pengumuman" required class="form-control pengumuman" value="<?= $prep['ptp_quot_closing_date']; ?>">
									</div>
								</div>
							</div>

							<div class="row form-group toogle_hide ">
								<label class="col-sm-2 text-right">Tanggal Akhir Kirim Penawaran *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<input readonly  name="tgl_akhir_penawaran_inp" id="tgl_akhir_penawaran_inp" required class="form-control tgl_akhir_penawaran_inp" value="<?= $prep['ptp_quot_closing_date']; ?>">
									</div>
								</div>

								<label class="col-sm-2 text-right">Sanggahan *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<input readonly  name="sanggahan" id="sanggahan" required class="form-control sanggahan" value="<?= $prep['ptp_quot_closing_date']; ?>">
									</div>
								</div>
							</div>
							<div class="row form-group toogle_hide ">
								<label class="col-sm-2 text-right">Tanggal Pembukaan Dokumen Penawaran *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<input readonly  name="tgl_pembukaan_dok_penawaran_inp" required class="form-control tgl_pembukaan_dok_penawaran_inp" id="tgl_pembukaan_dok_penawaran_inp" value="<?= $prep['ptp_doc_open_date']; ?>">
									</div>
								</div>
								<label class="col-sm-2 text-right"> Penunjukan *</label>
								<div class="col-sm-4">
									<div class="input-group date">
										<input readonly  name="penunjukan" id="penunjukan" required class="form-control penunjukan" value="<?= $prep['ptp_quot_closing_date']; ?>">
									</div>
								</div>
							</div>
							<div class="row form-group">
								<label class="col-sm-2 text-right">Lokasi Aanwijzing</label>
								<div class="col-sm-4">
									<textarea readonly class="form-control" id="lokasi_aanwijzing_inp" name="lokasi_aanwijzing_inp"><?= $prep['ptp_prebid_location']; ?></textarea>
								</div>
								<?php $curval = (!empty($prep['ptp_aanwijzing_online'])) ? "checked" : ""; ?>
								<label class="col-sm-2 text-right">Aanwijzing Online</label>
								<div class="col-sm-4">
									<input readonly type="checkbox" name="aanwijzing_online_inp" <?php echo $curval ?> value="1">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>


<?php if($prep['ptp_submission_method'] == 2){ ?>

  <div class="row">
    <div class="col-12">        
        <div class="card">
            <div class="card-header border-bottom pb-2">
                <h4 class="card-title">Jadwal Pengadaan Tahap 2</h4>
            </div>  

            <div class="card-content">
                <div class="card-body col-md-12">
                    <div class="row form-group">
                    <?php $curval = (strtotime($prep['ptp_tgl_aanwijzing2']) > 0) ? date("d/m/Y H:i",strtotime($prep['ptp_tgl_aanwijzing2'])) : ""; ?>
                    <label class="col-sm-2 control-label">Tgl Aanwijzing Tahap 2</label>
                    <div class="col-sm-4">
                    <p class="form-control-static"><?php echo $curval ?></p>
                    </div>

                    <?php $curval = (strtotime($prep['ptp_tgl_aanwijzing2']) > 0) ? date("d/m/Y H:i",strtotime($prep['ptp_tgl_aanwijzing2'])) : ""; ?>
                    <label class="col-sm-2 control-label">Tanggal Mulai Kirim Penawaran Tahap 2</label>
                    <div class="col-sm-4">
                    <p class="form-control-static"><?php echo $curval ?></p>
                    </div>
                    </div>

                    <div class="row form-group">
                    <?php $curval = (empty($prep['ptp_lokasi_aanwijzing2'])) ? "" : $prep['ptp_lokasi_aanwijzing2'] ; ?>
                    <label class="col-sm-2 control-label">Lokasi Aanwijzing Tahap 2</label>
                    <div class="col-sm-4">
                    <p class="form-control-static"><?php echo $curval ?></p>
                    </div>
                    <?php $curval = (strtotime($prep['ptp_bid_opening2']) > 0) ? date("d/m/Y H:i",strtotime($prep['ptp_bid_closing2'])) : ""; ?>
                    <label class="col-sm-2 control-label">Tanggal Akhir Kirim Penawaran Tahap 2</label>
                    <div class="col-sm-4">
                    <p class="form-control-static"><?php echo $curval ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>


<script type="text/javascript">
	<?php
	$data_js = json_encode($prep);
	echo "let data = " . $data_js . ";\n";
	?>
    function dateFromDb(date) {
        return moment(new Date(date)).format('YYYY-MM-DD hh:mm')
    }
        
    const tglOpenReg = dateFromDb(data["ptp_reg_opening_date"] ? data["ptp_reg_opening_date"] : new Date())
    $("#tgl_pembukaan_pendaftaran_inp").val(tglOpenReg);
    $("#periode_tender").val(data["tender_priod"] ? data["tender_priod"] : 0)
    $("#tgl_penutupan_pendaftaran_inp").val(dateFromDb(data["ptp_reg_closing_date"]  ? data["ptp_reg_closing_date"] : new Date()));
    $("#tgl_mulai_penawaran_inp").val(dateFromDb(data["ptp_quot_opening_date"]  ? data["ptp_quot_opening_date"] : new Date()));
    $("#tgl_akhir_penawaran_inp").val(dateFromDb(data["ptp_quot_closing_date"]  ? data["ptp_quot_closing_date"] : new Date()));
    $("#tgl_aanwijzing_inp").val(dateFromDb(data["ptp_prebid_date"]  ? data["ptp_prebid_date"] : new Date()));
    $("#tgl_pembukaan_dok_penawaran_inp").val(dateFromDb(data["ptp_doc_open_date"]  ? data["ptp_doc_open_date"] : new Date()));
    $("#negosiasi").val( dateFromDb( data["ptp_negosiation_date"] ? data["ptp_negosiation_date"] : new Date() ) );
    $("#uskep").val(dateFromDb(data["ptp_uskep_date"]  ? data["ptp_uskep_date"] : new Date()));
    $("#pengumuman").val(dateFromDb(data["ptp_announcement_date"]  ? data["ptp_announcement_date"] : new Date()));
    $("#sanggahan").val(dateFromDb(data["ptp_disclaimer_date"]  ? data["ptp_disclaimer_date"] : new Date()));
    $("#penunjukan").val(dateFromDb(data["ptp_appointment_date"]  ? data["ptp_appointment_date"] : new Date()));
</script>