<?php
class Content extends LayoutPart {
	protected $contentObjects;
		
	protected function setMarkerName() {
		$this->markerName = 'content';
	}
	
	protected function init() {
		$temp = 'Content';
		
		$this->content = $temp;
	}
}
?>