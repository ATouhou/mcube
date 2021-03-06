<?php
  
class Dashboard extends Controller {
	var $data;
	
	function Dashboard(){
		parent::Controller();
		if(!$this->session->userdata('logged_in'))redirect('/site/login');
		$this->load->model('sysconfmodel');
		$this->load->model('systemmodel');
		$this->data = $this->sysconfmodel->init();
		$this->load->model('reportmodel');
		$this->load->model('colormodel');
		$this->session->set_userdata('cbid',$this->session->userdata('bid'));
		$this->session->unset_userdata('filter');
	}

	public function __destruct() {
		$this->db->close();
	}
	public function dashboardInfo() {
		$data=array(
			 'offlineusers' => $this->reportmodel->offlineusers(),
             'sms_bal'=>$this->reportmodel->sms_bal(),
             'call_bal'=>$this->reportmodel->call_bal(),
			 'lastcalls'=>$this->reportmodel->Lastcalls(),
			 'trackd'=>$this->reportmodel->trackd(),
			 'trackw'=>$this->reportmodel->trackw(),
			 'trackm'=>$this->reportmodel->trackm(),
			 'mcubexd'=>$this->reportmodel->mcubexd(),
			 'mcubexw'=>$this->reportmodel->mcubexw(),
			 'mcubexm'=>$this->reportmodel->mcubexm(),
			 'ivrsd'=>$this->reportmodel->ivrsd(),
			 'ivrsw'=>$this->reportmodel->ivrsw(),
			 'ivrsm'=>$this->reportmodel->ivrsm(),
			 'leadd'=>$this->reportmodel->leadd(),
			 'leadw'=>$this->reportmodel->leadw(),
			 'leadm'=>$this->reportmodel->leadm(),
			 'supportd'=>$this->reportmodel->supportd(),
			 'supportw'=>$this->reportmodel->supportw(),
			 'supportm'=>$this->reportmodel->supportm(),
			 'outboundd'=>$this->reportmodel->outboundd(),
			 'outboundw'=>$this->reportmodel->outboundw(),
			 'outboundm'=>$this->reportmodel->outboundm(),
		);
		echo json_encode($data);
	}
	function index(){
			 //~ $data=array(
			 //~ 'offlineusers' => $this->reportmodel->offlineusers(),
             //~ 'sms_bal'=>$this->reportmodel->sms_bal(),
             //~ 'call_bal'=>$this->reportmodel->call_bal(),
			 //~ 'lastcalls'=>$this->reportmodel->Lastcalls(),
			 //~ 'trackd'=>$this->reportmodel->trackd(),
			 //~ 'trackw'=>$this->reportmodel->trackw(),
			 //~ 'trackm'=>$this->reportmodel->trackm(),
			 //~ 'mcubexd'=>$this->reportmodel->mcubexd(),
			 //~ 'mcubexw'=>$this->reportmodel->mcubexw(),
			 //~ 'mcubexm'=>$this->reportmodel->mcubexm(),
			 //~ 'ivrsd'=>$this->reportmodel->ivrsd(),
			 //~ 'ivrsw'=>$this->reportmodel->ivrsw(),
			 //~ 'ivrsm'=>$this->reportmodel->ivrsm(),
			 //~ 'leadd'=>$this->reportmodel->leadd(),
			 //~ 'leadw'=>$this->reportmodel->leadw(),
			 //~ 'leadm'=>$this->reportmodel->leadm(),
			 //~ 'supportd'=>$this->reportmodel->supportd(),
			 //~ 'supportw'=>$this->reportmodel->supportw(),
			 //~ 'supportm'=>$this->reportmodel->supportm(),
			 //~ 'outboundd'=>$this->reportmodel->outboundd(),
			 //~ 'outboundw'=>$this->reportmodel->outboundw(),
			 //~ 'outboundm'=>$this->reportmodel->outboundm(),
			 //~ 'feature'=>$this->feature_access());
		$data = array();
		$this->sysconfmodel->viewLayout('dashboard',$data);
		
	}
	function feature_access(){
		$show=0;
		$data1=array();
		$checklist=$this->systemmodel->checked_featuremanage();
		if(in_array(1,$checklist))	$data1['call']='1';
		if(in_array(2,$checklist))	$data1['ivrs']='1';
		if(in_array(8,$checklist))	$data1['pbx']='1';
		if(in_array(13,$checklist))	$data1['lead']='1';
		if(in_array(14,$checklist))	$data1['support']='1';
		
		return $data1;
	}
	function lastcallsinfo(){
		$data = array('lastcalls'=>$this->reportmodel->call_last_calls());
		echo json_encode($data);
	}
	function followupsinfo(){
		$data = array('followups'=>$this->reportmodel->call_followUps());
		echo json_encode($data);
	}
	function groupwisecalls(){
		$data = array('total_calls'=>$this->reportmodel->total_calls(),
					  'groupwise_calls'=>$this->reportmodel->groupwise_todaycall());
		echo json_encode($data);
	}
	function empwisecalls(){
		$data = array( 'empwise_calls'=>$this->reportmodel->empgroupwise_todaycalls());
		echo json_encode($data);
	}
	function allcallsinfo(){
		$data = array('qualify_calls'=>$this->reportmodel->call_types('q'),
			 'unqualify_calls'=>$this->reportmodel->call_types('u'),
			 'positive_calls'=>$this->reportmodel->call_types('p'),
			 'negative_calls'=>$this->reportmodel->call_types('n'),
			 'missed_calls'=>$this->reportmodel->call_types('m'),
			 'attend_calls'=>$this->reportmodel->call_types('at'),
			 'qualify_calls1'=>$this->reportmodel->call_types('q','1'),
			 'unqualify_calls1'=>$this->reportmodel->call_types('u','1'),
			 'positive_calls1'=>$this->reportmodel->call_types('p','1'),
			 'negative_calls1'=>$this->reportmodel->call_types('n','1'),
			 'missed_calls1'=>$this->reportmodel->call_types('m','1'),
			 'attend_calls1'=>$this->reportmodel->call_types('at','1'),
			 'positive_calls1'=>$this->reportmodel->call_types('p','1'),
			 'negative_calls1'=>$this->reportmodel->call_types('n','1'),
			 'positive_calls'=>$this->reportmodel->call_types('p'),
			 'negative_calls'=>$this->reportmodel->call_types('n'),
			);
		echo json_encode($data);
	}
	/*
	 * 
	 * name: calltrackdashboard
	 * @param
	 * @return calltrack dashboard details
	 * 
	 */
	function calltrackdashboard(){
		$data1 = array();
		$this->sysconfmodel->viewLayout('calltrackdsboard',$data1);
	}
	/*
	 * 
	 * name: ivrsdashboard
	 * @param
	 * @return ivrs dashboard details
	 * 
	 */
	function ivrsCalls(){
		$data = array('ivrs_last_calls'=>$this->reportmodel->ivrs_last_calls());
		echo json_encode($data);
	}
	function ivrsTotalCalls(){
		$data = array('ivrs_total_calls'=>$this->reportmodel->ivrs_total_calls(),
			 'ivrs_groupwise_todaycall'=>$this->reportmodel->ivrs_groupwise_todaycall());
		echo json_encode($data);
	}
	function ivrsfollowups(){
		$data = array( 'ivrs_followUps'=>$this->reportmodel->ivrs_followUps());
		echo json_encode($data);
	}
	function ivrsdashboard(){
		//~ $data1=array('ivrs_total_calls'=>$this->reportmodel->ivrs_total_calls(),
			 //~ 'ivrs_groupwise_todaycall'=>$this->reportmodel->ivrs_groupwise_todaycall(),
			 //~ 'ivrs_last_calls'=>$this->reportmodel->ivrs_last_calls(),
			 //~ 'ivrs_Lastcalls'=>$this->reportmodel->ivrs_Lastcalls(),
			 //~ 'ivrs_followUps'=>$this->reportmodel->ivrs_followUps(),
			 //~ 'feature'=>$this->feature_access());
		$data1 = array();
		$this->sysconfmodel->viewLayout('ivrsdashboard',$data1);
	}
	/*
	 * 
	 * name: pbxdashboard
	 * @param
	 * @return pbx dashboard details
	 * 
	 */
	 function pbxCalls(){
		$data = array('pbx_last_calls'=>$this->reportmodel->pbx_last_calls());
		echo json_encode($data);
	}
	function pbxTotalCalls(){
		$data = array('pbx_groupwise_todaycall'=>$this->reportmodel->pbx_groupwise_todaycall(),
			 'pbx_total_calls'=>$this->reportmodel->pbx_total_calls());
		echo json_encode($data);
	}
	function pbxfollowups(){
		$data = array( 'pbx_followUps'=>$this->reportmodel->pbx_followUps());
		echo json_encode($data);
	}
	function pbxLanding(){
		$data = array('pbx_Lastcalls'=>$this->reportmodel->pbx_Lastcalls());
		echo json_encode($data);
	}
	function pbxdashboard(){
		//~ $data1=array('pbx_last_calls'=>$this->reportmodel->pbx_last_calls(),
		     //~ 'pbx_groupwise_todaycall'=>$this->reportmodel->pbx_groupwise_todaycall(),
			 //~ 'pbx_total_calls'=>$this->reportmodel->pbx_total_calls(),
			 //~ 'pbx_Lastcalls'=>$this->reportmodel->pbx_Lastcalls(),
			 //~ 'pbx_followUps'=>$this->reportmodel->pbx_followUps(),
			 //~ 'feature'=>$this->feature_access());
		$data1 = array();
		$this->sysconfmodel->viewLayout('pbxdashboard',$data1);
	}
	/*
	 * 
	 * name: leaddashboard
	 * @param
	 * @return lead dashboard details
	 * 
	 */
	 
