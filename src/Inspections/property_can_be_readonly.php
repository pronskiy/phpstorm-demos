<?php

class User
{
	public function __construct(
		private string $email
	)
	{
	}

	public function getName(): string
	{
		return $this->email;
	}
}
