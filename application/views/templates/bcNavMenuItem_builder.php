<?php

class BreadCrumbMenuItem {
    public $menuItemLabel;
    public $menuItemArea;
    public $menuItemView;
    public $thirdViewLevel;
    public $fourthViewLevel;
    public $menuItemClickable;
    public $menuItemHideUnlessActive;
    public $menuItemIcon;
    public $menuItemScript;
    public $uri;

    function __construct($menuItemLabel, $menuItemArea ,$menuItemView, $thirdViewLevel, $fourthViewLevel, $menuItemIcon, $menuItemClickable, $menuItemHideUnlessActive, $menuItemScript,$uri )
    {
        $this->menuItemLabel = $menuItemLabel;
        $this->menuItemArea = $menuItemArea;
        $this->menuItemView = $menuItemView;
        $this->menuItemThirdViewLevel = $thirdViewLevel;
        $this->menuItemFourthViewLevel = $fourthViewLevel;
        $this->menuItemIcon = $menuItemIcon;
        $this->menuItemClickable = $menuItemClickable;
        $this->menuItemHideUnlessActive = $menuItemHideUnlessActive;
        $this->menuItemScript = $menuItemScript;
        $this->uri = $uri;
    }

    public function RenderMenuItem(){
        $thirdViewLevelName = (!empty($this->menuItemThirdViewLevel)) ? '/'. $this->menuItemThirdViewLevel : '';
        $fourthViewLevelName = (!empty($this->menuItemFourthViewLevel)) ? '/'.$this->menuItemFourthViewLevel : '';
        $isThirdLevel = $this->menuItemThirdViewLevel == $this->uri->segment(3);
        $isFourthLevel = $this->menuItemFourthViewLevel == $this->uri->segment(4);
        $hasThirdLevel = $this->uri->segment(3);
        $hasFourthLevel = $this->uri->segment(4);
        $hasNoChildNode = $this->menuItemHideUnlessActive == true;

        $activeClass = ($this->uri->segment(4)) ?
            ($isFourthLevel) ?  'selected' : ""
            : ($isThirdLevel) ? 'selected' : "";


        $displayStyle = $hasNoChildNode == true ?
            ($hasFourthLevel == false && $isFourthLevel == false) ? 'display: none;'
                    :($hasThirdLevel == false && $isThirdLevel == false) ? 'display: none;'
            :""
            :""
        ;

        $disableAttr = ($this->uri->segment(4)) ?
            ($isFourthLevel) ?  'return false;' : ""
            : ($isThirdLevel) ? 'return false;' : "";

        $icon = (!empty($this->menuItemIcon) ? '<span class="'.$this->menuItemIcon.'"></span>' : '');
        $onClickFunctions = (!empty($this->menuItemScript) ? "'.$this->menuItemScript.'" : '');
        $returnFalse = ($this->menuItemClickable == false) ?  'return false;' : "";

        return  "
                        <a class=\" h4 {$activeClass}\" href=\"".base_url()."index.php/{$this->menuItemArea}/{$this->menuItemView}{$thirdViewLevelName}{$fourthViewLevelName}\" onclick=\"{$onClickFunctions}{$returnFalse}{$disableAttr}\"
                        style=\"{$displayStyle}\">
                            {$icon}
                            {$this->menuItemLabel}
                        </a>
                        ";
    }

    public function __toString() {
        return $this->RenderMenuItem();
    }
}
?>

<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Third Level Page [string], Fourth Level Page [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], URI [Do Not Change]  )
-->