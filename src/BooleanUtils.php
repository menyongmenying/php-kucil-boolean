<?php

namespace Kucil;

use function is_bool;
use function rand;

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
        $isBool = is_bool($bool);
        return $isBool;
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
        $isBool = self::isBool($bool);
        return $isBool;
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
        
        $random = rand($min, $max);
        $random = (bool) $random;

        return $random;
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
        $null = null;
        $intF = 0;
        $intT = 1;

        $intBool = match ($bool) {
            false => $intF,
            true => $intT,
            default => $null
        };

        return $intBool;
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
        $intBool = self::toInt($bool);
        return $intBool;
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
        $null = null;
        $strFalse = 'false';
        $strTrue = 'true';

        $strBool = match ($bool) {
            null => $null,
            false => $strFalse,
            true => $strTrue
        };

        return $strBool;
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
        $strBool = self::toStr($bool);
        return $strBool;
    }
}