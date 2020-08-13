# Orbis Primus Website
This is the official Orbis Primus website. Build by me using HTML, CSS, JS and PHP. No external dependencies exept fonts and icons. This website is hosted on One.com under the domain orbisprimus.se

## Getting started 
The file structure is pretty simple. The webstie contains three main files: a header a main index file and a footed. All three files combiled into one file with the PHP include command. If you need to change anything the the header, you only have to change the header file and so on. 
Images are stored in the `images` folder, plugins in the `plugins` folder and so on. 

## Reading/Creating Blog Posts
Blog posts are read from a file directory stored in the same location as all the other files, in a folder called `blog-posts`. The files are witten in Markdown (a simple google search will tell you everything about it) and are read with PHP and parsed by the Parsedown plugin. This means that by creating a file in the `blog-posts` folder will automatically print out the post on the website without anyone needing to do anything. 

## Main Colors

- #5d1932;
