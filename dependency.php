<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Check if the class does not exits then only allow the file to add
 */
if( ! class_exists( 'AcrossWP_BuddyBoss_Platform_Dependency' ) ) {
    class AcrossWP_BuddyBoss_Platform_Dependency extends AcrossWP_Plugins_Dependency {
        /**
         * Load this function on plugin load hook
         * Example: _e('<strong>BuddyBoss Sorting Option In Network Search</strong></a> requires the BuddyBoss Platform plugin to work. Please <a href="https://buddyboss.com/platform/" target="_blank">install BuddyBoss Platform</a> first.', 'sorting-option-in-network-search-for-buddyboss');
         */
        function constact_not_define_text(){
            printf( 
                __( 
                    '<strong>%s</strong></a> requires the WooCommerce plugin to work. Please <a href="https://wordpress.org/plugins/woocommerce/" target="_blank">install WooCommerce</a> first.',
                    'wordpress-plugin-boilerplate'
                ),
                $this->get_plugin_name()
            );
        }

        /**
         * Load this function on plugin load hook
         * Example: printf( __('<strong>BuddyBoss Sorting Option In Network Search</strong></a> requires BuddyBoss Platform plugin version %s or higher to work. Please update BuddyBoss Platform.', 'sorting-option-in-network-search-for-buddyboss'), $this->mini_version() );
         */
        function constact_mini_version_text() {
            printf( 
                __( 
                    '<strong>%s</strong></a> requires WooCommerce plugin version %s or higher to work. Please update WooCommerce.',
                    'wordpress-plugin-boilerplate'
                ),
                $this->get_plugin_name(),
                $this->mini_version()
            );
        }

        /**
         * Load this function on plugin load hook
         */
        function constact_name(){
            return 'WC_VERSION';
        }

        /**
         * Load this function on plugin load hook
         */
        function mini_version(){
            return '7.6.0';
        }
    }
}