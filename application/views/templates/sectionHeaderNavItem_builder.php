<?php
class SectionHeaderNavItem {
    public $sectionHeaderNavItemLabel;
    public $sectionHeaderNavItemArea;
    public $sectionHeaderNavItemView;
    public $sectionHeaderNavItemIcon;
    public $sectionHeaderNavItemClickable;
    public $sectionHeaderNavItemUri;
    public $sectionHeaderNavItemModalColumn;
    public $isSubsectionHeaderNavItem;

    function __construct($sectionHeaderNavItemLabel, $sectionHeaderNavItemUrl, $sectionHeaderNavItemIcon, $sectionHeaderNavItemClickable, $sectionHeaderNavItemHidden, $sectionHeaderNavItemUri)
    {
        $this->sectionHeaderNavItemLabel = $sectionHeaderNavItemLabel;
        $this->sectionHeaderNavItemUrl = $sectionHeaderNavItemUrl;
        $this->sectionHeaderNavItemIcon = $sectionHeaderNavItemIcon;
        $this->sectionHeaderNavItemClickable = $sectionHeaderNavItemClickable;
        $this->sectionHeaderNavItemHidden = $sectionHeaderNavItemHidden;
        $this->sectionHeaderNavItemUri = $sectionHeaderNavItemUri;
    }

    public function RendersectionHeaderNavItem(){

        $menuItemIcon = ($this->sectionHeaderNavItemIcon != "") ? $this->sectionHeaderNavItemIcon : "fa fa-chevron-left";
        $menuItemUrl =  $this->sectionHeaderNavItemUrl;
        $menuItemLabel =  $this->sectionHeaderNavItemLabel;
        $hideLink = ($this->sectionHeaderNavItemHidden == true ) ? 'ui-hide' : "" ;
        $returnFalse = ($this->sectionHeaderNavItemClickable == false) ?  'return false;' : "";

        return "
                <a class=\"h4 {$hideLink}\" href=\"".base_url()."index.php/{$menuItemUrl}\"  onclick=\"{$returnFalse}\"  title=\"{$menuItemLabel}\">
                    <span class=\"{$menuItemIcon}\"></span>&nbsp;&nbsp;{$menuItemLabel}
                </a>"
            ;
    }

    public function __toString() {
        return $this->RenderSectionHeaderNavItem();
    }
}
?>



<!-- Menu Item Arguments
MenuItem( Friendly Label [string], href URL [string],Icon Class (Defualt is Back Arrow) [string], Is Clickable? [bool], Is Hidden? [bool], URI [Do Not Change]  )
-->
