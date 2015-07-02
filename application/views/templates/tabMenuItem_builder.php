<?php
class TabMenuItem {
    public $tabMenuItemLabel;
    public $tabMenuItemArea;
    public $tabMenuItemView;
    public $tabMenuItemIcon;
    public $tabMenuItemClickable;
    public $tabMenuItemUri;

    function __construct($tabMenuItemLabel, $tabMenuItemArea ,$tabMenuItemView, $tabMenuItemIcon, $tabMenuItemClickable, $tabMenuItemUri )
    {
        $this->tabMenuItemLabel = $tabMenuItemLabel;
        $this->tabMenuItemArea = $tabMenuItemArea;
        $this->tabMenuItemView = $tabMenuItemView;
        $this->tabMenuItemIcon = $tabMenuItemIcon;
        $this->tabMenuItemClickable = $tabMenuItemClickable;
        $this->tabMenuItemUri = $tabMenuItemUri;
    }

    public function RenderTabMenuItem(){
        $isActive = ($this->tabMenuItemArea == $this->tabMenuItemUri->segment(1) && $this->tabMenuItemView == $this->tabMenuItemUri->segment(2));
        $activeClass = ($isActive == true) ? 'selected' : "";
        $returnFalse = ($this->tabMenuItemClickable == false) ?  'return false;' : "";
        $tabIcon = (!empty($this->tabMenuItemIcon)) ?  $this->tabMenuItemIcon : "";

        return "<li class=\"col-sm-1\">
                    <a class=\"btn btn-default btn-block btn-rad {$activeClass}\" href=\"".base_url()."index.php/{$this->tabMenuItemArea}/{$this->tabMenuItemView}\" {$returnFalse}>
                        <span class=\"fa {$tabIcon} fa-3x\"></span><br/>
                        {$this->tabMenuItemLabel}
                    </a>
                </li>"
            ;
    }

    public function __toString() {
        return $this->RenderTabMenuItem();
    }
}
?>