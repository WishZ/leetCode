package lengthOfLastWord

import "strings"

func lengthOfLastWord(s string) int {
	arr := strings.Split(s, " ")
	count := len(arr)
	var newArr []string

	for i := 0; i < count; i++ {
		if arr[i] != "" {
			newArr = append(newArr, arr[i])
		}
	}
	newCount := len(newArr)
	if newCount <= 0 {
		return 0
	}

	lastWord := newArr[newCount-1]
	return len(lastWord)
}
