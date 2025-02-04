<div class="row">
    <div class="col-12">
      <div class="card">
        
        <div class="card-header border-bottom pb-2">
            <h4 class="card-title">Metode Pengadaan</h4>
        </div>

        <div class="card-content">
          <div class="card-body">
              <?php $curval = $prep['ptp_tender_method']; ?>
              <div class="row form-group" id="metode_pengadaan_cont">
                <label class="col-sm-2 control-label text-right">Metode Pengadaan</label>
                <div class="col-sm-6">
                <select disabled class="form-control" id="metode_pengadaan_inp" name="metode_pengadaan_inp" value="<?php echo $curval ?>">
                  <option value=""><?php echo lang('choose') ?></option>
                  <?php foreach ($metode as $key => $value) { 
                    $selected = ($curval == $key) ? "selected" : "";
                    ?>
                    <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <?php $curval = $prep['adm_bid_committee_name'];
              if(!empty($curval)){
              ?>
              <div class="row form-group" id="panitia_pelelangan_cont">
                <label class="col-sm-2 control-label text-right">Panitia Pelelangan</label>
                <div class="col-sm-4">
                  <div class="input-group"> 
                  <input disabled readonly type="text" class="form-control" id="panitia_pelelangan_inp" name="panitia_pelelangan_inp" value="<?php echo $curval ?>">
                </div>
              </div>
            </div>

            <?php } ?>

            <?php $curval = $prep['ptp_submission_method']; ?>
            <div class="row form-group" id="sistem_sampul_cont">
              <label class="col-sm-2 control-label text-right">Sistem Sampul</label>
              <div class="col-sm-2">
              <?php foreach ($sampul as $key => $value) { 
                if($curval == $key) {
                ?>
                <p class="form-control-static"><?php echo $value ?></p>
                <?php } } ?>

              </div>
              <label class="col-sm-1 control-label text-right">E-Auction</label>
              <div class="col-sm-1">
                <div class="">
                  <?php echo (!empty($prep['ptp_eauction']) && $prep['ptp_eauction'] == 1) ? "Ya" : "Tidak"; ?>
                </div>
              </div>
              <label class="col-sm-2 control-label text-right pq_cont">Pra Kualifikasi</label>
              <div class="col-sm-1 pq_cont">
                <div class="">
                  <?php echo (!empty($prep['ptp_prequalify'])) ? "Ya" : "Tidak"; ?>
                </div>
              </div>
            </div>

            <?php $curval = $prep['evt_description']; ?>
            <div class="row form-group" id="template_evaluasi_cont">
              <label class="col-sm-2 control-label text-right">Template Evaluasi</label>
              <div class="col-sm-4">
              <div class="form-control-static"> 
                  <a target="_blank" href="<?php echo site_url('procurement/procurement_tools/lihat_template_evaluasi/'.$prep['evt_id']) ?>"><?php echo $curval ?></a>

                </div>
              </div>
            </div>


            <div class="row form-group" id="klasifikasi_peserta_cont">
              <label class="col-sm-2 control-label text-right">Klasifikasi Peserta</label>
              <div class="col-sm-4">
                <div class="">
                  <label>
                    <?php $curval = substr($prep['ptp_klasifikasi_peserta'], 0,1); ?>
                    <input disabled type="checkbox" id="klasifikasi_kecil_inp" <?php echo ($curval == 1) ? "checked" : "" ?> name="klasifikasi_kecil_inp" value="1"> Kecil
                  </label>
                  <label>
                    <?php $curval = substr($prep['ptp_klasifikasi_peserta'], 1,1); ?>
                    <input disabled type="checkbox" id="klasifikasi_menengah_inp" <?php echo ($curval == 1) ? "checked" : "" ?> name="klasifikasi_menengah_inp" value="1"> Menengah
                  </label>
                  <label>
                    <?php $curval = substr($prep['ptp_klasifikasi_peserta'], 2,1); ?>
                    <input disabled type="checkbox" id="klasifikasi_besar_inp" <?php echo ($curval == 1) ? "checked" : "" ?> name="klasifikasi_besar_inp" value="1"> Besar
                  </label>
                </div>
              </div>
            </div>

            <div class="row form-group" id="quo_type_peserta_cont">
              <label class="col-sm-2 control-label text-right">Tipe Penawaran</label>
              <div class="col-sm-4">
                <div class="">
                  <label>
                    <input type="checkbox" id="quo_type_a_inp" disabled checked name="quo_type_a_inp" value="1"> A
                  </label>
                  <label>
                    <?php $curval = substr($prep['ptp_quo_type'], 1,1); ?>
                    <input disabled type="checkbox" id="quo_type_b_inp" <?php echo ($curval == 1) ? "checked" : "" ?> name="quo_type_b_inp" value="1"> B
                  </label>  
                  <label>
                    <?php $curval = substr($prep['ptp_quo_type'], 2,1); ?>
                    <input disabled type="checkbox" id="quo_type_c_inp" <?php echo ($curval == 1) ? "checked" : "" ?> name="quo_type_c_inp" value="1"> C
                  </label>
                  
                </div>
              </br>
                <label>
                    A : Sesuai spek & jumlah
                  </label>
                </br>
                  <label>
                    B : Alternatif spek
                  </label>
                </br>
                  <label>
                    C : Spek & Jumlah beda
                  </label>
              </div>
            </div>

            <?php $curval = $prep['ptp_inquiry_notes']; ?>
            <div class="row form-group" id="keterangan_metode_cont">
              <label class="col-sm-2 control-label text-right">Keterangan Tambahan</label>
              <div class="col-sm-6">
                <textarea disabled class="form-control" name="keterangan_metode_inp" id="keterangan_metode_inp"><?php echo $curval ?></textarea>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
