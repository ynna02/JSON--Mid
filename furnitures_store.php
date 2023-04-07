<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$furnitures_store = array(
    array(
        "id" => "CHAIR",
        "brand" => "Chesterfield",
        "color" => "Sea Shell",
        "startingprice" => "₱38,998",
        "importfrom" => "England",
        "materials" => array("m1" => "velvet", "m2" => "leather", "m3" => "tweed", "m4" => "artificial leather"),
        "image" => "https://i.ebayimg.com/images/g/uDwAAOSwwbRhnkLu/s-l500.jpg"
    ),

    array(
        "id" => "TABLE",
        "brand" => "Kartell",
        "color" => "Corn Silk",
        "startingprice" => "₱25,999",
        "importfrom" => "London",
        "materials" => array("m1" => "melamine", "m2" => "leather", "m3" => "wood", "m4" => "plastic"),
        "image" => "https://img.archiexpo.com/images_ae/photo-mg/67905-12882905.jpg"
    ),

    array(
        "id" => "PILLOW",
        "brand" => "Saatva Latex",
        "color" => "Peach Puff",
        "startingprice" => "₱999",
        "importfrom" => "Canada",
        "materials" => array("m1" => "innerspring", "m2" => "memory foam", "m3" => "down", "m4" => "feather"),
        "image" => "https://m6m7r8i7.stackpathcdn.com/wp-content/uploads/sites/2/2015/06/convolute-latex-pillow-corner-angle-view_45th-st-bedding.jpg"
    ),

    array(
        "id" => "BED",
        "brand" => "Helix",
        "color" => "Peach Puff",
        "startingprice" => "₱43,999",
        "importfrom" => "Malaysia",
        "materials" => array("m1" => "fabric", "m2" => "metal", "m3" => "veener", "m4" => "wood"),
        "image" => "https://images.ctfassets.net/3h4z3ns1ox65/57FEYunOvDcAiqzcENUpbP/506058888f8541a9b817f67d59451080/beds_hero_m.jpg?fm=webp"
    ),

    array(
        "id" => "LIGHTING",
        "brand" => "Helix",
        "color" => "Old Lace",
        "startingprice" => "₱25,999",
        "importfrom" => "Australia",
        "materials" => array("m1" => "crystal", "m2" => "aluminum", "m3" => "acryl", "m4" => "glass"),
        "image" => "https://www.jaquar.com/images/thumbs/0042049_decorative-lighting_400.jpeg"
    ),
);

echo json_encode(array("furnitures_store" => $furnitures_store));
?>