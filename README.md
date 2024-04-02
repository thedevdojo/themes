# DevDojo Themes Package

This is a package that will add theme support in your Laravel application

## Adding Themes

The **themes** package will look inside of the `resources/themes` folder for any folder that has a `.json` file inside of it with the same name. *(You can change the theme folder location in the config)*

As an example if you have a folder called **sample-theme** and inside that folder you have another file called **sample-theme.json** with the following contents:

```
{
    "name": "Sample Theme",
    "version": "1.0"
}
```

This package will detect this as a new theme. You can also include a sample screenshot of your theme, which would be **sample-theme.jpg** *(800x500px) for best results*

In fact, you can checkout the sample-theme repo here: [https://github.com/thedevdojo/sample-theme](https://github.com/thedevdojo/sample-theme)

You can activate this theme by setting the `active` column to 1 for that specific theme. Then use it like:

```
return view('theme::welcome')
```

This will then look in the current active theme folder for a new view called `welcome.blade.php` :D

## Theme Configs

You may choose to publish a config to your project by running:

```
php artisan vendor:publish
```

You will want to publish the themes config, and you will now see a new config located at `config/themes.php`, which will look like the following:

```
<?php

return [

    'themes_folder' => resource_path('views/themes'),
    'publish_assets' => true,
    'create_tables' => true

];
```

Now, you can choose an alternate location for your themes folder. By default this will be put into the `resources/views` folder; however, you can change that to any location you would like.

Additionally, you can set **publish_assets** to *true* or *false*, if it is set to *true* anytime the themes directory is scanned it will publish the `assets` folder in your theme to the public folder inside a new `themes` folder. Set this to *false* and this will no longer happen.

