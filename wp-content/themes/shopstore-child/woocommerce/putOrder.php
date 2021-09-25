<!-- Updating a order to status completed, updating order 209 -->

<?php
$data = [
    'status' => 'completed'
];

print_r($woocommerce->put('orders/209', $data));
?>