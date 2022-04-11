<?php

/** @psalm-type PhoneType = array{phone: string} */
class Phone {
	/** @psalm-return PhoneType */
	public function toArray(): array {
		return ["phone" => "Nokia"];
	}
}

/** @psalm-type NameType = array{name: string} */
class Name {
	/** @psalm-return NameType */
	function toArray(): array {
		return ["name" => "Matt"];
	}
}

/**
 * @psalm-import-type PhoneType from Phone as ImportedPhoneType
 * @psalm-import-type NameType from Name as ImportedNameType
 *
 * @psalm-type UserType = ImportedPhoneType & ImportedNameType
 */
class User {
	/** @psalm-return UserType */
	function toArray(): array {
		return array_merge(
			(new Name)->toArray(),
			(new Phone)->toArray()
		);
	}
}

((array) new User())[];

