<script src="system/application/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
<script src="system/application/js/application.js"></script>
<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4><?php echo "Support Tickets";?></h4>
			</div>
			<div class="modal-body">
				<div class="row">					
					<div class="col-md-12 col-sm-12 col-xs-12">
		<?php
			 echo form_open($URL,$attributes);
		?>
				<input type="hidden" name="download" value="1" />
				<TABLE class="table table-striped">
					<tr>
						<th><label>Start Time :</label></th>
						<td><input type="text" name="starttimes" id="starttimes" class="datepicker form-control" /></td>
					</tr>
					<tr>
						<th><label>End Time :</label></th>
						<td><input type="text" name="endtimes" id="endtimes" class="datepicker form-control" value="<?=date('Y-m-d');?>"/></td>
					</tr>
					<tr>
						<th><label>Group :</label></th>
						<td>
							<?php 
								$js = 'id="groupname" class="form-control" multiple';
								echo form_dropdown('group_name[]',$this->supportmodel->getSupportGrps(),'',$js);
							  ?>
						</td>
					</tr>
					<tr>
						<th><label>Employee :</label></th>
						<td>
								<?php 
									$js = 'id="groupname" class="form-control" multiple';
									echo form_dropdown('group_name[]',$this->supportmodel->getSupportGrps(),'',$js);
							   ?>
						</td>
					</tr>
				 </TABLE>
				<TABLE class="table table-striped">
				<TR>
				<td colspan="3"><h4>Listing Fields</h4>
						<ul style="list-style:none;">	
							<?
							foreach($systemfields as $field){
								$checked = false;
								if($field['type']=='s' && $field['show'] ){
									foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
									if($checked) 
									?><li><input type="checkbox" checked name="lisiting[<?=$field['fieldname']?>]" value="<?=(($field['customlabel']!="")
																 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname'])?>" /><?=(($field['customlabel']!="")
																 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname'])?></li><?
									
									}elseif($field['type']=='c' && $field['show']){

										foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
										if($checked)
		
										?><li><input type="checkbox" checked name="lisiting[<?=$field['fieldKey']?>]" value="<?=$field['fieldname']?>" /><?=$field['customlabel']?></li><?php
					
								}
							}
							?>
							<li><input type="checkbox" checked name="lisiting[comments]" value="comments" /> Comments </li>
						    <li><input type="checkbox" checked name="lisiting[remarks]" value="remarks" /> Remarks </li>
						</ul>
				</td>
			</TR>
			</TABLE>
				<table><tr><td><center>
					<input id="button1" type="submit" class="btn btn-primary" name="update_system" value="<?=$this->lang->line('submit') ?>" />
					<input id="button2" type="reset" class="btn btn-default" value="<?=$this->lang->line('reset')?>" />
				</center></td></tr></table>
				<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>					

