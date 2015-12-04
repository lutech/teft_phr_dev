<?php
class TabMenuItem {
    public $tabMenuItemLabel;
    public $tabMenuItemArea;
    public $tabMenuItemView;
    public $tabMenuItemIcon;
    public $tabMenuItemClickable;
    public $tabMenuItemUri;
    public $tabMenuItemModalColumn;
    public $isSubTabMenuItem;

    function __construct($tabMenuItemLabel, $tabMenuItemArea ,$tabMenuItemView, $tabMenuItemIcon, $tabMenuItemClickable, $tabMenuItemUri, $tabMenuItemModalColumn)
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
        $segment1 =  $this->tabMenuItemUri->segment(1);
        $segment2 =  $this->tabMenuItemUri->segment(2);
        $segment3 = $this->tabMenuItemUri->segment(3);

        $isActive = ($this->tabMenuItemArea == $segment1 && $this->tabMenuItemView == $segment2) ||
            ($this->tabMenuItemArea == $segment1."/".$segment2 &&  $this->tabMenuItemView == $segment3) ;
        $activeClass = ($isActive == true) ? 'selected' : "";
        $column = ($this->tabMenuItemModalColumn == true) ? 'col-xs-4 col-sm-3' : "";
        $menuItemLabel =  $this->tabMenuItemLabel;
        $hideLabel = ($this->tabMenuItemModalColumn == true ) ? "" : 'ui-hide';
        $returnFalse = ($this->tabMenuItemClickable == false) ?  'return false;' : "";
        $tabIcon = (!empty($this->tabMenuItemIcon)) ?  $this->tabMenuItemIcon : "";
        return "<li class='{$column}'>
                    <a class=\"text-center {$activeClass}\" href=\"".base_url()."index.php/{$this->tabMenuItemArea}/{$this->tabMenuItemView}\"  onclick=\"{$returnFalse}\"  title=\"{$menuItemLabel}\">
                        <span class=\"fa {$tabIcon}\"></span><br/>
                        <span class=\"label {$hideLabel}\">{$menuItemLabel}</span>
                    </a>
                </li>"
            ;
    }

    public function __toString() {
        return $this->RenderTabMenuItem();
    }
}
?>
