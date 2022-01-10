<?php $id = uniqid(); ?>
<div id="map-<?php echo $id; ?>" class="locations__map" data-zoom="9" data-id="<?php echo $id; ?>"></div>
<script type="text/javascript">var map_markers_<?php echo $id; ?> = <?php echo json_encode($marker_data); ?>;</script>
