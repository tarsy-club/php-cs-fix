<?php

$a = 1;

$x = [1, 2];

/**
 * Descriptiom.
 *
 * Deskription
 */

/**
 * Description.
 */

/** This should be a docblock */
/**
 * This should be a docblock
 * This should be a docblock
 * This should be a docblock.
 */
class example1
{
    /**
     * @var int
     */
    public $x;

    /**
     * Tiscription.
     *
     * @param int $x
     * @param string $y
     *
     * @throws \Exception
     */
    public function x(int $x, string $y)
    {
        /**
         * Discription.
         *
         * @var int
         * @var array $z          array zed
         * @var string $y1
         * @var \StdClass $stdClass    some standard class
         */
        $x1 = $x;
        /** This should be a docblock */
        $y1 = $y;
        $z1 = [[1, 2], 3];
        $stdClass = new \StdClass();
        [$x2, $y2] = [$y1, $x1];
        /** This should not be a docblock */
        foreach ($z1 as $key => $value) {
            echo $value;
        }
        // asterisk comment
        $a = 1;

        # hash comment
        $b = 2;

        /*
         * multi-line
         * comment
         */
        $c = 3;
        $st = 'x' . 123 . 'asd';
    }

    /**
     * @param int $x
     * @param string|null $y
     * @param string|null $z
     *
     * @return bool
     */
    public function no_superfluous_phpdoc_tags(int $x, ?string $y = 'default string', ?string $z = null): bool
    {
        $result = null !== $z;

        return $result && 'default string' !== $y;
    }
}
