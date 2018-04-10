<?php
defined('JPATH_BASE') or die;
$d = $displayData;

if($d->useFieldset) :
?>
<fieldset class="<?php echo $d->fieldsetClass; ?>">
	<legend class="<?php echo $d->legendClass; ?>">
		<?php echo $d->legendText; ?>
	</legend>
<?php
endif;

if ($d->showConsent) :
?>
	<div class="acymailing_consent">
		<p><?php echo $d->consentText; ?></p>
		
		<div class="acymailingError alert alert-error <?php echo $d->errClass ?>">
			<button class="close" data-dismiss="alert">×</button>
			<?php echo $d->errText; ?>
		</div>
	
		<input id="fabrik_acymailing_consent" type="checkbox" name="fabrik_acymailing_consent" value="1" style="margin: 0 5px 0 0;">
		<label for="fabrik_acymailing_consent" style="display: inline;">
			<?php echo $d->mailingText; ?>
		</label>
	</div>
<?php
endif;

if($d->useFieldset) :
?>
</fieldset>
<?php
endif;