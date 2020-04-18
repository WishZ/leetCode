package firstUniqChar

import "strings"

func firstUniqChar(s string) int {
	arr := strings.Split(s, "")
	oldWord := arr

	count := len(arr)
	word := [26]string{"q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m"}

	var resWordArr []string

	for i := 0; i < 26; i++ {
		isRepeat := 0
		for j := 0; j < count; j++ {
			if arr[j] == word[i] {
				isRepeat += 1
			}
		}
		if isRepeat == 1 {
			resWordArr = append(resWordArr, word[i])
		}
	}
	if len(resWordArr) > 0 {
		for k := 0; k < count; k++ {
			for m := 0; m < len(resWordArr); m++ {
				if resWordArr[m] == oldWord[k] {
					return k
				}
			}
		}
	}
	return -1
}
