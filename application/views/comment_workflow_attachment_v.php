<div class="row">
  <div class="col-12">
    <div class="card">
      
      <div class="card-header border-bottom pb-2">
          <h4 class="card-title">Daftar <?php echo lang('comment') ?></h4>
      </div>

      <div class="card-content">
        <div class="card-body">
            <table class="table comment">
                <thead>
                  <tr>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th><?php echo lang('user') ?></th>
                    <th><?php echo lang('position') ?></th>
                    <th><?php echo lang('activity') ?></th>
                    <th><?php echo lang('response') ?></th>
                    <th><?php echo lang('comment') ?></th>
                    <th><?php echo lang('attachment') ?></th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                if(isset($comment_list[$i]) && !empty($comment_list[$i])){ 

                  foreach ($comment_list[$i] as $kc => $vc) {
                    
                  $start_date = date(DEFAULT_FORMAT_DATETIME,strtotime($vc['comment_date']));
                  $end_date = (isset($vc['comment_end_date']) && !empty(strtotime($vc['comment_end_date']))) ? date(DEFAULT_FORMAT_DATETIME,strtotime($vc['comment_end_date'])) : "";
                  ?>
                  <tr>
                    <td><?php echo $start_date ?></td>
                    <td><?php echo $end_date  ?></td>
                    <td><?php echo $vc['comment_name'] ?></td>
                    <td><?php echo $vc['position'] ?></td>
                    <td><?php echo $vc['activity_name'] ?></td>
                    <td><?php echo $vc['response'] ?></td>
                    <td><?php echo $vc['comments'] ?></td>
                    <td><a href="<?php echo site_url("log/download_attachment/".$dir."/".$vc['attachment']) ?>" target="_blank"><?php echo $vc['attachment'] ?></a></td>
                  </tr>
                  <?php } } ?>
                  
                </tbody>                  
              </table>
          </div>
      </div>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      
      <div class="card-header border-bottom pb-2">
          <h4 class="card-title">Form <?php echo lang('comment') ?></h4>
      </div>

      <div class="card-content">
          <div class="card-body">
              <div class="row form-group">
              <?php if(isset($workflow_list) && !empty($workflow_list)){ ?>
              <label class="col-sm-1 control-label">Aksi *</label>
              <div class="col-sm-5">
                <select class="form-control select2" style="width:100%;" name="status_inp[<?php echo $i ?>]">
                  <?php foreach ($workflow_list as $kx => $vx) { ?>
                  <option value="<?php echo $kx ?>"><?php echo $vx ?></option>
                  <?php } ?>
                </select>
              </div>
              <?php } ?>

              <label class="col-sm-1 control-label">Lampiran</label>
              <div class="col-sm-5">
                <div class="input-group">
                  <span class="input-group-btn">
                    <button type="button" data-id="comment_attachment_inp_<?php echo $i ?>" data-folder="<?php echo $dir ?>" data-preview="comment_file_<?php echo $i ?>" class="btn btn-info upload">
                      <i class="fa fa-cloud-upload"></i> Upload
                    </button> 
                    <button type="button" data-url="#" class="btn btn-info preview_upload" id="comment_file_<?php echo $i ?>">
                      <i class="fa fa-share"></i> Preview
                    </button> 
                  </span> 
                  <input readonly type="text" class="form-control" id="comment_attachment_inp_<?php echo $i ?>" name="comment_attachment_inp[<?php echo $i ?>]" value="">
                  <span class="input-group-btn">
                    <button type="button" data-id="comment_attachment_inp_<?php echo $i ?>" data-folder="<?php echo $dir ?>" data-preview="comment_file_<?php echo $i ?>" class="btn btn-danger removefile">
                      <i class="fa fa-trash"></i> Delete
                    </button> 
                  </span> 
                </div>
                <div class="col-sm-0" style="font-size: 11px">
                <i>Max file 5 MB 
                <br>
                  Tipe file : doc, docx, xls, xlsx, ppt, pptx, pdf, jpg, jpeg, PNG, Zip, rar, tgz, 7zip, tar
                </i>
              </div>
              </div>
            </div>

            <?php $curval = set_value("comment_inp[$i]"); ?>
            <div class="row form-group">
              <label class="col-sm-1 control-label"><?php echo lang('comment') ?> *</label>
              <div class="col-sm-11">
                <textarea name="comment_inp[<?php echo $i ?>]" maxlength="1000" required class="form-control"><?php echo $curval ?></textarea>
              </div>
            </div>
          </div>
      </div>

    </div>
  </div>
</div>