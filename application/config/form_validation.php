<?php

$config = [

		'add_article_rule' =>
			[
				['field' => 'title',
				'label' => 'Article Title',
				'rules' => 'required|alphadash',
				],
				[
				 'field' => 'body',
				 'label' => 'Article Body',
				 'rules' =>'required',
				]

			],
		'admin_login'   =>
			[
				[
					'field' => 'username',
					'label' => 'User Name'
					,
					'rules' => 'required|alpha|trim',

				],
				[
					'field' => 'password',
					'lable' => 'Password',
					'rules' => 'required',

				]
			]

];