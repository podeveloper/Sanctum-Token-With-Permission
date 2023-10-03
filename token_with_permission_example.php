<?php

$user->createToken(); // auto naming
$user->createToken('token_name'); // manuel naming

$user->createToken('token_name', ['categories-list']); // passing permission

Usage:

if(auth()->user()->tokenCan('categories-list'))
{
	abort(403,'Unauthorized');
}
