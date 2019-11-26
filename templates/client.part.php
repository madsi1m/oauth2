<?php if (isset($_['client'])) {
	$client = $_['client'];
} ?>

<tr>
	<td><?php p($client->getName()); ?></td>
	<td><?php p($client->getRedirectUri()); ?></td>
	<td><code class="oauth2-identifier"><?php p($client->getIdentifier()); ?></code></td>
	<td><code><?php p($client->getSecret()); ?></code></td>
	<td	<?php if ($client->getAllowSubdomains()) { ?> class="icon-32 icon-checkmark" <?php } ?> >
	</td>
	<td>
		<button type="button" class="button icon-delete" data-id="<?php p($client->getId()) ?>"></button>
	</td>
</tr>
