#!/bin/bash/
optipng public/smarty/assets/images/*.png;
optipng public/smarty/assets/images/demo/*.png;
optipng public/smarty/assets/images/cursosilernus/*.png;
optipng public/smarty/assets/images/demo/layerslider/*.png;


echo "optimizadas las imagenes .png";

jpegoptim --strip-all public/smarty/assets/images/*.jpg;
jpegoptim --strip-all public/smarty/assets/images/demo/*.jpg;
jpegoptim --strip-all public/smarty/assets/images/cursosilernus/*.jpg
jpegoptim --strip-all public/smarty/assets/images/demo/layerslider/*.jpg;


echo "optimizadas las imagenes .jpg";


