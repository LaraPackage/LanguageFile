<?php

namespace LaraPackage\LanguageFile;

class Creator
{

    /**
     * @param array|Iterator $iterable
     * @return string
     */
    public function make($iterable)
    {
        $start = '<?php' . PHP_EOL . PHP_EOL . 'return [' . PHP_EOL;

        if ($iterable instanceof \Traversable) $iterable = iterator_to_array($iterable);
        $middle = implode(PHP_EOL, array_map(function ($value, $key) {
            return "\t" . "'$key'" . ' => ' . "'$value',";
        }, $iterable, array_keys($iterable)));

        $end = PHP_EOL . '];';

        return $start . $middle . $end;
    }
}
