int score(String word) {
  //initialize score to 0
  int score = 0;
  word = word.toUpperCase();
  for (int i = 0; i < word.length; i++) {
    if (word[i] == 'A' ||
        word[i] == 'E' ||
        word[i] == 'I' ||
        word[i] == 'O' ||
        word[i] == 'U' ||
        word[i] == 'L' ||
        word[i] == 'N' ||
        word[i] == 'R' ||
        word[i] == 'S' ||
        word[i] == 'T') {
      score += 1;
    } else if (word[i] == 'D' || word[i] == 'G') {
      score += 2;
    } else if (word[i] == 'B' ||
        word[i] == 'C' ||
        word[i] == 'M' ||
        word[i] == 'P') {
      score += 3;
    } else if (word[i] == 'F' ||
        word[i] == 'H' ||
        word[i] == 'V' ||
        word[i] == 'W' ||
        word[i] == 'Y') {
      score += 4;
    } else if (word[i] == 'K') {
      score += 5;
    } else if (word[i] == 'J' || word[i] == 'X') {
      score += 8;
    } else if (word[i] == 'Q' || word[i] == 'Z') {
      score += 10;
    }
  }
  return score;
}
