<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

[2016-04-13 12:53:48]	DEBUG :	Config Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Hooks Class Initialized
[2016-04-13 12:53:48]	DEBUG :	URI Class Initialized
[2016-04-13 12:53:48]	DEBUG :	No URI present. Default controller set.
[2016-04-13 12:53:48]	DEBUG :	Router Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Output Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Input Class Initialized
[2016-04-13 12:53:48]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:48]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:48]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:48]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-13 12:53:48]	DEBUG :	Language Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Loader Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Helper loaded: url_helper
[2016-04-13 12:53:48]	DEBUG :	Helper loaded: form_helper
[2016-04-13 12:53:48]	DEBUG :	Helper loaded: html_helper
[2016-04-13 12:53:48]	DEBUG :	Helper loaded: email_helper
[2016-04-13 12:53:48]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-13 12:53:48]	DEBUG :	Helper loaded: mcube_helper
[2016-04-13 12:53:48]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:48]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-13 12:53:48]	DEBUG :	Session Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Helper loaded: string_helper
[2016-04-13 12:53:48]	DEBUG :	Encrypt Class Initialized
[2016-04-13 12:53:48]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-13 12:53:48]	DEBUG :	Session routines successfully run
[2016-04-13 12:53:48]	DEBUG :	Table Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Pagination Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-13 12:53:48]	DEBUG :	Form Validation Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Email Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Controller Class Initialized
[2016-04-13 12:53:48]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-13 12:53:49]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-13 12:53:49]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-13 12:53:49]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:49]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-13 12:53:49]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:49]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:49]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:49]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:49]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:49]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:49]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-13 12:53:49]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-13 12:53:49]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:49]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:49]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:49]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-13 12:53:49]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-13 12:53:49]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-13 12:53:49]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-13 12:53:49]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-13 12:53:49]	DEBUG :	Config Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Hooks Class Initialized
[2016-04-13 12:53:49]	DEBUG :	URI Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Router Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Output Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Input Class Initialized
[2016-04-13 12:53:49]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:49]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:49]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:49]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-13 12:53:49]	DEBUG :	Language Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Loader Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Helper loaded: url_helper
[2016-04-13 12:53:49]	DEBUG :	Helper loaded: form_helper
[2016-04-13 12:53:49]	DEBUG :	Helper loaded: html_helper
[2016-04-13 12:53:49]	DEBUG :	Helper loaded: email_helper
[2016-04-13 12:53:49]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-13 12:53:49]	DEBUG :	Helper loaded: mcube_helper
[2016-04-13 12:53:49]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:49]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-13 12:53:49]	DEBUG :	Session Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Helper loaded: string_helper
[2016-04-13 12:53:49]	DEBUG :	Encrypt Class Initialized
[2016-04-13 12:53:49]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-13 12:53:49]	DEBUG :	Session routines successfully run
[2016-04-13 12:53:49]	DEBUG :	Table Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Pagination Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-13 12:53:49]	DEBUG :	Form Validation Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Email Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Controller Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-13 12:53:49]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-13 12:53:49]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-13 12:53:49]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:49]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-13 12:53:49]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:49]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:49]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:49]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:49]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:49]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:49]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-13 12:53:49]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-13 12:53:49]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-13 12:53:49]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:49]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:49]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:49]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-13 12:53:49]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-13 12:53:49]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-13 12:53:49]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-13 12:53:49]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:49]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:49]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:49]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-13 12:53:49]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:49]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-13 12:53:49]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-13 12:53:49]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-13 12:53:49]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/dashboard.php
[2016-04-13 12:53:49]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-13 12:53:49]	DEBUG :	Final output sent to browser
[2016-04-13 12:53:49]	DEBUG :	Total execution time: 0.2598
[2016-04-13 12:53:56]	DEBUG :	Config Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Hooks Class Initialized
[2016-04-13 12:53:56]	DEBUG :	URI Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Router Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Output Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Input Class Initialized
[2016-04-13 12:53:56]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:56]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:56]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:56]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:56]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-13 12:53:56]	DEBUG :	Language Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Loader Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Helper loaded: url_helper
[2016-04-13 12:53:56]	DEBUG :	Helper loaded: form_helper
[2016-04-13 12:53:56]	DEBUG :	Helper loaded: html_helper
[2016-04-13 12:53:56]	DEBUG :	Helper loaded: email_helper
[2016-04-13 12:53:56]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-13 12:53:56]	DEBUG :	Helper loaded: mcube_helper
[2016-04-13 12:53:56]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:56]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-13 12:53:56]	DEBUG :	Session Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Helper loaded: string_helper
[2016-04-13 12:53:56]	DEBUG :	Encrypt Class Initialized
[2016-04-13 12:53:56]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-13 12:53:56]	DEBUG :	Session routines successfully run
[2016-04-13 12:53:56]	DEBUG :	Table Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Pagination Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-13 12:53:56]	DEBUG :	Form Validation Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Email Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Controller Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-13 12:53:56]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-13 12:53:56]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-13 12:53:56]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:56]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-13 12:53:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:56]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:56]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-13 12:53:56]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-13 12:53:56]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-13 12:53:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:56]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:56]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-13 12:53:56]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-13 12:53:56]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-13 12:53:56]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-13 12:53:56]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:56]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:56]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/mainheader.php
[2016-04-13 12:53:56]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:56]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,u.recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2016-04-13 12:53:56]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2016-04-13 12:53:56]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/leftsidebar.php
[2016-04-13 12:53:56]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/ivrsdashboard.php
[2016-04-13 12:53:56]	DEBUG :	File loaded: /var/www/html/newdesigen/system/application/views/footer.php
[2016-04-13 12:53:56]	DEBUG :	Final output sent to browser
[2016-04-13 12:53:56]	DEBUG :	Total execution time: 0.1690
[2016-04-13 12:53:56]	DEBUG :	Config Class Initialized
[2016-04-13 12:53:56]	DEBUG :	Hooks Class Initialized
[2016-04-13 12:53:56]	DEBUG :	URI Class Initialized
[2016-04-13 12:53:56]	ERROR :	404 Page Not Found --> system
[2016-04-13 12:53:58]	DEBUG :	Config Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Hooks Class Initialized
[2016-04-13 12:53:58]	DEBUG :	URI Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Router Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Output Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Input Class Initialized
[2016-04-13 12:53:58]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:58]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:58]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:58]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:58]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-13 12:53:58]	DEBUG :	Language Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Loader Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: url_helper
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: form_helper
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: html_helper
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: email_helper
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: mcube_helper
[2016-04-13 12:53:58]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:58]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-13 12:53:58]	DEBUG :	Session Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: string_helper
[2016-04-13 12:53:58]	DEBUG :	Encrypt Class Initialized
[2016-04-13 12:53:58]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-13 12:53:58]	DEBUG :	Session routines successfully run
[2016-04-13 12:53:58]	DEBUG :	Table Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Pagination Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-13 12:53:58]	DEBUG :	Form Validation Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Email Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Controller Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-13 12:53:58]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-13 12:53:58]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-13 12:53:58]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:58]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-13 12:53:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:58]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:58]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-13 12:53:58]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-13 12:53:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-13 12:53:58]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-13 12:53:58]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-13 12:53:58]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-13 12:53:58]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:58]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:58]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT i.title AS groupname, coalesce( iv.cnt, 0 ) AS count
							   FROM 1_ivrs i 
							   LEFT JOIN (SELECT count( iv.ivrsid ) AS cnt, iv.ivrsid 
							   FROM 1_ivrshistory iv 
							   LEFT JOIN 1_ivrs i ON iv.ivrsid = i.ivrsid
							   LEFT JOIN 1_callhistory h ON iv.hid = h.hid
							   WHERE date( iv.datetime ) >= '2016-04-07'  GROUP BY iv.ivrsid)iv ON i.ivrsid = iv.ivrsid WHERE 1  
