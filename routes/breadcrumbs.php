<?php

// Home
Breadcrumbs::for('welcome', function ($trail) {
    $trail->push('Главная', route('welcome'));
});

// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('Welcome');
    $trail->push('About', route('about'));
});



// Home > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('welcome');
    foreach ($category->ancestors as $ancestor) {
        $trail->push($ancestor->title, route('category', $ancestor->slug));
    }
    $trail->push($category->title, route('category', $category->slug));
});

// Home > [Categories]
Breadcrumbs::for('product', function ($trail, $product, $category) {
    $trail->parent('category', $category);
    $trail->push($product->title, route('product', $product->slug));
});
