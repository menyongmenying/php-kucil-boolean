<?php

namespace Kucil;

use function \is_bool;
use function \rand;

/**
 * @author menyongmenying <menyongmenying.main@email.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
class BooleanUtils
{
    /**
     * Meneruskan hasil pemeriksaan apakah nilai yang diberikan bertipe data boolean atau tidak.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  mixed $bool Nilai yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool       Hasil pemeriksaan apakah nilai $bool bertipe data boolean atau tidak.     
     * 
     * @see    BooleanUtilsTest::testIsBool()
     * 
     * 
     */
    public static function isBool(mixed $bool = null): ?bool
    {
        return is_bool($bool);
    }

    

    /**
     * Meneruskan hasil pemeriksaan apakah nilai yang diberikan bertipe data boolean atau tidak.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  mixed $bool Nilai yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool       Hasil pemeriksaan apakah nilai $bool bertipe data boolean atau tidak.     
     * 
     * @see    BooleanUtilsTest::testIsBoolean()
     * 
     * 
     */
    public static function isBoolean(mixed $bool = null): ?bool
    {
        return self::isBool($bool);
    }



    /**
     * Meneruskan nilai boolean acak.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @return ?bool Nilai boolean acak.
     * 
     * @see    BooleanUtilsTest::testRandom()
     * 
     * 
     */
    public static function random(): ?bool
    {
        $min = 0;
        $max = 1;

        return (bool) rand($min, $max);
    }



    /**
     * Meneruskan hasil konversi boolean ke integer dari nilai boolean yang diberikan.
     * 
     * NOTE:
     * Jika nilai boolean yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?bool $bool Nilai boolean yang akan dijadikan objek konversi boolean ke integer.
     *
     * @return ?int        Hasil konversi boolean ke integer dari nilai $bool.
     * 
     * @see    BooleanUtilsTest::toInt()
     * 
     * 
     */
    public static function toInt(mixed $bool = null): ?int
    {
        if ($bool === null) {
            return null;
        }

        return (int) $bool;
    }



    /**
     * Meneruskan hasil konversi boolean ke integer dari nilai boolean yang diberikan.
     * 
     * NOTE:
     * Jika nilai boolean yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?bool $bool Nilai boolean yang akan dijadikan objek konversi boolean ke integer.
     *
     * @return ?int        Hasil konversi boolean ke integer dari nilai $bool.
     * 
     * @see    BooleanUtilsTest::toInteger()
     * 
     * 
     */
    public static function toInteger(?bool $bool = null): ?int
    {
        return self::toInt($bool);
    }



    /**
     * Meneruskan hasil konversi boolean ke string dari nilai boolean yang diberikan.
     * 
     * NOTE:
     * Jika nilai boolean yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?bool   $bool Nilai boolean yang akan dijadikan objek konversi boolean ke string.
     *
     * @return ?string       Hasil konversi boolean ke string dari nilai $bool.
     * 
     * @see    BooleanUtilsTest::testToStr()
     * 
     * 
     */
    public static function toStr(?bool $bool = null): ?string
    {
        $stringMap = [false => 'false', true => 'true'];

        if ($bool === null) {
            return null;
        }

        return $stringMap[$bool];
    }



    /**
     * Meneruskan hasil konversi boolean ke string dari nilai boolean yang diberikan.
     * 
     * NOTE:
     * Jika nilai boolean yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?bool   $bool Nilai boolean yang akan dijadikan objek konversi boolean ke string.
     *
     * @return ?string       Hasil konversi boolean ke string dari nilai $bool.
     * 
     * @see    BooleanUtilsTest::testToString()
     * 
     * 
     */
    public static function toString(?bool $bool = null): ?string
    {
        return self::toStr($bool);
    }
}