[2016-04-13 12:53:58]	DEBUG :	Final output sent to browser
[2016-04-13 12:53:58]	DEBUG :	Total execution time: 0.4145
[2016-04-13 12:53:58]	DEBUG :	Config Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Hooks Class Initialized
[2016-04-13 12:53:58]	DEBUG :	URI Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Router Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Output Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Input Class Initialized
[2016-04-13 12:53:58]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:58]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:58]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:58]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:58]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-13 12:53:58]	DEBUG :	Language Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Loader Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: url_helper
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: form_helper
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: html_helper
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: email_helper
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: mcube_helper
[2016-04-13 12:53:58]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:58]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-13 12:53:58]	DEBUG :	Session Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Helper loaded: string_helper
[2016-04-13 12:53:58]	DEBUG :	Encrypt Class Initialized
[2016-04-13 12:53:58]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-13 12:53:58]	DEBUG :	Session routines successfully run
[2016-04-13 12:53:58]	DEBUG :	Table Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Pagination Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-13 12:53:58]	DEBUG :	Form Validation Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Email Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Controller Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-13 12:53:58]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-13 12:53:58]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-13 12:53:58]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:58]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-13 12:53:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:58]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:58]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-13 12:53:58]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-13 12:53:58]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-13 12:53:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-13 12:53:58]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-13 12:53:58]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-13 12:53:58]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-13 12:53:58]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:58]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:58]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:58]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:58]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:58]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:58]	SQL :	SELECT lead_generate FROM business WHERE bid='1'
[2016-04-13 12:53:58]	SQL :	SELECT i.title as groupname,i.ivrsid as gid,
				(SELECT count(hid) FROM 1_ivrshistory 
					WHERE ivrsid=i.ivrsid AND date(endtime)=(DATE_SUB(CURRENT_DATE(),INTERVAL 0 DAY))) as day0,
				(SELECT count(hid) FROM 1_ivrshistory 
					WHERE ivrsid=i.ivrsid AND date(endtime)=(DATE_SUB(CURRENT_DATE(),INTERVAL 1 DAY))) as day1,
				(SELECT count(hid) FROM 1_ivrshistory 
					WHERE ivrsid=i.ivrsid AND date(endtime)=(DATE_SUB(CURRENT_DATE(),INTERVAL 2 DAY))) as day2,
				(SELECT count(hid) FROM 1_ivrshistory 
					WHERE ivrsid=i.ivrsid AND date(endtime)=(DATE_SUB(CURRENT_DATE(),INTERVAL 3 DAY))) as day3,
				(SELECT count(hid) FROM 1_ivrshistory 
					WHERE ivrsid=i.ivrsid AND date(endtime)=(DATE_SUB(CURRENT_DATE(),INTERVAL 4 DAY))) as day4,
				(SELECT count(hid) FROM 1_ivrshistory 
					WHERE ivrsid=i.ivrsid AND date(endtime)=(DATE_SUB(CURRENT_DATE(),INTERVAL 5 DAY))) as day5,
				(SELECT count(hid) FROM 1_ivrshistory 
					WHERE ivrsid=i.ivrsid AND date(endtime)=(DATE_SUB(CURRENT_DATE(),INTERVAL 6 DAY))) as day6
		from ivrs i where i.bid=1
