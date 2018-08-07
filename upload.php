<?php
// require_once(dirname(__FILE__).'../../../config/config.inc.php');
// require_once(dirname(__FILE__).'../../../init.php');


// echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
if($_FILES["image1"]["name"] != null)
{
 $test = explode('.', $_FILES["image1"]["name"]);
 $ext = end($test);
 $name = 'test' . '.' . $ext;
 $location = './img/' . $name;  
 $tmp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');
 move_uploaded_file($_FILES["image1"]["name"], $tmp_name);
 // echo '<img src="'.$tmp_name.'" height="150" width="225" class="img-thumbnail" />';
 echo 'test';
}





function postImage($id){
	
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
		   
		   return $ret2;
}


function uploadImage($id, $name, $dir, $ext = false, $width = null, $height = null)
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
	
?>