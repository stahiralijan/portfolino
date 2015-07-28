<?php
/**
 * Created by PhpStorm.
 * User: Tahir
 * Date: 6/26/2015
 * Time: 11:16 PM
 */

	function portfolino_form_system_theme_settings_alter(&$form, &$form_state)
	{
		$form['portfolino_settings'] = array(
			'#type' => 'fieldset',
			'#title' => t('Portfolino Settings'),
			'#collapsible' => true,
			'#description' => 'These are the settings for the theme Portfolino',
			'#collapsed' => FALSE,
		);

		/* Background Images start */
		$form['portfolino_settings']['bg_images'] = array(
			'#type' => 'fieldset',
			'#title' => t('Background Images'),
			'#collapsible' => true,
			'#collapsed' => FALSE,
		);
		$form['portfolino_settings']['bg_images']['bg_image_1_url'] = [
			'#type' => 'textfield',
			'#title' => t('Background Image 1'),
			'#required' => true,
			'#default_value' => theme_get_setting('bg_image_1_url'),
		];
		$form['portfolino_settings']['bg_images']['bg_image_2_url'] = [
			'#type' => 'textfield',
			'#title' => t('Background Image 2'),
			'#required' => true,
			'#default_value' => theme_get_setting('bg_image_2_url'),
		];
		/* Background Images end */

		/* texts start */
		$form['portfolino_settings']['texts'] = [
			'#type' => 'fieldset',
			'#title' => t('Main Page scetion texts'),
			'#collapsible' => true,
			'#collapsed' => FALSE,
		];
		$form['portfolino_settings']['texts']['small_intro'] = [
			'#type' => 'textfield',
			'#title' => t('Small Intro, with name etc.'),
			'#required' => true,
			'#default_value' => theme_get_setting('small_intro'),
		];
		$form['portfolino_settings']['texts']['tags'] = [
			'#type' => 'textfield',
			'#title' => t('Enter different tags about you'),
			'#required' => true,
			'#default_value' => theme_get_setting('tags'),
		];
		$form['portfolino_settings']['texts']['about_me'] = [
			'#type' => 'textarea',
			'#title' => t('Enter text/html and other details about you here'),
			'#required' => true,
			'#default_value' => theme_get_setting('about_me'),
		];
		$form['portfolino_settings']['texts']['my_work'] = [
			'#type' => 'textarea',
			'#title' => t('Enter a sentence or two (text/html) about your work.'),
			'#required' => true,
			'#default_value' => theme_get_setting('my_work'),
		];
		$form['portfolino_settings']['texts']['perpage_thumbs'] = [
			'#type' => 'textfield',
			'#title' => t('Number of thumbnails on Main Page'),
			'#description' => t('Enter the number of thumbnails to be shown at home page.'),
			'#required' => true,
			'#element_validate' => array('element_validate_integer_positive'),
			'#default_value' => theme_get_setting('perpage_thumbs'),
		];
		/* texts end */

		/* Address start */
		$form['portfolino_settings']['addresses'] = array(
			'#type' => 'fieldset',
			'#title' => t('Social links'),
			'#collapsible' => true,
			'#collapsed' => FALSE,
		);
		$form['portfolino_settings']['addresses']['email_address'] = [
			'#type' => 'textfield',
			'#title' => t('Email Address'),
			'#required' => false,
			'#default_value' => theme_get_setting('email_address'),
		];
		$form['portfolino_settings']['addresses']['twitter_url'] = [
			'#type' => 'textfield',
			'#title' => t('Twitter URL'),
			'#required' => false,
			'#default_value' => theme_get_setting('twitter_url'),
		    '#description' => t('Please complete URL starting with http://'),
		];
		$form['portfolino_settings']['addresses']['facebook_url'] = [
			'#type' => 'textfield',
			'#title' => t('Facebook Page URL'),
			'#required' => false,
			'#default_value' => theme_get_setting('facebook_url'),
			'#description' => t('Please enter a complete URL starting with <b>http://</b>'),
		];
		$form['portfolino_settings']['addresses']['linkedin_url'] = [
			'#type' => 'textfield',
			'#title' => t('LinkedIn URL'),
			'#required' => false,
			'#default_value' => theme_get_setting('linkedin_url'),
			'#description' => t('Please enter a complete URL starting with <b>http://</b>'),
		];
		/* Address end */

		/* footer start */
		$form['portfolino_settings']['footer'] = array(
			'#type' => 'fieldset',
			'#title' => t('Footer'),
			'#collapsible' => true,
			'#collapsed' => FALSE,
		);
		$form['portfolino_settings']['footer']['footer_text'] = [
			'#type' => 'textfield',
			'#required' => true,
			'#title' => t('Footer Text'),
			'#default_value' => theme_get_setting('footer_text'),
			'#description'   => t("Put your footer text here."),
		];
		/* footer end */
	}