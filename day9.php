<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 9 : Regular Expression (regEx)
// Day 9 | IG : https://www.instagram.com/benjivrik/
// Subject :  Regular Expression (regEx)
// ----------------------------------------------------
//  what would be the output of this program ?

// match any expression in your input

// The syntax used for the regular expression for this Day 9 Q&A is  :  /pattern/modifier
// '/' is delimiter . ~ or # can also be used as delimiter
// a modifier specify how the search should be performed
// Let's work with i : for a case insensitive search ; 
// pattern is how the expression should look like
// The function preg_match($pattern, $string) allows you to check if the pattern has been matched in the 
// string given as parameter.  It returns 1 if there is a match and  0 if not.
// The function preg_match_all($pattern, $string) allows you to check how many matches for the specified pattern
// exists in the string given as parameter
// The function preg_replace($pattern, $replacement, $string) allows you to replace all the matches of the 
// specified pattern inside the string given as an input by the specified replacement
// Therefore for the exercice, let's replace all the matches of the specified word by REPLACEMENT.

$str="At Stunt, we believe that our services must be rendered upon 
three important pillars: customization, expertise, and transparency. 
We will carefully listen to your needs and provide relevant comments 
and advice as to what can be done to make your product the best it can be. 
Our partnerships with other professionals ensure that we produce the best possible outcome. 
Furthermore, we will always 
let you know how we intend to proceed with the programming of your product 
and include you in the process.";

// word to look for
$word = $_POST["word"];
$word = htmlspecialchars($word);

echo "<br><h4>Original sentence</h4><br>";
echo "$str <br><hr>";


// pattern
$pattern = "/$word/i";

// using preg_match_all() and preg_replace()
$result_cnt = preg_match_all($pattern,$str);

if($result_cnt > 0){
    echo "<br><span>The word $word appeard {$result_cnt} time(s) in the original content.</span><br><br>";
    $replaced = preg_replace($pattern, "REPLACEMENT", $str);
    echo "<hr><h4>Replacement</h4>";
    echo "<span><br>$replaced<br></span>";
}else{
    echo "<br><span>The word $word you entered was not found in the original statement.</span><br>";
}


?>