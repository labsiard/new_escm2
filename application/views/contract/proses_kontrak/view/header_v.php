<div class="row">
  <div class="col-12">
    <div class="card">

      <div class="card-header border-bottom pb-2">
        <h4 class="card-title">Header</h4>
      </div>

      <div class="card-content">
        <div class="card-body">
            <?php $curval = (isset($kontrak['ptm_number'])) ? $kontrak['ptm_number'] : "AUTO NUMBER"; ?>

            <div class="row form-group">
              <label class="col-sm-2 control-label text-right">Nomor Pengadaan</label>
              <div class="col-sm-10">
              <p class="form-control-static">
                <a href="<?php echo site_url('procurement/procurement_tools/monitor_pengadaan/lihat/'.$curval) ?>" target="_blank">
                  <?php echo $curval ?>
                </a></p>
              </div>
            </div>

            <?php $curval = (isset($kontrak['contract_number'])) ? $kontrak['contract_number'] : "AUTO NUMBER"; ?>

            <div class="row form-group">
              <label class="col-sm-2 control-label text-right">Nomor Kontrak</label>
              <div class="col-sm-10">
              <p class="form-control-static">
                  <?php echo $curval ?>
                </p>
              </div>
            </div>

            <?php $curval = (isset($tender['ptm_requester_name'])) ? $tender['ptm_requester_name'] : ""; ?>
            <?php $curval2 = (isset($tender['ptm_requester_pos_name'])) ? $tender['ptm_requester_pos_name'] : ""; ?>
            <div class="row form-group">
              <label class="col-sm-2 control-label text-right">User</label>
              <div class="col-sm-10">
              <p class="form-control-static"><?php echo $curval ?> - <?php echo $curval2 ?></p>
            </div>
            </div>


            <?php $curval = (isset($tender['ptm_buyer'])) ? $tender['ptm_buyer'] : ""; ?>
            <?php $curval2 = (isset($tender['ptm_buyer_pos_name'])) ? $tender['ptm_buyer_pos_name'] : ""; ?>
            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Pelaksana Pengadaan</label>
            <div class="col-sm-10">
            <p class="form-control-static"><?php echo $curval ?> - <?php echo $curval2 ?></p>
            </div>
            </div>

            <?php $curval = (isset($kontrak['vendor_name'])) ? $kontrak['vendor_name'] : ""; ?>

            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Vendor</label>
            <div class="col-sm-10">
            <p class="form-control-static"><?php echo $curval ?></p>
            </div>
            </div>

            <?php $curval = (isset($kontrak['currency']) && !empty($kontrak['currency'])) ? $kontrak['currency'] : $tender['ptm_currency']; ?>

            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Mata Uang Kontrak</label>
            <div class="col-sm-10">
            <p class="form-control-static"><?php echo $curval ?></p>
            </div>
            </div>

            <?php $curval = (isset($kontrak['contract_type'])) ? $kontrak['contract_type'] : set_value("lokasi_kebutuhan_inp"); ?>

            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Tipe Kontrak</label>
            <div class="col-sm-10">
            <p class="form-control-static"><?php echo $curval ?></p>
            </div> 
            </div>

            <?php $curval = (isset($hps)) ? inttomoney($hps) : 0; ?>

            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Nilai HPS </label>
            <div class="col-sm-10">
            <p class="form-control-static"><?php echo $curval ?></p>
            </div>
            </div>

            <?php $curval = (isset($kontrak['contract_amount'])) ? inttomoney($kontrak['contract_amount']) : 0; ?>

            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Nilai Kontrak</label>
            <div class="col-sm-10">
            <p class="form-control-static"><?php echo $curval ?></p>
            </div>
            </div>


            <?php $curval = (isset($kontrak['subject_work'])) ? $kontrak['subject_work'] : set_value("subject_work_inp"); ?>

            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Judul Pekerjaan</label>
            <div class="col-sm-8">
            <p class="form-control-static"><?php echo $curval ?></p>
            </div>
            </div>

            <?php $curval = (isset($kontrak['scope_work'])) ? $kontrak['scope_work'] : set_value("scope_work_inp"); ?>

            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Deskripsi Pekerjaan</label>
            <div class="col-sm-8">
            <p class="form-control-static"><?php echo $curval ?></p>
            </div>
            </div>

            <?php $curval = (isset($kontrak['contract_type_2'])) ? $kontrak["contract_type_2"] : set_value("jenis_kontrak_inp"); ?>
            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Jenis Kontrak</label>
            <div class="col-sm-3">
            <select class="form-control" disabled name="jenis_kontrak_inp" value="<?php echo $curval ?>">
            <option value="">Pilih Jenis Kontrak</option>
            <?php foreach($contract_type as $key => $val){
            $selected = ($val == $curval) ? "selected" : ""; 
            ?>
            <option <?php echo $selected ?> value="<?php echo $val ?>"><?php echo $val ?></option>
            <?php } ?>
            </select>
            </div>
            </div>

            <?php $curval = (isset($kontrak['ctr_item_type'])) ? $kontrak["ctr_item_type"] : set_value("item_kontrak_inp"); ?>
            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Jenis Item</label>
            <div class="col-sm-3">
            <select class="form-control" disabled name="item_kontrak_inp" value="<?php echo $curval ?>">
            <option value="">Pilih Item Kontrak</option>
            <?php foreach($contract_item as $key => $val){
            $selected = ($val == $curval) ? "selected" : ""; 
            ?>
            <option <?php echo $selected ?> value="<?php echo $val ?>"><?php echo $val ?></option>
            <?php } ?>
            </select>
            </div>
            </div>

            <?php $curval = (isset($kontrak['start_date'])) ?  $kontrak["start_date"] : set_value("tgl_mulai_inp"); ?>
            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Tanggal Mulai Kontrak</label>
            <div class="col-sm-4">
            <p class="form-control-static"><?php echo date("d/m/Y",strtotime($curval)) ?></p>
            </div>
            </div>

            <?php $curval = (isset($kontrak['end_date'])) ?  $kontrak["end_date"] : set_value("tgl_akhir_inp"); ?>
            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Tanggal Berakhir Kontrak</label>
            <div class="col-sm-4">
                <p class="form-control-static"><?php echo date("d/m/Y",strtotime($curval)) ?></p>
            </div>
            </div>

            <?php if ($activity_id > 2030): ?>

            <?php $curval = (isset($kontrak['sign_date'])) ? $kontrak["sign_date"] : set_value("tgl_sign_inp"); ?>
            <div class="row form-group">
            <label class="col-sm-2 control-label text-right">Tanggal Penandatanganan</label>
            <div class="col-sm-4">
                <p class="form-control-static"><?php echo date("d/m/Y",strtotime($curval)) ?></p>
            </div>
            </div>

            <?php endif ?>
        </div>
      </div>

    </div>
  </div>
</div>
