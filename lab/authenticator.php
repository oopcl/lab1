<?php
interface Authenticator{
	public function hashPassword();
	public function isPasswordorrect();
	public function login();
	public function logout();
	public function createFormErrorSessions();
}
?>