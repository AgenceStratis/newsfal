# News FAL Image Field

## About

Adds FAL file field to news for further FE render via Fluid.

## Installation

Just install the extension and it will add new image field to Your news.

## Use

/Resources/Private/Partials/List/Item.html

<f:for each="{newsItem.txNewsfalImage}" as="image" key="number" iteration="itemIteration">
	<f:format.html>
		number : {number}
		image.uid : {image.uid}
		image.public_url : {image.public_url}
		image.title : {image.title}
		image.description : {image.description} 
		image.extension : {image.extension}
		image.size : {image.size}
		image.creation_time : {image.creation_time}
		image.modification_time : {image.modification_time}
		image.width : {image.width}
		image.height : {image.height}
	</f:format.html>
</f:for>

## Ressources used during development

* http://docs.typo3.org/typo3cms/extensions/news/latest/Main/Tutorial/ExtendingNews/Index.html
* http://buzz.typo3.org/teams/extbase/article/fal-and-extbase-the-easy-part/
* https://gist.github.com/fedir/6029864
* http://t3brightside.com/blog/article/extending-extnews-with-a-fal-compilant-audio-and-customized-youtube-video/
