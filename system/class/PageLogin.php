<?php
class PageLogin extends Page {
		
	protected function init() {
		$this->content = '';
		if (isset($_POST['loginSubmit'])) $this->content .= '<p class="red">Login fehlgeschlagen</p>';
		$this->content .= '<form action="" method="post">
		<div class="formline"><label for="mail" class="normal">Mail</label><input type="text" name="mail" class="input" /></div>
		<div class="formline"><label for="pw" class="normal">Passwort</label><input type="password" name="pw" class="input" /></div>
		<p><input type="button" id="newprofile" onclick="javascript:window.location.href = \'/'.BASIC_URI.'newprofile\'; return false;" value="Profil erstellen" /><input type="submit" name="loginSubmit" value="Einloggen" /></p></form><script type="text/javascript">';
	}
}
?>