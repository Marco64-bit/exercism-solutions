<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $trimmed_name = trim($name);
        return $trimmed_name[0];
    }

    public function initial(string $name): string
    {
        $first_letter = HighSchoolSweetheart::firstLetter($name);
        $first_letter = strtoupper($first_letter) . ".";
        return $first_letter;
    }

    public function initials(string $name): string
    {
        $first_chars = explode(" ", $name);
        $get_initials = "";
        foreach($first_chars as $first_char) {
            $get_initials .= HighSchoolSweetheart::initial($first_char) . " ";
        }
        return trim($get_initials);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $get_pair = HighSchoolSweetheart::initials($sweetheart_a) . "  +  " . HighSchoolSweetheart::initials($sweetheart_b);
        return <<<END
                 ******       ******
               **      **   **      **
             **         ** **         **
            **            *            **
            **                         **
            **     $get_pair     **
             **                       **
               **                   **
                 **               **
                   **           **
                     **       **
                       **   **
                         ***
                          *
            END;
    }
}
