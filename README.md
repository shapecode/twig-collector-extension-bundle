# Shapecode - Twig Collector Bundle

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/b2a154f2-2757-44c5-b679-6a11e922292c/mini.png)](https://insight.sensiolabs.com/projects/b2a154f2-2757-44c5-b679-6a11e922292c)
[![Dependency Status](https://www.versioneye.com/user/projects/5589a7da306662001a00025f/badge.svg?style=flat)](https://www.versioneye.com/user/projects/5589a7da306662001a00025f)
[![Latest Stable Version](https://poser.pugx.org/shapecode/twig-collector-extension-bundle/v/stable)](https://packagist.org/packages/shapecode/twig-collector-extension-bundle) 
[![Total Downloads](https://poser.pugx.org/shapecode/twig-collector-extension-bundle/downloads)](https://packagist.org/packages/shapecode/twig-collector-extension-bundle) 
[![Latest Unstable Version](https://poser.pugx.org/shapecode/twig-collector-extension-bundle/v/unstable)](https://packagist.org/packages/shapecode/twig-collector-extension-bundle) 
[![License](https://poser.pugx.org/shapecode/twig-collector-extension-bundle/license)](https://packagist.org/packages/shapecode/twig-collector-extension-bundle)

## Install instructions

Via Composer

``` bash
$ composer require shapecode/twig-collector-extension-bundle
```

Enable the bundle in your kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Shapecode\Bundle\TwigCollectorBundle\ShapecodeTwigCollectorBundle(),
    );
}
```

## Usage

collect stuff over all templates

``` twig
{% collector stylesheets %}
<style>
    .body {
        margin-bottom: 10px;
    }
</style>
{% endcollector %}
```

... and output it at a specific line 

``` twig
{% collection stylesheets %}
```
