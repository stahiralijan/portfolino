<?php

	/**
	 * Implements hook_html_head_alter().
	 * This will overwrite the default meta character type tag with HTML5 version.
	 */
	function portfolino_html_head_alter(&$head_elements)
	{
		$head_elements['system_meta_content_type']['#attributes'] = array(
		    'http-equiv' => "Content-Type",
		    'content' => 'text/html; charset=utf-8'
		);
		drupal_add_css('http://fonts.googleapis.com/css?family=Lato:300,400,700|Cookie',
			['type'=>'external']
		);
		drupal_add_js(drupal_get_path('theme', 'portfolino') .
		              '/scripts/jquery.carouFredSel-5.5.2.js',
		              ['group'=>JS_LIBRARY]);
		drupal_add_js(drupal_get_path('theme', 'portfolino') .
		              '/scripts/jquery.easing.1.3.js',
		              ['group'=>JS_LIBRARY]);
		drupal_add_js(drupal_get_path('theme', 'portfolino') .
		              '/scripts/scripts.js',
		              ['group'=>JS_LIBRARY]);
	}

	function portfolino_get_gallery()
	{
		$query = new EntityFieldQuery();
		
		$i = (int)theme_get_setting('perpage_thumbs');
		
		$result = $query->entityCondition('entity_type', 'node')
			->entityCondition('bundle', 'article')
			->range(0, $i)
			->execute();

		$nids = array_keys($result['node']);
		$nodes = entity_load('node', $nids);
		$output = "";
		foreach($nodes as $node)
		{
			$output .= "<a href='node/$node->nid' class='item'>";
			$output .= "<img src='".image_style_url('medium', $node->field_image['und'][0]['uri'])."' alt='$node->title'>";
			$output .= "<h3>$node->title</h3><p>";
			foreach ($node->field_tags['und'][0] as $tid)
			{
				$tax = taxonomy_term_load($tid);
				$output .= (isset($tax->name) ? $tax->name : '').", ";
			}
			$output .= "</p></a>";
		}
		return $output;
	}

	function portfolino_get_articles()
	{
		$query = new EntityFieldQuery();
		
		$i = 50;
		
		$result = $query->entityCondition('entity_type', 'node')
			->entityCondition('bundle', 'article')
			->range(0, $i)
			->execute();

		$nids = array_keys($result['node']);
		$nodes = entity_load('node', $nids);
		
		return $nodes;
	}