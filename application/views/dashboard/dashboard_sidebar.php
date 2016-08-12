<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <!-- <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a> -->
              <center>
              <a class="site_title" href="<?php echo base_url().'dashboard';?>">
              <img class="coat_of_arms_sidebar" style="padding:0;max-width: 90%;max-height:70%;height: auto;" src="<?php echo base_url();?>assets/img/coat_of_arms_2016.png" class="img-responsive " alt="Responsive image" id="" ></br>HCMP</br><span class="small_header_font">Health Commodities Management Platform</span>
              </a>
              </center>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>HCMP Analytics</h3> -->
                <ul class="nav side-menu">
                  <li class="active"><a><i class="fa fa-area-chart"></i> Programmatic <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: block;">
                   <?php foreach ($commodity_divisions as $divisions => $value): ?>
                      <li><a href="<?php echo base_url().'dashboard/divisions/'.$value['id']; ?>"><?php echo $value['division_name']; ?></a>
                      </li>
                    <?php endforeach; ?>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url().'national/reports';?>"><i class="fa fa-bar-chart"></i> Reports</a></li>
                  <li><a href="<?php echo base_url().'dashboard/report_problems';?>"><i class="fa fa-ambulance"></i> Report Problem</a></li>
                  <!-- 
                  <li><a><i class="fa fa-bar-chart"></i> Subcounty <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Subcounty #1</a>
                      </li>
                      <li><a href="index2.html">Subcounty #2</a>
                      </li>
                      <li><a href="index3.html">Subcounty #3</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-line-chart"></i> Facilities</span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Facility #1</a>
                      </li>
                      <li><a href="index2.html">Facility #2</a>
                      </li>
                      <li><a href="index3.html">Facility #3</a>
                      </li>
                    </ul>
                  </li>
                   -->
                </ul>
              </div>
              <div class="menu_section">
                <h3>System Access</h3>
                <ul class="nav side-menu">
                  <li><a><i class="glyphicon glyphicon-user"></i> Login <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="<?php echo base_url().'home'; ?>"> Essential Commodities </a></li>
                    <li><a href="http://41.89.6.223/HCMP/user"> RTK</a></li>
                    <li><a href="http://41.89.6.209/sms_system"> SMS System</a></li>
                    <li><a href="http://41.89.6.209/MNCH/analytics/CHV2"> MNCH</a></li>
                    </ul>
                  </li>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <div class="sidebar-footer hidden-small">
              <!-- 
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
               -->
            </div>

            <!-- /menu footer buttons -->
          </div>
        </div>
