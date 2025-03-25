<?php
namespace App\Services;

/// <summary>
/// This class implements string comparison algorithm
/// based on character pair similarity
/// Source: http://www.catalysoft.com/articles/StrikeAMatch.html
/// </summary>

class SimilarityTool
{
    /**
     * Compares the two strings based on letter pair matches
     *
     * @param string $str1
     * @param string $str2
     * @return float The percentage match from 0.0 to 1.0 where 1.0 is 100%
     */
    public function compareStrings($str1, $str2)
    {
        $pairs1 = $this->wordLetterPairs(strtoupper($str1));
        $pairs2 = $this->wordLetterPairs(strtoupper($str2));

        $intersection = 0;
        $union = count($pairs1) + count($pairs2);

        foreach ($pairs1 as $pair1) {
            foreach ($pairs2 as $key => $pair2) {
                if ($pair1 === $pair2) {
                    $intersection++;
                    unset($pairs2[$key]); // Must remove the match to prevent "GGGG" from appearing to match "GG" with 100% success
                    break;
                }
            }
        }

        return (2.0 * $intersection) / $union;
    }

    /**
     * Gets all letter pairs for each individual word in the string
     *
     * @param string $str
     * @return array
     */
    private function wordLetterPairs($str)
    {
        $allPairs = [];
        $words = preg_split('/\s+/', $str);

        foreach ($words as $word) {
            if (!empty($word)) {
                $pairsInWord = $this->letterPairs($word);
                $allPairs = array_merge($allPairs, $pairsInWord);
            }
        }

        return $allPairs;
    }

    /**
     * Generates an array containing every two consecutive letters in the input string
     *
     * @param string $str
     * @return array
     */
    private function letterPairs($str)
    {
        $numPairs = strlen($str) - 1;
        $pairs = [];

        for ($i = 0; $i < $numPairs; $i++) {
            $pairs[] = substr($str, $i, 2);
        }

        return $pairs;
    }
}