	function leaddashboard()
	{
		$lead=array(
			 'lead_empgroupwise_todaycalls'=>$this->reportmodel->lead_empgroupwise_todaycalls(),
			 'lead_followUps'=>$this->reportmodel->leads_followUps(),
			 'leads_assigned_detail'=>$this->reportmodel->leads_assigned_detail(),
			 'open_lead'=>$this->reportmodel->lead_types('o'),
			 'pending_lead'=>$this->reportmodel->lead_types('p'),
			 'closed_won'=>$this->reportmodel->lead_types('cw'),
			 'closed_lost'=>$this->reportmodel->lead_types('cl'),
			 'feature'=>$this->feature_access());
		$this->sysconfmodel->viewLayout('leaddashboard',$lead);
	}
	/*
	 * 
	 * name: supportdashboard
	 * @param
	 * @return support dashboard details
	 * 
	 */
	function supportdashboard()
	{
		$support=array(
			 'supports_assigned_detail'=>$this->reportmodel->supports_assigned_detail(),
			 'support_followUps'=>$this->reportmodel->support_followUps(),
			 'support_empgroupwise_todaycalls'=>$this->reportmodel->support_empgroupwise_todaycalls(),
			 'open_tickets'=>$this->reportmodel->support_types('o'),
			 'pending_tickets'=>$this->reportmodel->support_types('p'),
			 'resolved_tickets'=>$this->reportmodel->support_types('r'),
			 'closed_tickets'=>$this->reportmodel->support_types('c'),
			 'feature'=>$this->feature_access());
		$this->sysconfmodel->viewLayout('supportdashboard',$support);
	}
	function priweekly(){
		$groups=$this->reportmodel->groupnames();
		$max = 0;
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$tool_tip='';
		
		foreach($groups as $group){
		$g->line_hollow( 2, 4, $this->colormodel->getColor(), $group['groupname'], 10 );
		$data = array(
			 $group['day6']
			,$group['day5']
			,$group['day4']
			,$group['day3']
			,$group['day2']
			,$group['day1']
			,$group['day0']);
		$max = ($max < max($data)) ? max($data) : $max;
		$g->set_data($data);	
		}
		$g->set_x_labels( array(
				
				 date('d M', mktime(0,0,0,date('m'),(date('d')-6),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-5),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-4),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-3),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-2),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-1),date('y')))
				,date('d M')
			 ),7 );
		$g->set_y_max((ceil($max/10)*10));
		$g->y_label_steps(10);
		$g->set_tool_tip( '#key#:#val#' );
		$g->title( 'Weekly Calls', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function ivrs_priweekly(){
		$groups=$this->reportmodel->ivrs_groupnames();
		$max = 0;
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$tool_tip='';
		
		foreach($groups as $group){
		$g->line_hollow( 2, 4, $this->colormodel->getColor(), $group['groupname'], 10 );
		$data = array(
			 $group['day6']
			,$group['day5']
			,$group['day4']
			,$group['day3']
			,$group['day2']
			,$group['day1']
			,$group['day0']);
		$max = ($max < max($data)) ? max($data) : $max;
		$g->set_data($data);	
		}
		$g->set_x_labels( array(
				
				 date('d M', mktime(0,0,0,date('m'),(date('d')-6),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-5),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-4),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-3),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-2),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-1),date('y')))
				,date('d M')
			 ),7 );
		$g->set_y_max((ceil($max/10)*10));
		$g->y_label_steps(10);
		$g->set_tool_tip( '#key#:#val#' );
		$g->title( 'Weekly Calls', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function pbx_priweekly(){
		$groups=$this->reportmodel->pbx_groupnames();
		$max = 0;
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$tool_tip='';
		foreach($groups as $group){
			$g->line_hollow( 2, 4, $this->colormodel->getColor(), $group['groupname'], 10 );
			$data = array(
				 $group['day6']
				,$group['day5']
				,$group['day4']
				,$group['day3']
				,$group['day2']
				,$group['day1']
				,$group['day0']);
			$max = ($max < max($data)) ? max($data) : $max;
			$g->set_data($data);	
		}
		$g->set_x_labels( array(
				 date('d M', mktime(0,0,0,date('m'),(date('d')-6),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-5),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-4),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-3),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-2),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-1),date('y')))
				,date('d M')
			 ),7 );
		$g->set_y_max((ceil($max/10)*10));
		$g->y_label_steps(10);
		$g->set_tool_tip( '#key#:#val#' );
		$g->title( 'Weekly Calls', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function priupdate(){
		$groups=$this->reportmodel->group_callupdates();
		$max = 0;
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		foreach($groups as $group){
			$g->line_hollow( 2, 4, $this->colormodel->getColor(), substr($group['groupname'],0,4), 10 );
			$data = array(
				$group['day0']
				,$group['day1']
				,$group['day2']
				,$group['day3']
				,$group['day4']
				,$group['day5']
				,$group['day6']);
			$max = ($max < max($data)) ? max($data) : $max;
			$g->set_data($data);	
		}
		$g->set_x_labels( array(
				
				date('d M')//.$this->lang->line("cal_".strtolower(date('M')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-1),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-2),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-3),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-4),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-5),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-6),date('y')))
			 ),7 );
		$g->set_y_max( $max );
		$g->y_label_steps( 10 );
		$g->set_tool_tip( '#key#:#val#' );
		$g->title( 'Group Wise Calls', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function groupwisemisscall(){
		$groupwise_missedcalls = $this->reportmodel->for_pieinfo('m');
		$data['values'] = array();
		$data['colours'] = array();
		$data['pie_labels'] = array();
		for($k=0;$k<sizeof($groupwise_missedcalls);$k++){
			array_push($data['values'],$groupwise_missedcalls[$k]['cnt']);
			array_push($data['pie_labels'],substr($groupwise_missedcalls[$k]['groupname'],0,4));
			array_push($data['colours'],$this->colormodel->getColor());
			
		}
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$g->pie(60,'#505050','{font-size: 12px; color: #404040;');
		$g->pie_values( $data['values'], $data['pie_labels']);
		$g->pie_slice_colours($data['colours']);
		$g->set_tool_tip( '#x_label#<br>#val# Calls' );
		$g->title( 'Group Wise Missed Calls', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function groupwisecall(){		
		$recent_calls = $this->reportmodel->recent_calls();
		$data['values'] = array();
		$data['colours'] = array();
		$data['pie_labels'] = array();
		for($i=0;$i<sizeof($recent_calls);$i++){
			if($recent_calls[$i]['count']>'0'){
				array_push($data['values'],$recent_calls[$i]['count']);
				array_push($data['pie_labels'],substr($recent_calls[$i]['groupname'],0,4));
				array_push($data['colours'],$this->colormodel->getColor());
			}
		}
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$g->pie(60,'#505050','{font-size: 12px; color: #404040;');
		$g->pie_values( $data['values'], $data['pie_labels']);
		$g->pie_slice_colours($data['colours']);

		$g->set_tool_tip( '#x_label#<br>#val# Calls' );
		$g->title( 'Group Wise Calls', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function ivrs_groupwisecall(){		
		$recent_calls = $this->reportmodel->ivrs_recent_calls();
		$data['values'] = array();
		$data['colours'] = array();
		$data['pie_labels'] = array();
		for($i=0;$i<sizeof($recent_calls);$i++){//echo $recent_calls[$i]['groupname'] .'='.$recent_calls[$i]['count'];
			if($recent_calls[$i]['count']>'0'){
				array_push($data['values'],$recent_calls[$i]['count']);
				array_push($data['pie_labels'],substr($recent_calls[$i]['groupname'],0,4));
				array_push($data['colours'],$this->colormodel->getColor());
			}
		}
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$g->pie(60,'#505050','{font-size: 12px; color: #404040;');
		$g->pie_values( $data['values'], $data['pie_labels']);
		$g->pie_slice_colours($data['colours']);
		$g->set_tool_tip( '#x_label#<br>#val# Calls' );
		$g->title( 'Group Wise Calls', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function pbx_groupwisecall(){		
		$recent_calls = $this->reportmodel->pbx_recent_calls();
		$data['values'] = array();
		$data['colours'] = array();
		$data['pie_labels'] = array();
		for($i=0;$i<sizeof($recent_calls);$i++){//echo $recent_calls[$i]['groupname'] .'='.$recent_calls[$i]['count'];
			if($recent_calls[$i]['count']>'0'){
				array_push($data['values'],$recent_calls[$i]['count']);
				array_push($data['pie_labels'],substr($recent_calls[$i]['groupname'],0,4));
				array_push($data['colours'],$this->colormodel->getColor());
			}
		}
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$g->pie(60,'#505050','{font-size: 12px; color: #404040;');
		$g->pie_values( $data['values'], $data['pie_labels']);
		$g->pie_slice_colours($data['colours']);
		$g->set_tool_tip( '#x_label#<br>#val# Calls' );
		$g->title( 'Group Wise Calls', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function lead_groupwiseleads(){		
		$recent_calls = $this->reportmodel->lead_groupwiseleads();
		$data['values'] = array();
		$data['colours'] = array();
		$data['pie_labels'] = array();
		for($i=0;$i<sizeof($recent_calls);$i++){
			if($recent_calls[$i]['count']>'0'){
				array_push($data['values'],$recent_calls[$i]['count']);
				array_push($data['pie_labels'],substr($recent_calls[$i]['groupname'],0,4));
				array_push($data['colours'],$this->colormodel->getColor());
			}
		}
		include_once('system/application/views/open-flash-chart.php' );
		$g = new graph();
		$g->pie(60,'#505050','{font-size: 12px; color: #404040;');
		$g->pie_values( $data['values'], $data['pie_labels']);
		$g->pie_slice_colours($data['colours']);
		$g->set_tool_tip( '#x_label#<br>#val# Leads' );
		$g->title( 'Group Wise Leads', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function support_groupwisesupports(){		
		$recent_calls = $this->reportmodel->support_groupwisesupports();
		$data['values'] = array();
		$data['colours'] = array();
		$data['pie_labels'] = array();
		for($i=0;$i<sizeof($recent_calls);$i++){//echo $recent_calls[$i]['groupname'] .'='.$recent_calls[$i]['count'];
			if($recent_calls[$i]['count']>'0'){
				array_push($data['values'],$recent_calls[$i]['count']);
				array_push($data['pie_labels'],substr($recent_calls[$i]['groupname'],0,4));
				array_push($data['colours'],$this->colormodel->getColor());
			}
		}
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$g->pie(60,'#505050','{font-size: 12px; color: #404040;');
		$g->pie_values( $data['values'], $data['pie_labels']);
		$g->pie_slice_colours($data['colours']);
		$g->set_tool_tip( '#x_label#<br>#val# Tickets' );
		$g->title( 'Group Wise Support', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function qualifedcalls(){
		$groupwise_qualifedcalls = $this->reportmodel->for_pieinfo('q');
		$data['values'] = array();
		$data['colours'] = array();
		$data['pie_labels'] = array();
		for($l=0;$l<sizeof($groupwise_qualifedcalls);$l++){
			array_push($data['values'],$groupwise_qualifedcalls[$l]['cnt']);
			array_push($data['pie_labels'],substr($groupwise_qualifedcalls[$l]['groupname'],0,4));
			array_push($data['colours'],$this->colormodel->getColor());
			
		}
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$g->pie(60,'#505050','{font-size: 12px; color: #404040;');
		$g->pie_values( $data['values'], $data['pie_labels']);
		$g->pie_slice_colours($data['colours']);
		$g->set_tool_tip( '#x_label#<br>#val# Calls' );
		$g->title( 'Qualified Calls', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
	function cbytime(){
		$res=$this->reportmodel->callbyregion();
	}
	function weekpopup(){
		$type = $this->uri->segment(3);
		$data['type'] = $type;
	    $data['module']['title'] = "Weekly Calls For Last 7 Days";
	    $this->load->view('graphpopup',$data);
	}
	function callbytime(){
	   $type = $this->uri->segment(3);
	   $data['type'] = $type;
	   $data['module']['title'] = "Calls By Time for Last 7 days";
	   $this->load->view('CallTimepopup',$data);
	}
	function callbyweek(){
	   $type = $this->uri->segment(3);
	   $data['type'] = $type;
	   $data['module']['title'] = "Calls By Day for Last 7 days";
	   $this->load->view('Callweekpopup',$data);
	}
	function callsbyemotion(){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');		
		$recent_calls = $this->reportmodel->emotionCalls($bid);
		$data['values'] = array();
		$data['colours'] = array();
		$data['pie_labels'] = array();
		for($i=0;$i<sizeof($recent_calls);$i++){
			if($recent_calls[$i]['count']>'0'){
				array_push($data['values'],$recent_calls[$i]['count']);
				array_push($data['pie_labels'],substr($recent_calls[$i]['emotion'],0,4));
				array_push($data['colours'],$this->colormodel->getColor());
			}
		}
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$g->pie(60,'#505050','{font-size: 12px; color: #404040;');
		$g->pie_values( $data['values'], $data['pie_labels']);
		$g->pie_slice_colours($data['colours']);

		$g->set_tool_tip( '#x_label#<br>#val# Calls' );
		$g->title( 'Calls By Emotions', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
}
?>
