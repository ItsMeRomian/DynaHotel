# DynaFools, a bootstrap theme for BrainCMS

Note: This theme is made for a screenwidth of 1366 pixels. Some images might display incorrecly. This is because the hotel this theme is made for, is only played on chromebooks (acer c720p). It felt unnecessary to make larger images because they aren't going to be seen anyway.

This theme is mostly in Dutch and does not use the predefined strings found in the language folder of Brain. The theme is also based on PlusEMU's database structure.

## What to change / How to install

1. In staff.php, change itsmeromian, kazoo etc. to staff users of your own hotel.
2. Change `/system/app/plugin/habbooftheweek.php` to `<?php include_once $_SERVER["DOCUMENT_ROOT"] . "templates/DynaHotel/hotw.php"; ?>` (Change `DynaHotel` to the name you gave the folder.)

## Previews:

me page:
![](https://i.imgur.com/OoxNZ5n.png)

home page:
![](https://i.imgur.com/yKjdcAt.png)

staff page:
![](https://i.imgur.com/qYsAq8e.png)
