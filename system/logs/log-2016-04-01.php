<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

[2016-04-01 11:26:14]	DEBUG :	Config Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:26:14]	DEBUG :	URI Class Initialized
[2016-04-01 11:26:14]	DEBUG :	No URI present. Default controller set.
[2016-04-01 11:26:14]	DEBUG :	Router Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Output Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Input Class Initialized
[2016-04-01 11:26:14]	DEBUG :	XSS Filtering completed
[2016-04-01 11:26:14]	DEBUG :	XSS Filtering completed
[2016-04-01 11:26:14]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:26:14]	DEBUG :	Language Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Loader Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:26:14]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:26:14]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:26:14]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:26:14]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:26:14]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:26:14]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:14]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:26:14]	DEBUG :	Session Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:26:14]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:26:14]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:26:14]	DEBUG :	Session routines successfully run
[2016-04-01 11:26:14]	DEBUG :	Table Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:26:14]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Email Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Controller Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:14]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:26:15]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:26:15]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:26:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:15]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:26:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459486663', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
[2016-04-01 11:26:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:26:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:26:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:26:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:26:15]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:26:15]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:26:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:26:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:26:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:26:15]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:26:15]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:26:15]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:26:15]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:26:15]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:26:15]	DEBUG :	Config Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:26:15]	DEBUG :	URI Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Router Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Output Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Input Class Initialized
[2016-04-01 11:26:15]	DEBUG :	XSS Filtering completed
[2016-04-01 11:26:15]	DEBUG :	XSS Filtering completed
[2016-04-01 11:26:15]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:26:15]	DEBUG :	Language Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Loader Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:26:15]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:26:15]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:26:15]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:26:15]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:26:15]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:26:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:15]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:26:15]	DEBUG :	Session Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:26:15]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:26:15]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:26:15]	DEBUG :	Session routines successfully run
[2016-04-01 11:26:15]	DEBUG :	Table Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:26:15]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Email Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Controller Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:26:15]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:26:15]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:26:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:15]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:26:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459486663', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
[2016-04-01 11:26:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:26:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:26:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:26:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:26:15]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:26:15]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:26:15]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:26:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:26:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:26:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:26:15]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:26:15]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:26:15]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:26:15]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:26:15]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459486663', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
[2016-04-01 11:26:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459486663', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
[2016-04-01 11:26:15]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 11:26:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:15]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 11:26:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 11:26:15]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 11:26:15]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/dashboard.php
[2016-04-01 11:26:15]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 11:26:15]	DEBUG :	Final output sent to browser
[2016-04-01 11:26:15]	DEBUG :	Total execution time: 0.2933
[2016-04-01 11:26:52]	DEBUG :	Config Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:26:52]	DEBUG :	URI Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Router Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Output Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Input Class Initialized
[2016-04-01 11:26:52]	DEBUG :	XSS Filtering completed
[2016-04-01 11:26:52]	DEBUG :	XSS Filtering completed
[2016-04-01 11:26:52]	DEBUG :	XSS Filtering completed
[2016-04-01 11:26:52]	DEBUG :	XSS Filtering completed
[2016-04-01 11:26:52]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:26:52]	DEBUG :	Language Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Loader Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:26:52]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:26:52]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:26:52]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:26:52]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:26:52]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:26:52]	DEBUG :	Session Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:26:52]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:26:52]	DEBUG :	Session routines successfully run
[2016-04-01 11:26:52]	DEBUG :	Table Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:26:52]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Email Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Controller Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:26:52]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:26:52]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:26:52]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459486663', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:26:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:26:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:26:52]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:26:52]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:26:52]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:26:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:26:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:26:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:26:52]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:26:52]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:26:52]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:26:52]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:26:52]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:26:52]	DEBUG :	Model Class Initialized
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:26:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:26:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:26:52]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:26:52]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 11:26:52]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459486663', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:26:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:26:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:26:52]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,30
[2016-04-01 11:26:52]	SQL :	SELECT FOUND_ROWS() as cnt
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='7'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='7'
[2016-04-01 11:26:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 7 GROUP BY DAY(h.starttime)
[2016-04-01 11:26:52]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='13'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='13'
[2016-04-01 11:26:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 13 GROUP BY DAY(h.starttime)
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2016-04-01 11:26:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2016-04-01 11:26:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2016-04-01 11:26:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:26:52]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:26:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:26:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 11:26:52]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 11:26:52]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:26:52]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 11:26:52]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 11:26:52]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 11:26:52]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/list_view.php
[2016-04-01 11:26:52]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 11:26:52]	DEBUG :	Final output sent to browser
[2016-04-01 11:26:52]	DEBUG :	Total execution time: 0.3799
[2016-04-01 11:27:34]	DEBUG :	Config Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:27:34]	DEBUG :	URI Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Router Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Output Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Input Class Initialized
[2016-04-01 11:27:34]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:34]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:34]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:34]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:34]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:27:34]	DEBUG :	Language Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Loader Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:27:34]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:27:34]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:27:34]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:27:34]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:27:34]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:27:34]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:34]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:27:34]	DEBUG :	Session Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:27:34]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:27:34]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:27:34]	DEBUG :	Session routines successfully run
[2016-04-01 11:27:34]	DEBUG :	Table Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:27:34]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Email Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Controller Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:27:34]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:27:34]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:27:34]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:34]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:27:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459486663', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
[2016-04-01 11:27:34]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:34]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:27:34]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:27:34]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:27:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:34]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:27:34]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:27:34]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:27:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:34]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:27:34]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:34]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:34]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 11:27:34]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:34]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:27:34]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:34]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='7'
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='7'
[2016-04-01 11:27:34]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='3')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2016-04-01 11:27:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:34]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2016-04-01 11:27:34]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2016-04-01 11:27:34]	SQL :	SELECT * FROM group_rules
[2016-04-01 11:27:34]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 11:27:34]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_custom_region
[2016-04-01 11:27:34]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2016-04-01 11:27:34]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 11:27:34]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 11:27:34]	SQL :	SELECT COALESCE( count( * ) ) AS cnt FROM `1_groups` g
							   left join prinumbers p on g.prinumber=p.number and g.gid=p.associateid
							   where p.bid='1'
