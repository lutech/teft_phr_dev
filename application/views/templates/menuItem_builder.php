<?php

class MenuItem {
    public $menuItemLabel;
    public $menuItemArea;
    public $menuItemView;
    public $menuItemClickable;
    public $menuItemHideUnlessActive;
    public $menuItemIcon;
    public $menuItemScript;
    public $uri;

    function __construct($menuItemLabel, $menuItemArea ,$menuItemView, $menuItemIcon, $menuItemClickable, $menuItemScript,$uri )
    {
        $this->menuItemLabel = $menuItemLabel;
        $this->menuItemArea = $menuItemArea;
        $this->menuItemView = $menuItemView;
        $this->menuItemIcon = $menuItemIcon;
        $this->menuItemClickable = $menuItemClickable;
        $this->menuItemScript = $menuItemScript;
        $this->menuItemUri = $uri;
    }

    public function RenderMenuItem(){
        $segment1 =  $this->menuItemUri->segment(1);
        $segment2 =  $this->menuItemUri->segment(2);
        $segment3 = $this->menuItemUri->segment(3);

        $isActive = ($this->menuItemArea == $segment1 && $this->menuItemView == $segment2) ||
            ($this->menuItemArea == $segment1 &&  $this->menuItemView == $segment2."/".$segment3) ;

        $activeClass = ($isActive == true) ? 'ui-hide' : "";
        $icon = (!empty($this->menuItemIcon) ? '<span class="'.$this->menuItemIcon.'"></span>' : '');
        $onClickFunctions = (!empty($this->menuItemScript) ? "'.$this->menuItemScript.'" : '');
        $selectedIndicator = ($this->menuItemArea == $segment1 && $this->menuItemView == $segment2) ? '<span class="offset-hidden js-selected-menu-item">selected</span>' : "";
        $returnFalse = ($this->menuItemClickable == false) ?  'return false;' : "";

        if ($isActive != true) {
            return  "
                        <li class=\"{$activeClass}\">
                            <a class=\"\" href=\"".base_url()."index.php/{$this->menuItemArea}/{$this->menuItemView}\" onclick=\"{$onClickFunctions} {$returnFalse}\" >
                                {$icon}
                                <span>{$this->menuItemLabel}<span>
                            </a>
                        </li>
                    ";
        } else {
            return "";
        }
    }

    public function __toString() {
        return $this->RenderMenuItem();
    }
}
?>