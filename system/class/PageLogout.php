<?php
class PageLogout extends Page {
		
	protected function init() {
		$this->user->logout();
		$this->content = 'ausgeloggt';
	}
}
?>