add_filter('site_transient_update_plugins', 'remove_update_notification');
function remove_update_notification($value) {
     unset($value->response[ plugin_basename(__FILE__) ]);
     return $value;
} 