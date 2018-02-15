<?php session_start();
/**
 * Template Name: fileDragDropUploadImg
 */
$file = "";


// echo "<pre>";
//    print_r($_FILES);
// echo "<pre>";



if(isset($_FILES['file']['name'])){
    $count_image = count($_FILES["file"]["name"]);
    for($i = 0; $i < $count_image; $i++ ){

        $file_name = $_FILES['file']['name'][$i];
        $file_type = $_FILES['file']['type'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp_name = $_FILES['file']['tmp_name'][$i];
        $target_dirs = get_theme_root() . "/custom/images/tmp_uploads/";
        // echo "this is text". $_POST['text-area'];
        if($file_name){
            move_uploaded_file($file_tmp_name, $target_dirs . "$file_name");
            $folder = $target_dirs;
            if(is_dir($folder)){
                if($handle = opendir($folder)){
                    // while(($file=readdir($handle)) != false){
                    // 	if($file==='.' || $file ==='..')continue;
                    // }$file_name
                    echo '<div style="width:  200px;height: 200px;background-position: 50% 50%;background-repeat:   no-repeat;background-size:cover; background-image:url('. get_bloginfo ( 'template_url' ). '/images/tmp_uploads/'. $file_name.' );"  ></div>';
                    //echo '<img src = "'. get_bloginfo ( 'template_url' ). "/images/tmp_uploads/". $file_name. '" alt = "" width = "150px" height = "150px" alt="..." >';

                    closedir($handle);

                }
            }
        }
    }

}


 