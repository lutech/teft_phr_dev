<?php
class TabMenuItem {
    public $tabMenuItemLabel;
    public $tabMenuItemArea;
    public $tabMenuItemView;
    public $tabMenuItemIcon;
    public $tabMenuItemClickable;
    public $tabMenuItemUri;
    public $tabMenuItemModalColumn;

    function __construct($tabMenuItemLabel, $tabMenuItemArea ,$tabMenuItemView, $tabMenuItemIcon, $tabMenuItemClickable, $tabMenuItemUri, $tabMenuItemModalColumn )
    {
        $this->tabMenuItemLabel = $tabMenuItemLabel;
        $this->tabMenuItemArea = $tabMenuItemArea;
        $this->tabMenuItemView = $tabMenuItemView;
        $this->tabMenuItemIcon = $tabMenuItemIcon;
        $this->tabMenuItemClickable = $tabMenuItemClickable;
        $this->tabMenuItemUri = $tabMenuItemUri;
        $this->tabMenuItemModalColumn = $tabMenuItemModalColumn;
    }

    public function RenderTabMenuItem(){
        $isActive = ($this->tabMenuItemArea == $this->tabMenuItemUri->segment(1) && $this->tabMenuItemView == $this->tabMenuItemUri->segment(2));
        $activeClass = ($isActive == true) ? 'selected' : "";
        $column = ($this->tabMenuItemModalColumn == true) ? 'col-xs-4 col-sm-3' : "";
        $menuItemLabel = ($this->tabMenuItemModalColumn == true ) ? $this->tabMenuItemLabel : "";
        $returnFalse = ($this->tabMenuItemClickable == false) ?  'return false;' : "";
        $tabIcon = (!empty($this->tabMenuItemIcon)) ?  $this->tabMenuItemIcon : "";

        return "<li class='{$column}'>
                    <a class=\"text-center {$activeClass}\" href=\"".base_url()."index.php/{$this->tabMenuItemArea}/{$this->tabMenuItemView}\" {$returnFalse}>
                        <span class=\"fa {$tabIcon}\"></span><br/>
                        <span class=\"label\">{$menuItemLabel}</span>
                    </a>
                </li>"
            ;
    }

    public function __toString() {
        return $this->RenderTabMenuItem();
    }
}
?>
