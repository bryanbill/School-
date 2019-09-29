<body class="">
  <div class="wrapper ">
    
<div class="sidebar" data-color="grey">
      
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
            SC
        </a>
        <a href="<?php echo URP.'/index';?>" class="simple-text logo-normal">
          <? echo NAME;?>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="is-active">
            <a href="<?php echo URP.'/index';?>">
              <i class="now-ui-icons education_atom"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?php echo URP;?>/profile<?php 
            $role = $_SESSION['role'];
            echo $role;
            ?>">
              <i class="now-ui-icons users_single-02"></i>
              <p>Profile</p>
            </a>
          </li>
          <li>
            <a href="<?php echo URP;?>/Reports">
              <i class="now-ui-icons education_paper"></i>
              <p>Reports</p>
            </a>
          </li>
         
          <?php
          
          if($role == 'Teacher'){
              ?>
          
          <li>
            <a href="<?php echo URP;?>/management">
              <i class="now-ui-icons ui-1_settings-gear-63"></i>
              <p>Management</p>
            </a>
          </li>
          <?php
          }
          else{
              
          }
          if ($role == 'DoS'){
         ?>
       
          <li>
            <a href="<?php echo URP;?>/systemTools">
              <i class="now-ui-icons ui-2_settings-90"></i>
              <p>System Tools</p>
            </a>
          </li>
          <?php
          }
          else{
              
          }
          ?>
          <li>
            <a href="<?php echo URP;?>/backupReset">
              <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
              <p>Backup and Reset</p>
            </a>
          </li>
          <li>
            <a href="<?php echo URP;?>/help">
              <i class="now-ui-icons travel_info"></i>
              <p>Help</p>
            </a>
          </li>
          <li>
            <a href="<?php echo OFFICE;?>">
              <i class="now-ui-icons text_caps-small"></i>
              <p class="text_align-center">Office</p>
            </a>
          </li>
          <li>
            <a href="<?php echo LOGOUT;?>">
              <i class="now-ui-icons media-1_button-power"></i>
              <p class="text_align-center">Logout</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>