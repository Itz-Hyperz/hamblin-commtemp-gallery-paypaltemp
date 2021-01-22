### A step-by-step tutorial on how to install this Gallery extension into the [PayPal Template](https://products.jakehamblin.com/paypaltemplate)

- For starters, make sure you own Jakes [PayPal Template](https://products.jakehamblin.com/paypaltemplate)
- Download this file, and then upload it to your websites file manager
- Put the `gallery` folder, inside of your `public_html` folder (or main directory)
- Next, find your config.php file (should be in your main `public_html` folder.)
- Copy and paste this configuration, just **ABOVE** your `$tabs` option.
```
/* START GALLERY PAGE */
	$gallery = [
		"https://i.imgur.com/ABcLzqm.jpg",
		"https://i.imgur.com/2kBFbgF.jpg",
		"https://i.imgur.com/ZF0k8K5.jpg",
		"https://i.imgur.com/J36Nb1Y.jpg",
		"https://i.imgur.com/HjxIAmg.jpg",
	];
	/* END GALLERY PAGE */
```
- chang ethe images (or add some), to that list in order to update the images **inside** of your gallery page

### Optional:
- If you wish to add the "Gallery" option to your navigational bar, simply add the following to your `$tabs`:
```
"Gallery" => "gallery",
```
Then, make sure you add it to your `$navbar_tab_enable` option, like so:
```
"Gallery" => "yes",
```

### Once done, you should be all good to go! If you are having trouble, please contact me on discord [here.](https://hyperz.dev/discord)
