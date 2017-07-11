<?php

namespace App\Helpers;

class AdminUtil
{
    public static function btn($url, $icon, $title = null, $attributes = [], $label = null)
    {
        $button = '<a href="%s"%s><i class="fa %s"></i>%s</a>';

//        $attributes = array_merge(['class' => 'btn-primary'], $attributes);

        $attributes = self::mergeAttributes(['class' => 'btn btn-sm btn-primary tip', 'title' => $title], $attributes);

        return sprintf(
            $button,
            $url,
            self::getAttributeHtml($attributes),
            $icon,
            $label
        );
    }

    public static function btnEdit($url, $title = 'Edit', $attributes = [])
    {
//        $attributes = array_merge(['class' => 'btn-primary'], $attributes);

        return self::btn($url, 'fa-pencil', $title, $attributes);
    }

    public static function btnDelete($url, $title = 'Delete', $attributes = [])
    {
        $attributes = self::mergeAttributes(['class' => 'btn-danger confirm', 'title' => $title], $attributes);

        return self::btn($url, 'fa-trash-o', $title, $attributes);
    }

    public static function btnBar($url, $label, $icon = 'fa-plus')
    {
        return self::btn($url, $icon, false, ['class' => 'btn-panel'], $label);
    }

    public static function btnCancel($label = 'Cancel', $url = null, $attributes = [])
    {
        if ($url === null) {
            $url = url()->previous();
        }

        $link = '<a href="%s"%s>%s</a>';

        return sprintf(
            $link,
            $url,
            self::getAttributeHtml($attributes),
            $label
        );
    }
    
    public static function mergeAttributes($array1, $array2)
    {
        foreach ($array2 as $attr => $value) {
            if ($attr === 'class' && array_key_exists($attr, $array1)) {
                // if key exists push items into the list
                $array1[$attr] = $array1[$attr] . ' ' . $array2[$attr];
            } else if (!empty($value)) {
                // otherwise push into the array
                $array1[$attr] = $value;
            }
        }

        return $array1;
    }

    public static function getAttributeHtml($array)
    {
        $html = '';

        foreach ($array as $attr => $value) {
//            if ($value === '') {
//                $html .= ' ' . $attr;
//                continue;
//            }

            $html .= ' ' . $attr . '="';

            if ($value === true) {
                $html .= $attr;
            } else {
                $html .= $value;
            }

            $html .= '"';
        }

        return $html;
    }
}
