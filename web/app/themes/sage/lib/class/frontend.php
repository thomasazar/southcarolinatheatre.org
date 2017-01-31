<?php

namespace Dbta\Frontend;

class Box
{
    public function __construct($acf_field = null)
    {
        $content = get_field($acf_field);

        if ($content) {
            $output  = '<article class="post half">';
            $output .= '<section class="post__content">';
            $output .= $content;
            $output .= '</section></article>';
            echo $output;
        }
    }
}

class Hero
{
    public function __construct()
    {
        $image = get_field('image');
        $text  = get_field('text');
        $link  = get_field('link');

        if ($image) {
            $output  = '<article class="hero">';
            $output .= '<a class="hero__link" href=" ' . $link . '">';
            $output .= '<div class="container">';
            $output .= '<section class="hero__text">';
            $output .= '<h2 class="hero__headline">' . $text . '</h2>';
            $output .= '</section>';
            $output .= '<section class="hero__focus">';
            $output .= '<img src="' . $image['sizes']['large'] . '" class="hero__img">';
            $output .= '</section></div></a></article>';
            echo $output;
        }
    }
}