[2016-04-13 12:53:59]	DEBUG :	Final output sent to browser
[2016-04-13 12:53:59]	DEBUG :	Total execution time: 0.2604
[2016-04-13 12:53:59]	DEBUG :	Config Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Hooks Class Initialized
[2016-04-13 12:53:59]	DEBUG :	URI Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Router Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Output Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Input Class Initialized
[2016-04-13 12:53:59]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:59]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:59]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:59]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:59]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-13 12:53:59]	DEBUG :	Language Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Loader Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: url_helper
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: form_helper
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: html_helper
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: email_helper
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: mcube_helper
[2016-04-13 12:53:59]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:59]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-13 12:53:59]	DEBUG :	Session Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: string_helper
[2016-04-13 12:53:59]	DEBUG :	Encrypt Class Initialized
[2016-04-13 12:53:59]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-13 12:53:59]	DEBUG :	Session routines successfully run
[2016-04-13 12:53:59]	DEBUG :	Table Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Pagination Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-13 12:53:59]	DEBUG :	Form Validation Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Email Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Controller Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-13 12:53:59]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-13 12:53:59]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-13 12:53:59]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:59]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-13 12:53:59]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:59]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:59]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-13 12:53:59]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-13 12:53:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-13 12:53:59]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-13 12:53:59]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-13 12:53:59]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-13 12:53:59]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Zip Compression Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:59]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:59]	SQL :	
							select i.ivrsid as gid,hour(i.datetime) as hor ,count(*) as cnt,iv.title as groupname
							FROM 1_ivrshistory i
							LEFT JOIN 1_ivrs iv on i.ivrsid=iv.ivrsid
							LEFT JOIN 1_callhistory h ON i.hid = h.hid
							WHERE date(i.datetime)>='2016-04-07'  
							GROUP BY i.ivrsid,hour(i.datetime)
						
