<?php
   include_once 'open_flash_chart_object.php';
   $url=site_url('dashboard/priweekly/');
   $url1=site_url('system/application/');
   ?>
<div id="main-content" class="dashboard">
   <div class="page-title">
      <i class="icon-custom-left"></i>
      <h3><strong>Dashboard</strong></h3>
   </div>
<!--- ---------- Dashboard tab starts here --------------- --->
  <table>
	 <tr>
		<td>
	<?php $j=0; ?>
		<ul>
		 <div class="row m-t-20">
			<div class="row"  >
            <div class="col-md-4 col-sm-12"  >
              <div class="panel no-bd bd-3 panel-stat bg-blue" style="min-height:128px;" >
                <div class="panel-body bg-blue p-15">
                  <div class="row m-b-10">
					<div class="col-xs-12">
					   <a style="color: #fff;text-decoration: none;" href="TrackReport/all"><h4 style="margin-top:0;text-transform: uppercase;">Track</h4></a>
					  </div>
                     <div class="col-xs-12">
                      <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="2800" data-height="56" >
                      <div>
                        <small class="stat-title">Today Calls</small>
                        <h1 class="m-0 w-300"><span id="trackd"></span></h1>
                     </div>
                     <div>
                        <small class="stat-title">Week Calls</small>
                        <h1 class="m-0 w-300"><span id="trackw"></span></h1>
                        </div>
                      <div>
                        <small class="stat-title">Month Calls</small>
                        <h1 class="m-0 w-300"><span id="trackm"></span></h1>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="panel no-bd bd-3 panel-stat bg-red" style="min-height:128px;">
                <div class="panel-body bg-red p-15">
                <div class="row m-b-10">
						<div class="col-xs-12">
					    <a style="  color: #fff;text-decoration: none;" href="PBXReport/all/0"><h4 style="margin-top:0;text-transform: uppercase;">MCube X</h4></a>
					  </div>
                 <div class="col-xs-12">
                      <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="4100" data-height="56">
                      <div>
                        <small class="stat-title">Today Calls</small>
                        <h1 class="m-0 w-300"><span id="mcubexd"></span></h1>
                     </div>
                     <div>
                        <small class="stat-title">Week Calls</small>
                        <h1 class="m-0 w-300"><span id="mcubexw"></span></h1>
                        </div>
                      <div>
                        <small class="stat-title">Month Calls</small>
                        <h1 class="m-0 w-300"><span id="mcubexm"></span></h1>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="panel no-bd bd-3 panel-stat bg-green" style="min-height:128px;">
                <div class="panel-body bg-green p-15">
                 <div class="row m-b-10">
					 	<div class="col-xs-12">
					    <a style="  color: #fff;text-decoration: none;" href="IVRSReport/all"><h4 style="margin-top:0;text-transform: uppercase;">IVRS</h4></a>
					  </div>
                   <div class="col-xs-12">
                      <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3300" data-height="56">
                      <div>
                        <small class="stat-title">Today Calls</small>
                        <h1 class="m-0 w-300"><span id="ivrsd"></span></h1>
                     </div>
                     <div>
                        <small class="stat-title">Week Calls</small>
                        <h1 class="m-0 w-300"><span id="ivrsw"></span></h1>
                        </div>
                      <div>
                        <small class="stat-title">Month Calls</small>
                        <h1 class="m-0 w-300"><span id="ivrsm"></span></h1>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4 col-sm-12" >
              <div class="panel no-bd bd-3 panel-stat bg-dark" style="min-height:128px;">
                <div class="panel-body bg-dark p-15">
                 <div class="row m-b-10">
					 	<div class="col-xs-12">
					    <a style="  color: #fff;text-decoration: none;" href="ListLead/2"><h4 style="margin-top:0;text-transform: uppercase;">Leads</h4></a>
					  </div>
                      <div class="col-xs-12">
                      <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3600" data-height="56">
                      <div>
                        <small class="stat-title">Today Leads</small>
                        <h1 class="m-0 w-300"><span id="leadd"></span></h1>
                     </div>
                     <div>
                        <small class="stat-title">Week Leads</small>
                        <h1 class="m-0 w-300"><span id="leadw"></span></h1>
                        </div>
                      <div>
                        <small class="stat-title">Month Leads</small>
                        <h1 class="m-0 w-300"><span id="leadm"></span></h1>
                        </div>
                      </div>
                    </div> 
                  </div>
              </div>
            </div>
          </div>
             <div class="col-md-4 col-sm-12" >
              <div class="panel no-bd bd-3 panel-stat bg-blue" style="min-height:128px;">
                <div class="panel-body bg-blue p-15">
                  <div class="row m-b-10">
					<div class="col-xs-12">
					   <a style="  color: #fff;text-decoration: none;" href="ListSupTkt/0"> <h4 style="margin-top:0;text-transform: uppercase;">Support</h4></a>
					  </div>
                     <div class="col-xs-12">
                      <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3000" data-height="56">
                      <div>
                        <small class="stat-title">Today Tickets</small>
                        <h1 class="m-0 w-300"><span id="supportd"></span></h1>
                     </div>
                     <div>
                        <small class="stat-title">Week Tickets</small>
                        <h1 class="m-0 w-300"><span id="supportw"></span></h1>
                        </div>
                      <div>
                        <small class="stat-title">Month Tickets</small>
                        <h1 class="m-0 w-300"><span id="supportm"></span></h1>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-4 col-sm-12" >
              <div class="panel no-bd bd-3 panel-stat bg-purple" style="min-height:128px;">
                <div class="panel-body bg-purple p-15">
                  <div class="row m-b-10">
					<div class="col-xs-12">
					   <a style="  color: #fff;text-decoration: none;" href="OutboundReport"> <h4 style="margin-top:0;text-transform: uppercase;">Outbound</h4></a>
					  </div>
                     <div class="col-xs-12">
                      <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="2800" data-height="56">
                      <div>
                        <small class="stat-title">Today Calls</small>
                        <h1 class="m-0 w-300"><span id="outboundd"></span></h1>
                     </div>
                     <div>
                        <small class="stat-title">Week Calls</small>
                        <h1 class="m-0 w-300"><span id="outboundw"></span></h1>
                        </div>
                      <div>
                        <small class="stat-title">Month Calls</small>
                        <h1 class="m-0 w-300"><span id="outboundm"></span></h1>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
            </div>
			<div class="row">
			  <?php if($this->session->userdata('eid')==1){?>
			  <?php $j++;  ?>
			   <div class="col-md-4">
			  <li>
				 <div class="panel no-bd bg-red ">
						<div class="panel-heading clearfix pos-rel">
					<div class="panel-heading clearfix pos-rel text-center p-10 p-b-0">
					   <h2 class="panel-title c-white headingclass"><?php echo "Landing Number Status";?></h2>
					</div>
					</div>
				   <div class="panel-body bg-red p-t-0 p-b-10">
					  <div class="row">
						<div class="col-md-12">
						  <div class="row m-b-10">
							 <div class="withScroll" data-height="320" style="min-height:300px;">
								<table class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0" id="lstatus" >
								   <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
									  <th><?php echo $this->lang->line('level_landingnumber');?></th>
									  <th><?php echo $this->lang->line('level_title');?></th>
									  <th><?php echo "Used ";?></th>
								   </tr>	
								</table>
							 </div>
						  </div>
						 </div>
					   </div>
					</div>
				 </div>
			  </li>
			  </div>
			<?php }?>
			<?php if(($j%3) == 0) { ?>
			</div>
			<div class="row">
				<?php $j++; ?>
				  <div class="col-md-4">
				<?php } else { ?>
			  <div class="col-md-4">
				  <?php } ?> 
				  <li>
					 <div class="panel no-bd bg-green " >
						<div class="panel-heading padddef clearfix pos-rel">
							<div class="panel-heading  text-center p-10 p-b-0">
							   <h2 class="panel-title c-white headingclass"><?php echo "Account Balance";?></h2>
							</div>
						</div>
						<div class="panel-body bg-green p-t-0 p-b-10">
						  <div class="row">
							<div class="col-md-12">
							  <div class="row m-b-10">
								 <div class="withScroll" data-height="320" style="min-height:300px;">
								   <table  class="table tabdes table-striped table-hover" cellpadding="0" cellspacing="0" border="0">
									   <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
										  <th><?php echo "Call Balance ";?></th>
										  <th><?php echo "SMS Balance ";?></th>
									   </tr>
									   <?php echo "<tr class='sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable'><td><span id='call_bal'></span></td>";?>		
									   <?php echo "<td><span id='sms_bal'></span></td></tr>";?>		
									</table>
								 </div>
							  </div>
							 </div>
						   </div>
						</div>
					 </div>
				  </li>
				  </div>
			<?php if(($j%3) == 0) { ?>
			</div>
                        <div class="row">
							<?php $j++; ?>
							  <div class="col-md-4">
							<?php } else { ?>
						  <div class="col-md-4">
							  <?php } ?>
                              <li>
                                 <div class="bg-dark  panel no-bd ">
									 	<div class="panel-heading clearfix pos-rel">
                                    <div class="panel-heading text-center p-10 p-b-0">
                                       <h2 class="panel-title c-white headingclass"><?php echo "Offline Users";?></h2>
                                    </div>
                                    </div>
                                      <div class="panel-body bg-dark p-t-0 p-b-10">
									  <div class="row">
										<div class="col-md-12">
										  <div class="row m-b-10">
                                             <div class="withScroll" data-height="320" style="min-height:300px;">
                                                <table  class="table tabdes table-striped table-hover" id="offlineuser" cellpadding="0" cellspacing="0" border="0">
                                                   <tr class="sortable  coldes bd-3 bg-opacity-20  fade in ui-sortable">
                                                      <th><?php echo "Employee ";?></th>
                                                      <th><?php echo "Break Start Time";?></th>
                                                      <th><?php echo "Make online";?></th>
                                                   </tr>
                                                </table>
                                             </div>
                                          </div>
                                         </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                               </div>
                             </div>
                           </ul>
                        </td>
                     </tr>
                  </table>
               <!-- ---------- Dashboard tab Ends here --------------- --->
            </div>
         <div class="modal fade" id="modal-responsive" aria-hidden="true"></div>
      </div>
   </div>
</div>
</div>
