<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<?php if ($options['cstdnt_recurring_enable']==true) { ?>
	<?php
        if (empty($options['cstdnt_paypal_email'])) {
            die();
        }

        if (empty($options['cstdnt_organization_name'])) {
            die();
        }
    ?>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class='custom-donations-form recurring-form'>

		<input type="hidden" name="cmd" value="_xclick-subscriptions">
		<!--You will need to set the email to your PayPal email or Secure Merchant ID -->
		  <input type="hidden" name="business" value="<?php echo $options['cstdnt_paypal_email']; ?>">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="item_name" value="Donate to <?php echo $options['cstdnt_organization_name'] ?>">
		<input type="hidden" name="item_number" value="1234">
		<input type="hidden" name="no_note" value="1">
		<input type="hidden" name="no_shipping" value="2">
		<input type="hidden" name="src" value="1">
		<input type="hidden" name="p3" value="1">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="bn" value="PP-SubscriptionsBF:btn_subscribeCC_LG.gif:NonHosted">
		<h2 class='cstdntf-header'> <?php echo $options['cstdnt_recurring_header']; ?> </h2>
		<table>
		<tr><td><?php echo $options['cstdnt_recurring_duration']; ?></td></tr>
		<tr><td><select name="t3">
		<?php

		if ($options['cstdnt_recurring_daily']!==null) {
			?><option value="D">Daily</option><?php
		}

		if ($options['cstdnt_recurring_weekly']!==null) {
			?><option value="W">Weekly</option><?php
		}

		if ($options['cstdnt_recurring_monthly']!==null) {
			?><option value="M">Monthly</option><?php
		}

		if ($options['cstdnt_recurring_yearly']!==null) {
			?><option value="Y">Yearly</option><?php
		}

		?>

		</select> </td></tr>
		<tr><td><?php echo $options['cstdnt_recurring_options_header']; ?></td></tr><tr><td><select name="srt">
		<option value="0">Indefinitely</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		</select> </td></tr>
		<tr><td><?php echo $options['cstdnt_recurring_amount_header']; ?></td></tr>
		<tr><td><input type="text" name="a3" maxlength="60"></td></tr>
		<tr><td><input type="hidden" name="on2" value='Disbursement'><?php echo $options['cstdnt_recurring_meta']; ?></td></tr><tr><td>
		<textarea name="os2" rows="5" cols="40" maxlength="200"></textarea>
		</td></tr>

		</table>
		<input type="image" src="<?php echo $options['cstdnt_donate_image']; ?>" class='cdf-submit' border="0" name="submit" alt="PayPal - The safer, easier way to
		pay online!">
		<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>
<?php
} //recurring_enable
?>
