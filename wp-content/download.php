<?php
print_r('asdasd');
$count_interior = 0;
$count_exterior = 0;
$count_access = 0;
$interior_group = SCF::get('interior_group');
if (!empty($interior_group[0]['interior_image'])) {
    foreach ($interior_group as $fields) {
        $count_interior++;
        $image = $fields["interior_image"];
        $image_interior_item = wp_get_attachment_image_src($image, 'thumbnail');
        $url = esc_url($image_interior_item[0]);
        $img = 'wp-content/themes/withleon/download/img_interior' . $count_interior . '.png';
        file_put_contents($img, file_get_contents($url));
        $zipName = 'room_image.zip';
        $zip = new ZipArchive();
        if ($zip->open($zipName, ZipArchive::CREATE) == FALSE) {
            die("can't open");
        }
        $zip->addFile('wp-content/themes/withleon/download/img_interior' . $count_interior . '.png', 'img_interior' . $count_interior . '.png');
    }
    $zip->close();
}

$exterior_group = SCF::get('exterior_group');
if (!empty($exterior_group)) {
    foreach ($exterior_group as $fields) {
        $count_exterior++;
        $image = $fields["exterior_image"];
        $image_exterior_item = wp_get_attachment_image_src($image, 'thumbnail');
        $url = esc_url($image_exterior_item[0]);
        $img = 'wp-content/themes/withleon/download/img_exterior' . $count_exterior . '.png';
        file_put_contents($img, file_get_contents($url));
        $zipName = 'room_image.zip';
        $zip = new ZipArchive();
        if ($zip->open($zipName, ZipArchive::CREATE) == FALSE) {
            die("can't open");
        }
        $zip->addFile('wp-content/themes/withleon/download/img_exterior' . $count_exterior . '.png', 'img_exterior' . $count_exterior . '.png');
    }
    $zip->close();
}

$access_group = SCF::get('access_group');
if (!empty($access_group)) {
    foreach ($access_group as $fields) {
        $count_access++;
        $image = $fields['access_image'];
        $image_access_item = wp_get_attachment_image_src($image, 'thumbnail');
        $url = esc_url($image_access_item[0]);
        $img = 'wp-content/themes/withleon/download/img_access' . $count_access . '.png';
        file_put_contents($img, file_get_contents($url));
        $zipName = 'room_image.zip';
        $zip = new ZipArchive();
        if ($zip->open($zipName, ZipArchive::CREATE) == FALSE) {
            die("can't open");
        }
        $zip->addFile('wp-content/themes/withleon/download/img_access' . $count_access . '.png', 'img_access' . $count_access . '.png');
    }
    $zip->close();
}


 $demo_name = "room_image.zip";
 header('Content-type: application/zip');
 header('Content-Disposition: attachment; filename="' . $demo_name . '"');
 readfile('room_image.zip', true); // auto download
 //if you wnat to delete this zip file after download
 unlink('room_image.zip');




