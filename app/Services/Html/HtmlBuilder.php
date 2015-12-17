<?php namespace App\Services\Html;

class HtmlBuilder extends \Collective\Html\HtmlBuilder {

	/**
	 * Create a panel.
	 *
	 * @return string
	 */
	public function bootpanel($title, $name)
	{
		return sprintf('
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">%s</h3>
				</div>
				<div class="panel-body">
			  	%s
			  </div>
			</div>',
			$title,
			$name
		);
	}

	/**
	 * Create a multi panel.
	 *
	 * @return string
	 */
	public function bootpanelmulti($title, $names, $attribute)
	{
		$lines = '';
		foreach($names as $name) {
			$lines .= '<tr><td>'.$name->getAttribute($attribute).'</td></tr>';
		}
		return sprintf('
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">%s</h3>
				</div>
				<table class="table">
			  	%s
			  </table>
			</div>',
			$title,
			$lines
		);
	}

}
