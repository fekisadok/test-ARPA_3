<?php


class AdminCategoriesController extends AdminCategoriesControllerCore
{
 public function renderForm()
    {
        $this->initToolbar();

        /** @var Category $obj */
        $obj = $this->loadObject(true);
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $selected_categories = array((isset($obj->id_parent) && $obj->isParentCategoryAvailable($id_shop))? (int)$obj->id_parent : (int)Tools::getValue('id_parent', Category::getRootCategory()->id));
        $unidentified = new Group(Configuration::get('PS_UNIDENTIFIED_GROUP'));
        $guest = new Group(Configuration::get('PS_GUEST_GROUP'));
        $default = new Group(Configuration::get('PS_CUSTOMER_GROUP'));

        $unidentified_group_information = sprintf($this->trans('%s - All people without a valid customer account.', array(), 'Admin.Catalog.Feature'), '<b>'.$unidentified->name[$this->context->language->id].'</b>');
        $guest_group_information = sprintf($this->trans('%s - Customer who placed an order with the guest checkout.', array(), 'Admin.Catalog.Feature'), '<b>'.$guest->name[$this->context->language->id].'</b>');
        $default_group_information = sprintf($this->trans('%s - All people who have created an account on this site.', array(), 'Admin.Catalog.Feature'), '<b>'.$default->name[$this->context->language->id].'</b>');

        if (!($obj = $this->loadObject(true))) {
            return;
        }

        $image = _PS_CAT_IMG_DIR_.$obj->id.'.'.$this->imageType;
        $image_url = ImageManager::thumbnail($image, $this->table.'_'.(int)$obj->id.'.'.$this->imageType, 350, $this->imageType, true, true);

		$image1 = _PS_CAT_IMG_DIR_.$obj->id.'_1.'.$this->imageType;
        $image_url1 = ImageManager::thumbnail($image1, $this->table.'_'.(int)$obj->id.'_1.'.$this->imageType, 350, $this->imageType, true, true);
        $image_size1 = file_exists($image1) ? filesize($image1) / 1000 : false;
		
        $image_size = file_exists($image) ? filesize($image) / 1000 : false;
        $images_types = ImageType::getImagesTypes('categories');
        $format = array();
        $thumb = $thumb_url = '';
        $formatted_category= ImageType::getFormattedName('category');
        $formatted_small = ImageType::getFormattedName('small');
        foreach ($images_types as $k => $image_type) {
            if ($formatted_category == $image_type['name']) {
                $format['category'] = $image_type;
            } elseif ($formatted_small == $image_type['name']) {
                $format['small'] = $image_type;
                $thumb = _PS_CAT_IMG_DIR_.$obj->id.'-'.$image_type['name'].'.'.$this->imageType;
                if (is_file($thumb)) {
                    $thumb_url = ImageManager::thumbnail($thumb, $this->table.'_'.(int)$obj->id.'-thumb.'.$this->imageType, (int)$image_type['width'], $this->imageType, true, true);
                }
            }
        }

        if (!is_file($thumb)) {
            $thumb = $image;
            $thumb_url = ImageManager::thumbnail($image, $this->table.'_'.(int)$obj->id.'-thumb.'.$this->imageType, 125, $this->imageType, true, true);
            ImageManager::resize(_PS_TMP_IMG_DIR_.$this->table.'_'.(int)$obj->id.'-thumb.'.$this->imageType, _PS_TMP_IMG_DIR_.$this->table.'_'.(int)$obj->id.'-thumb.'.$this->imageType, (int)$image_type['width'], (int)$image_type['height']);
        }

        $thumb_size = file_exists($thumb) ? filesize($thumb) / 1000 : false;

        $menu_thumbnails = [];
        for ($i = 0; $i < 3; $i++) {
            if (file_exists(_PS_CAT_IMG_DIR_.(int)$obj->id.'-'.$i.'_thumb.jpg')) {
                $menu_thumbnails[$i]['type'] = HelperImageUploader::TYPE_IMAGE;
                $menu_thumbnails[$i]['image'] = ImageManager::thumbnail(_PS_CAT_IMG_DIR_.(int)$obj->id.'-'.$i.'_thumb.jpg', $this->context->controller->table.'_'.(int)$obj->id.'-'.$i.'_thumb.jpg', 100, 'jpg', true, true);
                $menu_thumbnails[$i]['delete_url'] = Context::getContext()->link->getAdminLink('AdminCategories').'&deleteThumb='.$i.'&id_category='.(int)$obj->id;
            }
        }
		 $image_cover_1 = [];
        for ($i = 0; $i < 3; $i++) {
			if ($i==1){
				if (file_exists(_PS_CAT_IMG_DIR_.(int)$obj->id.'-'.$i.'_second.jpg')) {
					$image_cover_1[$i]['type'] = HelperImageUploader::TYPE_IMAGE;
					$image_cover_1[$i]['image'] = ImageManager::thumbnail(_PS_CAT_IMG_DIR_.(int)$obj->id.'-'.$i.'_second.jpg', $this->context->controller->table.'_'.(int)$obj->id.'-'.$i.'_second.jpg', 150, 'jpg', true, true);
					$image_cover_1[$i]['delete_url'] = Context::getContext()->link->getAdminLink('AdminCategories').'&deleteSecond='.$i.'&id_category='.(int)$obj->id;
				}
			}
        }
			
        $this->fields_form = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->trans('Category', array(), 'Admin.Catalog.Feature'),
                'icon' => 'icon-tags'
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->trans('Name', array(), 'Admin.Global'),
                    'name' => 'name',
                    'lang' => true,
                    'required' => true,
                    'class' => 'copy2friendlyUrl',
                    'hint' => $this->trans('Invalid characters:', array(), 'Admin.Notifications.Info').' <>;=#{}',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->trans('Displayed', array(), 'Admin.Global'),
                    'name' => 'active',
                    'required' => false,
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->trans('Enabled', array(), 'Admin.Global')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->trans('Disabled', array(), 'Admin.Global')
                        )
                    )
                ),
                array(
                    'type'  => 'categories',
                    'label' => $this->trans('Parent category', array(), 'Admin.Catalog.Feature'),
                    'name'  => 'id_parent',
                    'tree'  => array(
                        'id'                  => 'categories-tree',
                        'selected_categories' => $selected_categories,
                        'disabled_categories' => (!Tools::isSubmit('add'.$this->table) && !Tools::isSubmit('submitAdd'.$this->table)) ? array($this->_category->id) : null,
                        'root_category'       => $context->shop->getCategory()
                    )
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->trans('Description', array(), 'Admin.Global'),
                    'name' => 'description',
                    'autoload_rte' => true,
                    'lang' => true,
                    'hint' => $this->trans('Invalid characters:', array(), 'Admin.Notifications.Info').' <>;=#{}'
                ),
				array(
                    'type' => 'textarea',
                    'label' => $this->trans('Deuxieme Description', array(), 'Admin.Global'),
                    'name' => 'second_description',
                    'autoload_rte' => true,
                    'lang' => true,
                    'hint' => $this->trans('Invalid characters:', array(), 'Admin.Notifications.Info').' <>;=#{}'
                ),
                array(
                    'type' => 'file',
                    'label' => $this->trans('Category Cover Image', array(), 'Admin.Catalog.Feature'),
                    'name' => 'image',
                    'display_image' => true,
                    'image' => $image_url ? $image_url : false,
                    'size' => $image_size,
                    'delete_url' => self::$currentIndex.'&'.$this->identifier.'='.$this->_category->id.'&token='.$this->token.'&deleteImage=1',
                   'hint' => $this->trans('This is the main image for your category, displayed in the category page. The category description will overlap this image and appear in its top-left corner.', array(), 'Admin.Catalog.Help'),
                   'format' => $format['category']
                ),
				
                array(
                    'type' => 'file',
                    'label' => $this->trans('Category thumbnail', array(), 'Admin.Catalog.Feature'),
                    'name' => 'thumb',
                    'display_image' => true,
                    'image' => $thumb_url ? $thumb_url : false,
                    'size' => $thumb_size,
                    'format' => isset($format['small']) ? $format['small'] : $format['category']
                ),
				array(
                    'type' => 'file',
                    'label' => $this->trans('Image Catégorie 2', array(), 'Admin.Catalog.Feature'),
                    'name' => 'image1',
                    'display_image' => true,
                    'image' => $image_url1 ? $image_url1 : false,
                    'size' => $image_size1,
                    'delete_url' => self::$currentIndex.'&'.$this->identifier.'='.$this->_category->id.'&token='.$this->token.'&deleteImage1=1',
                   'hint' => $this->trans('This is the main image for your category, displayed in the category page. The category description will overlap this image and appear in its top-left corner.', array(), 'Admin.Catalog.Help'),
                   'format' => $format['category']
                ),
				array(
                    'type' => 'file',
                    'label' => $this->trans('Image Catégorie 3 AJAX', array(), 'Admin.Catalog.Feature'),
                    'name' => 'second',
                    'ajax' => true,
                    'multiple' => false,
                    'max_files' => 10,
                    'files' => $image_cover_1,
                    'url' => Context::getContext()->link->getAdminLink('AdminCategories').'&ajax=1&id_category='.$this->id.'&action=uploadSecondImages',
                ),
                array(
                    'type' => 'file',
                    'label' => $this->trans('Menu thumbnails', array(), 'Admin.Catalog.Feature'),
                    'name' => 'thumbnail',
                    'ajax' => true,
                    'multiple' => true,
                    'max_files' => 3,
                    'files' => $menu_thumbnails,
                    'url' => Context::getContext()->link->getAdminLink('AdminCategories').'&ajax=1&id_category='.$this->id.'&action=uploadThumbnailImages',
                ),
				
                array(
                    'type' => 'text',
                    'label' => $this->trans('Meta title', array(), 'Admin.Global'),
                    'name' => 'meta_title',
                    'maxlength' => 70,
                    'maxchar' => 70,
                    'lang' => true,
                    'rows' => 5,
                    'cols' => 100,
                    'hint' => $this->trans('Forbidden characters:', array(), 'Admin.Notifications.Info').' <>;=#{}'
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->trans('Meta description', array(), 'Admin.Global'),
                    'name' => 'meta_description',
                    'maxlength' => 160,
                    'maxchar' => 160,
                    'lang' => true,
                    'rows' => 5,
                    'cols' => 100,
                    'hint' => $this->trans('Forbidden characters:', array(), 'Admin.Notifications.Info').' <>;=#{}'
                ),
                array(
                    'type' => 'tags',
                    'label' => $this->trans('Meta keywords', array(), 'Admin.Global'),
                    'name' => 'meta_keywords',
                    'lang' => true,
                    'hint' => $this->trans('To add "tags," click in the field, write something, and then press "Enter."', array(), 'Admin.Catalog.Help').'&nbsp;'.$this->trans('Forbidden characters:', array(), 'Admin.Notifications.Info').' <>;=#{}'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->trans('Friendly URL', array(), 'Admin.Global'),
                    'name' => 'link_rewrite',
                    'lang' => true,
                    'required' => true,
                    'hint' => $this->trans('Only letters, numbers, underscore (_) and the minus (-) character are allowed.', array(), 'Admin.Catalog.Help')
                ),
                array(
                    'type' => 'group',
                    'label' => $this->trans('Group access', array(), 'Admin.Catalog.Feature'),
                    'name' => 'groupBox',
                    'values' => Group::getGroups(Context::getContext()->language->id),
                    'info_introduction' => $this->trans('You now have three default customer groups.', array(), 'Admin.Catalog.Help'),
                    'unidentified' => $unidentified_group_information,
                    'guest' => $guest_group_information,
                    'customer' => $default_group_information,
                    'hint' => $this->trans('Mark all of the customer groups which you would like to have access to this category.', array(), 'Admin.Catalog.Help')
                )
            ),
            'submit' => array(
                'title' => $this->trans('Save', array(), 'Admin.Actions'),
                'name' => 'submitAdd'.$this->table.($this->_category->is_root_category && !Tools::isSubmit('add'.$this->table) && !Tools::isSubmit('add'.$this->table.'root') ? '': 'AndBackToParent')
            )
        );

        $this->tpl_form_vars['shared_category'] = Validate::isLoadedObject($obj) && $obj->hasMultishopEntries();
        $this->tpl_form_vars['PS_ALLOW_ACCENTED_CHARS_URL'] = (int)Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL');
        $this->tpl_form_vars['displayBackOfficeCategory'] = Hook::exec('displayBackOfficeCategory');

        // Display this field only if multistore option is enabled
        if (Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE') && Tools::isSubmit('add'.$this->table.'root')) {
            $this->fields_form['input'][] = array(
                'type' => 'switch',
                'label' => $this->trans('Root Category', array(), 'Admin.Catalog.Feature'),
                'name' => 'is_root_category',
                'required' => false,
                'is_bool' => true,
                'values' => array(
                    array(
                        'id' => 'is_root_on',
                        'value' => 1,
                        'label' => $this->trans('Yes', array(), 'Admin.Global')
                    ),
                    array(
                        'id' => 'is_root_off',
                        'value' => 0,
                        'label' => $this->trans('No', array(), 'Admin.Global')
                    )
                )
            );
            unset($this->fields_form['input'][2], $this->fields_form['input'][3]);
        }
        // Display this field only if multistore option is enabled AND there are several stores configured
        if (Shop::isFeatureActive()) {
            $this->fields_form['input'][] = array(
                'type' => 'shop',
                'label' => $this->trans('Shop association', array(), 'Admin.Global'),
                'name' => 'checkBoxShopAsso',
            );
        }

        // remove category tree and radio button "is_root_category" if this category has the root category as parent category to avoid any conflict
        if ($this->_category->id_parent == (int)Configuration::get('PS_ROOT_CATEGORY') && Tools::isSubmit('updatecategory')) {
            foreach ($this->fields_form['input'] as $k => $input) {
                if (in_array($input['name'], array('id_parent', 'is_root_category'))) {
                    unset($this->fields_form['input'][$k]);
                }
            }
        }

        if (!($obj = $this->loadObject(true))) {
            return;
        }

        $image = ImageManager::thumbnail(_PS_CAT_IMG_DIR_.'/'.$obj->id.'.'.$this->imageType, $this->table.'_'.(int)$obj->id.'.'.$this->imageType, 350, $this->imageType, true);
        $image1 = ImageManager::thumbnail(_PS_CAT_IMG_DIR_.'/'.$obj->id.'_1.'.$this->imageType, $this->table.'_'.(int)$obj->id.'_1.'.$this->imageType, 350, $this->imageType, true);

        $this->fields_value = array(
            'image' => $image ? $image : false,
            'size' => $image ? filesize(_PS_CAT_IMG_DIR_.'/'.$obj->id.'.'.$this->imageType) / 1000 : false,
			'image1' => $image1 ? $image1 : false,
            'size1' => $image1 ? filesize(_PS_CAT_IMG_DIR_.'/'.$obj->id.'_1.'.$this->imageType) / 1000 : false
        );

        // Added values of object Group
        $category_groups_ids = $obj->getGroups();

        $groups = Group::getGroups($this->context->language->id);
        // if empty $carrier_groups_ids : object creation : we set the default groups
        if (empty($category_groups_ids)) {
            $preselected = array(Configuration::get('PS_UNIDENTIFIED_GROUP'), Configuration::get('PS_GUEST_GROUP'), Configuration::get('PS_CUSTOMER_GROUP'));
            $category_groups_ids = array_merge($category_groups_ids, $preselected);
        }
        foreach ($groups as $group) {
            $this->fields_value['groupBox_'.$group['id_group']] = Tools::getValue('groupBox_'.$group['id_group'], (in_array($group['id_group'], $category_groups_ids)));
        }

        $this->fields_value['is_root_category'] = (bool)Tools::isSubmit('add'.$this->table.'root');

        return AdminController::renderForm();
    }
	
	protected function postImage($id)
    {
        $ret = parent::postImage($id);
        if (($id_category = (int)Tools::getValue('id_category')) && isset($_FILES) && count($_FILES)) {
            $name = 'image';
            if ($_FILES[$name]['name'] != null && file_exists(_PS_CAT_IMG_DIR_.$id_category.'.'.$this->imageType)) {
                $images_types = ImageType::getImagesTypes('categories');
                foreach ($images_types as $k => $image_type) {
                    if (!ImageManager::resize(
                        _PS_CAT_IMG_DIR_.$id_category.'.'.$this->imageType,
                        _PS_CAT_IMG_DIR_.$id_category.'-'.stripslashes($image_type['name']).'.'.$this->imageType,
                        (int)$image_type['width'],
                        (int)$image_type['height']
                    )) {
                        $this->errors = $this->trans('An error occurred while uploading category image.', array(), 'Admin.Catalog.Notification');
                    }
                }
            }

            $name = 'thumb';
            if ($_FILES[$name]['name'] != null) {
                if (!isset($images_types)) {
                    $images_types = ImageType::getImagesTypes('categories');
                }
                $formatted_small = ImageType::getFormattedName('small');
                foreach ($images_types as $k => $image_type) {
                    if ($formatted_small == $image_type['name']) {
                        if ($error = ImageManager::validateUpload($_FILES[$name], Tools::getMaxUploadSize())) {
                            $this->errors[] = $error;
                        } elseif (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES[$name]['tmp_name'], $tmpName)) {
                            $ret = false;
                        } else {
                            if (!ImageManager::resize(
                                $tmpName,
                                _PS_CAT_IMG_DIR_.$id_category.'-'.stripslashes($image_type['name']).'.'.$this->imageType,
                                (int)$image_type['width'],
                                (int)$image_type['height']
                            )) {
                                $this->errors = $this->trans('An error occurred while uploading thumbnail image.', array(), 'Admin.Catalog.Notification');
                            } elseif (($infos = getimagesize($tmpName)) && is_array($infos)) {
                                ImageManager::resize(
                                    $tmpName,
                                    _PS_CAT_IMG_DIR_.$id_category.'_'.$name.'.'.$this->imageType,
                                    (int)$infos[0],
                                    (int)$infos[1]
                                );
                            }
                            if (count($this->errors)) {
                                $ret = false;
                            }
                            unlink($tmpName);
                            $ret = true;
                        }
                    }
                }
            }
			
        }
        $ret2 = $this->uploadImage($id.'_1', 'image1', $this->fieldImageSettings['dir'].'/');
		
           if (($id_category = (int)Tools::getValue('id_category')) && isset($_FILES) && count($_FILES)) {
            $name = 'image1';
				if ($_FILES[$name]['name'] != null && file_exists(_PS_CAT_IMG_DIR_.$id_category.'_1.'.$this->imageType)) {
					$images_types = ImageType::getImagesTypes('categories');
					foreach ($images_types as $k => $image_type) {
						if (!ImageManager::resize(
							_PS_CAT_IMG_DIR_.$id_category.'_1.'.$this->imageType,
							_PS_CAT_IMG_DIR_.$id_category.'_1-'.stripslashes($image_type['name']).'.'.$this->imageType,
							(int)$image_type['width'],
							(int)$image_type['height']
						)) {
							$this->errors = $this->trans('An error occurred while uploading category image.', array(), 'Admin.Catalog.Notification');
						}
					}
				}
		   }
		 
		return $ret && $ret2;
    }
	
	protected function uploadImage($id, $name, $dir, $ext = false, $width = null, $height = null)
    {
        if (isset($_FILES[$name]['tmp_name']) && !empty($_FILES[$name]['tmp_name'])) {
            // Delete old image
            if (Validate::isLoadedObject($object = $this->loadObject())) {
				if ($name == 'image1'){
					$object->deleteImage1();
				}else{
					$object->deleteImage();
				}
            } else {
                return false;
            }

            // Check image validity
            $max_size = isset($this->max_image_size) ? $this->max_image_size : 0;
            if ($error = ImageManager::validateUpload($_FILES[$name], Tools::getMaxUploadSize($max_size))) {
                $this->errors[] = $error;
            }

            $tmp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');
            if (!$tmp_name) {
                return false;
            }

            if (!move_uploaded_file($_FILES[$name]['tmp_name'], $tmp_name)) {
                return false;
            }

            // Evaluate the memory required to resize the image: if it's too much, you can't resize it.
            if (!ImageManager::checkImageMemoryLimit($tmp_name)) {
                $this->errors[] = Tools::displayError('Due to memory limit restrictions, this image cannot be loaded. Please increase your memory_limit value via your server\'s configuration settings. ');
            }

            // Copy new image
            if (empty($this->errors) && !ImageManager::resize($tmp_name, _PS_IMG_DIR_.$dir.$id.'.'.$this->imageType, (int)$width, (int)$height, ($ext ? $ext : $this->imageType))) {
                $this->errors[] = Tools::displayError('An error occurred while uploading the image.');
            }

            if (count($this->errors)) {
                return false;
            }
            if ($this->afterImageUpload()) {
                unlink($tmp_name);
                return true;
            }
            return false;
        }
        return true;
    }
	
	public function postProcess()
    {
        if (!in_array($this->display, array('edit', 'add'))) {
            $this->multishop_context_group = false;
        }
        if (Tools::isSubmit('forcedeleteImage') || (isset($_FILES['image']) && $_FILES['image']['size'] > 0) || Tools::getValue('deleteImage')) {
            $this->processForceDeleteImage();
            $this->processForceDeleteThumb();
            if (Tools::isSubmit('forcedeleteImage')) {
                Tools::redirectAdmin(self::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminCategories').'&conf=7');
            }
		}else if (Tools::getValue('deleteImage1')){
				$category= $this->loadObject(true);
				if (Validate::isLoadedObject($category)){
					if($category->deleteImage1(true)){
						Tools::redirectAdmin(self::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminCategories').'&updatecategory&id_category='.$category->id.'&conf=7');
					}
				}
			}
        if (($id_thumb = Tools::getValue('deleteThumb', false)) !== false) {
            if (file_exists(_PS_CAT_IMG_DIR_.(int)Tools::getValue('id_category').'-'.(int)$id_thumb.'_thumb.jpg')
                && !unlink(_PS_CAT_IMG_DIR_.(int)Tools::getValue('id_category').'-'.(int)$id_thumb.'_thumb.jpg')) {
                $this->context->controller->errors[] = $this->trans('Error while delete', array(), 'Admin.Notifications.Error');
            }

            if (empty($this->context->controller->errors)) {
                Tools::clearSmartyCache();
            }

            Tools::redirectAdmin(Context::getContext()->link->getAdminLink('AdminCategories').'&id_category='
                .(int)Tools::getValue('id_category').'&updatecategory');
        }
		if (($id_thumb = Tools::getValue('deleteSecond', false)) !== false) {
            if (file_exists(_PS_CAT_IMG_DIR_.(int)Tools::getValue('id_category').'-'.(int)$id_thumb.'_second.jpg')
                && !unlink(_PS_CAT_IMG_DIR_.(int)Tools::getValue('id_category').'-'.(int)$id_thumb.'_second.jpg')) {
                $this->context->controller->errors[] = $this->trans('Error while delete', array(), 'Admin.Notifications.Error');
            }

            if (empty($this->context->controller->errors)) {
                Tools::clearSmartyCache();
            }

            Tools::redirectAdmin(Context::getContext()->link->getAdminLink('AdminCategories').'&id_category='
                .(int)Tools::getValue('id_category').'&updatecategory');
        }
        return parent::postProcess();
    }
	
	 public function ajaxProcessuploadSecondImages()
    {
        $category = new Category((int)Tools::getValue('id_category'));

        if (isset($_FILES['second'])) {
            //Get total of image already present in directory
            $files = scandir(_PS_CAT_IMG_DIR_);
            $assigned_keys = array();
            // $allowed_keys  = array(0, 1, 2);
            $allowed_keys  = array(1);

            foreach ($files as $file) {
                $matches = array();

                if (preg_match('/^'.$category->id.'-([0-9])?_second.jpg/i', $file, $matches) === 1) {
                    $assigned_keys[] = (int)$matches[1];
                }
            }

            $available_keys = array_diff($allowed_keys, $assigned_keys);
            $helper = new HelperImageUploader('second');
            $files  = $helper->process();
            $total_errors = array();

            if (count($available_keys) < count($files)) {
                $total_errors['name'] = $this->trans('An error occurred while uploading the image:', array(), 'Admin.Catalog.Notification');
                $total_errors['error'] = $this->trans('You cannot upload more files', array(), 'Admin.Notifications.Error');
                die(Tools::jsonEncode(array('second' => array($total_errors))));
            }

            foreach ($files as $key => &$file) {
                $id = array_shift($available_keys);
                $errors = array();
                // Evaluate the memory required to resize the image: if it's too much, you can't resize it.
                if (isset($file['save_path']) && !ImageManager::checkImageMemoryLimit($file['save_path'])) {
                    $errors[] = Tools::displayError('Due to memory limit restrictions, this image cannot be loaded. Please increase your memory_limit value via your server\'s configuration settings. ');
                }
					
                // Copy new image
                if (!isset($file['save_path']) || (empty($errors) && !ImageManager::resize($file['save_path'], _PS_CAT_IMG_DIR_
                            .(int)Tools::getValue('id_category').'-'.$id.'_second.jpg',141, 180))) {
                    $errors[] = $this->trans('An error occurred while uploading the image.', array(), 'Admin.Catalog.Notification');
                }

                if (count($errors)) {
                    $total_errors = array_merge($total_errors, $errors);
                }

                if (isset($file['save_path']) && is_file($file['save_path'])) {
                    unlink($file['save_path']);
                }
                //Necesary to prevent hacking
                if (isset($file['save_path'])) {
                    unset($file['save_path']);
                }

                if (isset($file['tmp_name'])) {
                    unset($file['tmp_name']);
                }

                //Add image preview and delete url
                $file['image'] = ImageManager::thumbnail(_PS_CAT_IMG_DIR_.(int)$category->id.'-'.$id.'_second.jpg',
                    $this->context->controller->table.'_'.(int)$category->id.'-'.$id.'_second.jpg', 150, 'jpg', true, true);
					
                $file['delete_url'] = Context::getContext()->link->getAdminLink('AdminCategories').'&deleteSecond='.$id.'&id_category='.(int)$category->id.'&updatecategory';
            }

            if (count($total_errors)) {
                $this->context->controller->errors = array_merge($this->context->controller->errors, $total_errors);
            } else {
                Tools::clearSmartyCache();
            }

            die(Tools::jsonEncode(array('second' => $files)));
        }
    }
}
?>