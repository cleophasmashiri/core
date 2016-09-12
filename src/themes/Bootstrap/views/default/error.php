<?php
use gibbon\core\trans ;
?>
<h1>
	<?php echo trans::__('Oh no!'); ?><br/>
</h1>
<p>
	<?php echo trans::__('Something has gone wrong: the Gibbons have escaped!') ?><br/>
	<br/>
	<?php echo trans::__('An error has occurred. This could mean a number of different things, but generally indicates that you have a misspelt address, or are trying to access a page that you are not permitted to access.').' '.trans::__('If you cannot solve this problem by retyping the address, or through other means, please contact your system administrator.') ?><br/>
</p>
<?php
if ($this->session->get('installType') === 'Development')
	dump($_SESSION, true, true);
?>