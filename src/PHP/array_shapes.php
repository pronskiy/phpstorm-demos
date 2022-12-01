<?php

use JetBrains\PhpStorm\ArrayShape;

	/**
	 * @return array{
	 * 				token: string,
	 *            	owner: array{user: App\User},
	 *            	timeout: int
	 *        	}
	 */
//	function getData(): array {
//		return [];
//	}

	getData()["owner"]["user"]->getEmail();


	function configure(
		#[ArrayShape([
			'token' => 'string',
	        'owner' => ['user' => App\User::class],
	 		'timeout' => 'int'
		])] array $options
	): void
	{
		$options['owner']['user']->getEmail();
	}


	/**
	 * @return array{ 0: App\User, 1: string }
	 */
//	function getData(): array {
//		return [];
//	}

	getData()[0]->getEmail();


	/**
	 * @return array{ one: string, two: App\User[] }
	 */
//	function getData(): array {
//		return [];
//	}

	getData()["two"][0]->getEmail();


	/**
	 * @return array<string, array{u: App\User}>
	 */
	function getData(): array {
		return [];
	}

	echo getData()['some_key']["u"]->getEmail();



	function getStructuredData(): array {

	}

	/**
	 * @var array{
	 * 				token: string,
	 *            	owner: array{user: App\User},
	 *            	timeout: int
	 *        	} $data
	 */
	$data = getStructuredData();

	$data["owner"]["user"]->getEmail();