[2016-04-01 11:27:34]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 11:27:34]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:34]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 11:27:34]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 11:27:34]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 11:27:34]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/form_view.php
[2016-04-01 11:27:34]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 11:27:34]	DEBUG :	Final output sent to browser
[2016-04-01 11:27:34]	DEBUG :	Total execution time: 0.2037
[2016-04-01 11:27:41]	DEBUG :	Config Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:27:41]	DEBUG :	URI Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Router Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Output Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Input Class Initialized
[2016-04-01 11:27:41]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:41]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:41]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:41]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:41]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:27:41]	DEBUG :	Language Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Loader Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:27:41]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:27:41]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:27:41]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:27:41]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:27:41]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:27:41]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:41]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:27:41]	DEBUG :	Session Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:27:41]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:27:41]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:27:41]	DEBUG :	Session routines successfully run
[2016-04-01 11:27:41]	DEBUG :	Table Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:27:41]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Email Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Controller Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:41]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:27:41]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:27:41]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:27:41]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:41]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:27:41]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459486663', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
[2016-04-01 11:27:41]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:41]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:41]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:41]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:41]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:41]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:27:41]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:27:41]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:27:41]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:41]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:41]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:41]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:27:41]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:27:41]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:27:41]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:41]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:27:41]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 11:27:41]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:41]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:27:41]	SQL :	SELECT groupname,hdayaudio FROM `1_groups` WHERE bid = '1'
[2016-04-01 11:27:41]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/audio_file.php
[2016-04-01 11:27:41]	DEBUG :	Final output sent to browser
[2016-04-01 11:27:41]	DEBUG :	Total execution time: 0.1493
[2016-04-01 11:27:55]	DEBUG :	Config Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:27:55]	DEBUG :	URI Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Router Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Output Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Input Class Initialized
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:55]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:27:55]	DEBUG :	Language Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Loader Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:27:55]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:27:55]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:27:55]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:27:55]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:27:55]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:27:55]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:55]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:27:55]	DEBUG :	Session Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:27:55]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:27:55]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'a3e1c21880f9c2a73a938170dd324f6a'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:27:55]	SQL :	UPDATE `call_sessions` SET `last_activity` = 1459490275, `session_id` = '761b3306c3133d195e5337a4e81ea114' WHERE session_id = 'a3e1c21880f9c2a73a938170dd324f6a'
[2016-04-01 11:27:55]	DEBUG :	Session routines successfully run
[2016-04-01 11:27:55]	DEBUG :	Table Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:27:55]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Email Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Controller Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:55]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:27:55]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:27:55]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:27:55]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:55]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:27:55]	SQL :	UPDATE `call_sessions` SET `last_activity` = 1459490275, `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:56]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:27:56]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:27:56]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:27:56]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:56]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:56]	SQL :	select	groupname from 1_groups where groupname='VMC technology' and gid!=7
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:56]	SQL :	update prinumbers set status=0 where number='3'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM dummynumber WHERE status='0' AND bid='0' LIMIT 0,1
[2016-04-01 11:27:56]	SQL :	SELECT prinumber FROM 1_groups WHERE gid = '7' 
[2016-04-01 11:27:56]	ERROR :	Severity: Warning  --> Missing argument 2 for Ivrsmodel::updatePri(), called in /var/www/html/newdesigen/system/application/models/groupmodel.php on line 327 and defined /var/www/html/newdesigen/system/application/models/ivrsmodel.php 84
[2016-04-01 11:27:56]	ERROR :	Severity: Notice  --> Undefined variable: status /var/www/html/newdesigen/system/application/models/ivrsmodel.php 87
[2016-04-01 11:27:56]	SQL :	UPDATE dummynumber SET
					status		= ''
					,type		= '0'
					,associateid= '0'
					,bid		= '0'
					WHERE number= '3'
[2016-04-01 11:27:56]	SQL :	UPDATE dummynumber SET
					status		= '1'
					,type		= '0'
					,associateid= '7'
					,bid		= '1'
					WHERE number= '1'
[2016-04-01 11:27:56]	SQL :	UPDATE `1_groups` SET `hdayaudio` = 'H20150930163729.wav', `sameexe` = '1', `recordnotice` = '1', `misscall` = '1', `connectowner` = '1', `pincode` = '1', `allgroup` = '1', `access_reports` = '58', `groupname` = 'VMC technology', `bday` = '{\"Mon\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Tue\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Wed\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Thu\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Fri\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sat\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sun\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"}}', `prinumber` = '1', `rules` = '3', `eid` = '58', `keyword` = 'keyword', `primary_rule` = '1', `record` = '1', `hdaytext` = 'test', `replymessage` = '@name@', `replytoexecutive` = '1', `timeout` = '25', `oneditaction` = 'http://www.dummy.com', `onhangup` = 'http://www.dummy.com', `leadaction` = 'test', `replyattmsg` = '@name@', `oncallaction` = 'http://www.dummy.com', `supportaction` = 'http://www.dummy.com', `supportgrp` = '1', `landingregion` = 'KA', `replytocust_missed` = '1', `replytocust_attended` = '1', `replytocust_repcal` = '1', `replytocust_voice` = '1', `replytocust_voitext` = 'Holiday', `replytocustomer` = '0', `mailalerttowoner` = '0', `groupkey` = 'MV83' WHERE `gid` = '7'
[2016-04-01 11:27:56]	SQL :	UPDATE 1_group_emp SET callcounter='0' WHERE gid='7'
[2016-04-01 11:27:56]	SQL :	SELECT COALESCE(MAX(`sno`),0)+1 as id FROM 1_activitylog
[2016-04-01 11:27:56]	SQL :	INSERT INTO `1_activitylog` (`sno`, `bid`, `uid`, `module_name`, `action`) VALUES ('5673', '1', '1', 'Group Module', 'Updated Group  VMC technology')
[2016-04-01 11:27:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = 1459490275, `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = 1459490275, `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:56]	DEBUG :	Config Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:27:56]	DEBUG :	URI Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Router Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Output Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Input Class Initialized
[2016-04-01 11:27:56]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:56]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:56]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:56]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:56]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:27:56]	DEBUG :	Language Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Loader Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:27:56]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:27:56]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:27:56]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:27:56]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:27:56]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:27:56]	DEBUG :	Session Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:27:56]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:27:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:56]	DEBUG :	Session routines successfully run
[2016-04-01 11:27:56]	DEBUG :	Table Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:27:56]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Email Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Controller Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:27:56]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:27:56]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:27:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:56]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:27:56]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:27:56]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:27:56]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:27:56]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:56]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:27:56]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:56]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:56]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 11:27:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:56]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,30
[2016-04-01 11:27:56]	SQL :	SELECT FOUND_ROWS() as cnt
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='7'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='7'
[2016-04-01 11:27:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 7 GROUP BY DAY(h.starttime)
[2016-04-01 11:27:56]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='13'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='13'
[2016-04-01 11:27:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 13 GROUP BY DAY(h.starttime)
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2016-04-01 11:27:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2016-04-01 11:27:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2016-04-01 11:27:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:27:56]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 11:27:56]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 11:27:56]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:56]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 11:27:56]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 11:27:56]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 11:27:56]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/list_view.php
[2016-04-01 11:27:56]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 11:27:56]	DEBUG :	Final output sent to browser
[2016-04-01 11:27:56]	DEBUG :	Total execution time: 0.3056
[2016-04-01 11:27:59]	DEBUG :	Config Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:27:59]	DEBUG :	URI Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Router Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Output Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Input Class Initialized
[2016-04-01 11:27:59]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:59]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:59]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:59]	DEBUG :	XSS Filtering completed
[2016-04-01 11:27:59]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:27:59]	DEBUG :	Language Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Loader Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:27:59]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:27:59]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:27:59]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:27:59]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:27:59]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:27:59]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:59]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:27:59]	DEBUG :	Session Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:27:59]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:27:59]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:27:59]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:59]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:59]	DEBUG :	Session routines successfully run
[2016-04-01 11:27:59]	DEBUG :	Table Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:27:59]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Email Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Controller Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:27:59]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:27:59]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:27:59]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:59]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:27:59]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:27:59]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:59]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:27:59]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:27:59]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:27:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:59]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:27:59]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:27:59]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:27:59]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:59]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:27:59]	DEBUG :	Model Class Initialized
[2016-04-01 11:27:59]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:59]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:59]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:27:59]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 11:27:59]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:59]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:27:59]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:59]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='7'
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='7'
[2016-04-01 11:27:59]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='1')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2016-04-01 11:27:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:27:59]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2016-04-01 11:27:59]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2016-04-01 11:27:59]	SQL :	SELECT * FROM group_rules
[2016-04-01 11:27:59]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 11:27:59]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_custom_region
[2016-04-01 11:27:59]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2016-04-01 11:27:59]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 11:27:59]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:27:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:27:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 11:27:59]	SQL :	SELECT COALESCE( count( * ) ) AS cnt FROM `1_groups` g
							   left join prinumbers p on g.prinumber=p.number and g.gid=p.associateid
							   where p.bid='1'
[2016-04-01 11:27:59]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 11:27:59]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:27:59]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 11:27:59]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 11:27:59]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 11:27:59]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/form_view.php
[2016-04-01 11:27:59]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 11:27:59]	DEBUG :	Final output sent to browser
[2016-04-01 11:27:59]	DEBUG :	Total execution time: 0.2098
[2016-04-01 11:28:09]	DEBUG :	Config Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:28:09]	DEBUG :	URI Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Router Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Output Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Input Class Initialized
[2016-04-01 11:28:09]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:09]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:09]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:09]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:09]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:28:09]	DEBUG :	Language Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Loader Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:28:09]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:28:09]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:28:09]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:28:09]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:28:09]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:28:09]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:09]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:28:09]	DEBUG :	Session Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:28:09]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:28:09]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:28:09]	DEBUG :	Session routines successfully run
[2016-04-01 11:28:09]	DEBUG :	Table Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:28:09]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Email Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Controller Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:09]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:28:09]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:28:09]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:28:09]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:09]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:28:09]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:09]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:09]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:09]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:09]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:09]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:09]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:28:09]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:28:09]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:28:09]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:09]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:09]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:09]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:28:09]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:28:09]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:28:09]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:28:09]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:28:09]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 11:28:09]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:09]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:28:09]	SQL :	SELECT groupname,hdayaudio FROM `1_groups` WHERE bid = '1'
[2016-04-01 11:28:09]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/audio_file.php
[2016-04-01 11:28:09]	DEBUG :	Final output sent to browser
[2016-04-01 11:28:09]	DEBUG :	Total execution time: 0.0896
[2016-04-01 11:28:15]	DEBUG :	Config Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:28:15]	DEBUG :	URI Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Router Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Output Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Input Class Initialized
[2016-04-01 11:28:15]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:15]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:15]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:15]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:15]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:28:15]	DEBUG :	Language Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Loader Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:28:15]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:28:15]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:28:15]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:28:15]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:28:15]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:28:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:15]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:28:15]	DEBUG :	Session Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:28:15]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:28:15]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:28:15]	DEBUG :	Session routines successfully run
[2016-04-01 11:28:15]	DEBUG :	Table Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:28:15]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Email Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Controller Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:15]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:28:15]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:28:15]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:28:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:15]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:28:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:15]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:28:15]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:28:15]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:28:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:15]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:28:15]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:28:15]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:28:15]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:28:15]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:28:15]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 11:28:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:15]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:28:15]	SQL :	SELECT groupname,greetings FROM `1_groups` WHERE bid = '1'
[2016-04-01 11:28:15]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/add_greeting.php
[2016-04-01 11:28:15]	DEBUG :	Final output sent to browser
[2016-04-01 11:28:15]	DEBUG :	Total execution time: 0.1046
[2016-04-01 11:28:26]	DEBUG :	Config Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:28:26]	DEBUG :	URI Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Router Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Output Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Input Class Initialized
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:26]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:28:26]	DEBUG :	Language Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Loader Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:28:26]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:28:26]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:28:26]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:28:26]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:28:26]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:28:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:26]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:28:26]	DEBUG :	Session Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:28:26]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:28:26]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:28:26]	DEBUG :	Session routines successfully run
[2016-04-01 11:28:26]	DEBUG :	Table Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:28:26]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Email Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Controller Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:28:26]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:28:26]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:28:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:26]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:28:26]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:26]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:28:26]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:28:26]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:28:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:26]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:28:26]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:28:26]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:28:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:28:26]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:28:26]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:28:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:28:26]	SQL :	select	groupname from 1_groups where groupname='VMC technology' and gid!=7
[2016-04-01 11:28:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:26]	SQL :	update prinumbers set status=0 where number='1'
[2016-04-01 11:28:26]	SQL :	SELECT * FROM dummynumber WHERE status='0' AND bid='0' LIMIT 0,1
[2016-04-01 11:28:26]	SQL :	SELECT prinumber FROM 1_groups WHERE gid = '7' 
[2016-04-01 11:28:26]	ERROR :	Severity: Warning  --> Missing argument 2 for Ivrsmodel::updatePri(), called in /var/www/html/newdesigen/system/application/models/groupmodel.php on line 327 and defined /var/www/html/newdesigen/system/application/models/ivrsmodel.php 84
[2016-04-01 11:28:26]	ERROR :	Severity: Notice  --> Undefined variable: status /var/www/html/newdesigen/system/application/models/ivrsmodel.php 87
[2016-04-01 11:28:26]	SQL :	UPDATE dummynumber SET
					status		= ''
					,type		= '0'
					,associateid= '0'
					,bid		= '0'
					WHERE number= '1'
[2016-04-01 11:28:26]	SQL :	UPDATE dummynumber SET
					status		= '1'
					,type		= '0'
					,associateid= '7'
					,bid		= '1'
					WHERE number= '3'
[2016-04-01 11:28:26]	SQL :	UPDATE `1_groups` SET `hdayaudio` = 'H20150930163729.wav', `greetings` = 'G20150930163729.wav', `sameexe` = '1', `recordnotice` = '1', `misscall` = '1', `connectowner` = '1', `pincode` = '1', `allgroup` = '1', `access_reports` = '58', `groupname` = 'VMC technology', `bday` = '{\"Mon\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Tue\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Wed\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Thu\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Fri\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sat\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sun\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"}}', `prinumber` = '3', `rules` = '3', `eid` = '58', `keyword` = 'keyword', `primary_rule` = '1', `record` = '1', `hdaytext` = 'test', `replymessage` = '@name@', `replytoexecutive` = '1', `timeout` = '25', `oneditaction` = 'http://www.dummy.com', `onhangup` = 'http://www.dummy.com', `leadaction` = 'test', `replyattmsg` = '@name@', `oncallaction` = 'http://www.dummy.com', `supportaction` = 'http://www.dummy.com', `supportgrp` = '1', `landingregion` = 'KA', `replytocust_missed` = '1', `replytocust_attended` = '1', `replytocust_repcal` = '1', `replytocust_voice` = '1', `replytocust_voitext` = 'Holiday', `replytocustomer` = '0', `mailalerttowoner` = '0', `groupkey` = 'MV83' WHERE `gid` = '7'
[2016-04-01 11:28:26]	SQL :	UPDATE 1_group_emp SET callcounter='0' WHERE gid='7'
[2016-04-01 11:28:26]	SQL :	SELECT COALESCE(MAX(`sno`),0)+1 as id FROM 1_activitylog
[2016-04-01 11:28:26]	SQL :	INSERT INTO `1_activitylog` (`sno`, `bid`, `uid`, `module_name`, `action`) VALUES ('5674', '1', '1', 'Group Module', 'Updated Group  VMC technology')
[2016-04-01 11:28:26]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:26]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:27]	DEBUG :	Config Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:28:27]	DEBUG :	URI Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Router Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Output Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Input Class Initialized
[2016-04-01 11:28:27]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:27]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:27]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:27]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:27]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:28:27]	DEBUG :	Language Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Loader Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:28:27]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:28:27]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:28:27]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:28:27]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:28:27]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:28:27]	DEBUG :	Session Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:28:27]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:28:27]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:27]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:27]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:27]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:27]	DEBUG :	Session routines successfully run
[2016-04-01 11:28:27]	DEBUG :	Table Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:28:27]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Email Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Controller Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:28:27]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:28:27]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:28:27]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:27]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:27]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:27]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:28:27]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:28:27]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:28:27]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:27]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:27]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:27]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:28:27]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:28:27]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:28:27]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:28:27]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:28:27]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:27]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:27]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:27]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:28:27]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 11:28:27]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:27]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:27]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:27]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,30
[2016-04-01 11:28:27]	SQL :	SELECT FOUND_ROWS() as cnt
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='7'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='7'
[2016-04-01 11:28:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 7 GROUP BY DAY(h.starttime)
[2016-04-01 11:28:27]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='13'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='13'
[2016-04-01 11:28:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 13 GROUP BY DAY(h.starttime)
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2016-04-01 11:28:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2016-04-01 11:28:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2016-04-01 11:28:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:28:27]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:27]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:27]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 11:28:27]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 11:28:27]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:27]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 11:28:27]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 11:28:27]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 11:28:27]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/list_view.php
[2016-04-01 11:28:27]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 11:28:27]	DEBUG :	Final output sent to browser
[2016-04-01 11:28:27]	DEBUG :	Total execution time: 0.3128
[2016-04-01 11:28:30]	DEBUG :	Config Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Hooks Class Initialized
[2016-04-01 11:28:30]	DEBUG :	URI Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Router Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Output Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Input Class Initialized
[2016-04-01 11:28:30]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:30]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:30]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:30]	DEBUG :	XSS Filtering completed
[2016-04-01 11:28:30]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 11:28:30]	DEBUG :	Language Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Loader Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Helper loaded: url_helper
[2016-04-01 11:28:30]	DEBUG :	Helper loaded: form_helper
[2016-04-01 11:28:30]	DEBUG :	Helper loaded: html_helper
[2016-04-01 11:28:30]	DEBUG :	Helper loaded: email_helper
[2016-04-01 11:28:30]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 11:28:30]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 11:28:30]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:30]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 11:28:30]	DEBUG :	Session Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Helper loaded: string_helper
[2016-04-01 11:28:30]	DEBUG :	Encrypt Class Initialized
[2016-04-01 11:28:30]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 11:28:30]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:30]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:30]	DEBUG :	Session routines successfully run
[2016-04-01 11:28:30]	DEBUG :	Table Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Pagination Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 11:28:30]	DEBUG :	Form Validation Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Email Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Controller Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 11:28:30]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 11:28:30]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 11:28:30]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:30]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 11:28:30]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459490275', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '761b3306c3133d195e5337a4e81ea114'
[2016-04-01 11:28:30]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:30]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 11:28:30]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 11:28:30]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 11:28:30]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:30]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:30]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:30]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 11:28:30]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 11:28:30]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 11:28:30]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:28:30]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 11:28:30]	DEBUG :	Model Class Initialized
[2016-04-01 11:28:30]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:30]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:28:30]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 11:28:30]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 11:28:30]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:30]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 11:28:30]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:30]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='7'
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='7'
[2016-04-01 11:28:30]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='3')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2016-04-01 11:28:30]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 11:28:30]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2016-04-01 11:28:30]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2016-04-01 11:28:30]	SQL :	SELECT * FROM group_rules
[2016-04-01 11:28:30]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 11:28:30]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_custom_region
[2016-04-01 11:28:30]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2016-04-01 11:28:30]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 11:28:30]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 11:28:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 11:28:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 11:28:30]	SQL :	SELECT COALESCE( count( * ) ) AS cnt FROM `1_groups` g
							   left join prinumbers p on g.prinumber=p.number and g.gid=p.associateid
							   where p.bid='1'
[2016-04-01 11:28:30]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 11:28:30]	DEBUG :	Database Driver Class Initialized
[2016-04-01 11:28:30]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 11:28:30]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 11:28:30]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 11:28:30]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/form_view.php
[2016-04-01 11:28:30]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 11:28:30]	DEBUG :	Final output sent to browser
[2016-04-01 11:28:30]	DEBUG :	Total execution time: 0.1909
[2016-04-01 15:14:24]	DEBUG :	Config Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Hooks Class Initialized
[2016-04-01 15:14:24]	DEBUG :	URI Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Router Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Output Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Input Class Initialized
[2016-04-01 15:14:24]	DEBUG :	XSS Filtering completed
[2016-04-01 15:14:24]	DEBUG :	XSS Filtering completed
[2016-04-01 15:14:24]	DEBUG :	XSS Filtering completed
[2016-04-01 15:14:24]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 15:14:24]	DEBUG :	Language Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Loader Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Helper loaded: url_helper
[2016-04-01 15:14:24]	DEBUG :	Helper loaded: form_helper
[2016-04-01 15:14:24]	DEBUG :	Helper loaded: html_helper
[2016-04-01 15:14:24]	DEBUG :	Helper loaded: email_helper
[2016-04-01 15:14:24]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 15:14:24]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 15:14:24]	DEBUG :	Database Driver Class Initialized
[2016-04-01 15:14:24]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 15:14:24]	DEBUG :	Session Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Helper loaded: string_helper
[2016-04-01 15:14:24]	DEBUG :	Encrypt Class Initialized
[2016-04-01 15:14:24]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'b0ff239dd027ce3830ce8ffa75dda435'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 15:14:24]	DEBUG :	Session routines successfully run
[2016-04-01 15:14:24]	DEBUG :	Table Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Pagination Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 15:14:24]	DEBUG :	Form Validation Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Email Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Controller Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 15:14:24]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 15:14:24]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 15:14:24]	DEBUG :	Database Driver Class Initialized
[2016-04-01 15:14:24]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 15:14:24]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459500920', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'b0ff239dd027ce3830ce8ffa75dda435'
[2016-04-01 15:14:24]	DEBUG :	Database Driver Class Initialized
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 15:14:24]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 15:14:24]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 15:14:24]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 15:14:24]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 15:14:24]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 15:14:24]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 15:14:24]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 15:14:24]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 15:14:24]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 15:14:24]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 15:14:24]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 15:14:24]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 15:14:24]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 15:14:24]	DEBUG :	Model Class Initialized
[2016-04-01 15:14:24]	DEBUG :	Database Driver Class Initialized
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 15:14:24]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 15:14:24]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 15:14:24]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 15:14:24]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 15:14:24]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 15:14:24]	DEBUG :	Database Driver Class Initialized
[2016-04-01 15:14:24]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2016-04-01 15:14:24]	DEBUG :	Database Driver Class Initialized
[2016-04-01 15:14:24]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='7'
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='7'
[2016-04-01 15:14:24]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='3')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2016-04-01 15:14:24]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 15:14:24]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2016-04-01 15:14:24]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2016-04-01 15:14:24]	SQL :	SELECT * FROM group_rules
[2016-04-01 15:14:24]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 15:14:24]	DEBUG :	Database Driver Class Initialized
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 15:14:24]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 15:14:24]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_custom_region
[2016-04-01 15:14:24]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2016-04-01 15:14:24]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 15:14:24]	DEBUG :	Database Driver Class Initialized
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 15:14:24]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 15:14:24]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 15:14:24]	SQL :	SELECT COALESCE( count( * ) ) AS cnt FROM `1_groups` g
							   left join prinumbers p on g.prinumber=p.number and g.gid=p.associateid
							   where p.bid='1'
[2016-04-01 15:14:24]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 15:14:24]	DEBUG :	Database Driver Class Initialized
[2016-04-01 15:14:24]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 15:14:24]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 15:14:24]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 15:14:24]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/form_view.php
[2016-04-01 15:14:24]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 15:14:24]	DEBUG :	Final output sent to browser
[2016-04-01 15:14:24]	DEBUG :	Total execution time: 0.1381
[2016-04-01 17:06:54]	DEBUG :	Config Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Hooks Class Initialized
[2016-04-01 17:06:54]	DEBUG :	URI Class Initialized
[2016-04-01 17:06:54]	DEBUG :	No URI present. Default controller set.
[2016-04-01 17:06:54]	DEBUG :	Router Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Output Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Input Class Initialized
[2016-04-01 17:06:54]	DEBUG :	XSS Filtering completed
[2016-04-01 17:06:54]	DEBUG :	XSS Filtering completed
[2016-04-01 17:06:54]	DEBUG :	XSS Filtering completed
[2016-04-01 17:06:54]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 17:06:54]	DEBUG :	Language Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Loader Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: url_helper
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: form_helper
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: html_helper
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: email_helper
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 17:06:54]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:06:54]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 17:06:54]	DEBUG :	Session Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: string_helper
[2016-04-01 17:06:54]	DEBUG :	Encrypt Class Initialized
[2016-04-01 17:06:54]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 17:06:54]	DEBUG :	Session routines successfully run
[2016-04-01 17:06:54]	DEBUG :	Table Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Pagination Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 17:06:54]	DEBUG :	Form Validation Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Email Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Controller Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 17:06:54]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 17:06:54]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 17:06:54]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:06:54]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 17:06:54]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:06:54]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:06:54]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:06:54]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:06:54]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:06:54]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:06:54]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 17:06:54]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 17:06:54]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:06:54]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:06:54]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:06:54]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 17:06:54]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 17:06:54]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 17:06:54]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:06:54]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 17:06:54]	DEBUG :	Config Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Hooks Class Initialized
[2016-04-01 17:06:54]	DEBUG :	URI Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Router Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Output Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Input Class Initialized
[2016-04-01 17:06:54]	DEBUG :	XSS Filtering completed
[2016-04-01 17:06:54]	DEBUG :	XSS Filtering completed
[2016-04-01 17:06:54]	DEBUG :	XSS Filtering completed
[2016-04-01 17:06:54]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 17:06:54]	DEBUG :	Language Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Loader Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: url_helper
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: form_helper
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: html_helper
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: email_helper
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 17:06:54]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:06:54]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 17:06:54]	DEBUG :	Session Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Helper loaded: string_helper
[2016-04-01 17:06:54]	DEBUG :	Encrypt Class Initialized
[2016-04-01 17:06:54]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 17:06:54]	DEBUG :	Session routines successfully run
[2016-04-01 17:06:54]	DEBUG :	Table Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Pagination Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 17:06:54]	DEBUG :	Form Validation Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Email Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Controller Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 17:06:54]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 17:06:54]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 17:06:54]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:06:54]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 17:06:54]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:06:54]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:06:54]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:06:54]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:06:54]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:06:54]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:06:54]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 17:06:54]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 17:06:54]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 17:06:54]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:06:54]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:06:54]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:06:54]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 17:06:54]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 17:06:54]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 17:06:54]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:06:54]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	DEBUG :	Model Class Initialized
[2016-04-01 17:06:54]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:06:54]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:06:54]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 17:06:54]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:06:54]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 17:06:54]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 17:06:54]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 17:06:54]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/dashboard.php
[2016-04-01 17:06:54]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 17:06:54]	DEBUG :	Final output sent to browser
[2016-04-01 17:06:54]	DEBUG :	Total execution time: 0.2024
[2016-04-01 17:07:04]	DEBUG :	Config Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Hooks Class Initialized
[2016-04-01 17:07:04]	DEBUG :	URI Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Router Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Output Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Input Class Initialized
[2016-04-01 17:07:04]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:04]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:04]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:04]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:04]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 17:07:04]	DEBUG :	Language Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Loader Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Helper loaded: url_helper
[2016-04-01 17:07:04]	DEBUG :	Helper loaded: form_helper
[2016-04-01 17:07:04]	DEBUG :	Helper loaded: html_helper
[2016-04-01 17:07:04]	DEBUG :	Helper loaded: email_helper
[2016-04-01 17:07:04]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 17:07:04]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 17:07:04]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:04]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 17:07:04]	DEBUG :	Session Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Helper loaded: string_helper
[2016-04-01 17:07:04]	DEBUG :	Encrypt Class Initialized
[2016-04-01 17:07:04]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 17:07:04]	DEBUG :	Session routines successfully run
[2016-04-01 17:07:04]	DEBUG :	Table Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Pagination Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 17:07:04]	DEBUG :	Form Validation Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Email Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Controller Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 17:07:04]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 17:07:04]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 17:07:04]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:04]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 17:07:04]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:04]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:04]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:04]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:04]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:04]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:04]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 17:07:04]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 17:07:04]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 17:07:04]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:04]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:04]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:04]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 17:07:04]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 17:07:04]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 17:07:04]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:04]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:04]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:04]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:04]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:04]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:04]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:04]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:04]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:05]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:05]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:05]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:05]	SQL :	SELECT SQL_CALC_FOUND_ROWS h.* FROM 1_ivrshistory h
				LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
				WHERE h.bid='1' 
				ORDER BY h.datetime DESC
				LIMIT 0,30
[2016-04-01 17:07:05]	SQL :	SELECT FOUND_ROWS() as cnt
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='16'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='16') as t ORDER BY display_order ASC
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='09028620221329998972'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='09028620221329998972'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='09028620221329998768'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='09028620221329998768'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='72598031081344334550'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='72598031081344334550'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='72598031081344334675'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='72598031081344334675'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='72598031081344336134'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='72598031081344336134'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='72598031081344336189'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='72598031081344336189'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='72598031081344338060'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='72598031081344338060'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='72598031081344338112'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='72598031081344338112'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='90607685251323166494'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='90607685251323166494'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='90607685251323166514'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='90607685251323166514'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='90607685251323167673'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='90607685251323167673'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='90607685251323167688'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='90607685251323167688'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='90607685251323169012'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='90607685251323169012'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='90607685251323169758'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='90607685251323169758'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='90607685251323171856'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='90607685251323171856'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='90607685251323172298'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='90607685251323172298'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='90607685251323928323'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='90607685251323928323'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='94119555261329913115'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='94119555261329913115'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='94119555261329913130'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='94119555261329913130'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='94119555261329913141'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='94119555261329913141'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='94119555261329913180'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='94119555261329913180'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='94119555261329913512'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='94119555261329913512'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='94119555261329914038'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='94119555261329914038'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='94119555261329914049'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='94119555261329914049'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='94119555261329917520'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='94119555261329917520'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='94119555261329917532'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='94119555261329917532'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='94119555261329917544'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='94119555261329917544'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='96992268021325829276'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='96992268021325829276'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='96992268021325829295'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='96992268021325829295'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select h.*,l.landingnumber as landingnumber,e.eid,
					  REPLACE(h.options,',','<br>->') as options,e.empname as employee,
					  i.title as ivrstitle
					  from 1_ivrshistory h
					  LEFT JOIN 1_employee e on h.eid=e.eid
					  LEFT JOIN 1_ivrs i on i.ivrsid=h.ivrsid
					  LEFT JOIN prinumbers l on i.prinumber=l.number
					  WHERE h.hid='96992268021325829314'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='16'
				AND dataid='96992268021325829314'
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='16'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='16') as t ORDER BY display_order ASC
[2016-04-01 17:07:05]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='16'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='16'
[2016-04-01 17:07:05]	SQL :	select * from 1_ivrs WHERE bid = '1' AND status='1'
[2016-04-01 17:07:05]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:05]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:05]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 17:07:05]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 17:07:05]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:05]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 17:07:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 17:07:05]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 17:07:05]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/list_view.php
[2016-04-01 17:07:05]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 17:07:05]	DEBUG :	Final output sent to browser
[2016-04-01 17:07:05]	DEBUG :	Total execution time: 0.3940
[2016-04-01 17:07:15]	DEBUG :	Config Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Hooks Class Initialized
[2016-04-01 17:07:15]	DEBUG :	URI Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Router Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Output Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Input Class Initialized
[2016-04-01 17:07:15]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:15]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:15]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:15]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:15]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 17:07:15]	DEBUG :	Language Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Loader Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Helper loaded: url_helper
[2016-04-01 17:07:15]	DEBUG :	Helper loaded: form_helper
[2016-04-01 17:07:15]	DEBUG :	Helper loaded: html_helper
[2016-04-01 17:07:15]	DEBUG :	Helper loaded: email_helper
[2016-04-01 17:07:15]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 17:07:15]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 17:07:15]	DEBUG :	Session Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Helper loaded: string_helper
[2016-04-01 17:07:15]	DEBUG :	Encrypt Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 17:07:15]	SQL :	DELETE FROM `call_sessions`
WHERE `last_activity` < 1459503435
[2016-04-01 17:07:15]	DEBUG :	Session garbage collection performed.
[2016-04-01 17:07:15]	DEBUG :	Session routines successfully run
[2016-04-01 17:07:15]	DEBUG :	Table Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Pagination Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 17:07:15]	DEBUG :	Form Validation Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Email Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Controller Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 17:07:15]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 17:07:15]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 17:07:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:15]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 17:07:15]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 17:07:15]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 17:07:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 17:07:15]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 17:07:15]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 17:07:15]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:15]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Zip Compression Class Initialized
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:15]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:15]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:15]	SQL :	SELECT GROUP_CONCAT(lv SEPARATOR ',') as eid FROM (SELECT @pv:=(SELECT GROUP_CONCAT(eid SEPARATOR ',') FROM 1_employee WHERE reportto IN (@pv)) AS lv FROM 1_employee JOIN (SELECT @pv:=1)tmp WHERE reportto IN (@pv)) z 
[2016-04-01 17:07:15]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT SQL_CALC_FOUND_ROWS a.callid,a.hid,
					a.assignto,a.callback,a.source,
					if(a.pulse=0,'1','0') as missed,l.lead_status FROM 
					1_callhistory a
					LEFT JOIN 1_leads l ON a.leadid = l.leadid 
					LEFT JOIN 1_groups d on a.gid=d.gid 
					  
					WHERE a.status!=2  AND a.pulse!=0 
					ORDER BY a.starttime DESC limit 0,30
[2016-04-01 17:07:15]	SQL :	SELECT FOUND_ROWS() as cnt
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6') as t ORDER BY display_order ASC
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='1.25E+002'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='1.25E+002'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='1.26E+002'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='1.26E+002'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='1.24E+002'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='1.24E+002'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='096541004011353999093'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='096541004011353999093'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='6.00E+000'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='6.00E+000'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='090350316601353566657'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='090350316601353566657'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='4.00E+000'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='4.00E+000'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='093797223301353561091'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='093797223301353561091'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='5.00E+000'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='5.00E+000'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6') as t ORDER BY display_order ASC
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:15]	SQL :	SELECT g.gid,g.groupname FROM `1_groups` g  WHERE g.status = 1 
[2016-04-01 17:07:15]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 17:07:15]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='6'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='6'
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:15]	SQL :	SELECT g.gid,g.groupname FROM `1_groups` g  WHERE g.status = 1 
[2016-04-01 17:07:15]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 17:07:15]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 17:07:15]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:15]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 17:07:15]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 17:07:15]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 17:07:15]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/list_view.php
[2016-04-01 17:07:15]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 17:07:15]	DEBUG :	Final output sent to browser
[2016-04-01 17:07:15]	DEBUG :	Total execution time: 0.4585
[2016-04-01 17:07:18]	DEBUG :	Config Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Hooks Class Initialized
[2016-04-01 17:07:18]	DEBUG :	URI Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Router Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Output Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Input Class Initialized
[2016-04-01 17:07:18]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:18]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:18]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:18]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:18]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 17:07:18]	DEBUG :	Language Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Loader Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Helper loaded: url_helper
[2016-04-01 17:07:18]	DEBUG :	Helper loaded: form_helper
[2016-04-01 17:07:18]	DEBUG :	Helper loaded: html_helper
[2016-04-01 17:07:18]	DEBUG :	Helper loaded: email_helper
[2016-04-01 17:07:18]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 17:07:18]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 17:07:18]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:18]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 17:07:18]	DEBUG :	Session Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Helper loaded: string_helper
[2016-04-01 17:07:18]	DEBUG :	Encrypt Class Initialized
[2016-04-01 17:07:18]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 17:07:18]	DEBUG :	Session routines successfully run
[2016-04-01 17:07:18]	DEBUG :	Table Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Pagination Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 17:07:18]	DEBUG :	Form Validation Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Email Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Controller Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:18]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 17:07:18]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 17:07:18]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 17:07:18]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:18]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 17:07:18]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:19]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 17:07:19]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 17:07:19]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 17:07:19]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 17:07:19]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 17:07:19]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 17:07:19]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:19]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 17:07:19]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:19]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:19]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:19]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:19]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:19]	DEBUG :	Zip Compression Class Initialized
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:19]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:19]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:19]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:19]	SQL :	SELECT GROUP_CONCAT(lv SEPARATOR ',') as eid FROM (SELECT @pv:=(SELECT GROUP_CONCAT(eid SEPARATOR ',') FROM 1_employee WHERE reportto IN (@pv)) AS lv FROM 1_employee JOIN (SELECT @pv:=1)tmp WHERE reportto IN (@pv)) z 
[2016-04-01 17:07:19]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT SQL_CALC_FOUND_ROWS a.callid,a.hid,
					a.assignto,a.callback,a.source,
					if(a.pulse=0,'1','0') as missed,l.lead_status FROM 
					1_callhistory a
					LEFT JOIN 1_leads l ON a.leadid = l.leadid 
					LEFT JOIN 1_groups d on a.gid=d.gid 
					  
					WHERE a.status!=2  AND a.pulse=0 
					ORDER BY a.starttime DESC limit 0,30
[2016-04-01 17:07:19]	SQL :	SELECT FOUND_ROWS() as cnt
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6') as t ORDER BY display_order ASC
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6') as t ORDER BY display_order ASC
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:19]	SQL :	SELECT g.gid,g.groupname FROM `1_groups` g  WHERE g.status = 1 
[2016-04-01 17:07:19]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 17:07:19]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='6'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='6'
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:19]	SQL :	SELECT g.gid,g.groupname FROM `1_groups` g  WHERE g.status = 1 
[2016-04-01 17:07:19]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 17:07:19]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 17:07:19]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:19]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 17:07:19]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 17:07:19]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 17:07:19]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/list_view.php
[2016-04-01 17:07:19]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 17:07:19]	DEBUG :	Final output sent to browser
[2016-04-01 17:07:19]	DEBUG :	Total execution time: 1.2793
[2016-04-01 17:07:22]	DEBUG :	Config Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Hooks Class Initialized
[2016-04-01 17:07:22]	DEBUG :	URI Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Router Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Output Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Input Class Initialized
[2016-04-01 17:07:22]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:22]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:22]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:22]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:22]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 17:07:22]	DEBUG :	Language Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Loader Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Helper loaded: url_helper
[2016-04-01 17:07:22]	DEBUG :	Helper loaded: form_helper
[2016-04-01 17:07:22]	DEBUG :	Helper loaded: html_helper
[2016-04-01 17:07:22]	DEBUG :	Helper loaded: email_helper
[2016-04-01 17:07:22]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 17:07:22]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 17:07:22]	DEBUG :	Session Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Helper loaded: string_helper
[2016-04-01 17:07:22]	DEBUG :	Encrypt Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 17:07:22]	DEBUG :	Session routines successfully run
[2016-04-01 17:07:22]	DEBUG :	Table Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Pagination Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 17:07:22]	DEBUG :	Form Validation Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Email Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Controller Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 17:07:22]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 17:07:22]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 17:07:22]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:22]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 17:07:22]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 17:07:22]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 17:07:22]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 17:07:22]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 17:07:22]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 17:07:22]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:22]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Zip Compression Class Initialized
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:22]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:22]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:22]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:22]	SQL :	SELECT GROUP_CONCAT(lv SEPARATOR ',') as eid FROM (SELECT @pv:=(SELECT GROUP_CONCAT(eid SEPARATOR ',') FROM 1_employee WHERE reportto IN (@pv)) AS lv FROM 1_employee JOIN (SELECT @pv:=1)tmp WHERE reportto IN (@pv)) z 
[2016-04-01 17:07:22]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT SQL_CALC_FOUND_ROWS a.callid,a.hid,
					a.assignto,a.callback,a.source,
					if(a.pulse=0,'1','0') as missed,l.lead_status FROM 
					1_callhistory a
					LEFT JOIN 1_leads l ON a.leadid = l.leadid 
					LEFT JOIN 1_groups d on a.gid=d.gid 
					  
					WHERE a.status!=2  AND (a.callername!='' OR a.callerbusiness!='' OR a.calleraddress!='' OR a.caller_email!='' OR a.remark!='') 
					ORDER BY a.starttime DESC limit 0,30
[2016-04-01 17:07:22]	SQL :	SELECT FOUND_ROWS() as cnt
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6') as t ORDER BY display_order ASC
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='1.26E+002'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='1.26E+002'
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='6.00E+000'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='6.00E+000'
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT a.*,l.number as lead,p.landingnumber as landingnumber,s.number as suptkt,
					b.bid,b.businessname,ac.empname AS assignto,
					a.assignto AS asto,a.callback,
					IF(a.pulse>0,ceil(a.pulse/60),a.pulse) AS pulse,
					a.pulse AS duration,c.empnumber,
					c.empname as eid,c.eid AS empid,d.eid AS geid ,
					d.groupname AS gid,d.gid AS grid,c.empemail,
					IF(rg.area!='',area,'N/A') AS region 
					FROM 1_callhistory a
					LEFT JOIN 1_employee c ON a.eid=c.eid
					LEFT JOIN 1_groups d ON a.gid=d.gid
					LEFT JOIN prinumbers p ON d.prinumber=p.number
					LEFT JOIN 1_employee ac ON a.assignto=ac.eid
					LEFT JOIN 1_leads l ON l.leadid=a.leadid 
					LEFT JOIN 1_support_tickets s ON s.tktid=a.tktid
					LEFT JOIN business b ON a.bid=b.bid
					LEFT JOIN series_list1 rg ON 
					(rg.scode = substr(a.callfrom,1,4)
					OR rg.scode = substr(a.callfrom,1,3)
					OR rg.scode = substr(a.callfrom,1,2))
					WHERE a.callid='096541004011353999093'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='6'
				AND dataid='096541004011353999093'
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='6') as t ORDER BY display_order ASC
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:22]	SQL :	SELECT g.gid,g.groupname FROM `1_groups` g  WHERE g.status = 1 
[2016-04-01 17:07:22]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 17:07:22]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='6'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='6'
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:22]	SQL :	SELECT g.gid,g.groupname FROM `1_groups` g  WHERE g.status = 1 
[2016-04-01 17:07:22]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 17:07:22]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 17:07:22]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:22]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 17:07:22]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 17:07:22]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 17:07:22]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/list_view.php
[2016-04-01 17:07:22]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 17:07:22]	DEBUG :	Final output sent to browser
[2016-04-01 17:07:22]	DEBUG :	Total execution time: 0.1767
[2016-04-01 17:07:25]	DEBUG :	Config Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Hooks Class Initialized
[2016-04-01 17:07:25]	DEBUG :	URI Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Router Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Output Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Input Class Initialized
[2016-04-01 17:07:25]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:25]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:25]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:25]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:25]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 17:07:25]	DEBUG :	Language Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Loader Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Helper loaded: url_helper
[2016-04-01 17:07:25]	DEBUG :	Helper loaded: form_helper
[2016-04-01 17:07:25]	DEBUG :	Helper loaded: html_helper
[2016-04-01 17:07:25]	DEBUG :	Helper loaded: email_helper
[2016-04-01 17:07:25]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 17:07:25]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 17:07:25]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:25]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 17:07:25]	DEBUG :	Session Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Helper loaded: string_helper
[2016-04-01 17:07:25]	DEBUG :	Encrypt Class Initialized
[2016-04-01 17:07:25]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 17:07:25]	DEBUG :	Session routines successfully run
[2016-04-01 17:07:25]	DEBUG :	Table Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Pagination Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 17:07:25]	DEBUG :	Form Validation Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Email Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Controller Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 17:07:25]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 17:07:25]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 17:07:25]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:25]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 17:07:25]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:25]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:25]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:25]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:25]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:25]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:25]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 17:07:25]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 17:07:25]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 17:07:25]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:25]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:25]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:25]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 17:07:25]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 17:07:25]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 17:07:25]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:25]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Zip Compression Class Initialized
[2016-04-01 17:07:25]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:25]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:25]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:25]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:25]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:25]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 17:07:25]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:25]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:25]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:25]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:25]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:25]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:25]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:25]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2016-04-01 17:07:25]	SQL :	SELECT * FROM 1_c2c a 
				LEFT JOIN 1_groups d on a.gid=d.gid 
				WHERE 1 
[2016-04-01 17:07:26]	SQL :	SELECT FOUND_ROWS() as cnt
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='25'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='25') as t ORDER BY display_order ASC
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT c.*,e.empname,g.groupname FROM 1_c2c c 
					LEFT JOIN 1_employee e ON c.eid = e.eid 
					LEFT JOIN 1_groups g ON c.gid = g.gid 
					WHERE c.callid='88800091601354114587'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='25'
				AND dataid='88800091601354114587'
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT c.*,e.empname,g.groupname FROM 1_c2c c 
					LEFT JOIN 1_employee e ON c.eid = e.eid 
					LEFT JOIN 1_groups g ON c.gid = g.gid 
					WHERE c.callid='88800091601354114859'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='25'
				AND dataid='88800091601354114859'
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT c.*,e.empname,g.groupname FROM 1_c2c c 
					LEFT JOIN 1_employee e ON c.eid = e.eid 
					LEFT JOIN 1_groups g ON c.gid = g.gid 
					WHERE c.callid='88800091601354114958'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='25'
				AND dataid='88800091601354114958'
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT c.*,e.empname,g.groupname FROM 1_c2c c 
					LEFT JOIN 1_employee e ON c.eid = e.eid 
					LEFT JOIN 1_groups g ON c.gid = g.gid 
					WHERE c.callid='88800091601354115005'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='25'
				AND dataid='88800091601354115005'
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT c.*,e.empname,g.groupname FROM 1_c2c c 
					LEFT JOIN 1_employee e ON c.eid = e.eid 
					LEFT JOIN 1_groups g ON c.gid = g.gid 
					WHERE c.callid='88800091601354164282'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='25'
				AND dataid='88800091601354164282'
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT c.*,e.empname,g.groupname FROM 1_c2c c 
					LEFT JOIN 1_employee e ON c.eid = e.eid 
					LEFT JOIN 1_groups g ON c.gid = g.gid 
					WHERE c.callid='88800091601354164324'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='25'
				AND dataid='88800091601354164324'
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT c.*,e.empname,g.groupname FROM 1_c2c c 
					LEFT JOIN 1_employee e ON c.eid = e.eid 
					LEFT JOIN 1_groups g ON c.gid = g.gid 
					WHERE c.callid='88800091601354186749'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='25'
				AND dataid='88800091601354186749'
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT c.*,e.empname,g.groupname FROM 1_c2c c 
					LEFT JOIN 1_employee e ON c.eid = e.eid 
					LEFT JOIN 1_groups g ON c.gid = g.gid 
					WHERE c.callid='97390971391354114808'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='25'
				AND dataid='97390971391354114808'
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='25'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='25') as t ORDER BY display_order ASC
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:26]	SQL :	SELECT g.gid,g.groupname FROM `1_groups` g  WHERE g.status = 1 
[2016-04-01 17:07:26]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2016-04-01 17:07:26]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 17:07:26]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:26]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 17:07:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 17:07:26]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 17:07:26]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/list_view.php
[2016-04-01 17:07:26]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 17:07:26]	DEBUG :	Final output sent to browser
[2016-04-01 17:07:26]	DEBUG :	Total execution time: 0.4199
[2016-04-01 17:07:31]	DEBUG :	Config Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Hooks Class Initialized
[2016-04-01 17:07:31]	DEBUG :	URI Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Router Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Output Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Input Class Initialized
[2016-04-01 17:07:31]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:31]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:31]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:31]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:31]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 17:07:31]	DEBUG :	Language Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Loader Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Helper loaded: url_helper
[2016-04-01 17:07:31]	DEBUG :	Helper loaded: form_helper
[2016-04-01 17:07:31]	DEBUG :	Helper loaded: html_helper
[2016-04-01 17:07:31]	DEBUG :	Helper loaded: email_helper
[2016-04-01 17:07:31]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 17:07:31]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 17:07:31]	DEBUG :	Session Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Helper loaded: string_helper
[2016-04-01 17:07:31]	DEBUG :	Encrypt Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 17:07:31]	DEBUG :	Session routines successfully run
[2016-04-01 17:07:31]	DEBUG :	Table Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Pagination Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 17:07:31]	DEBUG :	Form Validation Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Email Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Controller Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 17:07:31]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 17:07:31]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 17:07:31]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:31]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 17:07:31]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 17:07:31]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 17:07:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:31]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 17:07:31]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 17:07:31]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 17:07:31]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:31]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:31]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:31]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:31]	SQL :	SELECT SQL_CALC_FOUND_ROWS p.title,r.* FROM 1_pbxreport r
				LEFT JOIN 1_pbx p on r.pbxid=p.pbxid
				WHERE 1 
				ORDER BY r.starttime DESC
				limit 0,30
[2016-04-01 17:07:31]	SQL :	SELECT FOUND_ROWS() as cnt
[2016-04-01 17:07:31]	SQL :	SELECT SQL_CALC_FOUND_ROWS p.title,r.* FROM 1_pbxreport r
				LEFT JOIN 1_pbx p on r.pbxid=p.pbxid
				WHERE 1 
				ORDER BY r.starttime DESC
				limit 0,30
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='24'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='24') as t ORDER BY display_order ASC
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80490830791331635124'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80490830791331635124'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80236011791336695008'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80236011791336695008'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80517400281336745171'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80517400281336745171'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80490830791331634962'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80490830791331634962'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80517400281336702839'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80517400281336702839'
[2016-04-01 17:07:31]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:31]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:31]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='12046168001328183020'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='12046168001328183020'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='12046168001328183319'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='12046168001328183319'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='72598031081344332196'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='72598031081344332196'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='72598031081344332232'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='72598031081344332232'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='72598031081344332154'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='72598031081344332154'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80517400281336745186'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80517400281336745186'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80517400281336827306'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80517400281336827306'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431344331993'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431344331993'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431344332122'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431344332122'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347532748'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347532748'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347532847'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347532847'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347533042'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347533042'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347533554'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347533554'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347533608'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347533608'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347533687'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347533687'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347533864'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347533864'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347534020'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347534020'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431350534522'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431350534522'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431350534599'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431350534599'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431350534712'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431350534712'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431350534771'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431350534771'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431350534880'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431350534880'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='81230400561336732583'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='81230400561336732583'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='81230400561336732712'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='81230400561336732712'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='81473756871328536735'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='81473756871328536735'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='24'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='24') as t ORDER BY display_order ASC
[2016-04-01 17:07:32]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='24'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='24'
[2016-04-01 17:07:32]	SQL :	select * from 1_pbx WHERE bid = '1' AND status='1'
[2016-04-01 17:07:32]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 17:07:32]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:32]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 17:07:32]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 17:07:32]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 17:07:32]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/list_view.php
[2016-04-01 17:07:32]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 17:07:32]	DEBUG :	Final output sent to browser
[2016-04-01 17:07:32]	DEBUG :	Total execution time: 0.2851
[2016-04-01 17:07:36]	DEBUG :	Config Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Hooks Class Initialized
[2016-04-01 17:07:36]	DEBUG :	URI Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Router Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Output Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Input Class Initialized
[2016-04-01 17:07:36]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:36]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:36]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:36]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:36]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 17:07:36]	DEBUG :	Language Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Loader Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Helper loaded: url_helper
[2016-04-01 17:07:36]	DEBUG :	Helper loaded: form_helper
[2016-04-01 17:07:36]	DEBUG :	Helper loaded: html_helper
[2016-04-01 17:07:36]	DEBUG :	Helper loaded: email_helper
[2016-04-01 17:07:36]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 17:07:36]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 17:07:36]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:36]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 17:07:36]	DEBUG :	Session Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Helper loaded: string_helper
[2016-04-01 17:07:36]	DEBUG :	Encrypt Class Initialized
[2016-04-01 17:07:36]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 17:07:36]	DEBUG :	Session routines successfully run
[2016-04-01 17:07:36]	DEBUG :	Table Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Pagination Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 17:07:36]	DEBUG :	Form Validation Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Email Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Controller Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 17:07:36]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 17:07:36]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 17:07:36]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:36]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 17:07:36]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:36]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:36]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:36]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:36]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:36]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:36]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 17:07:36]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 17:07:36]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 17:07:36]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:36]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:36]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:36]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 17:07:36]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 17:07:36]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 17:07:36]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:36]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:36]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:36]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:36]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:36]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:36]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:36]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:36]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:6:\"refurl\";s:43:\"http://localhost/newdesigen/PBXReport/all/0\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:36]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:36]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='24'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='24') as t ORDER BY display_order ASC
[2016-04-01 17:07:36]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:36]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80490830791331635124'
[2016-04-01 17:07:36]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80490830791331635124'
[2016-04-01 17:07:36]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 17:07:36]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:36]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 17:07:36]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 17:07:36]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 17:07:36]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/form_view.php
[2016-04-01 17:07:36]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 17:07:36]	DEBUG :	Final output sent to browser
[2016-04-01 17:07:36]	DEBUG :	Total execution time: 0.1357
[2016-04-01 17:07:43]	DEBUG :	Config Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Hooks Class Initialized
[2016-04-01 17:07:43]	DEBUG :	URI Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Router Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Output Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Input Class Initialized
[2016-04-01 17:07:43]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:43]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:43]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:43]	DEBUG :	XSS Filtering completed
[2016-04-01 17:07:43]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-01 17:07:43]	DEBUG :	Language Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Loader Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Helper loaded: url_helper
[2016-04-01 17:07:43]	DEBUG :	Helper loaded: form_helper
[2016-04-01 17:07:43]	DEBUG :	Helper loaded: html_helper
[2016-04-01 17:07:43]	DEBUG :	Helper loaded: email_helper
[2016-04-01 17:07:43]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-01 17:07:43]	DEBUG :	Helper loaded: mcube_helper
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-01 17:07:43]	DEBUG :	Session Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Helper loaded: string_helper
[2016-04-01 17:07:43]	DEBUG :	Encrypt Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-01 17:07:43]	DEBUG :	Session routines successfully run
[2016-04-01 17:07:43]	DEBUG :	Table Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Pagination Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-01 17:07:43]	DEBUG :	Form Validation Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Email Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Controller Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-01 17:07:43]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-01 17:07:43]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-01 17:07:43]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:6:\"refurl\";s:43:\"http://localhost/newdesigen/PBXReport/all/0\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:43]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:43]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:43]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-01 17:07:43]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-01 17:07:43]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-01 17:07:43]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:43]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:43]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-01 17:07:43]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-01 17:07:43]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-01 17:07:43]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-01 17:07:43]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:43]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	DEBUG :	Model Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:43]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:43]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:43]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:6:\"refurl\";s:43:\"http://localhost/newdesigen/PBXReport/all/0\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM business where pid='1'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-01 17:07:43]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-01 17:07:43]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-01 17:07:43]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1459509115', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:6:\"refurl\";s:43:\"http://localhost/newdesigen/PBXReport/all/0\";}' WHERE `session_id` = '74a61239bbbb613c5e31a3d8f0468187'
[2016-04-01 17:07:43]	SQL :	SELECT SQL_CALC_FOUND_ROWS p.title,r.* FROM 1_pbxreport r
				LEFT JOIN 1_pbx p on r.pbxid=p.pbxid
				WHERE 1 
				ORDER BY r.starttime DESC
				limit 0,30
[2016-04-01 17:07:43]	SQL :	SELECT FOUND_ROWS() as cnt
[2016-04-01 17:07:43]	SQL :	SELECT SQL_CALC_FOUND_ROWS p.title,r.* FROM 1_pbxreport r
				LEFT JOIN 1_pbx p on r.pbxid=p.pbxid
				WHERE 1 
				ORDER BY r.starttime DESC
				limit 0,30
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='24'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='24') as t ORDER BY display_order ASC
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80490830791331635124'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80490830791331635124'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80236011791336695008'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80236011791336695008'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80517400281336745171'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80517400281336745171'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80490830791331634962'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80490830791331634962'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80517400281336702839'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80517400281336702839'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='12046168001328183020'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='12046168001328183020'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='12046168001328183319'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='12046168001328183319'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='72598031081344332196'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='72598031081344332196'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='72598031081344332232'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='72598031081344332232'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='72598031081344332154'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='72598031081344332154'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80517400281336745186'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80517400281336745186'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80517400281336827306'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80517400281336827306'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='6'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431344331993'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431344331993'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431344332122'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431344332122'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347532748'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347532748'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347532847'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347532847'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347533042'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347533042'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347533554'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347533554'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347533608'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347533608'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347533687'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347533687'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347533864'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347533864'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431347534020'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431347534020'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431350534522'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431350534522'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431350534599'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431350534599'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431350534712'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431350534712'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431350534771'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431350534771'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='80889237431350534880'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='80889237431350534880'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='81230400561336732583'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='81230400561336732583'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='81230400561336732712'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='81230400561336732712'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT h.*,l.landingnumber as landingnumber,'' as asto,
					  REPLACE(h.extensions,',','<br>->') as extensions,
					  i.title as pbxtitle
					  FROM 1_pbxreport h
					  LEFT JOIN 1_pbx i on i.pbxid=h.pbxid
	                  LEFT JOIN prinumbers l on i.prinumber=l.number 
					  WHERE h.callid='81473756871328536735'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='24'
				AND dataid='81473756871328536735'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_pbxext WHERE pbxid='5'
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='24'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='24') as t ORDER BY display_order ASC
[2016-04-01 17:07:43]	SQL :	SELECT count(*) as cnt from 1_savesearch where eid='1' and modid='24'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_savesearch where eid='1' and modid='24'
[2016-04-01 17:07:43]	SQL :	select * from 1_pbx WHERE bid = '1' AND status='1'
[2016-04-01 17:07:43]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-01 17:07:43]	DEBUG :	Database Driver Class Initialized
[2016-04-01 17:07:43]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-01 17:07:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-01 17:07:43]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-01 17:07:43]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/list_view.php
[2016-04-01 17:07:43]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-01 17:07:43]	DEBUG :	Final output sent to browser
[2016-04-01 17:07:43]	DEBUG :	Total execution time: 0.1666
