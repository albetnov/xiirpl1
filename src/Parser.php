<?php

namespace Xii\Rpl1;

class Parser
{
    /**
     * Digunakan untuk mengembalikkan div element yang di proses dari array.
     *
     * @param array $data
     *
     * @return string
     */
    public static function parse(array $data): string
    {
        $output = '';

        foreach ($data as $key => $value) {
            $output .= <<<content
            <div class="item">
                <div class="padding">
                    <img
                        class="full-img border-image border-primary"
                        src="img/classes/{$value['gambar']}"
                        alt="{$key}"
                        title="{$key}"
                        loading="lazy"
                    />
                    <h3
                        class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0"
                    >
                        {$key}
                    </h3>
                    <p class="text-size-14 text-dark margin-bottom-10">
                        {$value['jabatan']}
                    </p>
                </div>
            </div>
            content;
        }

        return $output;
    }
}
