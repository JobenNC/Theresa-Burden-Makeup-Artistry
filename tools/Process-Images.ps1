<#
I got some ImageMagick scripts I use to do some 'heavy duty' optimising. Frist Resize all .jpg that are larger than 1650px 
[1] Convert all .jpg to a quality of 80 
[2] And usually I also check if there are still some images that are larger than 400kb 
[3] (see scripts below ) and if that is all done ImageOptim makes the files even smaller. 
I also run this scripts on .png file but the -quality` ones don't work on that. 
ImageMagic is a shell script you can run from your terminal I use it on OSX, I don't know if it will work on Window.
#>

#Mogrify is for in-place batch
#http://www.imagemagick.org/Usage/basics/#mogrify

#or percent escapes '%[filename:fname]'

find . -type f -iname "*.jpg" -exec convert \{\} -resize 1650x1650\> \{\} \;

find . -type f -iname "*.jpg" -exec convert \{\} -quality 80 \{\} \;

find . -type f -size +400k -iname "*.jpg" -exec convert \{\} -quality 60 \{\} \;



#PS C:\Users\josep\GitHub\Theresa-Burden-Makeup-Artistry\img\GalleryFull\test-space> magick convert *jpg -set filename:fname "%t" '%[fi
#lename:fname].png'

#PS C:\Users\josep\GitHub\Theresa-Burden-Makeup-Artistry\img\GalleryFull\test-space> magick convert *jpg -set filename:fname "%t" -qual
#ity 80 '%[filename:fname]-80.jpg'