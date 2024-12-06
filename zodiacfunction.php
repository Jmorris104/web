<?php
// Determines the zodiac sign based on the user's birth month
function getZodiacSign($birthMonth) {
    $zodiacSigns = [
        1 => 'Capricorn/Aquarius',
        2 => 'Aquarius/Pisces',
        3 => 'Pisces/Aries',
        4 => 'Aries/Taurus',
        5 => 'Taurus/Gemini',
        6 => 'Gemini/Cancer',
        7 => 'Cancer/Leo',
        8 => 'Leo/Virgo',
        9 => 'Virgo/Libra',
        10 => 'Libra/Scorpio',
        11 => 'Scorpio/Sagittarius',
        12 => 'Sagittarius/Capricorn'
    ];
    return $zodiacSigns[$birthMonth];
}
?>
