<?php

class User
{
	public function __construct(
		private readonly string $email
	)
	{
	}

	public function getName(): string
	{
		return $this->email;
	}
}
