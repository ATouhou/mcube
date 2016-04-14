<?php
class Mobapp extends Controller {

	function Mobapp(){
		parent::controller();
		$this->load->model('mobappmodel','MM'); 	
		$this->form_validation->_error_prefix="<br>";
		$this->form_validation->_error_suffix="";
	}
	
	function index(){
		echo "This is a privete URL.";
	}
	
	function checkAuth(){
		//~ $_POST = array(
					//~ 'email'=>'demo@vmc.in'
					//~ ,'password'=>'tapan'
					//~ ,'url'=>'mcube.vmc.in'
				//~ );
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[4]|max_length[50]|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		//$this->form_validation->set_rules('url', 'Server', 'required|callback_check_url');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->authenticate($_POST);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$out = $user;
				$out['code'] = "200";
				$out['msg'] = "Login Success";
			}
		}else{
			$out = array(
							'code'=>'400',
							'msg'=>str_replace('<br>','',validation_errors())
					);
		}
		echo json_encode($out);exit;
	}

	function getList(){
		//~ $_POST = array(
					//~ 'authKey'=>'1.1.5260dd755c18f'
					//~ ,'type'=>'followup'	//  track|ivrs|x|lead|followup
					//~ ,'ofset'=>'0'
					//~ ,'limit'=>'20'
					//~ ,'gid'=>'0'
				//~ );
		$this->form_validation->set_rules('authKey', 'authKey', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = array(
						'bid'=>$user['bid'],
						'eid'=>$user['eid'],
						'type'=>$_POST['type'],
						'ofset'=>(isset($_POST['ofset']) ? $_POST['ofset'] : 0),
						'limit'=>(isset($_POST['limit']) ? $_POST['limit'] : 20),
						'gid'=>((isset($_POST['gid']) && $_POST['gid']>0) ? $_POST['gid'] : '')
					);
				$list = $this->MM->getAllList($data);
				if(isset($list['nodata'])){
					$out['code'] = "404";
					$out['msg'] = "No record found";
				}else{
					$out = $list;
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		//~ echo "<pre>";
		//~ $x = json_encode($out);
		//~ print_r(json_decode($x));
		echo json_encode($out);exit;
	}
	
	function getFollowupHistory(){
		//~ $_POST = array(
					//~ 'authKey'=>'1.1.5260dd755c18f'
					//~ ,'type'=>'track'	//  track|ivrs|x|lead|followup
					//~ ,'callid'=>'90361034341383650992'
					//~ ,'ofset'=>'0'
					//~ ,'limit'=>'20'
				//~ );
		$this->form_validation->set_rules('authKey', 'authKey', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('callid', 'callid', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = array(
						'bid'=>$user['bid'],
						'eid'=>$user['eid'],
						'dataid'=>$_POST['callid'],
						'type'=>$_POST['type'],
						'ofset'=>(isset($_POST['ofset']) ? $_POST['ofset'] : 0),
						'limit'=>(isset($_POST['limit']) ? $_POST['limit'] : 20)
					);
				$list = $this->MM->getFollowupHistory($data);
				if(empty($list)){
					$out['code'] = "404";
					$out['msg'] = "No record found";
				}else{
					$out = $list;
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		//~ echo "<pre>";
		//~ $x = json_encode($out);
		//~ print_r(json_decode($x));
		echo json_encode($out);exit;
	}
	
	function getDetail(){
		/*$_POST = array(
					'authKey'=>'1.1.52636037dd2e5'
					,'type'=>'track'	//  track|ivrs|x|lead|followup
					,'callid'=>'76949069081445592061'
					,'groupname'=>'HINDU NP'
				);*/
		$this->form_validation->set_rules('authKey', 'auth Key', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('callid', 'callid', 'required');
		$this->form_validation->set_rules('groupname', 'Group Name', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = array(
						'bid'		=>$user['bid'],
						'eid'		=>$user['eid'],
						'type'		=>$_POST['type'],
						'callid'	=>$_POST['callid'],
						'groupname'	=>$_POST['groupname'],
					);
				$list = $this->MM->getDetails($data);
				if(isset($list['nodata'])){
					$out['code'] = "404";
					$out['msg'] = "No record found";
				}else{
					$out = $list;
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		echo json_encode($out);exit;
	}
	
	function postDetail(){
		$_POST = array(
				'authKey'=>'1.1.5260dd755c18f'
				,'type'=>'track'	//  track|ivrs|x|lead|followup
				,'callid'=>'096541004011353999093'
				,'groupname'=>'ext102'
				,'calleraddress'=>'Test Call 12'
				,'callerbusiness'=>'Test business 12'
				,'assignto'=>'53'
				,'c_81'=>'NEW TEST FIELD1'
				,'c_82'=>'test 1'
			);
		$this->form_validation->set_rules('authKey', 'auth Key', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('callid', 'callid', 'required');
		$this->form_validation->set_rules('groupname', 'Group Name', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = $_POST;
				$data['bid'] = $user['bid'];
				$data['eid'] = $user['eid'];
				
				if(!$this->MM->postDetails($data)){
					$out['code'] = "424";
					$out['msg'] = "Request Failed";
				}else{
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		//~ echo "<pre>";
		//~ $x = json_encode($out);
		//~ print_r(json_decode($x));
		echo json_encode($out);exit;
	}
	
	function getGroups(){
		//~ $_POST = array(
					//~ 'authKey'=>'1.1.5260dd755c18f'
					//~ ,'type'=>'lead'	//  track|ivrs|x|lead|followup
				//~ );
				
		$this->form_validation->set_rules('authKey', 'authKey', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = array(
						'bid'=>$user['bid'],
						'eid'=>$user['eid'],
						'type'=>$_POST['type'],
						'ofset'=>(isset($_POST['ofset']) ? $_POST['ofset'] : 0),
						'limit'=>(isset($_POST['limit']) ? $_POST['limit'] : 20),
						'gid'=>(isset($_POST['gid']) ? $_POST['gid'] : '')
					);
				$list = $this->MM->getAllGroups($data);
				if(isset($list['nodata'])){
					$out['code'] = "404";
					$out['msg'] = "No record found";
				}else{
					$out = $list;
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		//$x = json_encode($out);
		//print_r(json_decode($x));
		echo json_encode($out);exit;
	}
	
	function followupFrm(){
		//~ $_POST = array(
					//~ 'authKey'=>'1.1.5260dd755c18f'
				//~ );
		$this->form_validation->set_rules('authKey', 'auth Key', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = array(
						'bid'		=>$user['bid'],
						'eid'		=>$user['eid']
					);
				$list = $this->MM->getFollowupFielsd($data);
				if(isset($list['nodata'])){
					$out['code'] = "404";
					$out['msg'] = "No record found";
				}else{
					$out = $list;
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		echo json_encode($out);exit;
	}
	
	function check_url(){
		$urls = array('qa1.vmc.in','mcube.vmc.in','mcube.vmc.in/calltrack');
		if(in_array($this->input->post('url'),$urls)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_url', 'Server Address Doesnot exists');
			return FALSE;
			
		}
	}
	function setgcmkey(){
  
		$this->form_validation->set_rules('gcmkey', 'gcmkey', 'required');
        $this->form_validation->set_rules('authkey', 'authkey', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->MM->setgcmkey($_POST);
            if (empty($user)) {
                $out = array(
                    'code' => '202',
                    'msg' => 'Invalid Credentials'
                );
                echo json_encode($out);
                exit;
            }elseif($user['key'] == 'update'){
				 // $this->send_message($data, $registatoin_ids );
		       $out = array(
                    'code' => '400',
                    'msg' => 'Login Successfull',
                );
                echo json_encode($out);
                exit;
            }
        } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
        }
        echo json_encode($out);
        exit;
	}
     function send_message(){
    $registatoin_ids = array();
   $sql = $this->db->query("SELECT gcmkey_mcube FROM 1_employee");
   if($sql->num_rows()>0){
			foreach($sql->result_array() as $ress){
				$registatoin_ids[]=$ress['gcmkey_mcube'];
			}
		}

    $data = array( 'message' => "Last call was from 54688968966");
    // Insert real GCM API key from Google APIs Console
    // https://code.google.com/apis/console/        
    $apiKey = 'AIzaSyBV6QYBNNdz0A7b2by8bffiVkMV_HYqUSs';

    // Define URL to GCM endpoint
    $url = 'https://gcm-http.googleapis.com/gcm/send';

    // Set GCM post variables (device IDs and push payload)     
    $post = array(
                    'registration_ids'  => $registatoin_ids,
                    'data'              => $data,
                    );

    // Set CURL request headers (authentication and type)       
    $headers = array( 
                        'Authorization: key=' . $apiKey,
                        'Content-Type: application/json'
                    );

    // Initialize curl handle       
    $ch = curl_init();

    // Set URL to GCM endpoint      
    curl_setopt( $ch, CURLOPT_URL, $url );

    // Set request method to POST       
    curl_setopt( $ch, CURLOPT_POST, true );

    // Set our custom headers       
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );

    // Get the response back as string instead of printing it       
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

    // Set JSON post data
    curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $post ) );

    // Actually send the push   
    $result = curl_exec( $ch );
    // Error handling
    if ( curl_errno( $ch ) )
    {
        echo 'GCM error: ' . curl_error( $ch );
    }

    // Close curl handle
    curl_close( $ch );

    // Debug GCM response       
    echo $result;
}
}


?>
