<?php
namespace Velopress;

/**
 * This class wraps core wordpress functionality so it can be called through a facade
 * 
 * @package Larapress\Larapress
 * @author Matthew Kendon <mkendon@gmail.com>
 */
class Wordpress
{
    /**
     * Installs the site.
     *
     * Runs the required functions to set up and populate the database,
     * including primary admin user and initial options.
     *
     * @since 2.1.0
     *
     * @param string $blog_title    Site title.
     * @param string $user_name     User's username.
     * @param string $user_email    User's email.
     * @param bool   $public        Whether site is public.
     * @param string $deprecated    Optional. Not used.
     * @param string $user_password Optional. User's chosen password. Default empty (random password).
     * @param string $language      Optional. Language chosen. Default empty.
     * @return array Array keys 'url', 'user_id', 'password', and 'password_message'.
     */
    public function install($blog_title, $user_name, $user_email, $public, $deprecated = '', $user_password = '', $language = '')
    {
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        return \wp_install(
            $blog_title,
            $user_name,
            $user_email,
            $public,
            $deprecated,
            $user_password,
            $language);
    }

    public function dropTables()
    {
    }
}