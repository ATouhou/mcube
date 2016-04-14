 <?php
class Mtrackappmodel extends Model{
	function Mtrackappmodel(){
		parent::Model();
	}
   function login_mtrack(){   
        $retArr = array();
        $sql = "SELECT * FROM user WHERE username='" . $_POST['email'] . "' AND password=md5('" . $_POST['password'] . "') AND  recording ='1'";
        $rest   = $this->db->query($sql);
        if ($rest->num_rows() > 0) {
            $ret = $rest->row_array();
			if($ret['authkey']==''){
				//$authkey = "";for($i = 0; $i<=6 ; $i++){$authkey .= ($i%2==0)? chr(rand(97,122)) : rand(0,9);}
				$authkey = uniqid($ret['bid'].'.'.$ret['eid'].'.');
				$sql = "UPDATE user SET authkey='".$authkey."'
				WHERE uid='".$ret['uid']."'";
				$this->db->query($sql);
			}
			$bid = $ret['bid'];
			$eid = $ret['eid'];
			$sql1    = "SELECT * FROM " . $bid . "_employee WHERE eid='" . $eid . "'";
			$result   = $this->db->query($sql1);
			if ($result->num_rows() > 0) {
				$re = $result->row_array();
			}
			return $re;
        }else{
			return $re = '1';
	    }
    }
    function check_auth(){ 
		$deviceid = $_POST['deviceid'];
		$gcmkey = $_POST['gcmkey'];
		$retArr = array();
		$sql    = "SELECT * FROM user WHERE username='" . $_POST['email'] . "' AND password=md5('" . $_POST['password'] . "')";
		$rest   = $this->db->query($sql);
		if ($rest->num_rows() > 0) {
			$ret = $rest->row_array();
			$bid = $ret['bid'];
			$eid = $ret['eid'];
			$sql1 = "SELECT u.*,e.empname FROM user u LEFT JOIN " . $bid . "_employee e on e.eid= u.eid WHERE u.eid='" . $eid . "' AND u.bid='" . $bid . "'";                        
			$result = $this->db->query($sql1);
			 if ($result->num_rows() > 0) {
				$empDetail= $result->row_array();
				if($empDetail['deviceid'] == $deviceid){
					if($empDetail['gcmkey_track'] != $gcmkey){
						$query = "UPDATE user SET gcmkey_track='" . $_POST['gcmkey'] . "'  WHERE eid='" . $eid . "'"; 
						$this->db->query($query);
						$re['key'] = 'login';
						$re['authkey'] = $empDetail['authkey'];
						$re['name'] = $empDetail['empname'];
					}
				}else{
					$query = "UPDATE user SET gcmkey_track='" . $gcmkey. "',deviceid = '" . $deviceid . "'  WHERE eid='" . $eid . "'"; 
					$this->db->query($query);
					$data['registatoin_id']=$empDetail['gcmkey_track'];
					$this->send_message($data);
				}
				$re['key'] = 'login';
				$re['authkey'] = $empDetail['authkey'];
				$re['name'] = $empDetail['empname'];
			}
			return $re;
		}else{
			return $re = '1';
	    }

    }
    function send_message($data){
		$registatoin_ids = array();
		$registatoin_ids[]=$data['registatoin_id'];
		$data = array( 'message' => "You have been logged out by admin");
		$apiKey = 'AIzaSyA_c2wR6vV9ki64AVz0aHf-K9siRqU9zdU';
		$url = 'https://gcm-http.googleapis.com/gcm/send';
		$post = array('registration_ids'  	=> $registatoin_ids,
						'data'              => $data,
					);
		$headers = array('Authorization: key=' . $apiKey,
						 'Content-Type: application/json'
						);   
		$ch = curl_init();    
		curl_setopt( $ch, CURLOPT_URL, $url );     
		curl_setopt( $ch, CURLOPT_POST, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );  
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $post ) );
		$result = curl_exec( $ch );
		if(curl_errno($ch)){
			echo 'GCM error: ' . curl_error( $ch );
		}
		curl_close( $ch );   
   }
   function insert_calldetail(){
	   	$deviceid = $_POST['deviceid'];
	   	$authkey = $_POST['authkey'];
	    $callto =  preg_replace('/[^\dxX]/', '', $_POST['callto']);
        $calltolen =  strlen($callto); 
	    if($calltolen == '12'){
			$callto =   substr($callto, 2);
		}
        $retArr = array();
        $sql    = "SELECT * FROM user WHERE authkey='" . $authkey . "'";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
			$userDetails= $result->row_array();
			if ($userDetails['deviceid'] == $deviceid) {
				$sql    = "SELECT * FROM " . $userDetails['bid'] . "_employee  WHERE eid='" . $userDetails['eid'] . "'";
				$res  = $this->db->query($sql);
				if ($res->num_rows() > 0) {
					$empDetail= $res->row_array();
					$bid = $empDetail['bid'];
					$eid = $empDetail['eid'];
					$callid = $callto.time();
					$this->db->set('callid',$callid);
					$this->db->set('bid',$bid);
					$this->db->set('eid',$eid);
					$this->db->set('callfrom',$empDetail['empnumber']);
					$this->db->set('callto',$callto);
					//if(isset($_POST['starttime']))$this->db->set('starttime',$_POST['starttime']); 
					if(isset($_POST['starttime']))$this->db->set('starttime',date('Y-m-d H:i:s',strtotime($_POST['starttime'])));
					if(isset($_POST['duration'])) $this->db->set('pulse',$_POST['duration']);
					if(isset($_POST['endtime']))$this->db->set('endtime',date('Y-m-d H:i:s',strtotime($_POST['endtime'])));
					//if(isset($_POST['endtime']))$this->db->set('endtime',$_POST['endtime']);
					if($_POST['calltype'] == 'incoming'){
						$_POST['calltype'] =1;
					}elseif($_POST['calltype'] == 'outgoing'){
						$_POST['calltype'] =2;
					}else{
						$_POST['calltype'] =0;
					}
					$this->db->set('calltype',$_POST['calltype']);
					if(isset($_FILES['uploadedfile']) && $_FILES['uploadedfile']['error']==0){
						$ext = pathinfo($_FILES['uploadedfile']['name'],PATHINFO_EXTENSION);
						$newName = $callid.".".$ext;
						move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$this->config->item('sound_path').$newName);
						$this->db->set('filename',$newName);
					}
					$this->db->set('status','1');
					if(isset($_POST['name']))$this->db->set('name',$_POST['name']); 
					$this->db->insert($bid."_mtracker"); 
					return '1';
				}
			}
			return 'different';
		}
		return 'invalid';
	}
	function getAllTrack($data){
		$listArr = array();
		$q = "";
		$deviceid = $_POST['deviceid'];
	   	$authkey = $_POST['authkey'];
        $retArr = array();
        $sql    = "SELECT * FROM user WHERE authkey='" . $authkey . "'";
        $result   = $this->db->query($sql);
        if ($result->num_rows() > 0) {
			$userDetails= $result->row_array();
			if ($userDetails['deviceid'] == $deviceid) {
				$roleid = $this->getRoleid($userDetails['eid'],$userDetails['bid']);
				$roleDetail = $this->getRoledetail($roleid,$userDetails['bid']);
				if($roleDetail['role']['admin']!=1){
					$q .= "AND (h.eid='".$userDetails['eid']."')";
				}
				$q .= ($data['type'] !='all')? " AND h.calltype ='".$data['type']."'":"";
				$sql = 	"SELECT SQL_CALC_FOUND_ROWS  h.*,e.empname,
				         if(h.name!='',h.name,'unknown') as name
						 FROM ".$userDetails['bid']."_mtracker h
						 LEFT JOIN  ".$userDetails['bid']."_employee e on e.bid=h.bid
						 WHERE h.status!='2' ".$q;
				$sql .=	" GROUP BY h.starttime  ORDER BY h.starttime DESC ";
				$sql .=	" LIMIT ".$data['offset'].",".$data['limit'];
				$rst = $this->db->query($sql);
				if($rst->num_rows()>0){
					$listArr['records'] = $rst->result_array();
				}
				if(empty($listArr)){
					$retArr['nodata'] = '1';
				}else{
					$retArr = $listArr;
				}
				return $retArr;
			}else{ 
				$retArr['different'] = '1';
			return  $retArr;
		  }
		}else{
			$retArr['nouser'] = '1';
			return $retArr;
		}
	}
    function getRoleid($eid,$bid=''){
		$bid = ($bid=='')?$this->session->userdata('bid'):$bid;
		$DB2 = (in_array($bid,array('257','538'))) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
		return $DB2->query("SELECT roleid FROM ".$bid."_employee
							WHERE eid='".$eid."'
							AND bid='".$bid."'")
					->row()->roleid;
	}
	function getRoledetail($roleid='',$bid=''){
		$bid = ($bid=='')?$this->session->userdata('bid'):$bid;
		$DB2 = (in_array($bid,array('257','538'))) ? $this->load->database('download', TRUE) : $this->load->database('download1', TRUE);
		$detail['role'] = (array)$DB2->query("SELECT * FROM ".$bid."_user_role
							WHERE roleid='".$roleid."'
							AND bid='".$bid."'")->row();
		$modules = $DB2->query("SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM ".$bid."_role_mod_opt
							WHERE roleid='".$roleid."' 
							AND bid='".$bid."') as o
							ON m.modid=o.modid where m.status=1")
					->result_array();
		foreach ($modules as $mod)
			$detail['modules'][$mod['modid']] = $mod;
			$detail['system'] = $DB2->query("SELECT a.*,f.fieldname FROM ".$bid."_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='".$roleid."'
								AND a.bid='".$bid."'
								AND a.fieldtype='s'")
						->result_array();
			$detail['custom'] = $DB2->query("SELECT * FROM ".$bid."_role_access
								WHERE roleid='".$roleid."'
								AND bid='".$bid."'
							AND fieldtype='c'")
					->result_array();
		return $detail;
	}
    function feedback(){
		$authkey = $_POST['authkey'];
		$sql = "INSERT INTO feedback_mtrack SET  authKey	='" . $authkey . "', feedback	 ='" . $_POST['feedback'] . "'";
		$ret = $this->db->query($sql);
        return true;
	}
}
