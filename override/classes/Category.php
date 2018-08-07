<?php 
Class Category extends CategoryCore
{
 /** @var string Description */
    public $second_description;
 
	 public static $definition = array(
			'table' => 'category',
			'primary' => 'id_category',
			'multilang' => true,
			'multilang_shop' => true,
			'fields' => array(
				'nleft' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
				'nright' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
				'level_depth' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
				'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
				'id_parent' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
				'id_shop_default' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
				'is_root_category' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
				'position' => array('type' => self::TYPE_INT),
				'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
				'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
				/* Lang fields */
				'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCatalogName', 'required' => true, 'size' => 128),
				'link_rewrite' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isLinkRewrite', 'required' => true, 'size' => 128),
				'description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml'),
				'second_description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml'),
				'meta_title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 128),
				'meta_description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
				'meta_keywords' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
			),
		);
		
    public function deleteImage1($force_delete = false)
    {
        if (!$this->id)
            return false;
         
        if ($force_delete || !$this->hasMultishopEntries())
        {
            /* Deleting object images and thumbnails (cache) */
            if ($this->image_dir)
            {
                if (file_exists($this->image_dir.$this->id.'_1.'.$this->image_format)
                    && !unlink($this->image_dir.$this->id.'_1.'.$this->image_format))
                    return false;
            }
            if (file_exists(_PS_TMP_IMG_DIR_.$this->def['table'].'_'.$this->id.'_1.'.$this->image_format)
                && !unlink(_PS_TMP_IMG_DIR_.$this->def['table'].'_'.$this->id.'_1.'.$this->image_format))
                return false;
            if (file_exists(_PS_TMP_IMG_DIR_.$this->def['table'].'_mini_'.$this->id.'_1.'.$this->image_format)
                && !unlink(_PS_TMP_IMG_DIR_.$this->def['table'].'_mini_'.$this->id.'_1.'.$this->image_format))
                return false;
     
            $types = ImageType::getImagesTypes();
            foreach ($types as $image_type)
                if (file_exists($this->image_dir.$this->id.'_1-'.stripslashes($image_type['name']).'.'.$this->image_format)
                && !unlink($this->image_dir.$this->id.'_1-'.stripslashes($image_type['name']).'.'.$this->image_format))
                    return false;
        }
        return true;
    }
	
}
?>