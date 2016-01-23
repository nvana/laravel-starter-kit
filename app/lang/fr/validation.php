<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| L' following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"         => "L' :attribute doit être accecté.",
	"active_url"       => "L' :attribute n'est pas une URL valide.",
	"after"            => "L' :attribute doit être après :date.",
	"alpha"            => "L' :attribute doit seulement contenir des lettres.",
	"alpha_dash"       => "L' :attribute doit seulement contenir des lettres, nombres, et tirets.",
	"alpha_num"        => "L' :attribute doit seulement contenir des lettres et nombres.",
	"before"           => "L' :attribute doit être avant :date.",
	"entre"          => array(
		"numeric" => "L' :attribute doit être entre :min - :max.",
		"file"    => "L' :attribute doit être entre :min - :max kilobytes.",
		"string"  => "L' :attribute doit être entre :min - :max caractères.",
	),
	"confirmed"        => "L' :attribute confirmation ne correspond pas.",
	"date"             => "L' :attribute n'est pas une date valide.",
	"date_format"      => "L' :attribute ne correspond pas a :format.",
	"different"        => "L' :attribute et :other doivent être differents.",
	"digits"           => "L' :attribute doit être :digits chiffres.",
	"digits_between"   => "L' :attribute doit être entre :min et :max digits.",
	"email"            => "L' :attribute format est invalid.",
	"exists"           => "L'attribut sélectionné :attribute est invalide.",
	"image"            => "L' :attribute doit être une image.",
	"in"               => "L'attribut sélectionné :attribute est invalide.",
	"integer"          => "L' :attribute doit être un entier.",
	"ip"               => "L' :attribute doit être une adresse IP valide.",
	"max"              => array(
		"numeric" => "L' :attribute ne doit pas être plus grand que :max.",
		"file"    => "L' :attribute ne doit pas être plus grand que :max kilobytes.",
		"string"  => "L' :attribute ne doit pas être plus grand que :max caractères.",
	),
	"mimes"            => "L' :attribute doit être du type: :values.",
	"min"              => array(
		"numeric" => "L' :attribute doit être au minimum :min.",
		"file"    => "L' :attribute doit être au minimum :min kilobytes.",
		"string"  => "L' :attribute doit être au minimum :min caractères.",
	),
	"not_in"           => "L'attribut sélectionné :attribute est invalide.",
	"numeric"          => "L' :attribute doit être un nombre.",
	"regex"            => "L' :attribute format est invalide.",
	"required"         => "L' :attribute field est requit.",
	"required_if"      => "L' :attribute field est requit quand :other est :value.",
	"required_with"    => "L' :attribute field est requit quand :values est présent.",
	"required_without" => "L' :attribute field est requit quand :values n'est pas présent.",
	"same"             => "L' :attribute et :other doivent correspondre.",
	"size"             => array(
		"numeric" => "L' :attribute doit être :size.",
		"file"    => "L' :attribute doit être :size kilobytes.",
		"string"  => "L' :attribute doit être :size caractères.",
	),
	"unique"           => "L' :attribute est déjà prit.",
	"url"              => "Le :attribute format est invalide.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| L' following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
