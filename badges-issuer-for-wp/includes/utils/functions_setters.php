<?php

/**
 * Change the id links in the corresponding json file.
 *
 * @author Nicolas TORION
 * @since 1.0.0
 * @param $settings_links The array of the new id links values.
*/
function set_settings_links($settings_id_links) {
    file_put_contents(plugin_dir_path( dirname( __FILE__ ) ) . '../../../uploads/settings/json/links.json', json_encode($settings_id_links, JSON_UNESCAPED_SLASHES));
}

?>