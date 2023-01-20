<?php


// handle the image upload

class ImageUpload{


    private $image;
    private $image_name;
    private $image_tmp_name;
    private $image_size;
    private $image_error;
    private $error = [];
    private $allowed_ext = array('jpg', 'jpeg', 'png');

    public function __construct($image)
    {
        $this->image = $image;
        
        $this->image_name = $this->image['name'];
        $this->image_tmp_name = $this->image['tmp_name'];
        $this->image_size = $this->image['size'];
        $this->image_error = $this->image['error'];
    }

    public function expolodeImageName(){
        $file_ext = explode('.', $this->image_name);
        $actualExt = strtolower(end($file_ext));

        return $actualExt;
    }

    public function validateImage(){

        $actualExt = $this->expolodeImageName();

        if (!in_array($actualExt, $this->allowed_ext)) {
            $this->error['error_name'] = 'You cannot upload files of this type';
            
            if ($this->image_error !== 0) {
                $this->error['error_name'] = 'There was an error uploading your file';

                if ($this->image_size > 1000000) {
                    $this->error['error_name'] = 'File size too large';
                }
            }
        }

        // if image is empty
        if (empty($this->image_name)) {
            $this->error['error_name'] = 'Image is required';
        }

        return $this->error;

    }


    public function uploadImage($path){
        $actualExt = $this->expolodeImageName();
        $new_img = time() . '_' . $actualExt;
        $fileDestination = $path . $new_img;
        move_uploaded_file($this->image_tmp_name, $fileDestination);

        return $new_img;

    }
}