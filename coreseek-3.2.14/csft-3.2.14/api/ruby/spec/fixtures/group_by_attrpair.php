<?php

require ("sphinxapi.php");

$cl = new SphinxClient();
$cl->SetGroupBy('attr', SPH_GROUPBY_ATTRPAIR);
$cl->Query('query');

?>