[2016-04-13 12:53:59]	DEBUG :	Final output sent to browser
[2016-04-13 12:53:59]	DEBUG :	Total execution time: 0.3273
[2016-04-13 12:53:59]	DEBUG :	Config Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Hooks Class Initialized
[2016-04-13 12:53:59]	DEBUG :	URI Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Router Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Output Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Input Class Initialized
[2016-04-13 12:53:59]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:59]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:59]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:59]	DEBUG :	XSS Filtering completed
[2016-04-13 12:53:59]	DEBUG :	Global POST and COOKIE data sanitized
[2016-04-13 12:53:59]	DEBUG :	Language Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Loader Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: url_helper
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: form_helper
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: html_helper
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: email_helper
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: ckeditor_helper
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: mcube_helper
[2016-04-13 12:53:59]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:59]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/newdesigen/system/database/drivers/mysql/mysql_driver.php 88
[2016-04-13 12:53:59]	DEBUG :	Session Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Helper loaded: string_helper
[2016-04-13 12:53:59]	DEBUG :	Encrypt Class Initialized
[2016-04-13 12:53:59]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 ('
[2016-04-13 12:53:59]	DEBUG :	Session routines successfully run
[2016-04-13 12:53:59]	DEBUG :	Table Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Pagination Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Config file loaded: config/paypallib_config.php
[2016-04-13 12:53:59]	DEBUG :	Form Validation Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Email Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Controller Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Plugin loaded: to_pdf_pi
[2016-04-13 12:53:59]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2016-04-13 12:53:59]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2016-04-13 12:53:59]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:59]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2016-04-13 12:53:59]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1460530755', `user_data` = 'a:19:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:11:\"demo@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"0\";s:8:\"deviceid\";s:11:\"sdasdfasde1\";s:12:\"gcmkey_track\";s:152:\"esTAE6S5ogw:APA91bHKEDwkh5g17wInWG9mfZaLVKpIxC_DmX_0C_3H0LmDk-qROQ7o1lQEXVMDAJPqfAqie6e_9ZHDaJDHLQNYh_qECj0upMyzyvDIvUog2a_3f_1LxgoY0W_r0p15wXheSzPcftWv\";s:12:\"gcmkey_mcube\";s:0:\"\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = 'd73d29e6bd92890925cc0add3e937cc6'
[2016-04-13 12:53:59]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:59]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/email_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/db_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/date_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/number_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2016-04-13 12:53:59]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2016-04-13 12:53:59]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2016-04-13 12:53:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT id,type FROM 1_leads_status
[2016-04-13 12:53:59]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2016-04-13 12:53:59]	SQL :	SELECT sid,status FROM 1_support_status
[2016-04-13 12:53:59]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2016-04-13 12:53:59]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Model Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Zip Compression Class Initialized
[2016-04-13 12:53:59]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:59]	DEBUG :	Database Driver Class Initialized
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2016-04-13 12:53:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2016-04-13 12:53:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2016-04-13 12:53:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2016-04-13 12:53:59]	SQL :	select i.ivrsid as gid,DAYNAME(i.datetime) as hor ,count(*) as cnt,iv.title as groupname
							FROM 1_ivrshistory i
							LEFT JOIN 1_ivrs iv on i.ivrsid=iv.ivrsid
							LEFT JOIN 1_callhistory h ON i.hid = h.hid
							WHERE date(i.datetime)>='2016-04-07'  
							GROUP BY i.ivrsid,DAYNAME(i.datetime)
							
[2016-04-13 12:53:59]	DEBUG :	Final output sent to browser
[2016-04-13 12:53:59]	DEBUG :	Total execution time: 0.1067
