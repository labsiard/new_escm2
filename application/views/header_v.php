<nav class="navbar navbar-expand-lg navbar-light header-navbar navbar-fixed hidden-print">
   <div class="container-fluid navbar-wrapper">
      <div class="navbar-header d-flex">
            <div class="navbar-toggle menu-toggle d-xl-none d-block float-left align-items-center justify-content-center" data-toggle="collapse"><i class="ft-menu font-medium-3"></i></div>
            <ul class="navbar-nav">
               <li class="nav-item mr-2 d-none d-lg-block"><a class="nav-link apptogglefullscreen" id="navbar-fullscreen" href="javascript:;"><i class="ft-maximize font-medium-3"></i></a></li>                    
            </ul>
      </div>
      
      <div class="navbar-container">
         <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
            <ul class="navbar-nav mt-2">
               <!--- ============ New Remider Document Vendor ================ -->
               <?php if($this->data['userdata']['pos_id'] == "27") { ?>
               <li class="dropdown">
                  <a class="count-info" href="<?php echo site_url("laporan/monitor_dokumen_vendor");?>/expired">
                     <i data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Info Document Expired Vendor"
                        class="fa fa-clock-o"></i><?php if(count($docExVends) > 0 ) { echo $this->session->userdata('totalDocExVend'); } ?></span>
                  </a>
               </li>
               <?php } ?>

               <li class="i18n-dropdown dropdown nav-item mr-2">
                  <a class="nav-link d-flex align-items-center dropdown-toggle dropdown-language" id="dropdown-flag" href="javascript:;" data-toggle="dropdown">
                     <?php
                        
                        $siteLang = $this->session->userdata('site_lang');
                        if($siteLang){
                           if($siteLang === 'indonesian'){ ?>
                              <img class="langimg selected-flag" src="<?php echo base_url('assets')?>/app-assets/img/flags/id.png" alt="flag">
                              <span class="selected-language d-md-flex d-none">Indonesian</span>
                           <?php
                           }else if($siteLang === 'english'){ ?>
                              <img class="langimg selected-flag" src="<?php echo base_url('assets')?>/app-assets/img/flags/us.png" alt="flag">
                              <span class="selected-language d-md-flex d-none">English</span>
                           <?php                              
                           }else{ ?>
                              <span class="selected-language d-md-flex d-none">Unknown</span>
                           <?php
                           }
                        }else{
                        ?>
                           <img class="langimg selected-flag" src="<?php echo base_url('assets')?>/app-assets/img/flags/id.png" alt="flag">
                           <span class="selected-language d-md-flex d-none">Indonesian</span>
                        <?php
                        }
                     ?>
                     
                  </a>
                     <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="dropdown-flag">
                        <a class="dropdown-item" href="<?php echo site_url('Language/setLang?lang=english') ?>" >
                           <img class="langimg mr-2" src="<?php echo base_url('assets')?>/app-assets/img/flags/us.png" alt="flag">
                           <span class="font-small-3">English</span>
                        </a>
                        <a class="dropdown-item" href="<?php echo site_url('Language/setLang?lang=indonesian') ?>" >
                           <img class="langimg mr-2" src="<?php echo base_url('assets')?>/app-assets/img/flags/id.png" alt="flag">
                           <span class="font-small-3">Indonesian</span>
                        </a>
                     </div>
               </li>    
               
               <li class="dropdown nav-item mr-2">
                  <a class="nav-link count-info dropdown-toggle user-dropdown d-flex align-items-end" id="dropdownBasic2" href="javascript:;" data-toggle="dropdown">
                     <i class="ft-mail"></i><?php if($tmessages == 1) { echo $this->session->userdata('totalmessages'); } ?></span>
                  </a>
                  <div class="dropdown-menu text-left dropdown-menu-right m-0 pb-0" aria-labelledby="dropdownBasic2">
                     <?php if($tmessages == 1) {?>
                        <?php foreach ($messages as $jcrr) { ?>
                           <a class="dropdown-item" href="<?php echo site_url('log/readchat/'.$jcrr['id']) ?>">
                              <div class="d-flex align-items-center">
                                 <i class="ft-message-circle"></i>&nbsp;&nbsp;<?php echo $jcrr['rfq_number'] ?> <br>
                                 &nbsp;&nbsp;&nbsp;&nbsp; <small><?php echo substr($jcrr['pesan'],0,30)?> ...</small>
                              </div>
                           </a>
                        <?php } ?>
                     <?php } else { ?>
                        <a class="dropdown-item">
                           <div class="d-flex align-items-center">
                           <?php echo $this->lang->line('no_data'); ?>
                           </div>
                        </a>
                     <?php } ?>
                  </div>
               </li>  

               <!--- ============ New notif ================ -->
               <li class="dropdown nav-item mr-1"><a class="nav-link dropdown-toggle dropdown-notification" id="dropdownBasic1" href="javascript:;" data-toggle="dropdown"><i class="ft-bell font-medium-1"></i><span class="notification badge badge-pill badge-danger"><?php echo count($jobs)?></span></a>
                  <ul class="notification-dropdown dropdown-menu dropdown-menu-media dropdown-menu-right overflow-hidden">
                     <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex justify-content-between white bg-info">
                              <div class="d-flex"><i class="ft-bell font-medium-3 d-flex align-items-center mr-2"></i><span class="noti-title"><?php echo count($jobs)?> <?php echo $this->lang->line('notification'); ?></span></div>
                        </div>
                     </li>                        
                     <?php if(count($jobs) > 0 ) { ?>    
                     <li class="scrollable-container">    
                        <?php foreach ($jobsrow as $j) { $u = $j['url'].$j['id']; ?>     
                           <a class="d-flex justify-content-between" href="<?php echo site_url('log/change_role/'.$j['pos_id'].'/'.str_replace("/", "-", $u)) ?>">                                                        
                              <div class="media d-flex align-items-center">
                                 <div class="media-left">
                                    <div class="mr-2"><i class="<?php echo $j['icon']; ?> font-medium-3"></i></div>
                                 </div>
                                 <div class="media-body">
                                    <?php echo $j['number']?> <br>
                                    <small><?php echo substr($j['activity'],0,30)?></small>
                                 </div>
                              </div>
                           </a>
                           <?php } ?> 
                     </li>

                     <?php if(count($jobs) > 5) { ?>                                    
                     <li class="dropdown-menu-footer">
                        <a href="<?php echo site_url('/log/alljob/')?>">                           
                           <div class="noti-footer text-center cursor-pointer info border-top text-bold-400 py-1"><?php echo $this->lang->line('read_all_notifications'); ?> (<?php echo count($jobs)-5?>)</div>
                        </a>
                     </li>
                     <?php } ?>

                     <?php } else { ?>
                        <div class="d-flex justify-content-between cursor-pointer read-notification">
                           <div class="media d-flex align-items-center">
                              <div class="media-body">
                                 <h6 class="m-0"><small class="grey lighten-1 font-italic text-center"><?php echo     $this->lang->line('no_data'); ?></small></h6>
                              </div>
                           </div>
                        </div>
                     <?php } ?>
                  </ul>
               </li>                           

               <li class="dropdown nav-item mr-1">
                  <a class="nav-link count-info dropdown-toggle user-dropdown d-flex align-items-end" id="dropdownBasic2" href="javascript:;" data-toggle="dropdown">
                     <div class="user d-md-flex d-none"><span class="text-right"><i class="ft-users mr-1"></i> <?php echo     $this->lang->line('gt'); ?> </span></div>
                  </a>
                  <div class="dropdown-menu text-left dropdown-menu-right m-0 pb-0" aria-labelledby="dropdownBasic2">
                     <?php foreach ($position as $key => $value) { ?>
                        <a class="dropdown-item" href="<?php echo site_url('log/change_role/'.$value['pos_id']) ?>">
                           <div class="d-flex align-items-center"><i class="ft-chevron-right mr-1"></i><span><?php echo $value['pos_name'] ?></span></div>
                        </a>
                     <?php } ?>
                  </div>
               </li>                  

               <li class="nav-item mr-1">
                  <a class="nav-link" href="<?php echo site_url('log/change_password') ?>">
                     <div class="user d-md-flex d-none"><span class="text-right"><i class="ft-lock mr-1"></i><?php echo     $this->lang->line('cp'); ?></span></div>
                  </a>
               </li>

               <li class="nav-item mr-1">
                  <a class="nav-link" href="<?php echo site_url('log/logout') ?>" id="logout">
                     <div class="user d-md-flex d-none"><span class="text-right"><i class="ft-log-out mr-1"></i><?php echo     $this->lang->line('lg'); ?></span></div>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</nav>

<script type="text/javascript">
   $(function() {
      $('a#logout').click(function() {
         if (confirm('Apakah anda yakin ingin logout?')) {
            return true;
         }

         return false;
      });
   });
</script>