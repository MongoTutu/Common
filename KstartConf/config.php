<?php
return array(
	//'配置项'=>'配置值

	'DB_TYPE'			=>	'mongo',
	'DB_HOST'			=>	MONGO_SERVER,
	'DB_NAME'			=>	'kadmin',
	'DB_USER'			=>	'',
	'DB_PWD'			=>	'',
	'DB_PORT'			=>	'27017',
	'DB_CHARSET'		=>	'utf8',
	'DB_PREFIX' 		=>	'',


	'URL_CASE_INSENSITIVE'  =>  true,
	'URL_MODEL'          => '2',

	'URL_ROUTER_ON'   => true,
	'URL_ROUTE_RULES'=>array(

		/*array('/^users$/','home/user/user_lists','status=1',array('method'=>'get')),
		array('users/:id','home/user/get_user','status=1',array('method'=>'get')),
		array('users','home/user/add_user','status=1',array('method'=>'post')),
		array('users/:id','home/user/update_user','status=1',array('method'=>'put')),
		array('users/:id','home/user/delete_user','status=1',array('method'=>'delete')),
		array('register','home/user/register','status=1',array('method'=>'post')),
		array('login','home/user/login','status=1',array('method'=>'post')),*/

		array('/^news$/','home/news/news_lists','status=1',array('method'=>'get')),
		array('news/:id','home/news/get_news','status=1',array('method'=>'get')),

		array('/^interview$/','home/interview/interview_lists','status=1',array('method'=>'get')),
		array('interview/:id','home/interview/get_interview','status=1',array('method'=>'get')),

		array('/^event$/','home/event/event_lists','status=1',array('method'=>'get')),
		array('event/:id','home/event/get_event','status=1',array('method'=>'get')),

		array('/^home$/','home/home/home_lists','status=1',array('method'=>'get')),
		array('home/:role','home/home/role_home_lists','status=1',array('method'=>'get')),

		array('/^home2$/','home/home/home_lists_2','status=1',array('method'=>'get')),
		array('home2/:id','home/home/home_lists_2_detail','status=1',array('method'=>'get')),

		array('home3/:role','home/home/home3','status=1',array('method'=>'get')),

		array('/^fund$/','home/fund/fund_lists','status=1',array('method'=>'get')),
		array('fund/:id','home/fund/get_fund','status=1',array('method'=>'get')),

		array('/^project$/','home/project/project_lists','status=1',array('method'=>'get')),
		array('project/:id','home/project/get_project','status=1',array('method'=>'get')),

		array('/^expert$/','home/expert/expert_lists','status=1',array('method'=>'get')),
		array('expert/:id','home/expert/get_expert','status=1',array('method'=>'get')),

		array('/^register$/','home/user/register','status=1',array('method'=>'post')),
		array('/^login$/','home/user/login','status=1',array('method'=>'post')),

		array('/^userinformation$/','home/user/information','status=1',array('method'=>'post')),
		array('userinformation/:token','home/user/get_information','status=1',array('method'=>'get')),

		array('usercenter/:uid','home/user/user_info_detail','status=1',array('method'=>'get')),

		array('qrcode/:token','home/qrcode/qr','status=1',array('method'=>'get')),

		array('/^friends$/','home/user/add_friend','status=1',array('method'=>'post')),
		array('/^friends$/','home/user/test','status=1',array('method'=>'get')),
		array('friends/:token','home/user/friend_list','status=1',array('method'=>'get')),

		array('questionnaire/:classify','home/questionnaire/questionnaire','status=1',array('method'=>'get')),
		array('/^answers$/','home/questionnaire/questionnaire_post','status=1',array('method'=>'post')),
		array('is_answered/:token','home/questionnaire/is_answered','status=1',array('method'=>'get')),

		array('/^usertags$/','home/tags/add_tags','status=1',array('method'=>'post')),
		array('usertags/:token','home/tags/get_user_tags','status=1',array('method'=>'get')),
		array('personal_tags','home/tags/personal_tags','status=1',array('method'=>'get')),
		array('interested_tags','home/tags/interested_tags','status=1',array('method'=>'get')),

		array('/^requirement$/','home/requirement/add_requirement','status=1',array('method'=>'post')),
		array('requirement/:id/:token','home/requirement/get_requirement_info','status=1',array('method'=>'get')),
		array('requirement/:token','home/requirement/get_requirement','status=1',array('method'=>'get')),


		array('/^message$/','home/message/send_message','status=1',array('method'=>'post')),
		array('message/:fid/:token','home/message/get_message_detail','status=1',array('method'=>'get')),
		array('message/:token','home/message/get_message_list','status=1',array('method'=>'get')),
		array('/^remove_message$/','home/message/delete_message','status=1',array('method'=>'post')),

		array('check_message/:token','home/message/message_status','status=1',array('method'=>'get')),

		array('sysmessage/:token','home/sysmessage/get_message_list','status=1',array('method'=>'get')),
		array('/^remove_sysmessage$/','home/sysmessage/delete_message','status=1',array('method'=>'post')),

		array('/^share$/','home/share/share','status=1',array('method'=>'post')),

		array('search/:key_word/:token','home/search/search','status=1',array('method'=>'get')),
		array('search/:key_word','home/search/search','status=1',array('method'=>'get')),
		array('/^search_keywords$/','home/search/search_keywords','status=1',array('method'=>'get')),


		array('/^position$/','home/position/get_position','status=1',array('method'=>'post')),

		array('/^password$/','home/user/reset_password','status=1',array('method'=>'post')),

		array('/^mark$/','home/logs/mark','status=1',array('method'=>'post')),
		array('/^cancel_mark$/','home/logs/cancel_mark','status=1',array('method'=>'post')),
		array('mark/:token','home/logs/get_mark','status=1',array('method'=>'get')),
		array('/^sharelog$/','home/logs/share','status=1',array('method'=>'post')),
		array('/^viewlog$/','home/logs/views','status=1',array('method'=>'post')),


		array('find_people/:classify','home/home/find_people','status=1',array('method'=>'get')),
		
		array('invitation/:phone','home/user/invitation_code','status=1',array('method'=>'get')),
	),



	'LOG_RECORD' => true, // 开启日志记录
	'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR,WARN,NOTICE', // 只记录EMERG ALERT CRIT ERR 错误


	'ERROR_PAGE' => '404.php',

);
