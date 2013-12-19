<?php
/**
 * Basic page template
 *
 * This site uses the delegate approach:
 * http://processwire.com/talk/topic/740-a-different-way-of-using-templates-delegate-approach/
 *
 * Make sure to set 'Alternate Template' to 'main.php' under Template Settings
 *
 * @package ProcessWire
 * @since Theme_Name 1.0
 */
?>
<h1><?= $page->get("headline|title"); ?></h1>

<?= $page->body; ?>

<?php foreach ($page->sections as &$section): ?>
	<?= $this->partial('repeater/section', compact('section')) ?>
<?php endforeach ?>