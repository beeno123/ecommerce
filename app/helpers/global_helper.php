<?php

use Illuminate\Support\Str;

if ((!function_exists('GenerateUniqueSlug'))) {
    function GenerateUniqueSlug($model, $name)
    {
        $model_class = "App\\Models\\$model";
        if (!class_exists($model_class)) {
            throw new \InvalidArgumentException('Model' . $model . 'not exist');
        }
        $slug = Str::slug($name);
        $count = 2;
        while ($model_class::where('slug', $slug)->exists()) {
            $slug == Str::slug($name) . '-' . $count;
            $count++;
        }
        return $slug;
    }
}
